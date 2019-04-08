<?php
class Givenassignmentcontroller extends CI_Controller{
	/*public function index()
	{
		
		$this->load->model('givenassignmentmodel');
		$a = $this->givenassignmentmodel->getData();
		
		$data['marks'] = $this->givenassignmentmodel->getData();
		
		$data['page_'] = 'givenassignmentview';
		$data['title'] = 'Given Assignment';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}*/

	public function index()
	{
		 $data['page_'] = 'givenassignmentview';
		 $data['title'] = 'View Assignment';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}

	function viewmarks(){
		$this->load->model('givenassignmentmodel','im');
		$data['marks'] = $this->im->internalmarks();

		echo json_encode($data);
	}


}