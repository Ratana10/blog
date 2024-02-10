<?php
include "./includes/header.php";
  session_start();

  if(!isset($_SESSION['username']) && !isset($_SESSION['userId'])){
    header("Location: ./auth/login.php");
  }
?>


<?php
include "./includes/footer.php";
?>