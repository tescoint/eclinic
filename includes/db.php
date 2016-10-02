<?php
// Trying to connect to this project database, firstly I will be defining/ assigning the constants.
define('DB_NAME', 'eclinic');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
// Now the constants has been defined mving on to the next step which is connecting/talking with the database.
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//The message below will only show if an error occurs when trying to cnnect to the DATABASE
if (!$dbc){
    die("Unable to locate ELINIC DATABASE, PLEASE REFRESH THE PAGE, IF THE PROBLEM PERSIST CONTACT YAAT CREW ");
}
date_default_timezone_set('Africa/Lagos');

/* 
 * Copyright of YAAT CREW
 * This file was created by CEO YAAT CREW TES SAL
 * CC: TS.
 */

