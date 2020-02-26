<?php
$id = $_GET['id'];
$json = file_get_contents("http://rdapi.herokuapp.com/product/read_one.php?id=".$id);

$data = json_decode($json,true);
$details = array('records' => $data);
$list = $details['records'];

$value = $list;
?>

<h1> Products Overview </h1>

<table border="1px">
    <tr>
        <td>Product</td>
        <td>Description</td>
        <td>Price</td>
        <td>Category ID</td>
        <td colspan="2"> </td>
    </tr>

    <tr>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['description'];?></td>
        <td><?php echo $value['price'];?></td>
        <td><?php echo $value['category_id'];?></td>
        <td> <a href="form_update.php?id=<?php echo $id ?>"> Update </a> </td>
        <td> <a href="pro_delete.php?id=<?php echo $id ?>">Delete</a></td>
    </tr>
    

</table>
