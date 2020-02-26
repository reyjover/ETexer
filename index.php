<?php 
$loadnav = (isset($_GET['loadnav']) && $_GET['loadnav'] != '') ? $_GET['loadnav']: '';
?>
<html> 
    <head>
      <title>  Endterm Activity </title>
    </head>
    <body>
                        <ul> 
                        <li> <a href="index.php?loadnav=readprod"> Show </a> </li>
                        <li> <a href="index.php?loadnav=readcat"> Show Categories </a> </li>
                        <li> <a href="index.php?loadnav=create"> Create  </a> </li>
                        <li> <a href="index.php?loadnav=delete"> Delete  </a> </li>
                        </ul>
               
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
                            case 'delete':
                            require_once 'form_delete.php';
                            break;
                            case 'details':
                            require_once 'product_details.php';
                            break;
                            default: 
                            require_once('home.php');
                        }
                        ?>

    </body>
</html>
