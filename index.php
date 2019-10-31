<?php
    session_start();
    require('includes/config.php');
    if(empty($_COOKIE["indexOpen"])){
        setcookie("indexOpen", 1);
    }else{
        $actualvalue = $_COOKIE["indexOpen"]+1;
        setcookie("indexOpen", $actualvalue);
    }
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?php echo SITE_TITLE ?> - Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php require('includes/header.php'); ?>
    <div class="card-body">
        <h5 class="card-title">Welcome to <?php echo SITE_TITLE ?></h5>
        <p class="card-text">This is a IT Akademy project.</p>
        <p>This is the <h2><?php echo $_COOKIE['indexOpen']; ?></h2> times you visit this page</p>
    </div>
</body>

</html>