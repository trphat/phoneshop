<ul>
	<li>
		<a href="../manufacturers">
			quản lý nhà sản xuất
		</a>
	</li>
	<li>
		<a href="../products">
			quản lý sản phẩm
		</a>
	</li>
	<li>
		<a href="../orders">
			Quản lý đơn hàng
		</a>
	</li>
</ul>

<?php
		if(isset($_GET['error'])){
	?>
	<span style="color:red">
		<?php echo $_GET['error'] ?>
	</span>
	<?php 
		}
	?>

	<?php
		if(isset($_GET['success'])){
	?>
	<span style="color:green">
		<?php echo $_GET['success'] ?>
	</span>
	<?php 
		}
	?>