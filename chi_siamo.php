<?php include('_checkUrl.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>ilterzospazio - chi siamo</title>
    <link rel="canonical" href="https://www.ilterzospazio.org/chi_siamo.php" />
    
    <?php include('headers.php'); ?>
    
    <link rel="stylesheet" href="css/who.css">
    
    <?php
      $mission_items = array(
        "il sostegno alla ricerca scientifica e tecnologica al di fuori delle logiche della produzione di massa",
        "la riflessione su tematiche inerenti le nuove professionalit&agrave;",
        "un'attenzione particolare al mondo dell'infanzia, perch&egrave; il bambino sia una risorsa e non un ostacolo alla vita lavorativa del genitore",
        "la formazione come scambio di saperi",  
        "il supporto alle startup tramite le conoscenze, gli strumenti e gli spazi messi a disposizione dai collaboratori"
      );
    ?>
  </head>
  <body>
    
    <?php include('nav.php'); ?>
    
    <div id="page-content">
    
      <div class="block bg-pattern">
        <div class="block-wrap">
          <div class="block-heading">
            <i class="block-heading-icon fa fa-question fg-red"></i>
            <h4 class="block-heading-text">
              ilterzospazio &egrave; un incontro fra identit&agrave;
            </h4>
          </div>
          <div class="block-body">
            <p>
              &Egrave; uno spazio <i>altro</i>, alternativo agli schemi di pensiero
              e alle logiche dell'economia tradizionale.
            </p>
            <p>
              Ne <?=$its?>, professionalit&agrave;
              diverse si incontrano e interagiscono,
              per dare vita a creazioni originali, insolite, inaspettate.
            </p>
            <p>
              L'ibridit&agrave; che ne deriva costituisce il presupposto per un dialogo costruttivo
              e per la formazione di un'identit&agrave; sfaccettata.
            </p>
          </div>
        </div>
      </div>
  
      <div id="mission" class="block">
        <div class="block-wrap">
          <div class="block-heading">
            <i class="block-heading-icon fa fa-space-shuttle fa-rotate-270 fg-green"></i>
            <h4 class="block-heading-text">la nostra Mission</h4>
          </div>
          <div class="block-body padded">
            <p>
              <?=$its?> &egrave; un laboratorio creativo multifunzionale dove potrai incontrare
              altri professionisti e collaborare per realizzare progetti comuni o individuali.
            </p>
            <p>
              &Egrave; un luogo &quot;in progress&quot;, con spazi e servizi dedicati e altri da costruire
              insieme, con le tue idee e secondo le tue necessit&agrave;.
            </p>
            <p>
              La <b>collaborazione</b>, la <b>condivisione</b>, le <b>relazioni umane</b>
              sono alla base della nostra filosofia e motivazione.
            </p>
            <p>&nbsp;</p>
            <p>
              La nostra comunit&agrave; &egrave; impegnata nella promozione di un'economia sostenibile e collaborativa, attraverso
            </p>
            <?php
                
            foreach ($mission_items as $item) {
            ?><div class="media">
                <div class="media-left"><i class="fa fa-check fa-2x fg-green"></i></div>
                <div class="media-body"><?=$item?></div>
              </div><?php
            }
              
            ?>
          </div>
        </div>
      </div>
      
      <div id="staff" class="block bg-grey">
        <div class="block-wrap">
          <div class="block-heading">
            <span class="block-heading-icon glyphicon glyphicon-user fg-cyan" aria-hidden="true"></span>
            <h4 class="block-heading-text">chi siamo</h4>
          </div>
          <div class="block-body container-fluid">
          
            <div class="row">
            
              <div class="col-md-7">
                <div class="media staff-profile">
                  <div class="media-left">
                    <img class="img-circle" src="images/carlo.jpg" width="70" height="70">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading fg-cyan">
                      Carlo <span class="role">co-founder</span>
                    </h4>
                    <p>
                      Nel mondo dell'elettronica sin da giovane, un passato lavorativo
                      di trent'anni tra Hardware, Software e Sistemi in generale.
                      Appassionato di robotica, di musica e coinvolto nell'arte
                      del parlare in pubblico. Collaboro in varie forme con i principali
                      spazi di CoWorking e FabLab di Roma e Italia.
                      Padre di una futura frequentatrice di palestre per insegnare
                      la programmazione e la robotica ai pi&ugrave; piccoli.
                    </p>
                  </div>
                </div>
              </div>
              
              <div class="col-md-5">
                <div class="media staff-profile">
                  <div class="media-left">
                    <img class="img-circle" src="images/virginia.jpg" width="70" height="70">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading fg-cyan">
                      Virginia <span class="role">co-founder</span>
                    </h4>
                    <p>
                      Laureata in lingue, mi occupo da anni di mediazione linguistica
                      e traduzioni e di formazione linguistica per adulti e ragazzi.
                      Ho competenze nelle relazioni internazionali, che ho perfezionato
                      lavorando presso organismi internazionali e in progetti europei
                      per l’impiego (EURES). Fotografa per diletto, amo viaggiare ai
                      confini della terra e incontrare persone di culture lontane.
                    </p>
                  </div>
                </div>    
              </div>
              
            </div>
            
            <div class="row">
              
              <div class="col-md-5">
                <div class="media staff-profile">
                  <div class="media-left">
                    <img class="img-circle" src="images/marilisa.jpg" width="70" height="70">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading fg-cyan">
                      Marilisa <span class="role">co-founder e formatrice</span>
                    </h4>
                    <p>
                      A lungo nel servizio pubblico come psicologa e psicoterapeuta,
                      esperta di progettazione di servizi per l'infanzia e l'adolescenza,
                      fondatrice del Coordinamento regionale per il parto/nascita senza violenza.
                      Da sempre mi spendo con passione per il rispetto dei diritti
                      dei pi&ugrave; piccoli e nel sostegno al difficile mestiere di genitore. 
                      Sono curiosa, mi piace leggere, curare i fiori e l'orto ma anche raccogliere erbe selvatiche.
                    </p>
                  </div>
                </div>
  
              </div>
              
              <div class="col-md-6">
                <div class="media staff-profile">
                  <div class="media-left">
                    <img class="img-circle" src="images/chiara.jpg" width="70" height="70">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading fg-cyan">
                      Chiara <span class="role">animatrice de lospaziodeipiccoli</span>
                    </h4>
                    <p>
                      Ho trentotto anni, sono laureata in lingue e letterature straniere
                      e ho una lunga esperienza nella cura e nell'intrattenimento dei bambini, 
                      grazie a un profondo interesse per il mondo dell'infanzia e alla ricerca
                      di un contatto reale e autentico con il bambino. Libraia di professione, credo
                      nell'importanza della lettura fin dalla prima infanzia.
                    </p>
                  </div>
                </div>
                  
              </div>
              
              <div class="col-md-1"></div>
            </div>
            
            <div class="row">
              <div class="col-md-3"></div>
              
              <div class="col-md-5">
                <div class="media staff-profile">
                  <div class="media-left">
                    <img class="img-circle" src="images/nancy.jpg" width="70" height="70">  
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading fg-cyan">
                      Nancy <span class="role">formatrice</span>
                    </h4>
                    <p>
                      Biologa specializzata in genetica e biologia molecolare, mi occupo
                      di consulenza e formazione nel settore della sicurezza alimentare
                      e delle metodologie HACCP. In passato guida botanica per il Comune
                      di Roma, mi appassionano la didattica della biologia e la formazione
                      scientifica in generale.
                    </p>
                  </div>
                </div>    
              </div>
              
              <div class="col-md-4"></div>
            </div>
            
          </div>
        </div>
      </div>
      
    </div>
    
    <?php include('footer.php'); ?>
    
  </body>

</html>