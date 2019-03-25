<?php
class Markscontroller extends CI_Controller{
	public function index()
	{
		//$this->load->helper('array');
		//test();
		//$arr = ['abc'=>'ABC','xyz'=>'XYZ'];
		//echo element('raj' ,$arr, 'notfound');
		$this->load->model('classtestmarksmodel');
		$a = $this->classtestmarksmodel->getData();
		//print_r($a);
		$data['marks'] = $this->classtestmarksmodel->getData();
		//$this->load->view('classtestmarksview',$data);
		$data['page_'] = 'classtestmarksview';
       
        $this->load->view('templates/header');
        $this->load->view('marks',$data);  
        $this->load->view('templates/footer');
		
		

	}
}