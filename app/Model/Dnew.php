<?php

App::uses('AppModel', 'Model');

class Dnew extends AppModel {

	public $name = 'dnew';

	public $belongsTo = array(
		'Hnew' => array(
			'className' => 'Hnew',
			'foreignKey' => 'hnews_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}