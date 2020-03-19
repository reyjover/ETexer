<?php
$loadnav = (isset($_GET['loadnav']) && $_GET['loadnav'] != '') ? $_GET['loadnav']: '';
$json = file_get_contents("http://rdapi.herokuapp.com/product/read.php");

$data = json_decode($json,true);


$search= $_POST['search'];

if(isset($search)){
	
	$jsearch = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s='.$search);
	$res = json_decode($jsearch,true);

	$list = $res['records'];
	
 }else{
	$list = $data['records'];
 }
?>
<html>
<head> 
<title> Endterm | Final Exam </title> 
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Kanit:800i|Oswald|Teko:600&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrapper">
        <div class="nav"> 
                        <ul class="nav-menu"> 
                        <li> <a href="home.php?loadnav=readprod"> PRODUCTS </a> </li>
                        <li> <a href="home.php?loadnav=readcat"> CATEGORIES </a> </li>
                        <li> <a href="home.php?loadnav=create"> PRODUCT (+) </a> </li>
                        </ul>
               </div>

               <div class="content">
               <?php
               switch($loadnav){
                            case 'readprod':
                            require_once 'show.php';
                            break;
                            case 'readcat':
                            require_once 'show_categories.php';
                            break;
                            case 'pro_update':
                            require_once 'pro_update.php';
                            break;
                            case 'pro_create':
                            require_once 'pro_create.php';
                            break;
                            case 'create':
                            require_once 'form_create.php';
                            break;
                            case 'update':
                            require_once 'form_create.php';
                            break;
                             case 'delete':
                            require_once 'pro_delete.php';
                            break;
                            case 'details':
                            require_once 'product_details.php';
                            break;
                            default: 
                            require_once('home.php');
                                break;
                        }
                        ?>
               </div>
	 <h1><a href="logout_google.php" onClick="location.href='logout_facebook.php'">Logout</a></h1>
               </div>

 </body>
</html>
