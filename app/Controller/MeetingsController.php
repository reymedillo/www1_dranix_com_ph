<?php
class MeetingsController extends AppController {
	var $name = 'Meetings';
	
public function index() {

}
public function add() {
	$this->loadModel('Department');
	$this->loadModel('Meeting');
	$this->set('dept', $this->Department->find('all', array('fields' => array('id','description'))));
	
	if($this->request->is('post')) {
		$this->Meeting->create();
        // Initialize filename-variable
		$filename = null;
		$today = getdate();
		if (
			!empty($this->request->data['Meeting']['upload']['tmp_name'])
			&& is_uploaded_file($this->request->data['Meeting']['upload']['tmp_name'])
		) {
			// Strip path information
			$filename = substr(Security::generateAuthKey(),0,5).'_'.basename($this->request->data['Meeting']['upload']['name']);
			move_uploaded_file(
				$this->data['Meeting']['upload']['tmp_name'],
				WWW_ROOT . 'files' . DS . $filename
			);
		}
		//Set the file-name only to save in the database
		$this->request->data['Meeting']['upload'] = $filename;
		$this->request->data['Meeting']['upload_dir'] = WWW_ROOT . 'files' . DS . $filename;


		if ($this->Meeting->save($this->request->data)) {
			$this->Session->setFlash('Your post has been saved.');
			$this->redirect('/meetings');
		} else {
			$this->Session->setFlash('Unable to add your post.');
		}
	}
}

}
?>