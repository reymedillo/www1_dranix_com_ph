<?php  
class iMeetingsController extends AppController {

public function index() {
	$this->autoRender = false;
	$this->loadModel('Meeting');
	$meetings = $this->Meeting->find('all', array('fields' => array('id','topic','detail','upload')));
	// foreach($meetings as $meeting) {
	// $info = new SplFileInfo($meeting['Meeting']['upload']);
 //    array_push($meetings, $info->getExtension());
    	return json_encode(Set::extract('/Meeting/.', $meetings));
	// }

}

public function view($id) {
	$this->autoRender = false;
	$this->loadModel('Meeting');
	$meetings = $this->Meeting->find('first', array('conditions' => array('Meeting.id' => $id)));
	return json_encode(Set::extract('/Meeting/.', $meetings));
}

}
?>