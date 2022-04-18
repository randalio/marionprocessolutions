<?php
$fields =  array(
	'key' => 'layout_marquee_media_grid_'.$posttype,
	'name' => 'marquee_media_grid_'.$posttype,
	'label' => 'Marquee Media Grid',
	'display' => 'block',
	'sub_fields' => array(
      array(
          'key' => 'field_marquee_media_grid_hero_group_'.$posttype,
          'label' => 'Hero Tile',
          'name' => 'marquee_hero_tile_group',
          'type' => 'group',
          'sub_fields' => array(
            array(
      					'key' => 'field_marquee_media_grid_hero_tile_type_'.$posttype,
      					'label' => 'Media Type',
      					'name' => 'hero_tile_type',
      					'type' => 'select',
                'choices' => array(
                  'image' => 'Image',
                  'video' => 'Video',
                ),
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
                'key' => 'field_marquee_media_grid_hero_tile_video_'.$posttype,
                'label' => 'Background Video',
                'name' => 'hero_tile_video',
                'type' => 'file',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                  array(
                    array(
                      'field' => 'field_marquee_media_grid_hero_tile_type_'.$posttype,
                      'operator' => '==',
                      'value' => 'video',
                    ),
                  ),
                ),
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
                'mime_types' => 'mp4',
            ),
            array(
                'key' => 'field_marquee_media_grid_hero_tile_image_'.$posttype,
                'label' => 'Background Image',
                'name' => 'hero_tile_image',
                'type' => 'image',
								'preview_size' => 'large',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => '',
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_marquee_media_grid_hero_tile_headline_'.$posttype,
                'label' => 'Headline Text',
                'name' => 'hero_tile_headline',
                'type' => 'text',
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

          ),
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '60',
            'class' => '',
            'id' => '',
          ),
          'placement' => 'top',
          'endpoint' => 0,
      ),
      array(
          'key' => 'field_marquee_media_grid_small_group_'.$posttype,
          'label' => 'Side Tiles',
          'name' => 'marquee_small_tile_group',
          'type' => 'group',
          'sub_fields' => array(
            array(
      					'key' => 'field_marquee_media_grid_small_tile_1_type_'.$posttype,
      					'label' => 'Media Type',
      					'name' => 'small_tile_1_type',
      					'type' => 'select',
                'choices' => array(
                  'image' => 'Image',
                  'video' => 'Video',
                ),
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
                'key' => 'field_marquee_media_grid_small_tile_1_video_'.$posttype,
                'label' => 'Background Video',
                'name' => 'small_tile_1_video',
                'type' => 'file',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                  array(
                    array(
                      'field' => 'field_marquee_media_grid_small_tile_1_type_'.$posttype,
                      'operator' => '==',
                      'value' => 'video',
                    ),
                  ),
                ),
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
                'mime_types' => 'mp4',
            ),
            array(
                'key' => 'field_marquee_media_grid_small_tile_1_image_'.$posttype,
                'label' => 'Background Image',
                'name' => 'small_tile_1_image',
                'type' => 'image',
								'preview_size' => 'thumbnail',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => '',
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_marquee_media_grid_small_tile_2_type_'.$posttype,
                'label' => 'Media Type',
                'name' => 'small_tile_2_type',
                'type' => 'select',
                'choices' => array(
                  'image' => 'Image',
                  'video' => 'Video',
                ),
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
								'key' => 'field_marquee_media_grid_small_tile_2_video_'.$posttype,
								'label' => 'Background Video',
								'name' => 'small_tile_2_video',
								'type' => 'file',
								'instructions' => '',
								'required' => 0,
								'conditional_logic' => array(
									array(
										array(
											'field' => 'field_marquee_media_grid_small_tile_2_type_'.$posttype,
											'operator' => '==',
											'value' => 'video',
										),
									),
								),
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'placement' => 'top',
								'endpoint' => 0,
								'mime_types' => 'mp4',
						),
            array(
                'key' => 'field_marquee_media_grid_small_tile_2_image_'.$posttype,
                'label' => 'Background Image',
                'name' => 'small_tile_2_image',
                'type' => 'image',
								'preview_size' => 'thumbnail',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => '',
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
          ),
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '40',
            'class' => '',
            'id' => '',
          ),
          'placement' => 'top',
          'endpoint' => 0,
      ),

  ),
	'min' => '',
	'max' => '',
);

?>
