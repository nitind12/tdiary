$(document).ready(function()
{
	$('#myform1').submit(function()
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
		else if($.trim($('#Student_Roll').val()) == '')
			{
				alert('Student_Roll must be filled out');
			}
		/*else if($.trim($('#Student_name').val()) == '')
			{
				alert('Student_name must be filled out');
			}*/
		else if($.trim($('#marks1').val()) == '')
			{
				alert('marks1 must be filled out');
			}
		else if($.trim($('#marks2').val()) == '')
			{
				alert('marks2 must be filled out');
			}
		
		else
			{
				$('#myform1').submit();
			}
		return false;
		
	});
	$('#myform2').submit(function()
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
		else if($.trim($('#Given_date').val()) == '')
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
				$('#myform2').submit();
			}
		return false;
		
	});
	$('#btnViewmarks').click(function(){
		var data_ = $('#myform3').serialize();

		$.ajax({
			url:site_url_+ '/marks/viewmarks',
			type: 'post',
			data: data_,
			datatype: 'json',
			
			success: function(intel){
				var obj = JSON.parse(intel);
				var len = obj.marks.length;
				
				var str = '';
				if(len > 0){
					str = str + "<tr>";
					str = str + "</tr>";
					str = str + "<th> Student_Roll</th>"
					str = str + "<th> Student_name</th>"
					str = str + "<th> Internal marks1</th>"
					str = str + "<th> Internal marks2</th>"
					str = str + "</tr>";
					for(i=0; i<len;i++){
						str = str + '<tr>';
						str = str + '<td>' + obj.marks[i].Student_Roll + "</td>";
						str = str + '<td>' + obj.marks[i].first_name + "</td>";
						str = str + '<td>' + obj.marks[i].marks1 + "</td>";
						str = str + '<td>' + obj.marks[i].marks2 + "</td>";
						
						str = str + '</tr>';
					}
					$('#markshere').html(str);

				}
			}, error: function(xhr, error, status){
				$('#markshere').html(xhr.responseText);
			}

		});
	});

});
