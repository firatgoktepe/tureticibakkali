<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Organico
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
	<h2 class="comments-title">
		<?php
		$comments_number = get_comments_number();
		if ( '1' === $comments_number ) {
			/* translators: %s: post title */
			printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'organico' ), get_the_title() );
		} else {
			printf(
				/* translators: 1: number of comments, 2: post title */
				_nx(
					'%1$s Reply to &ldquo;%2$s&rdquo;',
					'%1$s Replies to &ldquo;%2$s&rdquo;',
					$comments_number,
					'comments title',
					'organico'
					),
				number_format_i18n( $comments_number ),
				get_the_title()
				);
		}
		?>
	</h2>

		<ol class="comment-list">
		<?php
		wp_list_comments(array('callback' => 'ftc_comments_list'));
		?>
	</ol>
	
	<div class="commentPaginate">
		<?php the_comments_pagination( array(
			'prev_text' => ftc_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . esc_html__( 'Previous', 'organico' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . esc_html__( 'Next', 'organico' ) . '</span>' . ftc_get_svg( array( 'icon' => 'arrow-right' ) ),
		) ); ?>
	</div>
<?php endif;

if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'organico' ); ?></p>

<?php
endif;
?>
<?php 
$aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                        'title_reply'=> '<span class="title">'.esc_html__('Leave A reply','organico').'</span>',
                        'comment_field' => '<div class="form-group comment-form-comment">
                                                <textarea rows="8" placeholder="'.esc_html__('Your Comment', 'organico').'" id="comment" class="form-control"  name="comment"'.$aria_req.'></textarea>
                                            </div>',
                        'fields' => apply_filters(
                         'comment_form_default_fields',
                       array(
                                 'author' => '<div class="form-group comment-form-author">
                                             <input type="text" placeholder="'.esc_html__('Your Name*', 'organico').'"   name="author" class="form-control" id="author" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' />
                                             </div>',
                                 'email' => ' <div class="form-group comment-form-email">
                                             <input id="email" placeholder="'.esc_html__('Your Email*', 'organico').'"  name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' />
                                             </div>',
                             )
       ),
                         'label_submit' => esc_html__('Post Comment', 'organico'),
       						// 'comment_notes_before' => '<div class="form-group">'.esc_html__('Your email address will not be published.','organico').'</div>',
       'comment_notes_after' => '',
                        );
						comment_form($comment_args);
						?>
</div><!-- #comments -->
