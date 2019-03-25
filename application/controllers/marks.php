<?php
class Marks extends CI_Controller{
	public function index()
	{
		
		$this->load->model('marksmodel');
		$a = $this->marksmodel->getData();
		$data['marks'] = $this->marksmodel->getData();
		//$this->load->view('testmarks',$data);

		 $data['page_'] = 'testmarks';
       
        $this->load->view('templates/header');
        $this->load->view('testmarksview',$data);  
        $this->load->view('templates/footer');
		

	}
}