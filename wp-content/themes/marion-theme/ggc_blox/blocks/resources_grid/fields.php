<?php
$fields =  array(
	'key' => 'layout_resources_grid_'.$posttype,
	'name' => 'resources_grid_'.$posttype,
	'label' => 'Resource Grid',
	'display' => 'block',
	'sub_fields' => array(
    array(
			'key' => 'field_resources_grid_content_group_'.$posttype,
			'label' => '',
			'name' => 'resources_grid_content',
			'type' => 'repeater',
      'min' => '1',
			'max' => '3',
      'button_label' => '+ Add Tile',
      'layout' => 'block',
      'sub_fields' => array(
        array(
          'key' => 'field_resources_grid_resource_object'.$posttype,
          'label' => 'Choose a Resource',
          'name' => 'resource_object',
          'type' => 'post_object',
          'post_type' => array(
            'case-study',
            'white-paper',
            'video'
          ),
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '85',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
        ),
				array(
          'key' => 'field_resources_grid_alt_'.$posttype,
          'label' => 'Alt Content',
          'name' => 'alt_content',
          'type' => 'true_false',
					'ui' => 'true',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '15',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
        ),
				array(
          'key' => 'field_resources_grid_alt_image_'.$posttype,
          'label' => 'Alt Image',
          'name' => 'alt_image',
          'type' => 'image',
          'post_type' => array(
            'case-study',
            'white-paper',
            'video'
          ),
          'instructions' => '',
          'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_resources_grid_alt_'.$posttype,
								'operator' => '==',
								'value' => 1,
							),
						),
					),
          'wrapper' => array(
            'width' => '50',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
        ),
				array(
          'key' => 'field_resources_grid_alt_text_'.$posttype,
          'label' => 'Alt Text',
          'name' => 'alt_text',
					'rows' => 4,
          'type' => 'textarea',
          'post_type' => array(
            'case-study',
            'white-paper',
            'video'
          ),
          'instructions' => '',
          'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_resources_grid_alt_'.$posttype,
								'operator' => '==',
								'value' => 1,
							),
						),
					),
          'wrapper' => array(
            'width' => '50',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
        ),
      ),
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
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_resources_grid_padding_top_'.$posttype,
			'label' => 'Padding Top',
			'name' => 'resources_grid_padding_top',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				0 => '0',
				1 => '1',
				2 => '2',
				3 => '3',
				4 => '4',
			),
			'default_value' => array(
				0 => 1,
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_resources_grid_padding_bot_'.$posttype,
			'label' => 'Padding Bottom',
			'name' => 'resources_grid_padding_bot',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				0 => '0',
				1 => '1',
				2 => '2',
				3 => '3',
				4 => '4',
			),
			'default_value' => array(
				0 => 1,
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),

	),
	'min' => '',
	'max' => '',
);

?>
