<?php
$json = file_get_contents("http://rdapi.herokuapp.com/product/read.php");

$data = json_decode($json,true);
$list = $data['records'];


?>

<h1> Products Overview </h1>

<table border="1px">
    <tr>
        <td>Product</td>
        <td>Price</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['price'];?></td>
    </tr>
<?php
}
?>
</table>
