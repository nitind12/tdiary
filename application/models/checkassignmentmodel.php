<?php
class Checkassignmentmodel extends CI_Model{
	function fetchtable()
	{
		$query = $this->db->get("assignment_checker");
		return $query->result();
	}
	
	function check_assignment_marks_enter_modal()
	{
			$assignment_id= $this->input->post('assignment_no');
			$stdroll = $this->input->post('Student_Roll');
			$addclass_id = $this->input->post('addclass_id');
			$assignment_status = $this->input->post('optionsRadios');
			$Grade = $this->input->post('grade');
			$subject_id = $this->input->post('subject');
			
			$date= $this->input->post('date1');
			

			for($i=0; $i<count($addclass_id); $i++)
			{
			$data = array(
			'add_class_id'=>$addclass_id[$i],
			'roll_no' => $stdroll[$i],
			'assignment_id'=>$assignment_id,
			'assignment_status'=>$assignment_status[$i],
			'grade'=>$Grade[$i],
			'subject_id'=>$subject_id,
			
			'checker_date'=>$date,
			'status' => '1',
			'username' => $this->session->userdata('user'),
			);
		
			$this->db->insert('assignment_checker',$data);
			
		}
				
	}
	function view_given_assignment($no_)///ra
	{
		
		$this->db->distinct('a.assignment_id');
		$this->db->select('a.*, c.first_name');
		$this->db->where('b.add_class_id' ,$no_);
		$this->db->from('assignment_checker a');
		$this->db->join('add_class b', 'b.add_class_id=a.add_class_id');
		$this->db->join('std_personal c', 'c.student_id=a.roll_no');

		$q = $this->db->get('assignment_checker');
		return $q->result();
	}


	
		function del1($a){
		$this->db->delete('assignment_checker',array('assignment_checker_id' => $a));
		return;
	}



	//---double click and edit---//

	function updatedColumn()
    {
        $assignupdate_ = array();

        $dt=$this->input->post('dt');
        $checkedassign_id=$this->input->post('checkedassign_id');
        echo $col = $this->input->post('columnname');

        $this->db->where('assignment_checker_id', $checkedassign_id);
        $data = array(
        			$col => $dt
       			 );

        $query = $this->db->update('assignment_checker', $data);
        return $query;
    }

   public function getmarkstype()
	{
		$this->db->select('Assignment_no');
		$query = $this->db->get('assignment');
		return $query->result();
	}
	
	
}
?>