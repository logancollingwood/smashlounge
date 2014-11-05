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

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/new.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>

      <?php
        createNavBar('about');
      ?>
        <div class="cover-container">


          <div class="inner cover">
            <div class='row'>
              <h1 class="cover-heading">Smash Lounge</h1>
              <p class="lead">is an online compendium for Super Smash Brothers Melee</p>
            </div>
            <p class="lead">
              Code by <a href="http://www.logancollingwood.com"> Logan Collingwood </a> <a href="http://www.twitter.com/logan6694"> @logan6694 </a>
              <br />
              Knowledge from Kevin Toy <a href="https://twitter.com/miom_pewpewu">@MIOM_PewPewU</a>
              <br />
              Scripting and programming assistance from Marco Salazar 
              <br />
              Graphic design and promotional videos by Boback Vakili
              <br />

              <p style="font-size: 16px; margin-top: 45px">
              Most descriptions taken from smashWiki or from professional sources. There are destined to be innacuracies in the information provided, so feel free to email me to get it fixed
              <address>
                <a href="mailto:smashlounge@gmail.com">smashlounge@gmail.com</a>
              </address> 
              </p>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p></p>
            </div>
          </div>

        </div>



    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
