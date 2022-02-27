<?php 
    require( '../config.php' );

    session_destroy();
    session_start();

    $_SESSION['ALERT_CODE'] = 'SUCCESS';
    $_SESSION['ALERT_HEAD'] = 'Afmelden';
    $_SESSION['ALERT_BODY'] = 'U bent niet meer aangemeld!';

    header('location:'.SITE_URL);
?>