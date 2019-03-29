<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Ravi extends CI_Controller {  
    function __construct(){
        parent::__construct();
        if(! $this->session->userdata('user')) redirect('Login_controller');
    }

    public function index()  
    {  
        $data['title'] = "online_attendance";
        $data['page_'] = "myravipage";
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }

    function view(){
        $data['title'] = "Nitin";
        $data['page_'] = "view";
        $this->load->view('templates/header', $data);
        $this->load->view('myravipage', $data);  
        $this->load->view('templates/footer');
    }
}