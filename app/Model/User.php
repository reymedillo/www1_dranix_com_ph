<?php

class User extends AppModel
{
	public $name = 'User';
	public $displayField = 'name';
	
	public $validate = array(
		'name' => array(
			'null' => array(
				'rule' => 'notEmpty',
				'message' => 'Please enter name.'	
			)
		),
		'username' => array(
			'size' => array(
				'rule' => array('between', 4, 15),
				'message' => 'username must be between 5 to 15 characters.'
			),
			'exists' => array(
				'rule' => 'isUnique',
				'message' => 'username already taken.'
			)
		),
		'email' => array(
			'valid' => array(
				'rule' => array('email'),
				'message' => 'must be a valid email.'
			)
		),
		'password' => array(
			'null' => array(
				'rule' => 'notEmpty',
				'message' => 'Please enter password.'
			),
			'matches' => array(
				'rule' => 'matchPasswords',
				'message' => 'Your passwords does not match.'
			)
		),
		'repassword' => array(
			'null' => array(
				'rule' => 'notEmpty',
				'message' => 'Please confirm your password.'
			)
		),
		'oldpassword' => array(
			'null' => array(
				'rule' => 'notEmpty',
				'message' => 'Please enter password.'
			),
			'validate' => array(
				'rule' => 'checkCurrentPassword',
				'message' => 'Your old password is incorrect.'
			)
		)
	);	

	public function matchPasswords($data) {
		if($data['password'] == $this->data['User']['repassword'])
		{
			return true;
		}
		$this->invalidate('repassword', 'Your passwords does not match.');
		return false;
	}
	public function checkCurrentPassword($data) {
    $this->id = AuthComponent::user('id');
    $password = $this->field('password');
    return(AuthComponent::password($data['oldpassword']) == $password);
	} 
	public function beforeSave($options = Array()) {
		if(!empty($this->data['User']['password']))
		{
			$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
		}
		return true;
	}
	
}
?>