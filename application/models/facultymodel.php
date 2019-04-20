<?php
class facultymodel extends CI_Model{
	function fetchtable()
	{
		$query = $this->db->get("fac_personal");
		return $query->result();
	}
	function savingfaculty()
	{
		$data = array(
			'Date_of_Commencement' => $this->input->post('Date_of_Commencement'),
			'First_Name' => $this->input->post('First_Name'),
			'Last_Name' => $this->input->post('Last_Name'),
			'Father_Name' => $this->input->post('Father_Name'),
			'Mother_Name' => $this->input->post('Mother_Name'),
			'Husband/Wife_Name' => $this->input->post('Husband/Wife_Name'),
			'D_O_B' => $this->input->post('D_O_B'),
			'Blood_Group' => $this->input->post('Blood_Group'),
			'Gender' => $this->input->post('Gender'),
			'Nationality' => $this->input->post('Nationality'),
			'Category' => $this->input->post('Category'),
			'Faculty_Contact_No' => $this->input->post('Faculty_Contact_No'),
			'Faculty_Email' => $this->input->post('Faculty_Email'),
			'Alternate_Contact_No' => $this->input->post('Alternate_Contact_No'),
			'Alternate_Email' => $this->input->post('Alternate_Email'),
			'Current_State' => $this->input->post('Current_State'),
			'Current_City' => $this->input->post('Current_City'),
			'Current_Pincode' => $this->input->post('Current_Pincode'),
			'Parmanent_State' => $this->input->post('Parmanent_State'),
			'Parmanent_City' => $this->input->post('Parmanent_City'),
			'Parmanent_Pincode' => $this->input->post('Parmanent_Pincode'),
			'Highschool_Passing_Year' => $this->input->post('Highschool_Passing_Year'),
			'Highschool_Board' => $this->input->post('Highschool_Board'),
			'Highschool_Percentage' => $this->input->post('Highschool_Percentage'),
			'Intermediate_Passing_Year' => $this->input->post('Intermediate_Passing_Year'),
			'Intermediate_Board' => $this->input->post('Intermediate_Board'),
			'Intermediate_Percentage' => $this->input->post('Intermediate_Percentage'),
			'Graduation' => $this->input->post('Graduation'),
			'Graduation_Passing_Year' => $this->input->post('Graduation_Passing_Year'),
			'Graduation_University' => $this->input->post('Graduation_University'),
			'Graduation_Percentage' => $this->input->post('Graduation_Percentage'),
			'Post_Graduation' => $this->input->post('Post_Graduation'),
			'Post_Graduation_Passing_Year' => $this->input->post('Post_Graduation_Passing_Year'),
			'Post_Graduation_University' => $this->input->post('Post_Graduation_University'),
			'Post_Graduation_Percentage' => $this->input->post('Post_Graduation_Percentage'),
			'Teaching_Experience' => $this->input->post('Teaching_Experience')
			

			




		);
		
		$this->db->insert('fac_personal',$data);

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