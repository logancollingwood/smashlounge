<?php

	$string_reddit = file_get_contents("http://www.reddit.com/r/smashgifs/hot.json");
  	$json = json_decode($string_reddit, true);
  	$children = $json['data']['children'];
  	$randGif = rand(0, count($children)-1);

  	$randChild = $children[$randGif];

  	echo(json_encode($randChild));
  	return;

?>