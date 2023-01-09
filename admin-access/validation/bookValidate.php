<?php
class valbook{
  private $bName;
  private $bAuther;
  private $bPublisher;
  private $ISBN;
  private $bCopies;
  private $abCopies;
  private $bimg;
  private $bPrice;
  public $error;
  //*****************************************************************
        function setName($bName){
  		   if(empty($bName)){
  			   $_SESSION['Ebname']="* Please Enter Book Name";
  		       $this->error="true";
  		   }
  		   $this->bName=$bName;
  	   }
  //*****************************************************************
      function setAuther($Auther){
        if(empty($Auther)){
          $_SESSION['EAuther']="* Please Enter Book Auther Name";
            $this->error="true";
        }
        $this->bAuther=$Auther;
      }
//*****************************************************************
function setPublisher($Publisher){
  if(empty($Publisher)){
    $_SESSION['EPublisher']="* Please Enter Book Publisher Name";
      $this->error="true";
  }
  // else if(!(preg_match("/^([a-zA-Z' ]+ )$/", $Publisher))) {
  //   $_SESSION['EPublisher']="* invalid Book Name";
  //     $this->error="true";
  // }
  // else {
    $this->bPublisher=$Publisher;
  // }

}
//*****************************************************************
function setISBN($isbn){
  if(empty($isbn)){
    $_SESSION['Eisbn']="* Please Enter Book ISBN Number";
      $this->error="true";
  }
  $this->ISBN=$isbn;
}
//*****************************************************************
function setBookCount($copies){
  if(empty($copies)){
    $_SESSION['Ebcopies']="* Specipy Total Number of Copies";
      $this->error="true";
  }
  $this->bCopies=$copies;
}
//*****************************************************************
//*****************************************************************
function setABookCount($abcopies){
  if(empty($abcopies)){
    $_SESSION['Eabcopies']="* Specipy Number of Copies Available";
      $this->error="true";
  }
  $this->abcopies=$abcopies;
}
//*****************************************************************
function setPhoto($photo){
  if(empty($photo)){
    $_SESSION['Ephoto']="* Book Photo is required";
      $this->error="true";
  }
  $this->bimg=$photo;
}
//*****************************************************************
function setPrice($price){
  if(empty($price)){
    $_SESSION['Eprice']="* Please Enter Book Price";
      $this->error="true";
  }
  $this->bPrice=$price;
}
//*****************************************************************
function addBook($connection,$bname,$Auther,$Publisher,$isbn,$copies,$abcopies,$photo,$price){
  $name=$bname;
  $AutherName=$Auther;
  $PublisherName=$Publisher;
  $isbNo=$isbn;
  $bookcopies=$copies;
  $abcopies=$abcopies;
  $img=$photo;
  $cost=$price;
  $query="select * from books_tbl where ISBN_no='$isbNo'";
  $result=mysqli_query($connection,$query);
  $row= mysqli_num_rows($result);
  if(mysqli_num_rows($result)>0){
    $_SESSION['Eexist']="* Another Book with Same isbn already exists";
    $_SESSION['NEntered']="*BOOK REGISTRATION FAILED";
    $this->error="true";
  }
    else{
      $sql="INSERT INTO books_tbl VALUES(NULL,'$name','$AutherName','$PublisherName','$isbNo','$bookcopies','$abcopies','$img','$cost')";
      $me=mysqli_query($connection,$sql);
      if($me)
        {
          ?>
          <script type="text/javascript">
            window.location="viewbooks.php";
            alert("book added successfully");
          </script>
          <?php
        }
    }
}
//*****************************************************************
}
?>
