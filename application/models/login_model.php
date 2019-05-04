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
            if($row->category==3)
            {
                $this->db->select('a.*,b.session_id,b.session_class_id,b.student_id, c.subject_id ,c.semester_id');
                $this->db->from('std_personal a');
             $this->db->join('section b', 'a.session_id=b.session_id');
            $this->db->join('add_class c', 'b.session_class_id=c.add_class_id');
             $query1=$this->db->get();
                 $row = $query1->row();
            $this->session->set_userdata('sin', $row->session_id);
            $this->session->set_userdata('cos', $row->course_id);

            $this->session->set_userdata('tan', $row->semester_id);
            $this->session->set_userdata('cot', $row->section_id);
            
            }
            return true;  
        } else {  
            return false;  
        }  
  }
    
}  
?>  