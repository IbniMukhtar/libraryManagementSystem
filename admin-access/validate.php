<?php
include_once("database.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $name = $_POST["name_txt"];
  $username= $_POST["username_txt"];
  $rollno = $_POST["rollno_txt"];
  $dept = $_POST["dept_txt"];
  $mobile = $_POST["mobile_txt"];
  $email = $_POST["email_txt"];
  // $connection = mysqli_connect('localhost','root','','librarydb');
  $sql = "INSERT INTO student_tbl VALUES(NULL,'$name','$username','$rollno','$dept','$mobile','$email')";
  $me = mysqli_query($connection,$sql);
   if($me){
     header("Location:viewStudents.php");
   }
   else {
     echo "not added";
   }
}
?>
