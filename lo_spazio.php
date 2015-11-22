<!DOCTYPE html>
<html>
  <head>
    <?php include('headers.php'); ?>
  
    <link rel="stylesheet" href="css/space.css">
    
    <?php
    
    $is_items = array(
      "postazioni in spazio condiviso, se ti piace lavorare in un ambiente creativo, stimolante e a contatto con altri professionisti" => "fa-users",
      "postazioni in uffici privati, se hai necessità di uno spazio a tua esclusiva disposizione" => "fa-user",
      "un laboratorio di ricerca per attività di biohacking" => "fa-flask",
      "un makerlab dedicato all’elettronica e alle nuove tecnologie" => "fa-wrench",
      "una sala riunioni attrezzata" => "fa-microphone",
      "una sala dedicata a eventi/workshop/corsi" => "fa-bookmark"                                  
    );
    
    $has_items = array(
      "connessione wi-fi" => "fa-wifi",
      "stampante/fotocopiatrice/fax/scanner" => "fa-print",
      "una piccola e confortevole area relax con punto ristoro" => "fa-coffee",
      "una BiblioVideoteca – BookCrossing point" => "fa-book"
    );
    
    $offers_items = array(
      "servizi di traduzione e mediazione linguistica in inglese" => "fa-book",
      "lezioni di inglese <i>one to one</i> o in gruppo per tutte le et&agrave" => "fa-globe",
      "consulenza per la progettazione di servizi per l'infanzia e l'adolescenza (asili nido, scuole dell'infanzia, ludoteche, servizi domicilari, centri per adolescenti e giovani)" => "fa-street-view",
      "servizi di segreteria" => "fa-phone",
      "domiciliazione postale" => "fa-inbox"
    );  
    
    ?>
    
  </head>
  <body>
  
    <?php include('nav.php'); ?>
    
    <div class="block block-min">
      <div class="block-wrap">
        <div class="block-heading">
          <i class="block-heading-icon fa fa-cogs fg-orange"></i>
          <h4 class="block-heading-text">ilterzospazio...</h4>
        </div>
      </div>  
    </div>
    
    <div id="is-media" class="media">
      <div class="media-left bg-green fg-grey">&egrave;</div>
      <div class="media-body">
      <?php
                
      foreach ($is_items as $item => $icon) {
      ?><div class="media">
          <div class="media-left"><i class="fa <?= $icon ?> fa-2x fg-green"></i></div>
          <div class="media-body"><?=$item?></div>
        </div><?
      }
        
      ?>
      </div>
    </div>
    
                                                                                        
    <div id="has-media" class="media">
      <div class="media-left bg-cyan fg-grey">ha</div>
      <div class="media-body">
      <?php
                
      foreach ($has_items as $item => $icon) {
      ?><div class="media">
          <div class="media-left"><i class="fa <?= $icon ?> fa-2x fg-cyan"></i></div>
          <div class="media-body"><?=$item?></div>
          <div class="media-right"><i class="fa <?= $icon ?> fa-2x fg-cyan"></i></div>
        </div><?
      }
        
      ?>
      </div>
      <div class="media-right bg-cyan fg-grey">ha</div>
    </div>
  
    <div id="offers-media" class="media">
      <div class="media-left bg-red fg-grey">offre</div>
      <div class="media-body">
      <?php
                
      foreach ($offers_items as $item => $icon) {
      ?><div class="media">
          <div class="media-left"><i class="fa <?= $icon ?> fa-2x fg-red"></i></div>
          <div class="media-body"><?=$item?></div>
        </div><?
      }
        
      ?>
      </div>
    </div>
     
    <div class="block bg-grey">
      <div class="block-wrap">
        <div class="block-heading">
          <i class="block-heading-icon fa fa-child fg-green"></i>
          <h4 class="block-heading-text">ilterzospazio &egrave; anche lospaziodeipiccoli!</h4>
        </div>
        <div class="block-body padded">
          <p>Vorresti lavorare da noi ma non sai a chi affidare i tuoi piccoli?</p>
          <p>
            <?=$its?> mette a disposizione di mamme e pap&agrave;
            coworkers un'area dedicata, dove giocare con Chiara, ascoltare fiabe,
            schiacciare un pisolino...
          </p>
        </div>
      </div>  
    </div>
    
    <div class="block">
      <div class="block-wrap">
        <div class="block-heading">
          <i class="block-heading-icon fa fa-building-o fg-red"></i>
          <h4 class="block-heading-text">gli spazi</h4>
        </div>
        <div class="block-body center">
          <img id="plan-img" src="res/piantina.png">
        </div>
      </div>
    </div>
    
    <?php include('footer.php'); ?>
    
  </body>

</html>