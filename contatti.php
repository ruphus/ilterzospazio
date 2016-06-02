<?php include('_checkUrl.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>ilterzospazio - contatti</title>
    <link rel="canonical" href="https://www.ilterzospazio.org/contatti.php" />
    
    <?php include('headers.php'); ?>
    
    <link rel="stylesheet" href="css/where.css">
    
    <!--
    <script type="text/javascript">
    function initMap(){
      var map = new google.maps.Map(document.getElementById("map"), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8,
        panControl: false,
        overviewMapControl: false,
        zoomControlOptions: {
          style: google.maps.ZoomControlStyle.DEFAULT
        },
        mapTypeControlOptions: {
          style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
          mapTypeIds: [
            google.maps.MapTypeId.ROADMAP,
            google.maps.MapTypeId.TERRAIN
          ]
        }
      });
      
      //map.setTilt(0);
    };
    </script>
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIsPWAlKoHFYq8avC0l8UCeTlZFzMuWEw&callback=initMap"></script>
    -->
    
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "url": "http://www.ilterzospazio.org",
      "logo": "http://www.ilterzospazio.org/images/logo.png",
      "sameAs" : [
        "https://www.facebook.com/ilterzospazio",
        "https://twitter.com/ilterzospazio",
        "https://www.linkedin.com/company/ilterzospazio"
      ]
    }
    </script>
  </head>
  <body>
    
    <?php include('nav.php'); ?>
    
    <div id="page-content">
    
      <div class="block bg-pattern mb-20px">
        <div class="block-wrap">
          <div class="block-heading">
            <i class="block-heading-icon fa fa-asterisk fg-red"></i>
            <h4 class="block-heading-text">dove siamo</h4>
          </div>
          <div class="block-body padded">
            <p>
              La sede de <?=$its?> &egrave; a Tor Sapienza
              in Viale Giorgio Morandi 199 a Roma.
            </p>
            <p>
              La zona &egrave; servita da bar, pizzerie, supermercati e una farmacia,
              e ha un'ampia disponibilit&agrave; di parcheggio.
            </p>
          </div>
        </div>
      </div>
      
      <!--div id="map"></div-->
      
      <iframe
        class="embed-responsive-item"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2969.717858618953!2d12.5853313!3d41.89892450000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f6302e3cf9de5%3A0x8b719b9eab880eb2!2sViale+Giorgio+Morandi%2C+199%2C+00155+Roma!5e0!3m2!1sit!2sit!4v1439553794280"
        width="100%"
        height="300"
        style="border:0;"
        allowfullscreen
      >
      </iframe>
      
      <div class="block">
        <div class="block-wrap">
          <div class="block-heading">
            <i class="block-heading-icon fa fa-location-arrow fg-cyan"></i>
            <h4 class="block-heading-text">come arrivare</h4>
          </div>
          <div class="block-body padded">
            <div id="directions-tabs">
    
              <!-- Nav tabs -->
              <ul class="nav nav-pills" role="tablist">
                <li role="presentation" class="active">
                  <a href="#metro-b" aria-controls="home" role="tab" data-toggle="tab">con la Metro B</a>
                </li>
                <li role="presentation">
                  <a href="#GRA-sud" aria-controls="messages" role="tab" data-toggle="tab">dal GRA sud</a>
                </li>
                <li role="presentation">
                  <a href="#GRA-nord" aria-controls="messages" role="tab" data-toggle="tab">dal GRA nord</a>
                </li>
                <li role="presentation">
                  <a href="#tram" aria-controls="profile" role="tab" data-toggle="tab">con il tram</a>
                </li>
              </ul>
            
              <!-- Tab panes -->
              <div class="tab-content">
              
                <div role="tabpanel" class="tab-pane active" id="metro-b">
                  <ol class="mb-20px">
                    <li>
                      <i class="fa fa-train"></i>
                      scendere alla fermata Ponte Mammolo
                    </li>
                    <li>
                      <i class="fa fa-bus"></i>
                      prendere l'autobus 451 in direzione Cinecitt&agrave; e
                      scendere alla fermata Togliatti-Prenestina (7 fermate)
                    </li>
                    <li>
                      <i class="walk"></i>
                      attraversare Via P. Togliatti
                    </li>
                    <li>
                      <i class="fa fa-bus"></i>
                      prendere l'autobus 543 in direzione Vertunni-Salcito e
                      scendere alla fermata Morandi-Carr&agrave; (4 fermate)
                    </li>
                    <li>
                      <i class="walk"></i>
                      recarsi al civico 199
                    </li>
                  </ol>  
                
                  <div class="center mb-20px">
                    <a class="btn fg-grey bg-cyan" role="button" target="_new" href="https://www.google.it/maps/dir/Ponte+Mammolo/Viale+Giorgio+Morandi,+199,+00155+Roma,+Italia/@41.9126639,12.5596489,14z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x132f6399ccc354a7:0xf260c3fdf074bf10!2m2!1d12.5651677!2d41.9209522!1m5!1m1!1s0x132f6302e3cf9de5:0x8b719b9eab880eb2!2m2!1d12.5853313!2d41.8989245!3e3">
                      Vai alla mappa <i class="fa fa-external-link"></i>
                    </a>
                  </div>
                  
                  <div class="center">oppure</div>
                  
                  <ol class="mb-20px">
                    <li>
                      <i class="fa fa-train"></i>
                      scendere alla fermata Rebibbia
                    </li>
                    <li>
                      <i class="fa fa-bus"></i>
                      prendere l'autobus 437 (circolare) e scendere alla fermata De Chirico-Capogrossi (14 fermate)
                    </li>
                    <li>
                      <i class="walk"></i>
                      procedere in direzione Viale Giorgio De Chirico verso Via Carlo Carra
                    </li>
                    <li>
                      <i class="walk"></i>
                      Svoltare a destra e prendere Viale Giorgio Morandi e
                      recarsi al civico 199
                    </li>
                  </ol>  
                
                  <div class="center">
                    <a class="btn fg-grey bg-cyan" role="button" target="_new" href="https://www.google.it/maps/dir/Rebibbia,+Roma,+RM/Viale+Giorgio+Morandi,+199,+00155+Roma/@41.912664,12.5605931,14z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x132f639ce2fb0377:0xd911ab048860436f!2m2!1d12.5726866!2d41.9256788!1m5!1m1!1s0x132f6302e3cf9de5:0x8b719b9eab880eb2!2m2!1d12.5853035!2d41.8989025!3e3">
                      Vai alla mappa <i class="fa fa-external-link"></i>
                    </a>
                  </div>
                  
                </div>
                
                <div role="tabpanel" class="tab-pane" id="tram">
                  <ol class="mb-20px">
                    <li>
                      <i class="fa fa-train"></i>
                      scendere alla fermata Tor Sapienza
                    </li>
                    <li>
                      <i class="walk"></i>
                      recarsi in via Collatina 254
                    </li>
                    <li>
                      <i class="fa fa-bus"></i>
                      prendere l'autobus 543 in direzione Primavera-Gardenie e
                      scendere alla fermata Morandi-Carr&agrave; (4 fermate)
                    </li>
                    <li>
                      <i class="walk"></i>
                      recarsi al civico 199
                    </li>
                  </ol>
                  
                  <div class="center">
                    <a class="btn fg-grey bg-cyan" role="button" target="_new" href="https://www.google.it/maps/dir/Tor+Sapienza,+Roma/Viale+Giorgio+Morandi,+199,+00155+Roma,+Italia/@41.9024407,12.5825277,16z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x132f631aa61ef0e5:0x1c17a2adb0e291b5!2m2!1d12.5879557!2d41.9058515!1m5!1m1!1s0x132f6302e3cf9de5:0x8b719b9eab880eb2!2m2!1d12.5853313!2d41.8989245!3e3">
                      Vai alla mappa <i class="fa fa-external-link"></i>
                    </a>
                  </div>
                
                </div>
                
                <div role="tabpanel" class="tab-pane" id="GRA-sud">
                  <ol class="mb-20px">
                    <li>
                      <i class="fa fa-car"></i>
                      prendere l'uscita 17-16 verso Prenestina/Roma
                    </li>
                    <li>
                      <i class="fa fa-car"></i>
                      dopo 2,5 km svoltare a destra e prendere Via Emilio Longoni
                    </li>
                    <li>
                      <i class="fa fa-car"></i>
                      dopo 1,3 km svoltare a sinistra e prendere Via Collatina
                    </li>
                    <li>
                      <i class="fa fa-car"></i>
                      dopo 1,4 km svoltare a sinistra e prendere Viale Giorgio De Chirico
                    </li>
                    <li>
                      <i class="fa fa-car"></i>
                      dopo 450 m svoltare a destra e prendere Via Carlo Carr&agrave;
                    </li>
                    <li>
                      <i class="fa fa-car"></i>
                      dopo 150 m svoltare a destra e prendere Viale Giorgio Morandi
                    </li>
                    <li>
                      <i class="walk"></i>
                      recarsi al civico 199
                    </li>
                  </ol>
                  
                  <div class="center">
                    <a class="btn fg-grey bg-cyan" role="button" target="_new" href="https://www.google.it/maps/dir/41.9250618,12.6076751/Viale+Giorgio+Morandi,+199,+00155+Roma,+Italia/@41.908398,12.5974492,14z/data=!4m9!4m8!1m0!1m5!1m1!1s0x132f6302e3cf9de5:0x8b719b9eab880eb2!2m2!1d12.5853313!2d41.8989245!3e0">
                      Vai alla mappa <i class="fa fa-external-link"></i>
                    </a>
                  </div>
                    
                </div>
                
                <div role="tabpanel" class="tab-pane" id="GRA-nord">
                  <ol class="mb-20px">
                    <li>
                      <i class="fa fa-car"></i>
                      prendere l'uscita 14 per A24 Roma/Centro e tenere la destra
                    </li>
                    <li>
                      <i class="fa fa-car"></i>
                      dopo 2,1 km prendere l'uscita Via di Tor Cervara e tenere la sinistra
                    </li>
                    <li>
                      <i class="fa fa-car"></i>
                      dopo 400 m svoltare a sinistra su Via Raffaele Costi
                    </li>
                    <li>
                      <i class="fa fa-car"></i>
                      dopo 1 km svoltare a sinistra e prendere Via di Tor Cervara
                    </li>
                    <li>
                      <i class="fa fa-car"></i>
                      dopo 500 m alla rotonda prendere la 1a uscita per Via Collatina 
                    </li>
                    <li>
                      <i class="fa fa-car"></i>
                      dopo 400 m svoltare a sinistra e prendere Viale Giorgio De Chirico
                    </li>
                    <li>
                      <i class="fa fa-car"></i>
                      dopo 450 m tenere la destra e prendere Via Carlo Carr&agrave;
                    </li>
                    <li>
                      <i class="fa fa-car"></i>
                      dopo 150 m svoltare la destra e prendere Viale Giorgio Morandi
                    </li>
                    <li>
                      <i class="walk"></i>
                      recarsi al civico 199
                    </li>
                  </ol>
                  
                  <div class="center">
                    <a class="btn fg-grey bg-cyan" target="_new" role="button" a href="https://www.google.it/maps/dir/Tor+Sapienza,+Roma/Viale+Giorgio+Morandi,+199,+00155+Roma,+Italia/@41.9011252,12.5819677,15z/data=!4m15!4m14!1m5!1m1!1s0x132f631aa61ef0e5:0x1c17a2adb0e291b5!2m2!1d12.5879557!2d41.9058515!1m5!1m1!1s0x132f6302e3cf9de5:0x8b719b9eab880eb2!2m2!1d12.5853313!2d41.8989245!3e3!5i1">
                      Vai alla mappa <i class="fa fa-external-link"></i>
                    </a>
                  </div>
                  
                </div>
              </div>
              
            </div>
              
          </div>
        </div>
      </div>
      
      <div class="block bg-grey">
        <div class="block-wrap">
          <div class="block-heading">
            <i class="block-heading-icon fa fa-info-circle fa-2x fg-green"></i>
            <h4 class="block-heading-text">per informazioni</h4>
          </div>
          <div class="block-body padded">
            <p><a href="mailto:info@ilterzospazio.org" class="fg-green">info@ilterzospazio.org</a></p>
            <p>+39 328 32 23 266</p>
          </div>
        </div>
      </div>
      
    </div>
    
    <?php include('footer.php'); ?>
    
  </body>

</html>