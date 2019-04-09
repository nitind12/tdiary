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
     public function lecture_edit()
    {  
        $data['t_diary'] = $this->obj->fetchtable();
         $data['cls_in_session'] = $this->am->fetchClass();
        $data['title'] = "lecture_edit";
        $data['page_'] = "Lecture_edit";
        
        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage');  
        $this->load->view('templates/footer');
    }

 
    function savingdata()
    {
        $this->obj->savingdata();
        redirect('Edit_controller/lecture_edit');
    }

    public function del1()
    {
        $u = $this->uri->segment(3);
        $this->obj->del($u);
        
        redirect('Edit_controller/lecture_edit','refresh');
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
