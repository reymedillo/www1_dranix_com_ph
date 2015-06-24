<?php

class Post extends AppModel {

	var $name = 'Post';
	var $validate = array(
	'title' => array(
		'number' => array(
			'rule' => 'numeric',
			'message' => 'Numbers Only'
			)
		)
	);
}