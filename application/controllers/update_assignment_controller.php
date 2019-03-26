<?php
class Update_Assignment_Controller extends CI_Controller{
	public function index()
	{
		//$this->load->helper('array');
		//test();
		//$arr = ['abc'=>'ABC','xyz'=>'XYZ'];
		//echo element('raj' ,$arr, 'notfound');
		$this->load->model('update_assignmentmodel');
		$a = $this->update_assignmentmodel->getData();
		//print_r($a);
		$data['marks'] = $this->update_assignmentmodel->getData();
		//$this->load->view('practicalmarksview',$data);
		$data['page_'] = 'update_assignmentview';
       
        $this->load->view('templates/header');
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}
}