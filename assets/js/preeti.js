$(document).ready(function()
{
	$('.lectureclass').click(function(){
			var str = this.id;
			var arr = str.split('~');
			$('#addclassidED').val(arr[0]);
			$('#sessionidED').val(arr[1]);
			$('#courseidED').val(arr[2]);
			$('#subjectidED').val(arr[3]);

			$('#frmlectureclass').submit();
		});	


		$('.lectureviewclass').click(function(){
			var str = this.id;
			var arr = str.split('~');
			$('#addclassidED').val(arr[0]);
			$('#sessionidED').val(arr[1]);
			$('#courseidED').val(arr[2]);
			$('#subjectidED').val(arr[3]);

			$('#frmlectureviewclass').submit();
		});	




	$('.lessonclass').click(function(){
			var str = this.id;
			var arr = str.split('~');
			$('#addclassidED').val(arr[0]);
			$('#sessionidED').val(arr[1]);
			$('#courseidED').val(arr[2]);
			$('#subjectidED').val(arr[3]);

			$('#frmlessonclass').submit();
		});	



	$('.lessonviewclass').click(function(){
			var str = this.id;
			var arr = str.split('~');
			$('#addclassidED').val(arr[0]);
			$('#sessionidED').val(arr[1]);
			$('#courseidED').val(arr[2]);
			$('#subjectidED').val(arr[3]);

			$('#frmlessonviewclass').submit();
		});	



	$('.weeklyclass').click(function(){
			var str = this.id;
			var arr = str.split('~');
			$('#addclassidED').val(arr[0]);
			$('#sessionidED').val(arr[1]);
			$('#courseidED').val(arr[2]);
			$('#subjectidED').val(arr[3]);

			$('#frmweeklyclass').submit();
		});	


	$('.weeklyviewclass').click(function(){
			var str = this.id;
			var arr = str.split('~');
			$('#addclassidED').val(arr[0]);
			$('#sessionidED').val(arr[1]);
			$('#courseidED').val(arr[2]);
			$('#subjectidED').val(arr[3]);

			$('#frmweeklyviewclass').submit();
		});	








/*	$('#myEdit').submit(function()
	{	
		if($.trim($('#txtunit').val()) == '')
			{
				alert('Unit must be filled out');
			}
		else if($.trim($('#topic').val()) == '')
			{
				alert('Topic must be filled out');
			}
		else if($.trim($('#Lecture_no').val()) == '')
			{
				alert('No of lecture aspect must be filled out');
			}

		else
			{
				$('#myEdit').submit();
			}
		return false;
		
	});





	$('#mylessonedit').submit(function()
	{
		if($.trim($('#txtstart').val()) == '')
			{
				alert(' Start time must be filled out');
			}
		else if($.trim($('#txtend').val()) == '')
			{
				alert('End time must be filled out');
			}
		else if($.trim($('#date').val()) == '')
			{
				alert('Date must be filled out');
			}
		else if($.trim($('#lecturetype[]').val()) == '')	
		{
			alert('Lecturetype must be filled out');
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
				$('#mylessonedit').submit();
			}
		return false;
	});
	


	$('#weeklyedit').submit(function()
	{
		if($.trim($('#startdate').val()) == '')
			{
				alert(' Start date must be filled out');
			}
		else if($.trim($('#enddate').val()) == '')
			{
				alert('End date must be filled out');
			}
		else if($.trim($('#Lecture_schedule').val()) == '')
			{
				alert('No of lecture Schedule must be filled out');
			}
		else if($.trim($('#extra_taken').val()) == '')	
		{
			alert('No of extra lecture taken must be filled out');
		}		
		else if($.trim($('#due_to_holiday').val()) == '')
			{
				alert('No of lost due to holiday must be filled out');
			}
		else if($.trim($('#due_to_cl').val()) == '')
			{
				alert('No of lost due to college leave must be filled out');
			}
		else if($.trim($('#actual_taken').val()) == '')
			{
				alert('No of lecture actual taken must be filled out');
			}
		else
			{
				$('#weeklyedit').submit();
			}
		return false;
	});
	




/*


	$('#btnlecturesubmit').click(function()
	{
		var data_ = $('#mylectureviewform').serialize();
		var url_ = site_url_+ '/Lview_controller/lessonview';
		//console.log(url_);

		$.ajax({
			url:url_,
			type: 'post',
			data: data_,
			success: function(lecture_){
				$('#lecturehere').html(lecture_);
				var obj = JSON.parse(lecture_);
				var len = obj.lect_.length;

				var str = 'x';
				alert(len)

				if(len > 0){
					str = str + "<tr>";
					str = str + "</tr>";
					//str = str + "<th>Session</th>"
					str = str + "<th>Lecture No</th>"
					str = str + "<th>Unit</th>"
					str = str + "<th>topic</th>"	
					str = str + "<th>No.Of Lecture</th>"
					str = str + "</tr>";

					for(i=0; i<len;i++){
						str = str + '<tr>';	
						//str = str + '<td>' + obj.lect_[i].session + "</td>";
						str = str + '<td>' + obj.lect_[i].lecture_id + "</td>";
						str = str + '<td>' + obj.lect_[i].unit + "</td>";
						str = str + '<td>' + obj.lect_[i].topic + "</td>";
						str = str + '<td>' + obj.lect_[i].no_of_lecture+ "</td>";
						
						str = str + '</tr>';
				}$('#lecturehere').html(str);	//print table heading
			}else {
					$('#lecturehere').html('No data found');
				}
			}, error: function(xhr, error, status){
				$('#lecturehere').html(xhr.responseText);
			}
		});
	});	

	









		$('#btnlesssonsubmit').click(function(){

		var data_ = $('#myform').serialize();
		var url_ = site_url_+ '/Lessonview_controller/lessonview';
		$('lessonhere').html('Loading....');
		//console.log(url_);
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
					str = str + "<th>topic</th>"	
					str = str + "<th>Lecture Id</th>"
					str = str + "</tr>";

					for(i=0; i<len;i++){
						str = str + '<tr>';
						
						str = str + '<td>' + obj.lm[i].lesson_id+ "</td>";
						str = str + '<td>' + obj.lm[i].date + "</td>";
						str = str + '<td>' + obj.lm[i].start_time + "</td>";
						str = str + '<td>' + obj.lm[i].end_time+ "</td>";
						str = str + '<td>' + obj.lm[i].unit + "</td>";
						str = str + '<td>' + obj.lm[i].topic + "</td>";
						str = str + '<td>' + obj.lm[i].lectureid+ "</td>";
						
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








	$('#btnweeklysubmit').click(function(){
		var data_ = $('#myweek').serialize();
		var url_ = site_url_+ '/Weeklyview_controller/lessonview';

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



*/



//Read More...
		    var maxLength = 45;

		    	$(".show-read-more").each(function() {

		       		var myStr = $(this).text();

		        	if($.trim(myStr).length > maxLength){

			            var newStr = myStr.substring(0, maxLength);
			            var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
			            $(this).empty().html(newStr);
			            $(this).append(' <a href="javascript:void(0);" class="read-more hideblock">Read More...</a>');
			            $(this).append('<span class="more-text">' + removedStr + '</span>');
			        }
		  		});
		  		
			    	$(".read-more").click(function(){
			        $(this).siblings(".more-text").contents().unwrap();
			        $(this).remove();
		    });






//---double click and edit text in lecture plan----//
    		var oriVal;
    			$('body').on('dblclick', '.lectdata', function(){
    				// this.id - it will give you the specific id of td where dblclick held
    				oriVal = $(this).text();
				    $(this).text("");
				    $("<input type='text' id=lct-"+this.id+" value='"+oriVal+"'>").appendTo(this).focus();
    			});
				
    			$('body').on('focusout', '.mytd > input', function(){
    				var str = this.id;
    				var arr = str.split('-');
    				//alert(arr[0] + "  " + arr[1] + "  " + arr[2]);
    				var $this = $(this);
				    var data_ = $this.val();
				    $this.parent().text($this.val() || oriVal);
				    $this.remove(); // Don't just hide, remove the element.
				    var dt__ = $this.val();
				    var data_ = "dt="+dt__+"&lectid="+arr[1]+"&columnname="+arr[2];
				    var url_ = site_url_ + "/edit_controller/updatedColumn";

				    $.ajax({
				    	url:url_,
						type: 'post',
						data: data_,
						success: function(data){
							if(data == false){
								alert('Some server error! Please try again')
							}
						}, error: function (xhr, status, error){
							alert(xhr.responseText);
						}

				    });
    			});
	


		
//---- double click and edit in lesson plan----//
			var oriVal;
    			$('body').on('dblclick', '.lessondata', function(){
    				// this.id - it will give you the specific id of td where dblclick held
    				oriVal = $(this).text();
				    $(this).text("");
				    $("<input type='text' id=lct-"+this.id+" value='"+oriVal+"'>").appendTo(this).focus();
    			});
				
    			$('body').on('focusout', '.lesstd > input', function(){
    				var str = this.id;
    				var arr = str.split('-');
    				//alert(arr[0] + "  " + arr[1] + "  " + arr[2]);
    				var $this = $(this);
				    var data_ = $this.val();
				    $this.parent().text($this.val() || oriVal);
				    $this.remove(); // Don't just hide, remove the element.
				    var dt__ = $this.val();
				    var data_ = "dt="+dt__+"&less_id="+arr[1]+"&columnname="+arr[2];
				    var url_ = site_url_ + "/Lessonedit_controller/updatedColumn";

				    $.ajax({
				    	url:url_,
						type: 'post',
						data: data_,
						success: function(data){
							if(data == false){
								alert('Some server error! Please try again')
							}
						}, error: function (xhr, status, error){
							alert(xhr.responseText);
						}

				    });
    			});





//--- double click and edit in weekly plan --//
    			var oriVal;
    			$('body').on('dblclick', '.weekdata', function(){
    				// this.id - it will give you the specific id of td where dblclick held
    				oriVal = $(this).text();
				    $(this).text("");
				    $("<input type='text' id=lct-"+this.id+" value='"+oriVal+"'>").appendTo(this).focus();
    			});
				
    			$('body').on('focusout', '.weektd > input', function(){
    				var str = this.id;
    				var arr = str.split('-');
    				//alert(arr[0] + "  " + arr[1] + "  " + arr[2]);
    				var $this = $(this);
				    var data_ = $this.val();
				    $this.parent().text($this.val() || oriVal);
				    $this.remove(); // Don't just hide, remove the element.
				    var dt__ = $this.val();
				    var data_ = "dt="+dt__+"&week_id="+arr[1]+"&columnname="+arr[2];
				    var url_ = site_url_ + "/Weeklyedit_controller/updatedColumn";

				    $.ajax({
				    	url:url_,
						type: 'post',
						data: data_,
						success: function(data){
							if(data == false){
								alert('Some server error! Please try again')
							}
						}, error: function (xhr, status, error){
							alert(xhr.responseText);
						}

				    });
    			});



//icon eye-open and close for password
			$(".toggle-password").click(function() 
			{

			  $(this).toggleClass(" icon-eye-close");

			  var input = $($(this).attr("toggle"));

			  if (input.attr("type") == "password") 
			  {
			    input.attr("type", "text");
			  }
			   else 
			  {
			    input.attr("type", "password");
			  }
			});





			$('#Course').change(function(){
			if($('#Course').val() != '' && $('#Semester').val() !=0){
				var url_ = site_url_+"/main/get_subjectupload";
				var data_ = $('#frmnotes').serialize();
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
			$('#Course').change();

		
		});




//get Lecture schedule automatically
$('#enddate').change(function(){
			if($('#startdate').val() != '' && $('#enddate').val() !=0){
				var url_ = site_url_+"/Weeklyedit_controller/count_lecture";
				var data_ = $('#weeklyedit').serialize();
				$.ajax({
				type:"POST",
				data: data_,
				url: url_,
				success: function(data){
					var obj = JSON.parse(data);
					var str = '';
					str = str + obj.count.length;

									$('#Lecture_schedule').html(str);
									$('#Lecture_schedule_').val(str);
				},
					
				

				});
			}

			});

		$('#startdate').change(function(){
			$('#enddate').change();

		
		});

		

		$('#enddate').change(function(){
			if($('#startdate').val() != '' && $('#enddate').val() !=0){
				var url_ = site_url_+"/Weeklyedit_controller/count_lecture1";
				var data_ = $('#weeklyedit').serialize();
				$.ajax({
				type:"POST",
				data: data_,
				url: url_,
				success: function(data){
					var obj = JSON.parse(data);
					var str = '';
					str = str + obj.count.length;

									$('#Arrangement').html(str);
									$('#Arrangement_').val(str);
				},
					
				

				});
			}

			});

		$('#startdate').change(function(){
			$('#enddate').change();

		
		});



//get  extra lecture taken automatically
		$('#enddate').change(function(){
			if($('#startdate').val() != '' && $('#enddate').val() !=0){
				var url_ = site_url_+"/Weeklyedit_controller/count_lecture2";
				var data_ = $('#weeklyedit').serialize();
				$.ajax({
				type:"POST",
				data: data_,
				url: url_,
				success: function(data){
					var obj = JSON.parse(data);
					var str = '';
					str = str + obj.count.length;

									$('#extra_taken').html(str);
									$('#extra_taken_').val(str);
				},
					
				

				});
			}

			});

		$('#startdate').change(function(){
			$('#enddate').change();

		
		});




//actual lecture taken
		$('#enddate').change(function(){
			if($('#startdate').val() != '' && $('#enddate').val() !=0){
				var url_ = site_url_+"/Weeklyedit_controller/count_lecture3";
				var data_ = $('#weeklyedit').serialize();
				$.ajax({
				type:"POST",
				data: data_,
				url: url_,
				success: function(data){
					var obj = JSON.parse(data);
					var str = '';
					str = str + obj.count.length;

									$('#Acual_Lecture_taken').html(str);
									$('#Acual_Lecture_taken_').val(str);
				},
					
				

				});
			}

			});

		$('#startdate').change(function(){
			$('#enddate').change();

		
		});






$('#btndownload_notes').click(function(){		
		var data_ = $('#frm_download_notes').serialize();
		$.ajax({
			url:site_url_+ '/Main/notes_view',
			method:'post',
			data: data_,

			success: function(intel){
				var obj = JSON.parse(intel);
				var len = obj.down_notes.length;
				var str = '';
				if(len > 0){

					str = str + "<tr>";
					str = str + "</tr>";
					str = str + "<th>File</th>"
					str = str + "<th>Date</th>"
					str = str + "<th>Subject</th>"
					str = str + "<th>Faculty Name</th>"
					str = str + "</tr>";
					for(i=0; i<len;i++){

						str = str + '<tr>';
						str = str + '<td>' + '<a href="'+base_url_+'assets/upload_notes/'+obj.down_notes[i].upload_notes+'">';

						str = str + "Attachment";
						
						str = str + '</a>'+ "</td>";
						str = str + '<td>' + obj.down_notes[i].date_notes + "</td>";
						str = str + '<td>' + obj.down_notes[i].subject_name + "</td>";
						str = str + '<td>' + obj.down_notes[i].first_name + obj.down_notes[i].last_name +"</td>";
						
						str = str + '</tr>';
					}
					$('#download_noteshere').html(str);

				}else{
					$('#download_noteshere').html('No Data Found');
				}
			}, error: function(xhr, error, status){
				$('#download_noteshere').html(xhr.responseText);
			}

		});
	});



});



