<?php
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'board');
	$sql = "INSERT INTO board 
		(title, contents, date_wrap) 
		VALUES 
		(
			'{$_POST['title']}', 
			'{$_POST['contents']}',
			NOW()
		)";

	
	$res = mysqli_query($mysqli, $sql);
	if($res === false){
		echo mysqli_error($mysqli);
	}else{
		echo "돌아가기 <a href='/board/index.php'>성공</a>";
	}	
	

?>