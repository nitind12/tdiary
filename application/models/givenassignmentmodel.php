<?php
class Givenassignmentmodel extends CI_Model{

function fetchtassignemtnewno()

	{
		$no_ = $this->input->post('addclass_id');
		$newno_ = $this->input->post('Assignment_no');
		$subid_ = $this->input->post('subject_id');

		$this->db->select('a.Assignment_id');
		$this->db->where('a.add_class_id' ,$no_);
		$this->db->where('a.Assignment_no', $newno_);
		$this->db->where('a.subject_id', $subid_);
		$q = $this->db->get('assignment a');
		if($q->num_rows()!=0){
			$bool_ = false;
		} else {
			$bool_= true;
		}

		return $bool_;
	}
	
	function getNewNo(){
		$no_ = $this->input->post('addclass_id');
		$subid_ = $this->input->post('subject_id');

		$this->db->select('MAX(a.Assignment_no) as newno');
		$this->db->where('a.add_class_id' ,$no_);
		$this->db->where('a.subject_id', $subid_);
		$this->db->where('a.faculty_id', $this->session->userdata('facultyid'));
		$this->db->group_by('a.subject_id');
		$q = $this->db->get('assignment a');
		//echo $this->db->last_query(); die();
		if($q->num_rows()!=0){
			$r = $q->row();
			$newno = $r->newno;	
		} else {
			$newno = 0;
		}
		
		$newno++;
		return $newno;
	}

	function fetchtable($no_)

	{
		$this->db->order_by('Assignment_no','desc');
		$this->db->distinct('a.Assignment_id');
		$this->db->select('a.*');
		$this->db->where('b.add_class_id' ,$no_);
		$this->db->from('assignment a');
		$this->db->join('add_class b', 'b.add_class_id=a.add_class_id');
		$q = $this->db->get('assignment');
		return $q->result();
	}
	

	function view_given_assignment($no_)///ra
	{
		
		$this->db->distinct('a.Assignment_id');
		$this->db->select('a.*');
		$this->db->where('b.add_class_id' ,$no_);
		$this->db->from('assignment a');
		$this->db->join('add_class b', 'b.add_class_id=a.add_class_id');
		$q = $this->db->get('assignment');
		return $q->result();
	}
	public function add_view_class($clsid)
		{
		$this->db->distinct('a.add_class_id');
		$this->db->select('a.* ,b.course_id, b.semester_id, b.section_id, c.first_name,c.last_name');
		$this->db->from('assign_subject a');
		$this->db->where('a.faculty_id', $this->session->userdata('facultyid'));
		$this->db->where('b.add_class_id', $clsid);
		
		$this->db->join('add_class b', 'a.add_class_id=b.add_class_id');
		$this->db->join('faculty_personal c', 'a.faculty_id=c.faculty_id');
		
		$q = $this->db->get();
		return $q->result();
		}
		
	public function assignment_edit_modal_saving()
	{
		$addclass_id= $this->input->post('addclass_id');	
		$subject_id= $this->input->post('subject_id');	
			for($i=0; $i<count($addclass_id); $i++)
			{
			$data = array(	
			'add_class_id' => $addclass_id,	
			'subject_id' => $subject_id,	
			'Assignment_no' => $this->input->post('Assignment_no'),
			'Given_date' => $this->input->post('Given_date'),
			'Submission_date' => $this->input->post('Submission_date'),
			'Unit' => $this->input->post('Unit'),
			'Topic' => $this->input->post('Topic'),
			'status' => '1',
			'faculty_id' => $this->session->userdata('facultyid'),
			'username' => $this->session->userdata('user'),
		);
			$this->db->insert('assignment',$data);
		}
	}


	

	function del1($a){
		$this->db->delete('assignment',array('Assignment_id' => $a));
		return;
	}
	
	

	//---double click and edit---//

	function updatedColumn()
    {
        $lectupdate_ = array();

        $dt=$this->input->post('dt');
        $givenassign_id=$this->input->post('givenassign_id');
        echo $col = $this->input->post('columnname');

        $this->db->where('Assignment_id', $givenassign_id);
        $data = array(
        			$col => $dt
       			 );

        $query = $this->db->update('assignment', $data);
        return $query;
    }


    //---double click and edit---//

	function updatedColumnview()
    {
        $lectupdate_ = array();

        $dt=$this->input->post('dt');
        $viewgivenassign_id=$this->input->post('viewgivenassign_id');
        echo $col = $this->input->post('columnname');

        $this->db->where('Assignment_id', $viewgivenassign_id);
        $data = array(
        			$col => $dt
       			 );

        $query = $this->db->update('assignment', $data);
        return $query;
    }

}