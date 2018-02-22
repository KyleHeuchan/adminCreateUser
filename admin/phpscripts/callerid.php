<?php


  require("config.php");

  if(isset($_GET['caller_id'])) {

    $dir = $_GET['caller_id'];


    if($dir == 'logout') {

      logged_out();
    } else {
      echo "Calledid was not correct and creating errors.";

    }
  }



?>
