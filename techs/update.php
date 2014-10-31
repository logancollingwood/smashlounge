<?php

	function updateProfile($userID, $_POST) {
			$vod = '';
	      	$main = $_POST['main'];
	      	$location = $_POST['location'];
	      	$vodURL = $_POST['vod'];
	      	$facebook = $_POST['facebook'];
      		//echo $vodURL;
		      //preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $vodURL, $matches);
		      //echo $matches;
		      if (empty($matches) && $_POST['vod'] != '') {
		        header("Location: /update?str=url");
		        die("Redirecting to update.php");
		      }
		      $twitter = $_POST['twitter'];
		      $twitchId = $_POST['twitch'];


		      $params = array();
		      $params['main'] = $main;
		      $params['location'] = $location;
		      //$params['vod'] = $matches[1];
		      $params['twitter'] = $twitter;
		      $params['twitch'] = $twitchId;
		      $params['facebook'] = $facebook;

		      $hasGfy = false;

		      if (isset($_POST['gfycat']) && $_POST['gfycat'] != '' ) {
		        $hasGfy = true;
		      }
		      if ($hasGfy) {
		        $gfyURL = remove_http($_POST['gfycat']);
		        $gfyID = grabGfyName($gfyURL);
		        if ($gfyID === '') {
		          header("Location: /update?str=url");
		          die("Redirecting to update.php");
		        }
		      }

		      if (preg_match("/\\s/", $params['twitter'])) {
		        header("Location: update.php?str=spaces");
		        die('redirecting');
		      }

		      if (preg_match("/\\s/", $params['twitch'])) {
		        header("Location: update.php?str=spaces");
		        die('redirecting');
		      }



		      if ($hasInfo) {
		        if (!empty($params)) {
		          $setString = "SET main ='" . $main . "'";
		        }

		        foreach ($params as $key => $item) {
		          if ($key != 'main' || $item != '') {
		            $setString .= "," . $key . "='" . $item . "'";
		          }
		        }


		        $query = "UPDATE userinfo " . $setString . "WHERE userid= " . $userID;

		        if (!$result = $mysqli->query($query)) {
		          die('Invalid query: ' . $mysqli->error);
		        } else {
		          header("Location: /update.php?str=success");
		        }

		      } else {

		        /*
		        $insertString = "(main";
		        foreach ($params as $key => $item) {
		          if ($key != 'main' || $item != '') {
		            $insertString .= "," . $key . "='" . $item . "'";
		          }
		        }
		        */

		        $query = "INSERT INTO userinfo (main, userid, facebook, location, twitch, vod, twitter) VALUES (:main, :userID, :facebook, :location, :twitch, :vod, :twitter);";
		        $query_params = array(
		          ':main' => $main,
		          ':userID' => $userID,
		          ':facebook' => $facebook,
		          ':location' => $location,
		          ':twitch' => $twitchId,
		          ':vod' => $vod,
		          ':twitter' => $twitter
		        );

		        try{
		          $stmt = $db->prepare($query);
		          $result = $stmt->execute($query_params);
		        } catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }

		      }
		          $query = "INSERT INTO usergif (userid, url) VALUES (:userID, :id);";
		          $query_params = array(
		            ':userID' => $userID,
		            ':id' => $gfyID
		          );
		          try{
		            $stmt = $db->prepare($query);
		            $result = $stmt->execute($query_params);
		          } catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }


		      header("Location: /update.php?str=success");
		    }
	}
?>