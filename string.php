<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>string</h1>
	<h2>''</h2>
	<?php echo 'Hello world'; ?>
	<h2>""</h2>
	<?php echo "Hello world"; ?>
	<h2>\"</h2>
	<?php echo "Hello \"world"?> 
	<!-- '', "" 둘다 문자열 가능 -->
	<h2>문자 결합 .</h2>
	<?php echo "Hello"."world"; ?>
	<!--하나의 문자열로 결합된다 좌항과 우항이-->
	<h2>문자열 길이 </h2>
	<?php echo strlen("Hello world"); ?>
</body>
</html>