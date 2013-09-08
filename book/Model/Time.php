<?php
App::uses('AppModel', 'Model');
/**
 * Time Model
 *
 * @property timeitem $timeitem
 * @property timeuser $timeuser
 */
class Time extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'time';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'timeitem' => array(
			'className' => 'timeitem',
			'foreignKey' => 'item_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'timeuser' => array(
			'className' => 'timeuser',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
