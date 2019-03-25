$(document).ready(function()
{
	$('#myform').submit(function()
	{
		if($.trim($('#course').val()) == '')
			{
				alert('Course must be filled out');
			}
		else if($.trim($('#txtsemester').val()) == '')
			{
				alert('Semester must be filled out');
			}
		else if($.trim($('#txtsection').val()) == '')
			{
				alert('Section must be filled out');
			}
		else if($.trim($('#txtDOC').val()) == '')
			{
				alert('Date of commencement must be filled out');
			}
		else if($.trim($('#txtADOC').val()) == '')
			{
				alert('Actual date of completion must be filled out');
			}
		else if($.trim($('#txtEDOC').val()) == '')
			{
				alert('Expected date of completion must be filled out');
			}
		else if($.trim($('#txtfaculty').val()) == '')
			{
				alert('Faculty name must be filled out');
			}
		else if($.trim($('#txtsubject').val()) == '')
			{
				alert('Subject must be filled out');
			}
		else if($.trim($('#syllabus').val()) == '')
			{
				alert('Syllabus must be filled out');
			}
		else if($.trim($('#txtunit').val()) == '')
			{
				alert('Unit must be filled out');
			}
		else if($.trim($('#topic').val()) == '')
			{
				alert('Topic must be filled out');
			}
		else if($.trim($('#No_Of_Lecture').val()) =='')
			{
				alert('NO of lecture must be filled out');
			}
		else if($.trim($('#txttotal').val()) == '')
			{
				alert('please enter total no of lecture');
			}
		else
			{
				$('#myform').submit();
			}
		return false;
		
	});




	$('#myform1').submit(function()
	{
		if($.trim($('#course').val()) == '')
			{
				alert('Course must be filled out');
			}
		else if($.trim($('#txtsemester').val()) == '')
			{
				alert('Semester must be filled out');
			}
		else if($.trim($('#txtsection').val()) == '')
			{
				alert('Section must be filled out');
			}
		else if($.trim($('#txttime').val()) == '')
			{
				alert('Timeduration must be filled out');
			}
		else if($.trim($('#txtstart').val()) == '')
			{
				alert(' Start time must be filled out');
			}
		else if($.trim($('#txtend').val()) == '')
			{
				alert('End time must be filled out');
			}
		else if($.trim($('#Date').val()) == '')
			{
				alert('Date must be filled out');
			}			
		else if($.trim($('#Unit').val()) == '')
			{
				alert('Unit must be filled out');
			}
		else if($.trim($('#Topic').val()) == '')
			{
				alert('Topic must be filled out');
			}
		else if($.trim($('#Lecture').val()) == '')
			{
				alert('Lecture must be filled out');
			}
		else
			{
				$('#myform1').submit();
			}
		return false;
	});


});