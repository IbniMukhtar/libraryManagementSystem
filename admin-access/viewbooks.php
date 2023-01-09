<?php
include"functions.php";
$object =new crud();
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
</head>
<body>
  <section id="container">
   <?php require_once('header.php')?>
<!--******************************************************************MAIN CONTENT**************************************************-->
    <section id="main-content">
      <section class="wrapper" style="min-height:51rem;">

        <form  action="" method="POST" style="margin-top:20px;" style="float: right;">
          <button class="btn btn-success" type="submit" name="submit1"><i class="fa fa-search"></i></button>
          <input type="text" name="t1"
          style="border-radius:25px;border:2px  gray;padding:10px;color:black;height:35px;" placeholder="&nbsp;&nbsp;&nbsp;Search Book...">
        </form>

        <h3 style="margin-top:28px;color:green;" centered><i class="fa fa-book"></i><b>BOOK'S TABLE</b></h3>
        <div class="row mt sm-12">
          <div class="col-sm-12">
            <div class="tablt table-responsive table-responsive" id="user_table">
              <table class="table table-bordered table-stripped" style="">

                <?php
                  if(isset($_POST["submit1"]))
                     {
                       $t1=$_POST["t1"];
                      echo $object->get_data_in_table_books("SELECT * FROM books_tbl WHERE book_name = '$t1'");
                     }
                   else{
                       echo $object->get_data_in_table_books('SELECT * FROM books_tbl ORDER BY id');
                      }
               ?>
                </table>
            </div>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
  </section>
<?php require_once('footer.html')?>
</body>
</html>
<!-- <script type="text/javascript">
  $(document).ready(function(){
    load_data();
    function load_data()
    {
      var action ="Load";
      $.ajax({
          url:"action.php",
          method:"POST",
          data:{action:Load},
          dataType:"json",
          success:function(data)
          {
            $("#user_table").html(data);
          }
      });
  });
</script> -->
<style media="screen">

    .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border: 1px solid black;
  }
  .table-bordered>tbody>tr>td{
    color:black;
  }
</style>
