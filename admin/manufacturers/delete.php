<?php
	require '../check_super_admin_login.php';
?>
<?php

	if(empty($_GET['id']))
	{
		header('location:index.php?error=Phải tryền mã để xoá');
		exit;
	}

	$id=$_GET['id'];
	require '../connect.php';
	$sql="delete from manufacturers 
    where id ='$id'
	";

	mysqli_query($connect,$sql);
	$error=mysqli_error($connect);
	mysqli_close($connect);
	if(empty($error)){
	header('location:index.php?success=Xoá thành công');
}