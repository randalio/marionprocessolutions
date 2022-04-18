<?php
$fields =  array(
	'key' => 'layout_product_info_'.$posttype,
	'name' => 'product_info_'.$posttype,
	'label' => 'Product Information',
	'display' => 'block',
	'sub_fields' => array(
    array(
      'key' => 'field_product_info_block_'.$posttype,
      'label' => 'Product Info Block',
      'instructions' => 'This block will display the product information associated with this page.',
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

?>
