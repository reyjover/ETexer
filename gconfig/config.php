
<?php

//config.php for google

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('728728130313-vgq0qfob5naoqrhgml5fqdlu5tehcbfk.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('Fr9TdYQVShXJXJkQ_5ZWovm5');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://endterm-exercise1.herokuapp.com/home.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//to start session on web page
session_start();

?>
