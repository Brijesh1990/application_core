<?php
include("config.php");

 if(isset($_POST["frg"]))
 
 {
	  
	  $em=$_POST["em"];
	  
	  $sel="select password from user where email='$em'";
	  
	  $ex=$conn->query($sel);
	  
	  $fet=$ex->fetch_array();
	  
	  $no=$ex->num_rows;
	  
	  
	  if($no==1)
	  
	  
	  {
		  
		   $p=$fet["password"];  
		  
		  
		  
		  echo "<script>
		  alert('Your password is :' + '' + '$p')
		  
		  window.location='index.php';
		  
		  
		  </script>";
		  
	  }
	 
	 
	 else
	 
	 {
		 
		  echo "<script>
		  alert('Your Email Id does not exist in Database Try again')
		  
		  window.location='forgetpassword.php';
		  
		  
		  </script>";
		 
	 }
	 
	 
 }
 
 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My first application in php Like and comments</title>

<link rel="stylesheet" href="css/bootstrap.min.css" />


<link rel="stylesheet" href="css/style.css" />


<link rel="stylesheet" href="css/font-awesome.min.css" />


<script src="js/jquery.js" type="text/javascript"></script>


<script src="js/bootstrap.min.js" type="text/javascript"></script>



<script src="js/npm.js" type="text/javascript"></script>




</head>




<body>
<?php
include("header.php");


include("menu.php");

?>

<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-xs-12">

<div id="address">
<center>
<h2 align="center">Forget Password</h2>


<div class="col-md-6 col-xs-12 col-md-offset-3">


  <form method="post">  

  
  
  <div class="form-group">
  <label>Enter Your Email *:</label>
  <input type="text" name="em" required placeholder="Enter email" class="form-control">

  </div>
  
  
  
  
  <div class="form-group">
  
  <input type="submit" name="frg" value="Submit" class="btn btn-block btn-success" >
  

  </div>
  
  
  
  </form>

</div>
</center>
</div>

<div id="i">
<img src="images/family.png" class="img-responsive" style="width:20%; height:480px; transform:rotate(-8deg); margin-left:22%;" />
</div>

</div>
</div>
</div>
</div>





<?php
include("footer.php");


?>



<!---for call register and login page modal-->

<?php
include("login.php");
include("register.php");
?>


</body>
</html>