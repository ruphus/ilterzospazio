<?php include('_getBrowser.php'); ?>

<?php 

$browser = _getBrowser();
echo $browser['name'] .' '. $browser['version'];

phpinfo();

?>