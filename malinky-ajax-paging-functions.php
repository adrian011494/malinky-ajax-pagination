<?php

if ( ! function_exists( 'malinky_is_blog_page' ) ) {

	/**
	 * Check if current page is the blog home page, archive or single.
	 * Archive includes category, tag, date, author pages, custom post types.
	 *
	 * @param bool $single Include is_single()
	 *
	 * @return bool
	 */
	function malinky_is_blog_page( $single = true )
	{

	    global $post;

	    if ( ! $single ) 
	    	return ( is_home() || is_archive() );

	    return ( is_home() || is_archive() || is_single() );

	}

}


if ( ! function_exists( 'malinky_ajax_paging_wp_query' ) ) {

	/**
	 * New WP_Query
	 *
	 * @param int $current_page The current page number
	 * @param arr $current_query The current query taken from $wp_query->query
	 */
	function malinky_ajax_paging_wp_query( $current_page, $current_query )
	{

		$posts_per_page = get_option( 'posts_per_page' );

		$offset = ( max( 1, $current_page ) - 1 ) * $posts_per_page;

		$args = array(
			'posts_per_page'	=> $posts_per_page,
			'offset'            => $offset
		);
		
		/**
		 * If we have a current query it will be in the format.
		 * [category_name] = football-projects or ['tag'] = drainage.
		 */
		if ($current_query) {
			$args = array_merge( $args, $current_query );
		}

		/**
		 * Debugging.
		 * return $args;
		 */

		return new WP_Query( $args );

	}

}