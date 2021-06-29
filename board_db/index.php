<?php
	//$mysqli = mysqli_connect("localhost", "root", "root", "bab"); //(로컬호스트 주소, 디비 아이디, 비밀번호, 디비 선택) -> 디비 연결

	//$sql = "select 'hi' as _msg from dual"; //-> dual은 덤프! hi라는 칼럼을 _msg라는 열별칭
	//$res = mysqli_query($mysqli, $sql); // ->실패 했을때 return false
	//select, show, describe 정보를 읽는 query문을 사용할 경우 mysqli_result반환
	//그외 는 return true

	/*if($res === false){
		printf(mysqli_error($mysqli));
	}*/


	/*$mysqli = mysqli_connect("localhost", "root", "root", "bab"); 
	$sql = "select * from topic"; // select-> 찾는다 * 어떤걸 -> *은 모든걸 가져온다., from -> 어디에서 
	$result = mysqli_query($mysqli, $sql);
	if($result === false){
		echo mysqli_error($mysqli);	
	}*/
	// var_dump($result -> num_rows);  데이터 베이스 행 반환
	//$row = mysqli_fetch_array($result);  query 문의 결과 값을 배열 혹은 객체를 추출해 보여준다. mysqli_fetch_array는 호출 할때마다 $result 즉 query문의 결과를 하나씩 하나씩 배열로 return 한다.
	//끝에 도달하면 자동으로 빈값 반환 빈값은 flase로 인식한다 

	/*while($row = mysqli_fetch_array($result)){ // false일 경우 while문은 중단된다.
		echo $row['id']."<br>";
	}*/
	/*echo ":::".$result->num_rows;*/


	


?>