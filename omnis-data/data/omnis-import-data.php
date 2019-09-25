<?php

function omnis_ocdi_import_files() {
	$_templates_notice = esc_html__( 'After you import this demo, you will have to set this template in Theme Options -> Templates. Also make sure all \'Attached Items\' are set in template Page Options.', 'pt-ocdi' );
	return array(
        // templates
		array(
			'import_file_name'           => esc_html__('Post - Large Side Thumbnail', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Post Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/post/post_large-thumb-side.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/post/post_large-thumb-side.jpg',
			'import_notice'              => $_templates_notice,
			'attached_elements_settings' => array(
				wp_kses( __('<span>(Element) Titlebar - Split (Side Image)</span> for Title Bar -> Title Bar Elements', 'pt-ocdi'), array('span' => array()) ),
				wp_kses( __('<span>(Font) Playfair Display</span> for Font Manager', 'pt-ocdi'), array('span' => array()) ),
			),
            'preview_url'                => 'https://demo.loprd.pl/omnis/give-us-any-rule-well-break-it/?omnis_template=2543',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Post - Splitted', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Post Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/post/post_splitted.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/post/post_splitted.jpg',
			'import_notice'              => $_templates_notice,
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/give-us-any-rule-well-break-it/?omnis_template=3129',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Post - 3 Columns', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Post Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/post/post_3-columns.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/post/post_3-columns.jpg',
			'import_notice'              => $_templates_notice,
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/give-us-any-rule-well-break-it/?omnis_template=584',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Post - Dark, Full Width Titlebar V-Bottom (880px)', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Post Template', 'Dark'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/post/post_full-width-titlebar_dark.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/post/post_full-width-titlebar_dark.jpg',
			'import_notice'              => $_templates_notice,
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/give-us-any-rule-well-break-it/?omnis_template=554',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Post - Dark Pinned Titlebar (100%)', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Post Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/post/post_dark-pinned-titlebar-full-width.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/post/post_dark-pinned-titlebar-full-width.jpg',
			'import_notice'              => $_templates_notice,
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/give-us-any-rule-well-break-it/?omnis_template=604',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Post - Classic w/ Sidebar', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Post Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/post/post_classic-w-sidebar.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/post/post_classic-w-sidebar.jpg',
			'import_notice'              => $_templates_notice,			
			'attached_elements_settings' => array(
				wp_kses( __('<span>(Element) Titlebar - Meta (Categories) on Top - for Classic with Sidebar</span> for Title Bar -> Title Bar Elements', 'pt-ocdi'), array('span' => array()) ),
			),
            'preview_url'                => 'https://demo.loprd.pl/omnis/give-us-any-rule-well-break-it/?omnis_template=530',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Post - Side Headers', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Post Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/post/post_side-headers.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/post/post_side-headers.jpg',
			'import_notice'              => $_templates_notice,			
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/give-us-any-rule-well-break-it/?omnis_template=440',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Post - Centered Thumbnail, Splited Content', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Post Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/post/post_titlebar-centered-large-thumb.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/post/post_titlebar-centered-large-thumb.jpg',
			'import_notice'              => $_templates_notice,			
			'attached_elements_settings' => array(
				wp_kses( __('<span>(Media) three_figures_f_light.png</span> for Title [vc_row] background', 'pt-ocdi'), array('span' => array()) ),
			),
            'preview_url'                => 'https://demo.loprd.pl/omnis/give-us-any-rule-well-break-it/?omnis_template=409',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Post - Dark Content, Rounded Thumbnail (880px)', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Post Template', 'Dark'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/post/post_dark-rounded-thumb.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/post/post_dark-rounded-thumb.jpg',
			'import_notice'              => $_templates_notice,			
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/give-us-any-rule-well-break-it/?omnis_template=324',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Post - Boxed Content', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Post Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/post/post_boxed-content.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/post/post_boxed-content.jpg',
			'import_notice'              => $_templates_notice,
			'attached_elements_settings' => array(
				wp_kses( __('<span>(Font) Playfair Display</span> for Font Manager', 'pt-ocdi'), array('span' => array()) ),
			),
            'preview_url'                => 'https://demo.loprd.pl/omnis/give-us-any-rule-well-break-it/?omnis_template=353',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Post - Extended Titlebar, Side Content', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Post Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/post/post_extended-centered-titlebar.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/post/post_extended-centered-titlebar.jpg',
			'import_notice'              => $_templates_notice,			
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/give-us-any-rule-well-break-it/?omnis_template=238',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Post - Shifted Title and Content', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Post Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/post/post_shifted-content.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/post/post_shifted-content.jpg',
			'import_notice'              => $_templates_notice,			
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/give-us-any-rule-well-break-it/?omnis_template=158',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Post - Side Vertical Headers (1200px)', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Post Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/post/post_side-vertical-headers.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/post/post_side-vertical-headers.jpg',
			'import_notice'              => $_templates_notice,			
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/give-us-any-rule-well-break-it/?omnis_template=114',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Post - Full Width Thumb (880px)', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Post Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/post/post_full-width-thumb.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/post/post_full-width-thumb.jpg',
			'import_notice'              => $_templates_notice,			
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/give-us-any-rule-well-break-it/?omnis_template=23',
            'type'                       => 'template',
		),

		array(
			'import_file_name'           => esc_html__('Project - w/ Introduction', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Portfolio Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/portfolio/portfolio_w-introduction.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/portfolio/portfolio_w-introduction.jpg',
			'import_notice'              => $_templates_notice,
			'attached_elements_settings' => array(
				wp_kses( __('<span>(Element) Titlebar - Project Intoduction</span> for Title Bar -> Title Bar Elements', 'pt-ocdi'), array('span' => array()) ),
				wp_kses( __('<span>(Element) Project – Meta Data Column</span> for Extra Content (optional)', 'pt-ocdi'), array('span' => array()) ),
				wp_kses( __('<span>(Font) Playfair Display</span> for Font Manager', 'pt-ocdi'), array('span' => array()) ),
			),
            'preview_url'                => 'https://demo.loprd.pl/omnis/project/al-branding/?omnis_template=7985',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Project - Sticky Sidebar', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Portfolio Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/portfolio/portfolio_sticky-sidebar.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/portfolio/portfolio_sticky-sidebar.jpg',
			'import_notice'              => $_templates_notice,
			'attached_elements_settings' => array(
				wp_kses( __('<span>(Element) Project – Meta Data Column</span> for Extra Content (optional)', 'pt-ocdi'), array('span' => array()) ),
			),
            'preview_url'                => 'https://demo.loprd.pl/omnis/project/al-branding/?omnis_template=4732',
            'type'                       => 'template',
		),

		
		array(
			'import_file_name'           => esc_html__('Product - Gallery Vertical', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Product Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/product/product_vertical-gallery.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/product/product_vertical-gallery.jpg',
			'import_notice'              => $_templates_notice,
			'attached_elements_settings' => array(
				wp_kses( __('<span>(Font) Playfair Display</span> for Font Manager', 'pt-ocdi'), array('span' => array()) ),
			),
            'preview_url'                => 'https://demo.loprd.pl/omnis/product/journal/?omnis_template=8028',
            'type'                       => 'template',
		),
		
		array(
			'import_file_name'           => esc_html__('Template - Dark (880px)', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Post Template', 'Page Template', 'Dark'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/template/template_default-dark-880px.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/template/template_default-dark-880px.jpg',
			'import_notice'              => $_templates_notice,			
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/give-us-any-rule-well-break-it/?omnis_template=1101',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Template - 880px', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Post Template', 'Page Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/template/template_default-880px.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/template/template_default-880px.jpg',
			'import_notice'              => $_templates_notice,
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/give-us-any-rule-well-break-it/?omnis_template=0',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Template - No Titlebar', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Page Template', 'Product Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/template/template_no-titlebar.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/template/template_no-titlebar.jpg',
			'import_notice'              => $_templates_notice,
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/product/journal/?omnis_template=1332',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Template - Alternative Body BG', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Page Template', 'Post Template', 'Archive Template', 'Search Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/template/template_alt-bg.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/template/template_alt-bg.jpg',
			'import_notice'              => $_templates_notice,
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/author/yeroo/?omnis_template=849',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Template - Dark (100%)', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Page Template', 'Post Template', 'Archive Template', 'Search Template', 'Dark'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/template/template_dark-100percent.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/template/template_dark-100percent.jpg',
			'import_notice'              => $_templates_notice,
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/author/yeroo/?omnis_template=1697',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Template - Dark', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Page Template', 'Post Template', 'Archive Template', 'Search Template', 'Dark'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/template/template_dark.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/template/template_dark.jpg',
			'import_notice'              => $_templates_notice,
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/author/yeroo/?omnis_template=737',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Template - 100% Width', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Page Template', 'Post Template', 'Archive Template', 'Search Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/template/template_100percent.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/template/template_100percent.jpg',
			'import_notice'              => $_templates_notice,
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/author/yeroo/?omnis_template=682',
            'type'                       => 'template',
		),

		array(
			'import_file_name'           => esc_html__('Archive/Search - Rounded Section', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Archive Template', 'Search Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/archive-search/archive-search_rounded-section.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/archive-search/archive-search_rounded-section.jpg',
			'import_notice'              => $_templates_notice,
			'attached_elements_settings' => array(
				wp_kses( __('<span>(Media) pills_bg_top_f-dark.png</span> for Title [vc_section] background', 'pt-ocdi'), array('span' => array()) ),
			),
            'preview_url'                => 'https://demo.loprd.pl/omnis/author/yeroo/?omnis_template=7563',
            'type'                       => 'template',
		),
		array(
			'import_file_name'           => esc_html__('Archive/Search - Bordered Sidebar (100%)', 'pt-ocdi'),
			'categories'                 => array( 'Template', 'Archive Template', 'Search Template'),
			'import_file_url'            => plugin_dir_url( __FILE__ ) . 'templates/archive-search/archive-search_bordered-sidebar.xml',
			'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'templates/archive-search/archive-search_bordered-sidebar.jpg',
			'import_notice'              => $_templates_notice,
			'attached_elements_settings' => array(),
            'preview_url'                => 'https://demo.loprd.pl/omnis/author/yeroo/?omnis_template=7538',
            'type'                       => 'template',
		),
		
		// array(
		// 	'import_file_name'           => 'Post - Large Side Thumbnail (Medium)',
		// 	'categories'                 => array( 'Templates'),
		// 	'import_file_url'            => plugin_dir_url( __FILE__ )  . '/omnis-data/data/templates/post_large-thumb-side-medium.xml',
		// 	// 'import_widget_file_url'     => 'http://www.your_domain.com/ocdi/widgets.json',
		// 	// 'import_customizer_file_url' => 'http://www.your_domain.com/ocdi/customizer.dat',
		// 	// 'import_redux'               => array(
		// 	// 	array(
		// 	// 		'file_url'    => 'http://www.your_domain.com/ocdi/redux.json',
		// 	// 		'option_name' => 'redux_option_name',
		// 	// 	),
		// 	// ),
		// 	'import_preview_image_url'   => plugin_dir_url( __FILE__ ) . 'data/templates/post_large-thumb-side-medium.jpg',
		// 	'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'pt-ocdi' ),
		// 	// 'preview_url'                => 'http://www.your_domain.com/my-demo-1',
        //     // 'type'                       => 'page',
		// ),
	);
}
add_filter( 'pt-ocdi/import_files', 'omnis_ocdi_import_files' );