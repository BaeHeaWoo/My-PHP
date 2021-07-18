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
	<button class="Interaction" data-type="update">수정하기</button>
	<button class="Interaction" data-type="delete">삭제하기</button>
	<script>

		console.log("start");

		const url_box = ['update/update_ok.php', 'delete/delete_ok.php'];

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

		$('.Interaction').click(function(){

			let url = $(this).data('type') == 'delete' ? 'delete/delete_ok.php' : 'update/update_ok.php';

			$.ajax({
			    url: url,
			    type: 'POST',   
			    data: readData(),
			    success: function(xhr) {
			        if(xhr === "success"){
			        	history.go(0);
			        }else{
			        	location.replace('./index.php');
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