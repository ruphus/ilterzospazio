


<!DOCTYPE html>
<html>
  <head>
    <?php include('headers.php'); ?>
    
    <link rel="stylesheet" href="css/when.css">
    
  </head>
  <body>


    <?php include('nav.php'); ?>
    
   
    
    
    <div class="block bg-grey">
      <div class="block-heading">
        <i class="block-heading-icon fa fa-envelope-o fg-cyan"></i>
        <h4 class="block-heading-text">Iscriviti alla newsletter</h4>
      </div>
      <form id="nl-sub-form" class="block-body">
        <p class="alert" role="alert"></p>
        <p class="mb-20px">
          Inserisci il tuo indirizzo e-mail per rimanere sempre aggiornato
          sulle nuove iniziative de <span class="its">ilterzospazio</span>
        </p>
        <p class="mb-20px">
          <input type="email" name="email" placeholder="La tua email" size="40" maxlength="128" /> 
        </p>
        <p class="mb-20px">
          <input type="text" name="nome" placeholder="Il tuo nome" size="40" maxlength="128" />
        </p>
        <p>
          <a id="nl-subscribe" href="#" class="btn fg-grey bg-cyan" role="button" disabled>Iscriviti</a>
        </p>
      </form>
    </div> 
    
    
    <?php include('footer.php'); ?>
    
    <script type="text/javascript">

      var newsletterView = {
        container : null,
        email : null,
        name : null,
        button : null,
        alert : null,
        emailRegExp : new RegExp(/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/),
        
        init : function(){
          var view = this;
        
          view.container = $("#nl-sub-form");
          view.alert = view.container.find(".alert");
          
          view.email = view.container.find("[name='email']").on("change", function(){
            view.button.attr("disabled", true);
            view.resetAlert();
          
            var value = $(this).val().trim().toLowerCase();
            if ( !view.emailRegExp.test(value) ){
              
              view.alert
                .addClass("alert-danger")
                .text("Formato email non corretto.")
                .show()
              ;
            }
            else view.button.attr("disabled", false);
          });
        
          view.button = view.container.find("#nl-subscribe").on("click", function(e){
            showCurtain();
            e.preventDefault();
            
            var nome = view.container.find("[name='nome']").val().trim().toLowerCase();
            var email = view.email.val().trim().toLowerCase();
            
            view.resetAlert();
            
            $.ajax({
              url : 'newsletter.php',
              method: 'POST',
              dataType: 'json',
              data : {
                email : email,
                nome : nome
              },
              success : function(response){
                if (response === "newsletter.already-registered"){
                  view.alert
                    .addClass("alert-danger")
                    .text("Email già presente nella lista di invio.")
                  ;
                }
                else if (response === 'ok'){
                  view.alert
                    .addClass("alert-success")
                    .text("Iscrizione avvenuta correttamente.")
                  ;
                };
              },
              error : function(){
                var mailto = $("<a></a>")
                  .attr("href", "mailto:info@ilterzospazio.org")
                  .text("info@ilterzospazio.org")
                ;
              
                view.alert
                  .addClass("alert-danger")
                  .append("Errore durante l'iscrizione alla newsletter. ")
                  .append("In caso di persistenza del problema, contattare ")
                  .append(mailto)
                ;
              },
              complete : function(){
                view.alert.show();
                hideCurtain();
              }
            });
            
          });
        },

        resetAlert : function(){
          this.alert.hide().removeClass("alert-success,alert-danger").empty();
        }
      };
      
      $(document).ready(function(){newsletterView.init();});
      
    </script>
    
  </body  >

</html>