<?php

//  Locatie vd bestanden
//  --------------------------------

    define( 'SITE_DIR', str_replace( "\\", '/', pathinfo(__FILE__,PATHINFO_DIRNAME) ) );
                        // = de volledige directorynaam vd plaats waar het config.php script staat

    define( 'SITE_URL', 'http://'.$_SERVER['HTTP_HOST'].'/'.str_replace( $_SERVER['DOCUMENT_ROOT'], '', SITE_DIR ) );
                        // = de url die we moeten ingeven in de browser om op deze website uit te komen

    define( 'ACTIVE_PAGE', pathinfo($_SERVER['SCRIPT_NAME'],PATHINFO_FILENAME) );
                        // = de naam vh uit te voeren script


//  Session starten en initialiseren
//  --------------------------------

    session_start();
        
//  Connectie met database initialiseren
//  ------------------------------------

    require('pillar.php');

    try 
    {
        $dbh = new PDO( DB_CONNECTION, DB_USERNAME, DB_PASSWORD );
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e)
    {
        echo 'Error with connection to database.<br>'.$e->getMessage();
        die();
    }

?>