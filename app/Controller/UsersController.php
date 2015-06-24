<?php

class UsersController extends AppController {
	public $name = 'Users';
	public $uses = array('User');
	var $layout = 'default';

	/*function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->User->find('all'));
	}*/
	function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('logout');
		$this->Auth->deny('edit','delete','changepass');
	}

	// function isAuthorized($user) {
	// 	if($user['role'] == 'admin')
	// 	{
	// 		return true;
	// 	}
	// 	else if(in_array($this->action, array('changepass','edit','delete')))
	// 	{
	// 		if($user['id'] != $this->request->params['pass'][0])
	// 		{
	// 			return false;
	// 		}
	// 		return true;
	// 	}
	// }

	function view($id = null) {
		$this->User->id = $id;

		if(!$this->User->exists()) 
		{
			throw new NotFoundException("User not found!");
		}
		if(!$id)
		{
			$this->Session->setFlash('Invalid User');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read());
	}

	function add() {
		if($this->request->is('post'))
		{
			if($this->Auth->user('username') == 'admin')
			{
				if($this->User->save($this->request->data))
				{
					$this->Session->setFlash('New user added.');
					$this->redirect(array('action' => 'add'));
				}
				else
				{
					$this->Session->setFlash('New user cannot be added.');
				}
			}
			$this->Session->setFlash('Only the webmaster can add users.');
			$this->redirect(array('action' => 'add'));
		}
	}

	function edit($id = null) {
		$this->User->id = $id;

		if(!$this->User->exists())
		{
			throw new NotFoundException("User not found!");
		}
		if($this->request->is('post') || $this->request->is('put'))
		{
			if($this->User->save($this->request->data))
			{
				$this->Session->setFlash('User has been updated!');
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash('User cannot be updated!');
			}
		}
		else
		{
			$this->request->data = $this->User->read();
		}
	}
    public function changepass() {
        if ($this->Auth->user('id')) {   // Just to  make sure User is logged 
            $this->User->id = $this->Auth->user('id');  // Set User Id
            if (!$this->User->exists()) {
                throw new NotFoundException(__('Invalid user'));
            }
            if ($this->request->is('post')) {
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash('Password has been changed.');
                    $this->redirect(array('action' => 'logout'));
                } else {
                    $this->Session->setFlash('Password could not be changed.');
                }
            } 
        }
    }

	function delete($id = null) {
		if($this->request->is('get'))
		{
			throw new MethodNotAllowedException();	
		}
		if(!$id)
		{
			$this->Session->setFlash('Invalid userid.');
			$this->redirect(array('action' => 'index'));
		}
		if($this->User->delete($id))
		{
			$this->Session->setFlash('User has been deleted successfully.');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('User cannot be deleted.');
		$this->redirect(array('action' => 'index'));
	}

	public function login() {
		

		if($this->request->is('post'))
		{
			if($this->Auth->login())
			{
				$this->redirect(array('controller' => 'news','action' => 'index'));
			}
			else
			{
				$this->Session->setFlash('Your username/password is incorrect.');
			}
		}
			if ($this->Session->read('Auth.User')) {
	       	$this->redirect(array('controller' => 'news','action' => 'index'));
	    	}
	}

	public function logout() {
		$this->Auth->logout();
		$this->redirect(array('controller' => 'home','action' => 'index'));
	}

} 

?>