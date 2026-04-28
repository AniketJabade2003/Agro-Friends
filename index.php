<?php session_start();
 include './config/dbconnection.php';
 
 $query="select * from tblproducts where confirmed='N'";
 $result=mysqli_query($link,$query);
 while($row=  mysqli_fetch_assoc($result)){     
    mysqli_query($link,"update tblproducts set confirmed='T' where dtend<now() and id='{$row['id']}'");
 }
?>
<!DOCTYPE html>
<html>
<head>
<title>Next Gen Auctions</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


<!-- //pignose css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="js/jquery.easing.min.js"></script>
</head>
<body>
   

<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.php"><img src="images/logo3.jpg"></a></h1>
		</div>
		<div class="col-md-6 header-middle" style="border: transparent">
</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
				<li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>
					
				</li>
				<li><a class="fb" href="#"></a></li>
				<li><a class="twi" href="#"></a></li>
				<li><a class="insta" href="#"></a></li>
                                <li><a class="log" href="logout.php"></a></li>                                
                                  <?php 
                                    if(isset($_SESSION['id'])){
                                        echo "Welcome: ".$_SESSION['id'];
                                    }
                                    
                                ?>
			</ul>
		</div>
          
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Home<span class="sr-only">(current)</span></a></li>
                                        <li><a class="menu__link" href="veg.php">Vegetables</a></li>
                                        <li><a class="menu__link" href="fruits.php">Fruits</a></li>
                                        <li><a class="menu__link" href="regular.php">Flowers</a></li>
                                        
                                        <li><a class="menu__link" href="order.php">My Bids</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- banner -->
<div class="banner-grid">
	<div id="visual">
			<div class="slide-visual">
				<!-- Slide Image Area (1000 x 424) -->
				<ul class="slide-group">
					<li><img class="img-responsive" src="images/ba2.jpg" alt="Dummy Image" /></li>
                                        <li><img class="img-responsive" src="images/ba1.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="images/ba3.jpg" alt="Dummy Image" /></li>
<!--					<li><img class="img-responsive" src="images/ba1.jpg" alt="Dummy Image" /></li>-->
				</ul>

				<!-- Slide Description Image Area (316 x 328) -->
				<div class="script-wrap">
<!--					<ul class="script-group">
						<li><div class="inner-script"><img class="img-responsive" src="images/img1a.jpg" alt="Dummy Image" /></div></li>
                                                <li><div class="inner-script"><img class="img-responsive" src="images/baa2.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="images/imgaa.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="images/baa1.jpg" alt="Dummy Image" /></div></li>
					</ul>-->
					<div class="slide-controller">
						<a href="#" class="btn-prev"><img src="images/btn_prev.png" alt="Prev Slide" /></a>
						<a href="#" class="btn-play"><img src="images/btn_play.png" alt="Start Slide" /></a>
						<a href="#" class="btn-pause"><img src="images/btn_pause.png" alt="Pause Slide" /></a>
						<a href="#" class="btn-next"><img src="images/btn_next.png" alt="Next Slide" /></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	<script type="text/javascript" src="js/pignose.layerslider.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() {
			$('#visual').pignoseLayerSlider({
				play    : '.btn-play',
				pause   : '.btn-pause',
				next    : '.btn-next',
				prev    : '.btn-prev'
			});
		});
	//]]>
	</script>

</div>
<!-- //banner -->
<div class="product-easy">
	<div class="container">
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Next Generation Auctions</span></li> 
				</ul>
                            <div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                              <?php
                                                                        $query="select * from tblproducts where confirmed='N'";
                                                                        $result=mysqli_query($link,$query);
                                                                        while($row=  mysqli_fetch_assoc($result)){
                                                                            $file="productimg/".$row['filename0'];
                                                                    ?>
						<div class="col-md-3 product-men">
                                                   
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="<?php echo $file;?>" alt="" class="pro-image-front">
									<img src="<?php echo $file;?>" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php?id=<?php echo $row['id']; ?>" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
                                                                   
									<h4><a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h4>
									<div class="info-product-price">
										<span class="item_price">Rs. <?php echo $row['price']; ?></span>
									</div>
                                                                        <a href="single.php?id=<?php echo $row['id']; ?>" class="link-product-add-cart">View Product</a>									
                                                                       
								</div>
                                                            
							</div>
                                                     
						</div>
                                            <?php
                                                                        }
                                                                        ?>
                                      </div>
                            </div>
                        </div>
                </div>

	</div>
</div>
<!-- //product-nav -->

<div class="coupons">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 coupons-gd">
				<h3>Buy your product in a simple way</h3>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>LOGIN TO YOUR ACCOUNT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<h4>SELECT YOUR ITEM</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
				<h4>MAKE PAYMENT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Customer Login</h3>
										<form name="f" method="post" action="login.php">
											<div class="sign-up">
												<h4>Username :</h4>
												<input type="text" value="Type here" name="user" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" name="pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											
											<div class="sign-up">
												<input type="submit" name="custlog" value="Login" />
											</div>
                                                                                    
                                                                                    <div class="sign-up" align="center">
                                                                                    <a href="custreg.php"> New Customer Register...!</a>
                                                                                    </div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Farmer Login</h3>
										<form name="f1" method="post" action="login.php">
											<div class="sign-up">
												<h4>Username :</h4>
												<input type="text" value="Type here" name="user" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" name="pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											
											<div class="sign-up">
												<input type="submit" name="distlog" value="Login" />
											</div>
                                                                                    <div class="sign-up" align="center">
                                                                                    </div>
										</form>
                                                                                <a href="distreg.php"> New Farmer Register...!</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<?php
if(isset($_GET['m'])){
     echo "<script> alert('Please login to continue'); </script>";
}
?>
</body>
</html>