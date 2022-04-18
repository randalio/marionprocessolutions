<?php
$fields =  array(
	'key' => 'layout_custom_options_accordion_'.$posttype,
	'name' => 'custom_options_accordion_'.$posttype,
	'label' => 'Custom Options Accordion',
	'display' => 'block',
	'sub_fields' => array(
		array(
			'key' => 'field_custom_options_accordion_product_type_'.$posttype,
			'label' => 'Custom Options Accordion',
			'name' => 'chosen_product_type',
			'type' => 'html',
			'instructions' => 'Displays an accordion of all Custom Options when placed on a Page.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'allow_null' => 1,
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
