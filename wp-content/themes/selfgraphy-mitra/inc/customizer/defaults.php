<?php
/**
 * Customizer default options
 *
 * @package Theme Palace
 * @subpackage Selfgraphy
 * @since Selfgraphy 1.0.0
 * @return array An array of default values
 */

function selfgraphy_get_default_theme_options() {
	$theme_data = wp_get_theme();
	$selfgraphy_default_options = array(
		// Color Options
		'header_title_color'			=> '#2a2e43',
		'header_tagline_color'			=> '#82868b',
		'header_txt_logo_extra'			=> 'show-all',
		
		// breadcrumb
		'breadcrumb_enable'				=> true,
		'breadcrumb_separator'			=> '/',
		
		// layout 
		'site_layout'         			=> 'wide',
		'sidebar_position'         		=> 'right-sidebar',
		'post_sidebar_position' 		=> 'right-sidebar',
		'page_sidebar_position' 		=> 'right-sidebar',
		'nav_search_enable'				=> true,

		// excerpt options
		'long_excerpt_length'           => 25,
		'read_more_text'           		=> esc_html__( '&#1575;&#1583;&#1575;&#1605;&#1607; &#1605;&#1591;&#1604;&#1576;', 'selfgraphy' ),
		
		// pagination options
		'pagination_enable'         	=> true,
		'pagination_type'         		=> 'default',

		// footer options
		'copyright_text'           		=> sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s. ', '1: Year, 2: Site Title with home URL', 'selfgraphy' ), '[the-year]', '[site-link]' ) . esc_html( $theme_data->get( 'Name') ) . '&nbsp;' . esc_html__( 'by', 'selfgraphy' ). '&nbsp;<a target="_blank" href="'. esc_url( $theme_data->get( 'AuthorURI' ) ) .'">'. esc_html( ucwords( $theme_data->get( 'Author' ) ) ) .'</a>',
		'scroll_top_visible'        	=> false,
		'footer_social_visible'        	=> true,

		// reset options
		'reset_options'      			=> false,
		
		// homepage options
		'enable_frontpage_content' 		=> false,

		// blog/archive options
		'your_latest_posts_title' 		=> esc_html__( '&#1608;&#1576;&#1604;&#1575;&#1711;', 'selfgraphy' ),
		'hide_date' 					=> false,
		'hide_author' 					=> false,
		'hide_category'					=> false,

		// single post theme options
		'single_post_hide_date' 		=> false,
		'single_post_hide_author'		=> false,
		'single_post_hide_category'		=> false,
		'single_post_hide_tags'			=> false,

		/* Front Page */

		// details
		'details_position'			=> esc_html__( '&#1591;&#1585;&#1575;&#1581; / &#1578;&#1608;&#1587;&#1593;&#1607; &#1583;&#1607;&#1606;&#1583;&#1607; &#1608;&#1576;', 'selfgraphy' ),
		'details_social_enable'	=> false,
		'details_section_enable' => false,

		// service
		'service_section_enable'		=> false,
		'service_title'					=> esc_html__( '&#1582;&#1583;&#1605;&#1575;&#1578; &#1605;&#1606;', 'selfgraphy' ),

		// About
		'about_section_enable'			=> false,
		'about_btn_title'				=> esc_html__( '&#1605;&#1588;&#1575;&#1607;&#1583;&#1607; &#1585;&#1586;&#1608;&#1605;&#1607;', 'selfgraphy' ),
		'skill_section_enable'			=> false,

		// work
		'work_section_enable'			=> false,
		'work_title'					=> esc_html__( '&#1578;&#1580;&#1575;&#1585;&#1576; &#1705;&#1575;&#1585;&#1740; &#1605;&#1606;', 'selfgraphy' ),

		// career
		'career_section_enable'			=> false,
		'career_title'					=> esc_html__( '&#1583;&#1608;&#1585;&#1607; &#1607;&#1575;&#1740; &#1570;&#1605;&#1608;&#1586;&#1588;&#1740; &#1711;&#1584;&#1585;&#1575;&#1606;&#1583;&#1607; &#1588;&#1583;&#1607;', 'selfgraphy' ),
		'career_custom_btn'				=> esc_html__( '&#1605;&#1588;&#1575;&#1607;&#1583;&#1607; &#1607;&#1605;&#1607; &#1605;&#1583;&#1575;&#1585;&#1705;', 'selfgraphy' ),
		'career_custom_btn_link'			=> '#',

		// portfolio
		'portfolio_section_enable'			=> false,
		'portfolio_title'					=> esc_html__( '&#1606;&#1605;&#1608;&#1606;&#1607; &#1705;&#1575;&#1585;&#1607;&#1575;&#1740; &#1605;&#1606;', 'selfgraphy' ),
		'portfolio_btn_label'				=> esc_html__( '&#1605;&#1588;&#1575;&#1607;&#1583;&#1607; &#1607;&#1605;&#1607; &#1606;&#1605;&#1608;&#1606;&#1607; &#1705;&#1575;&#1585;&#1607;&#1575;', 'selfgraphy' ),
		'portfolio_btn_link'				=> '#',

		// call to action
		'cta_section_enable'			=> false,
		'cta_btn_title'					=> esc_html__( '&#1605;&#1606; &#1585;&#1575; &#1575;&#1587;&#1578;&#1582;&#1583;&#1575;&#1605; &#1705;&#1606;&#1740;&#1583;', 'selfgraphy' ),

		// contact
		'contact_section_enable'			=> false,

		// blog
		'blog_section_enable'			=> false,
		'blog_title'					=> esc_html__( '&#1662;&#1587;&#1578; &#1607;&#1575;&#1740; &#1608;&#1576;&#1604;&#1575;&#1711; &#1605;&#1606;', 'selfgraphy' ),
		'blog_btn_title'				=> esc_html__( '&#1605;&#1588;&#1575;&#1607;&#1583;&#1607; &#1607;&#1605;&#1607; &#1662;&#1587;&#1578; &#1607;&#1575;&#1740; &#1608;&#1576;&#1604;&#1575;&#1711;', 'selfgraphy' ),
		'blog_btn_url'					=> '#',
	);

	$output = apply_filters( 'selfgraphy_default_theme_options', $selfgraphy_default_options );

	// Sort array in ascending order, according to the key:
	if ( ! empty( $output ) ) {
		ksort( $output );
	}

	return $output;
}