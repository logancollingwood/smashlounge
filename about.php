<?php

  require("techs/init.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php analytics(); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel='shortcut icon' href='/img/favicon.ico'>

    <title>About</title>

    <!-- Main Dependencies -->
    <?php

      printLibraries();

    ?>

    <link href="css/new.css" rel="stylesheet">


  </head>
  <style type='text/css'>
    #intro { 
      background: url(img/assets/BG_twit.jpg) 50% 0 fixed; 
      height: 60%;
      top: 5%;
      margin: 0 auto; 
      width: 100%; 
      position: relative; 
      /*box-shadow: 0 0 50px rgba(0,0,0,0.8);*/
      padding: 200px 0;
    }
    #home { 
        background: url(img/home.jpg) 50% 0 fixed; 
        background-color: #329c90;
        background-image: url(img/assets/arches.png);
        /* This is mostly intended for prototyping; please download the pattern and re-host for production environments. Thank you! */        
        height: auto;  
        margin: 0 auto; 
        width: 100%; 
        position: relative; 
        /*box-shadow: 0 0 50px rgba(0,0,0,0.8);*/
        padding: 50px 0;
    }
    img {
      width: 100%;
    }
    .panel-body img {

    }
    .panel-body h3 {
      font-family: 'raleway';
      color: #000;
    }
    h1 {
      color:#fff;
      text-align: center;
    }
    .panel-heading {
      text-align: center;
    }
    hr {
      width: 65%;
    }
    .panel-default {
      max-width: 100%;
    }
    .col-md-3 {
      /*margin-left: 10%;*/
    }
    .panel-footer .fa {
      color: #6e6e6e;
      margin-left: 10%;
    }
  </style>
  <body>

      <?php
        createNavBar('about');
      ?>
      <!-- Section 1 -->
      <section id="intro" data-speed="6" data-type="background">
      </section>
      <!-- Section 2 -->
      <section id="home" data-speed="8" data-type="background">
        <div class='row'>
            <h1> TSL </h1>
            <hr>
            <br>
        </div>
                <div class='row'>
          <div class='col-md-2 col-md-offset-1'>
            <div class='panel panel-default'>
              <div class='panel-heading'>Logan Collingwood</div>
              <div class='panel-body vimeo'>
                <img src='/img/profiles/lc.jpg' />
                <h3>Co-Founder, Lead Developer</h3>
              </div>
              <div class='panel-footer'>
                <i class="fa fa-facebook-square fa-3x"></i>
                <i class="fa fa-twitter-square fa-3x"></i>
                <i class="fa fa-github-square fa-3x"></i>
              </div>
            </div>
          </div>
          <div class='col-md-2'>
            <div class='panel panel-default'>
              <div class='panel-heading'>Kevin <br>Toy</div>
              <div class='panel-body vimeo'>
                <img src='/img/profiles/kt.jpg' />
                <h3>Co-Founder, Knowledge-Base, Social Media</h3>
              </div>
              <div class='panel-footer'>
                <i class="fa fa-facebook-square fa-3x"></i>
                <i class="fa fa-twitter-square fa-3x"></i>
                <i class="fa fa-github-square fa-3x"></i>
              </div>
            </div>
          </div>
          <div class='col-md-2'>
            <div class='panel panel-default'>
              <div class='panel-heading'>Marco Salazar</div>
              <div class='panel-body vimeo'>
                <img src='/img/profiles/ms.jpeg' />
                <h3>Developer, Programming Guru</h3>
              </div>
              <div class='panel-footer'>
                <i class="fa fa-facebook-square fa-3x"></i>
                <i class="fa fa-twitter-square fa-3x"></i>
                <i class="fa fa-github-square fa-3x"></i>
              </div>
            </div>
          </div>
          <div class='col-md-2'>
            <div class='panel panel-default'>
              <div class='panel-heading'>Boback <br>Vakili</div>
              <div class='panel-body vimeo'>
                <img src='/img/profiles/bv.jpg' />
                <h3>Motion Graphics, Branding</h3>
              </div>
              <div class='panel-footer'>
                <i class="fa fa-facebook-square fa-3x"></i>
                <i class="fa fa-twitter-square fa-3x"></i>
                <i class="fa fa-github-square fa-3x"></i>
              </div>
            </div>
          </div>
          <div class='col-md-2'>
            <div class='panel panel-default'>
              <div class='panel-heading'>Dan <br>Pagharion</div>
              <div class='panel-body vimeo'>
                <img src='/img/profiles/dp.jpg' />
                <h3>Developer</h3>
              </div>
              <div class='panel-footer'>
                <i class="fa fa-facebook-square fa-3x"></i>
                <i class="fa fa-twitter-square fa-3x"></i>
                <i class="fa fa-github-square fa-3x"></i>
              </div>
            </div>
          </div>

        </div>
      </section>
      <section id="about" data-speed="4" data-type="background">
      </section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
         $window = $(window);
       
         $('section[data-type="background"]').each(function(){

           var $scroll = $(this);
                           
            $(window).scroll(function() {                       
              var yPos = -($window.scrollTop() / $scroll.data('speed')); 
              var coords = '50% '+ yPos + 'px';
       
              $scroll.css({ backgroundPosition: coords });    
            });
         });  
      }); 
    </script>
  </body>
</html>
