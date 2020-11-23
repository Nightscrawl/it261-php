<?php
// config file that links to creds.php


ob_start();  // prevents header errors before reading the whole page

define('DEBUG', 'TRUE');  // shows errors

include('creds.php');








// placed at the very bottom of the config file
function myerror($myFile, $myLine, $errorMsg) {
    if( defined('DEBUG') && DEBUG ) {
        echo 'Error in file: <b>' .$myFile. '</b> on line: <b>' .$myLine. '</b>';
        echo 'Error message: <b>' .$errorMsg. '</b>';
        die();
    } else {
        echo 'Houston, we have a problem!';
        die();
    }
}