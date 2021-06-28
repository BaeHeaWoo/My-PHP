<?php
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'bab');
	$sql = "INSERT INTO topic 
		(title, description, created) 
		VALUES 
		('{$_POST['title']}', '{$_POST['description']}', NOW())";

	$res = mysqli_query($mysqli, $sql);	
	
	if($res === false){

		echo "문제가 발생하였습니다.";
		error_log(mysqli_error($mysqli));
	}else{
		echo '성공했습니다 <a href="main.php">돌아가기</a>';

	}

?>