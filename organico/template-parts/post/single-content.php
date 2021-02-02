<?php 
global $post, $wp_query, $smof_data;
$post_format = get_post_format(); /* Video, Audio, Gallery, Quote */
$post_class = 'post-item hentry ';
$show_blog_thumbnail = isset($smof_data['ftc_blog_thumbnail']) && $smof_data['ftc_blog_thumbnail'];
set_post_views(get_the_ID());
?>
<article <?php post_class($post_class) ?>>

	<?php if( $post_format != 'quote' ): ?>

		<header class="post-img">
			<?php 
			
			if( $show_blog_thumbnail ){

				if( $post_format == 'gallery' || $post_format === false || $post_format == 'standard' ){
					?>
					<div class="blog-image <?php echo esc_attr($post_format); ?> <?php echo esc_attr($post_format == 'gallery')?'loading owl-carousel':''; ?>">
						<?php 
						if( $post_format == 'gallery' ){
							$gallery = get_post_meta($post->ID, 'ftc_gallery', true);
							$gallery_ids = explode(',', $gallery);
							if( is_array($gallery_ids) && has_post_thumbnail() ){
								array_unshift($gallery_ids, get_post_thumbnail_id());
							}
							foreach( $gallery_ids as $gallery_id ){
								echo wp_get_attachment_image( $gallery_id, 'ftc_blog_thumb', 0, array('class' => 'thumbnail-blog') );
							}

							if( !has_post_thumbnail() && empty($gallery) ){ /* Fix date position */
								$show_blog_thumbnail = 0;
							}
						}

						if( $post_format === false || $post_format == 'standard' ){
							if( has_post_thumbnail() ){
								the_post_thumbnail('ftc_blog_thumb', array('class' => 'thumbnail-blog'));
							}
							else{ /* Fix date position */
								$show_blog_thumbnail = 0;
							}
						}
						?>
					</div>
					<?php
				}
				
				if( $post_format == 'video' ){
					$video_url = get_post_meta($post->ID, 'ftc_video_url', true);
					if( $video_url != '' ){
						print_r(do_shortcode('[ftc_video src="'.esc_url($video_url).'"]'));
					}
				}
				
				if( $post_format == 'audio' ){
					$audio_url = get_post_meta($post->ID, 'ftc_audio_url', true);
					if( strlen($audio_url) > 4 ){
						$file_format = substr($audio_url, -3, 3);
						if( in_array($file_format, array('mp3', 'ogg', 'wav')) ){
							print_r(do_shortcode('[audio '.$file_format.'="'.$audio_url.'"]'));
						}
						else{
							print_r(do_shortcode('[ftc_soundcloud url="'.$audio_url.'" width="100%" height="166"]'));
						}
					}
				}

			}
			?>
			<!-- Blog Date -->
		</header>
		<div class="post-info">
			
			<div class="entry-info">
				<div class="info-category">

					<!-- Blog Title -->
					<?php if(isset($smof_data['ftc_blog_title']) && $smof_data['ftc_blog_title'] ): ?>
						<h3 class="product_title entry-title">
							<?php the_title(); ?>
						</h3>
					<?php endif; ?>
					<!-- Blog Date -->
					<!-- Blog Date Time -->
					<?php if(isset($smof_data['ftc_blog_date']) && $smof_data['ftc_blog_date'] && ( $show_blog_thumbnail || ( $post_format != 'gallery' && $post_format !== false && $post_format != 'standard' ) ) ) : ?>
						<span class="date-time">
							<?php echo get_the_time(get_option('date_format')); ?>
						</span>
					<?php endif; ?>
					<?php 
					$categories_list = get_the_category_list(', ');
					if ( ($categories_list && isset($smof_data['ftc_blog_details_categories']) && $smof_data['ftc_blog_details_categories']) || isset($smof_data['ftc_blog_details_author_box']) && $smof_data['ftc_blog_details_author_box'] ): 
						?>
					<!-- Blog Categories -->
					<?php if ( $categories_list && isset($smof_data['ftc_blog_details_categories']) && $smof_data['ftc_blog_details_categories'] ): ?>
						<div class="caftc-link">
							<span class="cat-links"><?php echo trim($categories_list); ?></span>
						</div>
					<?php endif; ?>

				<!-- Blog View -->
				<?php if(isset($smof_data['ftc_blog_details_count_view']) && $smof_data['ftc_blog_details_count_view'] ): ?>
					<span class="count-view">
						<?php esc_html_e('View: ','organico');?>
						<?php echo get_post_views(get_the_ID()); ?></span>
					<?php endif; ?>

				<?php endif; ?>        

			</div>
			<div class="entry-summary">
				<div class="full-content"><?php the_content(); ?></div>
				<div class="text-social-share"><span class="text-share1"><?php esc_html_e('Share it on:','organico');?></span>
				<ul class="ftc-social-sharing">
							<li class="facebook">
								<a href="https://www.facebook.com/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-facebook"></i> Share</a>
							</li>
							<li class="twitter">
								<a href="https://twitter.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-twitter"></i> Tweet</a>
							</li>

							<li class="google-plus">
								<a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-google-plus"></i> Google+</a>
							</li>

							<li class="pinterest">
								<?php $image_link = wp_get_attachment_url(get_post_thumbnail_id()); ?>
								<a href="https://pinterest.com/pin/create/button/?url=<?php echo esc_url(get_permalink()); ?>&amp;media=<?php echo esc_url($image_link); ?>" target="_blank"><i class="fa fa-pinterest"></i> Pinterest</a>
							</li>

						</ul>
						</div>
						<?php wp_link_pages(); ?>
			</div>
			<!-- Blog Tags -->
			<?php if(isset($smof_data['ftc_blog_details_author_box']) && $smof_data['ftc_blog_details_author_box'] || isset($smof_data['ftc_blog_details_author_box']) && $smof_data['ftc_blog_details_author_box'] ): ?>
			<div class="author-tag">
					<?php   
						$tags_list = get_the_tag_list('', ' '); 
						if ( $tags_list && isset($smof_data['ftc_blog_details_tags']) && $smof_data['ftc_blog_details_tags'] ):?>
						<span class="tags-link">
							<span class="tag-links">
								<i class="fa fa-tags" aria-hidden="true"></i> <?php echo trim($tags_list); ?>
							</span>
						</span>
					<?php endif; ?>
					<!-- Blog Author -->
					<?php if(isset($smof_data['ftc_blog_details_author_box']) && $smof_data['ftc_blog_details_author_box'] ): ?>
						<span class="vcard author"><?php esc_html_e('Author:','organico');?><?php the_author_posts_link(); ?></span>
					<?php endif; ?>	
			</div>
			<?php endif; ?>	
		</div>
	</div>

<?php else: /* Post format is quote */ ?>
	
	<blockquote class="blockquote-bg">
		<?php 
		$quote_content = get_the_excerpt();
		if( !$quote_content ){
			$quote_content = get_the_content();
		}
		print_r(do_shortcode($quote_content));
		?>
	</blockquote>

	<div class="blockquote-meta">

		<!-- Blog Author -->
		<?php if(isset($smof_data['ftc_blog_author']) && $smof_data['ftc_blog_author'] ): ?>
			<span class="vcard author"><?php the_author_posts_link(); ?></span>
		<?php endif; ?>	
		<div class="post-info">
			
			<div class="entry-info">
				<div class="info-category">

					<!-- Blog Title -->
					<?php if(isset($smof_data['ftc_blog_title']) && $smof_data['ftc_blog_title'] ): ?>
						<h3 class="product_title entry-title">
							<?php the_title(); ?>
						</h3>
					<?php endif; ?>
					<!-- Blog Date -->
					<!-- Blog Date Time -->
					<?php if(isset($smof_data['ftc_blog_date']) && $smof_data['ftc_blog_date'] && ( $show_blog_thumbnail || ( $post_format != 'gallery' && $post_format !== false && $post_format != 'standard' ) ) ) : ?>
						<span class="date-time">
							<?php echo get_the_time(get_option('date_format')); ?>
						</span>
					<?php endif; ?>
					<?php 
					$categories_list = get_the_category_list(', ');
					if ( ($categories_list && isset($smof_data['ftc_blog_details_categories']) && $smof_data['ftc_blog_details_categories']) || isset($smof_data['ftc_blog_details_author_box']) && $smof_data['ftc_blog_details_author_box'] ): 
						?>
					<!-- Blog Categories -->
					<?php if ( $categories_list && isset($smof_data['ftc_blog_details_categories']) && $smof_data['ftc_blog_details_categories'] ): ?>
						<div class="caftc-link">
							<span class="cat-links"><?php echo trim($categories_list); ?></span>
						</div>
					<?php endif; ?>

				<!-- Blog View -->
				<?php if(isset($smof_data['ftc_blog_details_count_view']) && $smof_data['ftc_blog_details_count_view'] ): ?>
					<span class="count-view">
						<?php esc_html_e('View: ','organico');?>
						<?php echo get_post_views(get_the_ID()); ?></span>
					<?php endif; ?>

				<?php endif; ?>        

			</div>
			<div class="entry-summary">
				<div class="full-content"><?php the_content(); ?></div>
				<div class="text-social-share"><span class="text-share1"><?php esc_html_e('Share it on:','organico');?></span>
				<ul class="ftc-social-sharing">
							<li class="facebook">
								<a href="https://www.facebook.com/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-facebook"></i> Share</a>
							</li>
							<li class="twitter">
								<a href="https://twitter.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-twitter"></i> Tweet</a>
							</li>

							<li class="google-plus">
								<a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-google-plus"></i> Google+</a>
							</li>

							<li class="pinterest">
								<?php $image_link = wp_get_attachment_url(get_post_thumbnail_id()); ?>
								<a href="https://pinterest.com/pin/create/button/?url=<?php echo esc_url(get_permalink()); ?>&amp;media=<?php echo esc_url($image_link); ?>" target="_blank"><i class="fa fa-pinterest"></i> Pinterest</a>
							</li>

						</ul>
						</div>
						<?php wp_link_pages(); ?>
			</div>
			<!-- Blog Tags -->
			<?php if(isset($smof_data['ftc_blog_details_author_box']) && $smof_data['ftc_blog_details_author_box']): ?>
			<div class="author-tag">
					<?php   
						$tags_list = get_the_tag_list('', ' '); 
						if ( $tags_list && isset($smof_data['ftc_blog_details_tags']) && $smof_data['ftc_blog_details_tags'] ):?>
						<span class="tags-link">
							<span class="tag-links">
								<i class="fa fa-tags" aria-hidden="true"></i> <?php echo trim($tags_list); ?>
							</span>
						</span>
					<?php endif; ?>
					<!-- Blog Author -->
					<?php if(isset($smof_data['ftc_blog_details_author_box']) && $smof_data['ftc_blog_details_author_box'] ): ?>
						<span class="vcard author"><?php esc_html_e('Author:','organico');?><?php the_author_posts_link(); ?></span>
					<?php endif; ?>	
			</div>
			<?php endif; ?>	
		</div>
	</div>
	</div>

<?php endif; ?>

</article>
<?php
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;?>
<!-- Related Posts-->
<?php 
if( !is_singular('ftc_feature') && isset($smof_data['ftc_blog_details_related_posts']) && $smof_data['ftc_blog_details_related_posts'] ){
	get_template_part('template-parts/post/related-posts');
}
?>