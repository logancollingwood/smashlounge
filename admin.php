<?php 

  require_once ('techs/init.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <?php printLibraries(); ?>

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <?php createNavBar(); ?>

    <div class="container">  
      <?php if ( ! Sentry::check()): ?>
        <!-- Not Logged In -->
        <form class="form-signin" role="form" action='login.php?redirect=admin' method='post'>
          <h2 class="form-signin-heading">Please sign in</h2>
          <input name='email' id='email' type="email" class="form-control" placeholder="Email address" required autofocus>
          <input name='password' id='password' type="password" class="form-control" placeholder="Password" required>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
      <?php else: ?>
        
        <?php require_once ('techs/initAdmin.php'); ?>

        <!-- Logged In -->
        <div class="management">
          <header>
            <h1>Approve / Delete Gifs</h1>
          </header>

          <?php if (!$result = $mysqli->query($query)): ?>
            <div class="adminError">
              <h2>There was a database error.</h2>
              <p><?php echo $mysqli->error; ?></p>
            </div>
          <?php else: ?>
            <table class="table">
              <tr>
                <th>Gfycat URL</th>
                <th>Original Source</th>
                <th>Description</th>
                <th>Approve</th>
                <th>Delete</th>
              </tr>
              <?php foreach ($result as $row): ?>
                <tr class="submission" data-id="<?php echo $row['id']; ?>">
                  <td>
                    <a class="modal-link" href="#">
                      <?php echo $row['url']; ?>
                    </a>
                  </td>
                  <td><?php echo $row['source']; ?></td>
                  <td><?php echo $row['description']; ?></td>
                  <td><a class="approve-link" href="#"><i class="fa fa-check-circle"></i></a></td>
                  <td><a class="delete-link" href="#"><i class="fa fa-times-circle"></i></a></td>
                </tr>
              <?php endforeach; ?>
            </table>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div> <!-- /container -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Gfycat Preview</h4>
          </div>
          <div class="modal-body">
            <h1 class="gfycat-target">...</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
    <script>
      $(document).ready(function() {
        $('.modal-link').on('click', function(event) {
          // Prevent Default Behavior
          event.preventDefault();

          // Set to modal-link text
          var gfyCatURL = $(this).text();
          var linkAndString = "<a href='http://www.gfycat.com/" + gfyCatURL + "'><p class='fifty2'>" + gfyCatURL + "</p></a>"; 
          // Change gfycat text
          $('#myModal .gfycat-target').append(linkAndString + "<hr><img class='gfyitem' data-expand=true data-id='" + gfyCatURL + "' />");
          // Show Modal Window
          $('#myModal').modal('show');
        });

        $('.approve-link').on('click', function(event) {
          // Prevent Default Behavior
          event.preventDefault();

          var $approveLink = $(this);

          $approveLink.closest('.submission').remove();
        });

        $('.delete-link').on('click', function(event) {
          // Prevent Default Behavior
          event.preventDefault();

          var $deleteLink = $(this);

          $deleteLink.closest('.submission').remove();
        });
      });
    </script>

  </body>
</html>