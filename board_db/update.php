<?php
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'bab');

	$sql = "SELECT * FROM topic WHERE id =".$_GET['id']." ";
	$res = mysqli_query($mysqli, $sql);
	
	if($res === false){
		echo mysqli_error($mysqli);
	}

	$row = mysqli_fetch_array($res);	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<h2>update page</h2>
	<form method="post" action="update_ok.php">
		<p><input type="text" name="title" placeholder="title" value="<?= $row['title'] ?>"></p>
		<p><textarea placeholder="description" name="description"><?= $row['description'] ?></textarea></p>
		<input type="hidden" name="number_id" value="<?= $_GET['id'] ?>">
		<input type="submit">
	</form>
</body>
</html>