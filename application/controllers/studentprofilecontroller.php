<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentprofilecontroller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

         if(!$this->session->userdata('user')) redirect('Login_controller');
          $this->load->model('Add_class_model','am');

		  $this->load->model('studentprofilemodel','sp');
     }


	public function index()
	{
		
		$data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
         $data['course1'] = $this->am->getCourse1();
       
		
            if($this->session->userdata('user_status')==1){
                    $data['m'] = $this->sp->getDatatA();
                $data['page_'] = 'adminprofile';
    
            }
          if($this->session->userdata('user_status')==2){
                $data['m'] = $this->sp->getDatat();
                $data['page_'] = 'teacherprofile';
    
            }
          if($this->session->userdata('user_status')==3){
                 $data['m'] = $this->sp->getData();
                   $data['page_'] = 'studentprofileview';
    
            }
      			$data['title'] = 'profile';
       
        $this->load->view('templates/header',$data);
        $this->load->view('mysapnapage',$data);  
        $this->load->view('templates/footer');
		

	}
	
}
?>