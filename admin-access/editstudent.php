<?php
require_once('database.php');
if(!isset($_GET['id'])){
  header("location:404.php");
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $name     =$_POST["name_txt"];
  $username =$_POST["username_txt"];
  $rolllno  =$_POST["rollno_txt"];
  $dept     =$_POST["dept_txt"];
  $contact  =$_POST["mobile_txt"];
  $email    =$_POST["email_txt"];
  $id       =$_POST["id_txt"];

  $result= mysqli_query($connection, "UPDATE student_tbl SET name= '$name' , username= '$username' , rollno= '$rolllno' ,
    dept= '$dept' , mobile= '$contact' , email= '$email'  WHERE id= $id ");

  header("location:viewstudents.php?message=10");
}
else{
$id=$_GET['id'];
$res=mysqli_query($connection,"SELECT * FROM student_tbl WHERE id= '$id' ");
$row=mysqli_fetch_assoc($res);
// echo var_dump($row);
 }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>
  <section id="container">
   <?php require_once('header.php')?>
   <!--main content start-->
     <section id="main-content">
       <section class="wrapper site-min-height">
         <h3 style="margin-top:28px;"><i class="fa fa-angle-right"></i>Dash</h3>
         <div class="row mt">
           <div class="col-lg-8 col-md-offset-2">
             <button class="btn btn-danger" disabled style="width:100%">
             UPDATE  STUDENT DETALILS</button>
              <div class="form-panel">
 		       <form class="form-horizontal style-form" method="post">
             <input type="hidden" name="id_txt" value="<?php echo $row["id"]; ?>">
 		            <div class="form-group">
                   <div class="col-sm-10">
                    	<input type="text" class="form-control" placeholder="Student Name"  name="name_txt" value="<?php echo $row["name"]; ?>" required>
                    </div>
                 </div>
                 <div class="form-group">
                   <div class="col-sm-10">
                    	<input type="text" class="form-control" placeholder="UserName"  name="username_txt" value="<?php echo $row["username"]; ?>" required>
                    </div>
                 </div>
                 <div class="form-group">
                   <div class="col-sm-10">
                    	<input type="number" class="form-control" placeholder="Student RollNo."  name="rollno_txt" value="<?php echo $row["rollno"]; ?>" required>
                    </div>
                 </div>
                 <div class="form-group">
                   <div class="col-sm-10">
                   	<label for="dept">Select Department</label>
                    	<select type="text" class="form-control"  name="dept_txt" value="<?php echo $row["dept"]; ?>" required>
                   	 	<option value="Science">Science</option>
                   	 	<option value="Arts">Arts</option>
                   	 	<option value="Commerce">Commerce</option>
 					          </select>
                    </div>
                 </div>
                 <div class="form-group">
                   <div class="col-sm-10">
                    	<input type="number" class="form-control" placeholder="Contact Number"  name="mobile_txt" value="<?php echo $row["mobile"]; ?>" required>
                    </div>
                 </div>
                 <div class="form-group">
                   <div class="col-sm-10">
                    	<input type="email" class="form-control" placeholder="Email"  name="email_txt" value="<?php echo $row["email"]; ?>" required>
                    </div>
                 </div>
                 <button class="btn btn-success"  type="submit" style="width:40%;margin-left:125px;">Update Student</button>
 			     </form>

           </div>
         </div>
      </section>
    </section>
   <?php require_once('footer.html')?>
  </section>
</body>
</html>
