<?php
// include "login1.php";
include "config.php";
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
      margin-left: 15em;
      margin-right: 10em;
      padding:30px;
      box-shadow: 10px 10px 8px 10px #888;
    }
    @media only screen and (max-width: 1000px) and (min-width: 601px){
      form{
        width: 75%;
        margin: 2em; 
      }
    }
    @media only screen and (max-width: 600px) {
      form{
        width: 70%;
        margin: 1em; 
      }
    }
  </style>
  <title>Register</title>
</head>
<body>
  <div class="container">
  <form method="POST" action="login1.php">
  <div class="mb-3">
  <?php if(isset($_GET['error'])) { ?>
       <p class="error"> <?php echo $_GET['error']; ?></p>
       <?php } ?>
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary" name="login">Submit</button>
  <p style="text-align: center;">New User?<br>Create Account <a href="register.php">Sign Up</a></p> 
</form>
  </div>
</body>
</html>

