<?php  
  
class Login_model extends CI_Model {  
  
    public function log_in_correctly() {  
  
        $user_ = $this->input->post('username');
        $pwd = $this->input->post('password');

        $this->db->where('username', $user_);  
        $this->db->where('password', $pwd);  
        $query = $this->db->get('sign_up');  
  
        if ($query->num_rows() == 1)  
        {  
            $row = $query->row();
            $this->session->set_userdata('user', $user_);
            $this->session->set_userdata('user_status', $row->category);
            return true;  
        } else {  
            return false;  
        }  
  
    }  
  
      
}  
?>  