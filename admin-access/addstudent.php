
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
          <div class="col-lg-8 col-md-offset-2">
               <h3 id="done" class="form-text text-danger"></h3>
            <button class="btn btn-danger" disabled style="width:100%">
            ADD A NEW STUDENT TO LIBRARY</button>
             <div class="form-panel">
		       <form class="form-horizontal style-form" method="post" action="validate.php" id="form1">
		            <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="text" class="form-control" placeholder="Student Name" id="name" name="name_txt" required>
                   	<b id="nameError" class="form-text text-danger"></b>
                   </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="text" class="form-control" placeholder="UserName" id="userName" name="username_txt" required>
                     	<b id="userNameError" class="form-text text-danger"></b>
                   </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="number" class="form-control" placeholder="Student RollNo." id="rollno"  name="rollno_txt"required>
                   	 	<b id="rollnoError" class="form-text text-danger"></b>
                   </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                  	<label for="dept">Select Department</label>
                   	<select type="text" class="form-control" id="dept" name="dept_txt" required>
                  	 	<option value="Science">Science</option>
                  	 	<option value="Arts">Arts</option>
                  	 	<option value="Commerce">Commerce</option>
					          </select>
                   	 	<b id="deptError" class="form-text text-danger"></b>
                   </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="number" class="form-control" placeholder="Contact Number" id="mobile" name="mobile_txt" required>
                   		<b id="mobileError" class="form-text text-danger"></b>
                   </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="email" class="form-control" placeholder="Email" id="email" name="email_txt" required>
                   	 	<b id="emailError" class="form-text text-danger"></b>
                   </div>
                </div>
                <button class="btn btn-success"  type="submit" id="sub1" name="sub1_txt"
                style="width:40%;margin-left:125px;">
                ADD Student
                </button>
			     </form>
                <h2 class="text-success" id="ack" style="padding-left:50px;"></h2>
                <div class="user_table">

                </div>
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
</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    load_data();
    function load_data()
    {
      var action ="action";
      $.ajax({
          url:"action.php",
          method:"POST",
          data:{action:action},
          dataType:"json",
          success:function(data)
          {
            $("#user_table").html(data);
          }
      });
    }
  });
</script>
