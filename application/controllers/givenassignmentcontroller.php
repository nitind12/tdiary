<?php
class Givenassignmentcontroller extends CI_Controller{
	public function index()
	{
		//$this->load->helper('array');
		//test();
		//$arr = ['abc'=>'ABC','xyz'=>'XYZ'];
		//echo element('raj' ,$arr, 'notfound');
		$this->load->model('givenassignmentmodel');
		$a = $this->givenassignmentmodel->getData();
		//print_r($a);
		$data['marks'] = $this->givenassignmentmodel->getData();
		//$this->load->view('practicalmarksview',$data);
		$data['page_'] = 'givenassignmentview';
       
        $this->load->view('templates/header');
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}
}