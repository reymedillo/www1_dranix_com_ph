<?php

class PostsController extends AppController {

var $name = 'Posts';
var $layout = 'default';

function add() {
	$this->set('title_for_layout', 'Add Post');
	if(!empty($this->data))
	{
		if($this->Post->save($this->data))
		{
			$this->Session->setFlash('Successfully Posted.');
			$this->Redirect(array(
			'action' => 'index'
			));
		}
		else
		{
			$this->Session->setFlash('Post was not saved.');
		}
	}
}
function view($id=null) {
 	$this->set('post', $this->Post->read(null, $id));
}

function index() {

	$this->set('posts', $this->Post->find('all'));
}

}