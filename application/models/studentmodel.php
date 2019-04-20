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
			'Date_of_Commencement' => $this->input->post('Date_of_Commencement'),
			'Course_of_Addmission' => $this->input->post('Course_of_Addmission'),
			'First_Name' => $this->input->post('First_Name'),
			'Last_Name' => $this->input->post('Last_Name'),
			'Father_Name' => $this->input->post('Father_Name'),
			'Mother_Name' => $this->input->post('Mother_Name'),
			'D_O_B' => $this->input->post('D_O_B'),
			'Blood_Group' => $this->input->post('Blood_Group'),
			'Gender' => $this->input->post('Gender'),
			'Nationality' => $this->input->post('Nationality'),
			'Category' => $this->input->post('Category'),
			'Student_Contact_No' => $this->input->post('Student_Contact_No'),
			'Student_Email' => $this->input->post('Student_Email'),
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
			'Graduation_Percentage' => $this->input->post('Graduation_Percentage')
			
			

			




		);
		
		$this->db->insert('student_personal',$data);

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