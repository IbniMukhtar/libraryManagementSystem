<?php
 class crud{
   public $conn='';
   private $host="localhost";
   private $username="root";
   private $password ="";
   private $database ="librarydb";
  function __construct()
  {
    // $this->database_connect();
    $this->conn = mysqli_connect('localhost','root','','librarydb');
    if(!$this->conn)
      die("failed to connect");
    // else
      // echo"connected successfully";
  // }
   // public function database_connect()
   // {
   //   $this->conn=mysqli_connect($this->host, $this->username  ,$this->password ,$this->database);
   //   if(!$this.conn)
   //      die("failed to connect");
   //  else
   //       echo "connected successsfully";
   // }
}


   public function execute_query($query)
   {
     return mysqli_query($this->conn,$query);
   }

   public function get_data_in_table($query)
   {
     $result = $this->execute_query($query);
 ?>
 <div class="my-3 my-sm-5" style="color:blue;">
   <?php
   if(isset($_GET['message'])){
     if($_GET['message']=='10'){
       echo "Student Updated successfully";
     }
   }
    ?>
 </div>
     <table class="table table-bordered table-hover" cellspacing="0">
                     <tr>
                        <th style="color:blue">id</th>
                        <th style="color:blue">Name</th>
                        <th style="color:blue">UserName</th>
                        <th style="color:blue">Rollno</th>
                        <th style="color:blue">DEPT</th>
                        <th style="color:blue">Contact</th>
                        <th style="color:blue">email</th>
                        <th style="color:blue">Update</th>
                      </tr>
    <?php
              if(mysqli_num_rows($result)>0)
              {
                  $i=1;
                while($row = mysqli_fetch_array($result))
                {
                ?>
                    <tr>
                        <td>  <?php echo $i; ?> </td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['rollno']; ?></td>
                        <td><?php echo $row['dept']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <?php $id= $row['id']; ?>
                        <td><button class="btn btn-success btn-xs update" type="button" name="update"><a href="editstudent.php?id=<?php echo $id ;?>"><i class="fa fa-pencil"></i></a></button>
                             &nbsp;&nbsp;
                            <button class="btn btn-danger btn-xs delete" type="button" name="delete"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                 <?php
                  $i++;
                }
             }
?>
    </table>
<?php
}

public function get_data_in_table_books($query)
 {
   $result = $this->execute_query($query);
?>
 <div class="my-3 my-sm-5" style="color:blue;">
   <?php
   if(isset($_GET['message'])){
     if($_GET['message']=='10'){
       echo "User Updated successfully";
     }
   }
    ?>
 </div>
   <table class="table table-bordered table-hover" cellspacing="0">
                   <tr>
                      <th style="color:blue">S NO.</th>
                      <th style="color:blue">Name</th>
                      <th style="color:blue">Auther</th>
                      <th style="color:blue">Publisher</th>
                      <th style="color:blue">ISBN NO.</th>
                      <th style="color:blue">Copies</th>
                      <th style="color:blue">Copies Available</th>
                      <th style="color:blue">Price</th>
                      <th style="color:blue">Update</th>
                    </tr>
  <?php
            if(mysqli_num_rows($result)>0)
            {
                $i=1;
              while($row = mysqli_fetch_array($result))
              {
              ?>
                  <tr>
                      <td>  <?php echo $i; ?> </td>
                      <td><?php echo $row['book_name']; ?></td>
                      <td><?php echo $row['auther']; ?></td>
                      <td><?php echo $row['publisher']; ?></td>
                      <td><?php echo $row['ISBN_no']; ?></td>
                      <td><?php echo $row['book_copies']; ?></td>
                      <td><?php echo $row['available_books']; ?></td>
                      <td><?php echo $row['book_price']; ?></td>
                      <?php $id= $row['id']; ?>
                      <td><button class="btn btn-success btn-xs update" type="button" name="update"><a href="editBook.php?id=<?php echo $id; ?>"><i class="fa fa-pencil"></i></a></button>
                           &nbsp;&nbsp;
                          <button class="btn btn-danger btn-xs delete" type="button" name="delete"><a href="delbook.php?id=<?php echo $id; ?>"><i class="fa fa-trash-o"></i></a></button>
                      </td>
                  </tr>
               <?php
                $i++;
              }
           }
?>
  </table>
<?php
 }

public function get_data_in_table_admin_info($query){
  $result = $this->execute_query($query);
?>
  <table class="table table-bordered table-hover" cellspacing="0">
                  <tr>
                     <th style="color:blue">S NO.</th>
                     <th style="color:blue">Name</th>
                     <th style="color:blue">UserName</th>
                     <th style="color:blue">Email</th>
                     <th style="color:blue">Update</th>
                   </tr>
 <?php
           if(mysqli_num_rows($result)>0)
           {
               $i=1;
             while($row = mysqli_fetch_array($result))
             {
             ?>
                 <tr>
                     <td>  <?php echo $i; ?> </td>
                     <td><?php echo $row['name']; ?></td>
                     <td><?php echo $row['username']; ?></td>
                     <td><?php echo $row['email']; ?></td>
                     <td><button class="btn btn-success btn-xs update" type="button" name="update"><i class="fa fa-pencil"></i></button>
                          &nbsp;&nbsp;
                         <button class="btn btn-danger btn-xs delete" type="button"  name="delete"><i class="fa fa-trash-o"></i></button>
                     </td>
                 </tr>
              <?php
               $i++;
             }
          }
?>
 </table>
<?php
}

public function get_data_in_table_issuebooks($query){
  $result = $this->execute_query($query);
?>
  <table class="table table-bordered table-hover" cellspacing="0">
                  <tr>
                     <th style="color:blue">S NO.</th>
                     <th style="color:blue">Rollno</th>
                     <th style="color:blue">Name</th>
                     <th style="color:blue">Mobile</th>
                     <th style="color:blue">Email</th>
                     <th style="color:blue">Book Nmae</th>
                     <th style="color:blue">IssueDate</th>
                     <th style="color:blue">ReturnDate</th>
                     <th style="color:blue">Status</th>
                     <th style="color:blue">Update</th>
                   </tr>
 <?php
           if(mysqli_num_rows($result)>0)
           {
               $i=1;
             while($row = mysqli_fetch_array($result))
             {
             ?>
                 <tr>
                     <td>  <?php echo $i; ?> </td>
                     <td><?php echo $row['student_rollno']; ?></td>
                     <td><?php echo $row['student_name']; ?></td>
                     <td><?php echo $row['student_contact']; ?></td>
                     <td><?php echo $row['student_email']; ?></td>
                     <td><?php echo $row['book_name']; ?></td>
                     <td><?php echo $row['book_issue_date']; ?></td>
                     <td><?php echo $row['book_return_date']; ?></td>
                     <td>
                       <?php
                       if($row['book_return_date']==NULL)
                       {
                         echo "Pending..";
                       }
                       else{
                         echo"Returned";
                       }
                     ?>
                   </td>
                     <td><button class="btn btn-success btn-xs update" type="button" name="update"><i class="fa fa-pencil"></i></button>
                          &nbsp;&nbsp;
                         <button class="btn btn-danger btn-xs delete" type="button" name="delete"><i class="fa fa-trash-o"></i></button>
                     </td>
                 </tr>
              <?php
               $i++;
             }
          }
?>
 </table>
<?php
}
}
?>
