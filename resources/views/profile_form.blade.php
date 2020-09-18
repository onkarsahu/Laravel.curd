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
    
  <h2>Profile Form</h2>
  <form action="/action_page.php">
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
 
  
 

</div>

</body>
</html>
