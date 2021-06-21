<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>update</h2>
	<?php
		function Ck_title(){
			if(isset($_GET['go_title'])){
				echo "<h2>".$_GET['go_title']."</h2>";
				echo "<p>".file_get_contents($_GET['go_title'])."</p>";
			}else{
				echo "<h2>hello</h2>";
				echo "<p>welcome php</p>";
			}
			
		}
	?>

	<form action="update_ok.php" method="post">
		<p><input type="title" name="title"  value=<?= $_GET['go_title'] ?>></p>
		<p><textarea name="contents"><?= file_get_contents($_GET['go_title']) ?></textarea></p>
		<input type="hidden" name="old_title" value=<?= $_GET['go_title'] ?>>
		<input type="submit">
	</form>
	<!-- 
		value라는 속성은 기본값을 설정한다
		action 전송될 곳 
		method 전송 방식
	 -->
</body>
</html>