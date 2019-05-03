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
		
			$('#Password, #RePassword').on('keyup', function () {
  		if ($('#Password').val() == $('#RePassword').val()) {
    			$('#message').html('Matching').css('color', 'green');
    			$('#btnsign').removeAttr('disabled');
  				} else {
   				 $('#message').html('Not Matching').css('color', 'red');
					$('#btnsign').attr('disabled','disabled');
    			}
					});

			$('').change(function(){
				var course_id
			})		
	$('#cmbAttendanceReport').click(function()
	{
		$('#msg_').html('');
		var clsid = $('#txtclsid').val();
		var sess_ = $('#txtSession').val();
		var data_ = $('#frmattendancereports').serialize();
		var url_ = site_url_ + "/main/view_attendance_controller_via_ajax/"+clsid+'/'+sess_;
		//console.log(url_);

		$.ajax({
			url:url_,
			type: 'post',
			data: data_,
			success: function(reports_){
				//$('#reportshere').html(reports_);
				
				var obj = JSON.parse(reports_);
				var len = obj.reports_.length;

				var str = 'x';
				

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
					}
					$('#reportshere').html(str);	//print table heading
				} else {
					$('#reportshere').html('No data found');
				}
			}, error: function(xhr, error, status){
				$('#reportshere').html(xhr.responseText);
			}
		});
	return false;
	});	

		$('#sessionji').change(function(){
			$('#crs_for_attendance').change();	
		});

		$('#semji').change(function(){
			$('#crs_for_attendance').change();	
		});

		$('#sectionji').change(function(){
			$('#crs_for_attendance').change();	
		});

		$('#subjectji').change(function(){
			$('#crs_for_attendance').change();	
		});

		$('#crs_for_attendance').change(function(){
			$('#msg_').html('');
			var url_ = site_url_ + "/main/specificClass";
			var data_ = $('#frmattendancereports').serialize();
			$.ajax({
				type:"POST",
				data: data_,
				url: url_,
				success: function(data){
					var obj = JSON.parse(data);
					var url__ = '';
					
					if(obj.clsid != null){
						var url__ = site_url_+'/main/view_attendance_controller/'+obj.clsid['add_class_id']+"/"+$('#sessionji').val();
						$('#frmattendancereports').attr('action', url__);
						$('#txtclsid').val(obj.clsid['add_class_id']);
						$('#txtSession').val($('#sessionji').val());
					} else {
						$('#msg_').html('X: Selected Combination is not found')
					}
				}
			})
			return false;
		});


		$('#Course').change(function(){
			if($('#Course').val() != '' && $('#Semester').val() !=0){
				var url_ = site_url_+"/main/get_subjects";
				var data_ = $('#frmclass').serialize();
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
					$('#Subject_Name').html(str);
				},
					
				

				});
			}
		});

		$('#Semester').change(function(){
			$('#Course').change();

		
		});

$('#Courseasign').change(function(){

			if($('#Courseasign').val() != '' && $('#Semesterasign').val() !=0){
				var url_ = site_url_+"/main/get_subjectsasign";
				var data_ = $('#frmassign').serialize();
				$.ajax({
				type:"POST",
				data: data_,
				url: url_,
				success: function(data){
					var obj = JSON.parse(data);
					alert(obj.subjects.length);
					var str = '';
					str = str + "<option value=''>Select Subject</option>";
					for(i=0; i<obj.subjects.length; i++){
						str = str + "<option value='"+obj.subjects[i].subject_id+"'>"+obj.subjects[i].subject_name+"</option>";
					}
					$('#SubjectNameasign').html(str);
				},
					
				

				});
			}
		});

		$('#Semesterasign').change(function(){
			$('#Courseasign').change( );

		
		});

});
