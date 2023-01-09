<?php require_once('database.php')?>
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

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
   <?php require_once('header.php')?>
   <!--main content start-->
     <section id="main-content">
       <section class="wrapper site-min-height">
         <h3 style="margin-top:28px;"><i class="fa fa-angle-right"></i>DashBoard</h3>
         <form  action="" method="POST" style="margin-top:20px;" style="float: right;">
           <button class="btn btn-success" type="submit" name="submit1"><i class="fa fa-search"></i></button>
           <input type="text" name="enr"
           style="border-radius:25px;border:2px  gray;padding:10px;color:black;height:35px;" placeholder="&nbsp;&nbsp;&nbsp;enter rollno...">
         </form>
             <?php
                if(isset($_POST['submit1']))
                {
                  $res=mysqli_query($connection, "SELECT * FROM issue_books_tbl WHERE student_rollno='$_POST[enr]' && book_return_date=''");
                  if(mysqli_num_rows($res)>0)
                  {
              ?>
                    <table class="table table-bordered table-hover" cellspacing="0" style="margin-top:15px;border-top:1px solid black;">
                      <thead>
                                    <tr>
                                       <th style="color:blue">S NO.</th>
                                       <th style="color:blue">Rollno</th>
                                       <th style="color:blue">Name</th>
                                       <th style="color:blue">Mobile</th>
                                       <th style="color:blue">Email</th>
                                       <th style="color:blue">Book Nmae</th>
                                       <th style="color:blue">IssueDate</th>
                                       <th style="color:blue">Update</th>
                                     </tr>
                      </thead>
                    <?php
                    while ($row=mysqli_fetch_array($res))
                     {
                       $i=1;
                       ?>
                       <tbody>
                       <tr>
                           <td>  <?php echo $i; ?> </td>
                           <td><?php echo $row['student_rollno']; ?></td>
                           <td><?php echo $row['student_name']; ?></td>
                           <td><?php echo $row['student_contact']; ?></td>
                           <td><?php echo $row['student_email']; ?></td>
                           <td><?php echo $row['book_name']; ?></td>
                           <td><?php echo $row['book_issue_date']; ?></td>
                           <td><a href="return.php?id= <?php echo $row["id"];?>"<button class="btn btn-success btn-xs update" type="button" name="update"><i class="fa fa-pencil"></i>RETURN</button></a>
                           </td>
                       </tr>
                     </tbody>
                       <?php
                     }
                   }
                     else{
                       ?>
                       <h3 style="color:red;content:center;">Sorry! No Such Record Found</h3>
                       <?php
                     }
                    ?>
                  </table>
             <?php
                }
              ?>
              <div class="col-lg-12">
                <<div class="container" style="margin-bottom:10px;">

                   <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!--Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                      <div class="item active">
                        <img src="img/lorde.jpg" alt="Los Angeles" style="width:100%;">
                        <div class="carousel-caption">
                          <h3>Los Angeles</h3>
                          <p>LA is always so much fun!</p>
                        </div>
                      </div>

                      <div class="item">
                        <img src="img/instagram.jpg" alt="Chicago" style="width:100%;">
                        <div class="carousel-caption">
                          <h3>Chicago</h3>
                          <p>Thank you, Chicago!</p>
                        </div>
                      </div>

                      <div class="item">
                        <img src="img/blog-bg.jpg" alt="New York" style="width:100%;">
                        <div class="carousel-caption">
                          <h3>New York</h3>
                          <p>We love the Big Apple!</p>
                        </div>
                      </div>

                    </div>

                    <!-- Left and right controls -->
                     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
      </section>
    </section>
   <?php require_once('footer.html')?>
  </section>
</body>
</html>
<style media="screen">
.table-bordered>thead>tr>th ,.table-bordered>tbody>tr>td {
  border: 1px solid black;
  color:black;

}

</style>
