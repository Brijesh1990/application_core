<?php
if(isset($_POST["sub"]))

{
  
  $tmp=$_FILES["img"]["tmp_name"];
  
  
  $path="upload/".$_FILES["img"]["name"];
  
  
  $type=$_FILES["img"]["type"];

  $size=$_FILES["img"]["size"]/1024;
  
  
  move_uploaded_file($tmp,$path);
  
  
  $unm=$_POST["uname"];
  
  
  $mob=$_POST["mob"];
  
  
  $em=$_POST["em"];
  
  $p=$_POST["pass"];
  
  
  $cp=$_POST["cpass"];
  
  
  $msg=$_POST["message"];
  
  $g=$_POST["gender"];
  
  $h=implode(",",$_POST["chk"]);
  
  $day=$_POST["day"];
  
  
  $month=$_POST["month"];
  	
	
  $year=$_POST["year"];
  
  $dob=$day."/".$month."/".$year;	
  
  $jod=$_POST["jdat"];
  
  $cn=$_POST["country"];
  
  
  
  $sn=$_POST["state"];
  
  
  if($p==$cp)
  
  {
  
  
  
  $ins="insert into user(photo,name,mobile,email,password,message,gender,hobby,dob,joiningdate,cid,sid) values('$path','$unm','$mob','$em','$p','$msg','$g','$h','$dob','$jod','$cn','$sn')";

  
  $ex=$conn->query($ins);
  
  
 
  
  
  echo "<script>
  
  
  alert('Thanks for Registered with Us!')
  
  
  window.location='index.php';
  
  
  
  </script>";
	
	
	
  }



else

{
	
	
	
  echo "<script>
  
  
  alert('Password does not matched')
  
  
  window.location='index.php';
  
  
  
  </script>";	
	
}

	 


	
}





?>
<html>
<head>

<link rel="stylesheet" type="text/css"  href="css/jquery-ui.css"/>
<script type="text/javascript" src="js/jquery-ui.js"></script>

<script type="text/javascript">

$(document).ready(function(e) {
    
	
	  $("#datepicker").datepicker();
	
	
});




</script>

</head>



</html>
    
 <!---register modal-------->
 
 
 <div id="Myregister" class="modal fade" role="dialog">
 
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">   
    
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  
  <h1 align="center">Register Form</h1>
  
  </div>
  
  
  <div class="modal-body">
  
   <form method="post" enctype="multipart/form-data">  
  
  <div class="form-group">
  <label>Upload Images *:</label>
  <input type="file" name="img"  class="form-control">

  </div>
  
  
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
  <label>Enter Password *:</label>
  <input type="password" name="pass" required placeholder="Enter password" class="form-control">

  </div>
  
  
  
  
  <div class="form-group">
  <label>Re-Enter Password *:</label>
  <input type="password" name="cpass" required placeholder="Enter cpassword" class="form-control">

  </div>
  
  
  <div class="form-group">
  <label>Enter Message *:</label>
  <textarea name="message" required placeholder="Enter Message" class="form-control"></textarea>

  </div>
  
  
   <div class="form-group">
  <label>Gender *:</label>
  Male:<input type="radio" name="gender" value="male">

  Female:<input type="radio" name="gender" value="female">

  </div>
  
  
  
   <div class="form-group">
  <label>Hobby *:</label>
  Reading:<input type="checkbox" name="chk[]" value="reading">

  Writing:<input type="checkbox" name="chk[]" value="writing">



  Playing:<input type="checkbox" name="chk[]" value="playing">

  </div>
  
  
  
  <div class="form-group">
  <label>Selct DOB*</label>
 
<br />  
  <!--for day--->
  <select name="day" class="col-sm-3" style="padding:2px; margin:2px;">
  <option value="">-day-</option>
  <?php
  for($i=1;$i<=31;$i++)
  {
  
  
  ?>
  <option value="<?php echo $i;?>"><?php echo $i;?></option>
  
  <?php
  }
  ?>
  
  </select>
  
  
  
  <!--for month--->
  <select name="month"  class="col-sm-3" style="padding:2px; margin:2px;">
  <option value="">-month-</option>
  <?php
  for($i=1;$i<=12;$i++)
  {
  
  
  ?>
  <option value="<?php echo $i;?>"><?php echo $i;?></option>
  
  <?php
  }
  ?>
  
  </select>
  
  
  
  <!--for year--->
  <select name="year"  class="col-sm-3" style="padding:2px; margin:2px;">
  <option value="">-year-</option>
  <?php
  for($i=1970;$i<=2022;$i++)
  {
  
  
  ?>
  <option value="<?php echo $i;?>"><?php echo $i;?></option>
  
  <?php
  }
  ?>
  
  </select>
  
  
  </div>
  
   
<br />  
  
  <div class="form-group">
  <label>Select Joining Date</label>
  
  
  <input type="text" name="jdat" placeholder="Joining date" required="required" class="form-control" id="datepicker" />
  
  </div>
  
  
  
  <div class="form-group">
  <label>Select country-</label>
  
  <select name="country" class="form-control">
  <option value="">-select country-</option>
  <?php
  $sel="select * from country";
  $ex=$conn->query($sel);
  
  while($fet=$ex->fetch_array())
  
  {
  
  ?>
  
  <option value="<?php echo $fet["cid"];?>"><?php echo $fet["cname"];?></option>
  
<?php
  }
  ?>
  </select>
  
  
  
  
  </div>
  
  
  
   
  
  <div class="form-group">
  <label>Select state-</label>
  
  <select name="state" class="form-control">
  <option value="">-select state-</option>
  <?php
  $sel="select * from state";
  $ex=$conn->query($sel);
  
  while($fet=$ex->fetch_array())
  
  {
  
  ?>
  
  <option value="<?php echo $fet["sid"];?>"><?php echo $fet["sname"];?></option>
  
<?php
  }
  ?>
  </select>
  
  
  
  
  </div>
  
  
  <div class="form-group">
  
  <input type="submit" name="sub" value="Submit" class="btn btn-lg btn-success" >




  <input type="reset" name="sub" value="Clear" class="btn btn-lg btn-danger" >

  </div>
  
  
  
  </form>
  
  
  
  
  </div>
  
  </div>
  </div>
  </div>  
  