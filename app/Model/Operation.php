<?php

App::uses('AppModel', 'Model');

class Operation extends AppModel {
	public $name = 'operation';

	public $hasOne = array(
		'Hfleet' => array(
			'className' => 'Hfleet',
			'foreignKey' => 'id'
		)
	);
}
?>