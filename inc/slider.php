<?php

$gallery_list = gka_theme_get_gallery_list();
$choices = array();
foreach ($gallery_list as $key => $value) {
    $choices += [$value->gid => $value->title];
}

// Register Custom Slider Fields
if( function_exists('acf_add_local_field_group') ):
	acf_add_local_field_group(array(
		'key' => 'gka_theme_slider_group',
		'title' => 'Slider',
		'fields' => array(
			array(
				'key' => 'gka_theme_slider_field',
				'label' => 'Select Slider',
				'name' => 'gka_theme_slider',
				'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
				'wrapper' => array(
					'width' => 50,
					'class' => '',
					'id' => '',
				),
                'choices' => $choices,
				'default_value' => false,
                'allow_null' => 1,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
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

function gka_theme_get_gallery($id) {
	global $wpdb;
	$prefix = $wpdb->prefix;
	$result = $wpdb->get_results("	SELECT 	pictures.pid,
											pictures.description,
											pictures.alttext,
											pictures.filename,
											gallery.path,
											MAX(
												CASE 
													WHEN field.fid = 1 
													THEN field.field_value
													ELSE NULL 
												END
											) AS 'title',
											MAX(
												CASE 
													WHEN field.fid = 2 
													THEN field.field_value
													ELSE NULL 
												END
											) AS 'link'
									FROM {$prefix}ngg_pictures AS pictures 
									INNER JOIN {$prefix}ngg_gallery AS gallery 
									ON pictures.galleryid = gallery.gid
									LEFT JOIN {$prefix}nggcf_field_values AS field
									ON field.pid = pictures.pid 
									WHERE pictures.galleryid = {$id} AND pictures.exclude = 0 
									GROUP BY pictures.pid
									ORDER BY sortorder");
	return $result;
}

function gka_theme_get_gallery_list() {
	global $wpdb;
	$prefix = $wpdb->prefix;
	$result = $wpdb->get_results("	SELECT gid, title 
										FROM {$prefix}ngg_gallery 
									ORDER BY gid");
	return $result;
}