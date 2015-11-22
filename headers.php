<?php

error_reporting(-1);  // Have PHP complain about absolutely everything 
$conf['error_level'] = 2;  // Show all messages on your screen, 2 = ERROR_REPORTING_DISPLAY_ALL.
ini_set('display_errors', TRUE);  // These lines just give you content on WSOD pages.
ini_set('display_startup_errors', TRUE);

?>

<?php include('_getBrowser.php'); ?>
    
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="ilterzospazio - lab & coworking a Tor Sapienza">
<meta name="keywords" content="ilterzospazio, terzo spazio, bhabha, lospaziodeipiccoli, spazio dei piccoli, allattamento, elettronica, robotica, coderdojo, lab, coworking, fablab, maker, officine robotiche, biohack, sharing economy, formazione, corsi, seminari, workshop, roma, tor sapienza, giorgio morandi">

<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php

$browser = _getBrowser();

if ($browser['name'] == 'Internet Explorer' && intval($browser['version']) < 9){
?><script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script><?php
}

$its = '<span class="its">ilterzospazio</span>';
?>