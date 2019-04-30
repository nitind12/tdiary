 $(document).ready(function()
{

	$('.editmarksselected').click(function(){
			var str = this.id;
			var arr = str.split('~');
			$('#mtypeid').val(arr[0]);
			$('#mtypename').val(arr[1]);

			$('#frmMarksSelected').submit();
		});	

	
	$('.testviewselected').click(function(){
			var str = this.id;
			var arr = str.split('~');
			$('#addclassid').val(arr[0]);
			$('#sessionid').val(arr[1]);

			$('#frmMarksedit').submit();
		});	

	$('.viewtestclass').click(function(){
			var str = this.id;
			var arr = str.split('~');
			$('#mtypeid1').val(arr[0]);
			$('#mtypename1').val(arr[1]);

			$('#frmviewSelected').submit();
		});	

$('.viewtest').click(function(){
			var str = this.id;
			var arr = str.split('~');
			$('#addclassid1').val(arr[0]);
			$('#sessionid1').val(arr[1]);

			$('#frmview').submit();
		});	

$('.assignemtedit').click(function(){
			var str = this.id;
			var arr = str.split('~');
			$('#addclassidA').val(arr[0]);
			$('#sessionidA').val(arr[1]);

			$('#frmassignmentedit').submit();
		});	
$('.assignmentview').click(function(){
			var str = this.id;
			var arr = str.split('~');
			$('#addclassidAV').val(arr[0]);
			$('#sessionidAV').val(arr[1]);

			$('#frmassignmentview').submit();
		});	

$('.assignmentchecker').click(function(){
			var str = this.id;
			var arr = str.split('~');
			$('#addclassidCA').val(arr[0]);
			$('#sessionidCA').val(arr[1]);

			$('#frmassignmentchecker').submit();
		});


		

		$('.viewassign').click(function(){
			var str = this.id;
			var arr = str.split('~');
			$('#addclassidCA').val(arr[0]);
			$('#sessionidCA').val(arr[1]);

			$('#frmviewassignment').submit();
		});


/*		
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
	/*	else if($.trim($('#marks1').val()) == '')
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

*/







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




	$('#btnViewassignment').click(function(){
		
		var data_ = $('#assignmentform').serialize();
		
		$.ajax({
			url:site_url_+ '/Assign_report_controller/assignment_report',
			method: 'post',
			data: data_,
			success: function(intel){

				var obj = JSON.parse(intel);
				var len = obj.marks.length;
				
				var str = '';
				if(len > 0){
					str = str + "<tr>";
					str = str + "</tr>";
					str = str + "<th> Assignment_no</th>"
					str = str + "<th> Given_date</th>"
					str = str + "<th> Submission_date</th>"
					str = str + "<th> Unit</th>"
					str = str + "<th> Topic</th>"
					str = str + "</tr>";
					for(i=0; i<len;i++){
						str = str + '<tr>';
						str = str + '<td>' + obj.marks[i].Assignment_no + "</td>";
						str = str + '<td>' + obj.marks[i].Given_date + "</td>";
						str = str + '<td>' + obj.marks[i].Submission_date + "</td>";
						str = str + '<td>' + obj.marks[i].Unit + "</td>";
						str = str + '<td>' + obj.marks[i].Topic + "</td>";
						
						str = str + '</tr>';
					}
					$('#assignmenthere').html(str);

				}else{
					$('#assignmenthere').html('No Data Found');
				}
			}, error: function(xhr, error, status){
				$('#assignmenthere').html(xhr.responseText);
			}

		});
	});





$('#btnViewassignmentmarks').click(function(){
		
		var data_ = $('#assignmentformview').serialize();
		
		$.ajax({
			url:site_url_+ '/check_assign_report_controller/assignment_report',
			method: 'post',
			data: data_,
			success: function(intel){

				var obj = JSON.parse(intel);
				var len = obj.marks.length;
				
				var str = '';
				if(len > 0){
					str = str + "<tr>";
					str = str + "</tr>";
					str = str + "<th> roll_no</th>"
					str = str + "<th> Student_name</th>"
					str = str + "<th> A_no</th>"
					str = str + "<th> A_status<br>1=checked 0=unchecked</th>"
					str = str + "<th> Submission_date</th>"
					str = str + "<th> Grade</th>"
					str = str + "</tr>";
					for(i=0; i<len;i++){
						str = str + '<tr>';
						str = str + '<td>' + obj.marks[i].roll_no + "</td>";
						str = str + '<td>' + obj.marks[i].first_name + "</td>";
						str = str + '<td>' + obj.marks[i].assignment_id + "</td>";
						str = str + '<td>' + obj.marks[i].assignment_status + "</td>";
						str = str + '<td>' + obj.marks[i].checker_date + "</td>";
						str = str + '<td>' + obj.marks[i].Grade + "</td>";
						
						
						str = str + '</tr>';
					}
					$('#assignmentmarkshere').html(str);

				}else{
					$('#assignmentmarkshere').html('No Data Found');
				}
			}, error: function(xhr, error, status){
				$('#assignmentmarkshere').html(xhr.responseText);
			}

		});
	});



$('#btnViewmarks1report').click(function(){
		
		var data_ = $('#marks1formview').serialize();
		
		$.ajax({
			url:site_url_+ '/check_assign_report_controller/marks1_report',
			method: 'post',
			data: data_,
			success: function(intel){

				var obj = JSON.parse(intel);
				var len = obj.marks.length;
				
				var str = '';
				if(len > 0){
					str = str + "<tr>";
					str = str + "</tr>";
					str = str + "<th> roll_no</th>"
					str = str + "<th> Student_name</th>"
					str = str + "<th> Subject_name</th>"
					str = str + "<th> Total marks</th>"
					str = str + "<th> Obtain marks</th>"
					
					str = str + "</tr>";
					for(i=0; i<len;i++){
						str = str + '<tr>';
						str = str + '<td>' + obj.marks[i].roll_no + "</td>";
						str = str + '<td>' + obj.marks[i].first_name + "</td>";
						str = str + '<td>' + obj.marks[i].subject_id + "</td>";
						str = str + '<td>' + obj.marks[i].totalmarks + "</td>";
						str = str + '<td>' + obj.marks[i].marks + "</td>";
						
						
						
						str = str + '</tr>';
					}
					$('#marksreporthere').html(str);

				}else{
					$('#marksreporthere').html('No Data Found');
				}
			}, error: function(xhr, error, status){
				$('#marksreporthere').html(xhr.responseText);
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




 var maxLength = 30;

		    	$(".show-read-more1").each(function() {

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






//---double click and edit text marks view----//
    		var oriVal;
    			$('body').on('dblclick', '.marksdata', function(){
    				// this.id - it will give you the specific id of td where dblclick held
    				oriVal = $(this).text();
				    $(this).text("");
				    $("<input type='text' id=lct-"+this.id+" value='"+oriVal+"'>").appendTo(this).focus();
    			});
				
    			$('body').on('focusout', '.markstd > input', function(){
    				var str = this.id;
    				var arr = str.split('-');
    				//alert(arr[0] + "  " + arr[1] + "  " + arr[2]);
    				var $this = $(this);
				    var data_ = $this.val();
				    $this.parent().text($this.val() || oriVal);
				    $this.remove(); // Don't just hide, remove the element.
				    var dt__ = $this.val();
				    var data_ = "dt="+dt__+"&marksid="+arr[1]+"&columnname="+arr[2];
				    var url_ = site_url_ + "/test/updatedColumn";

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





//---double click and edit text given assignment----//
    		var oriVal;
    			$('body').on('dblclick', '.givenassign_data', function(){
    				// this.id - it will give you the specific id of td where dblclick held
    				oriVal = $(this).text();
				    $(this).text("");
				    $("<input type='text' id=lct-"+this.id+" value='"+oriVal+"'>").appendTo(this).focus();
    			});
				
    			$('body').on('focusout', '.givenassign_td > input', function(){
    				var str = this.id;
    				var arr = str.split('-');
    				//alert(arr[0] + "  " + arr[1] + "  " + arr[2]);
    				var $this = $(this);
				    var data_ = $this.val();
				    $this.parent().text($this.val() || oriVal);
				    $this.remove(); // Don't just hide, remove the element.
				    var dt__ = $this.val();
				    var data_ = "dt="+dt__+"&givenassign_id="+arr[1]+"&columnname="+arr[2];
				    var url_ = site_url_ + "/Assignmentcontroller/updatedColumn";

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
	
	




//---double click and edit text view given assignment----//
    		var oriVal;
    			$('body').on('dblclick', '.viewgivenassign_data', function(){
    				// this.id - it will give you the specific id of td where dblclick held
    				oriVal = $(this).text();
				    $(this).text("");
				    $("<input type='text' id=lct-"+this.id+" value='"+oriVal+"'>").appendTo(this).focus();
    			});
				
    			$('body').on('focusout', '.viewgivenassign_td > input', function(){
    				var str = this.id;
    				var arr = str.split('-');
    				//alert(arr[0] + "  " + arr[1] + "  " + arr[2]);
    				var $this = $(this);
				    var data_ = $this.val();
				    $this.parent().text($this.val() || oriVal);
				    $this.remove(); // Don't just hide, remove the element.
				    var dt__ = $this.val();
				    var data_ = "dt="+dt__+"&viewgivenassign_id="+arr[1]+"&columnname="+arr[2];
				    var url_ = site_url_ + "/Givenassignmentcontroller/updatedColumnview";

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



  		
  		//---double click and edit text view checked assignment----//
    		var oriVal;
    			$('body').on('dblclick', '.checkedassign_data', function(){
    				// this.id - it will give you the specific id of td where dblclick held
    				oriVal = $(this).text();
				    $(this).text("");
				    $("<input type='text' id=lct-"+this.id+" value='"+oriVal+"'>").appendTo(this).focus();
    			});
				
    			$('body').on('focusout', '.checkedassign_td > input', function(){
    				var str = this.id;
    				var arr = str.split('-');
    				//alert(arr[0] + "  " + arr[1] + "  " + arr[2]);
    				var $this = $(this);
				    var data_ = $this.val();
				    $this.parent().text($this.val() || oriVal);
				    $this.remove(); // Don't just hide, remove the element.
				    var dt__ = $this.val();
				    var data_ = "dt="+dt__+"&checkedassign_id="+arr[1]+"&columnname="+arr[2];
				    var url_ = site_url_ + "/Update_Assignment_Controller/updatedColumn";

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
