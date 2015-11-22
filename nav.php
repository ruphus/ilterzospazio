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
      <a class="navbar-brand" href="index3.html">
        <img alt="ilterzospazio" src="res/logo_lineare.png">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-menu">
      <ul class="nav navbar-nav navbar-right">
      <? 
      foreach ($menu_items as $label => $url) { 
      ?><li
        <?
          if ( strcmp($_SERVER['REQUEST_URI'], $url) == 0 ){
          ?>class="active"<?
          }
        ?>
        >
          <a href="<?= $url ?>"><?= $label ?></a>
        </li><?
      }
      ?>
      </ul>
    </div>
  </div>
</nav>