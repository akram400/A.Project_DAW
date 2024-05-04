<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $msg=$_POST['message'];
}

$con=new mysqli('localhost','root','','agency_db');
if($con){
  //echo"Connection Successful";
   $sql="insert into `data`(name,email,subject,message) values('$name','$email','$subject','$msg')";
   $result=mysqli_query($con,$sql);
   if($result){
    echo"Data inserted Successfuly";
   }
   else{
    die(mysqli_error($con));
   }

}
else{
  die(mysqli_error($con));
}

?>

