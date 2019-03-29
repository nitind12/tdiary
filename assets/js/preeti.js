$(document).ready(function()
{
	/*
	$('#myform').submit(function()
	{	
		if($.trim($('#session').val()) == '')
			{
				alert('Session must be filled out');
			}
		else if($.trim($('#course').val()) == '')
			{
				alert('Course must be filled out');
			}
		else if($.trim($('#txtsemester').val()) == '')
			{
				alert('Semester must be filled out');
			}
		else if($.trim($('#txtDOC').val()) == '')
			{
				alert('Date of commencement must be filled out');
			}
		else if($.trim($('#DOC').val()) == '')
			{
				alert('date of completion must be filled out');
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
	*/


		$('#btnlesssonsubmit').click(function(){

		var data_ = $('#myform').serialize();
		var url_ = site_url_+ '/Lessonview_controller/lessonview';
		console.log(url_);
		$.ajax({
			url:url_,
			type: 'post',
			data: data_,
			success: function(lesson_){
				$('#lessonhere').html(lesson_);
				var obj = JSON.parse(lesson_);
				var len = obj.lm.length;
				
				var str = 'x';
				alert(len);
				if(len > 0){
					str = str + "<tr>";
					str = str + "</tr>";
					str = str + "<th>Lesson id</th>"					
					str = str + "<th>Date</th>"
					str = str + "<th>Start Time</th>"
					str = str + "<th>End Time</th>"
					str = str + "<th>Unit</th>"
					str = str + "<th>faculty</th>"	
					str = str + "<th>No.Of Lecture</th>"
					str = str + "</tr>";

					for(i=0; i<len;i++){
						str = str + '<tr>';
						
						str = str + '<td>' + obj.lm[i].lesson_id+ "</td>";
						str = str + '<td>' + obj.lm[i].date + "</td>";
						str = str + '<td>' + obj.lm[i].start_time + "</td>";
						str = str + '<td>' + obj.lm[i].end_time+ "</td>";
						str = str + '<td>' + obj.lm[i].unit + "</td>";
						str = str + '<td>' + obj.lm[i].faculty_id + "</td>";
						str = str + '<td>' + obj.lm[i].no_of_lecture+ "</td>";
						
						str = str + '</tr>';
					}
					$('#lessonhere').html(str);
				} else {
					$('#lessonhere').html('No data found');
				}
			}, error: function(xhr, error, status){
				$('#lessonhere').html(xhr.responseText);
			}

		});
	});

});