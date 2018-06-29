<?php
if(isset($_POST["sub"]))

{
  
  
  $unm=$_POST["uname"];
  
  
  $mob=$_POST["mob"];
  
  
  $em=$_POST["em"];
  
  
  $msg=$_POST["message"];	
  
  
  
  $ins="insert into user(username,mobile,email,message) values('$unm','$mob','$em','$msg')";
  
  
  $ex=$conn->query($ins);
  
  
  if($ex)
  
  {
  
  
  echo "<script>
  
  
  alert('Thanks for Registered with Us!')
  
  
  window.location='index.php';
  
  
  
  </script>";
	
	
	
  }
  
  
  else
  
  {
	  
	 
  echo "<script>
  
  
  alert('Sorry You are Not Registered Try Again')
  
  
  window.location='index.php';
  
  
  
  </script>";
	 
	  
	  
  }
	
	
	
}





?>

    
 <!---register modal-------->
 
 
 <div id="Myregister" class="modal fade" role="dialog">
 
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">   
    
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  
  <h1 align="center">Regiter Form</h1>
  
  </div>
  
  
  <div class="modal-body">
  
   <form method="post">  
  <div class="form-group">
  <label>Enter Name *:</label>
  <input type="text" name="uname" required placeholder="Enter Name" class="form-control">

  </div>
  
  <div class="form-group">
  <label>Enter Mobile *:</label>
  <input type="text" name="mob" required placeholder="Enter mobile" class="form-control">

  </div>
  
  
  <div class="form-group">
  <label>Enter Email *:</label>
  <input type="text" name="em" required placeholder="Enter email" class="form-control">

  </div>
  
  
  <div class="form-group">
  <label>Enter Message *:</label>
  <textarea name="message" required placeholder="Enter Message" class="form-control"></textarea>

  </div>
  
  
  <div class="form-group">
  
  <input type="submit" name="sub" value="Submit" class="btn btn-block btn-success" >

  </div>
  
  
  
  </form>
  
  
  
  
  </div>
  
  </div>
  </div>
  </div>  
  