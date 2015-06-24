<?php
App::uses('AppModel', 'Model');
class Hfleet extends AppModel {

	public $name = 'hfleet';
	
	public $hasMany = array(
		'Dfleet' => array(
			'className' => 'Dfleet',
			'foreignKey' => 'hfleet_id',
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
        'Division' => array(
            'foreignKey' => 'divcode'         
        ),
        'Operation' => array(
        	'foreignKey' => 'optcode'
        ),
        'Section' => array(
        	'foreignKey' =>  'sectcode'
        ),
        'Area' => array(
        	'foreignKey' => 'areacode'
        ),
        'Dfleet' => array(
        	'foreignKey' => 'id'
        ),
        'Maintain_type' => array(
        	'foreignKey' => 'maintain_type'
        )
	);
	
	public $validate = array(
		'unit' => array(
			/*'number' => array(
				'rule' => 'numeric',
				'message' => 'Unit must be number.'
			),*/
			'maxLength' => array(
    			'rule' => array('maxLength', 15),
    			'message' => 'Unit must be 15 characters only.'
			)
		),
		'divcode' => array(
			'special-char' => array(
				'rule' => 'alphaNumeric',
				'message' => 'Division must no special characters.'
			)
		),
		'optcode' => array(
			'special-char' => array(
				'rule' => 'alphaNumeric',
				'message' => 'Operation must no special characters.'
			)

		),
		'areacode' => array(
			'special-char' => array(
				'rule' => 'alphaNumeric',
				'message' => 'Area must no special characters.'
			)
		),
		'sectcode' => array(
			'special-char' => array(
				'rule' => 'alphaNumeric',
				'message' => 'Section must no special-char.'
			)
		),
		'plateno' => array(
			'maxLength' => array(
    			'rule' => array('maxLength', 8),
    			'message' => 'plate number must be 8 characters only.'
			)
		),
		'docdate' => array(
			'special-char' => array(
				'rule' => array('date', 'mdy'),
				'message' => 'must be in date format.'
			)
		)
	);

}