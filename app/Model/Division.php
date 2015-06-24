<?php
App::uses('AppModel', 'Model');

class Division extends AppModel {
	public $name = 'division';

	/*public $belongsTo = array(
		'Hfleet' => array(
			'className' => 'Hfleet',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);*/
	public $hasOne = array(
		'Hfleet' => array(
			'className' => 'Hfleet',
			'foreignKey' => 'id'
		)
	);
}