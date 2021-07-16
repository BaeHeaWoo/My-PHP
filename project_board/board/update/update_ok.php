<?php
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'board');
	$sql = "UPDATE board SET 
				title = '{$_POST['title']}',
				contents = '{$_POST['contents']}',
				date_wrap = NOW() 
				WHERE id = {$_POST['read_number']}
			";

	$res = mysqli_query($mysqli, $sql);

	if($res === false){
		echo mysqli_error($mysqli);
	}else{
		echo "success";
	}

	



?>