<?php
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'board');
	$sql = "select * from board order by id desc";
	$res = mysqli_query($mysqli, $sql);

	if($res === false){
		echo mysqli_error($mysqli);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<th>글 번호</th>
			<th>글 제목</th>
			<th>작성일</th>
		</tr>	
		<?php while($row = mysqli_fetch_array($res)){ ?>	
		<tr>
			<td><?= $row['id'] ?></td>
			<td><?= $row['title'] ?></td>
			<td><?= $row['date_wrap'] ?></td>
		</tr>
		<?php }?>
	</table>
	<a href="create/create.php">글작성</a>	
</body>
</html>