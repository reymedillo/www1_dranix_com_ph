<?php

class Product extends AppModel {
	public $name = 'product';

  public $hasOne = array(
    'Dfleet' => array(
      'className' => 'Dfleet',
      'foreignKey' => 'id'
    )
  );


}