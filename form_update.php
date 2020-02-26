
<?php
	$id = $_GET['id'];
	$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
	$data = json_decode($json,true);
	$details = array('records' => $data);
	$result = $details['records'];
	//category
	$jsonCat = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$catData = json_decode($jsonCat,true);
	$category = $catData['records'];
?>
<html>
<br/>
<br/>
<br/>
<div>
<form action="pro_update.php?id=<?php echo $id ?>" method="POST">
	Name:<br/><input type="text" name="name" value="<?php echo $result['name'];?>"/><br/>
	Description:<br/><textarea name="description"><?php echo $result['description']; ?></textarea><br/>
	Price:<br/><input type="number" name="price" value="<?php echo $result['price']; ?>"/><br/><br/>
	Category:<select  name="category">
		<option value="<?php echo $result['category_id'];?>"><?php echo $result['category_name'];?></option>
	<?php
      foreach($category as $cview){
    ?>
		<option value="<?php echo $cview['id']?>"><?php echo $cview['name']?></option>
    <?php
      }
    ?>
	</select>
	<br/><br/><input type="submit" name="submit" value="Done"/>
</form>
</div>
</html>
