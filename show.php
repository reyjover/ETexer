<?php
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

<h1 class="header"> Products Overview </h1>

	<form action="index.php?loadnav=readprod" method="POST">
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
        <td><a class="productlinks"href="index.php?loadnav=details&&id=<?php echo $value['id'];?>"><?php echo $value['name'];?></a></td>
        <td><?php echo $value['price'];?></td>
    </tr>
<?php
}
?>
</table>
 <h1><a href="logout_google.php" onClick="location.href='logout_facebook.php'">Logout</a></h1>
