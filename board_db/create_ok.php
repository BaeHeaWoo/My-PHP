<?php
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'bab');

	$title = mysqli_real_escape_string($mysqli, htmlspecialchars($_POST['title']));
	$desc = mysqli_real_escape_string($mysqli, htmlspecialchars($_POST['description']));
	 

	$sql = "INSERT INTO topic 
		(title, description, created) 
		VALUES 
		('{$title}', '{$desc}', NOW())";

	$res = mysqli_query($mysqli, $sql);	
	
	if($res === false){
		echo "문제가 발생하였습니다.";
		error_log(mysqli_error($mysqli));
	}else{
		echo '성공했습니다 <a href="main.php">돌아가기</a>';

	}

?>