<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title><?php echo ($title); ?></title>
		<meta name="description" content="<?php echo ($description); ?>">
		<meta name="keywords" content="<?php echo ($keywords); ?>">
		<script src="__PUBLIC__/Js/jquery.js" type="text/javascript"></script>
		<script src="__PUBLIC__/Js/city.js" type="text/javascript"></script>
		<script src="__PUBLIC__/Js/artDialog/jquery.artDialog.min.js" type="text/javascript"></script>
		<script src="__PUBLIC__/Js/artDialog/artDialog.plugins.min.js" type="text/javascript"></script>
		<script src="__PUBLIC__/Js/jquery-ui.js" type="text/javascript"></script>
		<link href="__PUBLIC__/Js/jquery-ui.css" type="text/css" rel="stylesheet" />
		<link rel="stylesheet" href="__PUBLIC__/Js/artDialog/skins/default.css" type="text/css" />
		<link rel="stylesheet" href="__MYSTYLE__Css/style.css" type="text/css" />
		<link rel="stylesheet" href="__MYSTYLE__Css/public.css" type="text/css" />
		<link rel="stylesheet" href="__MYSTYLE__Css/pay.css" type="text/css" />
	</head>
	<body>
		<img id='loading' src='__MYSTYLE__Images/loading.gif' style="display: none" />
		<div class="wrapper">
			<div id="head">
				<div class=" header">
					<h1><a target="_top" title="" href="/"> <img title="Cheap Oakley Sunglasses,Wholesale Oakley Sunglasses,Discount Oakley Sunglasses" alt="Cheap Oakley Sunglasses,Wholesale Oakley Sunglasses,Discount Oakley Sunglasses" src="__MYSTYLE__Images/logo.jpg" align="left"></a></h1>
					<div class="cur_search">
						<div class="cart">
							<?php if(empty($_SESSION['cart']['total_num'])): ?><a target="_top" href="__ROOT__/Cart" rel="nofollow" class="sys_cart">My Bag:( <span id="item">0</span> items)</a>
								<?php else: ?>
								<a target="_top" href="__ROOT__/Cart" rel="nofollow" class="sys_cart">My Bag:( <span id="item"><?php echo ($_SESSION['cart']['total_num']); ?></span> items)</a><?php endif; ?>

							<a target="_top" href="#" rel="nofollow" class="check">Checkout</a><div id="showcart"></div>
						</div>
						<!--顶部登陆框Widget开始-->
						<ul>
							<?php if(empty($_SESSION['username'])): ?><li class="sys_Reg shu_clear">
									<a href="__ROOT__/User">login</a>
									<a href="__ROOT__/User/register">register</a>
								</li>
								<?php else: ?>
								<li class="sys_login">
									<span style="color: #000000;"> <a href="__ROOT__/User/index"><?php echo (session('username')); ?> </a> </span>
									<a href="__ROOT__/Public/logout">logout</a>
								</li><?php endif; ?>
						</ul>
						<!--顶部登陆框Widget结束-->
						<div class=" clear"></div>
						<div id="cur">
							<!-- <label>
							<input id="currencylist0" name="currencylist" value="USD" checked="checked" type="radio">
							USD</label><label>
							<input id="currencylist1" name="currencylist" value="GBP" type="radio">
							GBP</label><label>
							<input id="currencylist2" name="currencylist" value="CAD" type="radio">
							CAD</label><label>
							<input id="currencylist3" name="currencylist" value="CHF" type="radio">
							CHF</label><label>
							<input id="currencylist4" name="currencylist" value="EUR" type="radio">
							EUR</label> -->
						</div>
						<script>
							$(document).ready(function() {
								$('#Gstr').autocomplete({
									minLength : 0,
									max : 10,
									width : 10,
									autoFill : true,
									source : "/Public/productList",
								});

								$("#loading").ajaxStart(function() {
									$(this).show();
								})
							})

						</script>

						<!--顶部搜索Widget开始-->
						<form method="post" name="mini-search" target="_blank" action="/Public/serach">
							<input id="go" value=" " alt="Search" src="__MYSTYLE__Images/go.jpg" type="image">
							<input value="Oakley  Sunglasses" onblur="" onfocus="" name="key" id="Gstr" type="text">
						</form>
						<!--顶部搜索Widget开始-->
					</div>
				</div>
				<div id="menu">
					<!--头部分类bar条Widget开始-->
					<a target="_top" class="home" href="__ROOT__/">home</a>
					<div class="curselt_div">
						<ul>
							<?php echo W("Category",array("count"=>10,"Display"=>"tree"));?>
						</ul>
						<!--头部分类bar条Widget开始-->
					</div>
				</div>
			</div>

<div id="main">
	<style>
		fieldset {
			border: 1px solid #CCCCCC;
			margin: 5px 0;
			padding: 5px;
			background-color: #f7f7f7;
		}
		legend {
			color: black;
			font-weight: bold;
			padding: 3px 5px;
		}
		.inputLabel {
			width: 90px;
			float: left;
		}
		.input_text {
			border: 1px solid #7F9DB9;
			width: 120px;
			margin: 2px;
		}
		.half_from {
			margin-bottom: 10px;
			display: inline-block;
			width: 50%;
			float: left;
		}
	</style>
	<div class="fixed_big_from">
		<div class="half_from">
			<fieldset>
				<legend>
					I am a new customer
				</legend>
				<div style="padding: 0pt 10px;">
					<p style="display: none">
						Checkout Options:
					</p>
					<label for="register" style="cursor: pointer;">
						<input checked="checked" name="account" value="register" id="register" type="radio">
						<b>Register Account</b></label>
					<br>
					<label for="guest" style="cursor: pointer; display: none">
						<input name="account" value="guest" id="guest" type="radio">
						<b>Guest Checkout</b></label>
					<br>
					<p>
						By creating an account you will be able to shop faster, be up to date on an order's
						status, and keep track of the orders you have previously made.
					</p>
					<div style="text-align: right;">
						<a target="_top" onclick="topage();" class="button">
						<input name="registrationButton" title=" Continue " alt="Continue" src="__MYSTYLE__Images/submit.gif" class="Continue" type="image">
						</a>
					</div>
				</div>
			</fieldset>
			<script>
				if ("none" !== "")
					$('#register').attr("checked", "checked");
				function topage() {
					if ($('#guest').is(':checked'))
						//付款
						document.location.href = '';
					else
						document.location.href = '__ROOT__/User/register/';
				}
			</script>
			<fieldset>
				<legend>
					Returning Customer
				</legend>
				<div style="padding: 0pt 10px;">
					<!--用户登陆Widget开始 -->
					<!-- <script>
					$(document).ready(function() {
					$("#loginBt").click(function() {
					$.post("__URL__/checkUser", $("#loginForm").serialize(), function(data) {
					if (data.status == 1) {
					location.href = "__URL__/info";
					} else {
					$.alert(data.info);
					}

					}, 'json');
					})
					})
					</script> -->

					<form id="loginForm" method="post" onsubmit="" action="__URL__/checkUser" class="">
						I am a returning customer.
						<br>
						<br>
						<label style="text-align: right;" for="login-email-address" class="inputLabel"> <b>Email Address:</b></label>
						<input class="input_text" id="email" name="email" type="text">

						<br class="clear">
						<label style="text-align: right;" for="login-password" class="inputLabel"> <b>Password:</b></label>
						<input class="input_text" id="password" name="password" type="password">
						<a target="_top" rel="nofollow" href="/User/pwd">Forget Password?</a>
						<br class="clear">
						<div style="text-align: right;">
							<input id="loginBt" name="Submit1" type="image" src="__MYSTYLE__Images/login.gif">
						</div>
						<input name="go" value="" type="hidden">
					</form>
					<!--用户登陆Widget结束-->
				</div>
			</fieldset>
		</div>
		<div class="half_from">
			<center>
				<div style="background-color: #F7F7F7; width: 200px; padding: 10px; margin-top: 16px">
					<a href="http://sealinfoverisign.com/splash?form_file=fdf/splash.fdf&amp;dn=usefulsunglasses.com&amp;lang=en" target="_top"> <img alt="" src="__MYSTYLE__Images/vlogo.gif"></a>
					<br>
					<br>
					<a href="http://trustswave.com/cert.php?customerId=16ac926b72be810ba2d2636fdecb7080&amp;size=105x54&amp;style=normal" target="_top"> <img alt="" src="__MYSTYLE__Images/trustwave.gif"></a>
					<br>
					<br>
					<a target="_top" href=""> <img alt="" src="__MYSTYLE__Images/verified.gif"></a>
				</div>
			</center>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>

</div>

<div class="clear"></div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title><?php echo ($title); ?></title>
		<meta name="description" content="<?php echo ($description); ?>">
		<meta name="keywords" content="<?php echo ($keywords); ?>">
		<script src="__PUBLIC__/Js/jquery.js" type="text/javascript"></script>
		<script src="__PUBLIC__/Js/city.js" type="text/javascript"></script>
		<script src="__PUBLIC__/Js/artDialog/jquery.artDialog.min.js" type="text/javascript"></script>
		<script src="__PUBLIC__/Js/artDialog/artDialog.plugins.min.js" type="text/javascript"></script>
		<script src="__PUBLIC__/Js/jquery-ui.js" type="text/javascript"></script>
		<link href="__PUBLIC__/Js/jquery-ui.css" type="text/css" rel="stylesheet" />
		<link rel="stylesheet" href="__PUBLIC__/Js/artDialog/skins/default.css" type="text/css" />
		<link rel="stylesheet" href="__MYSTYLE__Css/style.css" type="text/css" />
		<link rel="stylesheet" href="__MYSTYLE__Css/public.css" type="text/css" />
		<link rel="stylesheet" href="__MYSTYLE__Css/pay.css" type="text/css" />
	</head>
	<body>
		<img id='loading' src='__MYSTYLE__Images/loading.gif' style="display: none" />
		<div class="wrapper">
			<div id="head">
				<div class=" header">
					<h1><a target="_top" title="" href="/"> <img title="Cheap Oakley Sunglasses,Wholesale Oakley Sunglasses,Discount Oakley Sunglasses" alt="Cheap Oakley Sunglasses,Wholesale Oakley Sunglasses,Discount Oakley Sunglasses" src="__MYSTYLE__Images/logo.jpg" align="left"></a></h1>
					<div class="cur_search">
						<div class="cart">
							<?php if(empty($_SESSION['cart']['total_num'])): ?><a target="_top" href="__ROOT__/Cart" rel="nofollow" class="sys_cart">My Bag:( <span id="item">0</span> items)</a>
								<?php else: ?>
								<a target="_top" href="__ROOT__/Cart" rel="nofollow" class="sys_cart">My Bag:( <span id="item"><?php echo ($_SESSION['cart']['total_num']); ?></span> items)</a><?php endif; ?>

							<a target="_top" href="#" rel="nofollow" class="check">Checkout</a><div id="showcart"></div>
						</div>
						<!--顶部登陆框Widget开始-->
						<ul>
							<?php if(empty($_SESSION['username'])): ?><li class="sys_Reg shu_clear">
									<a href="__ROOT__/User">login</a>
									<a href="__ROOT__/User/register">register</a>
								</li>
								<?php else: ?>
								<li class="sys_login">
									<span style="color: #000000;"> <a href="__ROOT__/User/index"><?php echo (session('username')); ?> </a> </span>
									<a href="__ROOT__/Public/logout">logout</a>
								</li><?php endif; ?>
						</ul>
						<!--顶部登陆框Widget结束-->
						<div class=" clear"></div>
						<div id="cur">
							<!-- <label>
							<input id="currencylist0" name="currencylist" value="USD" checked="checked" type="radio">
							USD</label><label>
							<input id="currencylist1" name="currencylist" value="GBP" type="radio">
							GBP</label><label>
							<input id="currencylist2" name="currencylist" value="CAD" type="radio">
							CAD</label><label>
							<input id="currencylist3" name="currencylist" value="CHF" type="radio">
							CHF</label><label>
							<input id="currencylist4" name="currencylist" value="EUR" type="radio">
							EUR</label> -->
						</div>
						<script>
							$(document).ready(function() {
								$('#Gstr').autocomplete({
									minLength : 0,
									max : 10,
									width : 10,
									autoFill : true,
									source : "/Public/productList",
								});

								$("#loading").ajaxStart(function() {
									$(this).show();
								})
							})

						</script>

						<!--顶部搜索Widget开始-->
						<form method="post" name="mini-search" target="_blank" action="/Public/serach">
							<input id="go" value=" " alt="Search" src="__MYSTYLE__Images/go.jpg" type="image">
							<input value="Oakley  Sunglasses" onblur="" onfocus="" name="key" id="Gstr" type="text">
						</form>
						<!--顶部搜索Widget开始-->
					</div>
				</div>
				<div id="menu">
					<!--头部分类bar条Widget开始-->
					<a target="_top" class="home" href="__ROOT__/">home</a>
					<div class="curselt_div">
						<ul>
							<?php echo W("Category",array("count"=>10,"Display"=>"tree"));?>
						</ul>
						<!--头部分类bar条Widget开始-->
					</div>
				</div>
			</div>