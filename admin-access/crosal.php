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
    <!-- *******************************************************************
        MAIN CONTENT
        ********************************************************************* -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3 style="margin-top:28px;"><i class="fa fa-angle-right"></i>Dashboard</h3>
        <div class="row mt">
          <div class="col-lg-4">
            <div class="container">
              <h2>Carousel Example</h2>
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
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
        </div>
      </section>
      <!-- /wrapper -->
      </section>
      <!-- /MAIN CONTENT -->
     <?php require_once('footer.html')?>
  </section>
