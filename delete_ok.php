<?php
	unlink($_GET['go_title']);
	header("Location: main.php");
	/*
		unlink(파일 경로) -> 파일 삭제
	*/
?>