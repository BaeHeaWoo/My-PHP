<?php
	file_put_contents($_POST['title'], $_POST['content']);

	/*function Move($title){
		echo "<script>alert('{$title}')</script>";
		echo "<script>location.replace('index.php')</script>";
	}

	Move("create");*/

	header("Location: main.php?go_title=".$_POST['title']);
?>
<!-- 
	{} -> php 라고 인식한다. 그래서 타입에 맞게 반환 함
 -->