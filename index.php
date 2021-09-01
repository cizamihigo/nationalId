<!DOCTYPE HTML>
<html>
    <?php
    $pagename = "Home" ;
    include("head.php");
    ?>
<body>
    <?php
    //session_start();
        include_once("includes/header.php");
     ?>  
     <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){		
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>
     <div class="banner">
         <div class="container">
             <div class="banner-inner">
                 <div class="callbacks_container">
                     <ul class="rslides callbacks callbacks1" id="slider4">
                         <li class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
                             <div class="banner-info">
                             <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                             <p>Lorem ipsum dolor sit amet</p>
                             </div>
                         </li>
                         <li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
                             <div class="banner-info">
                               <h3>Ut enim ad minima veniam, quis nostrum exercitationem</h3>
                              <p>Lorem ipsum dolor sit amet</p>
                             </div>
                         </li>
                         <li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
                             <div class="banner-info">
                              <h3>At vero eos et accusamus et iusto odio dignissimos.</h3>
                             <p>Lorem ipsum dolor sit amet</p>
                             </div>	
                         </li>
                     </ul>
                 </div>
                     <!--banner-Slider-->
                     <script src="js/responsiveslides.min.js"></script>
                      <script>
                     // You can also use "$(window).load(function() {"
                     $(function () {
                       // Slideshow 4
                       $("#slider4").responsiveSlides({
                     auto: true,
                     pager: true,
                     nav:false,
                     speed: 500,
                     namespace: "callbacks",
                     before: function () {
                       $('.events').append("<li>before event fired.</li>");
                     },
                     after: function () {
                       $('.events').append("<li>after event fired.</li>");
                     }
                       });
 
                     });
                       </script>
             </div>
         </div>
   </div>
   </div>
   </div>
   </div>
 <!--//end-banner--
     <?php   
       include_once("includes/footer.php");
       
    ?>
</body>