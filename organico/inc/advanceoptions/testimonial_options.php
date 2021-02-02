<?php 
$options = array();

$options[] = array(
				'id'		=> 'gravatar_email'
				,'label'	=> esc_html__('Gravatar Email Address', 'organico')
				,'desc'		=> esc_html__('Enter in an e-mail address, to use a Gravatar, instead of using the "Featured Image". You have to remove the "Featured Image".', 'organico')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'byline'
				,'label'	=> esc_html__('Byline', 'organico')
				,'desc'		=> esc_html__('Enter a byline for the customer giving this testimonial (for example: "CEO of ThemeFTC").', 'organico')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'url'
				,'label'	=> esc_html__('URL', 'organico')
				,'desc'		=> esc_html__('Enter a URL that applies to this customer (for example: http://themeftc.com/).', 'organico')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'rating'
				,'label'	=> esc_html__('Rating', 'organico')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
						'-1'	=> esc_html__('no rating', 'organico')
						,'0'	=> esc_html__('0 star', 'organico')
						,'0.5'	=> esc_html__('0.5 star', 'organico')
						,'1'	=> esc_html__('1 star', 'organico')
						,'1.5'	=> esc_html__('1.5 star', 'organico')
						,'2'	=> esc_html__('2 stars', 'organico')
						,'2.5'	=> esc_html__('2.5 stars', 'organico')
						,'3'	=> esc_html__('3 stars', 'organico')
						,'3.5'	=> esc_html__('3.5 stars', 'organico')
						,'4'	=> esc_html__('4 stars', 'organico')
						,'4.5'	=> esc_html__('4.5 stars', 'organico')
						,'5'	=> esc_html__('5 stars', 'organico')
				)
			);
?>