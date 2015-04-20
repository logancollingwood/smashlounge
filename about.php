<?php
   require("techs/init.php");
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="SmashLounge: Super Smash Brothers techniques">
      <meta name="author" content="smashlounge">
      <title>About Smash Lounge</title>
      <!-- Main Dependencies -->
      <?php printNewLibraries(); ?>
      <link href="/css/less/rich.css" rel="stylesheet">
      <style>
         img {
         height: 250px;
         }
      </style>
   </head>
   <body>
      <div class="wrapper">
         <div class="box">
            <!-- top nav -->
            <?php navbar(); ?>
            <!-- /top nav -->
            <div class="row row-offcanvas row-offcanvas-left">
               <?php sidebar('home'); ?>
               <!-- main right col -->
               <div class="column col-md-10" id="main">
                <section id="banner" data-speed="4" data-type="background">
                  <div class="jumbotron">
                    <div class='header'>tsl</div>
                    <div class="blur">
                      <div class="description"><hr></div>
                      <div class="mast">
                      </div>
                    </div>
                  </div>
                </section>
                <div class="content-wrapper">
                     <div class='col-md-2 col-md-offset-1'>
                        <div class='panel panel-default'>
                           <div class='panel-heading'>Logan Collingwood</div>
                           <div class='panel-body vimeo'>
                              <img src='/img/profiles/lc.jpg'/>
                              <h3>Co-Founder, Lead Developer</h3>
                           </div>
                           <div class='panel-footer'>
                              <a href='https://www.facebook.com/logancollingwood'>
                              <i class="fa fa-facebook-square fa-3x"></i>
                              </a>
                              <a href='https://twitter.com/__logan_c__'>
                              <i class="fa fa-twitter-square fa-3x"></i>
                              </a>
                              <a href='https://github.com/logancollingwood/'>
                              <i class="fa fa-github-square fa-3x"></i>
                              </a>
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
                              <a href='https://www.facebook.com/MIOMPewPewU'>
                              <i class="fa fa-facebook-square fa-3x"></i>
                              </a>
                              <a href='https://twitter.com/MIOM_pewpewu'>
                              <i class="fa fa-twitter-square fa-3x"></i>
                              </a>
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
                              <a href='https://www.facebook.com/marceux'>
                              <i class="fa fa-facebook-square fa-3x"></i>
                              </a>
                              <a href='https://twitter.com/marceux'>
                              <i class="fa fa-twitter-square fa-3x"></i>
                              </a>
                              <a href='https://github.com/marceux/'>
                              <i class="fa fa-github-square fa-3x"></i>
                              </a>
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
                              <a href='https://www.facebook.com/boback.vakili'>
                              <i class="fa fa-facebook-square fa-3x"></i>
                              </a>
                              <a href='https://twitter.com/boba_ck'>
                              <i class="fa fa-twitter-square fa-3x"></i>
                              </a>
                              <a href='http://vimeo.com/bobackv'>
                              <i class="fa fa-vimeo-square fa-3x"></i>
                              </a>
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
                              <a href='https://www.facebook.com/daniel.pagharion'>
                              <i class="fa fa-facebook-square fa-3x"></i>
                              </a>
                              <a href='https://twitter.com/dspagharion'>
                              <i class="fa fa-twitter-square fa-3x"></i>
                              </a>
                              <a href='https://github.com/dpaghari/'>
                              <i class="fa fa-github-square fa-3x"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class='row'>
                     <hr>
                     <div class='col-md-6 col-md-offset-3'>
                        <h3> smashlounge is an online compendium for super smash brothers. We
                           strive to organize and categorize all data for the super smash brothers
                           franchise and to provide an open, transparent interface for accessing
                           information.
                        </h3>
                        <p>
                           If you would like to work with us (and please, feel free), email us at
                           <a href='mailto:tsl@smashlounge.com'> tsl@smashlounge.com </a>
                        </p>
                        <br>
                     </div>
                     <hr>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
    <script src="/js/jquery.fitvids.js"></script>
</html>