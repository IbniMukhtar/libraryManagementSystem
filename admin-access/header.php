<?php

// session_start();
// if(!(isset($_SESSION['Elname'])))
// {
// 	 header("location:../ulogin.php");
//  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

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
<!--  <section id="container">-->
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->

      <a href="#" class="logo"><span class="fa fa-book" ></span><b>Library Admin<span>panel</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
            </a>
          </li>
          <!-- inbox dropdown end -->

          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>

      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
            <a class="logout" href="../index.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="#"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Bhat Mohsin</h5>
          <li class="mt">
            <a href="index.php" class="active">
              <i class="fa fa-dashboard" ></i>
              <span>Dashboard</span>
             </a>
          </li>

          <li class="sub-menu">
            <a href="">
              <i class="fa fa-user-md"></i>
              <span>Students</span>
              </a>
            <ul class="sub">
              <li><a href="addstudent.php">Add new Student</a></li>
              <li><a href="viewStudents.php">Student Table</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="">
              <i class="fa fa-book"></i>
              <span>Books</span>
              </a>
            <ul class="sub">
              <li><a href="viewbooks.php">Book Gallery</a></li>
              <li><a href="addbook.php">New Book</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="">
              <i class="fa fa-calendar"></i>
              <span>Borrow Books</span>
              </a>
            <ul class="sub">
              <li><a href="viewissuedbooks.php">Book Management Table</a></li>
              <li><a href="issuebook.php">Issue New Book</a></li>
              <li><a href="returnbook.php">Return Book</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a class="" href="#">
              <i class="fa fa-cogs"></i>
              <span>Fine System</span>
              </a>
            <ul class="sub">
              <li class=""><a href="#">Fine List</a></li>
              <li><a href="#">Total Collection</a></li>
            </ul>
          </li>

          <!-- <li class="sub-menu">
            <a href="#">
              <i class="fa fa-bell" href="#"></i>
              <span>Anounsments</span>
              </a>
          </li> -->

          <li>
            <a href="#">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="#">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Admin</span>
              </a>
            <ul class="sub">
              <li><a href="addAdmin.php">New Admin</a></li>
              <li><a href="viewAdmin.php">Admin List</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="#">
              <i class="fa fa-comments-o"></i>
              <span>About</span>
              </a>
            <ul class="sub">
              <li><a href="synopsis.php">Project Synopsis</a></li>
              <li><a href="team.php">Project Team</a></li>
            </ul>
          </li>

          <!-- <li>
            <a href="#">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li> -->
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
<!--
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Blank Page</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <p>Place your content here.</p>
          </div>
        </div>
      </section>
       /wrapper
    </section>
-->
    <!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->

    <!--footer end-->
<!--  </section>-->
<script src="lib/jquery/jquery.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="lib/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
