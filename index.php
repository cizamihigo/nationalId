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
                             <h3>You are aboard and need your National Card?</h3>
                             <p>E-national ID solution was made for you!</p>
                             </div>
                         </li>
                         <li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
                             <div class="banner-info">
                               <h3>Just lost your Id?</h3>
                              <p>No fear to have, Take another one from E-National Id system. </p>
                             </div>
                         </li>
                         <li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
                             <div class="banner-info">
                              <h3>Tired of physical National Id?</h3>
                             <p>Use your electronic Id provided by E-National Id system</p>
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
  <!--/mag-bottom-->
    <div class="mag-bottom">
        <h3 class="tittle bottom"><i class="glyphicon glyphicon-globe"></i>About the Authors</h3>
        <div class="grid">
            <div class="col-md-6 m-b">
            <a href="aboutus.php"> <figure class="effect-layla"></a>
                <img src="images/manasse.jpg" alt="img25"/>
                <figcaption>
                    <h4>KAZUZA MWENELWATA MANASSE <span>Programmer </span></h4>
                </figcaption>			
                </figure>
                <div class="m-b-text">
                    <a href="aboutus.php" class="wd">My purpose after here is to become a Network Administrator </a>
                    <p>Am a passionate of computer networking systems. I would like to get in touch with computer networks and help provide a better future for coming generations ...</p>
                    <a class="read" href="aboutus.php">Read More</a>
                </div>
                
            </div>
            <div class="col-md-6 m-b">
                <figure class="effect-layla">
            <a href="aboutus.php">	<img src="images/louange.jpg" alt="img25"/></a>
                <figcaption>
                    <h4>MAHIKITO KAVUGHO Louange<span>Programmer and researcher</span></h4>
                </figcaption>			
                </figure>
                <div class="m-b-text">
                    <a href="aboutus.php" class="wd">I dream to continue my journey in the field of research </a>
                    <p>I want to be among the tomorrow innovators. the creator of the Africa of tomorrow through Computer science ... <br></p>
                    <a class="read" href="aboutus.php">Read More</a>
                </div>
            </div>
    </div>
</body>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>