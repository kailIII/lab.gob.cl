<?php

// Visual editor
	add_editor_style();

// Menus
	register_nav_menu( 'main'	, 'Principal');
	register_nav_menu( 'footer'	, 'Footer');

// Thumbnails
  add_theme_support( 'post-thumbnails' );
  add_image_size( '640x480', 640, 480, true );
  add_image_size( '350W', 350);
  add_image_size( '1024W', 1024);

// Video Player
add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);
	function my_embed_oembed_html($html, $url, $attr, $post_id) {
	return '<div class="player">' . $html . '</div>';
}

	// add category nicenames in body and post class
		function category_id_class( $classes ) {
			global $post;
			foreach ( get_the_category( $post->ID ) as $category ) {
				$classes[] = 'category-'.$category->category_nicename;
			}
			return $classes;
		}

		add_filter( 'post_class', 'category_id_class' );
		add_filter( 'body_class', 'category_id_class' );

	// Gallery

	add_shortcode('gallery', 'my_gallery_shortcode');

	function my_gallery_shortcode($attr) {
	  $post = get_post();
		static $instance = 0;
		$instance++;

		if ( ! empty( $attr['ids'] ) ) {
		    if ( empty( $attr['orderby'] ) )
		        $attr['orderby'] = 'post__in';
		    $attr['include'] = $attr['ids'];
		}

		$output = apply_filters('post_gallery', '', $attr);

		if ( $output != '' )
		    return $output;

		if ( isset( $attr['orderby'] ) ) {
		    $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
		    if ( !$attr['orderby'] )
		        unset( $attr['orderby'] );
		}

		extract(shortcode_atts(array(
		    'order'      => 'ASC',
		    'orderby'    => 'menu_order ID',
		    'id'         => $post->ID,
		    'itemtag'    => 'li',
		    'icontag'    => '',
		    'captiontag' => '',
		    'columns'    => 3,
		    'size'       => '350w',
		    'zoomsize'       => 'large',
		    'include'    => '',
		    'exclude'    => ''
		), $attr));

		$id = intval($id);

		if ( 'RAND' == $order )
		    $orderby = 'none';

		if ( !empty($include) ) {
		    $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

		    $attachments = array();
		    foreach ( $_attachments as $key => $val ) {
		        $attachments[$val->ID] = $_attachments[$key];
		    }
		} elseif ( !empty($exclude) ) {
		    $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
		} else {
		    $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
		}

		if ( empty($attachments) )
		    return '';

		if ( is_feed() ) {
		    $output = "\n";
		    foreach ( $attachments as $att_id => $attachment )
		        $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
		    return $output;
		}

		$output = "<ul class='gallery'>";
		$output .= "\n\t\t";

		foreach ( $attachments as $id => $attachment ) {

				$src = wp_get_attachment_image_src($id, $size)[0];
				$zoom = wp_get_attachment_image_src($id, $zoomsize)[0];
				$link = get_attachment_link($id);
				$title = $attachment->post_title;
				$caption = $attachment->post_excerpt;
				$description = $attachment->post_content;

				// Full Featured
				// $imagetag = '<figure><a href="'.$zoom.'" rel="gallery" title="'.$caption.'" class="zoom"><img src="'.$src.'" alt="'.$title.'" /></a><figcaption>'.$description.'</figcaption></figure>	';

				// Simple
				// $imagetag = '<a href="'.$zoom.'" rel="gallery" title="'.$caption.'" class="zoom"><img src="'.$src.'" alt="'.$title.'" /></a>';

				if ($caption=='') {
					$imagetag = '<figure><img src="'.$src.'" alt="'.$title.'" /></figure>';
				}else {
					$imagetag = '<figure><img src="'.$src.'" alt="'.$title.'" /><figcaption>'.$caption.'</figcaption></figure>';
				}


		    $output .= "<$itemtag>";
				$output .= "\n\t\t\t";
				$output .= "$imagetag";
				$output .= "\n\t\t";
		    $output .= "</$itemtag>";
		    $output .= "\n\t\t";
		}

		$output .= "</ul>";

		return $output;
	}

?>
