<?php

function open_db_connection(){
  $servername = "localhost";
  $username = "ilterzospazio";
  $password = "ilterzospazio";
  $database = "ilterzospazio_db";

  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  return $conn;
}

function close_db_connection($conn){
  $conn = null;  
}

function newsletter_remove($email){
  try{
    $conn = open_db_connection();
    
    $sql = "SELECT email FROM newsletter WHERE email = '".$email."';";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) $msg = "L'email non risulta nella lista di invio.";
    else {
      $sql = "DELETE FROM newsletter WHERE email = '".$email."';";
      $conn->exec($sql);
      
      $msg = "Email rimossa dalla lista di invio.";
    }
  } 
  catch(PDOException $e){ $msg = "Errore di sistema. Contattare info@ilterzospazio.org"; }
  
  close_db_connection($conn);
  
  return $msg;
}  
?>

