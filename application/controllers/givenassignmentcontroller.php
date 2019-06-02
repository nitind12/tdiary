<?php
class Givenassignmentcontroller extends CI_Controller{
	function __construct()
	{
		parent::__construct();

        if(!$this->session->userdata('user')) redirect('Login_controller');
        
		$this->load->model('Givenassignmentmodel','gm');
		 $this->load->model('Add_class_model','am');
	}
	
	
	public function index()
	{
		$data['cls_in_session'] = $this->am->fetchClass();
       
		 $data['page_'] = 'givenassignmentview';
		 $data['title'] = 'View Assignment';
        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}
 
 	public function view_assignment() ////rename fecttab 
    {  
    	if($this->input->post('addclassidAV'))
            {
            $no_ = $this->input->post('addclassidAV');
            $sess = $this->input->post('sessionidAV');
        
    	$data['vie'] = $this->gm->view_given_assignment($no_);
    	$data['add_class_in'] = $this->gm->add_view_class($no_);////ravi wALA SE
         $data['add_class_in'] = $this->am->add_view_attendance($no_);
        $data['title'] = "assignment_view";
         $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
       $data['page_'] = "givenassignment";
        
        $this->load->view('templates/header', $data);
        $this->load->view('myrajpage');  
        $this->load->view('templates/footer');
    }
	else
	{
		redirect('Givenassignmentcontroller');
	}
	
}

	function viewmarks()
	{
		$this->load->model('givenassignmentmodel','im');
		$data['marks'] = $this->im->internalmarks();

		echo json_encode($data);
	}

	

 public function del1()
    {
        $u = $this->uri->segment(3);
        $this->gm->del1($u);
        redirect('givenassignmentcontroller/index','refresh');
    }




       function updatedColumnview()
    {

        //$this->load->model('Lectureedit_model','lectup');
        $bool_= $this->gm->updatedColumnview();

        echo $data; 
    }
    

}