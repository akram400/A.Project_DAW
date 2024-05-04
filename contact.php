<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
}

$con = new mysqli('localhost', 'root', '', 'travel_db');
if($con){
  //echo"Connection Successful";
  $sql = "INSERT INTO `data` (name, email, subject, msg) VALUES ('$name', '$email', '$subject', '$message')";
  $result = mysqli_query($con, $sql);
  if($result){
    echo "Data inserted Successfully";
  } else {
    die(mysqli_error($con));
  }
} else {
  die(mysqli_error($con));
}
?>
