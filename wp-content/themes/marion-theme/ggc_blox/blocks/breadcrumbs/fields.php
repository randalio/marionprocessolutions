<?php

$fields =  array(
	'key' => 'layout_breadcrumbs_'.$posttype,
	'name' => 'breadcrumbs_'.$posttype,
	'label' => 'Breadcrumbs',
	'display' => 'block',
	'sub_fields' => array(
		array(
			'key' => 'field_breadcrumbs_block_'.$posttype,
			'label' => 'Breadcrumbs Block',
      'instructions' => 'This block will display a list of breadcrumbs links for this page.',
			'name' => 'headline',
			'type' => 'html',
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
	),
	'min' => '',
	'max' => '',
);

//return $fields;
?>
