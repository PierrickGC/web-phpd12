<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><?php echo SITE_TITLE ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if($_SERVER['PHP_SELF']=="/index.php"){echo "active";}?>">
                <a class="nav-link" href="index.php">Home <?php if($_SERVER['PHP_SELF']=="/index.php"){echo '<span class="sr-only">(current)</span>';}?></a>
            </li>
            <li class="nav-item <?php if($_SERVER['PHP_SELF']=="/jeu.php"){echo "active";}?>">
                <a class="nav-link" href="jeu.php">Game <?php if($_SERVER['PHP_SELF']=="/jeu.php"){echo '<span class="sr-only">(current)</span>';}?></a>
            </li>
        </ul>
        <ul class="navbar-nav mr-sm-2">
            <?php
            if(isset($_SESSION['username'])){
            ?>
                <li class="nav-item <?php if($_SERVER['PHP_SELF']=="/compte.php"){echo "active";}?>">
                    <a class="btn btn-secondary" href="compte.php">Account <?php if($_SERVER['PHP_SELF']=="/compte.php"){echo '<span class="sr-only">(current)</span>';}?></a>
                </li>
                <li class="nav-item <?php if($_SERVER['PHP_SELF']=="/disconnect.php"){echo "active";}?>">
                    <a class="btn btn-danger" href="disconnect.php">Disconnect <?php if($_SERVER['PHP_SELF']=="/disconnect.php"){echo '<span class="sr-only">(current)</span>';}?></a>
                </li>
            <?php
            }else{
            ?>
                <li class="nav-item <?php if($_SERVER['PHP_SELF']=="/login.php"){echo "active";}?>">
                    <a class="btn btn-secondary" href="login.php">Login <?php if($_SERVER['PHP_SELF']=="/login.php"){echo '<span class="sr-only">(current)</span>';}?></a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</nav>