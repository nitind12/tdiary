<?php
class Givenassignmentcontroller extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Givenassignmentmodel','gm');
		 $this->load->model('Add_class_model','am');
	}
	
	
	public function index()
	{
		$data['cls_in_session'] = $this->am->fetchClass();
       
		 $data['page_'] = 'givenassignmentview';
		 $data['title'] = 'View Assignment';
       
        $this->load->view('templates/header',$data);
        $this->load->view('myrajpage',$data);  
        $this->load->view('templates/footer');
		

	}
 public function view_assignment($no_,$sess) ////rename fecttab 
    {  
    	$data['vie'] = $this->gm->view_given_assignment($no_);
    	$data['add_class_in'] = $this->gm->add_view_class($no_);////ravi wALA SE

        $data['title'] = "assignment_view";
        $data['page_'] = "givenassignment";
        
        $this->load->view('templates/header', $data);
        $this->load->view('myrajpage');  
        $this->load->view('templates/footer');
    }
	
	function viewmarks(){
		$this->load->model('givenassignmentmodel','im');
		$data['marks'] = $this->im->internalmarks();

		echo json_encode($data);
	}

	 public function del()
    {
        
        $this->db->empty_table('assignment');
        redirect('givenassignmentcontroller/index','refresh');
    }
    public function del1()
    {
        $u = $this->uri->segment(3);
        $this->gm->del($u);
        //$this->db->empty_table('studentmarks');
        redirect('givenassignmentcontroller/index','refresh');
    }


}