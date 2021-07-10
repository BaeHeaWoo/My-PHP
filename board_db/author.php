<?php
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'bab');
	$sql = "select * from author";
	$res = mysqli_query($mysqli, $sql);
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
	<h2><a href='main.php'>main page</a></h2>
	<p><a href="main.php">topic</a></p>
	<table border="1">
		<tr>
			<td>id</td>
			<td>name</td>
			<td>profile</td>
			<td>수정</td>
			<td>삭제</td>
		</tr>
		<?php 
			while($row = mysqli_fetch_array($res)){ 
			$filterd = array(
				'id' => htmlspecialchars($row['id']),
				'name' => htmlspecialchars($row['name']),
				'profile' => htmlspecialchars($row['profiile'])
			)
		?>
			<tr>
				<td><?= $filterd['id']?></td>
				<td><?= $filterd['name']?></td>
				<td><?= $filterd['profile']?></td>
				<td><a href="author.php?id=<?=$filterd['id']?>">update</a></td>
				<td>
					<form action="author_delete_ok.php" method="post" >
						<input type="hidden" name="id" value=<?= $filterd['id'] ?>>
						<input type="submit" value="delete">
					</form>
				</td>
			</tr>		
		<?php } ?>
	</table>
	<?php

		$escaped = array(
			'name' => '',
			'profile' => ''
		);

		$lable = "create";
		$link = "author_create_ok.php";
		$form_id = '';
		if(isset($_GET['id'])){
			$filter_id = mysqli_real_escape_string($mysqli, $filterd['id']);
			settype($filter_id, 'integer');
			$sql = "select * from author where id ={$filter_id}";
			$res = mysqli_query($mysqli, $sql);

			if($res === false){
				echo mysqli_error($mysqli);
			}

			$row = mysqli_fetch_array($res);
			$escaped['name'] = htmlspecialchars($row['name']);
			$escaped['profile'] = htmlspecialchars($row['profiile']);
			$lable = 'update';
			$link = "author_update_ok.php";
			$form_id = '<input type="hidden" name="id" value='.$filter_id.'>';

		}	


	?>
	<form method="post" action=<?= $link ?>>
		<?= $form_id ?>
		<p><input type="text" name="name" placeholder="name" value=<?= $escaped['name'] ?>></p>
		<p><textarea name="profile" placeholder="profile"><?= $escaped['profile'] ?></textarea></p>
		<p><input type="submit" value=<?= $lable ?>></p>

	</form>
</body>
</html>

