<!DOCTYPE html>
<html>
<head>
<title>Next Gen Auctions</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1"/>
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
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'/>
<script src="js/jquery.easing.min.js"></script>
</head>

<script lang="javascript">
    function check(){
        if(document.f.pass.value!=document.f.repass.value){
            alert("Passwords does not match...!");
            return false;
        }
        return true;
    }
</script>
<body>
<!-- header -->
<div class="header">
	
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.php"><img src="images/logo3.jpg"></a></h1>
		</div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		
		<div class="top_nav_right">
			<div class="cart box_1">
                            REGISTER
			</div>	
		</div>
		<div class="clearfix"></div>
	</div>
</div><center><br/><br/><h1>Register</h1><br/>
<!-- //banner-top -->
<!-- content -->

<form name="f" method="post" action="" onsubmit="javascript:return check()">
	<div class="contact-form2">
                <input type="text" placeholder="Full Name" name="name" pattern="[A-Za-z/ /]+$" title="Please check the name" autofocus required style="width:300px;"/><br/><br/>
                <input type="text" placeholder="Mobile No" name="mobile" pattern="[0-9]{10}" title="Input 10 digit mobile number" required style="width:300px;"/><br/><br/>
                <input type="email" placeholder="Email" name="email" required style="width:300px;"/><br/><br/>
                <textarea placeholder="Address" name="address" required style="width:300px;"></textarea><br/><br/>
        	<input type="text" placeholder="UserName" name="user" required style="width:300px;"/><br/><br/>
                <input type="password" placeholder="Password" name="pass" style="width:300px;" required/><br/><br/>
                <input type="password" placeholder="Re-enter Password" name="repass" style="width:300px;" required/><br/><br/>
		<input type="submit" value="Submit" class="item_add hvr-outline-out button2" name="save"/>
	</div><br/><br/>
</form>
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
<?php
    if(isset($_REQUEST['save'])){
        include 'config/dbconnection.php';
        
        
        
        $query="select * from tblcustomer where username='{$_POST['user']}'";
        $result=mysqli_query($link,$query);
        if(mysqli_num_rows($result)>0){
            echo "<Script> alert('Username already exists')</script>";
            die();
        }
        
        $query="insert into tblcustomer(name,mobile,email,address,username,password) values('{$_POST['name']}','{$_POST['mobile']}','{$_POST['email']}','{$_POST['address']}','{$_POST['user']}','{$_POST['pass']}')";
        $result=mysqli_query($link,$query);
        if($result){
            echo "<Script> alert('Registration completed successfully');
                           window.location.href='index.php'; </script>";
        }else{
            echo 'Invalid username/password';
        }
    }
?>

</body>
</html>