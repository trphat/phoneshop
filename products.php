	<?php
		require 'admin/connect.php';
		$sql="select * from products";
		$result=mysqli_query($connect,$sql);
	 ?>
	
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<div class="" style="line-height: 60px;
						    background: #828bb3;
						    padding: 0 30px;
						    font-size: 30px;
						    font-weight: 400;
						    color: #fff;
						    ">
							Tất cả sản phẩm
						</div>
					</div>	
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- single product -->
						<?php foreach ($result as $each): ?>
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="admin/products/photos/<?php echo $each['photo']?>" alt="">
								<div class="product-details">
									<h6><?php echo $each['name']?></h6>
									<div class="price">
										<h6><?php echo $each['price']?> VNĐ</h6>
									</div>
									<div class="prd-bottom">
										<?php if(!empty($_SESSION['id'])){ ?>
										<a href="add_to_cart.php?id=<?php echo $each['id'] ?>" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
									<?php } ?>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="detail_products.php?id=<?php echo $each['id']?>" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach ?>
				<!-- Start Filter Bar -->
				
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>
</section>