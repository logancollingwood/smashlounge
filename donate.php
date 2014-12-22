<?php 

  require('techs/init.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-51481444-1', 'auto');
      ga('require', 'displayfeatures');
      ga('send', 'pageview');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Thank You</title>
    <?php
      printLibraries();
    ?>

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .gray {
      color: #f64497;
    }
    .large {
      font-size: 72px;
    }
    .donate {
      color: #333;
      margin-top: 5%;
    }
    .donate.li {

    }
    .thanks {
      margin-top: 10%;
    }
    .cover-container {
      width: 100%;
    }
    .row {
      margin-left: 2%;
      margin-right: 2%;
    }
    body {
      box-shadow: none;
    }
    .site-wrapper {
      box-shadow: inset 0 0 100px rgba(0,0,0,.5);
    }
    h3 {
      text-shadow: none;
    }
    </style>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/donate.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">

      
      <?php
        createNavBar('donate');
      ?>

      <div class="site-wrapper-inner">

        <div class="cover-container">


          <div class='row'>
            <br>
            <div class='col-md-5'>
              <div class="panel panel-default donate">
                <div class='panel-heading'>
                  <h3> Donate with Bitcoin <i class="fa fa-btc fa-1x"></i></h3>
                </div>
                <div class='panel-body'>
                  <form class='form-horizontal' action="https://bitpay.com/checkout" method="post" onsubmit="return bp.validateMobileCheckoutForm($('#donate'));" role='form'>
                    <input name="action" type="hidden" value="checkout">
                    <div class="form-group">
                      <label for="inputEmail" class="col-sm-4 control-label">Email</label>
                      <div class="col-sm-8">
                        <input name="orderID" id='inputEmail' type="email" placeholder="Email address (optional)" style="width: 100%;">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="amount" class="col-sm-4 control-label">Amount</label>
                      <div class="col-sm-6">
                        <input name="price" id='amount' type="number" placeholder="Amount" value="10.00"  style="width: 100%;"/>
                      </div>
                      <div class='col-sm-2'>
                        <select name="currency" value="" >
                          <option value="USD" selected="selected">USD</option>
                          <option value="BTC">BTC</option>
                          <option value="EUR">EUR</option>
                          <option value="GBP">GBP</option>
                          <option value="CAD">CAD</option>
                        </select>
                      </div>
                    </div>
                    <input name="data" type="hidden" value="YqU4dKBUutMXSf+Yn4XObuT41yjFjnKPIzW4Ov/r+hLl/juYd0b8QbkS9TjA6v8+dM6x7kHpKzOhuZUaG9MPKQ0Kp1x75fBsixwKGxW9lzTnGIFXojLdrvWK5DHbN0FRxdGpYt7Sy199pNDspsY+5anJnJ/ExhBw09YEXsDGkb5TVkWPAh05yspIWf3Yz1dQKwloJEwEqaOJXhxvzkTa+IvyymbU3iuLj85jubj+t/lP9pVx79U6sTrI88rjZVeub3hOnOGPrkVSXZ5IDyQSRA==">
                    
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <input name="submit" type="image" src="https://bitpay.com/img/donate-md.png" border="0" style='text-align:left;'>
                      </div>
                    </div>

                  </form>
                  <br />
                </div>
              </div>
            </div>

            <div class='col-md-2 donate'>
              
              <h3 style="color:#FFF;"> OR </h3>
            </div>

            <div class='col-md-5 donate'>
              <div class='panel panel-default donate'>
                <div class='panel-heading'>
                  <h3> Donate with Paypal <i class="fa fa-money fa-1x"></i></h3>
                </div>
                <div class='panel-body'>
                  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="TLY8N6UTRSKG4">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                  </form>
                  <br />
                </div>
              </div> 
            </div>
          </div>
          <div class='row'>
              <div class="inner cover thanks">
                
                  <h1 class="cover-heading large">Thank you <span class="glyphicon glyphicon-heart gray"></span></h1>
                  <br />
                  <br />
                  <p class="lead">Every donation helps us develop more features for the community.</p>


                  <p> <span class="badge pull-left">1</span> Donations keep us from having to run ads in order to recoup hosting costs every month</p>

                  <p> <span class="badge pull-left">2</span> They allow us to spend more personal time building new features</p>

                  <p> <span class="badge pull-left">3</span> They will allow us to expand our business, and grow as a part of the Smash community</p>
                  <a href="mailto:smashlounge@gmail.com">email us</a>
                
              </div>

          </div>
        </div>


          <br/>
          <br/>
          <br/>
        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
