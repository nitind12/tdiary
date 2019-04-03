$(document).ready(function()
{
	$('#myform100').submit(function()
	{
		if($.trim($('#Day').val()) == '')
			{
				alert('Day must be filled out');
			}
		else if($.trim($('#Semester_id').val()) == '')
			{
				alert('Semester_id must be filled out');
			}
		else if($.trim($('#Section').val()) == '')
			{
				alert('Section must be filled out');
			}
		else if($.trim($('#Course_id').val()) == '')
			{
				alert('Course_id must be filled out');
			}
		else if($.trim($('#Subject_id').val()) == '')
			{
				alert('Subject_id must be filled out');
			}
		else if($.trim($('#Faculty_id').val()) == '')
			{
				alert('Faculty_id must be filled out');
			}
		else if($.trim($('#Time_table_id').val()) == '')
			{
				alert('Time_table_id must be filled out');
			}
		else if($.trim($('#Time').val()) == '')
			{
				alert('Time must be filled out');
			}
		else if($.trim($('#Room').val()) == '')
			{
				alert('Room must be filled out');
			}
		
		else
			{
				$('#myform100').submit();
			}
		return false;
		
	});
	/*$('#myform2').submit(function()
	{
		if($.trim($('#Course_name').val()) == '')
			{
				alert('Course_name must be filled out');
			}
		else if($.trim($('#Semester').val()) == '')
			{
				alert('Semester must be filled out');
			}
		else if($.trim($('#Section').val()) == '')
			{
				alert('Section must be filled out');
			}
		else if($.trim($('#Subject').val()) == '')
			{
				alert('Subject must be filled out');
			}
		else if($.trim($('#Assignment_id').val()) == '')
			{
				alert('Assignment_id must be filled out');
			}
		/*else if($.trim($('#Student_name').val()) == '')
			{
				alert('Student_name must be filled out');
			}*/
		/*else if($.trim($('#Given_date').val()) == '')
			{
				alert('Given_date must be filled out');
			}
		else if($.trim($('#Submission_date').val()) == '')
			{
				alert('Submission_date must be filled out');
			}
			else if($.trim($('#Last_submission_date').val()) == '')
			{
				alert('Last_submission_date must be filled out');
			}
			else if($.trim($('#Unit').val()) == '')
			{
				alert('Unit must be filled out');
			}
			else if($.trim($('#Topic').val()) == '')
			{
				alert('Topic must be filled out');
			}
		
		else
			{
				$('#formtestview').submit();
			}
		return false;
		
	});*/
	$('#btnsubmit').click(function(){
		
		var data_ = $('#myform1').serialize();


		$.ajax({
			url:site_url_+ '/viewtimetablecontroller/viewmarks',
			method: 'post',
			data: data_,
			datatype: 'json',
			
			success: function(intel){
				var obj = JSON.parse(intel);
				var len = obj.marks.length;
				
				var str = '';
				
				if(len > 0){
					str = str + "<tr>";
					str = str + "</tr>";
					str = str + "<th> Semester_id</th>"
					str = str + "<th> Section</th>"
					str = str + "<th> Course_id</th>"
					str = str + "<th> Subject_id</th>"
					//str = str + "<th> Faculty_id</th>"
					//str = str + "<th> Time_table_id</th>"
					str = str + "<th> Time</th>"
					str = str + "<th> Room</th>"

					
					//str = str + "<th> Internal marks2</th>"
					str = str + "</tr>";
					for(i=0; i<len;i++){
						str = str + '<tr>';
						str = str + '<td>' + obj.marks[i].Semester_id + "</td>";
						str = str + '<td>' + obj.marks[i].Section + "</td>";
						str = str + '<td>' + obj.marks[i].Course_id + "</td>";
						str = str + '<td>' + obj.marks[i].Subject_id + "</td>";
						//str = str + '<td>' + obj.marks[i].Faculty_id + "</td>";
						//str = str + '<td>' + obj.marks[i].Time_table_id + "</td>";
						str = str + '<td>' + obj.marks[i].Time + "</td>";
						str = str + '<td>' + obj.marks[i].Room + "</td>";

						//str = str + '<td>' + obj.marks[i].marks2 + "</td>";
						
						str = str + '</tr>';
					}
					$('#timetablehere').html(str);

				}
				else{
					$('#timetablehere').html('no data found');
				}
			}, error: function(xhr, error, status){
				$('#timetablehere').html(xhr.responseText);
			}

		});
	});

});
