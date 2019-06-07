<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Homemain extends CI_Controller{
	
  public function index()  
    {  

        $this->load->view('home');  
        
    }
    public function about_us_controller()  
    {  

        $this->load->view('aboutus');  
        
    }
     public function about_us_controller1()  
    {  

        $this->load->view('contact_us');  
        
    }
}