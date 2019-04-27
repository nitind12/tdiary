<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studenttimetableeditcontroller extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
           $this->load->model('Add_class_model','am');
   
        
     
    }

    public function index()  
    {  
        $data['title'] = "Studenttimetableedit";
        $data['page_'] = "Studenttimetableedit";
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
        $this->load->view('templates/header', $data);
        $this->load->view('mysatyampage', $data);  
        $this->load->view('templates/footer');
    }
   
    function uploadTT(){
        $this->load->model('Studenttimetableeditmodel', 'stem');
        $this->stem->savingTimeTable();
        redirect('Studenttimetableeditcontroller');
        $data['menu'] = $this->am->getMenu();
        $data['submenu'] = $this->am->getSubmenu();
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
