<?php
    session_start();
    require('includes/config.php');

    if(!empty($_SESSION['username'])){
        header('Location: compte.php');
    }

    if(isset($_GET['error'])){
        $error = "Bad credentials";
    }
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?php echo SITE_TITLE ?> - Login</title>
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
            <h5 class="card-title">Login</h5>
            <p class="card-text">Login to the dashboard.</p>
            <form method="post" action="compte.php">
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <?php 
                    if(isset($error)){ echo "<p>".$error."</p>";} 
                ?>
            </form>
        </div>
    </div>
</body>

</html>