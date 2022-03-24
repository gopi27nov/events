<?php
session_start();

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_DATABASE","events");
define("SITE_URL","http://localhost/events/");

include_once("dataBaseConnection.php");

$db = new dataBaseConnection();

function base_url($slug){
    echo SITE_URL.$slug;
}

function validateInput($db, $input){
    return mysqli_real_escape_string($db, $input);
}

function redirect($message, $page){
    $redirectTo = SITE_URL.$page;
    $_SESSION['message'] = "$message";
    header("Location: $redirectTo");
    exit(0);
}
?>