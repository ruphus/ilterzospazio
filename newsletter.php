<?php
header('Content-Type: application/json');

function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}                             
 
if (!is_ajax() || $_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  die();
}
  
if (! isset($_POST["email"] ){
  http_response_code(400);
  die();
}

require('db_utils.php');

$msg = "";
   
try{
  $conn = open_db_connection();
  
  $email = "'".$_POST["email"]."'";
  $name = isset($_POST["name"]) ? "'".$_POST["name"]."'" : null;
  
  $sql = "INSERT INTO newsletter (email, nome, data_iscrizione) VALUES (".$email.", ".$name.", NOW());";
  $conn->exec($sql);
  
  $msg = "ok";
}
catch (PDOException $e){
  if ( strpos($e->getMessage(), "SQLSTATE[23000]") !== false ){
    $msg = "newsletter.already-registered";
  }
  else http_response_code(500);
}
finally {
  close_db_connection($conn);
  
  
  $response = array("message" => $msg);
  echo json_encode($response);
}
?>