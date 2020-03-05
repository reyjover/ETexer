<?php
$id = $_GET['id'];
$json = file_get_contents("http://rdapi.herokuapp.com/product/read_one.php?id=".$id);

$data = json_decode($json,true);
$details = array('records' => $data);
$list = $details['records'];

$value = $list;
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Kanit:800i|Oswald|Teko:600&display=swap" rel="stylesheet">
<div class="wrapper">
    <h1 class="header">  Product Overview </h1>

<table>
    <tr>
        <td class="label">Product</td>
        <td class="label">Description</td>
        <td class="label">Price</td>
        <td class="label">Category</td>
        <td colspan="2"> </td>
    </tr>

    <tr>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['description'];?></td>
        <td><?php echo $value['price'];?></td>
        <td><?php echo $value['category_name'];?></td>
        <td class="label"> <a href="index.php?loadnav=update&&id=<?php echo $id ?>"> Update </a> </td>
        <td class="label">  <a href="index.php?loadnav=delete&&id=<?php echo $id ?>">Delete</a></td>
    </tr>
    

</table>
</div>
