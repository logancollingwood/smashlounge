<?php 
    require("static/config.php");
    require("../techs/init.php");
    require("static/getSubmits.php");
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

        if($login_ok){ 
            unset($row['salt']); 
            unset($row['password']); 
            $_SESSION['user'] = $row;  
            //echo "chill";
            header("Location: secret.php"); 
            die("Redirecting to: secret"); 
        } 
        else{ 
            print("Login Failed."); 
            $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'); 
        } 
    }
    $submit = isset($_GET['str'])       ? trim($_GET['str'])       : "";


    function alertStatus($submit) {
        if ($submit == 'success') {
            echo "<div class='alert alert-success alert-dismissable' role='alert'>Congratulations! Your account has been created.";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        } else if ($submit == 'taken') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Woops! Looks like that username is taken!";
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
    <link href="../css/custom.css" rel="stylesheet" media="screen">
    <link href="../css/dashboard.css" rel="stylesheet">
    <link rel="shortcut icon" href="/img/favicon.png">
    <script type="text/javascript" src="http://test.gfycat.com/gfycat_test_june25.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
        <div class='container-fluid'>

    <?php 
        createNavBar('register');
    ?>

    

    <div class='row'>

        <div class="col-sm-3 col-md-2 sidebar">
            <form action="index" method="post" class="form-signin" role="form">
                <h2 class="form-signin-heading">Please sign in</h2>
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block SL" type="submit">Sign in</button>
            </form>

            <?php 
                if ($submit) {
                    alertStatus($submit);
                }
            ?>
        </div>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <div class='jumbotron full'>
                    <h1 class='hddr2'> Vote on some Gifs!</h1>
                </div>
            <?php 
                $column = 0;
                $width = 2;
                
                echo "<div class='row'>";
                  foreach ($gifs as $tmpGif) {
                    if ($column >= $width) {
                      $column = 0;
                      echo "</div>";
                      echo "<div class='row'>";
                    }
                    echo "<div class='col-md-6' id='" . $tmpGif['id'] . "'>";
                        echo "<div class='panel transparent'>";
                          echo "<div class='panel-body'>";
                            echo "<img class='gfyitem' data-expand=true data-id='" . $tmpGif['url'] . "'/>";
                            
                           echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    $column++;

                  }
                  echo "</div>";
              ?>
        
        </div>

        

  </div>

    
            
</div> <!-- CONTAINER -->
</body>
</html>