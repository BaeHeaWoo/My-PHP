<?php
	echo $_POST['title']."<br>";
	echo $_POST['contents']."<br>";

	rename($_POST['old_title'], $_POST['title']);
	file_put_contents($_POST['title'], $_POST['contents']);
	header("Location: main.php");
	/*
	file_get_contents(불러올 경로) -> 파일을 불러온다
	file_put_contents(파일 경로, 내용) -> 파일 경로를 통해 파일 내용을 변경한다.
	rename (기존에 파일 이름, 새로운 파일 이름)
	*/

?>