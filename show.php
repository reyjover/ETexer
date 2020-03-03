<?php
$json = file_get_contents("http://rdapi.herokuapp.com/product/read.php");

$data = json_decode($json,true);
$list = $data['records'];

if(isset($search)){
	$jsearch = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s='.$search);
	$res = json_decode($jsearch,true);

	$readprod = $res['records'];
	
 }else{
	$readprod = $data['records'];
 }
?>

<h1 class="header"> Products Overview </h1>
<form action="index.php?page=readprod" method="POST">
	Search: <input type="text" name="search" placeholder="Search Product Name">
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
        <td><a class="productlinks"href="product_details.php?id=<?php echo $value['id'];?>"><?php echo $value['name'];?></a></td>
        <td><?php echo $value['price'];?></td>
    </tr>
<?php
}
?>
</table>
