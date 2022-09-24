
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $conn = mysqli_connect('localhost','root','','jobs') or die("Connection Failed: " .mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $password=$_POST['password'];

      $sql ="INSERT INTO `users` (`name`, `email`, `phone`, `password`) VALUES('$name','$email','$phone','$password')";

      $query = mysqli_query($conn,$sql);
      if($query){
        echo'Entry Sucessful';
        header("location: login.php");
      }
      else{
        echo'Error Occured';
      }
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <style>
    body{
      background-image: url('background.jpg');
      background-size: cover;
    }
    form{
      background-color: #fff;
      margin-top: 6em;
      margin-left: 30em;
      margin-right: 10em;
      padding:30px;
      box-shadow: 10px 10px 8px 10px #888;
      position: relative;
      margin-left: 100px;
      max-width: 100%;
    }
    @media only screen and (max-width: 800px) and (min-width: 601px){
      form{
        width: 75%;
        margin: 2em; 
      }
    }
    @media only screen and (max-width: 600px) {
      form{
        width: 100%;
        margin: 0em; 
      }
    }

  </style>
  <title>Register</title>
</head>
<body>
  <div class="container">
  <form method="POST">
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="phone">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <!-- <input type="submit" name='submit' id="submit"> -->
  <br>
  Already Registered? <a href="login.php">Login</a>
</form>
  </div>
</body>
</html>