<?php 
$loadnav = (isset($_GET['loadnav']) && $_GET['loadnav'] != '') ? $_GET['loadnav']: '';
?>
<html> 
    <head>
      <title>  Endterm Activity </title>
    </head>
    <body>
                        <ul> 
                        <li> <a href="index.php?loadnav=read"> Show </a> </li>
                        <li> <a href="index.php?loadnav=create"> Create  </a> </li>
                        <li> <a href="index.php?loadnav=delete"> Delete  </a> </li>
                        </ul>
               
                        <?php 
                        switch($loadnav){
                            case 'read':
                            require_once 'show.php';
                            break;
                            case 'create':
                            require_once 'form_create.php';
                            break;
                            case 'delete':
                            require_once 'form_delete.php';
                            break;
                        }
                        ?>

    </body>
</html>
