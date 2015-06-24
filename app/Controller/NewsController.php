<?php
class NewsController extends AppController {

	var $name = 'News';
	var $layout = 'default';
	var $uses = array('Hnew','Dnew','News_category','Department');
	var $helpers = array('BeautyPaginator');

	function index($page = 1)
	{
		$this->set('title_for_layout', 'News');
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
	}
	function add()
	{
		$this->set('category', $this->News_category->find('list', array('fields' => array('id','description'))));
		$this->set('dept', $this->Department->find('list', array('fields' => array('id','description'))));
		$this->set('title_for_layout', 'News');
		if(!empty($this->request->data))
		{
                       /* $file = $this->request->data['New']['upload']; 

                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); 
                        $arr_ext = array('jpg', 'jpeg', 'gif'); 

                        if(in_array($ext, $arr_ext))
                        {
                                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/news/' . $file['name']);

                                $this->request->data['Hnew']['image'] = $file['name'];
                        }*/
        	if($this->Auth->user('role') == 'admin')
        	{
				if ($this->request->is('post')) {

					$this->request->data['Hnew']['emplid'] = $this->Auth->user('name');
					if($this->Hnew->save($this->request->data))
					{

						$this->Session->setFlash(__('The news has been saved'));
						$this->redirect(array('action' => 'add'));
					}
					else
					{
						$this->Session->setFlash(__('The news could not be saved. Please, try again.'));
					}
				}
			}
		    $this->Session->setFlash(__('You do not have a permission to post a news.'));
			$this->redirect(array('action' => 'add'));
		}
	}
}