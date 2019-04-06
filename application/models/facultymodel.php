<?php
class facultymodel extends CI_Model{
	function fetchtable()
	{
		$query = $this->db->get("faculty_personal");
		return $query->result();
	}
	function savingfaculty()
	{
		$data = array(
			'Date of Commencement' => $this->input->post('Date of Commencement'),
			'First Name' => $this->input->post('First Name'),
			'Last Name' => $this->input->post('Last Name'),
			'Father Name' => $this->input->post('Father Name'),
			'Mother Name' => $this->input->post('Mother Name'),
			'Husband/Wife Name' => $this->input->post('Husband/Wife Name'),
			'D.O.B' => $this->input->post('D.O.B'),
			'Blood Group' => $this->input->post('Blood Group'),
			'Gender' => $this->input->post('Gender'),
			'Nationality' => $this->input->post('Nationality'),
			'Category' => $this->input->post('Category'),
			'Faculty Contact No.' => $this->input->post('Faculty Contact No.'),
			'Faculty Email' => $this->input->post('Faculty Email'),
			'Alternate Contact No.' => $this->input->post('Alternate Contact No.'),
			'Alternate Email' => $this->input->post('Alternate Email'),
			'C_State' => $this->input->post('State'),
			'C_City' => $this->input->post('City'),
			'C_Pincode' => $this->input->post('Pincode'),
			'P_State' => $this->input->post('State'),
			'P_City' => $this->input->post('City'),
			'P_Pincode' => $this->input->post('Pincode'),
			'H_Passing Year' => $this->input->post('Passing Year'),
			'H_Board' => $this->input->post('Board'),
			'H_Percentage' => $this->input->post('Percentage'),
			'I_Passing Year' => $this->input->post('Passing Year'),
			'I_Board' => $this->input->post('Board'),
			'I_Percentage' => $this->input->post('Percentage'),
			'Graduation' => $this->input->post('Graduation'),
			'G_Passing Year' => $this->input->post('Passing Year'),
			'G_University' => $this->input->post('Board'),
			'G_Percentage' => $this->input->post('Percentage'),
			'Post Graduation' => $this->input->post('Post Graduation'),
			'P_Passing Year' => $this->input->post('Passing Year'),
			'P_University' => $this->input->post('Board'),
			'P_Percentage' => $this->input->post('Percentage'),
			'Other Description' => $this->input->post('Other Description')
			

			




		);
		
		$this->db->insert('faculty_personal',$data);

	}
	/*function saving()
	{
		$data = array(
			'Course_name' => $this->input->post('Course_name'),
			'Semester' => $this->input->post('Semester'),
			'Section' => $this->input->post('Section'),
			'Subject' => $this->input->post('Subject')

		);
		
		$this->db->insert('data',$data);

	}*/
	function del($a){
		$this->db->delete('check_assignment1',array('Assignment_id' => $a));
		return;
	}
	function del1($a){
		$this->db->delete('check_assignment_conroller',array('id' => $a));
		return;
	}
	/*public function edit($a)
	{
		$d = $this->db->get_where('studentmarks',array('Student_Roll'=>$a))->row();
		return $d;
	}
	function update($id)
	{
		$Student_Roll = $this->input->post('Student_Roll');
		$Student_name = $this->input->post('Student_name');
		$marks1 = $this->input->post('marks1');
		$marks2 = $this->input->post('marks2');
		$data =array(
			'Student_Roll' => $Student_Roll,
			'Student_name'=>$Student_name,
			'marks1'=>$marks1,
			'marks2'=>$marks2
		);
		$this->db->where('Student_Roll',$id);
		$this->db->insert('test',$data);
	}*/
}
?>