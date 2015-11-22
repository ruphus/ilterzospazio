<script type="text/javascript">
	$(document).ready(function(){
		if (! $.cookie("cookies-accepted") ) {
      var cookieDialog = $("#cookies-popup").show();
    
      cookieDialog.find("#accept-cookies").click(function(e){
        e.preventDefault();
        $.cookie("cookies-accepted", "accepted", { expires : 365, path: '/' });
        cookieDialog.hide();
      });
    }
	});
</script>

<div id="cookies-popup" class="clearfix">
  <p>
    Il sito utilizza cookie di servizio e di analisi.
    Continuando la navigazione accetti l'uso di tali cookie.
  </p>
  <div>
    <a id="accept-cookies" href="#" class="btn fg-grey bg-red" role="button">
      Accetta
    </a>
    <a href="/disclaimer_analytics.php" class="btn fg-grey bg-cyan" role="button">
      Altre informazioni
    </a>
  </div>
</div>