<?php
$fields =  array(
	'key' => 'layout_rep_locator_'.$posttype,
	'name' => 'rep_locator_'.$posttype,
	'label' => 'Find a Representative',
	'display' => 'block',
	'sub_fields' => array(
		array(
			'key' => 'field_rep_locator_'.$posttype,
			'label' => 'Empty Results Message ',
			'name' => 'empty_result_message',
			'type' => 'wysiwyg',
			'toolbar' => 'basic',
			'media_upload' => 0,
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
	'min' => '',
	'max' => '',
);

//return $fields;
?>
