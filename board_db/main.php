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

	if(isset($_GET[id])){
		//mysqli_real_escape_string(); 보안용 코드로 사용자가 입력하는 코드가 만약 sql문이면 그걸 text로 변경 한다 
		$filter = mysqli_real_escape_string($mysqli, $_GET['id']);
		$sql = 'select * from topic where id ='.$filter.' order by id desc';	
		$res = mysqli_query($mysqli, $sql);
		$content = mysqli_fetch_array($res);
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
	<p><a href="create.php">create</a></p>
</body>
</html>