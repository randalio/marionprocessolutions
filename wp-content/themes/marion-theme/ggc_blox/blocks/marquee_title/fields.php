<?php

$fields =  array(
	'key' => 'layout_marquee_title_'.$posttype,
	'name' => 'marquee_title_'.$posttype,
	'label' => 'Marquee Headline',
	'display' => 'block',
	'sub_fields' => array(
		array(
			'key' => 'field_marquee_title_image_'.$posttype,
			'label' => 'Headline Image',
			'name' => 'headline_image',
			'type' => 'image',
			'preview_size' => 'thumbnail',
			'instructions' => 'Choose a background image for this header.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '33',
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
			'key' => 'field_marquee_title_headline_'.$posttype,
			'label' => 'Headline Text',
			'name' => 'marquee_title_headline',
			'type' => 'text',
			'instructions' => 'Enter a headline for this header.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '66',
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
	'min' => '',
	'max' => '',
);

//return $fields;
?>
