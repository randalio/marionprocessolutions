<?php

$fields =  array(
	'key' => 'layout_video_block_'.$posttype,
	'name' => 'video_block_'.$posttype,
	'label' => 'Video Block',
	'display' => 'block',
	'sub_fields' => array(
		array(
				'key' => 'field_video_block_block_settings_'.$posttype,
				'label' => 'Block Content',
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
			'key' => 'field_video_block_content_group_'.$posttype,
			'label' => '',
			'name' => 'video_block_content_group',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
      'sub_fields' => array(
          array(
            'key' => 'field_video_block_headline_'.$posttype,
            'label' => 'Headline',
            'name' => 'video_block_headline',
            'type' => 'text',
            'instructions' => 'Enter a headline for this block.',
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
            'key' => 'field_video_block_description_'.$posttype,
            'label' => 'Text Area',
            'name' => 'video_block_description',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'rows' => '4',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
					array(
            'key' => 'field_video_block_button_text_'.$posttype,
            'label' => 'Button Text',
            'name' => 'video_block_button_text',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '50',
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
            'key' => 'field_video_block_button_link_'.$posttype,
            'label' => 'Button Link',
            'name' => 'video_block_button_link',
            'type' => 'link',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '50',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
      ),
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
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
			'key' => 'field_video_block_video_group_'.$posttype,
			'label' => '',
			'name' => 'video_block_video_group',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
      'sub_fields' => array(
          array(
            'key' => 'field_video_block_youtube_code_'.$posttype,
            'label' => 'Youtube Code',
            'name' => 'video_block_youtube_code',
            'type' => 'text',
            'instructions' => 'Enter the youtube video code found at the end of your videos URL Eg. https://www.youtube.com/watch?v={XXXXXXXXX}',
            'required' => 0,
            'conditional_logic' => array(
  						array(
  							array(
  								'field' => 'field_video_block_video_type_'.$posttype,
  								'operator' => '==',
  								'value' => 'youtube',
  							),
  						),
  					),
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
            'key' => 'field_video_block_mp4_file_'.$posttype,
            'label' => 'MP4 Video File',
            'name' => 'video_block_mp4_file',
            'type' => 'file',
            'instructions' => 'Upload an MP4 Video File',
            'required' => 0,
            'conditional_logic' => array(
  						array(
  							array(
  								'field' => 'field_video_block_video_type_'.$posttype,
  								'operator' => '==',
  								'value' => 'mp4',
  							),
  						),
  					),
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
            'key' => 'field_video_block_video_type_'.$posttype,
            'label' => 'Video Type',
            'name' => 'video_block_video_type',
            'type' => 'select',
            'choices' => array(
  						'youtube' => 'YouTube',
  						'mp4' => 'MP4',
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
            'key' => 'field_video_block_youtube_cover_image_'.$posttype,
            'label' => 'YouTube Cover Image',
            'name' => 'video_block_youtube_cover_image',
            'type' => 'html',
            'instructions' => 'Please set the cover image for this video on YouTube.com',
            'required' => 0,
            'conditional_logic' => array(
  						array(
  							array(
  								'field' => 'field_video_block_video_type_'.$posttype,
  								'operator' => '==',
  								'value' => 'youtube',
  							),
  						),
  					),
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
            'key' => 'field_video_block_video_cover_image_'.$posttype,
            'label' => 'Video Cover Image',
            'name' => 'video_block_video_cover_image',
            'type' => 'image',
            'instructions' => 'Upload an image 880px x 448px',
            'required' => 1,
            'conditional_logic' => array(
  						array(
  							array(
  								'field' => 'field_video_block_video_type_'.$posttype,
  								'operator' => '==',
  								'value' => 'mp4',
  							),
  						),
  					),
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
      ),
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
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
			'key' => 'field_video_block_background_settings_tab_'.$posttype,
			'label' => 'Background Settings',
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
			'key' => 'field_video_block_padding_top_'.$posttype,
			'label' => 'Padding Top',
			'name' => 'video_block_padding_top',
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
			'key' => 'field_video_block_padding_bot_'.$posttype,
			'label' => 'Padding Bottom',
			'name' => 'video_block_padding_bot',
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

//return $fields;
?>