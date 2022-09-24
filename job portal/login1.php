<?php
session_start();
include "db_conn.php";

if(isset($_POST['email']) && isset($_POST['password'])){

  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


$email = validate($_POST['email']);
$pass = validate($_POST['password']);

if(empty($email)){
  header("Location: login.php?error=User name is required");
  exit();
}
else if(empty($pass)){
  header("Location: login.php?error=Password is required");
  exit();
}

$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) === 1){
  $row = mysqli_fetch_assoc($result);
  if($row['email'] === $email && $row['password'] === $pass){
    echo "Logged in!";
    $_SESSION['email'] = $row['email'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['id'] = $row['id'];
    header("Location: index.php");
    exit();
  }
  else{
    header("Location: login.php?error=Incorrect Username or Password");
    exit();
  }
}
else{
  header("Location: login.php");
  exit();
}
}