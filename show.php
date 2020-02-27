<?php
$json = file_get_contents("http://rdapi.herokuapp.com/product/read.php");

$data = json_decode($json,true);
$list = $data['records'];


?>

<h1 class="header"> Products Overview </h1>

<table>
    <tr>
        <td class="label">Product ID</td>
        <td class="label">Product</td>
        <td class="label">Price</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['id'];?></td>
        <td><a class="productlinks"href="product_details.php?id=<?php echo $value['id'];?>"><?php echo $value['name'];?></a></td>
        <td><?php echo $value['price'];?></td>
    </tr>
<?php
}
?>
</table>
