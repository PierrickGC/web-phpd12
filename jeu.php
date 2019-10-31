<?php
    session_start();
    require('includes/config.php');
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?php echo SITE_TITLE ?> - Game</title>
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
            <h5 class="card-title">Subsribe</h5>
            <p class="card-text">Just subscribe to the game.</p>
            <form method="post" action="participer.php">
                <div class="form-row">
                    <div class="col-12">
                        <input type="email" class="form-control" placeholder="eMail" name="gamemail">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name" name="gamefname">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name" name="gamelname">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</body>

</html>