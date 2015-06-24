<?php

App::uses('AppModel', 'Model');

class Department extends AppModel {
	public $name = 'department';

	public $hasOne = array(
		'Hnew' => array(
			'className' => 'Hnew',
			'foreignKey' => 'deptid'
		)
	);
}
?>