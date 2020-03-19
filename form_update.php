
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
<link rel="stylesheet" type="text/css" href="css/styles.css">
      <link href="https://fonts.googleapis.com/css?family=Kanit:800i|Oswald|Teko:600&display=swap" rel="stylesheet">
<br/>
<div class="wrapper">
<form action="home.php?loadnav=pro_update&&id=<?php echo $id ?>" method="POST">
	<div class="formlabels"> Name: </div> <input type="text" name="name" value="<?php echo $result['name'];?>"/><br/>
	<div class="formlabels">Description:</div> <textarea name="description"><?php echo $result['description']; ?></textarea><br/><br/>
	<div class="formlabels">Price:</div> <input type="number" name="price" value="<?php echo $result['price']; ?>"/><br/><br/>
	<div class="formlabels">Category:</div><select  name="category">
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
