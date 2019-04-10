<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_controller extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
         $this->load->model('Lectureedit_model','obj'); 
         $this->load->model('Add_class_model','am');

    }

    public function index()  
    {  
        $data['cls_in_session'] = $this->am->fetchClass();
        $data['title'] = "lecture_page";
        $data['page_'] = "Lecture_div";

        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');

    }
<<<<<<< HEAD
     public function lecture_edit($no_,$sess,$crs)
    {  
     $data['add_class_in'] = $this->obj->add_view_attendance($sess,$crs);
       
        $data['t_diary'] = $this->obj->fetchtable();
=======
     public function lecture_edit()  
    {  
>>>>>>> parent of 649676f... Merge branch 'master' of https://github.com/nitind12/tdiary
        $data['title'] = "lecture_edit";
        $data['page_'] = "Lecture_edit";
        
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage');

        $this->load->view('templates/footer');
    }


    function view_lecture_div()
    {
        $data['title'] = "Lectureview page";
        $data['page_'] = "Lecture_view_div";
         $data['cls_in_session'] = $this->am->fetchClass();

        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');  
    }

    function lessonview()
    {
        $this->load->model('Lview_model','object');
        $data['lect_'] = $this->object->savingdata3();

        echo json_encode($data);    
    }


    
 
    function savingdata()
    {
        $this->obj->savingdata();
        redirect('Edit_controller');
    }

    public function del1()
    {
        $u = $this->uri->segment(3);
        $this->obj->del($u);
        
        redirect('Edit_controller','refresh');
    }


    function updatedColumn()
    {

        $this->load->model('Lectupdate_model','lup');
        $data['lectupdate_'] = $this->lup->savingdata();

        echo json_encode($data); 

    }


   

/*    public function authenticate()  
    {  
        $this->load->model('Lview_model');  
  
        if ($this->Lview_model->filled_correctly())  
        {  
            redirect('Edit');
        } else {  
            redirect('Edit_controller');  
        }  
    }  
*/

}	
?>
