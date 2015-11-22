<footer class="clearfix">
  <a class="social" href="https://www.facebook.com/ilterzospazio" target="_new">
    <i class="fa fa-facebook-square fa-2x fg-orange"></i>
  </a>
  <a class="social" href="https://twitter.com/ilterzospazio" target="_new">
    <i class="fa fa-twitter-square fa-2x fg-orange"></i>
  </a>
  <a class="social" href="https://www.linkedin.com/company/ilterzospazio" target="_new">
    <i class="fa fa-linkedin-square fa-2x fg-orange"></i>
  </a>
  <p>&copy; 2015 ilterzospazio</p>
</footer>

<a id="back-to-top" href="#"><i class="fa fa-arrow-circle-up fa-3x fg-cyan"></i></a>

<div id="curtain">
  <i class="fa fa-cog fa-spin"></i>
</div>

<script type="text/javascript">

//CURTAIN
var cogColors = ['fg-cyan', 'fg-red', 'fg-green', 'fg-orange'];

function showCurtain(){
  var randomColor = cogColors[ Math.floor((Math.random() * cogColors.length)) ];
  $(curtain).find("> .fa-cog").addClass(randomColor);
  $(curtain).show();
}

function hideCurtain(){
  $(curtain).hide();
}

$(document).ready(function(){
  
  $("nav a").on("click", function(){
    showCurtain();  
  });
  
//BACK TO TOP
  var btt = $("#back-to-top");
  
  $(window).on("scroll", function() {
  	if ( $(this).scrollTop() > 220 ) {
  		$(btt).fadeIn(500);
  	} 
  	else $(btt).fadeOut(500);
  });
  
//GOOGLE ANALYTICS
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  
  ga('create', 'UA-66838683-1', 'auto');
  ga('send', 'pageview');
  
});
</script>