<?php 
$loadnav = (isset($_GET['loadnav']) && $_GET['loadnav'] != '') ? $_GET['loadnav']: '';
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
                            case 'create':
                            require_once 'form_create.php';
                            break;
                            case 'details':
                            require_once 'product_details.php';
                            break;
                            default: 
                            require_once('show.php');
                        }
                        ?>
                        </div>
                  </diV>

    </body>
</html>
