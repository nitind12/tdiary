<?php
class Marks extends CI_Controller{
	public function index()
	{
		
		$this->load->model('marksmodel');
		$a = $this->marksmodel->getData();
		$data['marks'] = $this->marksmodel->getData();
		//$this->load->view('testmarks',$data);

		 $data['page_'] = 'testmarks';
		 $data['title'] = 'View Marks';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}
}