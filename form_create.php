<?php
	//category
	$jsonCat = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$catData = json_decode($jsonCat,true);
	$category = $catData['records'];
?>
<html>
<form action="pro_create.php" method="POST">
	Name:<input type="text" name="name" placeholder="Enter Product Name"/><br/><br/>
	Description:<textarea name="description" placeholder="Enter Item Description"/></textarea><br/><br/>
	Price: <input type="number" name="price" placeholder="Enter Product Price"/><br/><br/>
	Category:<select name="category">
		<option value="">--Select Category--</option>
	<?php
      foreach($category as $cview){
    ?>
		<option value="<?php echo $cview['id']?>"><?php echo $cview['name']?></option>
    <?php
      }
    ?>
	</select>
	<input type="submit" name="submit" value="Create"/>
</form>
</html>
