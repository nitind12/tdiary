<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lessonedit_controller extends CI_Controller
{
	function __construct()
	{
        parent::__construct();

        if(!$this->session->userdata('user')) redirect('Login_controller');
        
        $this->load->model('Givenassignmentmodel','gm');
       $this->load->model('Lessonedit_model','obj');
        $this->load->model('Add_class_model','am');
    }
    


    function index()
	{ 
        $data['cls_in_session'] = $this->am->fetchClass();

        $data['dashboard1'] = $this->am->getDashboardMenu();
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $data['last'] = $this->am->getlastMenu();
        
        $data['title'] = "Lesson_Plan";
        $data['page_'] = "Lesson_class";
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');
	}





    public function lesson_edit()  
    { 
        if($this->input->post('addclassidED'))
        {
            $no_ = $this->input->post('addclassidED');
            $sess = $this->input->post('sessionidED');
            $clsid = $this->input->post('courseidED');
            $subid = $this->input->post('subjectidED');
           
            $data['dashboard1'] = $this->am->getDashboardMenu();
            $data['menu'] = $this->am->getMenu();
            $data['submenu'] = $this->am->getSubmenu();
            $data['last'] = $this->am->getlastMenu();
            // $data['lecture_type'] = $this->obj->getLecturetype();
        
            $data['t_diary'] = $this->obj->fetchtable($no_,$subid);     
            $data['add_class_in'] = $this->am->add_view_attendance($no_);     
            $data['title'] = "lesson_edit";
            $data['page_'] = "lesson_new";    
            $this->load->view('templates/header', $data);
            $this->load->view('mypreetipage');  
            $this->load->view('templates/footer');
        }
        else
        {
            redirect('Lessonedit_controller');
        }
    }





    function updatedColumn()
    {
      //  $this->load->model('Lessonedit_model','lectup');
        $bool_= $this->obj->updatedColumn();
        echo $data; 
    }



    function savingdata()
    {
        $this->obj->lesson_edit_saving_modal();
        redirect('Lessonedit_controller/lesson_edit');
    }



    public function del1()
    {
        $u = $this->uri->segment(3);
        $this->obj->del($u);
        
        redirect('Lessonedit_controller/lesson_edit','refresh');
    }

}?>