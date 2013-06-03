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
		<script src="__PUBLIC__/Js/common.js" type="text/javascript"></script>
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
							<?php if(empty($_SESSION['cart']['total_number'])): ?><a target="_top" href="__ROOT__/Cart" rel="nofollow" class="sys_cart">My Bag:( <span id="item">0</span> items)</a>
								<?php else: ?>
								<a target="_top" href="__ROOT__/Cart" rel="nofollow" class="sys_cart">My Bag:( <span id="item"><?php echo ($_SESSION['cart']['total_number']); ?></span> items)</a><?php endif; ?>

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

                            })

						</script>
						<!--顶部搜索Widget开始-->
						<form method="post" name="mini-search" target="_blank" action="/Public/serach">
							<input id="go" value=""  alt="Search" src="__MYSTYLE__Images/go.jpg" type="image">
							<input value="" name="key" id="Gstr" type="text">
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
		<?php echo W("Category",array("count"=>10,"Display"=>"nav"));?>
		<!-- <a target="_top" href="/">Home</a> &gt; <a target="_top" href="#">Oakley</a> &gt; <a target="_top" href="#">Mask</a> -->
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
		<div class="adv1">
			<?php echo W("Ad",array("count"=>1,"Display"=>"single","width"=>"169px","height"=>"209px"));?>
		</div>
		<div class="index_hot">
			<?php echo W("Product",array("count"=>10,"type"=>"promotion"));?>
		</div>
		<!-- 客服挂件 -->
		<div class="Chat_Online">
			<b>Chat Online</b>
			<a href="msnim:chat?contact=" target="_top" rel="nofollow">MSN: Click Here</a>
			<a target="_top" href="mailto:amyonlineoutlet24hours@hotmail.com" rel="nofollow">Email: Click Here</a>
		</div>
	</div>

	<script src="__PUBLIC__/Js/raty/jquery.raty.min.js" type="text/javascript"></script>
	<link href="__PUBLIC__/Js/raty/css/demo.css" rel="stylesheet" type="text/css" />
	<div class="right">
		<script>          
            $(document).ready(function() {
                //评论星星
                $('#star').raty({
                    path : '__PUBLIC__/Js/raty/Img'
                });  
                //tab切换
                $("#index ul li").click(function() {
                    var tmp;
                    $(this).addClass("hover");
                    $(this).parents("ul").find("li").not(this).removeClass("hover");
                    tmp = $(this).index();
                    $(this).parents("ol").find("li").removeClass("hover");
                    $("#index ol li").each(function() {
                        if ($(this).index() == tmp) {
                            $(this).addClass("hover");
                        } else {
                            $(this).removeClass("hover");
                        }
                    });
                });
                //用户评论
                $(".comment").click(function() {
                    $.post("__URL__/addComment", $("#comment").serialize(), function(data) {
                        $.alert(data.info);
                    }, 'json');

                });
                $(".colorb").click(function() {
                    $(this).toggleClass("colorA");
                    $(this).parent().find("span").not(this).removeClass("colorA");
                });

            })
         
		</script>
		<style>
			.attrValue {
				background: none repeat scroll 0 0 #C9FFC9;
				border: 1px solid #CCCCCC;
			}
			.colorA {
				background: none repeat scroll 0 0 #F5DEB3;
				color: #FF4500;
			}
		</style>

		<div id="proshow">
			<div id="proinfo">
				<div class="img">
					<div class="main_img">
						<?php if(is_array($Img)): foreach($Img as $key=>$vo): if(($vo["UseType"]) == "1"): ?><a target="_top" class="jqzoom" href="<?php echo ($Img); ?>"> <img src="<?php echo ($vo["Img"]); ?>" id="minImage" alt="<?php echo ($Name); ?>" width="400" /></a><?php endif; endforeach; endif; ?>
					</div>
					<div class="min_img">
						<?php if(is_array($Img)): foreach($Img as $key=>$vo): if(($vo["UseType"]) != "1"): ?><a target="_top" class="jqzoom" href="#"> <img src="<?php echo ($vo["Img"]); ?>" id="minImage" alt="<?php echo ($Name); ?>" width="90" /></a><?php endif; endforeach; endif; ?>
					</div>
				</div>
				<div class="info">
					<div class="pro_con">
						<h2 id="sys_pn"><?php echo ($Name); ?></h2>
						<div style=" width:160px;">
							<?php if(empty($score)): ?>Review: <img style=" margin-top:1px;" src="__MYSTYLE__Images/1star.jpg" alt="<?php echo ($Name); ?>">
								<?php else: ?>
								Review: <img style=" margin-top:1px;" src="__MYSTYLE__Images/<?php echo ($score); ?>star.jpg" alt="<?php echo ($Name); ?>"><?php endif; ?>
						</div>
						<div style="padding:6px 0">
							Availability:
							<!--库存-->
							<?php if(($DbNum) == "0"): ?>out of stock
								<?php else: ?>
								In Stock<?php endif; ?>
						</div>
						<form method="post" onsubmit="return false;" id="buyfrom">
							<!--属性循环-->
							<div style="background: none repeat scroll 0px 0px rgb(201, 255, 201); border: 1px solid rgb(204, 204, 204); padding: 5px;">
								<?php if(is_array($AttrValue)): foreach($AttrValue as $keys=>$vo): ?><p style="width: 80%; clear: both; padding-left: 10px; margin:2px 0px 10px 0px;">
										<span style="margin-right: 6px; font-weight: bold; color: rgb(129, 105, 87); padding: 3px;" ><?php echo ($keys); ?>:</span>
										<?php if(is_array($vo)): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$subvo): $mod = ($i % 2 );++$i;?><span name="<?php echo ($keys); ?>" value="<?php echo ($subvo); ?>" class="colorb" style="cursor: pointer;margin: 2px 2px 0px 2px; display: block; border: 1px solid rgb(204, 204, 204); text-align: center; font-size: 14px;padding: 3px"><?php echo ($subvo); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
									</p><?php endforeach; endif; ?>
								<div class="clear"></div>
							</div>
							<!--属性循环-->
							<div class="price">
								<span>Price:</span>
								<b class="sys_cur big_font">$</b><b class="sys_p big_font curprice" id="price"><?php echo ($Price); ?></b>
								<div class="clear"></div>
							</div>

							<div class="qty">
								<font>Qty : </font>
								<input id="qty" name="buyNum" value="1" size="5">
								<div style="padding-bottom: 2px">
									<a href="javascript:void(0);" class="addgoods1" onclick="addgoods('qty')"  style="display: block;"> <img src="__MYSTYLE__Images/good_detail_up.gif" style="cursor: pointer;" /></a>
									<a href="javascript:void(0);"  class="delgoods" onclick="delgoods('qty')" style="display: block;"> <img src="__MYSTYLE__Images/good_detail_down.gif" style="cursor: pointer;" /></a>
								</div>
							</div>
							<!--社会化插件开始-->
							<div id="social">
								<a target="_top" href="" rel="nofollow"> <img src="__MYSTYLE__Images/icon_email_friend.png"></a>
								<a href="http://www.twitter.com/" target="_top"><img title="Twitter" alt="Twitter" src="__MYSTYLE__Images/icon_twitter.png" border="0"></a>
								<a href="http://pinterest.com/" target="_top"><img alt="pinterest" src="__MYSTYLE__Images/pinit6.png" border="0"></a>
								<a href="http://www.facebook.com/" target="_top"><img alt="Facebook" src="__MYSTYLE__Images/icon_facebook.png" border="0"></a>
							</div>

							<!--社会化插件结束-->
							<div class="clear"></div>
							<input type="hidden" id="id" value="<?php echo ($Id); ?>" />
							<input value="" class="addCart" onclick="addCart(this)" aid="<?php echo ($Id); ?>" src="__MYSTYLE__Images/add.jpg" type="image">
							<div id="add"></div>
						</form>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div id="index">
				<ul>
					<li class="hover">
						Product Details
					</li>
					<li>
						Shipping &amp; Return
					</li>
					<li>
						Online Security
					</li>
					<li>
						Writer A Review
					</li>
				</ul>
				<ol>
					<li class="hover" id="review">
						<?php echo ($Des); ?>
					</li>
					<li>
						Shipping &amp; Return

					</li>

					<li class="">
						Online Security
					</li>
					<li>
						<form id="comment" action="" onsubmit="return false;" method="post">
							<table>
								<tr>
									<td>Title:</td>
									<td>
									<input type="text" name="Name" style="width: 300px; height: 24px; line-height: 24px;" />
									</td>
								</tr>
								<tr>
									<td>Star:</td>
									<td><div id="star" name="Star"></div></td>
								</tr>
								<tr>
									<td>Comment:</td>
									<td>									<textarea name="Comment" style="width: 464px; height: 120px;"> </textarea></td>
								</tr>

								<tr>
									<td>
									<input type="hidden" name="ProductTypeId" value="<?php echo ($typeid); ?>" />
									<input type="hidden" name="Product_id" value="<?php echo ($id); ?>" />
									</td>
									<td>
									<input type="image" name="" class="comment" />
									</td>
								</tr>
							</table>
						</form>
					</li>

				</ol>
			</div>
			<div class="clear"></div>

		</div>
		<!--产品信息Widget结束-->

		<!--相关产品信息Widget开始-->

		<div id="may">
			<p class="maytitle"><img src="__MYSTYLE__Images/rela_b.jpg">
			</p>
			<div class="may_pro">

				<div class="list">
					<a target="_top" class="may_img" title="Chanel Lifestyle Round Sunglasses" href="http://www.usefulsunglasses.com/Chanel-Lifestyle-Round-Sunglasses-p-3165.html"><img title="Chanel Lifestyle Round Sunglasses" alt="Chanel Lifestyle Round Sunglasses" src="__MYSTYLE__Images/SG0000001268_1.jpg"></a>
					<a target="_top" class="may_name" title="Chanel Lifestyle Round Sunglasses" href="http://www.usefulsunglasses.com/Chanel-Lifestyle-Round-Sunglasses-p-3165.html">Chanel Lifestyle Round Sunglasses</a>
					<img style=" float:left; " src="__MYSTYLE__/4star.jpg" alt="">
					<br>
					<div class="may_price">
						<span class="sys_cur">$</span><span class="sys_p">14.99</span>
					</div>
				</div>

				<div class="list">
					<a target="_top" class="may_img" title="Oakley C Six Active Rectangle Sunglasses" href="http://www.usefulsunglasses.com/Oakley-C-Six-Active-Rectangle-Sunglasses-p-5466.html"><img title="Oakley C Six Active Rectangle Sunglasses" alt="Oakley C Six Active Rectangle Sunglasses" src="__MYSTYLE__/SG0000000563_1.jpg"></a>
					<a target="_top" class="may_name" title="Oakley C Six Active Rectangle Sunglasses" href="http://www.usefulsunglasses.com/Oakley-C-Six-Active-Rectangle-Sunglasses-p-5466.html">Oakley C Six Active Rectangle Sunglasses</a>
					<img style=" float:left; " src="__MYSTYLE__Images/4star.jpg" alt="">
					<br>
					<div class="may_price">
						<span class="sys_cur">$</span><span class="sys_p">15.99</span>
					</div>

				</div>

				<div class="list">
					<a target="_top" class="may_img" title="Chanel Lifestyle Oval Sunglasses" href="http://www.usefulsunglasses.com/Chanel-Lifestyle-Oval-Sunglasses-p-3094.html"><img title="Chanel Lifestyle Oval Sunglasses" alt="Chanel Lifestyle Oval Sunglasses" src="__MYSTYLE__Images/SG0000001339_1.jpg"></a>
					<a target="_top" class="may_name" title="Chanel Lifestyle Oval Sunglasses" href="http://www.usefulsunglasses.com/Chanel-Lifestyle-Oval-Sunglasses-p-3094.html">Chanel Lifestyle Oval Sunglasses</a>
					<img style=" float:left; " src="__MYSTYLE__Images/5star.jpg" alt="">
					<br>
					<div class="may_price">
						<span class="sys_cur">$</span><span class="sys_p">15.99</span>
					</div>

				</div>

				<div class="list">
					<a target="_top" class="may_img" title="ED Hardy Active Rectangle Sunglasses" href="http://www.usefulsunglasses.com/ED-Hardy-Active-Rectangle-Sunglasses-p-3729.html"><img title="ED Hardy Active Rectangle Sunglasses" alt="ED Hardy Active Rectangle Sunglasses" src="__MYSTYLE__Images/SG0000001769_1.jpg"></a>
					<a target="_top" class="may_name" title="ED Hardy Active Rectangle Sunglasses" href="http://www.usefulsunglasses.com/ED-Hardy-Active-Rectangle-Sunglasses-p-3729.html">ED Hardy Active Rectangle Sunglasses</a>
					<img style=" float:left; " src="__MYSTYLE__Images/5star.jpg" alt="">
					<br>
					<div class="may_price">
						<span class="sys_cur">$</span><span class="sys_p">15.99</span>
					</div>

				</div>

				<div class="list">
					<a target="_top" class="may_img" title="Oakley Antix Lifestyle Mask Sunglasses" href="http://www.usefulsunglasses.com/Oakley-Antix-Lifestyle-Mask-Sunglasses-p-5445.html"><img title="Oakley Antix Lifestyle Mask Sunglasses" alt="Oakley Antix Lifestyle Mask Sunglasses" src="__MYSTYLE__Images/SG0000000584_1.jpg"></a>
					<a target="_top" class="may_name" title="Oakley Antix Lifestyle Mask Sunglasses" href="http://www.usefulsunglasses.com/Oakley-Antix-Lifestyle-Mask-Sunglasses-p-5445.html">Oakley Antix Lifestyle Mask Sunglasses</a>
					<img style=" float:left; " src="__MYSTYLE__Images/4star.jpg" alt="">
					<br>
					<div class="may_price">
						<span class="sys_cur">$</span><span class="sys_p">14.99</span>
					</div>

				</div>

				<div class="list">
					<a target="_top" class="may_img" title="Fendi Lifestyle Square Sunglasses" href="http://www.usefulsunglasses.com/Fendi-Lifestyle-Square-Sunglasses-p-4233.html"><img title="Fendi Lifestyle Square Sunglasses" alt="Fendi Lifestyle Square Sunglasses" src="__MYSTYLE__Images/SG0000002905_1.jpg"></a>
					<a target="_top" class="may_name" title="Fendi Lifestyle Square Sunglasses" href="http://www.usefulsunglasses.com/Fendi-Lifestyle-Square-Sunglasses-p-4233.html">Fendi Lifestyle Square Sunglasses</a>
					<img style=" float:left; " src="__MYSTYLE__Images/5star.jpg" alt="">
					<br>
					<div class="may_price">
						<span class="sys_cur">$</span><span class="sys_p">15.99</span>
					</div>

				</div>

				<div class="list">
					<a target="_top" class="may_img" title="Chanel Lifestyle Round Sunglasses" href="http://www.usefulsunglasses.com/Chanel-Lifestyle-Round-Sunglasses-p-3929.html"><img title="Chanel Lifestyle Round Sunglasses" alt="Chanel Lifestyle Round Sunglasses" src="__MYSTYLE__Images/SG0000001569_1.jpg"></a>
					<a target="_top" class="may_name" title="Chanel Lifestyle Round Sunglasses" href="http://www.usefulsunglasses.com/Chanel-Lifestyle-Round-Sunglasses-p-3929.html">Chanel Lifestyle Round Sunglasses</a>
					<img style=" float:left; " src="__MYSTYLE__Images/5star.jpg" alt="">
					<br>
					<div class="may_price">
						<span class="sys_cur">$</span><span class="sys_p">14.99</span>
					</div>

				</div>

				<div class="list">
					<a target="_top" class="may_img" title="Versace Sport Visor Sunglasses" href="http://www.usefulsunglasses.com/Versace-Sport-Visor-Sunglasses-p-4464.html"><img title="Versace Sport Visor Sunglasses" alt="Versace Sport Visor Sunglasses" src="__MYSTYLE__Images/SG0000002672_1.jpg"></a>
					<a target="_top" class="may_name" title="Versace Sport Visor Sunglasses" href="http://www.usefulsunglasses.com/Versace-Sport-Visor-Sunglasses-p-4464.html">Versace Sport Visor Sunglasses</a>
					<img style=" float:left; " src="__MYSTYLE__Images/5star.jpg" alt="">
					<br>
					<div class="may_price">
						<span class="sys_cur">$</span><span class="sys_p">15.99</span>
					</div>

				</div>

			</div>
		</div>
		<!--相关产品信息Widget结束-->
		<div class="clear"></div>
	</div>
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