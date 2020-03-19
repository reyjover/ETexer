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
<title> Endterm Activity </title> 
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
        <div class="nav"> 
                        <ul class="nav-menu"> 
                        <li> <a href="show.php?loadnav=readprod"> PRODUCTS </a> </li>
                        <li> <a href="show.php?loadnav=readcat"> CATEGORIES </a> </li>
                        <li> <a href="show.php?loadnav=create"> PRODUCT (+) </a> </li>
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
                            require_once('show.php');
                                break;
                        }
                        ?>
               </div>
<h1 class="header"> Products Overview </h1>

	<form action="show.php?loadnav=readprod" method="POST">
		<input type="text" name="search" placeholder="Search Product Name">
			<input type="submit" name="submit" value="Search">
		</form>
<table>
    <tr>
        <td class="label">Product</td>
        <td class="label">Price</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><a class="productlinks"href="show.php?loadnav=details&&id=<?php echo $value['id'];?>"><?php echo $value['name'];?></a></td>
        <td><?php echo $value['price'];?></td>
    </tr>
<?php
}
?>
</table>
 <h1><a href="logout_google.php" onClick="location.href='logout_facebook.php'">Logout</a></h1>
 </body>
</html>