<?php
class Marks extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        
         if(!$this->session->userdata('user')) redirect('Login_controller');

     }

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
		$data['marks'] = $this->im->internalmarks();

		echo json_encode($data);
	}
}