<?php
class Practicalmarkscontroller extends CI_Controller{
	public function index()
	{
		//$this->load->helper('array');
		//test();
		//$arr = ['abc'=>'ABC','xyz'=>'XYZ'];
		//echo element('raj' ,$arr, 'notfound');
		$this->load->model('practicalmarksmodel');
		$a = $this->practicalmarksmodel->getData();
		//print_r($a);
		$data['marks'] = $this->practicalmarksmodel->getData();
		//$this->load->view('practicalmarksview',$data);
		$data['page_'] = 'practicalmarksview';
       
        $this->load->view('templates/header');
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}
}