<?php
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'bab');
	$sql = 'select * from author';
	$res = mysqli_query($mysqli, $sql);
	$author_name = '';
	while($row = mysqli_fetch_array($res)){
		$author_name = $author_name."<option value=".$row['id'].">".$row['name']."</option>";	
	}

	if($res === false){
		echo mysqli_error($mysqli);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<h2>create page</h2>
	<form method="post" action="create_ok.php">
		<p><input type="text" name="title" placeholder="title"></p>
		<p><textarea placeholder="description" name="description"></textarea></p>
		<p>
			<select name="author_name">
				<?= $author_name ?>
			</select>
		</p>
		<input type="submit">
	</form>
</body>
</html>