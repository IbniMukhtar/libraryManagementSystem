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
public function get_data_in_table_books($query)
 {
   $result = $this->execute_query($query);
?>
   <table class="table table-bordered table-hover" cellspacing="0">
                   <tr>
                      <th style="color:blue">S NO.</th>
                      <th style="color:blue">Name</th>
                      <th style="color:blue">Auther</th>
                      <th style="color:blue">Publisher</th>
                      <th style="color:blue">ISBN NO.</th>
                      <th style="color:blue">Copies</th>
                      <th style="color:blue">Price</th>
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
                      <td><?php echo $row['book_price']; ?></td>
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
