<?php
class Viewtimetablecontroller extends CI_Controller{
	/*public function index()
	{
		
		$this->load->model('viewtimetablemodel');
		$a = $this->viewtimetablemodel->getData();
		
		$data['marks'] = $this->viewtimetablemodel->getData();
		
		$data['page_'] = 'timetableview';
       
        $this->load->view('templates/header');
        $this->load->view('mysatyampage',$data);  
        $this->load->view('templates/footer');
		

	}*/
	function __construct()
	{
        parent::__construct();

         if(!$this->session->userdata('user')) redirect('Login_controller');
         
           $this->load->model('Add_class_model','am');
   
        
     
    }

	public function index()
	{
		 $data['page_'] = 'timetableview';
		 $data['title'] = 'View Timetable';
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $this->load->view('templates/header',$data);
        $this->load->view('mysatyampage',$data);  
        $this->load->view('templates/footer');
		

	}

	function viewmarks(){
		$this->load->model('viewtimetablemodel','im');
		$data['marks'] = $this->im->timetable();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
		echo json_encode($data);
	}
}
