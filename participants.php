<?php
    session_start();
    require('includes/config.php');
    require('includes/functions.php');
    
    if(empty($_SESSION['username'])){
        header('Location: login.php');
    }
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?php echo SITE_TITLE ?> - Participants</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php require('includes/header.php'); ?>
    <div class="container">
        <div class="card-body">
            <h5 class="card-title">Participants</h5>
            <p class="card-text">List of all participants.</p>
            <?php
            $dir    = './participants/';
            $directory = scandir($dir);

            foreach ($directory as $showdir) {
                if($showdir != "." && $showdir != ".."){
                    $content = file_get_contents($dir.$showdir);
                    list($mail, $lastname, $firstname) = explode(';',$content);
                    echo "<p>$firstname $lastname : $mail</p>";
                }
            }
        ?>
        </div>
    </div>
</body>

</html>