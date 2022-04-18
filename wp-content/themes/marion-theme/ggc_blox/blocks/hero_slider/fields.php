<?php
$fields =  array(
	'key' => 'layout_hero_slider_'.$posttype,
	'name' => 'hero_slider_'.$posttype,
	'label' => 'Hero Slider',
	'display' => 'block',
	'sub_fields' => array(
    array(
			'key' => 'field_hero_slider_content_group_'.$posttype,
			'label' => '',
			'name' => 'hero_slider_content',
			'type' => 'repeater',
      'min' => '1',
			'max' => '3',
      'button_label' => '+ Add Tile',
      'layout' => 'block',
      'sub_fields' => array(
        array(
          'key' => 'field_hero_slider_layout_'.$posttype,
          'label' => 'Slide Layout',
          'name' => 'slide_layout',
          'type' => 'select',
          'choices' => array(
              'animated' => 'Animated Headline',
              'two_col' => 'Two Column w/ Image',
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
        ),
        array(
          'key' => 'field_hero_slider_line_one_text_'.$posttype,
          'label' => 'Line One Text',
          'name' => 'line_one',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => array(
            array(
              array(
                'field' => 'field_hero_slider_layout_'.$posttype,
                'operator' => '==',
                'value' => 'animated',
              ),
            ),
          ),
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
        ),
				array(
					'key' => 'field_hero_slider_line_two_animated_text_'.$posttype,
					'label' => 'Line Two (Animated Text)',
					'name' => 'line_two_animated',
					'type' => 'text',
					'instructions' => 'Separate words and phrases separated by a comma (,) to animate cycle through each. The last word or phrase will remain static at the end of the animation;',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_hero_slider_layout_'.$posttype,
								'operator' => '==',
								'value' => 'animated',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
				),
        array(
          'key' => 'field_hero_slider_line_three_text'.$posttype,
          'label' => 'Line Three Text',
          'name' => 'line_three',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => array(
            array(
              array(
                'field' => 'field_hero_slider_layout_'.$posttype,
                'operator' => '==',
                'value' => 'animated',
              ),
            ),
          ),
          'wrapper' => array(
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
        ),
        array(
          'key' => 'field_hero_slider_subhead_link_text_'.$posttype,
          'label' => 'Sub Headline Link Text',
          'name' => 'subhead_link_text',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => array(
            array(
              array(
                'field' => 'field_hero_slider_layout_'.$posttype,
                'operator' => '==',
                'value' => 'animated',
              ),
            ),
          ),
          'wrapper' => array(
            'width' => '33',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
        ),
        array(
          'key' => 'field_hero_slider_subhead_non_link_text_'.$posttype,
          'label' => 'Sub Headline Non Link Text',
          'name' => 'subhead_non_link_text',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => array(
            array(
              array(
                'field' => 'field_hero_slider_layout_'.$posttype,
                'operator' => '==',
                'value' => 'animated',
              ),
            ),
          ),
          'wrapper' => array(
            'width' => '66',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
        ),
				array(
					'key' => 'field_hero_slider_subhead_link_'.$posttype,
					'label' => 'Sub Headline Link',
					'name' => 'sub_head_link',
					'type' => 'link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_hero_slider_layout_'.$posttype,
								'operator' => '==',
								'value' => 'animated',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
				),
        // END OF ANIMATED LAYOUT FIELDS
				// BGEIN TWO COL LAYOUT FIELDS
				array(
					'key' => 'field_hero_slider_two_col_image_'.$posttype,
					'label' => 'Slide Image',
					'name' => 'two_col_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_hero_slider_layout_'.$posttype,
								'operator' => '==',
								'value' => 'two_col',
							),
						),
					),
					'wrapper' => array(
						'width' => '33',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
				),
				array(
					'key' => 'field_hero_slider_two_col_content_group_'.$posttype,
					'label' => '',
					'name' => 'two_col_content_group',
					'type' => 'group',
					'sub_fields' => array(
						array(
							'key' => 'field_hero_slider_two_col_headline_'.$posttype,
							'label' => 'Slide Headline',
							'name' => 'two_col_headline',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_hero_slider_layout_'.$posttype,
										'operator' => '==',
										'value' => 'two_col',
									),
								),
							),
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
						),
						array(
							'key' => 'field_hero_slider_two_col_text_'.$posttype,
							'label' => 'Slide Text',
							'name' => 'two_col_text',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_hero_slider_layout_'.$posttype,
										'operator' => '==',
										'value' => 'two_col',
									),
								),
							),
							'wrapper' => array(
								'width' => '100',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
						),
						array(
							'key' => 'field_hero_slider_two_col_button_text_'.$posttype,
							'label' => 'Button Text',
							'name' => 'two_col_button_text',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_hero_slider_layout_'.$posttype,
										'operator' => '==',
										'value' => 'two_col',
									),
								),
							),
							'wrapper' => array(
								'width' => '33',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
						),
						array(
							'key' => 'field_hero_slider_two_col_button_link_'.$posttype,
							'label' => 'Button Link',
							'name' => 'two_col_button_link',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_hero_slider_layout_'.$posttype,
										'operator' => '==',
										'value' => 'two_col',
									),
								),
							),
							'wrapper' => array(
								'width' => '66',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
						),
					),
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_hero_slider_layout_'.$posttype,
								'operator' => '==',
								'value' => 'two_col',
							),
						),
					),
					'wrapper' => array(
						'width' => '66',
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
			'key' => 'field_hero_slider_padding_top_'.$posttype,
			'label' => 'Padding Top',
			'name' => 'hero_slider_padding_top',
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
			'key' => 'field_hero_slider_padding_bot_'.$posttype,
			'label' => 'Padding Bottom',
			'name' => 'hero_slider_padding_bot',
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
