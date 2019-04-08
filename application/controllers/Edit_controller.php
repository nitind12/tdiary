<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_controller extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
         $this->load->model('Lectureedit_model','obj'); 
    }

    public function index()  
    {  
        $data['t_diary'] = $this->obj->fetchtable();
        $data['course']=$this->obj->getCourse();

        $data['title'] = "Editpage";
        $data['page_'] = "Edit";

        $this->load->view('templates/header', $data);
        $this->load->view('mypreetipage', $data);  
        $this->load->view('templates/footer');

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
