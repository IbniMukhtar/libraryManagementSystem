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
                       MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3 style="margin-top:28px;"><i class="fa fa-angle-right"></i>Dashboard</h3>
        <div class="row mt">
          <div class="col-lg-6 col-md-offset-3">
            <button class="btn btn-danger" disabled style="width:100%;">ISSUE NEW BOOK TO STUDENT</button>
             <div class="form-panel">
		       <form class="form-horizontal style-form" method="get">
		        <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="text" class="form-control" placeholder="Enter Student Name" required>
                   </div>
                 </div>
                <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="text" class="form-control" placeholder="STudent Rool Number" required >
                   </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="text" class="form-control" placeholder="Book Name" required>
                   </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="text" class="form-control" placeholder="Book ISBN No." required>
                   </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="text" class="form-control" placeholder="Book Author or Publiser" required>
                   </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-theme04 dropdown-toggle" data-toggle="dropdown" style="margin-bottom:20px;width:200px;" >
                       Status<span class="caret"></span>
                    </button>
                     <ul class="dropdown-menu" role="menu" style="border-style:groove;">
                       <li><span style="color:blue;"><b>Borrowed</b></span></li>
                       <li class="divider"></li>
                      <li><span style="color:red;"><b>Returned</b></span></li>
                    </ul>
                 </div>
                <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="date" class="form-control" placeholder="Borrow Date">
                   </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="date" class="form-control" placeholder="Return Date">
                   </div>
                </div>
                <button class="btn btn-success rounded" style="width:40%;margin-left:125px;">ADD BOOK</button>
			   </form>
             </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->

   <?php require_once('header.php')?>
  </section>
</body>
</html>
