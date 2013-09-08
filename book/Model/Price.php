<?php
App::uses('AppModel', 'Model');
/**
 * Price Model
 *
 * @property Item $Item
 * @property Shop $Shop
 */
class Price extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'price';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'price';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Item' => array(
			'className' => 'Item',
			'foreignKey' => 'item_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Shop' => array(
			'className' => 'Shop',
			'foreignKey' => 'shop_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
