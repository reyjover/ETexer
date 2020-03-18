<?php

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

$facebook = new \Facebook\Facebook([
  'app_id'      => '652008748951404',
  'app_secret'     => '28a4bbd10905fd92eca4df08fb892439',
  'default_graph_version'  => 'v2.10'
]);

?>