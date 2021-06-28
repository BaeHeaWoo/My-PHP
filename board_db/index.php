<?php
	$mysqli = mysqli_connect("localhost", "root", "root", "bab"); //(로컬호스트 주소, 디비 아이디, 비밀번호, 디비 선택) -> 디비 연결


	//$sql = "INSERT INTO topic (title, descriptiont, created) VALUE ('title', 'description', NOW())";
	$sql = "select 'hi' as _msg from dual"; //-> dual은 덤프! hi라는 칼럼을 _msg라는 열별칭
	$res = mysqli_query($mysqli, $sql); // ->실패 했을때 return false
	$row = mysqli_fetch_assoc($res); // -> query를 통한 결과 값을 연관 배열로 반환(row)
	//var_dump($row);
	//select, show, describe 정보를 읽는 query문을 사용할 경우 mysqli_result반환
	//그외 는 return true
	if($res === false){
		printf(mysqli_error($mysqli));
	}

	

	

	//$sql = "INSERT INTO topic (title, description, created) VALUE ('title', 'description', NOW())";
	//$res = mysqli_query($mysqli, $sql); //$link
	/*$row = mysqli_fetch_assoc($res);
	echo $row['_msg'];*/

	


?>