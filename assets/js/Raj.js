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
	$('#myform3').submit(function()
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
		
		
		else
			{
				$('#myform3').submit();
			}
		return false;
		
	});
	$('#form100').submit(function()
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
		
		else if($.trim($('#Marks').val()) == '')
			{
				alert('Class_Test_Marks must be filled out');
			}
		
		else
			{
				$('#form100').submit();
			}
		return false;
		
	});


	$('#form101').submit(function()
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
		
		else if($.trim($('#Practical_marks').val()) == '')
			{
				alert('Practical_Marks must be filled out');
			}
		
		else
			{
				$('#form101').submit();
			}
		return false;
		
	});

	$('#form102').submit(function()
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
		else if($.trim($('#Assignment_id').val()) == '')
			{
				alert('Assignment_id must be filled out');
			}
		
		
		else if($.trim($('#Submission_date').val()) == '')
			{
				alert('Submission_date must be filled out');
			}
		else if($.trim($('#Late_submission').val()) == '')
			{
				alert('Late_submission must be filled out');
			}
		else if($.trim($('#Grade').val()) == '')
			{
				alert('Grade must be filled out');
			}
		
		else
			{
				$('#form102').submit();
			}
		return false;
		
	});









	$('#btnViewmarks11').click(function(){
		
		var data_ = $('#myform3').serialize();
		
		$.ajax({
			url:site_url_+ '/marks/viewmarks',
			method: 'post',
			data: data_,
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
					$('#markshere11').html(str);

				}else{
					$('#markshere11').html('No Data Found');
				}
			}, error: function(xhr, error, status){
				$('#markshere11').html(xhr.responseText);
			}

		});
	});






$('#btnView').click(function(){
	//alert('hello');
		var data_ = $('#myform4').serialize();

		$.ajax({
			url:site_url_+ '/markscontroller/viewmarks',
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
					str = str + "<th> Student_Roll</th>"
					str = str + "<th> Student_name</th>"
					str = str + "<th> Class_Test_Marks</th>"
					
					str = str + "</tr>";
					for(i=0; i<len;i++){
						str = str + '<tr>';
						str = str + '<td>' + obj.marks[i].Student_Roll + "</td>";
						str = str + '<td>' + obj.marks[i].first_name + "</td>";
						str = str + '<td>' + obj.marks[i].Marks + "</td>";
						
						
						str = str + '</tr>';
					}
					$('#markshere_').html(str);

				}else{
					$('#markshere_').html('No data found');
				}
			}, error: function(xhr, error, status){
				$('#markshere_').html(xhr.responseText);
			}

		});
	});





$('#btnViewmarks').click(function(){
	
		var data_ = $('#myform5').serialize();

		
		$.ajax({
			url:site_url_+ '/practicalmarkscontroller/viewmarks',
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
					str = str + "<th> Student_Roll</th>"
					str = str + "<th> Student_name</th>"
					str = str + "<th>Practical_marks</th>"
					
					str = str + "</tr>";
					for(i=0; i<len;i++){
						str = str + '<tr>';
						str = str + '<td>' + obj.marks[i].Student_Roll + "</td>";
						str = str + '<td>' + obj.marks[i].first_name + "</td>";
						str = str + '<td>' + obj.marks[i].Practical_marks + "</td>";
						
						
						str = str + '</tr>';
					}
					$('#markshere').html(str);

				}else{
					$('#markshere').html('No data found');
				}
			}, error: function(xhr, error, status){
				$('#markshere').html(xhr.responseText);
			}

		});
	});




$('#btnViewmarks1').click(function(){
	
	
		var data_ = $('#myform6').serialize();

		
		$.ajax({
			url:site_url_+ '/givenassignmentcontroller/viewmarks',
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
					str = str + "<th> Assignment_id</th>"
					str = str + "<th> Given_date</th>"
					str = str + "<th>Submission_date</th>"
					str = str + "<th>Last_submission_date</th>"
					str = str + "<th>Unit</th>"
					str = str + "<th>Topic</th>"
					
					
					str = str + "</tr>";
					
					for(i=0; i<len;i++){

						str = str + '<tr>';
						str = str + '<td>' + obj.marks[i].Assignment_id + "</td>";
						str = str + '<td>' + obj.marks[i].Given_date + "</td>";
						str = str + '<td>' + obj.marks[i].Submission_date + "</td>";
						str = str + '<td>' + obj.marks[i].Last_submission_date + "</td>";
						str = str + '<td>' + obj.marks[i].Unit + "</td>";
						str = str + '<td>' + obj.marks[i].Topic + "</td>";
						
						
						
						str = str + '</tr>';
					}
					$('#markshere1').html(str);

				}else{
					$('#markshere1').html('no data found');
				}
			}, error: function(xhr, error, status){
				$('#markshere1').html(xhr.responseText);
			}

		});
	});



$('#update').click(function(){
		
		var data_ = $('#myform7').serialize();

		$.ajax({
			url:site_url_+ '/update_assignment_controller/viewmarks',
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
					str = str + "<th> Student_Roll</th>"
					str = str + "<th> Student_name</th>"
					str = str + "<th> Assignment_id</th>"
					str = str + "<th> Submission_date</th>"
					str = str + "<th> Late_submission</th>"
					str = str + "<th> Grade</th>"
					str = str + "</tr>";
					for(i=0; i<len;i++){
						str = str + '<tr>';
						str = str + '<td>' + obj.marks[i].Student_Roll + "</td>";
						str = str + '<td>' + obj.marks[i].first_name + "</td>";
						str = str + '<td>' + obj.marks[i].Assignment_id + "</td>";
						str = str + '<td>' + obj.marks[i].Submission_date + "</td>";
						str = str + '<td>' + obj.marks[i].Late_submission + "</td>";
						str = str + '<td>' + obj.marks[i].Grade + "</td>";
						
						str = str + '</tr>';
					}
					$('#updatehere').html(str);

				}else{
					$('#updatehere').html('No data found');
				}
			}, error: function(xhr, error, status){
				$('#updatehere').html(xhr.responseText);
			}

		});
	});







});