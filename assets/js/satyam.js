$(document).ready(function()
{
	if($('#myform100tn').length!=0){
		var url_ = site_url_ + "/Edittimetablecontroller/viewmarks2";

		$.ajax({
			type: 'POST',
			url: url_,
			success:  function(data){
				var obj = JSON.parse(data);
				
				for(i=0; i<=obj.timetable.length;i++){
					$('#'+obj.timetable[i].Day+obj.timetable[i].Time).html(obj.timetable[i].Subject_id);
				}
			}
		})
	}
	$('#btnsubmit').click(function()
	{
		
		var data_ = $('#myform100').serialize();


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
					$('#timetablehere').html('no data found');
				}

			}, error: function(xhr, error, status){
				$('#timetablehere').html(xhr.responseText);
			}

		});
	});
});