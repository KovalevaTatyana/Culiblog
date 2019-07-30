<?php 
require_once(get_template_directory() . '/inc/connection_styles_and_scripts.php');
require_once(get_template_directory() . '/inc/theme_setup.php');
require_once(get_template_directory() . '/inc/connection-menu/register-menu.php');
require_once(get_template_directory() . '/inc/connection-menu/sidebar-menu.php');
require_once(get_template_directory() . '/inc/changes.php');

function my_navigation_template( $template, $class ){
	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}
the_posts_pagination( array(
	'end_size' => 2,
) ); 
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );



function wpse_11826_search_by_title( $search, $wp_query ) {
    if ( ! empty( $search ) && ! empty( $wp_query->query_vars['search_terms'] ) ) {
        global $wpdb;

        $q = $wp_query->query_vars;
        $n = ! empty( $q['exact'] ) ? '' : '%';

        $search = array();

        foreach ( ( array ) $q['search_terms'] as $term )
            $search[] = $wpdb->prepare( "$wpdb->posts.post_title LIKE %s", $n . $wpdb->esc_like( $term ) . $n );

        if ( ! is_user_logged_in() )
            $search[] = "$wpdb->posts.post_password = ''";

        $search = ' AND ' . implode( ' AND ', $search );
    }

    return $search;
}

add_filter( 'posts_search', 'wpse_11826_search_by_title', 10, 2 );


add_filter( 'category_link', function($a){
	return str_replace( 'category/', '', $a );
}, 99 );