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
	<div id="path">
		<!--面包屑路径-->
		<?php echo W("Category",array("count"=>10,"Display"=>"nav"));?>
	</div>
	<div class="left">
		<div id="left">
			<b>categories</b>
			<div class="">
				<!--产品分类Widget开始--->
				<ul>
					<?php echo W("Category",array("count"=>10,"Display"=>"tree"));?>
				</ul>
				<!--产品分类Widget结束--->
			</div>
		</div>

		<!--推荐广告Widget开始-->
		<div class="adv1">
			<?php echo W("Ad",array("count"=>1,"Display"=>"single","width"=>"169px","height"=>"209px"));?>
		</div>
		<!--推荐广告Widget结束-->
		<div class="index_hot">
			<b></b>
			<?php echo W("Product",array("count"=>10,"type"=>"promotion"));?>
		</div>
		<div class="Chat_Online">
			<b>Chat Online</b>
			<a href="msnim:chat?contact=" target="_top" rel="nofollow">MSN: Click Here</a>
			<a target="_top" href="mailto:amyonlineoutlet24hours@hotmail.com" rel="nofollow">Email: Click Here</a>
		</div>
	</div>
	<div class="right">
		<div class="gsk_adv">
			<div style=" width:524px; float:left; overflow:hidden;">
				<div id="myjQuery">
					<div style="opacity: 0.957649;" id="myjQueryContent">
						<?php echo W("Ad",array("count"=>5,"Display"=>"slide","width"=>"529px","height"=>"229px"));?>
					</div>
					<ul id="myjQueryNav">
						<li class="">
							<a target="_top" href="#"></a>
						</li>
						<li class="">
							<a target="_top" href="#"></a>
						</li>
					</ul>
				</div>
			</div>

			<div class="rollBox">
				<b>Best Deals</b>
				<a target="_top" onmouseout="ISL_StopUp()" onmouseup="ISL_StopUp()" onmousedown="ISL_GoUp()" href="javascript:void(0)" class="Lbtn"></a>
				<div id="ISL_Cont" class="Cont">
					<div class="ScrCont">
						<div id="top_products_show">
							<ul class="gsk_productlist" iconlist="">
								<li class="gsk_pro_img">
									<a target="_top" title="Chanel Active Rectangle Sunglasses" href="http://www.usefulsunglasses.com/Chanel-Active-Rectangle-Sunglasses-p-3067.html"> <img class="gsk_imgclass" title="Chanel Active Rectangle Sunglasses" alt="Chanel Active Rectangle Sunglasses" src="__MYSTYLE__Images/SG0000001366_1.jpg"> </a>
								</li>

								<li class="gsk_pro_name">
									<a target="_top" title="Chanel Active Rectangle Sunglasses" href="http://www.usefulsunglasses.com/Chanel-Active-Rectangle-Sunglasses-p-3067.html"> Chanel Active Rectangle Sunglasses</a>
								</li>
								<li><img src="__MYSTYLE__Images/4star.jpg">
								</li>
								<li class="gsk_pro_price">
									<span class="gsk_sys_cur sys_cur">$</span><span class="gsk_sys_p sys_p">14.99</span>
								</li>
							</ul>
						</div>
						<div id="Lists">
							<ul class="gsk_productlist" iconlist="">
								<li class="gsk_pro_img">
									<a target="_top" title="Dior Active Mask Sunglasses" href="http://www.usefulsunglasses.com/Dior-Active-Mask-Sunglasses-p-4155.html"> <img class="gsk_imgclass" title="Dior Active Mask Sunglasses" alt="Dior Active Mask Sunglasses" src="__MYSTYLE__Images/SG0000002983_1.jpg"> </a>
								</li>

								<li class="gsk_pro_name">
									<a target="_top" title="Dior Active Mask Sunglasses" href="http://www.usefulsunglasses.com/Dior-Active-Mask-Sunglasses-p-4155.html"> Dior Active Mask Sunglasses</a>
								</li>
								<li><img src="__MYSTYLE__Images/4star.jpg">
								</li>
								<li class="gsk_pro_price">
									<span class="gsk_sys_cur sys_cur">$</span><span class="gsk_sys_p sys_p">14.99</span>
								</li>

							</ul>

						</div>
					</div>
				</div>
				<a target="_top" onmouseout="ISL_StopDown()" onmouseup="ISL_StopDown()" onmousedown="ISL_GoDown()" href="javascript:void(0)" class="Rbtn"></a>
			</div>

		</div>
		<div class="index_new_adv">
			<!--横幅广告Widget开始-->
			<?php echo W("Ad",array("count"=>1,"Display"=>"banner","width"=>"779px","height"=>"41px"));?>
			<!--横幅广告Widget结束-->
		</div>

		<div class="index_new">
			<b><img src="__MYSTYLE__Images/hot_b.jpg" alt="#"></b>
			<!--产品开始-->
			<div class="index_new_mian">
				<?php echo W("Product",array('count'=>10,'type'=>'new'));?>
			</div>
			<!--产品结束-->

		</div>
		<div class="index_new">
			<b><img src="__MYSTYLE__Images/new_b.jpg" alt="#"></b>
			<div class="index_new_mian">
				<?php echo W("Product",array('count'=>10,'type'=>'hot'));?>
			</div>
		</div>
	</div>
	<div id="indexdes" style=" display: "></div>
	<img src="__MYSTYLE__Images/china.gif">
	<script src="__MYSTYLE__Js/mini_site_playing.js" type="text/javascript"></script>
	<script src="__MYSTYLE__Js/product-lrscroll.js" type="text/javascript"></script>
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