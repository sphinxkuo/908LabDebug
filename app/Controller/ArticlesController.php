<?php
class ArticlesController extends AppController
{
	public $helpers = array('Html','Form');
	
	public function index()
	{
		$this->set('Articles',$this->Article->find('all'));
	}
}
?>