<?php include('_checkUrl.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>ilterzospazio - eventi</title>
    <link rel="canonical" href="https://www.ilterzospazio.org/eventi.php" />
    
    <?php include('headers.php'); ?>
    
    <link rel="stylesheet" href="css/when.css">
    
    <?php
    
    $whats_next = array(
      "Seminario <b>L'importanza e i significati della fiaba nello sviluppo psicologico del bambino</b>",
      "Seminario <b>L'arrivo al nido: come facilitare il piccolo e rendere sereni mamma e pap&agrave;</b>",
      "Seminario <b>Dire &quot;no&quot; aiuta a crescere</b>",
      "Seminario <b>Lo sviluppo psicologico del bambino nei suoi primi mille giorni di vita: la <i>base sicura</i> da cui partire</b>",
      "Seminario <b>Il parto e la nascita: il punto di vista della madre e quello del piccolo. Le condizioni per accogliere al mondo e fare un'esperienza di crescita per mamma e pap&agrave;</b>",
      "Seminario <b>Si torna al lavoro: come affrontare e gestire serenamente il rientro a lavoro dopo la maternit&agrave;</b>",
      "<b>Mamme per la prima volta</b>: incontri con le neomamme per parlare delle loro esperienze e difficolt&agrave; e condividere suggerimenti educativi",
      "Corso <b>Introduzione alla psicologia infantile</b>",
      "Seminario <b>Fertilit&agrave;: il ruolo chiave della nutrizione</b>",
      //"Corso <b>Addetto manipolazione alimenti</b> con rilascio attestato HACCP valido per la Regione Lazio ai fini del decreto 825/09", 
      //"Corso <b>Responsabile HACCP</b> con rilascio attestato valido per la Regione Lazio ai fini del decreto 825/09",
      "Seminario <b>La microimpresa domestica del settore alimentare: primi passi, aspetti giuridici, iter da seguire</b>",
      "Seminario <b>Malattie genetiche ed ereditarie: un approccio per le famiglie</b>",
      "Workshop di programmazione informatica per bambini e ragazzi"  
    );
    
    ?>
    
    <script type="application/ld+json">
    
    var event_location = {
      "@type" : "Place",
      "name" : "ilterzospazio",
      "address" : {
        "streetAddress" : "Viale Giorgio Morandi 199",
        "addressLocality" : "Roma",
        "postalCode" : "00155"
      }
    };
    
    [
      {
        "@context" : "http://schema.org",
        "@type" : "EducationEvent",
        "name" : "Workshop: La Robotica Amatoriale come non l'avete mai vista",
        "url" : "http://www.ilterzospazio.org/eventi.php",
        "startDate" : "2015-11-07T15:00",
        "endDate" : "2015-11-07T17:30",
        "location" : event_location
      }
      ,{
        "@context" : "http://schema.org",
        "@type" : "EducationEvent",
        "name" : "Workshop: La Robotica Amatoriale come non l'avete mai vista",
        "url" : "http://www.ilterzospazio.org/eventi.php",
        "startDate" : "2015-11-08T15:00",
        "endDate" : "2015-11-07T17:30",
        "location" : event_location
      }
      /*,{
        "@context" : "http://schema.org",
        "@type" : "EducationEvent",
        "name" : "L'importanza e i significati della fiaba nello sviluppo psicologico del bambino",
        "url" : "http://www.ilterzospazio.org/eventi.php",
        "startDate" : "2015-11-07T16:00",
        "location" : event_location
      }*/
    ]
    
    </script>
    
    <script type="text/javascript">
    $(document).ready(function(){
      $(".event .more-info").on("click", function(e){
        e.preventDefault();
        $(this).closest(".event").find(".event-info").removeClass("hidden");
        $(this).remove();
      });
    });
    </script>
  </head>
  <body>
    
    <?php include('nav.php'); ?>
    
    <div id="page-content">
    
      <div class="block bg-pattern">
        <div class="block-wrap">
          <div class="block-heading">
            <i class="block-heading-icon fa fa-bookmark fg-green"></i>
            <h4 class="block-heading-text">gli eventi</h4>
          </div>
          <div class="block-body padded">
            <p>
              La community de <?=$its?> &egrave; impegnata nella promozione 
              della formazione come scambio di saperi.
            </p>
            <p>
              Avvalendoci della collaborazione di professionisti, organizziamo corsi, workshop e incontri
              informativi, oltre a laboratori didattici per bambini.
            </p>
            <p>
              Le tematiche che affronteremo spaziano dalla formazione per le nuove professioni,
              alla in-formazione su tematiche psicologiche ed educative, passando per la promozione
              della salute e le nuove tecnologie.
            </p>
            <p>
              Se vuoi organizzare un evento presso <?=$its?>, scrivici a
              <a href="mailto:info@ilterzospazio.org" class="fg-green">info@ilterzospazio.org</a>
            </p>
          </div>
        </div>
      </div>
      
      
      
      <div id="sched-events" class="block">
        <div class="block-wrap">
          <div class="block-heading">
            <i class="block-heading-icon fa fa-calendar fg-orange"></i>
            <h4 class="block-heading-text">in programma</h4>
          </div>
          <div class="block-body padded">
            
            <?php include('eventi/prode.php'); ?>

            <?php include('eventi/open.php'); ?>

            <?php include('eventi/20160402_RUESCO.php')?>

            <?php include('eventi/20160227_OR.php')?>

            <?php include('eventi/20151218_OR.php'); ?>
            
            <?php include('eventi/20151107_OR.php'); ?>
            
          </div>
        </div>
      </div>
      
      
      <div id="next" class="block bg-grey">
        <div class="block-wrap">
          <div class="block-heading">
            <i class="block-heading-icon fa fa-refresh fg-red"></i>
            <h4 class="block-heading-text">prossimamente</h4>
          </div>
          <div class="block-body padded">
          <?php
              
          foreach ($whats_next as $item) {
          ?><div class="media">
              <div class="media-left"><i class="fa fa-arrow-right fg-red"></i></div>
              <div class="media-body"><?=$item?></div>
            </div><?php
          }
            
          ?>
          </div>        
        </div>
      </div>
      
      <!--
      <div class="block bg-grey">
        <div class="block-heading">
          <i class="block-heading-icon fa fa-envelope-o fg-cyan"></i>
          <h4 class="block-heading-text">Iscriviti alla newsletter</h4>
        </div>
        <div class="block-body">
          <p class="mb-20px">
            Inserisci il tuo indirizzo e-mail per rimanere sempre aggiornato
            sulle nuove iniziative de <span class="its">ilterzospazio</span>
          </p>
          <p class="mb-20px">
            <input type="text" name="email" placeholder="La tua email" size="40"/>
          </p>
          <p>
            <a href="#" class="btn fg-grey bg-cyan" role="button">Iscriviti</a>
          </p> 
        </div>
      </div> 
      -->
      
    </div>
    
    <?php include('footer.php'); ?>
    
  </body>

</html>