<?php
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'bab');

	settype($_POST['id'], 'integer');



	$filter = array(
		'id' => mysqli_real_escape_string($mysqli, $_POST['id']),
		'name' => mysqli_real_escape_string($mysqli, $_POST['name']),
		'profile' => mysqli_real_escape_string($mysqli, $_POST['profile'])
	);

	$sql = "update author set
			name ='{$filter['name']}',
			profiile = '{$filter['profile']}'
			where id = {$filter['id']}
		";

	$res = mysqli_query($mysqli, $sql);
	
	if($res === false){
		echo mysqli_error($mysqli);
	}else{
		echo "성공했습니다. <a href='author.php?id={$filter['id']}'>돌아가기</a>";
	}
?>