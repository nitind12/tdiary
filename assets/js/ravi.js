$(function()
{
	$('#myModal').css('display', 'none');
		

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
					str = str + "<th>Student-id</th>"
					str = str + "<th>Attendance</th>"
					
					for(i=0; i<len;i++)
					{
						str = str + '<tr>';	
						str = str + '<td>' + obj.reports_[i].student_id + "</td>";
						str = str + '<td>' ;	
										if(obj.reports_[i].attendance_status==1){
												$p='<span style="color: #009000">P</span>';
										str = str  + $p ;
										}else{
											$A='<span style="color: #ff0000">A</span>';
											str = str + $A + "</td>";
										
										}str = str + "</td>";
							
						str = str + '</tr>';
					}
					$('#reportshere_faculty_day').html(str);	//print table heading
				} else {
					$('#reportshere_faculty_day').html('No data found');
				}
			}, error: function(xhr, error, status){
				$('#reportshere_faculty_day').html(xhr.responseText);
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

$('#Courseasign').change(function(){
			if($('#Courseasign').val() != '' && $('#Semesterasign').val() !=0){
				var url_ = site_url_+"/main/get_classassign";
				var data_ = $('#frmassign').serialize();
				$.ajax({
				type:"POST",
				data: data_,
				url: url_,
				success: function(data){
					var obj = JSON.parse(data);
					var str = '';
					str = str + "<option value=''>Select Class</option>";
					for(i=0; i<obj.class.length; i++){
						str = str + "<option value='"+obj.class[i].add_class_id+"'>"+obj.class[i].course_id+obj.class[i].semester_id+obj.class[i].section_id+"</option>";
					}
					$('#Classasign').html(str);
				},
					
				

				});
			}

			});
		
		$('#Semesterasign').change(function(){
			$('#Courseasign').change();

		
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

$('#CourseG').change(function(){

			if($('#CourseG').val() != '' && $('#SessionG').val() !=0){
				var url_ = site_url_+"/main/get_class";
				var data_ = $('#frmPromotedClass').serialize();
				$.ajax({
				type:"POST",
				data: data_,
				url: url_,
				success: function(data){
					var obj = JSON.parse(data);
					var str = '';
					str = str + "<option value=''>Select Class</option>";
					for(i=0; i<obj.class.length; i++){
						str = str + "<option value='"+obj.class[i].add_class_id+"'>"+obj.class[i].course_id+obj.class[i].semester_id+obj.class[i].section_id+"</option>";
					}
					$('#ClassG').html(str);
				},
					
				

				});
			}

			});

		$('#SessionG').change(function(){
			$('#CourseG').change();


			
		});

$('#CourseP').change(function(){

			if($('#CourseP').val() != '' && $('#SessionP').val() !=0){
				var url_ = site_url_+"/main/get_classP";
				var data_ = $('#frmPromotedClass1').serialize();
				$.ajax({
				type:"POST",
				data: data_,
				url: url_,

				success: function(data){
				
					var obj = JSON.parse(data);
					var str = '';
					str = str + "<option value=''>Select Class</option>";
					for(i=0; i<obj.class.length; i++){
						str = str + "<option value='"+obj.class[i].add_class_id+"'>"+obj.class[i].course_id+obj.class[i].semester_id+obj.class[i].section_id+"</option>";
					}
					$('#ClassP').html(str);
			
				},
					
				

				});
			}

			});

		$('#SessionP').change(function(){
			$('#CourseP').change();

			
		});

$('#CourseP1').change(function(){

			if($('#CourseP1').val() != '' && $('#SessionP1').val() !=0){
				var url_ = site_url_+"/main/get_classP1";
				var data_ = $('#frmPromotedClass1').serialize();
				$.ajax({
				type:"POST",
				data: data_,
				url: url_,

				success: function(data){
				
					var obj = JSON.parse(data);
					var str = '';
					str = str + "<option value=''>Select Class</option>";
					for(i=0; i<obj.class.length; i++){
						str = str + "<option value='"+obj.class[i].add_class_id+"'>"+obj.class[i].course_id+obj.class[i].semester_id+obj.class[i].section_id+"</option>";
					}
					$('#ClassP1').html(str);
			
				},
					
				

				});
			}

			});

		$('#SessionP1').change(function(){
			$('#CourseP1').change();

			
		});

$('#CourseG').change(function(){

			if($('#CourseG').val() != '' && $('#SessionG').val() !=0){
				var url_ = site_url_+"/main/get_student";
				var data_ = $('#frmPromotedClass').serialize();
				$.ajax({
				type:"POST",
				data: data_,
				url: url_,
				success: function(data){
					var obj = JSON.parse(data);
					var str = '';

					for(i=0; i<obj.student.length; i++){
						str = str + "<input type='checkbox' name='students[]' id='checkbox"+obj.student[i].student_id+"' value='"+obj.student[i].student_id+"'>"+obj.student[i].first_name+obj.student[i].last_name+"<br/>";
					}
					$('#getstudent').html(str);
				},
					
				

				});
			}

			});

		$('#SessionG').change(function(){
			$('#CourseG').change();

			
		});

$('#CourseP').change(function(){

			if($('#CourseP').val() != '' && $('#SessionP').val() !=0){
				var url_ = site_url_+"/main/get_studentP";
				var data_ = $('#frmPromotedClass1').serialize();
				$.ajax({
				type:"POST",
				data: data_,
				url: url_,
				success: function(data){
					var obj = JSON.parse(data);
					var str = '';

					for(i=0; i<obj.student.length; i++){
						str = str + "<input type='checkbox' name='stud[]' id='checkbox"+obj.student[i].student_id+"' value='"+obj.student[i].student_id+"'>"+obj.student[i].first_name+'  '+obj.student[i].last_name+"<br/>";
					}
					$('#getstudentP').html(str);
				},
					
				

				});
			}

			});

		$('#SessionP').change(function(){
			$('#CourseP').change();

			
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
		$('#optionsRadios5').click(function(){
			$('.PRESENT_class').prop('checked', true);
		});

		$('#optionsRadios4').click(function(){
			$('.ABSENT_class').prop('checked', true);
		});
		




	$('#Totalattensubmit').click(function(){
		var data_ = $('#frmtotalatten').serialize();
		var url_ = site_url_+ '/Main/totalAttenview';

		$.ajax({
			url:url_,
			type: 'post',
			data: data_,
			success: function(weekly_){
				$('#weeklyhere').html(weekly_);
				var obj = JSON.parse(weekly_);
				var len = obj.week.length;

				var str = 'x';
				alert(len);
				if(len > 0){
					str = str + "<tr>";
					str = str + "</tr>";
					str = str + "<th>Week No</th>"
					str = str + "<th>Date</th>"
					str = str + "<th>Unit</th>"	
					str = str + "<th>Topic</th>"
					str = str + "<th>No Of Lecture</th>"
					str = str + "<th>NO Of lecture Schedule</th>"
					str = str + "<th>No of Lost Due To Holiday</th>"
					str = str + "<th>No Of Lost Due To CL</th>"
					str = str + "<th>No Of Extra Taken</th>"
					str = str + "<th>No Of Lecure Actual Taken</th>"
					
					str = str + "</tr>";

					for(i=0; i<len;i++){
						str = str + '<tr>';	
						str = str + '<td>' + obj.week[i].week_id + "</td>";
						str = str + '<td>' + obj.week[i].date + "</td>";
						str = str + '<td>' + obj.week[i].unit+ "</td>";
						str = str + '<td>' + obj.week[i].topic+ "</td>";
						str = str + '<td>' + obj.week[i].no_of_lecture+ "</td>";
						str = str + '<td>' + obj.week[i].no_of_lecture_schedule+ "</td>";
						str = str + '<td>' + obj.week[i].no_of_lost_due_to_holiday+ "</td>";
						str = str + '<td>' + obj.week[i].no_of_lost_due_to_cl+ "</td>";
						str = str + '<td>' + obj.week[i].no_extra_taken+ "</td>";
						str = str + '<td>' + obj.week[i].no_of_lecture_actual_taken+ "</td>";
						
						str = str + '</tr>';
				}$('#weeklyhere').html(str);
			}else {
					$('#weeklyhere').html('No data found');
				}
			}, error: function(xhr, error, status){
				$('#weeklyhere').html(xhr.responseText);
			}

		});
	});


//This is for hiding assclass_id and session_id from url
		$('.take_attend_class').click(function(){
			var str = this.id;
			var arr = str.split('~');
			$('#addclassidED').val(arr[0]);
			$('#sessionidED').val(arr[1]);
			

			$('#frmtakeattend_class').submit();
		});	



		$('.attend_daywiseclass').click(function(){
			var str = this.id;
			var arr = str.split('~');
			$('#addclassidED').val(arr[0]);
			$('#sessionidED').val(arr[1]);
			

			$('#frmatten_daywise').submit();
		});


$('#Course_admin').change(function(){
	

			if($('#Course_admin').val() != '' && $('#Semester_admin').val() !=0){
				var url_ = site_url_+"/main/get_subjectc23";
				var data_ = $('#frmconsolidateAd').serialize();
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
					$('#subject_name_admin').html(str);
				},
					
				

				});
			}

			});

		$('#Semester_admin').change(function(){
			$('#Course_admin').change();

		
		});
$('#Course_admin').change(function(){

			if($('#Course_admin').val() != '' && $('#Session_admin').val() !=0){
				var url_ = site_url_+"/main/get_classC23";
				var data_ = $('#frmconsolidateAd').serialize();
				$.ajax({
				type:"POST",
				data: data_,
				url: url_,

				success: function(data){
				
					var obj = JSON.parse(data);
					var str = '';
					str = str + "<option value=''>Select Class</option>";
					for(i=0; i<obj.class.length; i++){
						str = str + "<option value='"+obj.class[i].add_class_id+"'>"+obj.class[i].course_id+obj.class[i].semester_id+obj.class[i].section_id+"</option>";
					}
					$('#Class_admin').html(str);
			
				},
					
				

				});
			}

			});

		$('#Session_admin').change(function(){
			$('#Course_admin').change();

			
		});


$('#cmbAdminCON').click(function()
	{

		var data_ = $('#frmconsolidateAd').serialize();
		var url_ = site_url_+"/main/reports_attendance_controller_CA";
		//console.log(url_);

		$.ajax({
			url:url_,
			type: 'post',
			data: data_,
			success: function(consolidate){
				
				var obj = JSON.parse(consolidate);
				var len = obj.consolidate.length;
				var len1 = obj.date1.length;
				var len2 = obj.student.length;
				var str = 'x';
				alert(len1);

				if(len > 0){
					str = str + "<tr>";
					//str = str + "<th>Session</th>"
					str = str + "<th>Roll-No</th>"
						for(i=0; i<len1;i++)
						{
							if (obj.date1[i].date==obj.date1[i].date) 
							{
							str = str + "<th>"+obj.date1[i].date+"</th>"
							}

						}
						str = str + '</tr>';	
						for(k=0; k<len2;k++)
						{
							str = str + "<tr>";
							str = str + '<td>' + obj.student[k].student_id + "</td>";
							for(i=0;i<len1;i++){
								for(j=0; j<len; j++){
									if (obj.date1[i].date==obj.consolidate[j].date && obj.student[k].student_id==obj.consolidate[j].student_id){
										str = str + '<td>' ;	
										if(obj.consolidate[j].attendance_status==1){
												$p='<span style="color: #009000">P</span>';
										str = str  + $p ;
										}else{
											$A='<span style="color: #ff0000">A</span>';
											str = str + $A + "</td>";
										
										}str = str + "</td>";
									}
								}
							}
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


$('#cmbAttendanceReportcom').click(function()
	
	{
		var data_ = $('#frmconsolidate2').serialize();
		var url_ = site_url_+"/main/reports_attendance_controller_via_ajax_studentCA";
		//console.log(url_);

		$.ajax({
			url:url_,
			type: 'post',
			data: data_,
			success: function(consolidate){
				
				var obj = JSON.parse(consolidate);
				var len = obj.consolidate.length;
				var len1 = obj.date1.length;
				var len2 = obj.student.length;
				var str = 'x';
				if(len > 0){
					str = str + "<tr>";
					//str = str + "<th>Session</th>"
					str = str + "<th>Roll-No</th>"
						for(i=0; i<len1;i++)
						{
							if (obj.date1[i].date==obj.date1[i].date) 
							{
							str = str + "<th>"+obj.date1[i].date+"</th>"
							}

						}
						str = str + '</tr>';

			
						for(k=0; k<len2;k++)
						{
							
							str = str + "<tr>";
							str = str + '<td>' + obj.student[k].student_id + "</td>";
							for(i=0;i<len1;i++){

								for(j=0; j<len; j++){
									if (obj.date1[i].date==obj.consolidate[j].date && obj.student[k].student_id==obj.consolidate[j].student_id){
										str = str + '<td>' ;	
										if(obj.consolidate[j].attendance_status==1){
												$p='<span style="color: #009000">P</span>';
										str = str  + $p ;
										}else{
											$A='<span style="color: #ff0000">A</span>';
											str = str + $A + "</td>";
										
										}str = str + "</td>";
									}
								}
							}
							str = str + '</tr>';
						}	
					$('#reportshere2').html(str);	//print table heading
				} else {
					$('#reportshere2').html('No data found');
				}
			}, error: function(xhr, error, status){
				$('#reportshere2').html(xhr.responseText);
			}
		});
	return false;
	});	


$('#cmbAttendanceReport_day').click(function()
	{
		
		var data_ = $('#frmconsolidate_day').serialize();
		var url_ = site_url_+"/main/reports_attendance_controller_via_ajax_student_daywise";
		//console.log(url_);

		$.ajax({
			url:url_,
			type: 'post',
			data: data_,
			success: function(consolidate){
				
				var obj = JSON.parse(consolidate);
				var len = obj.consolidate.length;
				var len1 = obj.date1.length;
				var len2 = obj.student.length;
				var str = 'x';
				if(len > 0){
					str = str + "<tr>";
					//str = str + "<th>Session</th>"
					str = str + "<th>Roll-No</th>"
						for(i=0; i<len1;i++)
						{
							if (obj.date1[i].date==obj.date1[i].date) 
							{
							str = str + "<th>"+obj.date1[i].date+"</th>"
							}

						}
						str = str + '</tr>';

			
						for(k=0; k<len2;k++)
						{
							
							str = str + "<tr>";
							str = str + '<td>' + obj.student[k].student_id + "</td>";
							for(i=0;i<len1;i++){

								for(j=0; j<len; j++){
									if (obj.date1[i].date==obj.consolidate[j].date && obj.student[k].student_id==obj.consolidate[j].student_id){
										str = str + '<td>' ;	
										if(obj.consolidate[j].attendance_status==1){
												$p='<span style="color: #009000">P</span>';
										str = str  + $p ;
										}else{
											$A='<span style="color: #ff0000">A</span>';
											str = str + $A + "</td>";
										
										}str = str + "</td>";
									}
								}
							}
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


$('#cmbstudenttotal').click(function()
	{
		alert("dssd");
				
		var data_ = $('#frmtotal2').serialize();
		var url_ = site_url_+"/main/reports_attendance_controller_via_ajax_student_total";
		//console.log(url_);

		$.ajax({
			url:url_,
			type: 'post',
			data: data_,
			success: function(consolidate)
			{
				
				var obj = JSON.parse(consolidate);
				var len = obj.consolidate.length;
				var str = 'x';
				if(len > 0)
					{
					str = str + "<tr>";
					str = str + "<th>Roll-No</th>";
					str = str + "<th>Total No of Days</th>";
					str = str + "<th>Present Days</th>";
					str = str + "<th>Absent Days</th>";
					str = str + "<th>Percentage</th>";
					
					str = str + '</tr>';
					var Present=0;
					var Absent=0;

					var Percentage=0;
						
					str = str + "<tr>";
						
						str = str + '<td>' + obj.consolidate[0].student_id + "</td>";
					for(k=0; k<len;k++)
					{
					
						if(obj.consolidate[k].attendance_status==1)
								{
										Present++;	

								}
								else
								{
									Absent++;		
								}
										
					}
						var $P=	'<span style="color: #009000"></span>';
						var	$A='<span style="color: #ff0000"></span>';
					
						str = str + '<td>' + len + "</td>";
						str = str + '<td>' + Present+"</td>";
						str = str + '<td>' + Absent+ "</td>";
						Percentage=(Present/len)*100;	
						str = str + '<td>' + Percentage+ "</td>";
						
						str = str + '</tr>';
								
										
				$('#reportshereT').html(str);	
				}else {
					$('#reportshereT').html('No data found');
				}
			}, error: function(xhr, error, status){
				$('#reportshereT').html(xhr.responseText);
			}
		});
		return false;
	});	

$('#cmbAdminday').click(function()
	{
		
		var data_ = $('#frmdaywiseAd').serialize();
		var url_ = site_url_+"/main/reports_attendance_controller_via_ajax_student_daywise_admin";
		//console.log(url_);

		$.ajax({
			url:url_,
			type: 'post',
			data: data_,
			success: function(consolidate){
				
				var obj = JSON.parse(consolidate);
				var len = obj.consolidate.length;
				var len1 = obj.date1.length;
				var len2 = obj.student.length;
				var str = 'x';

				if(len > 0){
					str = str + "<tr>";
					//str = str + "<th>Session</th>"
					str = str + "<th>Roll-No</th>"
						for(i=0; i<len1;i++)
						{
							if (obj.date1[i].date==obj.date1[i].date) 
							{
							str = str + "<th>"+obj.date1[i].date+"</th>"
							}

						}
						str = str + '</tr>';

			
						for(k=0; k<len2;k++)
						{
							
							str = str + "<tr>";
							str = str + '<td>' + obj.student[k].student_id + "</td>";
							for(i=0;i<len1;i++){

								for(j=0; j<len; j++){
									if (obj.date1[i].date==obj.consolidate[j].date && obj.student[k].student_id==obj.consolidate[j].student_id)
									{
										str = str + '<td>' ;	
										if(obj.consolidate[j].attendance_status==1){
												$p='<span style="color: #009000">P</span>';
										str = str  + $p ;
										}else{
											$A='<span style="color: #ff0000">A</span>';
											str = str + $A + "</td>";
										
										}str = str + "</td>";
									}
								}
							}
							str = str + '</tr>';
						}	
					$('#daywise').html(str);	//print table heading
				} else {
					$('#daywise').html('No data found');
				}
			}, error: function(xhr, error, status){
				$('#rdaywise').html(xhr.responseText);
			}
		});
	return false;
	});	
$('#Course').change(function(){

			if($('#Course').val() != '' && $('#Session').val() !=0){
				var url_ = site_url_+"/main/get_classC";
				var data_ = $('#frmdaywiseAd').serialize();
				$.ajax({
				type:"POST",
				data: data_,
				url: url_,

				success: function(data){
				
					var obj = JSON.parse(data);
					var str = '';
					str = str + "<option value=''>Select Class</option>";
					for(i=0; i<obj.class.length; i++){
						str = str + "<option value='"+obj.class[i].add_class_id+"'>"+obj.class[i].course_id+obj.class[i].semester_id+obj.class[i].section_id+"</option>";
					}
					$('#Class').html(str);
			
				},
					
				

				});
			}

			});

		$('#Session').change(function(){
			$('#Course').change();

			
		});

$('#Course').change(function(){
	

			if($('#Course').val() != '' && $('#Semester').val() !=0){
				var url_ = site_url_+"/main/get_subjectc";
				var data_ = $('#frmdaywiseAd').serialize();
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
					$('#subject_name').html(str);
				},
					
				

				});
			}

			});

		$('#Semester').change(function(){
			$('#Course').change();

		
		});


$('#Course').change(function(){

			if($('#Course').val() != '' && $('#Session').val() !=0){
				var url_ = site_url_+"/main/get_classC";
				var data_ = $('#frmtotalAD').serialize();
				$.ajax({
				type:"POST",
				data: data_,
				url: url_,

				success: function(data){
				
					var obj = JSON.parse(data);
					var str = '';
					str = str + "<option value=''>Select Class</option>";
					for(i=0; i<obj.class.length; i++){
						str = str + "<option value='"+obj.class[i].add_class_id+"'>"+obj.class[i].course_id+obj.class[i].semester_id+obj.class[i].section_id+"</option>";
					}
					$('#ClassADT').html(str);
			
				},
					
				

				});
			}

			});

		$('#Session').change(function(){
			$('#Course').change();

			
		});

$('#Course').change(function(){
	

			if($('#Course').val() != '' && $('#Semester').val() !=0){
				var url_ = site_url_+"/main/get_subjectc";
				var data_ = $('#frmtotalAD').serialize();
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
					$('#subjectADT').html(str);
				},
					
				

				});
			}

			});

		$('#Semester').change(function(){
			$('#Course').change();

		
		});


$('#Admintotal').click(function()
	{
				
		var data_ = $('#frmtotalAD').serialize();
		var url_ = site_url_+"/main/reports_attendance_controller_via_ajax_student_total_admin_2";
		//console.log(url_);

		$.ajax({
			url:url_,
			type: 'post',
			data: data_,
			success: function(consolidate)
			{
				
				var obj = JSON.parse(consolidate);
				var len = obj.consolidate.length;
				
				var len1 = obj.student.length;
				var len2= obj.date.length;
				alert(len);
				var str = 'x';
				if(len > 0)
					{
					str = str + "<tr>";
					str = str + "<th>Roll-No</th>";
					str = str + "<th>Total No of Days</th>";
					str = str + "<th>Present Days</th>";
					str = str + "<th>Percentage</th>";
					
					str = str + '</tr>';
					var Present=0;
					var Absent=0;
						
					str = str + "<tr>";

						for(k=0; k<len1;k++)
						{
							
							str = str + "<tr>";
							str = str + '<td>' + obj.student[k].student_id+"</td>";
							str = str + '<td>' + obj.date.length+"</td>";


											
										str = str + '<td>' ;	
												
										str = str + obj.consolidate2.TotalAttd1;
				


										str = str + "</td>";
										str = str + '<td>' ;	
												
										str = str + obj.consolidate2.TotalAttd1;
				


										str = str + "</td>";
								
							
							str = str + '</tr>';
						}	
			str = str + '</tr>';
						
						
										
				$('#reportshereTOTAl').html(str);	
				}else {
					$('#reportshereTOTAl').html('No data found');
				}
			}, error: function(xhr, error, status){
				$('#reportshereTOTAl').html(xhr.responseText);
			}
		});
		return false;
	});

	$('.take_attend_total_class').click(function(){
			var str = this.id;
			var arr = str.split('~');
			$('#addclassidtotal').val(arr[0]);
			$('#sessionidtotal').val(arr[1]);
			$('#course_idtotal').val(arr[2]);
			$('#subject_idtotal').val(arr[3]);

			$('#frmtakeattend_total_class').submit();
		});


		$('#cmbAttendanceReportfaculty_com').click(function()
	
	{
		var data_ = $('#frmattendancereports_faculty').serialize();
		var url_ = site_url_+"/main/reports_attendance_controller_via_ajax_faculty_total";
		
		$.ajax({
			url:url_,
			type: 'post',
			data: data_,
			success: function(consolidate,student,date){
				
				var obj = JSON.parse(consolidate);
				var len2 = obj.student.length;
				var len3 = obj.date.length;
				var len =obj.consolidate.TotalAttd;
				var lej=0;
				lej=(len/len2);
				var pec=0;
				per=(lej/len3)*100;

				var str = 'x';
				if(len2> 0){
					str = str + "<tr>";
					str = str + "<th>Total Class held</th>"
					str = str + "<th>Total Class Percentage</th>"
					
					str = str + '</tr>';
							
							str = str + "<tr>";
							str = str + "<td>";
							str = str + len3;
							str = str + "</td>";
							str = str + "<td>";
							str = str + per.toFixed();
							str = str + "%";
							
							str = str + "</td>";
							

							str = str + "</td>";


							str = str + '</tr>';
							$('#reportsherefaculty').html(str);	//print table heading
				} else {
					$('#reportsherefaculty').html('No data found');
				}
			}, error: function(xhr, error, status){
				$('#reportsherefaculty').html(xhr.responseText);
			}
		});
	return false;
	});	

		});	
	