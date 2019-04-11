<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Lessonedit_controller extends CI_Controller
    {
	   function __construct()
	   {
        parent::__construct();
        $this->load->model('Givenassignmentmodel','gm');
        
       $this->load->model('Lessonedit_model','obj');
        $this->load->model('Add_class_model','am');
    }
    
    	function index()
	   { ///done
        $data['cls_in_session'] = $this->am->fetchClass();
       $data['title'] = "Lesson_Plan";
        $data['page_'] = "Lesson_class";
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');
	
	}

    public function lesson_edit($no_,$sess,$crs)  
    {  
      $data['t_diary'] = $this->obj->fetchtable($no_);
          
    $data['add_class_in'] = $this->gm->add_view_class($no_);     
    $data['title'] = "lecture_edit";
    $data['page_'] = "Lessonedit";    
    $this->load->view('templates/header', $data);
    $this->load->view('mypreetipage');  
    $this->load->view('templates/footer');
    
    }

     function lesson_edit_saving_controller()
    {
         $this->obj->lesson_edit_saving_modal();
        redirect('Lessonedit_controller');
    }

    public function del1()
    {
        $u = $this->uri->segment(3);
        $this->obj->del($u);
        
        redirect('Lessonedit_controller','refresh');
    }

}?>