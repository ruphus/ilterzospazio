<?php include('_checkUrl.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>ilterzospazio</title>
    
    <?php include('headers.php'); ?>
    
    <script src="js/twitterfetch.js"></script>
    
    <link rel="canonical" href="https://www.ilterzospazio.org/index.php" />
    
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/twitter-feeds.css">
    
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
    
    <script type="text/javascript">
    $(document).ready(function(){
      $(".event .more-info").attr("href", "eventi.php");
      
      twitterFetcher.fetch({
        id: '688764038050918400',
        lang: 'it',
        customCallback : function(tweets) {
          var container = $('<ul></ul>');
          
          for (var i=0; i<tweets.length; i++){
            var tweetElem = $("<li></li>");
            
            $(tweets[i])
              .appendTo(tweetElem)
              .find('.twitter_reply_icon, .twitter_retweet_icon, .twitter_fav_icon')
              .empty()
              
            ;
            
            tweetElem.appendTo(container);
          }
          
          container.appendTo('#twitter-feeds');
        }
      });
      
    });
    </script>
  </head>
  <body>
    
    <?php include('nav.php'); ?>
    
    <div id="home-photo">
      <p>
        <cite>
          Il Terzo Spazio &egrave; il terreno per elaborare<br/>
          nuovi segni di identit&agrave; e luoghi innovativi di collaborazione
        </cite>
        <br/>
        (H. Bhabha)
      </p>
    </div>
    
    <div id="page-content">
        <!--
        <div id="home-carousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#home-carousel" data-slide-to="1"></li>
          <li data-target="#home-carousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/carousel/carousel1.jpg">
            <div class="carousel-caption">
              ilterzospazio &egrave; un incontro fra identit&agrave;
            </div>
          </div>

          <div class="item">
            <img src="images/carousel/carousel2.jpg">
            <div class="carousel-caption">
              <cite>
                Il Terzo Spazio &egrave; il terreno per elaborare<br/>
                nuovi segni di identit&agrave; e luoghi innovativi di collaborazione
              </cite>
              <br/>
              (H. Bhabha)
            </div>
          </div>

          <div class="item">
            <img src="images/carousel/carousel3.jpg">
            <div class="carousel-caption">
            lab &amp; coworking a Tor Sapienza
            </div>
          </div>
        </div>

        <a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>
        -->
      
      
      
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
                        <i class="fa fa-rocket fg-grey"></i>
                        <div class="caption fg-grey">
                            <i><b>Crea</b></i> in un makerlab dedicato all'elettronica, alla robotica e alle nuove tecnologie
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail bg-orange">
                        <i class="fa fa-graduation-cap fg-grey"></i>
                        <div class="caption fg-grey">
                            <i><b>Condividi</b></i> e <i><b>apprendi</b></i> attraverso i nostri corsi, workshop ed eventi
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="container-fluid">
          <div class="row">
            
            <div class="col-xs-12 col-md-8 container-fluid">
                <div><?php include('eventi/prode.php')?></div>
                <div><?php include('eventi/corso_progettazione.php')?></div>
                <div><?php include('eventi/open.php'); ?></div>
            </div>
            
            <div class="col-xs-12 col-md-4">
              <div id="twitter-feeds" class="clearfix">
                <h5><i class="fa fa-twitter"></i></h5>
              </div>
            </div>
            
          </div>
        </div>
      
        <div id="home-abstract" class="media bg-pattern">
            <div class="media-left"><img src="images/logo_wm.png" /></div>
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
                <p><a href="chi_siamo.php" class="btn fg-grey bg-green" role="button">Scopri di pi&ugrave;</a></p>
            </div>
        </div>
      
        <div id="partners" class="block">
            <div class="block-wrap">
                <div class="block-body container-fluid">
                    <div class="row">
                        <div class="col-md-6 center container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="block-heading-text">i nostri partner</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="logo-container col-md-6">
                                    <a href="http://www.officinerobotiche.it/" target="_new">
                                        <img src="images/ORlogo.png">
                                    </a>
                                </div>
                                <div class="logo-container col-md-6">
                                    <a href="http://www.ruesco.it/" target="_new">
                                        <img src="images/logo_ruesco.svg">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="block-heading-text center">la nostra rete</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="logo-container col-md-12">
                                    <a href="http://coreteroma.org/" target="_new">
                                        <img src="images/logo_corete.png" style="width:130px !important;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <?php include('footer.php'); ?>
  </body>

</html>