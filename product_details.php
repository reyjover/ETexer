<?php
$json = file_get_contents("http://rdapi.herokuapp.com/product/read_one.php");

$data = json_decode($json,true);
$list = $data['records'];


?>

<h1> Products Overview </h1>

<table border="1px">
    <tr>
        <td>Product</td>
        <td>Description</td>
        <td>Price</td>
        <td>Category ID</td>
    </tr>
<?php
    <tr>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['description'];?></td>
        <td><?php echo $value['price'];?></td>
        <td><?php echo $value['category_id'];?></td>
    </tr>
?>
</table>
