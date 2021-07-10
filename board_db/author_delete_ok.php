<?php
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'bab');
	settype($_POST['id'], 'integer');
	$filter = mysqli_real_escape_string($mysqli, $_POST['id']);
	$sql = "delete from author where id = {$filter['id']}";
	$res = mysqli_query($mysqli, $sql);

	if($res === false){
		echo mysqli_error($mysqli);
	}else{
		echo "성공했습니다 <a href='author.php'>돌아가기</a>";
	}

?>