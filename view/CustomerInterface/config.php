<?php

require_once '../../vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('352542689533-ff8kqroo1s6hbtk02p11lofkp06kf8ot.apps.googleusercontent.com');

$google_client->setClientSecret('IGypphyqaQxf7z6yohSOk8aE');

$google_client->setRedirectUri('http://localhost/ems/view/EventOrganizerInterface/Login.php');

$google_client->addScope('email');

$google_client->addScope('profile');

session_start();


?>