<?php
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'board');
	$sql = "select * from board where id = {$_GET['id']}";
	$res = mysqli_query($mysqli, $sql);

	if($res === false){
		echo mysqli_error($mysqli);
	}
	$row = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
	<title>view</title>
	<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
</head>
<body>
	<input type="text" name="title" value=<?= $row['title'] ?>>
	<textarea name="contents"><?= $row['contents'] ?></textarea>
	<button class="btn_update">수정하기</button>
	<script>

		console.log("start");

		function numberDate(){
			var url = location.search;
			url = url.split("?id=");
			return {'use' : url[1]}
		}


		function readData (){
			let title, contents, read_number;
			title = $("input[name=title]").val();
			contents = $("textarea").val();
			read_number = numberDate().use;
			return {
				'title' : title,
				'contents' : contents,
				'read_number' : read_number
			}
		}

		$('.btn_update').click(function(){
			$.ajax({
			    url: 'update/update_ok.php',
			    type: 'POST',   
			    data: readData(),
			    success: function(xhr) {
			        if(xhr === "success"){
			        	history.go(0);
			        }
			    },
			    error: function(xhr, status, errorThrow) {
			        console.log(xhr, status, errorThrow)
			    }
			});

		});


	</script>
</body>
</html>