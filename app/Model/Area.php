<?php

App::uses('AppModel', 'Model');

class Area extends AppModel {
	public $name = 'area';

	public $hasOne = array(
		'Hfleet' => array(
			'className' => 'Hfleet',
			'foreignKey' => 'id'
		)
	);
}