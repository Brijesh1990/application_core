<?php
session_start();

unset($_SESSION["uid"]);

unset($_SESSION["em"]);


session_destroy();


echo "<script>
  alert('Logout suucefully')
  
  
  window.location='index.php';


  </script>"







?>