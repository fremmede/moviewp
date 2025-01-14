<?php
/*
* ----------------------------------------------------
* @author: fr0zen
* @author URI: https://fr0zen.sellix.io
* @copyright: (c) 2022 Vincenzo Piromalli. All rights reserved
* ----------------------------------------------------
* @since 3.8.7
* 20 May 2022
*/

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_603efa100d159',
	'title' => 'Generator',
	'fields' => array(
		array(
			'key' => 'field_603efa3f589d9',
			'label' => 'Generator',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'postbox noborder',
				'id' => 'Generator',
			),
			'message' => '',
			'new_lines' => '',
			'esc_html' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'modified' => false,
));

acf_add_local_field_group(array(
	'key' => 'group_603e7de764b6e',
	'title' => 'Generator Data',
	'fields' => array(
		array(
			'key' => 'field_603e7e3dea9a1',
			'label' => 'Details',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => 'generator_data',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_603e7ed59256b',
			'label' => 'Movie & TV Show Data',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Enter the fields manually if TMDB API does not generate them automatically.',
			'new_lines' => 'wpautop',
			'esc_html' => 1,
		),
		array(
			'key' => 'field_603e7e9883aa7',
			'label' => 'IMDb',
			'name' => 'imdb_id',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => 'imdb_id',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_603e820012ecb',
			'label' => 'TMDb',
			'name' => 'id',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => 'id',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_603e84af48412',
			'label' => 'Rating',
			'name' => 'imdbRating',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => 'imdbRating',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_603e85ff905bb',
			'label' => 'Runtime',
			'name' => 'Runtime',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => 'Runtime',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_603e8692248a0',
			'label' => 'Year',
			'name' => 'release_date',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => 'release_date',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_603e87af84162',
			'label' => 'MPAA',
			'name' => 'Rated',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => 'Rated',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_603e83c0c1660',
			'label' => 'YouTube',
			'name' => 'youtube_id',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => 'youtube_id',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => 'https://www.youtube.com/watch?v=',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_603e884e60b1c',
			'label' => 'Images',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_603e8895b5902',
			'label' => 'Poster & Backdrop',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Use wordpress <a href="#postimagediv">featured image</a> function if TMDB poster path is missing, but remember to delete the Poster field if you want to use the featured image.',
			'new_lines' => '',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_603e88ceb5e9c',
			'label' => 'Poster',
			'name' => 'poster_path',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => 'poster_path',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => 'https://image.tmdb.org/t/p/w600_and_h900_bestv2',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_603e88e7b5e9d',
			'label' => 'Backdrop',
			'name' => 'backdrop_path',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => 'backdrop_path',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => 'https://image.tmdb.org/t/p/w1280',
			'append' => '',
			'maxlength' => '',
		),
		/*
		array(
			'key' => 'field_608cb80d8a54f',
			'label' => 'Upload',
			'name' => 'post_image',
			'type' => 'image',
			'instructions' => 'Use wordpress poster image if poster path is missing.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => 'post_image',
			),
			'return_format' => 'url',
			'preview_size' => 'w92',
			'library' => 'uploadedTo',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => 'jpg, jpeg, png',
		),
		*/
		array(
			'key' => 'field_603e8b8d42bd6',
			'label' => 'Quality',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_603e8ba842bd7',
			'label' => 'Quality',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Add the quality for the ribbon ex: 480p, 720p, 1080p, CAM, HD-SCR, WEB-DL, BLU-RAY.
			 Leave blank if you do not want to see the ribbon. (Disable the Importer plugin if you run into any problems).',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_603e8bd146413',
			'label' => 'Select',
			'name' => 'quality',
			'type' => 'taxonomy',
			'instructions' => 'You can add a new one by clicking on the right of the form.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => 'quality',
			),
			'taxonomy' => 'quality',
			'field_type' => 'radio',
			'allow_null' => 1,
			'add_term' => 1,
			'save_terms' => 1,
			'load_terms' => 1,
			'return_format' => 'object',
			'multiple' => 0,
		),
		array(
			'key' => 'field_603eaea095f18',
			'label' => 'Switch',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_603eaec595f19',
			'label' => 'Movie Quality Selector',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Enter the video url in this order 720p &gt; 1080p (don\'t leave the first field blank).
If you don\'t want to activate the quality selector enter only 1 link in the first field (in any resolution you want).',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_603eaf66ba804',
			'label' => '720p',
			'name' => '720p',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '720p',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_603eaf7bba805',
			'label' => '1080p',
			'name' => '1080p',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '1080p',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_603eb045b6064',
			'label' => 'Movie Download',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_603eb0db673e5',
			'label' => 'Movie Download',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'You can enter up to 10 download links, enter only 1 to activate the simple download button, enter more than 1 to activate the multidownload button.',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_603eb058b6065',
			'label' => 'Download 1',
			'name' => 'download',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => 'download',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_6070ce93ea0d2',
			'label' => 'Download 2',
			'name' => 'download_2',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_6070cedeea0d3',
			'label' => 'Download 3',
			'name' => 'download_3',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_6070cee8ea0d4',
			'label' => 'Download 4',
			'name' => 'download_4',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_6070cef4ea0d5',
			'label' => 'Download 5',
			'name' => 'download_5',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_6070cf02ea0d6',
			'label' => 'Download 6',
			'name' => 'download_6',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_6070cf0fea0d7',
			'label' => 'Download 7',
			'name' => 'download_7',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_6070cf2aea0d8',
			'label' => 'Download 8',
			'name' => 'download_8',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_6070cf35ea0d9',
			'label' => 'Download 9',
			'name' => 'download_9',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_6070cf44ea0da',
			'label' => 'Download 10',
			'name' => 'download_10',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_603eb1ea05e75',
			'label' => 'Movie Multi Server',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5a6ce58a64da9',
			'label' => 'Servers',
			'name' => 'iframe',
			'type' => 'repeater',
			'instructions' => 'Enter the iframe video url, you can insert a maximum of 10 video urls.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 10,
			'layout' => 'table',
			'button_label' => 'Add Url',
			'sub_fields' => array(
				array(
					'key' => 'field_5a6ce5c864daa',
					'label' => 'Url',
					'name' => 'server',
					'type' => 'url',
					'instructions' => 'Click Add Url You can use all host like streamtape, mixdrop, supervideo, mystream etc..',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'Insert embed url',
				),
			),
		),
		array(
			'key' => 'field_603eb4e25b59f',
			'label' => 'TV Multi Server',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_551980b8a65b5',
			'label' => 'Seasons',
			'name' => 's',
			'type' => 'repeater',
			'instructions' => 'TV Show Generator, click the right button to create seasons and add episodes',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add season',
			'sub_fields' => array(
				array(
					'key' => 'field_551980eaa65b6',
					'label' => 'Episodes',
					'name' => 'e',
					'type' => 'repeater',
					'instructions' => 'Click Add Season',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 0,
					'max' => 0,
					'layout' => 'table',
					'button_label' => 'Add episode',
					'sub_fields' => array(
						array(
							'key' => 'field_551ad81267b46',
							'label' => 'Link',
							'name' => 'link',
							'type' => 'url',
							'instructions' => 'Click add episode',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => 'Streaming',
						),
						array(
							'key' => 'field_6071f31060156',
							'label' => 'Download',
							'name' => 'down',
							'type' => 'url',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => 'Download',
						),
					),
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;