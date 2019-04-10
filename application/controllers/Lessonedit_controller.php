<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lessonedit_controller extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
       $this->load->model('Lessonedit_model','obj');
        $this->load->model('Add_class_model','am');

        
    }
    
	function index()
	{ 
        $data['cls_in_session'] = $this->am->fetchClass();
        $data['t_diary'] = $this->obj->fetchtable();
        //$data['course']=$this->obj->getCourse();
         
	 	$data['title'] = "Lesson divpage";
        $data['page_'] = "Lesson_div";

        
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');
	
	}

<<<<<<< HEAD
    public function lesson_edit($no_,$sess,$crs)  
    {  
        

        $data['t_diary'] = $this->obj->fetchtable(); 
         $data['add_class_id'] = $this->am->add_view_attendance($sess,$crs);     
       
        $data['title'] = "lecture_edit";
        $data['page_'] = "Lessonedit";
        
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage');  
        $this->load->view('templates/footer');
    }

=======
>>>>>>> parent of 649676f... Merge branch 'master' of https://github.com/nitind12/tdiary
     function savingdata()
    {
         $this->obj->savingdata();
        redirect('Lessonedit_controller');
    }

    public function del1()
    {
        $u = $this->uri->segment(3);
        $this->obj->del($u);
        
        redirect('Lessonedit_controller','refresh');
    }


  /*  public function authenticate()  
    {  
        $this->load->model('Lessonview_model');  
  
        if ($this->Lessonview_model->filled_correctly())  
        {  
            redirect('lessonedit');
        } else {  
            redirect('Lessonedit_controller');  
        }  
    } 
    */
}?>