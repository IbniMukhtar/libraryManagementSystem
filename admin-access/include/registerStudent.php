<?php
   $connection = mysqli_connect('localhost','root','','librarydb');
    if(isset($_POST["username_txt"]))
    {
      $username=mysql_real_escape_string($connection,$_POST["username_txt"]);
      $query="SELECT *FROM student_tbl WHERE username ='$username'";
      $result=mysqli_query($connection,$query);
      alert( mysqli_num_rows($result));
    }
?>
