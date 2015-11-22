<!DOCTYPE html>
<html>
  <head>
    <?php include('headers.php'); ?>
    
    <link rel="stylesheet" href="css/when.css">
    
    <?php
    
    class Event {
      public $title;
      public $description;
      public $date;
      public $attendance;
      public $availability;
      
      public function __construct($title, $description, $date, $attendance, $availability) {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->attendance = $attendance;
        $this->availability = $availability;
      }
    }
    
    $sched_events = array(
      new Event(
        "Addetto manipolazione alimenti",
        "Corso con rilascio attestato HACCP valido per la Regione Lazio ai fini del decreto 825/09",
        "12/09",
        20,
        8
      ),
      new Event(
        "Responsabile HACCP",
        "Corso con rilascio attestato HACCP valido per la Regione Lazio ai fini del decreto 825/09",
        "22/09",
        20,
        9
      ),
      new Event(
        "La microimpresa domestica del settore alimentare: primi passi, aspetti giuridici, iter da seguire",
        "Seminario a cura di Topo Gigio, esperto di micro e di micio. Si parler&agrave; di fuga dai gatti e di acchiappare il formaggio senza essere presi",
        "02/10",
        0,
        0
      )
    );
    
    $whats_next = array(
      "Seminario <b>L'importanza e i significati della fiaba nello sviluppo psicologico del bambino: come utilizzarla perch&egrave; sia un efficace aiuto alla crescita</b>",
      "Seminario <b>L'arrivo al nido: come facilitare il piccolo e rendere sereni mamma e pap&agrave;</b>",
      "Seminario <b>Dire &quot;no&quot; aiuta a crescere</b>",
      "Seminario <b>Lo sviluppo psicologico del bambino nei suoi primi mille giorni di vita: la <i>base sicura</i> da cui partire</b>",
      "Seminario <b>Il parto e la nascita: il punto di vista della madre e quello del piccolo. Le condizioni per accogliere al mondo e fare un'esperienza di crescita per mamma e pap&agrave;</b>",
      "Seminario <b>Si torna al lavoro: come affrontare e gestire serenamente il rientro a lavoro dopo la maternit&agrave;</b>",
      "<b>Mamme per la prima volta</b>: incontri con le neomamme per parlare delle loro esperienze e difficolt&agrave; e condividere suggerimenti educativi",
      "Corso <b>Introduzione alla psicologia infantile</b>",
      "Seminario <b>Fertilit&agrave;: il ruolo chiave della nutrizione</b>",
      "Corso <b>Addetto manipolazione alimenti</b> con rilascio attestato HACCP valido per la Regione Lazio ai fini del decreto 825/09", 
      "Corso <b>Responsabile HACCP</b> con rilascio attestato valido per la Regione Lazio ai fini del decreto 825/09",
      "Seminario <b>La microimpresa domestica del settore alimentare: primi passi, aspetti giuridici, iter da seguire</b>",
      "Seminario <b>Malattie genetiche ed ereditarie: un approccio per le famiglie</b>",
      "<b>Coderdojo</b>: workshop di programmazione per bambini e ragazzi"  
    );
    
    ?>
  </head>
  <body>
    
    <?php include('nav.php'); ?>
    
    <div class="block bg-pattern">
      <div class="block-wrap">
        <div class="block-heading">
          <i class="block-heading-icon fa fa-bookmark fg-green"></i>
        </div>
        <div class="block-body padded">
          <p>
            La community de <?=$its?> &egrave; impegnata nella promozione 
            della formazione come scambio di saperi.
          </p>
          <p>
            Avvalendoci della collaborazione di professionisti, organizziamo corsi, workshop e seminari
            informativi per un pubblico ampio, proveniente dai settori più disparati.
          </p>
          <p>
            Le tematiche che affronteremo spaziano dalla formazione per le nuove professioni, 
            alla INformazione su tematiche psicologiche ed educative, passando per la promozione
            della salute e le nuove tecnologie.
          </p>
          <p>
            Se vuoi organizzare un evento presso <?=$its?>, scrivici a
            <a href="mailto:info@ilterzospazio.org" class="fg-green">info@ilterzospazio.org</a>
          </p>
        </div>
      </div>
    </div>
    <!--
    <div id="sched-events" class="block">
      <div class="block-wrap">
        <div class="block-heading">
          <i class="block-heading-icon fa fa-calendar fg-orange"></i>
          <h4 class="block-heading-text">Gli eventi in programma</h4>
        </div>
        <div class="block-body padded">
        <?php
        
        for ($i = 0; $i < count($sched_events); $i++) {
          $item = $sched_events[$i];
          
        ?><div class="media">
            <div class="media-left">
              <div class="calendar bg-white">
                <i class="fa fa-clock-o fa-3x fg-orange"></i>
                <span class="calendar-text fg-orange"><?= $item->date ?></span>
              </div>
            </div>
            <div class="media-body">
              <h5 class="media-heading"><?= $item->title ?></h5>
              <p class="mb-20px"><?= $item->description ?></p>
              
              <?php
              if ($item->attendance > 0){
              ?><p class="mb-20px">Posti disponibili: <b><?= $item->availability ?></b> su <b><?= $item->attendance ?></b> totali<?
              
                if ($item->availability > 0){
                ?><p><a href="#" class="btn fg-grey bg-orange" role="button">Partecipa</a></p><?
                }
              }
              else {
              ?><p>Frequenza libera</p><?
              }
              ?>
              
            </div>
          </div><?
        }
        ?>
        </div>
      </div>
    </div>
    -->
    
    <div class="block">
      <div class="block-wrap">
        <div class="block-heading">
          <i class="block-heading-icon fa fa-refresh fg-red"></i>
          <h4 class="block-heading-text">Prossimamente</h4>
        </div>
        <div class="block-body padded">
        <?php
            
        foreach ($whats_next as $item) {
        ?><div class="media">
            <div class="media-left"><i class="fa fa-arrow-right fg-red"></i></div>
            <div class="media-body"><?=$item?></div>
          </div><?
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
    
    <?php include('footer.php'); ?>
    
  </body>

</html>