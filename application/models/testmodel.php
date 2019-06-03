<?php
class Testmodel extends CI_Model
{
		public function marks_type_()
		{
		$query = $this->db->get("marks_type");
		return $query->result();
		}
		
		public function take_marks()
		{
			$totalmarks= $this->input->post('totalmarks');
			$stdroll = $this->input->post('Student_Roll');
			$addclass_id = $this->input->post('addclass_id');
			$Obtained_Marks= $this->input->post('Obtained_Marks');
			$subject_id= $this->input->post('subject');
			$per= $this->input->post('Percentage');
			

			for($i=0; $i<count($addclass_id); $i++)
			{
			$data = array(
			'add_class_id'=>$addclass_id[$i],
			'roll_no' => $stdroll[$i],
			'totalmarks' => $totalmarks[$i],
			'marks'=>$Obtained_Marks[$i],
			'marks_type_id' => $this->session->userdata('itypeid'),
			'subject_id' => $subject_id,
			'faculty_id'=> $this->session->userdata('facultyid'),
			'percentage'=>$per[$i],
			//'marks_type_id' => '1',
			'status' => '1',
			'username' => $this->session->userdata('user'),

			);
		
			$this->db->insert('studentmarks',$data);
			}

		}
		public function take_marks_update()
		{

			$stdroll = $this->input->post('Student_Roll');
			$addclass_id = $this->input->post('addclass_id');
			$Obtained_Marks= $this->input->post('Obtained_Marks');
			$subject_id= $this->input->post('subject');
			$per= $this->input->post('Percentage');
			for($i=0; $i<count($addclass_id); $i++)
			{
			
			$this->db->where('add_class_id',$addclass_id[$i] );
        	$this->db->where('subject_id',$subject_id[$i] );
        	$this->db->where('roll_no',$stdroll[$i]); 
        	$this->db->where('marks_type_id', $this->session->userdata('itypeid'));
        	$this->db->where('faculty_id',  $this->session->userdata('facultyid'));
        
 			$data = array(
			'marks'=>$Obtained_Marks[$i],
			'percentage'=>$per[$i],
			);
		
			$this->db->update('studentmarks',$data);
			//echo $this->db->last_query(); die();
			}

		}
		
		function update_marks($no_,$subid)
		{
		$this->db->distinct('a.add_class_id');
		$this->db->select('a.*');
		$this->db->where('a.subject_id',$subid);
		$this->db->where('a.add_class_id',$no_);
		
		$this->db->where('a.marks_type_id',$this->session->userdata('itypeid'));
		$this->db->from('studentmarks a');
		$q = $this->db->get();
		//echo $this->db->last_query();die();
		return $q->result();
		}
	
	function marks_header($so,$mt)

	{
		$this->db->distinct('a.marks_type_id');
		$this->db->select('a.*');
		
		$this->db->where('a.marks_type_id' ,$so);
		$this->db->where('a.marks_name', $mt);
		$this->db->from('marks_type a');
		$q = $this->db->get('marks_type');	
		return $q->result();
	}
	
	function view_internal_marks($no_,$sess)///ra
	{

		$this->db->distinct('a.add_marks_id');
		$this->db->select('a.*, b.student_id, b.first_name');
		$this->db->where('c.add_class_id' ,$no_);
		$this->db->where('b.session_id', $sess);
		//$this->db->where('b.session_id', $sess);
		
		$this->db->where('a.marks_type_id',$this->session->userdata('marksid'));
		
		$this->db->where('a.username',$this->session->userdata('user'));
		
		//$this->db->where('a.marks_type_id','1');
		$this->db->from('studentmarks a');
		
		$this->db->join('std_personal b', 'b.student_id=a.roll_no');

		$this->db->join('add_class c', 'c.add_class_id=a.add_class_id');

		$q = $this->db->get();
		//echo $this->db->last_query();die();
		return $q->result();
	}

	function del($a){
		$this->db->delete('studentmarks',array('add_marks_id' => $a));
		return;
	}
	function del1($a){
		$this->db->delete('studentmarks',array('add_marks_id' => $a));
		return;
	}
	
}