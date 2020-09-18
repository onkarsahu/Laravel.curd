<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profiles</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <!-- <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form> -->
 
  <h2>Profiles</h2>
    <a href="{{url('/profile-form')}}" class="btn btn-success" >Add user</a>        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Full Name</th>
        <th>Age</th>
        <th>Mobile Number</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
       @foreach($sql AS $r)
        <tr>
            <td>{{$r->name}}</td>
            <td>{{$r->age}}</td>
            <td>{{$r->mobile}}</td>
            <td>{{$r->email}}</td>
            <td><button type="button" class="btn">Edit</button></td>
            <td><button type="button" class="btn">Delete</button></td>
        </tr>
       @endforeach
    </tbody>
  </table>
 

</div>

</body>
</html>
