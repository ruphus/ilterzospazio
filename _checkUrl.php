<?php
$correct_server_name = "www.ilterzospazio.org";
if (
  strpos("localhost, 127.0.0.1", $_SERVER['SERVER_NAME']) === false &&
  strpos($_SERVER['SERVER_NAME'], $correct_server_name) === false
){
  $url = "http://".$correct_server_name.$_SERVER['PHP_SELF'];
  header("Location: ".$url);
  die();
}
?>