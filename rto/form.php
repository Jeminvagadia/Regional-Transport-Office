<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <form action="form_back.php" method = "POST">
    <input type="radio" name="sex" value="Male"/>Male <br>
    <input type="submit" name="submit" value="Submit"/> <br>
  </form>
</body>
</html>

































<!-- <!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | Bootstrap Multi Select Dropdown with Checkboxes using Jquery in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:600px;">
   <h2 align="center">SELECT VEHICLE CLASS</h2>
   <br /><br />
   <form method="post" id="framework_form" action="form-back.php">
    <input type="number" name="lid"> lid <br> <br>
    <input type="date" name="date"><br><br>
    <div class="form-group">
     <label>Select which Framework you have knowledge</label>
     <select id="framework" name="framework[]" multiple class="form-control" >
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
      <option value="E">E</option>
     </select>
    </div>
    <div class="form-group">
     <input type="submit" class="btn btn-info" name="submit" value="Submit" />
    </div>
   </form>
   <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $('#framework').multiselect({
  nonSelectedText: 'Select Framework',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 $('#framework_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"form_back.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#framework option:selected').each(function(){
     $(this).prop('selected', false);
    });
    $('#framework').multiselect('refresh');
    alert(data);
   }
  });
 });
 
 
});
</script> -->

