<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Conditional</h1>
	<?php

		echo "------키워드<br>";		
		if(true){
			echo "string <br>"; // if()괄호의 값이 true이면 {안에 코드를 실행한다.} 반대로 (괄호 안에 값이 false이면) {안에 코드는 동작하지 않는다.}
		}
		echo "----------<br>";

		if(false){
			echo "true <br>"; 
		}else{
			echo "false <br>"; // else는 (괄호 안에 값이 false일 경우 else 다음에 있는 {}를 실행한다.)
		}

		$var = $_GET['id'];
		if(isset($var)){ //isset 값이 있는지 없는지를 확인한여 boolean타입으로 반환한다
			echo $_GET['id'];
		}else{
			echo 'welcome';
		}
	?>
</body>
</html>