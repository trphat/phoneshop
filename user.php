<?php 
	session_start();
	if(empty($_SESSION['id'])){
		header('location:signin.php?error=Đăng nhập đi bạn');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	xin chào bạn 
	<?php 
		echo $_SESSION['name'];
	?>
	<a href="signout.php">
		đăng xuất
	</a>
</body>
</html>