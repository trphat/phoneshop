<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!--css-->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

	<?php 
		session_start();
		$cart=$_SESSION['cart'];
		require 'header.php';
        $sum=0;
	?>
	<section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <?php foreach($cart as $id => $each): ?>
                        	
                        <tbody>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="admin/products/photos/<?php echo $each['photo']?> "alt="">
                                        </div>
                                        <div class="media-body">
                                            <h5><p><?php echo $each['name'] ?></p></h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                	
                                    <h5><?php echo $each['price'] ?> VNĐ</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                    	
                                        <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=incre">
                                		+</a><h5><?php echo $each['quantity'] ?></h5><a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=decre">
                                		-
                                	</a>
                                        
                                    </div>
                                </td>
                                <td>
                                    <h5><?php 
                                    $result= $each['price']* $each['quantity'];
                                    $sum+=$result;
                                    echo $result;
                                     ?> VNĐ</h5>
                                </td>
                                <td>
                                	<a href="delete_form_cart.php?id=<?php echo $id ?>">X</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                            <tr class="bottom_button">
                                <td>
                                    <a class="gray_btn" href="#">Update Cart</a>
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="cupon_text d-flex align-items-center">
                                        <input type="text" placeholder="Coupon Code">
                                        <a class="primary-btn" href="#">Apply</a>
                                        <a class="gray_btn" href="#">Close Coupon</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5><?php echo $sum ?>.VNĐ</h5>
                                </td>
                            </tr>
                            <tr class="shipping_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Shipping</h5>
                                </td>
                                <td>
                                    <div class="shipping_box">
                                <?php 
                                    $id=$_SESSION['id'];
                                    require 'admin/connect.php';
                                    $sql="select * from customers where id='$id'";
                                    $result=mysqli_query($connect,$sql);
                                    $each=mysqli_fetch_array($result);
                                ?>       
   
                                        <form method="POST" action="process_checkout.php">
                                        Tên Người nhận<input type="text" name="name_receiver" value="<?php echo $each['name']?>" >
                                        SDT người nhận<input type="text" name="phone_receiver" value="<?php echo $each['phone_number']?>" >
                                        Địa chỉ người nhận<input type="text" name="address_receiver" value='<?php echo $each['address']?>'>
                                        <button >Đặt Hàng</button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="#">Continue Shopping</a>
                                        <a class="primary-btn" href="#">Proceed to checkout</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php require 'footer.php'; ?>
    <!--js-->
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>