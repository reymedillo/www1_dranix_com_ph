<?php
class HomeController extends AppController {

	var $name = 'Home';
	var $layout = 'default';
	var $uses = array('Hnew','Dnew','News_category','Department');
	var $helpers = array('BeautyPaginator');
	
	function index($page = 1)
	{
		// $dir = new DirectoryIterator(dirname(__FILE__));
		// $dir = new DirectoryIterator($_SERVER['DOCUMENT_ROOT'].'/app/webroot/img/featured_works/');
		// foreach ($dir as $fileinfo) {
		//     if (!$fileinfo->isDot()) {
		//         echo $fileinfo->getFilename() . "\n";
		//     }
		// }
 		$dept = $this->Auth->user('deptid');		
		if($this->Auth->user('role') != 'admin')
		{
			$this->paginate = array(
				'limit' => 5,
				'order' => array('id' => 'desc'),
				'conditions' => array(
					'OR' => array(array('Hnew.deptid' => $dept),array('Hnew.deptid' => '5')),
				),
				'page' => $page
			);
		}
		if($this->Auth->user('role') == 'admin')
		{
			$this->paginate = array(
				'limit' => 5,
				'order' => array('id' => 'desc'),
				'page' => $page
			);
		}
		$new = $this->paginate('Hnew');

		$this->set('new', $new);
		$this->set('esales', $this->Hnew->find('all', array(
			'conditions' => array('Hnew.categoryid' => '4')
		))); 
	}
	function about()
	{
		$this->set('title_for_layout', 'About');
	}
}