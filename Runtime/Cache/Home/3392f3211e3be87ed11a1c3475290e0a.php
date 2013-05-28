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
                            })

						</script>

						<!--顶部搜索Widget开始-->
						<form method="post" name="mini-search" target="_blank" action="/Public/serach">
							<input id="go" value=" " alt="Search" src="__MYSTYLE__Images/go.jpg" type="image">
							<input value="" onblur="" onfocus="" name="key" id="Gstr" type="text">
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
	</div>
	<div class="main">
		<div class="left">
			<div id="left">
				<b>categories</b>
				<div class="">
					<ul>
						<?php echo W("Category",array("count"=>10,"Display"=>"tree"));?>
					</ul>
				</div>
			</div>
			<div class="adv1">
				<?php echo W("Ad",array("count"=>1,"Display"=>"single","width"=>"169px","height"=>"209px"));?>
			</div>
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

		<div id="right">
			<!-------------------------下级目录列表开始----------------------------------------------------->
			<div class="subcat">
				<ul style="margin: 0px; padding: 0px;">
					<?php if(is_array($subcat)): $i = 0; $__LIST__ = $subcat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="float: left; width: 120px; border: 1px dotted rgb(204, 204, 204); text-align: center; margin: 2px; line-height: 25px;">
							<a href="__URL__/<?php echo ($vo["Name"]); ?>"><?php echo ($vo["Name"]); ?></a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<!-------------------------下级目录列表结束---------------------------------------------------->

			<h2 class="iuy_cate_title" style="display:"><a target="_top" href="" title="<?php echo ($name); ?>"><?php echo ($name); ?></a></h2>
			<!--频道或类说明-->
			<div id="des" style="display:"></div>
			<!--频道或类说明-->

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
			<script>
                $(document).ready(function() {
                    $(".colorb").click(function() {
                        $(this).toggleClass("colorA");
                        $(this).parent().find("span").not(this).removeClass("colorA");
                        var json = new Array();
                        $(".colorb").each(function(i) {
                            if ($(this).hasClass("colorA")) {
                                //将选取产品的属性存入一个数组
                                json.push('"' + $(this).attr("name") + '":"' + $.trim($(this).text()) + '"');
                            }
                        });
                        //将一个数组转为json字符串用于传值到后端
                        var a = $.parseJSON('{' + json.join() + '}');
                        $.post("/Category/serach", a, function(data) {
                            $(".index_new_mian").empty();

                            if (data.status == 1) {
                                var html = new String();
                                $.each(data.data, function(index, item) {
                                    html += '<div class="list">';
                                    html += '<a class="l_img" title="' + item.Name + '" href="/Product/show/id/' + item.id + '" target="_top">';
                                    html += '<img alt="' + item.Name + '" src="/Upload/Product/' + item.Img.Img + '">';
                                    html += '</a>';
                                    html += '<a class="l_name" href="/Product/show/id/' + item.id + '" title="' + item.Name + '" target="_top">' + item.Name + '</a>';
                                    html += '<div class="price">';
                                    html += '<span class="sys_cur">$</span>';
                                    html += '<span class="sys_p">' + item.Price + ' </span>';
                                    html += '</div>';
                                    html += '</div>';
                                })
                                $(".index_new_mian").append(html);
                            } else {
                                $(".index_new_mian").append(data.info);
                            }

                        }, 'json');

                    });
                });
			</script>
			<?php if(is_array($AttrValue)): foreach($AttrValue as $keys=>$vo): ?><div style="border: 1px solid rgb(204, 204, 204); margin: 2px 0px; padding: 7px;">
					<span> <?php echo ($vo["Name"]); ?> </span>
					<?php if($vo["ParamType"] == 0): ?><span style="margin: 2px 0px; padding: 7px;cursor: pointer">
							<?php if(is_array($vo["ParamValue"])): foreach($vo["ParamValue"] as $subkey=>$subvo): ?><input type="text" name="<?php echo ($vo["Name"]); ?>" value='<?php echo ($subvo); ?>' /><?php endforeach; endif; ?> </span>
						<?php else: ?>
						<?php if(is_array($vo["ParamValue"])): foreach($vo["ParamValue"] as $subkey=>$subvo): ?><span class="colorb" name="<?php echo ($vo["Name"]); ?>" value='<?php echo ($subvo); ?>' style="margin: 2px 0px; padding: 7px; cursor: pointer"> <?php echo ($subvo); ?> </span><?php endforeach; endif; endif; ?>
				</div><?php endforeach; endif; ?>

			<div style="display: none;" id="sys_search">

				<b>Selected: </b>

				<br class="clear">
			</div>
			<ul style="display: none;" id="choose">

				<li class="clear"></li>
			</ul>

			<div class="pager">
				<div style=" float: right;">
					<select id="sortBy">
						<option value="#">Sort by: new_items</option><option value="#">Sort by: best_sellers</option><option value="#">Sort by: price_high_to_low</option><option value="#">Sort by: price_low_to_high</option><option value="/Gucci-c-168.html?catid=168&amp;orderby=name_a_z" selected="selected">Sort by: name_a_z</option><option value="#">Sort by: name_z_a</option>
					</select>
					&nbsp;
					<select id="PageSize" onchange="location.href=this.value">
						<option value="#" selected="selected">20 Per Page</option><option value="#">40 Per Page</option><option value="#">60 Per Page</option><option value="#">80 Per Page</option><option value="#">100 Per Page</option>
					</select>
				</div>

			</div>
			<div class="clear"></div>
			<div class="list_search">
				<div class="index_new_mian">
					<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="list">
							<a target="_top" class="l_img" href="/Product/show/Id/<?php echo ($vo["Id"]); ?>" title="<?php echo ($vo["Name"]); ?>"><img src="<?php echo ($vo["Img"]); ?>" alt="Gucci Active Mask Sunglasses"></a>
							<a target="_top" class="l_name" title="<?php echo ($vo["Name"]); ?>" href="/Product/show/Id/<?php echo ($vo["Id"]); ?>"><?php echo ($vo["Name"]); ?></a>
							<div class="price">
								<span class="sys_cur">$</span><span class="sys_p"><?php echo ($vo["Price"]); ?> </span>
							</div>

						</div><?php endforeach; endif; else: echo "" ;endif; ?>

				</div>
			</div>
			<br>
			<div class="clear"></div>
			<!--分页-->
			<div class="page" style="text-align: center;">
				<?php echo ($page); ?>
			</div>
			<!--分页-->
		</div>
	</div>
	<div class="clear"></div>
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