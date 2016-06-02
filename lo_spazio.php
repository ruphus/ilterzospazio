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
    
    $furthermore_items = array(
      //"un laboratorio di ricerca e sperimentazione per attività di biohacking" => "fa fa-flask fa-2x",
      "un makerlab per l'autoproduzione, orientato all'elettronica, alla robotica e alle nuove tecnologie" => "fa fa-wrench fa-2x",
      "corsi e laboratori per adulti e bambini" => "fa fa-graduation-cap fa-2x",
      "una BiblioVideoteca – BookCrossing point" => "fa fa-book fa-2x",
      "una piccola e confortevole area relax e ristoro" => "fa fa-coffee fa-2x",
      "un angolo dedicato all'allattamento" => "fa fa-breast-feeding fa-2x",
      //"servizi di traduzione e mediazione linguistica in inglese" => "fa fa-globe fa-2x",
      "consulenza per la progettazione di servizi per l'infanzia e l'adolescenza<br/>(asili nido, scuole dell'infanzia, ludoteche, servizi domicilari, centri per adolescenti e giovani)" => "fa fa-street-view fa-2x",
      "servizi di segreteria" => "fa fa-phone fa-2x",
      "domiciliazione postale" => "fa fa-inbox fa-2x"
    );

    class itsGalleryItem {
    	public $url;
    	public $thumbUrl;
    	public $title;

        function __construct($title, $url, $thumbUrl)
        {
            $this->title = $title;
            $this->url = $url;
            $this->thumbUrl = $thumbUrl;
        }
    }

    $gallery_items = array(
        new itsGalleryItem("Postazioni in spazio condiviso", "images/spazio/spazio_01.jpg", "images/spazio/spazio_01_thumb.jpg"),
        new itsGalleryItem("Sala eventi", "images/spazio/spazio_02.jpg", "images/spazio/spazio_02_thumb.jpg"),
        new itsGalleryItem("Bookcrossing point", "images/spazio/spazio_04.jpg", "images/spazio/spazio_04_thumb.jpg"),
        new itsGalleryItem("Makerlab... in allestimento", "images/spazio/spazio_05.jpg", "images/spazio/spazio_05_thumb.jpg"),
        new itsGalleryItem("Angolo relax", "images/spazio/spazio_06.jpg", "images/spazio/spazio_06_thumb.jpg"),
        new itsGalleryItem("Angolo relax", "images/spazio/spazio_03.jpg", "images/spazio/spazio_03_thumb.jpg")
    );
    ?>
    
  </head>
  <body>
  
    <?php include('nav.php'); ?>
    
    <div id="page-content">

        <div class="block bg-pattern">
            <div class="block-wrap">
                <div class="block-heading">
                    <i class="block-heading-icon fa fa-building-o fg-red"></i>
                    <h4 class="block-heading-text">gli spazi</h4>
                </div>

                <div class="block-body center">
                    <div class="container-fluid mb-20px">
                        <div class="row">

                        <?php
                        foreach ($gallery_items as $item) {
                        ?>  <div class="col-xs-6 col-sm-4 col-md-2">
                                <a
                                    href="<?=$item->url?>"
                                    class="thumbnail"
                                    data-toggle="lightbox"
                                    data-gallery="multiimages"
                                    data-title="<?=$item->title ?>"
                                >
                                    <img src="<?=$item->thumbUrl?>" class="img-responsive">
                                </a>
                            </div><?php
                        }
                        ?>

                        </div>
                    </div>
            
                    <img id="plan-img" src="images/piantina.png">
                </div>
            </div>
        </div>

        <div class="block">
            <div class="block-wrap">
                <div class="block-heading">
                    <i class="block-heading-icon fa fa-shopping-cart fg-orange"></i>
                    <h4 class="block-heading-text">le tariffe dei nostri servizi</h4>
                </div>

                <div id="pricing" class="block-body container-fluid">
                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="pricing-package">
                                <h5 class="bg-cyan double-heading">Postazione nomade<br/>coworking</h5>
                                <div class="pricing-package-desc media">
                                    <div class="media-left">
                                        <i class="fa fa-users fa-2x fg-cyan"></i>
                                    </div>
                                    <div class="media-body heavy-desc">
                                        se ti piace lavorare in un ambiente creativo, stimolante e a contatto con altri professionisti
                                    </div>
                                </div>
                                <table>
                                    <tr>
                                        <th>&frac12; giornata</th>
                                        <td>10 &euro;</td>
                                    </tr>
                                    <tr>
                                        <th>una giornata</th>
                                        <td>15 &euro;</td>
                                    </tr>
                                    <tr>
                                        <th>un mese</th>
                                        <td>100 &euro;</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="pricing-package">
                                
                                <h5 class="bg-red double-heading">Postazione nomade<br/>coworking (carnet trimestrale)</h5>
                                <div class="pricing-package-desc media">
                                    <div class="media-left">
                                        <i class="fa fa-ticket fa-2x fg-red"></i>
                                    </div>
                                    <div class="media-body">
                                        la soluzione flessibile, compatibile con i tuoi impegni
                                    </div>
                                </div>
                                <table>
                                    <tr>
                                        <th>5 entrate da una giornata</th>
                                        <td>65 &euro;</td>
                                    </tr>
                                    <tr>
                                        <th>10 entrate da una giornata</th>
                                        <td>120 &euro;</td>
                                    </tr>
                                    <tr>
                                        <th>20 entrate da una giornata</th>
                                        <td>200 &euro;</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="pricing-package">
                                <h5 class="bg-blue double-heading">Postazione fissa<br/>coworking</h5>
                                <div class="pricing-package-desc media">
                                    <div class="media-left">
                                        <i class="fa fa-fort-awesome fa-2x fg-blue"></i>
                                    </div>
                                    <div class="media-body">
                                        per avere una postazione riservata all'interno del coworking
                                    </div>
                                </div>
                                <table>
                                    <tr>
                                        <th>un mese</th>
                                        <td>150 &euro;</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="pricing-package">
                                <h5 class="bg-green">Ufficio privato</h5>
                                <div class="pricing-package-desc media">
                                    <div class="media-left">
                                        <i class="fa fa-user fa-2x fg-green"></i>
                                    </div>
                                    <div class="media-body">
                                        se hai necessit&agrave; di uno spazio a tua esclusiva disposizione
                                    </div>
                                </div>
                                <table>
                                    <tr>
                                        <th>al giorno</th>
                                        <td>60 &euro;</td>
                                    </tr>
                                    <tr>
                                        <th>al mese</th>
                                        <td>400 &euro;</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="pricing-package">
                                <h5 class="bg-orange">Sala riunioni</h5>
                                <div class="pricing-package-desc media">
                                    <div class="media-left">
                                        <i class="fa fa-microphone fa-2x fg-orange"></i>
                                    </div>
                                    <div class="media-body">
                                        se vuoi organizzare meeting in un'area attrezzata
                                    </div>
                                </div>
                                <table>
                                    <tr>
                                        <th>2 ore</th>
                                        <td>20 &euro;</td>
                                    </tr>
                                    <tr>
                                        <th>&frac12; giornata</th>
                                        <td>40 &euro;</td>
                                    </tr>
                                    <tr>
                                        <th>una giornata</th>
                                        <td>80 &euro;</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="pricing-package">
                                <h5 class="bg-purple">Sala eventi e corsi</h5>
                                <div class="pricing-package-desc media">
                                    <div class="media-left">
                                        <i class="fa fa-bookmark fa-2x fg-purple"></i>
                                    </div>
                                    <div class="media-body">
                                        per organizzare eventi, workshop o corsi
                                    </div>
                                </div>
                                <table>
                                    <tr>
                                        <th>&frac12; giornata</th>
                                        <td>100 &euro;</td>
                                    </tr>
                                    <tr>
                                        <th>una giornata</th>
                                        <td>150 &euro;</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="big-text">
                    <li>Orario giornaliero: 9.30 - 18.30 (lun-ven); sab-dom da concordare</li>
                    <li>&frac12; giornata: 14.30 - 18.30</li>
                    <li>Tutti i servizi sono comprensivi di connessione wi-fi, stampante/fotocopiatrice/scanner.</li>
                    <li>L'affitto della sala eventi e corsi include l'utilizzo del videoproiettore.</li>
                    
                </ul>
            </div>

        </div>
      
        <div class="block bg-pattern">
            <div class="block-wrap">
                <div class="block-heading">
                    <i class="block-heading-icon fa fa-play-circle fg-blue"></i>
                    <h4 class="block-heading-text">e inoltre...</h4>
                </div>

                <div class="block-body padded">
                <?php
                foreach ($furthermore_items as $item => $icon) {
                ?>  <div class="media">
                        <div class="media-left">
                            <i class="<?=$icon?> fg-blue"></i>
                        </div>
                        <div class="media-body"><?=$item?></div>
                    </div><?php
                }
                ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php include('footer.php'); ?>
    
  </body>

</html>