<?php
class Testmodel extends CI_Model
{
		
		public function take_marks()
		{
			$totalmarks= $this->input->post('totalmarks');
			$stdroll = $this->input->post('Student_Roll');
			$addclass_id = $this->input->post('addclass_id');
			$Obtained_Marks= $this->input->post('Obtained_Marks');
			

			for($i=0; $i<count($addclass_id); $i++)
			{
			$data = array(
			'add_class_id'=>$addclass_id[$i],
			'roll_no' => $stdroll[$i],
			'totalmarks' => $totalmarks[$i],
			'marks'=>$Obtained_Marks[$i],
			'status' => '1',
			'username' =>'ra',
			);
		
			$this->db->insert('studentmarks',$data);
			}

		}
		
		/*function add_view_new($no_,$sess)
		{
		$intel = array();
		$this->db->distinct('b.session_id');
		$this->db->select('a.*');
		$this->db->where('a.session_id', $sess);
		$this->db->where('a.course_id', $crs);
		$this->db->from('add_class a');
		$q = $this->db->get();
		//echo $this->db->last_query();
		return $q->result();
		}

		*/
	function view_internal_marks($no_,$sess)///ra
	{

		$this->db->distinct('a.add_marks_id');
		$this->db->select('a.*, b.student_id, b.first_name');
		$this->db->where('c.add_class_id' ,$no_);
		$this->db->where('b.session_id', $sess);
		//$this->db->where('a.session_id', $sess);
		//$this->db->where('a.add_class_id', $clsid);
		$this->db->from('studentmarks a');
		$this->db->join('std_personal b', 'b.student_id=a.roll_no');

		$this->db->join('add_class c', 'c.add_class_id=a.add_class_id');

		$q = $this->db->get('studentmarks');
		//echo $this->db->last_query(); die();
		
		return $q->result();
	}
	/*function view_internal_marks($no_)///ra
	{
		
		$this->db->distinct('a.add_marks_id');
		$this->db->select('a.*');
		$this->db->where('b.add_class_id' ,$no_);
		$this->db->from('studentmarks a');
		$this->db->join('add_class b', 'b.add_class_id=a.add_class_id');

		$q = $this->db->get('studentmarks');
		//echo $this->db->last_query(); die();
		
		return $q->result();
	}
*/
}