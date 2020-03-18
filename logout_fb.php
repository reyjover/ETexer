Learn more or give us feedback
<?php

include('facebook_config/config_fb.php');

$google_client->revokeToken();
session_destroy();
header('location:index.php');

?>