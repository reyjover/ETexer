<?php 
$loadnav = (isset($_GET['loadnav']) && $_GET['loadnav'] != '') ? $_GET['loadnav']: '';


include('gconfig/read_google.php');

?>
<html> 
    <head>
      <title>  Endterm Activity </title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link href="https://fonts.googleapis.com/css?family=Kanit:800i|Oswald|Teko:600&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="wrapper">
            <div class="nav"> 
                        <ul class="nav-menu"> 
                        <li> <a href="index.php?loadnav=readprod"> PRODUCTS </a> </li>
                        <li> <a href="index.php?loadnav=readcat"> CATEGORIES </a> </li>
                        <li> <a href="index.php?loadnav=create"> PRODUCT (+) </a> </li>
                        <li> <a href="google_logout.php" onClick="location.href='facebook_logout.php'">Logout</a> </li>
                        </ul>
               </div>

               <div class="content">
                        
                        <?php 
                          if($login_button == '')
                          {
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
                            require_once('show.php');
                        }
                      }
                      else{
                            echo $login_button;
                       }
                        ?>
                        
                        </div>
                  </diV>
                 
    </body>
</html>
