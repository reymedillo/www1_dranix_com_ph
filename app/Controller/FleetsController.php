<?php

class FleetsController extends AppController {
	public $name = 'Fleets';
	public $uses = array('Hfleet','Dfleet','Division','Area','Section','Operation','Product','Maintain_type');
	public $components = array('RequestHandler');
	public $helpers = array('Html', 'Form','AutoComplete');
	var $layout = 'home';

function add() {
	//dropdown lists
	
	$this->set('division', $this->Division->find('list', array('fields' => array('id','divname'))));
	$this->set('area', $this->Area->find('list', array('fields' => array('id','areaname'))));
	$this->set('operation', $this->Operation->find('list', array('fields' => array('id','optname'))));
	$this->set('section', $this->Section->find('list', array('fields' => array('id','sectname'))));
	$this->set('m_type', $this->Maintain_type->find('list', array('fields' => array('id','maintain_name'))));
/*	$this->set('product', $this->Product->find('list', array('fields' => array('productid','productname'))));*/
	//


	if(!empty($this->data))
	{
		$this->loadModel('Product');
		if ($this->request->is('post')) {
			$this->Hfleet->create();
			if ($this->Hfleet->save($this->request->data)) {
				//group saved ok, now add people
				$hfleet_id = $this->Hfleet->getInsertId();
				//loop for each person added
				foreach($this->request->data['Dfleet'] as $dfleet) {
						if(isset($dfleet['itemcode']))
						{
							$dfleet['hfleet_id'] = $hfleet_id;
							$code = $this->Product->find('first', array(
							'conditions' => array('Product.productname' => $dfleet['itemcode']),
							'fields' => array('Product.id')
							));
							$dfleet['itemcode'] = $code['Product']['id'];
						}
					$this->Hfleet->Dfleet->create();
					$this->Hfleet->Dfleet->save($dfleet);	
				}
					$this->Session->setFlash(__('The data has been saved'));
					$this->redirect(array('action' => 'add'));
				//end foreach
				
			} else {
				$this->Session->setFlash(__('The data could not be saved. Please, try again.'));
			}
		}
	}
}
	function index() {
		$this->loadModel('Division');
		$this->loadModel('Product');
		$this->set('fleets', $this->Hfleet->find('all'));  
	}
	function auto_complete() {
		$this->loadModel('Product');
        $terms = $this->Product->find('all', array(
            'conditions' => array(
                'Product.productname LIKE' => $this->params['url']['autoCompleteText'].'%'
            ),
            'fields' => array('id','productname'),
            'limit' => 3,
            'recursive'=>-1,
        ));
        $terms = Set::Extract($terms,'{n}.Product.productname');
        $this->set('terms', $terms);
        $this->layout = 'ajax';    
    }	

    function view($id = null)
    {
    	$this->set('fleet', $this->Hfleet->read(null,$id));
    	$this->set('item', $this->Dfleet->find('all', array(
    		'conditions' => array(
    			'Dfleet.hfleet_id' => $this->request->params['pass'][0]
    		)
    	)));  

    	$test = $this->Dfleet->virtualFields['total'] = 'sum(Dfleet.Amount)';

    	$total = $this->Dfleet->find('all', array(
    		'fields' => array('total'),
    		'conditions' => array('Dfleet.hfleet_id' => $this->request->params['pass'][0])
    	));

    	$this->set('total',$total);
    }

}
