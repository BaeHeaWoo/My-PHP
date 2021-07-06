<?php
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'bab');

	settype($_POST['id'], 'integer');
	$filter = mysqli_real_escape_string($mysqli, $_POST['id']);

	$sql = "DELETE FROM topic WHERE id = {$filter}";

	$res = mysqli_query($mysqli, $sql);

	if($res === false){
		echo mysqli_error($mysqli)."<br>";
	}else{
		echo '성공했습니다 <a href="main.php">돌아가기</a>';
	}
?>