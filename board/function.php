<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	<h2>function</h2>
	<h3>basic</h3>
	<?php
		function basic(){
			print("hello world");
		} //함수를 선언하는 키워드는 function이고, 함수의 이름은 basic이다.

		basic(); //함수를 실행시킨다 함수이름 + ()괄호는 함수를 호출한다는 의마 .
	?>

	<h3>parameter & argument</h3>
	<?php
		/*	
			함수와 인자 
			함수 호출시 (괄호 안에 인자를 보낼 수 있다.)
			ex)sum(1,2); -> argument 보내는 인자 
			function sum($left, $right) -> parameter 받는 인자 
		*/
		sum(1,2);
		function sum($left, $right){
			print($left+$right);
		}
	?>

	<h3>return</h3> 
	<!-- sum()과 같은 함수를 실행하면 값이 반환되는 형태 -->

	<?php
		function sum2($left, $right){
			return $left+$right;
		}
		print(sum2(1,3));
		//file_put_contents('result.txt', sum2(1,3)); 파일 생성 후 이름 
	?>
</body>
</html>