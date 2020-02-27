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
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['category_id'];?></td>
        <td><?php echo $value['category_name'];?></td>
    </tr>
<?php
}
?>
</table>

