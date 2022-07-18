
	<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<?php 
								if(empty($_SESSION['id'])){ ?>
								<li class="nav-item active"><a class="nav-link" href="signin.php">Đăng Nhập</a></li>
							<li class="nav-item active"><a class="nav-link" href="signup.php">Đăng Ký	</a></li>
							<?php }else{?>
								<li class="nav-item active"><a class="nav-link" href="user.php">Xin chào <?php echo 
								$_SESSION['name'] ?></a></li>
								<li class="nav-item active"><a class="nav-link" href="signout.php">Đăng xuất</a></li>
								
							<?php } ?>
							<li class="nav-item active"><a class="nav-link" href="contact.html">Liên hệ</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							
							<li class="nav-item">
								<input type="search" name="" class="search">
							</li>
						</ul>
					</div>
				</div>
			</nav>
			
		<div class="container">
			<div class="banner">
			<img width="100%" height="300px" src="img/banner/img.jpg" alt="">
		</div>
		</div>