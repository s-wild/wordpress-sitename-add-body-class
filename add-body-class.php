// Add site title as a body class.
function site_name_body_class($classes) {
	global $blog_id;
	$current_blog_details = get_blog_details( array( 'blog_id' => $blog_id ) );
   $classes[] = sanitize_title($current_blog_details->blogname, 'unsetblogtitle');
   return $classes;
}

add_filter('body_class', 'site_name_body_class');
