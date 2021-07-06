<?php
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'bab');
	$sql = 'select * from topic order by id desc';
	$res = mysqli_query($mysqli, $sql);
	
	if($res === false){
		echo mysqli_error($mysqli);
	}

	$list = '';
	while($row = mysqli_fetch_array($res)){
		$list = $list. "<li><a href='main.php?id={$row['id']}'>{$row['title']}</a></li>";
	}

	$content = array(
		'title' => 'hello',
		'description' => 'world'
	);

	$update_link ='';
	$delete_link = '';


	if(isset($_GET[id])){
		//mysqli_real_escape_string(); 보안용 코드로 사용자가 입력하는 코드가 만약 sql문이면 그걸 text로 변경 한다 
		$filter = mysqli_real_escape_string($mysqli, $_GET['id']);
		$sql = 'select * from topic left join author on topic.author_id = author.id  where topic.id ='.$filter.'  order by topic.id desc';
		$res = mysqli_query($mysqli, $sql);

		$content = mysqli_fetch_array($res);
		$update_link = "<p><a href='update.php?id=".$_GET['id']."'>update</a></p>";
		$delete_link = '<form action="delete_ok.php" method="post">
							<input type="hidden" name="id" value='.$_GET["id"].'>
							<input type="submit" value="delete">
						</form>';				

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<h2><a href='main.php'>main page</a></h2>
	<ol>
		<?= $list; ?>
	</ol>
	<h3><?= $content['title'] ?></h3>
	<?= $content['description'] ?>
	<p><?= $content['name'] ?></p>
	<p><a href="create.php">create</a></p>
	<?= $update_link ?>
	<?= $delete_link?>
	

</body>
</html>

