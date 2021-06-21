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
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><a href="main.php">home</a></h1>
	<ul>
		<?php
			$list = scandir('./');
			for($i = 3; $i < count($list); $i++){
				if(strrpos($list[$i], '.php') === false)
				echo "<li><a href='main.php?go_title=".$list[$i]."'>".$list[$i]."</a></li>";
			}
		?>
	</ul>
	<?php Ck_title();?>
	<a href="create.php">create</a>
	<?php
		if(isset($_GET['go_title'])){
			echo '<a href="update.php?go_title='.$_GET['go_title'].'">update</a>';
			echo '<a href="delete_ok.php?go_title='.$_GET['go_title'].'"> delete</a>';
		}
	?>
	<!-- 

		서버에 전송할때 name="안에 있는 값으로 전송된다"
		get 방식은 누구에게 공유할때
		post get과 다르게 데이터 유출에 문제가 없음 
		method를 기본적으로 지정하지 않으면 get
	 -->

</body>
</html>