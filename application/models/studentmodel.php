<?php
class studentmodel extends CI_Model{
	function fetchtable()
	{
		$query = $this->db->get("student_personal");
		return $query->result();
	}
	function savingstudent()
	{
		$data = array(
			'Date of Commencement' => $this->input->post('Date of Commencement'),
			'Course of Admission' => $this->input->post('Course of Admission'),
			'First Name' => $this->input->post('First Name'),
			'Last Name' => $this->input->post('Last Name'),
			'Father Name' => $this->input->post('Father Name'),
			'Mother Name' => $this->input->post('Mother Name'),
			'D.O.B' => $this->input->post('D.O.B'),
			'Blood Group' => $this->input->post('Blood Group'),
			'Gender' => $this->input->post('Gender'),
			'Nationality' => $this->input->post('Nationality'),
			'Category' => $this->input->post('Category'),
			'Student Contact No.' => $this->input->post('Student Contact No.'),
			'Student Email' => $this->input->post('Student Email'),
			'Alternate Contact No.' => $this->input->post('Alternate Contact No.'),
			'Alternate Email' => $this->input->post('Alternate Email'),
			'State' => $this->input->post('State'),
			'City' => $this->input->post('City'),
			'Pincode' => $this->input->post('Pincode'),
			'State' => $this->input->post('State'),
			'City' => $this->input->post('City'),
			'Pincode' => $this->input->post('Pincode'),
			'Passing Year' => $this->input->post('Passing Year'),
			'Board' => $this->input->post('Board'),
			'Percentage' => $this->input->post('Percentage'),
			'Passing Year' => $this->input->post('Passing Year'),
			'Board' => $this->input->post('Board'),
			'Percentage' => $this->input->post('Percentage'),
			'Graduation' => $this->input->post('Graduation'),
			'Passing Year' => $this->input->post('Passing Year'),
			'Board' => $this->input->post('Board'),
			'Percentage' => $this->input->post('Percentage'),
			'Other Description' => $this->input->post('Other Description')
			

			




		);
		
		$this->db->insert('faculty_personal,$data');

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