<?php
class Marks extends CI_Controller{
	public function index()
	{
		 $data['page_'] = 'viewmarks';
		 $data['title'] = 'View Marks';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}

	function viewmarks(){
		$this->load->model('Internalmodel','im');
		$data['marks_'] = $this->im->internalmarks();///marks===???ass

		echo json_encode($data);
	}
}