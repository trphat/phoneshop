<?php
	require '../check_admin_login.php';
?>
<?php

$name=$_POST['name'];
$photo=$_FILES['photo'];
$price=$_POST['price'];
$description=$_POST['description'];
$manufacturer_id=$_POST['manufacturer_id'];

$folder='photos/';
$file_extention=explode('.', $photo['name'])[1];
$file_name=time().'.'.$file_extention;
$path_file=$folder.$file_name;

move_uploaded_file($photo["tmp_name"], $path_file);

require '../connect.php';
$sql="insert into products(name,photo,price,description,manufacturer_id)
values
('$name','$file_name','$price','$description','$manufacturer_id')";

mysqli_query($connect,$sql);
mysqli_close($connect);

header('location:index.php?success=Thêm thành công');