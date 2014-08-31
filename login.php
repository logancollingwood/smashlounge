<?php 
    require("static/config.php");
    require("techs/init.php");
    $loggedIn = false;
    

    if(!empty($_SESSION['user'])) {
        $loggedIn = true;
    }
    if($loggedIn) {
        header("Location: users.php?username=" . $_SESSION['user']['username']);
        die("Redirecting to index.php"); 
    }

    $submitted_username = ''; 

    if(!empty($_POST)){ 
        $query = " 
            SELECT 
                id, 
                username, 
                password, 
                salt
            FROM users 
            WHERE 
                username = :username 
        "; 
        $query_params = array( 
            ':username' => $_POST['username'] 
        ); 
         
        try{ 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        $login_ok = false; 
        $row = $stmt->fetch(); 
        if($row){ 
            $check_password = hash('sha256', $_POST['password'] . $row['salt']); 
            for($round = 0; $round < 65536; $round++){
                $check_password = hash('sha256', $check_password . $row['salt']);
            } 
            if($check_password === $row['password']){
                $login_ok = true;
            } 
        } 

        if ($login_ok) { 
            unset($row['salt']); 
            unset($row['password']); 
            $_SESSION['user'] = $row;
            header("Location: update.php"); 
            die("Redirecting to: secret"); 
        } else { 
            header("Location: login.php?str=failed"); 
            print("Login Failed."); 
            $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'); 
        } 
    }
    $submit = isset($_GET['str'])       ? trim($_GET['str'])       : "";


    function alertStatus($submit) {
        if ($submit == 'logout') {
            echo "<div class='alert alert-success alert-dismissable' role='alert'>You have been successfully logged out.";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        } else if ($submit == 'taken') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Woops! Looks like that username is taken!";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        } else if ($submit == 'failed') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Woops! Look like the information you entered is incorrect.";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        } else if ($submit == 'login') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Woops! You need to be logged in to access that page.";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        }
    }
?>  
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="static/css/login.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <link rel="shortcut icon" href="/img/favicon.png">
    <script type="text/javascript" src="http://test.gfycat.com/gfycat_test_june25.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
        <div class='container-fluid'>

    <?php 
        createNavBar();
    ?>

    

    <div class='row'>

        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar turnup">
            <li class="home"><a href="/"><span class='glyphicon glyphicon-home pull-left'></span>&nbsp;Home</a></li>
            <li class="home"><a href="/lounge.php"><span class='glyphicon glyphicon-globe pull-left'></span>&nbsp;Lounge</a></li>
            <li class='home'><a href='/users.php'><span class='glyphicon glyphicon-user pull-left'></span>&nbsp;Users</a></li>
            <?php 
              makeCollapseNav("tech", $dataTech, 'out', $char, $tech, '');
              makeCollapseNav("char", $dataChar, 'out', $char, $tech, '');
            ?>
          </ul>

          <div class='row loginbox'>

            <div class='row'>
              <div class='col-md-12'>
                <ul class='nav nav-sidebar loginbox'>
                 <li class="home login active"><a href="/login"><span class='glyphicon glyphicon-send pull-left'></span>&nbsp;Log in</a></li>
                </ul>
              </div>
            </div>

            <?php if ($loggedIn) { ?>
                <div class='row'>
                  <div class='col-md-6'>
                    <ul class='nav nav-sidebar loginbox'>
                      <li class="home login"><a href="/update">&nbsp;Update</a></li>
                    </ul>
                  </div>
                  <div class='col-md-6'>
                    <ul class='nav nav-sidebar loginbox'>
                      <li class="home login"><a href="/static/logout">&nbsp;logout</a></li>
                    </ul>
                  </div>
                </div>
            <?php } ?>

          </div>
        </div>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

                    <form action="login" method="post" class="form-signin" role="form">
                        <h2 class="form-signin-heading">Please sign in</h2>
                        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <button class="btn btn-lg btn-primary btn-block SL bttn" type="submit">Sign in</button>
                    </form>

                    <?php 
                        if ($submit) {
                            alertStatus($submit);
                        }
                    ?>
                
        </div>

        

  </div>

    
            
</div> <!-- CONTAINER -->
</body>
</html>