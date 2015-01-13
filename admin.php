<?php 

  require_once ('techs/init.php');
  require_once('techs/initAdmin.php');

    // Check if the user has the 'admin' permission. Also,
    // multiple permissions may be used by passing an array
    // This logged in user can be assigned to be a mod -- if theyre approved-
    // by visiting /techs/god_mode.php
    // this will assign them to the moderator group which will grant them this 'admin' flag
    if (!is_array($user)) {
      if ($user->hasAccess('admin'))
      {
          //echo "has access";
      }
      else
      {
          echo "Whoops! You're not a mod!";
          die();
      }
    } else {
      echo "Please login first before visiting this page.";
      die();
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php analytics(); ?>
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
          <?php makeSidebar($loggedIn, 'admin'); ?>
        </div>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <!-- Logged In -->
            
              <div class="jumbotron banner">
                <div class='row'>
                  <h1 class='lead'>Approve/Deny</h1>
                  <p class="fifty"><small>thanks for helping out</small></p>
                </div>
              </div>

                <ul class='nav nav-tabs' role='tablist' id='myTab'>
                  <li class='active'><a href='#gif' role='tab' data-toggle='tab' class='tabz' data-id="gif">Gifs</a></li>
                  <li><a href='#tournament' role='tab' data-toggle='tab' class='tabz' data-id="tournament">Tournaments</a></li>
                  <li><a href='#technique' role='tab' data-toggle='tab' class='tabz' data-id="technique">Techniques</a></li>
                  <li><a href='#group' role='tab' data-toggle='tab' class='tabz' data-id="group">Regional Group</a></li>
                </ul>

                <div class='tab-content'>
                  <div class='tab-pane active' id='gif'>
                    <table class="table table-striped">
                      <tr>
                        <th>Gfycat URL</th>
                        <th>content</th>
                        <th>category</th>
                        <th>Original Source</th>
                        <th>Description</th>
                        <th>Approve</th>
                        <th>Deny</th>
                      </tr>
                      <?php foreach ($gifSubmission as $row): ?>
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
                              <?php //echo $row['data-id']; ?>
                          </td>
                          <td><?php echo $row['source']; ?></td>
                          <td><?php echo $row['description']; ?></td>
                          <td><a class="approve-link" href="#"><i class="fa fa-check-circle fa-3x"></i></a></td>
                          <td><a class="delete-link" href="#"><i class="fa fa-times-circle fa-3x"></i></a></td>
                        </tr>
                      <?php endforeach; ?>
                    </table>
                  </div>
                  <div class='tab-pane' id='tournament'>
                    <table class="table table-striped">
                      <tr>
                        <th>Tournament Name</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Challonge</th>
                        <th>Twitch</th>
                        <th>Approve</th>
                        <th>Deny</th>
                      </tr>
                       <?php foreach ($tournamentSubmission as $row): ?>
                        <tr class="submission" data-id="<?php echo $row['id']; ?>">
                          <td>
                            <?php echo trim($row['title']); ?>
                          </td>
                          <td>
                            <?php echo trim($row['start']); ?>
                          </td>
                          <td>
                            <?php echo trim($row['end']); ?>
                          </td>
                          <td><?php echo $row['bracket']; ?></td>
                          <td><?php echo $row['stream']; ?></td>
                          <td><a class="approve-link" href="#"><i class="fa fa-check-circle fa-3x"></i></a></td>
                          <td><a class="delete-link" href="#"><i class="fa fa-times-circle fa-3x"></i></a></td>
                        </tr>
                      <?php endforeach; ?>
                    </table>
                  </div>
                  <div class='tab-pane' id='technique'>
                    <table class="table table-striped">
                      <tr>
                        <th>Technique Name</th>
                        <th>Description</th>
                        <th>SSBwiki</th>
                        <th>Approve</th>
                        <th>Deny</th>
                      </tr>
                      <?php foreach ($techSubmission as $row): ?>
                        <tr class="submission" data-id="<?php echo $row['id']; ?>">
                          <td>
                            <?php echo trim($row['name']); ?>
                          </td>
                          <td>
                            <?php echo trim($row['description']); ?>
                          </td>
                          <td>
                            <?php echo trim($row['ssbwiki']); ?>
                          </td>
                          <td><a class="approve-link" href="#"><i class="fa fa-check-circle fa-3x"></i></a></td>
                          <td><a class="delete-link" href="#"><i class="fa fa-times-circle fa-3x"></i></a></td>
                        </tr>
                      <?php endforeach; ?>
                    </table>
                  </div>
                  <div class='tab-pane' id='group'>
                    <table class="table table-striped">
                      <tr>
                        <th>Group Name</th>
                        <th>Facebook</th>
                        <th>Lat</th>
                        <th>Long</th>
                        <th>Region</th>
                        <th>Game</th>
                        <th>Approve</th>
                        <th>Deny</th>
                      </tr>
                      <?php foreach ($groupSubmission as $row): ?>
                        <tr class="submission" data-id="<?php echo $row['id']; ?>">
                          <td>
                            <?php echo trim($row['name']); ?>
                          </td>
                          <td>
                            <?php echo trim($row['fb']); ?>
                          </td>
                          <td>
                            <?php echo trim($row['latitude']); ?>
                          </td>
                          <td>
                            <?php echo trim($row['longitude']); ?>
                          </td>
                          <td>
                            <?php echo trim($row['region']); ?>
                          </td>
                          <td>
                            <?php 
                              $gameid = $row['game'];

                              echo getGameFromID($gameid); 
                            ?>
                          </td>
                          <td><a class="approve-link" href="#"><i class="fa fa-check-circle fa-3x"></i></a></td>
                          <td><a class="delete-link" href="#"><i class="fa fa-times-circle fa-3x"></i></a></td>
                        </tr>
                      <?php endforeach; ?>
                    </table>
                  </div>
                </div>
            </div>

      
    </div> <!-- /container -->




    <script src='/js/moderate.js'></script>

  </body>
</html>