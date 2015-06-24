<?php

App::uses('AppModel', 'Model');

class Maintain_type extends AppModel {
	public $name = 'maintain_type';

	public $hasOne = array(
		'Hfleet' => array(
			'className' => 'Hfleet',
			'foreignKey' => 'id'
		)
	);
}