<?php

App::uses('AppModel', 'Model');
App::uses('Security', 'Utility');

class Hnew extends AppModel {

	public $name = 'hnew';
	public $encryptedFields = array('topic','detail');

	public $hasMany = array(
	'Dnew' => array(
		'className' => 'Dnew',
		'foreignKey' => 'hnews_id',
		'dependent' => false,
		'conditions' => '',
		'fields' => '',
		'order' => '',
		'limit' => '',
		'offset' => '',
		'exclusive' => '',
		'finderQuery' => '',
		'counterQuery' => ''
		)
	);

	public $belongsTo = array(
        'News_category' => array(
            'foreignKey' => 'categoryid'         
        ),
        'Department' => array(
            'foreignKey' => 'deptid'         
        )
	);

	public $validate = array(
		'topic' => array(
			/*'number' => array(
				'rule' => 'numeric',
				'message' => 'Unit must be number.'
			),*/
			'maxLength' => array(
    			'rule' => array('maxLength', 80),
    			'message' => 'Topic is limited to 80 characters only.'
			)
		),
		'detail' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please fill in the detail of your news.'
			)
		),
		'categoryid' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please select a category.'
			)
		),
		'deptid' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please select a category.'
			)
		),
		'docdate' => array(
			'special-char' => array(
				'rule' => array('date', 'mdy'),
				'message' => 'must be in date format.'
			)
		)
	);

	public function beforeSave($options = array()) {
	    foreach($this->encryptedFields as $fieldName){
	        if(!empty($this->data[$this->alias][$fieldName])){
	            $this->data[$this->alias][$fieldName] = Security::rijndael(
	                $this->data[$this->alias][$fieldName],
	                Configure::read('Security.key'),
	                'encrypt'
	                );
	        }
	    }
	    return true;
	}

	public function afterFind($results = array(), $primary=false) {
	    foreach($this->encryptedFields as $fieldName){
	        foreach($results as $key => $value){
	                if(!empty($results[$key][$this->alias][$fieldName])){
	 
	                    $results[$key][$this->alias][$fieldName] = Security::rijndael(
	                        $results[$key][$this->alias][$fieldName],
	                        Configure::read('Security.key'),
	                        'decrypt'
	                        );
	                }
	        }
	    }
	    return $results;
	}
}