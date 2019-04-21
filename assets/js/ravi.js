$(function()
{
	$('#frmLogin').submit(function(){
		if($.trim($('#username').val()) == ''){
			alert('001: Please Enter Username');
		} else if($.trim($('#password').val()) == ''){
			alert('002: Please Enter password');
		} else {
			$('#frmLogin').submit();
		}
		return false;
	});

	$('#myModal').css('display', 'none');
		

		$('#btntake').click(function()
	{
		var data_ = $('#frmattendancereports').serialize();
		var url_ = site_url_+ '/Main/view_attendance_controller';
		//console.log(url_);

		$.ajax({
			url:url_,
			type: 'post',
			data: data_,
			success: function(reports_){
				$('#reportshere').html(reports_);
				var obj = JSON.parse(reports_);
				var len = obj.reports_.length;

				var str = 'x';
				alert(len)

				if(len > 0){
					str = str + "<tr>";
					str = str + "</tr>";
					//str = str + "<th>Session</th>"
					str = str + "<th>Roll-No</th>"
					str = str + "<th>Attendance</th>"
					
					for(i=0; i<len;i++){
						str = str + '<tr>';	
						str = str + '<td>' + obj.reports_[i].roll_no + "</td>";
						str = str + '<td>' + obj.reports_[i].attendance_status + "</td>";
						
						str = str + '</tr>';
				}$('#reportshere').html(str);	//print table heading
			}else {
					$('#reportshere').html('No data found');
				}
			}, error: function(xhr, error, status){
				$('#reportshere').html(xhr.responseText);
			}
		});
	});	

		$('#crs_for_attendance').change(function(){
			var url_ = site_url_ + "/main/specificClass";
			var data_ = $('#frmViewAttendance').serialize();

			$.ajax({
				type:"POST",
				data: data_,
				url: url_,
				success: function(data){
					var obj = JSON.parse(data);
					var url__ = site_url_+'/main/view_attendance_controller/'+obj.clsid['add_class_id']+"/"+$('#sessionji').val();
					alert(url__);
					//$('#frmattendancereports').attr('action', url__);
				}
			})
			return false;
		});

});
