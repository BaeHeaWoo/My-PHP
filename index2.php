<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>
		<ul>
			<?php
				$list = scandir('./');
				for($i = 2; $i < count($list); $i++){
					echo "<li><a href=index2.php?id=".$list[$i].">".$list[$i]."</a></li>";
				}
				// .-> 현재 디렉토리 .. ->부모디렉토리 
				if(isset($_GET['id'])){
					echo "<h2>".$_GET['id']."</h2> <div>".file_get_contents($_GET['id'])."</div> ";
				}else{
					echo "<h2>welcome</h2><div>Hello php</div>";
				}
			?>
		</ul>
		<?php echo 'can\'t' ?>
	</h2>
</body>
</html>