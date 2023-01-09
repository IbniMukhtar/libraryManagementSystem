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
   <?php require_once('header.php');
         require_once('database.php');
   ?>
<!--******************************************************************MAIN CONTENT**************************************************-->
    <section id="main-content">
      <section class="wrapper" style="min-height:51rem;">
        <!-- return book procedure -->
        <h3 style="margin-top:28px;color:green;"><i class="fa fa-mail-reply"></i>Type Book Name And Return Book</h3>
        <form  action="" method="POST" style="margin-top:20px;" style="float: right;">
          <button class="btn btn-success" type="submit" name="submit1"><i class="fa fa-search"></i></button>
          <input type="text" name="enr"
          style="border-radius:25px;border:2px  gray;padding:10px;color:black;height:35px;" placeholder="&nbsp;&nbsp;&nbsp;Type BookName...">
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
        <!-- return book procedure -->
        <h3 style="margin-top:28px;color:green;"><i class="fa fa-users"></i>BOOK MANAGEMENT TABLE</h3>
        <div class="row mt sm-12">
          <div class="col-sm-12">
            <div class="tablt table-responsive table-responsive" id="user_table">
              <table class="table table-bordered table-stripped" style="">

                  <?php echo $object->get_data_in_table_issuebooks('SELECT * FROM issue_books_tbl ORDER BY id DESC'); ?>
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
