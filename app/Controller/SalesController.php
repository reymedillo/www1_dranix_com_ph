<?php 
class SalesController extends AppController {
	var $name = 'Sales';
	var $layout = 'default';

 function index() {
	$this->set('title_for_layout', 'Employee Sales');
 }

}
?>