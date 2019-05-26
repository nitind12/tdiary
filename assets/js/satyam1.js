$(document).ready(function()
{

		$('#Course_Name').change(function(){
			if($('#Course_Name').val() != '' && $('#Semester').val() !=0){
				var url_ = site_url_+"/Edittimetablecontroller/get_subjectT";
				var data_ = $('#myform100').serialize();
				$.ajax({
				type:"POST",
				data: data_,
				url: url_,
				success: function(data){
					var obj = JSON.parse(data);
					var str = '';
					str = str + "<option value=''>Select Subject</option>";
					for(i=0; i<obj.subjects.length; i++){
						str = str + "<option value='"+obj.subjects[i].subject_id+"'>"+obj.subjects[i].subject_name+"</option>";
					}
					$('#Subject').html(str);
				},
					
				

				});
			}

			});

		$('#Semester').change(function(){
			$('#Course_Name').change();

		
		});

	$('#btnsubmit1').click(function(){
		
		var data_ = $('#myform1001').serialize();


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

					//str = str + "<tr>";
					//str = str + "</tr>";
					str = str + "<th> Semester</th>"
					str = str + "<th> Section</th>"
					str = str + "<th> Course_id</th>"
					str = str + "<th> Subject_id</th>"
					str = str + "<th> Session</th>"
					str = str + "<th> Time</th>"
					str = str + "<th> Room</th>"

					
					
					str = str + "</tr>";
					for(i=0; i<len;i++){
						//alert(obj.marks[i].Subject_id);
						id_ = obj.marks[i].Day+obj.marks[i].Time;
						$('#'+id_).html(obj.marks[i].Subject_id);

                        }
						
				}
				else{
					$('#timetablehere1').html('no data found');
				}

			}, error: function(xhr, error, status){
				$('#timetablehere1').html(xhr.responseText);
			}

		});
	});
	$('#btnsubmit2').click(function(){
		
		var data_ = $('#myform100').serialize();


		$.ajax({
			url:site_url_+ '/Edittimetablecontroller/viewmarks',
			method: 'post',
			data: data_,
			datatype: 'json',
			
			success: function(intel){
				var obj = JSON.parse(intel);
				var len = obj.marks.length;
				
				var str = '';
				
				if(len > 0){

					//str = str + "<tr>";
					//str = str + "</tr>";
					str = str + "<th> Semester</th>"
					str = str + "<th> Section</th>"
					str = str + "<th> Course_id</th>"
					str = str + "<th> Subject_id</th>"
					str = str + "<th> Session</th>"
					str = str + "<th> Time</th>"
					str = str + "<th> Room</th>"

					
					
					str = str + "</tr>";
					for(i=0; i<len;i++){
						//alert(obj.marks[i].Subject_id);
						id_ = obj.marks[i].Day+obj.marks[i].Time;
						$('#'+id_).html(obj.marks[i].subject_id);

                        }
						
				}
				else{
					$('#timetablehere2').html('no data found');
				}

			}, error: function(xhr, error, status){
				$('#timetablehere2').html(xhr.responseText);
			}

		});
});

	$('#btnsave').click(function(){
		var data_ = $('#myform100').serialize();

		
		$.ajax({
			url:site_url_+ '/savingdata3/time_edit_controller',
			method: 'post',
			data: data_,
			datatype: 'json',
			

			success: function(time_table)
			{

				var obj = JSON.parse(time_table);
				var len = obj.time_table.length;
				
				var str = '';
				
				if(len > 0){

					//str = str + "<tr>";
					//str = str + "</tr>";
					str = str + "<th> Semester</th>"
					str = str + "<th> Section</th>"
					str = str + "<th> Course_id</th>"
					str = str + "<th> Subject_id</th>"
					str = str + "<th> Session</th>"
					str = str + "<th> Time</th>"
					str = str + "<th> Room</th>"

					
					
					str = str + "</tr>";
					for(i=0; i<len;i++){
						//alert(obj.marks[i].Subject_id);
						id_ = obj.time_table[i].Day+obj.time_table[i].Time;
						$('#'+id_).html(obj.time_table[i].Subject_id);

                        }
						
				}
				else{
					$('#timetablehere2').html('no data found');
				}

			}, error: function(xhr, error, status){
				$('#timetablehere2').html(xhr.responseText);
			}

		});
	});

});