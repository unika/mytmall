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
	<link rel="stylesheet" href="__MYSTYLE__/pay.css" type="text/css">
	<form method="post" action="/Order/step3" id="pay_from1">
		<div id="from2">
			<div class="pay_t2">
				2. Shipping &amp; Payment Method
			</div>
			<input id="C_FirstName" name="C_FirstName" value="<?php echo $_POST['C_FirstName'] ?>" type="hidden">
			<input id="C_Username" name="C_Username" value="<?php echo $_POST['C_Username'] ?>" type="hidden">
			<input id="C_SecondName" name="C_SecondName" value="<?php echo $_POST['C_SecondName'] ?>" type="hidden">
			<input id="C_Address" name="C_Address" value="<?php echo $_POST['C_Address'] ?>" type="hidden">
			<input id="C_City"  name="C_City" value="<?php echo $_POST['C_City'] ?>" type="hidden">
			<input id="C_country" name="C_Country" value="<?php echo $_POST['C_Country'] ?>" type="hidden">
			<input id="C_state" name="C_State" value="<?php echo $_POST['C_State'] ?>" type="hidden">
			<input id="C_PostCode" name="C_PostCode" value="<?php echo $_POST['C_PostCode'] ?>" type="hidden">
			<input id="C_Tel" name="C_Tel" value="<?php echo $_POST['C_Tel'] ?>" type="hidden">
			<input id="C_Email" name="C_Email" value="<?php echo $_POST['C_Email'] ?>" type="hidden">
			<input id="B_FirstName" name="B_FirstName" value="<?php echo $_POST['B_FirstName'] ?>" type="hidden" />
			<input id="B_SecondName" name="B_SecondName" value="<?php echo $_POST['B_SecondName'] ?>" type="hidden" />
			<input id="B_Address" name="B_Address" value="<?php echo $_POST['B_Address'] ?>" type="hidden" />
			<input id="B_City" name="B_City" value="<?php echo $_POST['B_City'] ?>" type="hidden" />
			<input id="B_Country" name="B_Country" value="<?php echo $_POST['B_Country'] ?>" type="hidden">
			<input id="B_State" name="B_State" value="<?php echo $_POST['B_State'] ?>" type="hidden" />
			<input id="B_PostCode" name="B_PostCode" value="<?php echo $_POST['B_PostCode'] ?>" type="hidden" />
			<input id="B_Tel" name="B_Tel" value="<?php echo $_POST['B_Tel'] ?>" type="hidden"/>
			<input id="B_Email" name="B_Email" value="<?php echo $_POST['B_Email'] ?>" type="hidden" />
			<div class="shipping_list">
				<span class="tt">Shipping Method</span>
				<ul style="width:700px; float:left;">
					<!--物流公司开始-->
					<?php if(is_array($dlist)): $i = 0; $__LIST__ = $dlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<input type="radio" id="deli<?php echo ($vo["id"]); ?>" name="DeliveryId" value="<?php echo ($vo["id"]); ?>" checked="" />
							<label for="deli3"> &nbsp; <?php echo ($vo["Name"]); ?><span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span> $<?php echo ($vo["Price"]); ?> </label>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="clear"></div>
			<div class="shipping_list">
				<span class="tt">Payment Method</span>
				<ul style="width:700px; float:left;">
					<?php if(is_array($plist)): $i = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<input type="radio" checked="" name="PaymentId" value="<?php echo ($vo["id"]); ?>" />
							<label for="cardId4"><img align="middle" style="width: 80px;" alt="<?php echo ($vo["Name"]); ?>" src="/Upload/Payment/<?php echo ($vo["logo"]); ?>"></label>
							<label><?php echo ($vo["Iden"]); ?></label>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<input value="" type="submit"  id="Submit2" class="Submit1">
		</div>
	</form>
</div>
</div>
<div class="clear"></div>
<div id="foot" class="pfoot">
	<img src="__MYSTYLE__Images/foot_top.jpg" usemap="#Map">
	<map name="Map" id="Map">
		<area rel="nofollow" target="_blank" shape="rect" coords="421,21,439,49" href="http://www.facebook.com/">
		<area rel="nofollow" target="_blank" shape="rect" coords="456,22,477,46" href="http://plus.google.com/">
		<area rel="nofollow" target="_blank" shape="rect" coords="489,23,508,46" href="http://www.pinterest.com/">
		<area rel="nofollow" target="_blank" shape="rect" coords="522,21,542,47" href="http://www.twitter.com/">
	</map>
	<div id="page">

		<dl>
			<dt>
				Corporation Information
			</dt>
			<dd>
				<a target="_top" href="#" rel="nofollow">About Us</a>
			</dd>
			<dd>
				|
			</dd>
			<dd>
				<a target="_top" href="#" rel="nofollow">Safe Shopping</a>
			</dd>
		</dl>

		<dl class="mk_dd1">
			<dt>
				Customer Service
			</dt>
			<dd>
				<a target="_top" href="#" rel="nofollow">Contact Us</a>
			</dd>
			<dd>
				|
			</dd>
			<dd>
				<a target="_top" href="#" rel="nofollow">Privacy Policy</a>
			</dd>
			<dd>
				|
			</dd>
			<dd>
				<a target="_top" href="#" rel="nofollow">FAQs</a>
			</dd>
		</dl>

		<dl class="mk_dd1">
			<dt>
				Payment and Shipping
			</dt>
			<dd>
				<a target="_top" href="#" rel="nofollow">Checkout</a>
			</dd>
			<dd>
				|
			</dd>
			<dd>
				<a target="_top" href="#" rel="nofollow">My Order</a>
			</dd>
		</dl>

		<dl class="mk_dd1">
			<dt>
				Company Policy
			</dt>
			<dd>
				<a target="_top" href="#l" rel="nofollow">Payment &amp; Returns</a>
			</dd>
			<dd>
				|
			</dd>
			<dd>
				<a target="_top" href="#" rel="nofollow">Shipping Charge</a>
			</dd>
		</dl>

	</div>

	<div class="clear"></div>
	<ul class="sys_links"></ul>
	<div id="bottom">
		<a target="_top" href="http://www.usefulsunglasses.com/sitemap.html">SiteMap</a><span class="common">Copyright © &nbsp;2012 <a target="_top" href="http://www.usefulsunglasses.com/">Cheap Oakley Sunglasses,Wholesale Oakley Sunglasses,Discount Oakley Sunglasses</a> Store Privacy Policy</span>
	</div>
</div>
<div style="display:none"></div>
<div class="clear"></div>
</div>
</body>
</html>