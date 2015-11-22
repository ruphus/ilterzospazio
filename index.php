<!DOCTYPE html>
<html>
  <head>
    <?php include('headers.php'); ?>
    
    <link rel="stylesheet" href="css/home.css">
  </head>
  <body>
    
    <?php include('nav.php'); ?>
    
    <div id="home-photo">
      <p>
        <i>
          Il Terzo Spazio è il terreno per elaborare<br/>
            nuovi segni di identità e luoghi innovativi di collaborazione<br/>
        </i>
        (H. Bhabha)
      </p>
    </div>
    
    <div id="four-blocks" class="container-fluid">
      <div class="row">
      
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="thumbnail bg-red">
            <i class="fa fa-lightbulb-o fg-grey"></i>
            <div class="caption fg-grey">
              <i><b>Lavora</b></i> e <i><b>collabora</b></i> in spazi condivisi e in uffici privati
            </div>
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="thumbnail bg-cyan">
            <i class="fa fa-flask fg-grey"></i>
            <div class="caption fg-grey">
              <i><b>Sperimenta</b></i> nel nostro laboratorio biohackers-friendly
            </div>
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="thumbnail bg-green">
            <i class="fa fa-graduation-cap fg-grey"></i>
            <div class="caption fg-grey">
              <i><b>Crea</b></i> in un makerlab dedicato all’elettronica e alle nuove tecnologie
            </div>
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="thumbnail bg-orange">
            <i class="fa fa-rocket fg-grey"></i>
            <div class="caption fg-grey">
              <i><b>Condividi</b></i> e <i><b>apprendi</b></i> attraverso i nostri corsi, workshop ed eventi
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="home-abstract" class="media bg-pattern">
      <div class="media-left"><img src="res/logo_wm.png" /></div>
      <div class="media-body">
        <h4 class="media-heading">
          ilterzospazio &egrave; un incontro fra identit&agrave;
        </h4>
        <p>
          &Egrave; uno spazio <i>altro</i>, alternativo agli schemi di pensiero
          e alle logiche dell'economia tradizionale.
        </p>
        <p>
          Ne <?=$its?>, professionalit&agrave;
          diverse si incontrano e interagiscono,
          per dare vita a creazioni originali, insolite, inaspettate.
        </p>
        <p class="mb-20px">
          L'ibridit&agrave; che ne deriva costituisce il presupposto per un dialogo costruttivo
          e per la formazione di un'identit&agrave; sfaccettata.
        </p>
        <p><a href="chi_siamo.php" class="btn fg-grey bg-red" role="button">Scopri di pi&ugrave;</a></p>
      </div>
    </div>
    
    <?php include('footer.php'); ?>
  </body>

</html>