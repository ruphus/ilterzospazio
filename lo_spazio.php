<?php include('_checkUrl.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>ilterzospazio - lo spazio</title>
    <link rel="canonical" href="https://www.ilterzospazio.org/lo_spazio.php" />
    
    <?php include('headers.php'); ?>
    
    <link rel="stylesheet" href="css/ekko-lightbox.min.css">
    <link rel="stylesheet" href="css/space.css">
    
    <script src="js/ekko-lightbox.min.js"></script>
    <script type="text/javascript">
    /*
    $.fn.ekkoLightbox.defaults = {
      loadingMessage : "Caricamento in corso..."
    };
    */
    
    $(document).ready(function(){
        $(document).delegate('[data-toggle="lightbox"]', 'click', function(event) {
          event.preventDefault();
          $(this).ekkoLightbox();
        });
    });
    </script>
    
    <?php
    
    $is_items = array(
      "postazioni in spazio condiviso, se ti piace lavorare in un ambiente creativo, stimolante e a contatto con altri professionisti" => "fa-users",
      "postazioni in uffici privati, se hai necessità di uno spazio a tua esclusiva disposizione" => "fa-user",
      "un laboratorio di ricerca e sperimentazione per attività di biohacking" => "fa-flask",
      "un makerlab per l'autoproduzione, orientato all'elettronica, alla robotica e alle nuove tecnologie" => "fa-wrench",
      "una sala riunioni attrezzata" => "fa-microphone",
      "una sala dedicata a eventi/workshop/corsi" => "fa-bookmark"                                  
    );
    
    $has_items = array(
      "connessione wi-fi" => "fa-wifi",
      "stampante/fotocopiatrice/fax/scanner" => "fa-print",
      "una BiblioVideoteca – BookCrossing point" => "fa-book",
      "una piccola e confortevole area relax" => "fa-coffee",
      "un angolo dedicato all'allattamento" => "fa-breast-feeding"
    );
    
    $offers_items = array(
      "servizi di traduzione e mediazione linguistica in inglese" => "fa-globe",
      "corsi e laboratori per adulti e bambini" => "fa-graduation-cap",
      "consulenza per la progettazione di servizi per l'infanzia e l'adolescenza (asili nido, scuole dell'infanzia, ludoteche, servizi domicilari, centri per adolescenti e giovani)" => "fa-street-view",
      "servizi di segreteria" => "fa-phone",
      "domiciliazione postale" => "fa-inbox"
    );
    
    ?>
    
  </head>
  <body>
  
    <?php include('nav.php'); ?>
    
    <div id="page-content">
    
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
          </div><?php
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
          </div><?php
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
          </div><?php
        }
          
        ?>
        </div>
      </div>
      
      <div class="block bg-pattern">
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
            
            <div class="container-fluid mb-20px">
              <div class="row">
        
                <div class="col-xs-6 col-sm-4 col-md-2">
                  <a 
                    href="images/spazio/spazio_01.jpg" 
                    class="thumbnail" 
                    data-toggle="lightbox" 
                    data-gallery="multiimages" 
                    data-title="Postazioni in spazio condiviso"
                  >
                    <img src="images/spazio/spazio_01_thumb.jpg" class="img-responsive">
                  </a>
                </div>
                
                <div class="col-xs-6 col-sm-4 col-md-2">
                  <a 
                    href="images/spazio/spazio_02.jpg" 
                    class="thumbnail" 
                    data-toggle="lightbox" 
                    data-gallery="multiimages" 
                    data-title="Sala eventi"
                  >
                    <img src="images/spazio/spazio_02_thumb.jpg" class="img-responsive">
                  </a>
                </div>
                            
                <div class="col-xs-6 col-sm-4 col-md-2">
                  <a 
                    href="images/spazio/spazio_04.jpg" 
                    class="thumbnail" 
                    data-toggle="lightbox" 
                    data-gallery="multiimages" 
                    data-title="Bookcrossing point"
                  >
                    <img src="images/spazio/spazio_04_thumb.jpg" class="img-responsive">
                  </a>
                </div>
                
                <div class="col-xs-6 col-sm-4 col-md-2">
                  <a 
                    href="images/spazio/spazio_05.jpg" 
                    class="thumbnail" 
                    data-toggle="lightbox" 
                    data-gallery="multiimages" 
                    data-title="Makerlab... in allestimento"
                  >
                    <img src="images/spazio/spazio_05_thumb.jpg" class="img-responsive">
                  </a>
                </div>
                
                <div class="col-xs-6 col-sm-4 col-md-2">
                  <a 
                    href="images/spazio/spazio_06.jpg" 
                    class="thumbnail" 
                    data-toggle="lightbox" 
                    data-gallery="multiimages" 
                    data-title="Angolo relax"
                  >
                    <img src="images/spazio/spazio_06_thumb.jpg" class="img-responsive">
                  </a>
                </div>
                
                <div class="col-xs-6 col-sm-4 col-md-2">
                  <a 
                    href="images/spazio/spazio_03.jpg" 
                    class="thumbnail" 
                    data-toggle="lightbox" 
                    data-gallery="multiimages" 
                    data-title="Angolo relax"
                  >
                    <img src="images/spazio/spazio_03_thumb.jpg" class="img-responsive">
                  </a>
                </div>
              </div>
            </div>  
            
            <img id="plan-img" src="images/piantina.png">
          </div>
        </div>
      </div>
      
    </div>
    
    <?php include('footer.php'); ?>
    
  </body>

</html>