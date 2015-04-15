<?php

  require_once("techs/init.php");

?>

<!--

Smashlounge is built for the community, by the community.

All tools used on this site are for non-commercial purposes.
Questions?
  smashlounge@gmail.com

-->

<!DOCTYPE html>
<html lang="en">
	<head>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="A compendium for Super Smash Bros">
	    <meta name="author" content="smashlounge">


	    <title>Smash Lounge: Rankings</title>

	    <?php printNewLibraries(); ?>

    	<link href="/css/less/rich.css" rel="stylesheet">

	    <link href="css/rankings.css" rel="stylesheet">


  	</head>

	<body>

    	<div class="wrapper">
	      <div class="box">

	        <!-- top nav -->
	        <?php navbar(); ?>
	        <!-- /top nav -->

	        <div class="row row-offcanvas row-offcanvas-left">

	       
	        <?php sidebar('rankings'); ?>

	          <!-- main right col -->
	          <div class="column col-md-10" id="main">

		        <section id="banner" data-speed="4" data-type="background">
		          <div class="jumbotron">
		            <div class='header'>
		              rankings
		            </div>
		            <div class="blur">
		              <div class="description">                   
		                powered by the great <a href="http://www.garpr.com">garpr</a>
		              </div>
		              <div class="mast">
		              </div>
		            </div>
		          </div>
		        </section>

		        <div class="content-wrapper">
	      			<div class='col-md-12'>
			            <ul class='nav nav-tabs' role='tablist' id='myTab'>
			              <li class='active'><a href='#norcalTab' role='tab' data-toggle='tab' class='tabz'>NorCal</a></li>
			              <li><a href='#austinTab' role='tab' data-toggle='tab' class='tabz'>Austin</a></li>
			              <li><a href='#nycTab' role='tab' data-toggle='tab' class='tabz'>NYC</a></li>
			              <li><a href='#newenglandTab' role='tab' data-toggle='tab' class='tabz'>New England</a></li>
			          	  <li><a href='#newjerseyTab' role='tab' data-toggle='tab' class='tabz'>New Jersey</a></li>

			            </ul>
						<div class='tab-content'>
		                	<div class='tab-pane active' id='norcalTab'>
		                		<div class='well'>
				      				<table id="norcal" class="table table-bordered table-hover">
				      					<tr>
				      						<th class='rank'> Rank </th>
				      						<th class='name'> Player </th>
				      					</tr>
									</table>
								</div>
							</div>
							<div class='tab-pane' id='austinTab'>
								<div class='well'>
		      						<table id="austin" class="table table-bordered table-hover">
				      					<tr>
				      						<th class='rank'> Rank </th>
				      						<th class='name'> Player </th>
				      					</tr>
									</table>
								</div>
							</div>
							<div class='tab-pane' id='nycTab'>
								<div class='well'>
		      						<table id="nyc" class="table table-bordered table-hover">
				      					<tr>
				      						<th class='rank'> Rank </th>
				      						<th class='name'> Player </th>
				      					</tr>
									</table>
								</div>
							</div>
							<div class='tab-pane' id='newenglandTab'>
								<div class='well'>
		      						<table id="newengland" class="table table-bordered table-hover">
				      					<tr>
				      						<th class='rank'> Rank </th>
				      						<th class='name'> Player </th>
				      					</tr>
									</table>
								</div>
							</div>	
							<div class='tab-pane' id='newjerseyTab'>
								<div class='well'>
		      						<table id="newjersey" class="table table-bordered table-hover">
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
