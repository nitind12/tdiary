<?php
class Marks extends CI_Controller{
	public function index()
	{
		//$this->load->helper('array');
		//test();
		//$arr = ['abc'=>'ABC','xyz'=>'XYZ'];
		//echo element('raj' ,$arr, 'notfound');
		$this->load->model('marksmodel');
		$a = $this->marksmodel->getData();
		//print_r($a);
		$data['marks'] = $this->marksmodel->getData();
		$this->load->view('testmarks',$data);
		

	}
}