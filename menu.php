<div class="menu">
<div class="container-fluid">

<div class="row">

<div class="col-md-12 col-xs-12">

<nav class="navbar">

<div class="navbar-header"><h5>My first Applications in PHP</h5></div>


<div class="navbar-header  pull-right">

<ul>


   <?php
   
    if(!isset($_SESSION["uid"]))
	
	{
	
	
   
   
   ?>

<li><a href="" class="active">Home</a></li>
<li><a href="">About</a></li>
<li><a href="">Services<span class="caret"></span></a></li>
<li class="dropdown"><a class="dropdown" data-toggle="dropdown" href="">My Account<span class="caret"></span></a>

<ul class="dropdown-menu">
<li><a href="#register" data-toggle="modal" data-target="#Myregister">Sign Up!<span class="fa fa-user"></span></a></li>
<li><a href="#login" data-toggle="modal" data-target="#Mylogin">Sign In!<span class="fa fa-user"></span></a></li>
</ul>
</li>



<?php
	}
	
	else
	
	
	{
?>


<li><a href="">Profile</a></li>
<li><a href="">Select Category<span class="caret></span>"</a></li>

<li><a href="">change Password</a></li>

<li><a href="">Gallery</a></li>


<li><a href="">Contact Us</a></li>



<li class="dropdown"><a class="dropdown" data-toggle="dropdown" href="" style="color:red"><b>Welcome To :<?php echo $_SESSION["em"]; ?></b><span class="caret"></span></a>

<ul class="dropdown-menu">

<li><a href="logout.php">Logout!<span class="fa fa-user"></span></a></li>

</ul>
</li>


<?php

	}
	?>

</ul>




</div>


</nav>
</div>
</div>
</div>

</div>