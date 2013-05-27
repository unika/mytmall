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
	<form method="post" action="__URL__/OrderPay" id="pay_from1">
	<!-- <form method="post" action="https://payment.payitrust.com/Payment/PayPage.aspx" id="pay_from1"> -->
		<div id="from3">
			<div class="pay_t3">
				3. Order Review
			</div>

			<div class="western_cart">
				<ul>
					<li class="western_col1 western_col1_item">
						ITEM
					</li>
					<li class="western_col2">
						QTY
					</li>
					<li class="western_col3">
						PRICE
					</li>
				</ul>
				<div id="sys_num">
					<ol>
						<!--循环读取购物车内的商品开始-->
						<?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="western_col1">
								<a target="_top" href="/Product/show/id/<?php echo ($vo["item_id"]); ?>" title="<?php echo ($vo["item_name"]); ?>"> <img style=" width:45px; float:left; padding-right:20px;" title="<?php echo ($vo["item_name"]); ?>" alt="<?php echo ($vo["item_name"]); ?>" src="<?php echo ($vo["item_image"]); ?>"></a>
								<span> <a target="_top" href="/Product/show/id/<?php echo ($vo["item_id"]); ?>" title="<?php echo ($vo["item_name"]); ?>"><?php echo ($vo["item_name"]); ?></a>
									<br/>
									<?php if(is_array($vo["item_attrValue"])): foreach($vo["item_attrValue"] as $key=>$subvo): ?><span id="remark" name="remark"><?php echo ($subvo); ?></span><?php endforeach; endif; ?> </span>
								<br>
							</li>

							<li class="western_col2">
								<?php echo ($vo["item_num"]); ?>
							</li>
							<li class="western_col3">
								<?php echo ($vo["item_price"]); ?>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
						<!--循环读取购物车内的商品结束-->
					</ol>

					<i>Total QTY:<?php echo ($total_num); ?>&nbsp;&nbsp;&nbsp;Total Price:<?php echo ($total_price); ?>&nbsp;&nbsp;&nbsp;<a target="_top" href="/Cart/">Edit</a></i>
				</div>
			</div>

			<div id="fieldset">
				<fieldset>
					<legend>
						Delivery/Shipping Information:
					</legend><b>Your Name:</b> <?php echo $_POST['C_Username']?>
					<br>
					<b>Street Address:</b> <?php echo $_POST['C_Address'] ?>
					<br>
					<b>City:</b><?php echo $_POST['C_City'] ?>
					<br>
					<b>State:</b><?php echo $_POST['C_State'] ?>
					<br>
					<b>Country:</b> <?php echo $_POST['C_Country'] ?>
					<br>
					<b>TEL:</b> <?php echo $_POST['C_Tel'] ?>
					<br>
					<b>Post/Zip Code:</b> <?php echo $_POST['C_PostCode'] ?>
					<br>
					<b>Email:</b> <?php echo $_POST['C_Email'] ?>
					<br>

					<a target="_top" style="float: right;" href="__URL__/stepA"><i>Edit</i></a>
				</fieldset>
			</div>
			<div id="Coupon_price">
				<div id="texcoupon" style="display:">
					Coupon number:<span class="warning"><?php echo ($Coupon["No"]); ?></span>
					<!-- <input id="coup" name="txtCoupon" value="Enter your " onfocus="if (this.value == 'Enter your coupon number') this.value = '';" onblur="if (this.value == '') this.value = 'Enter your coupon number';" type="text">
					<input id="btn_gcp" value="" onclick="ValidateCoupon()" type="button"> -->
				</div>

				<ul class="chk_total">
					<li>
						<span class="chk_total1">Coupon:</span>$<b id="sys_Coupon"><span class="warning">-
							<?php if(empty($Coupon["Price"])): ?>0.00
								<?php else: ?>
								<?php echo ($Coupon["Price"]); endif; ?></span></b>
					</li>
					<li>
						<span class="chk_total1">Shipping Fee:</span><b id="sys_ShippingFee">$<?php echo ($shippingfee); ?></b>
					</li>
					<li>
						<span class="chk_total1">Sub-Total:</span><b id="sys_subtotal">$<?php echo ($sub_total); ?></b>
					</li>
					<li class="chk_coupon">
						<b class="chk_total1">Total Amount:</b><b id="sys_grandtotal"><?php echo ($total_num); ?></b>
					</li>

					<li style=" float:right;">
						<input name="checkoutBt" class="chk_pay" value="" type="submit">
						<br>
						<span style=" float:right; display:block; width:400px;">Every order you place with us is safe and secure.</span>
					</li>
				</ul>
			</div>
		</div>

		<!-----------------------------------------------------------------------隐藏的表单部分开始----------------------->

		<input id="deliveryname" name="deliveryname" value="<?php echo utf8_htmldecode($deliveryname); ?>" type="hidden">
		<input id="deliveryaddress" name="deliveryaddress" value="<?php echo utf8_htmldecode($deliveryaddress); ?>" type="hidden">
		<input id="deliverycity"  name="deliverycity" value="<?php echo utf8_htmldecode($deliverycity); ?>" type="hidden">
		<input id="deliverycountry" name="deliverycountry" value="<?php echo utf8_htmldecode($deliverycountry); ?>" type="hidden">

		<!-- 省份洲注意前面传值 -->
		<input id="deliveryprovince" name="deliveryprovince" value="<?php echo utf8_htmldecode($deliveryprovince); ?>" type="hidden">
		<input id="deliverypost" name="deliverypost" value="<?php echo utf8_htmldecode($deliverypost); ?>" type="hidden">
		<input id="deliveryphone" name="deliveryphone" value="<?php echo utf8_htmldecode($deliveryphone); ?>" type="hidden">
		<input id="deliveryemail" name="deliveryemail" value="<?php echo utf8_htmldecode($deliveryemail); ?>" type="hidden">
		<input id="billaddress" name="billaddress" value="<?php echo utf8_htmldecode($billaddress); ?>" type="hidden" />
		<input id="billcity" name="billcity" value="<?php echo utf8_htmldecode($billcity); ?>" type="hidden" />
		<input id="billcountry" name="billcountry" value="<?php echo utf8_htmldecode($billcountry); ?>" type="hidden">
		<!-- 省份洲注意前面传值 -->
		<input id="billprovince" name="billprovince" value="<?php echo utf8_htmldecode($billprovince); ?>" type="hidden" />
		<input id="billpost" name="billpost" value="<?php echo utf8_htmldecode($billpost); ?>" type="hidden" />
		<input id="billphone" name="billphone" value="<?php echo utf8_htmldecode($billphone); ?>" type="hidden"/>
		<input id="billemail" name="billemail" value="<?php echo utf8_htmldecode($billemail); ?>" type="hidden" />
		<input id="merchantid" name="merchantid" type="hidden" value="<?php echo utf8_htmldecode($merchantid); ?>"/>
		<input type="hidden" name="orderid" id="orderid" size="40" value="<?php echo utf8_htmldecode($orderid); ?>"/>
		<input id="orderdate" name="orderdate" type="hidden" value="<?php echo utf8_htmldecode($orderdate); ?>" />
		<input id="currency" name="currency" type="hidden" value="<?php echo utf8_htmldecode($currency); ?>" />
		<input name="orderamount" id="orderamount" type="hidden" value="<?php echo utf8_htmldecode($orderamount); ?>"/>
		<input name="encoding" type="hidden" id="encoding"  value="<?php echo utf8_htmldecode($encoding); ?>" />
		<input id="transtype" name="transtype" type="hidden" value="<?php echo utf8_htmldecode($transtype); ?>" />
		<input id="language" name="language" type="hidden" value="<?php echo utf8_htmldecode($language); ?>" />
		<input name="payamount" id="payamount" type="hidden" value="<?php echo utf8_htmldecode($payamount); ?>"/>
		<input name="signature" id="signature" type="hidden" value="<?php echo utf8_htmldecode($signature); ?>"/>
		<!--产品循环-->
		<?php if(is_array($product)): foreach($product as $key=>$vo): ?><input id="<?php echo ($key); ?>" name="<?php echo ($key); ?>" type="hidden" value="<?php echo ($vo); ?>" /><?php endforeach; endif; ?>
		<!--产品循环-->
		<input id="shippingfee" name="shippingfee" type="hidden" value="<?php echo utf8_htmldecode($shippingfee); ?>" />
		<input id="version" name="version" type="hidden" value="<?php echo utf8_htmldecode($version); ?>" />
		<input name="callbackurl" type="hidden" id="callbackurl"  value="<?php echo utf8_htmldecode($callbackurl); ?>"/>
		<input id="browserbackurl" name="browserbackurl" type="hidden"  value="<?php echo utf8_htmldecode($browserbackurl); ?>"/>
		<input id="accessurl" name="accessurl" type="hidden" value="<?php echo utf8_htmldecode($accessurl); ?>"/>
		<!--备注循环-->
		<?php if(is_array($remark)): foreach($remark as $key=>$vo): ?><input id="<?php echo ($key); ?>" name="<?php echo ($key); ?>" value="<?php echo ($vo); ?>" type="hidden" /><?php endforeach; endif; ?>
		<!--产备注循环-->
		<!-----------------------------------------------------------------------隐藏的表单部分结束------------------------>

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