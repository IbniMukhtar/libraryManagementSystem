<?php  require_once('database.php'); ?>
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
          <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height" style="padding-top:3px;">
        <!-- <h3 style="margin-top:28px;"><i class="fa fa-angle-right"></i> Blank Page</h3> -->
        <div class="row mt">
          <!-- <div class="col-lg-12"> -->
            <!-- <div class="container" style="margin-bottom:10px;"> -->
              <!-- <h2>Carousel Example</h2> -->
              <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
                 <!--Indicators -->
                <!-- <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol> -->

                <!-- Wrapper for slides -->
                <!-- <div class="carousel-inner">

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
                  </div> -->

                <!-- </div> -->

                <!-- Left and right controls -->
                <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div> -->
            <!-- </div> -->
            <!--first row -->
          	<div class="row">
          	 <!--  col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5><b>BOOK STATICS</b></h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-book fa-3x"></i></h1>
                  <p><h4 style="color:red"><b> <?php $res= mysqli_query($connection, "SELECT * FROM books_tbl");
                                                          echo mysqli_num_rows($res);
                                                ?>&nbsp;Books </b></h4></p>
                  <footer>
                    <div class="centered">
                      <h5 style="color:red"><i class="fa fa-trophy"></i> 1 NEW BOOK</h5>
                    </div>
                  </footer>
                </div>
          	</div>
          	<!--  /col-md-4 -->
          	<!--  col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>SITE STATICS</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                  <p style="color:white;font-size:20px;"><?php $res2= mysqli_query($connection, "SELECT * FROM issue_books_tbl  WHERE book_return_date=''");
                                                          echo mysqli_num_rows($res2);
                                                ?>&nbsp; Issued Books</p>
                  <footer>
                    <div class="centered">
                      <h5><i class="fa fa-trophy"></i> 17,988</h5>
                    </div>
                  </footer>
                </div>
          	</div>
          	<!--  /col-md-4 -->
          	<!--  col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>STUDENT STATICS</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-users fa-3x"></i></h1>
                  <p><h4 style="color:red"> <?php $res1= mysqli_query($connection, "SELECT * FROM student_tbl");
                                                          echo mysqli_num_rows($res1);
                                                ?>&nbsp;TOTAL STUDENTS</h4></p>
                  <footer>
                    <div class="centered">
                      <h5 style="color:red"s><i class="fa fa-trophy"></i> 02 NEW ARRIVALS</h5>
                    </div>
                  </footer>
                </div>
          	</div>
          	<!--  /col-md-4 -->
          </div>
            <!--/row first ends-->
             <!--  Second ROW OF PANELS -->
            <div class="row">
              <!-- WEATHER PANEL -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="weather pn">
                  <i class="fa fa-cloud fa-4x"></i>
                  <h1 id="clock" style="color:yellow;"></h1>

                  <h4>SRINAGAR</h4>
                </div>
              </div>
              <!-- /col-md-4-->
              <!-- WEATHER-2 PANEL -->
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="weather-2 pn">
                  <div class="weather-2-header">
                    <div class="row">
                      <div class="col-sm-6 col-xs-6">
                        <p>SRINAGAR</p>
                      </div>
                      <div class="col-sm-6 col-xs-6 goright">
                        <p class="small"><?php date_default_timezone_set("Asia/KolKata");  echo date("l jS \of F Y"); ?></p>
                      </div>
                    </div>
                  </div>
                  <!-- /weather-2 header -->
                  <div class="row centered">
                    <img src="img/ny.jpg" class="img-circle" width="120">
                  </div>
                  <div class="row data">
                    <div class="col-sm-6 col-xs-6 goleft">
                      <h4><b>16 ºC</b></h4>
                      <h6>21º max</h6>
                      <h6>8º min</h6>
                    </div>
                    <div class="col-sm-6 col-xs-6 goright">
                      <h5><i class="fa fa-sun-o fa-2x"></i></h5>
                      <h6><b>Sunny</b></h6>
                      <h4 id="clock1" style="color:black"></h4>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /col-md-4 -->

              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5>CURRENT USER</h5>
                  </div>
                  <p><img src="img/ui-zac.jpg" class="img-circle" width="50"></p>
                  <!-- <p><b style="color:black;"><?php?> if ($_GET["username"]=='') echo 'bhat mohsin'; else echo $_GET["username"] <?php?></b></p> -->
                  <div class="row">
                    <div class="col-md-6">
                      <p class="small mt" style="color:black;">MEMBER SINCE</p>
                      <p>2012</p>
                    </div>
                    <div class="col-md-6">
                      <p class="small mt" style="color:black;"><a href="viewAdmin.php">Admin Contact</a></p>
                      <!-- <p><?php
                         $u=$_GET["username"];
                       $res=mysqli_query($connection, "SELECT email FROM admin_info WHERE username = '$u'");
                                echo mysqli_num_rows($res);
                       ?></p> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row - SECOND ROW OF PANELS -->
            <!--  THIRD ROW OF PANELS -->
            <div class="row">
              <!-- TWITTER PANEL -->
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="twitter-panel pn">
                  <i class="fa fa-twitter fa-4x"></i>
                  <p>MOHSIN here! Take a look and enjoy this new Bootstrap Dashboard theme.</p>
                  <p class="user"><a href="https://instagram.com/ga_shuu?igshid=1jlw0pddi5unq">@ibni_Mukhtar</a></p>
                </div>
              </div>
              <!-- /col-md-4 -->

              <!-- WEATHER-3 PANEL -->
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="weather-3 pn centered">
                  <i class="fa fa-sun-o"></i>
                  <h1>30º C</h1>
                  <div class="info">
                    <div class="row">
                      <h3 class="centered">SRINAGAR</h3>
                      <div class="col-sm-6 col-xs-6 pull-left">
                        <p class="goleft"><i class="fa fa-tint"></i> 13%</p>
                      </div>
                      <div class="col-sm-6 col-xs-6 pull-right">
                        <p class="goright"><i class="fa fa-flag"></i> 15 MPH</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <!-- /col-md-4 -->
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <!-- INSTAGRAM PANEL -->
                <div class="instagram-panel pn">
                  <a href="https://instagram.com/ga_shuu?igshid=1jlw0pddi5unq"><i class="fa fa-instagram fa-4x" onh></i></a>
                  <p>ga_shuu<br/> 5 min. ago
                  </p>
                  <p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row THIRD ROW OF PANELS -->
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->

    <!--main content end-->
   <?php require_once('footer.html')?>
  </section>
</body>
</html>
<script type="text/javascript">
  setInterval(displayClock,500);
  function displayClock(){
    var time = new Date();
    var hrs =time.getHours();
    var min = time.getMinutes();
    var sec= time.getSeconds();
    if (hrs < 10) {
      hrs='0'+hrs;
    }
    if (min < 10) {
      min='0'+min;
    }
    if (sec < 10) {
      sec='0'+sec;
    }
    document.getElementById("clock").innerHTML= hrs+':'+min+':'+sec;
  }
    setInterval(displayClock1,500);
  function displayClock1(){
    var time = new Date();
    var hrs =time.getHours();
    var min = time.getMinutes();
    var sec= time.getSeconds();
    if (hrs < 10) {
      hrs='0'+hrs;
    }
    if (min < 10) {
      min='0'+min;
    }
    if (sec < 10) {
      sec='0'+sec;
    }
    document.getElementById("clock1").innerHTML= hrs+':'+min+':'+sec;
  }
</script>
