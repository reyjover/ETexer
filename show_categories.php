<?php
$json = file_get_contents("http://rdapi.herokuapp.com/category/read.php");

$data = json_decode($json,true);
$list = $data['records'];


?>

<h1 class="header"> Categories </h1>

<table>
    <tr>
        <td class="label">Category ID</td>
        <td class="label">Category Name</td>
        <td class="label">Description</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['id'];?></td>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['description'];?></td>
    </tr>
<?php
}
?>
</table>

