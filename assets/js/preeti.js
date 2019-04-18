$(document).ready(function()
{
/*	
	$('#myEdit').submit(function()
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
				alert('Date of completion must be filled out');
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
				$('#myEdit').submit();
			}
		return false;
		
	});





	$('#mylectureviewform').submit(function()
		{	
			
			if($.trim($('#course').val()) == '')
				{
					alert('Course must be filled out');
				}
			else if($.trim($('#txtsemester').val()) == '')
				{
					alert('Semester must be filled out');
				}
			else if($.trim($('#txtsubject').val()) == '')
				{
					alert('Subject must be filled out');
				}
			else if($.trim($('#txtfaculty').val()) == '')
				{
					alert('Faculty name must be filled out');
				}
			else
				{
					$('#mylectureviewform').submit();
				}
			return false;
		
	});








	$('#mylessonedit').submit(function()
	{
		if($.trim($('#session').val()) == '')
			{
				alert('Session must be filled out');
			}
		else if($.trim($('#txtcourse').val()) == '')
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
				$('#mylessonedit').submit();
			}
		return false;
	});
	
*/


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
		    var maxLength = 30;

		    	$(".show-read-more").each(function() {

		       		var myStr = $(this).text();

		        	if($.trim(myStr).length > maxLength){

			            var newStr = myStr.substring(0, maxLength);
			            var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
			            $(this).empty().html(newStr);
			            $(this).append(' <a href="javascript:void(0);" class="read-more">Read More...</a>');
			            $(this).append('<span class="more-text">' + removedStr + '</span>');
			        }
		  		});
		  		
			    	$(".read-more").click(function(){
			        $(this).siblings(".more-text").contents().unwrap();
			        $(this).remove();
		    });






//double click and edit text
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


				
   
});



