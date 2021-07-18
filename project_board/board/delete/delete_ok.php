<?php
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'board');
	$sql = "delete from board where id={$_POST['read_number']}";

	$res = mysqli_query($mysqli, $sql);

	if($res === false){
		echo mysqli_error($mysqli);
	}else{
		echo 'delete_success';
	}
?>