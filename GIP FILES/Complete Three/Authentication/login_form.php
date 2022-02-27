<?php require( '../config.php' ) ?>

<!DOCTYPE html>
<html>
<head>
    <title>Aanmelden</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- LOCAL [ Bootstrap + Fontawesome + Datatables ] LOCAL -->

    <script src="<?php echo SITE_URL ?>/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo SITE_URL ?>/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo SITE_URL ?>/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo SITE_URL ?>/css/fontawesome.all.min.css" type="text/css"/>

    <!--[ MY WEBSHOP ] -->

    <link rel="stylesheet" href="<?php echo SITE_URL ?>/css/webshop.css" type="text/css"/>
</head>
<body>
      
    <?php 
        $login_form = true;
        require( SITE_DIR.'navbar.php' ); 
    ?>

    <main class="container">
        <div class="col-8">
            <div class="card">
                <div class="card-header">Aanmelden</div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="inputEmail">Gebruikersnaam</label>
                            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="USERNAME">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Paswoord</label>
                            <input type="password" class="form-control" id="inputPassword" name="PASSWORD">
                        </div>
                        <?php 
                            if( isset($_SESSION['ALERT_CODE']) and $_SESSION['ALERT_CODE']=='ERROR' ) 
                            { 
                                echo '<p class="alert-danger">'.$_SESSION['ALERT_BODY'].'</p>';

                                $_SESSION['ALERT_CODE'] = 0;
                                $_SESSION['ALERT_HEAD'] = '';
                                $_SESSION['ALERT_BODY'] = '';
                            } 
                        ?>
                        <button type="submit" class="btn btn-primary">Aanmelden</button>
                    </form>
                </div>
            </div>
        </div>
    </main> <!--/ container -->
        
    <?php require( SITE_DIR.'/includes/footer.php' ); ?>

</body>
</html>