<?php 
class Account_setting_controller extends CI_Controller 
{
    public function __construct()
    {
        /*call CodeIgniter's default Constructor*/
        parent::__construct();
        $this->load->model('Account_setting_model','asm');
        if(!$this->session->userdata('user')) redirect('Login_controller');

    }       
    
    public function index()
    {
        if($this->input->post('change_pass'))
        {
            $old_pass=$this->input->post('old_pass');
            $new_pass=$this->input->post('new_pass');
            $confirm_pass=$this->input->post('confirm_pass');

            $username=$this->session->userdata('user');
         


            $que=$this->db->query("select password from sign_up where username='$username' ");
            $row=$que->row();

            if((!strcmp($old_pass, $old_pass))&& (!strcmp($new_pass, $confirm_pass)))
            {
                $this->asm->change_pass($username,$new_pass);

                $this->session->set_flashdata('c', "Password changed successfully");
            }
            else
            {
                   $this->session->set_flashdata('c', "Invalid");
            }
        }

         $data['title'] = "Account_setting";
        $this->load->view('templates/header');
        $this->load->view('Account_setting'); 
        $this->load->view('templates/footer');    
    }
}
?>