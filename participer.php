<?php
    session_start();
    require('includes/config.php');
    require('includes/functions.php');
    
    if(isset($_POST['gamemail']) && isset($_POST['gamefname']) && isset($_POST['gamelname'])){
        $gamemail = secureInput($_POST['gamemail']);
        $gamefname = secureInput($_POST['gamefname']);
        $gamelname = secureInput($_POST['gamelname']);

        $filename = "./participants/".$gamemail.'.txt';

        if(file_exists($filename) == true){
            $error = "This email is already subscribed !";
        }else{
            $content = $gamemail.";".$gamelname.";".$gamefname;
            file_put_contents($filename, $content);
        }
    }else{
        header('Location: jeu.php');
    }
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?php echo SITE_TITLE ?> - Participate</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php require('includes/header.php'); ?>
    <div class="container">
        <h1>Thanks <?php echo $gamefname ?> for subscribing to the game</h1>
        <p>You subrisbed with <?php echo $gamemail ?> for <?php echo $gamefname ?> <?php echo $gamelname ?></p>
        <?php 
            if(isset($error)){echo "<p>".$error."</p>";} 
        ?>
    </div>
</body>

</html>