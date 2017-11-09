<?php 
function carotworow( array $caroutput ){

	$caroutput[] = array(
		'id' => 'carsmetabox',
		'title' => 'Carousel Post Options',
		'object_types' => array('caro2rowpost'),
		'fields' => array(
			array(
			    'name'             => 'Rating Star',
			    'desc'             => 'Select rating',
			    'id'               => 'ratingselect',
			    'type'             => 'select',
			    'show_option_none' => true,
			    'default'          => 'custom',
			    'options'          => array(
			        '1' => __( '1 Star', 'cmb2' ),
			        '2'   => __( '2 Star', 'cmb2' ),
			        '3'     => __( '3 Star', 'cmb2' ),
			        '4'     => __( '4 Star', 'cmb2' ),
			        '5'     => __( '5 Star', 'cmb2' )
			    )
			),
			array(
				'id' => 'ctimgtitle',
				'name' => 'Agree People Number',
				'desc' => 'Number only. eg. 8',
				'type' => 'text'
			)
		) 
	);

    // Accommodation
    $accommodton = new_cmb2_box( array(
        'id'           => 'accommodtonmb',
        'title'        => 'Accommodation More Options',
        'object_types' => array( 'touracmaocmos' ),
    ) ); 

    $accommodton->add_field( array(
        'name'    => 'Price',
        'desc' => 'Per Night',
        'id'      => 'accprice',
        'type'    => 'text'
    ) );

    $accommodton->add_field( array(
        'name'    => 'Booking Link',
        'id'      => 'accbooklink',
        'type'    => 'text'
    ) );

    $accommodton->add_field( array(
        'name'    => 'Location Adress',
        'id'      => 'acclocation',
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => get_option('default_post_edit_rows', 4),
            'media_buttons' => false,
        ),
    ) );

    $accommodton->add_field( array(
        'name'    => 'Contact Adress',
        'id'      => 'acdcontactad',
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => get_option('default_post_edit_rows', 4),
            'media_buttons' => false,
        ),
    ) );

    $accommodton->add_field( array(
        'name'    => 'Map Iframe Link',
        'id'      => 'accmapiframelink',
        'type'    => 'text'
    ) ); 

    // Wocommerce options
    $woomcmb2 = new_cmb2_box( array(
        'id'           => 'woocommetax',
        'title'        => 'Tours More Options',
        'object_types' => array( 'product' ),
    ) ); 

    $woomcmb2->add_field( array(
        'name'    => 'Price for Person',
        'default' => 'PER person',
        'id'      => 'pripers',
        'type'    => 'text'
    ) );

    $woomcmb2->add_field( array(
        'name'    => 'Availability',
        'id'      => 'avility',
        'type'    => 'text_medium'
    ) );

    $woomcmb2->add_field( array(
        'name'    => 'Duration',
        'id'      => 'duration',
        'type'    => 'text_medium'
    ) );
    
    $woomcmb2->add_field( array(
        'name'    => 'External link',
        'desc' 	=> 'Purchase External link(Optional)',        
        'id'      => 'externallnk',
        'type'    => 'text_medium'
    ) );   
    
    $woomcmb2->add_field( array(
        'name'    => 'Only for Addons',
        'desc' 	=> 'Click this box, If this is Tour Addon.',
        'id'      => 'toursaddionsop',
        'type'    => 'checkbox',
    ) );       
    $woomcmb2->add_field( array(
	'name' => 'Image Galley for Tour addon Only.',
	'desc' => 'If this is Tour Addon add image, Otherwise skip this.',
	'id'   => 'toradgalley',
	'type' => 'file_list',
	'text' => array(
		'add_upload_files_text' => 'Replacement', // default: "Add or Upload Files"
		'remove_image_text' => 'Replacement', // default: "Remove Image"
		'file_text' => 'Replacement', // default: "File:"
		'file_download_text' => 'Replacement', // default: "Download"
		'remove_text' => 'Replacement', // default: "Remove"
	),
    ) );

    $woofgrp = $woomcmb2->add_field( array(
        'id'          => 'wooretpgoup',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => __( 'Icon Number {#}', 'cmb2' ),
            'add_button'    => __( 'Add Another', 'cmb2' ),
            'remove_button' => __( 'Remove this', 'cmb2' ),
            'sortable'      => true, 
        ),
    ) );

    $woomcmb2->add_group_field( $woofgrp, array(
        'name' => 'Mouse hover text',
        'id'   => 'title',
        'type' => 'text',
    ) );

    $woomcmb2->add_group_field( $woofgrp, array(
        'name' => 'Icon (Best size 30x30)',
        'id'   => 'image',
        'type' => 'file',
    ) );


    $woomcmb2->add_field( array(
        'name'    => 'Google Map',
        'id'      => 'gmapp',
        'type'    => 'text_url'
    ) );  

    $woomcmb2->add_field( array(
        'name'    => 'Adress Location',
        'id'      => 'location',
        'type'    => 'wysiwyg',
        'options' => array(
        	'textarea_rows' => get_option('default_post_edit_rows', 4),
        	'media_buttons' => false,
        ),
    ) );   

    $wooguide = $woomcmb2->add_field( array(
        'id'          => 'wooguide',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => __( 'Guide Number {#}', 'cmb2' ),
            'add_button'    => __( 'Add Another Guide', 'cmb2' ),
            'remove_button' => __( 'Remove this Guide', 'cmb2' ),
            'sortable'      => true, 
        ),
    ) );

    $woomcmb2->add_group_field( $wooguide, array(
        'name' => 'Guide name',
        'id'   => 'guidename',
        'type' => 'text',
    ) );

    $woomcmb2->add_group_field( $wooguide, array(
        'name' => 'Guide Job Title',
        'id'   => 'guidejobtitle',
        'type' => 'text',
    ) );

    $woomcmb2->add_group_field( $wooguide, array(
        'name' => 'Guide Photo (Best size 95x95)',
        'id'   => 'guideimg',
        'type' => 'file',
    ) ); 

    $woomcmb2->add_field( array(
        'name'    => 'Notice for Tourist',
        'desc' 	=> 'To hide notice just click to checkbox',
        'id'      => 'noticeg',
        'type'    => 'checkbox'
    ) ); 
    
    $woomcmb2->add_field( array(
        'name'    => 'Only for ACCOMMODATIONS',
        'desc' 	=> 'Click this box, If this is Hotel or Accommodations.',
        'id'      => 'hotelaco',
        'type'    => 'checkbox',
    ) );  
    
	return $caroutput;
}
add_action('cmb2_meta_boxes','carotworow');