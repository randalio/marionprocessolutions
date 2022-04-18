<?php
$fields =  array(
	'key' => 'layout_config_gallery_'.$posttype,
	'name' => 'config_gallery_'.$posttype,
	'label' => 'Typical Config Gallery',
	'display' => 'block',
	'sub_fields' => array(
		array(
			'key' => 'field_config_gallery_post_type_'.$posttype,
			'label' => 'Post Type to Filter By',
			'name' => 'filter_by',
			'type' => 'select',
			'choices' => array(
				'product_type' => 'Product Type',
				'process' => 'Process',
				'industry' => 'Industry',
			),
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'allow_null' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_config_gallery_product_type_'.$posttype,
			'label' => 'Show Configurations from this Product Type',
			'name' => 'chosen_product_type',
			'type' => 'post_object',
      'post_type' => 'product_type',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_config_gallery_post_type_'.$posttype,
						'operator' => '==',
						'value' => 'product_type',
					),
				),
			),
			'wrapper' => array(
				'width' => '75',
				'class' => '',
				'id' => '',
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'id',
			'ajax' => 0,
			'placeholder' => '',
		),

		array(
			'key' => 'field_config_gallery_process_'.$posttype,
			'label' => 'Show Configurations from this Process',
			'name' => 'chosen_process',
			'type' => 'post_object',
      'post_type' => 'process',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_config_gallery_post_type_'.$posttype,
						'operator' => '==',
						'value' => 'process',
					),
				),
			),
			'wrapper' => array(
				'width' => '75',
				'class' => '',
				'id' => '',
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'id',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_config_gallery_industry_'.$posttype,
			'label' => 'Show Configurations from this Industry',
			'name' => 'chosen_industry',
			'type' => 'post_object',
      'post_type' => 'industry',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_config_gallery_post_type_'.$posttype,
						'operator' => '==',
						'value' => 'industry',
					),
				),
			),
			'wrapper' => array(
				'width' => '75',
				'class' => '',
				'id' => '',
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'id',
			'ajax' => 0,
			'placeholder' => '',
		),
	),
	'min' => '',
	'max' => '',
);

?>
