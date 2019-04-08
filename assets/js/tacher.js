$(document).ready(function() {
  $('#btnaddclass').click(function() {
    $('.modal').modal('hide');
  });
 $('#add').click(function() {
    addTheClass();
  });
function addTheClass() {
  var fields = $('#add_class_form input,#add_class_form select');
  var data = {};
  for(i = 0;i < fields.length;i++) {
   data[jQuery(fields[i]).attr('name')] = jQuery(fields[i]).val();
  }
  console.log(data);
  
  if(!verify('code',data.code)) {
        alert('Invalid Code!');
        $('input[name=code]').val('');
        return;
      }
  if(!verify('number',data.year)) {
    alert('Invalid Year!');
    $('input[name=year]').val('');
    return;
  }
  if(!verify('number',data.section)) {
    alert('Invalid Section!');
    $('input[name=section]').val('');
    return;
  }
  if(!verify('number',data.semester)) {
    alert('Invalid Semester!');
    $('input[name=semester]').val('');
    return;
  }
  if(!verify('roll',data.start)) {
    alert('Invalid Starting/Ending Roll Number!');
    $('input[name=end],input[name=start]').val('');
    return;
  }
  if(!verify('roll',data.end)) {
    alert('Invalid Starting/Ending Roll Number!');
    $('input[name=end],input[name=start]').val('');
    return;
  }

  $.ajax({ 
    url : 'php/add_class.php',
    type : 'post',
    data : data,
    dataType : 'json',
    success : function (r) {
      if(r.error == 'code') {
        alert('Invalid Code!');
        $('input[name=code]').val('');
        return;
      }
      if(r.error == 'year') {
        alert('Invalid Year!');
        $('input[name=year]').val('');
        return;
      }
      if(r.error == 'section') {
        alert('Invalid Section!');
        $('input[name=section]').val('');
        return;
      }
      if(r.error == 'semester') {
        alert('Invalid Semester!');
        $('input[name=semester]').val('');
        return;
      }
      if(r.error == 'roll') {
        alert('Invalid Starting/Ending Roll Number!');
        $('input[name=end],input[name=start]').val('');
        return;
      }
      if(r.error == 'exists') {
        alert('This class is already added!');
        $('input[name=code]').val('');
        return;
      }
      $('.wrapper').prepend('<div class="class"> <a class="no-decoration" href="take.php?cN='+r.class_id+'"> <div><strong>Code</strong> : <span class="code">'+r.code+'</span></div> <div><strong>Section</strong> : <span class="section">'+r.section+'</span></div> <div><strong>Year</strong> : <span class="year">'+r.year+'</span> </div> <div><strong>Classes</strong> : 0</div> </div></a>');
      $('.wrapper .class').first().hide();
      $('.wrapper .class').first().show('slow');
      $('.modal').modal('hide');
      $('.no-classes').remove();
    }, 
    error : function (err) {
      console.log(err);
    }   
  });
}