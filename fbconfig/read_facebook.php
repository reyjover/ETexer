<link rel="stylesheet" type="text/css" href="css/styles.css">
<?php
include('fbconfig.php');

$facebook_output = '';

$facebook_helper = $facebook->getRedirectLoginHelper();

if(isset($_GET['code'])){
 if(isset($_SESSION['access_token'])){
  $access_token = $_SESSION['access_token'];
 }else{
  $access_token = $facebook_helper->getAccessToken();
  $_SESSION['access_token'] = $access_token;
  $facebook->setDefaultAccessToken($_SESSION['access_token']);
 }
 $_SESSION['user_id'] = '';
 $_SESSION['user_name'] = '';
 $_SESSION['user_first_name'] = '';
 $_SESSION['user_last_name'] = '';
 $_SESSION['user_email_address'] = '';
 $_SESSION['user_image'] = '';
 $graph_response = $facebook->get("/me?fields=name,first_name,last_name,email", $access_token);
 $facebook_user_info = $graph_response->getGraphUser();
 if(!empty($facebook_user_info['id'])){
  $_SESSION['user_image'] = 'http://graph.facebook.com/'.$facebook_user_info['id'].'/picture';
 }
 if(!empty($facebook_user_info['name'])){
  $_SESSION['user_name'] = $facebook_user_info['name'];
 }
 if(!empty($facebook_user_info['name'])){
  $_SESSION['user_first_name'] = $facebook_user_info['first_name'];
 }
 if(!empty($facebook_user_info['name'])){
  $_SESSION['user_last_name'] = $facebook_user_info['last_name'];
 }
 if(!empty($facebook_user_info['email'])){
  $_SESSION['user_email_address'] = $facebook_user_info['email'];
 }
}else{
 // Get login url
    $facebook_permissions = ['email']; // Optional permissions
    $facebook_login_url = $facebook_helper->getLoginUrl('https://endterm-exercise1.herokuapp.com/', $facebook_permissions);  

       $facebook_login_url = '<a href="'.$facebook_login_url.'" class="btn btn-block btn-social btn-facebook"><span class="fa fa-facebook"></span> Sign in with Facebook </a>';
}

?>
