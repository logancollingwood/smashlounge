<?php 

  require_once ('techs/init.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SmashLounge: An Online compendium for Super Smash Bros">
    <meta name="author" content="smashlounge">
   

    <title>Moderate SmashLounge</title>

    <?php printLibraries(); ?>

    <!-- Custom styles for this template -->
    <link href="css/dashboard_mobile.css" rel="stylesheet">

  </head>

  <body>

  <?php createNavBar(); ?>

    <div class="container-fluid"> 
      

        <div class="col-sm-3 col-md-2 sidebar">
          <?php makeSidebar($loggedIn, 'update'); ?>
        </div>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
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
            
              <div class="jumbotron banner">
                <div class='row'>
                  <h1 class='lead'>Approve/Deny</h1>
                  <p class="fifty"><small>thanks for helping out</small></p>
                </div>
              </div>

              <?php if (!$result = $mysqli->query($query)): ?>
                <div class="adminError">
                  <h2>There was a database error.</h2>
                  <p><?php echo $mysqli->error; ?></p>
                </div>
              <?php else: ?>
                <table class="table table-striped">
                  <tr>
                    <th>Gfycat URL</th>
                    <th>content</th>
                    <th>category</th>
                    <th>Original Source</th>
                    <th>Description</th>
                    <th>Approve</th>
                    <th>Delete</th>
                  </tr>
                  <?php foreach ($result as $row): ?>
                    <tr class="submission" data-id="<?php echo $row['id']; ?>">
                      <td>
                        <a class="modal-link" href="http://www.gfycat.com/<?php echo $row['url'] ?>">
                          <?php echo trim($row['url']); ?>
                        </a>
                      </td>
                      <td style='width: 70%;'>
                        <img class='gfyitem' data-expand=true data-id="<?php echo trim($row['url']); ?>"/>
                      </td>
                      <td>
                          <?php 
                            if ($row['pageid'] == 0) {
                              echo "<p>Technique Gif</p>";
                              echo "<p>" . getTechFromID($mysqli, $row['dataid']) . "</p>";
                            }
                            else {
                              echo "<p>Character Gif</p>";
                              echo "<p>" . getCharFromID($mysqli, $row['dataid']) . "</p>";
                            }
                          ?>
                          <?php echo $row['data-id']; ?>
                      </td>
                      <td><?php echo $row['source']; ?></td>
                      <td><?php echo $row['description']; ?></td>
                      <td><a class="approve-link" href="#"><i class="fa fa-check-circle fa-3x"></i></a></td>
                      <td><a class="delete-link" href="#"><i class="fa fa-times-circle fa-3x"></i></a></td>
                    </tr>
                  <?php endforeach; ?>
                </table>
              <?php endif; ?>
            </div>
          <?php endif; ?>

      
    </div> <!-- /container -->




    <script>
      $(document).ready(function() {
        gfyCollection.init();

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