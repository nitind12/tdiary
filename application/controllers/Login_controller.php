<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller 
{
    
    function __construct()
    {
        parent::__construct();
         
        $this->load->library('form_validation');
        $this->load->model('login_model');
    }
    
        public function index()
    {
        $this->load->view('loginpage');
    }
}
