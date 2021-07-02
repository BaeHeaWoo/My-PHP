<?php
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'bab');

	settype($_POST['number_id'], integer);

	$filterd = array(
		'title' => mysqli_real_escape_string($mysqli, htmlspecialchars($_POST['title'])),
		'desc' => mysqli_real_escape_string($mysqli, htmlspecialchars($_POST['description'])),
		'id' => mysqli_real_escape_string($mysqli, htmlspecialchars($_POST['number_id']))
	);

	

	$sql = "UPDATE topic SET
		title = '{$filterd['title']}',
		created = NOW(),
		description ='{$filterd['desc']}'
		WHERE id = {$filterd['id']}
			";

	$res = mysqli_query($mysqli, $sql);

	if($res === false){
		echo "에러::::";
		echo mysqli_error($mysqli);
	}else{
		echo "성공했습니다. <a href='main.php?id=".$filterd['id']."' >돌아가기</a>";
	}



?>