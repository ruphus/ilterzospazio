<?php

$menu_items = array(
  "home" => "/",
  "chi siamo" => "/chi_siamo.php",
  "lo spazio" => "/lo_spazio.php",
  "eventi" => "/eventi.php",
  "contatti" => "/contatti.php"                                   
);

?>

<?php include('cookies_popup.php'); ?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
        <img alt="ilterzospazio" src="images/logo_lineare.png">
      </a>
    </div>
    
    <ul class="nav navbar-nav" id="left-navbar">
      <li>Tor Sapienza lab &amp; coworking</li>
    </ul>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-menu">
      <ul class="nav navbar-nav navbar-right">
      <?php
      foreach ($menu_items as $label => $url) { 
      ?><li
        <?php
        if ( strcmp($_SERVER['REQUEST_URI'], $url) == 0 ){
        ?>class="active"<?php
        }
        ?>
        >
          <a href="<?= $url ?>">
            <?= $label ?>
            <?php
            if ( strcmp($label, "eventi") == 0 ){
            ?><!--<span class="badge bg-red fg-grey">1</span>--><?php
            }
            ?>
            
          </a>
        </li><?php
      }
      ?>
      </ul>
    </div>
  </div>
</nav>