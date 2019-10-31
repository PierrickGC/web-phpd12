<?php
    session_start();
    require('includes/config.php');
    require('includes/functions.php');
    
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?php echo SITE_TITLE ?> - Participants</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php require('includes/header.php'); ?>
    <div class="container">
        <div class="calculator card">

            <input type="text" class="calculator-screen z-depth-1" value="" disabled />

            <div class="calculator-keys">

                <button type="button" class="operator btn btn-info" value="+">+</button>
                <button type="button" class="operator btn btn-info" value="-">-</button>
                <button type="button" class="operator btn btn-info" value="*">&times;</button>
                <button type="button" class="operator btn btn-info" value="/">&divide;</button>

                <button type="button" value="7" class="btn btn-light waves-effect">7</button>
                <button type="button" value="8" class="btn btn-light waves-effect">8</button>
                <button type="button" value="9" class="btn btn-light waves-effect">9</button>


                <button type="button" value="4" class="btn btn-light waves-effect">4</button>
                <button type="button" value="5" class="btn btn-light waves-effect">5</button>
                <button type="button" value="6" class="btn btn-light waves-effect">6</button>


                <button type="button" value="1" class="btn btn-light waves-effect">1</button>
                <button type="button" value="2" class="btn btn-light waves-effect">2</button>
                <button type="button" value="3" class="btn btn-light waves-effect">3</button>


                <button type="button" value="0" class="btn btn-light waves-effect">0</button>
                <button type="button" class="decimal function btn btn-secondary" value=".">.</button>
                <button type="button" class="all-clear function btn btn-danger btn-sm" value="all-clear">AC</button>

                <button type="button" class="equal-sign operator btn btn-default" value="=">=</button>

            </div>
        </div>
    </div>
</body>

</html>