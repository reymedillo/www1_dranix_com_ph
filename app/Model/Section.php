<?php

App::uses('AppModel', 'Model');

class Section extends AppModel {
	public $name = 'section';

	public $hasOne = array(
		'Hfleet' => array(
			'className' => 'Hfleet',
			'foreignKey' => 'id'
		)
	);
}