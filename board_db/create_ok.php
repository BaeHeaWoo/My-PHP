<?php
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'bab');

	$title = mysqli_real_escape_string($mysqli, htmlspecialchars($_POST['title']));
	$desc = mysqli_real_escape_string($mysqli, htmlspecialchars($_POST['description']));
	$author_name = mysqli_real_escape_string($mysqli, htmlspecialchars($_POST['author_name']));

	$sql = "INSERT INTO topic 
		(title, description, created, author_id) 
		VALUES 
		('{$title}', '{$desc}', NOW(), {$author_name})";

	$res = mysqli_query($mysqli, $sql);	
	if($res === false){
		echo "문제가 발생하였습니다.";
		error_log(mysqli_error($mysqli));
		//echo mysqli_error($mysqli);
	}else{
		echo '성공했습니다 <a href="main.php">돌아가기</a>';

	}

?>