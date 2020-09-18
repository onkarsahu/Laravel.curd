<!DOCTYPE html>
<html>
<head>
<title>Student Management | Add</title>
</head>
<body>
@if (session('status'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('failed') }}
</div>
@endif
<form action = "/create" method = "post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
	<!-- <table>
	<tr>
	<td>Full Name</td>
	<td><input type='text' name='name' /></td>
	<tr>
	<td>age</td>
	<td><input type="text" name='age'/></td>
	</tr>
	<tr>
	<td>City Name</td>
	<td>
	<select name="city_name">
	<option value="bbsr">Bhubaneswar</option>
	<option value="cuttack">Cuttack</option>
	</select></td>
	</tr>
	<tr>
	<td>Email</td>
	<td><input type="text" name='email'/></td>
	</tr>

	<tr>
	<td colspan = '2'>
	<input type = 'submit' value = "Add student"/>
	</td>
	</tr>
    </table> -->
    
    <div class="row">
    <div class="col-sm-4">
        <div class="form-group">
        <label for="name">Name:</label>
        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>  
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
        <div class="form-group">
        <label for="age">Age:</label>
        <input type="age" class="form-control" id="age" placeholder="Enter age" name="age">
        </div>  
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
        <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile" name="moble">
        </div>  
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>  
    </div>
  </div>
  <input class="btn btn-primary" type="submit" value="Submit">
</form>
</body>
</html>