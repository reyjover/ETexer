<?php
	//category
	$jsonCat = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$catData = json_decode($jsonCat,true);
	$category = $catData['records'];
?>
<html>
<form action="index.php?loadnav=pro_create" method="POST">
	<br/>
	<div class="formlabels"> Name: </div><input type="text" name="name" placeholder="Name"/><br/><br/>
	<div class="formlabels"> Description: </div><textarea name="description" placeholder="Item Description"/></textarea><br/><br/>
	<div class="formlabels"> Price:  </div><input type="number" name="price" placeholder="Price"/><br/><br/>
	<div class="formlabels"> Category: </div><select name="category">
		<option value=""> Category </option>
	<?php
      foreach($category as $cview){
    ?>
		<option value="<?php echo $cview['id']?>"><?php echo $cview['name']?></option>
    <?php
      }
    ?>
	</select>
	<br/>
	<br/>
	<input type="submit" name="submit" value="Create"/>
</form>
</html>
