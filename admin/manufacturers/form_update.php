<?php
	require '../check_super_admin_login.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	
	<?php 
		if(empty($_GET['id'])){
			header('location:index.php?error=phải truyền mã để sửa');
		}
		$id=$_GET['id'];//lay id
		include '../menu.php';
		require '../connect.php';
		$sql="select * from manufacturers where id='$id'";
		$result=mysqli_query($connect,$sql);
		$each=mysqli_fetch_array($result);
	?>

	<form action="process_update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $each['id']?>">
		Tên
		<input type="text" name="name" value="<?php echo $each['name']?>">
		<br>
		Địa chỉ
		<textarea name="address" id="" cols="30" rows="10"> <?php echo $each['address']?> </textarea>
		<br>
		Điện thoại
		<input type="text" name="phone"value="<?php echo $each['phone']?>">
		<br>
		Ảnh
		<input type="text" name="photo"value="<?php echo $each['photo']?>">
		<br>
		<button>Sửa</button>
	</form>
</body>
</html>