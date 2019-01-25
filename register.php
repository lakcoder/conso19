<?php
  session_start();
  $db_host = "localhost";
  $db_username = "root";
  $db_pass = "";
  $db_name = "conso19";

  $con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
  mysqli_select_db($con,$db_name) or die ("no database");

  if($_POST['swadesh']){

  }elseif ($_POST['adventure']) {

  }elseif ($_POST['pitchperfect']) {

  }elseif ($_POST['renderico']) {

  }elseif ($_POST['ceo']) {

  }elseif ($_POST['teentitans']) {

  }elseif ($_POST['bizmantra']) {

  }elseif ($_POST['bizquiz']) {

  }elseif ($_POST['consoworld']) {

  }
?>

<!DOCTYPE html>
<html>

  <body>

  </body>
</html>
