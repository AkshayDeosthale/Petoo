<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('323638919225-i0bp5f5p1trs8cgmc1q9llsdo11socm8.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('Hw70LTpHeyOTZE5UcCz2Y5j7');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>