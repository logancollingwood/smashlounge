<?php

  require_once("techs/init.php");

?>
<!--

ooooo
`888'
 888          .ooooo.   .oooooooo  .oooo.   ooo. .oo.
 888         d88' `88b 888' `88b  `P  )88b  `888P"Y88b
 888         888   888 888   888   .oP"888   888   888
 888       o 888   888 `88bod8P'  d8(  888   888   888
o888ooooood8 `Y8bod8P' `8oooooo.  `Y888""8o o888o o888o
                       d"     YD
                       "Y88888P'

-->
<!--

Smashlounge is built for the community, by the community.

All tools used on this site are for non-commercial purposes.
Questions?
  smashlounge@gmail.com

-->

<!DOCTYPE html>
<html lang="en">
	<head>
	    <?php analytics(); ?>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="A compendium for Super Smash Bros">
	    <meta name="author" content="smashlounge">


	    <title>Smash Lounge: Rankings</title>

	    <!-- Main Dependencies -->
	    <?php

	      printLibraries();

	    ?>

	    <!-- Custom styles for this template -->
	    <link href="css/dashboard.css" rel="stylesheet">
	    <link href="css/rankings.css" rel="stylesheet">


	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->

  	</head>

	<body>

	    <?php
	      createNavBar();
	    ?>
	    <div class="container-fluid">
      		<div class="row">
				<div class="col-sm-3 col-md-2 sidebar">
		          <?php makeSidebar($loggedIn, 'rankings') ?>
		        </div>



		        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		          	<div class="jumbotron banner">
			            <h1 class='lead'>rankings</h1>
			            <hr style='width:50%;'>
			            <p class="fifty"><small>powered by the great <a href="http://www.garpr.com">garpr </a></small></br></p>
	                </div>


	      			<div class='col-md-12'>
			            <ul class='nav nav-tabs' role='tablist' id='myTab'>
			              <li class='active'><a href='#norcalTab' role='tab' data-toggle='tab' class='tabz' data-id="gif">NorCal</a></li>
			              <li><a href='#austinTab' role='tab' data-toggle='tab' class='tabz' data-id="tournament">Austin</a></li>
			              <li><a href='#nycTab' role='tab' data-toggle='tab' class='tabz' data-id="technique">NYC</a></li>
			              <li><a href='#newenglandTab' role='tab' data-toggle='tab' class='tabz' data-id="group">New England</a></li>
			          	  <li><a href='#newjerseyTab' role='tab' data-toggle='tab' class='tabz' data-id="group">New Jersey</a></li>

			            </ul>
						<div class='tab-content'>
		                	<div class='tab-pane active' id='norcalTab'>
		                		<div class='well'>
				      				<table id="norcal" class="table table-bordered table-striped table-hover">
				      					<tr>
				      						<th class='rank'> Rank </th>
				      						<th class='name'> Player </th>
				      					</tr>
									</table>
								</div>
							</div>
							<div class='tab-pane' id='austinTab'>
								<div class='well'>
		      						<table id="austin" class="table table-bordered table-striped table-hover">
				      					<tr>
				      						<th class='rank'> Rank </th>
				      						<th class='name'> Player </th>
				      					</tr>
									</table>
								</div>
							</div>
							<div class='tab-pane' id='nycTab'>
								<div class='well'>
		      						<table id="nyc" class="table table-bordered table-striped table-hover">
				      					<tr>
				      						<th class='rank'> Rank </th>
				      						<th class='name'> Player </th>
				      					</tr>
									</table>
								</div>
							</div>
							<div class='tab-pane' id='newenglandTab'>
								<div class='well'>
		      						<table id="newengland" class="table table-bordered table-striped table-hover">
				      					<tr>
				      						<th class='rank'> Rank </th>
				      						<th class='name'> Player </th>
				      					</tr>
									</table>
								</div>
							</div>	
							<div class='tab-pane' id='newjerseyTab'>
								<div class='well'>
		      						<table id="newjersey" class="table table-bordered table-striped table-hover">
				      					<tr>
				      						<th class='rank'> Rank </th>
				      						<th class='name'> Player </th>
				      					</tr>
									</table>
								</div>
							</div>	
						</div>

	      			</div>

      		</div>
  		</div>
    <script src="js/garprUtil.js"></script>
	</body>

</html>
