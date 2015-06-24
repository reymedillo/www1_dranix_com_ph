<?php
class Dfleet extends AppModel {

	var $name = 'dfleet';

	public $belongsTo = array(
		'Hfleet' => array(
			'className' => 'Hfleet',
			'foreignKey' => 'hfleet_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Product' => array(
			'className' => 'Product',
            'foreignKey' => 'itemcode'         
   		)
	);

/*	public $hasOne = array(
		'Hfleet1' => array(
			'className' => 'Hfleet',
			'foreignKey' => 'hfleet_id'
		)
	);*/
}

?>