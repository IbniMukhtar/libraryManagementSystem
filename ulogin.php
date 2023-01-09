<!-- HEADER INCLUDED -->
<?php
  session_start();
  unset($_SESSION['Ename']);
  unset($_SESSION['Epass']);
  unset($_SESSION['Env']);
  unset($_SESSION['Enpa']);
  require_once('header.php')?>
 <?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		require_once("Models/LibAdm.php");
		require_once("inc/Database.php");
		$adm = new LibAdm();
		// $adm->setUname($_POST['username']);
		// $adm->setPassword($_POST['password']);
		if(!$adm->error){
			$connection=Database::connect();
			$adm->Login($connection);
    
		}
	}

?>

 <!-- MAIN BODY-->
 <main class="form-box">
     <div class="login-box">
      <img class="avatar" src="images/cat-profile.png" alt="mohsin" style="background-color:red;">
       <h1>Admin login</h1>
       <form class="form-group" action="" method="post">
          <label><i class="fa fa-users"> &nbsp; UserName</i></label>
          <input style="margin:0px;" class="form-div" type="text" placeholder="UserName" name="username">
		   <span style="margin:0px" class="text-warning"><?php if(isset($_SESSION['Ename'])) echo $_SESSION['Ename']; else if(isset($_SESSION['Env'])) echo $_SESSION['Env'];   //unset($_SESSION['Env']);?></span>
          <label><i class="fa fa-lock"> &nbsp; Password</i></label>
          <input  style="margin:0px;" class="form-div" type="Password" placeholder="Password" name="password">
	      <span style="margin:0px" class="text-warning"><?php if(isset($_SESSION['Epass'])) echo $_SESSION['Epass']; else if(isset($_SESSION['Enpa'])) echo $_SESSION['Enpa'];   //unset($_SESSION['Enpa']);?></span>
          <input  type="submit" name="submit" value="Login" style="background-color:#2c2cda;color:white;padding:8px;margin-top:13px;height:40px;width:300px;"><br><br>
          <input type="checkbox" name="chkbox" value="chkbx">Remember Password
       </form>
     </div>
 </main>

<!-- FOOTER INCLUDED -->
<?php require_once('footer.php')?>
