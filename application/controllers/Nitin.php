<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Nitin extends CI_Controller {  
    function __construct(){
        parent::__construct();
        if(! $this->session->userdata('user')) redirect('Edittimetablecontroller');
    }

    public function index()  
    {  
        $data['title'] = "Nitin";
        $data['page_'] = "reg";
        $this->load->view('templates/header', $data);
        $this->load->view('mypage', $data);  
        $this->load->view('templates/footer');
    }


}?>