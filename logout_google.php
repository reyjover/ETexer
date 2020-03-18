Learn more or give us feedback
<?php

include('gconfig/config.php');

$google_client->revokeToken();
session_destroy();
header('location:index.php');

?>