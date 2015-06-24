<?php

App::uses('AppModel', 'Model');

class News_category extends AppModel {
	public $name = 'news_category';

	public $hasOne = array(
		'Hnew' => array(
			'className' => 'Hnew',
			'foreignKey' => 'categoryid'
		)
	);
}
?>