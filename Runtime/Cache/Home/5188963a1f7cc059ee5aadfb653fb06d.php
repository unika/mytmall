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

<script>
	$(document).ready(function() {
		print_country("C_Country");
		$("#C_Country").val("");
		var index = $("#C_Country ").get(0).selectedIndex;
		print_state('C_State', index);
		$("#C_State").val("");
		print_country("B_Country");
		$("#B_Country").val("");
		var index = $("#B_Country ").get(0).selectedIndex;
		print_state('B_State', index);
		$("#B_State").val("");
	})
	//将收货地址复制为付款地址
	function sync_shipping_address(chk) {
		if (chk.checked) {
			$("input[name='B_Username']").val($("input[name='C_Username']").val());
			$("input[name='B_FirstName']").val($("input[name='C_FirstName']").val());
			$("input[name='B_SecondName']").val($("input[name='C_SecondName']").val());
			$("input[name='B_Address']").val($("input[name='C_Address']").val());
			$("input[name='B_City']").val($("input[name='C_City']").val());
			$("input[name='B_PostCode']").val($("input[name='C_PostCode']").val());
			$("input[name='B_Tel']").val($("input[name='C_Tel']").val());
			$("input[name='B_Email']").val($("input[name='C_Email']").val());
			$("#B_Country").val($("#C_Country").val());
			var index = $("#B_Country").get(0).selectedIndex;
			print_state('B_State', index);
			$("#B_State").val($("#C_State").val());
		} else {
			$("input[name='B_FirstName']").val('');
			$("input[name='B_Username']").val('');
			$("input[name='B_SecondName']").val('');
			$("input[name='B_Address']").val('');
			$("input[name='B_City']").val('');
			$("input[name='B_PostCode']").val('');
			$("input[name='B_Tel']").val('');
			$("input[name='B_Email']").val('');
			$("#B_Country").val('');
			var index = $("#B_Country ").get(0).selectedIndex;
			print_state('B_State', index);
			$("#B_State").val('');
		}
	}
</script>
<div id="main">
	<link rel="stylesheet" href="__MYSTYLE__/pay.css" type="text/css">
	<form method="post" action="/Order/step2" id="pay_from1">
		<div id="from1">
			<div class="pay_t">
				1. Shipping Information
			</div>
			<div class="pay_l">
				<br>
				<p>
					<span class="pay_t1">Shipping Address</span>Exact and complete information is appreciated, or it will fail to delivery to you.
				</p>
				<br>
				<ul>

					<li>
						<span class="name">Username:<i class="fixed_red">*</i></span>
						<input id="C_Username" name="C_Username" value="<?php echo ($username); ?>" type="text" />
					</li>

					<li>
						<span class="name">First Name:<i class="fixed_red">*</i></span>
						<input id="C_FirstName" name="C_FirstName" value="<?php echo ($firstName); ?>" type="text" />

					</li>

					<li>
						<span class="name">Last Name:<i class="fixed_red">*</i></span>
						<input id="C_SecondName" name="C_SecondName" value="<?php echo ($secondName); ?>" type="text" />

					</li>

					<li>
						<span class="name">Address:<i class="fixed_red">*</i></span>
						<input id="C_Address" name="C_Address" size="80" value="<?php echo ($address); ?>" type="text" />

					</li>

					<li>
						<span class="name">City:<i class="fixed_red">*</i></span>
						<input id="C_City"  name="C_City" value="<?php echo ($city); ?>" type="text" />

					</li>

					<li>
						<span class="name">Country:<i class="fixed_red">*</i></span>					

						<select onchange="print_state('C_State',this.selectedIndex);" id="C_Country" name="C_Country">
							<option value="">Select Country</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia And Herzegowina">Bosnia And Herzegowina</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="China">China</option><option value="Chile">Chile</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo The Democratic Republic">Congo The Democratic Republic</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote d Ivoire (Ivory Coast)">Cote d Ivoire (Ivory Coast)</option><option value="Croatia">Croatia</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Dominican Republic">Dominican Republic</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Estonia">Estonia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France (Includes Monaco)">France (Includes Monaco)</option><option value="French Guiana">French Guiana</option><option value="Gambia">Gambia</option><option value="Germany">Germany</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guyana">Guyana</option><option value="Guam">Guam</option><option value="Haiti">Haiti</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Japan">Japan</option><option value="Jamaica">Jamaica</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kuwait">Kuwait</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia">Macedonia</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Montenegro">Montenegro</option><option value="Morocco">Morocco</option><option value="Myanmar (Burma)">Myanmar (Burma)</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nigeria">Nigeria</option><option value="Norway">Norway</option><option value="Pakistan">Pakistan</option><option value="Palestinian Territory Occupied">Palestinian Territory Occupied</option><option value="Panama">Panama</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Paraguay">Paraguay</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russian">Russian</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Scotland">Scotland</option><option value="Serbia">Serbia</option><option value="Singapore">Singapore</option><option value="Slovak Republic">Slovak Republic</option><option value="Slovenia">Slovenia</option><option selected="selected" value="South Africa">South Africa</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Timor Leste">Timor Leste</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Uruguai">Uruguai</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Wales">Wales</option><option value="Yugoslavia">Yugoslavia</option><option value="Zambia">Zambia</option>
						</select>
					</li>
					<li>
						<span class="name">State/province:<i class="fixed_red">*</i></span>
						<input id="C_State" name="C_State"  size="50" type="text" value="" />
					</li>
					<li>
						<span class="name">Post/Zip Code:<i class="fixed_red">*</i></span>
						<input id="C_PostCode" name="C_PostCode" value="<?php echo ($postCode); ?>" type="text" />
					</li>
					<li>
						<span class="name">TEL:<i class="fixed_red">*</i></span>
						<input id="C_Tel" name="C_Tel" value="<?php echo ($tel); ?>" type="text">
					</li>

					<li>
						<span class="name">Email:<i class="fixed_red">*</i></span>
						<input id="C_Email" name="C_Email" value="<?php echo ($email); ?>" type="text">

					</li>
				</ul>
			</div>
			<div class="pay_r">
				<br>
				<p>
					<span class="pay_t1">Billing Address</span>
					<br>
					<input id="copyinfo" onclick="sync_shipping_address(this)" type="checkbox">
					&nbsp; My billing address is the same as my shipping address.
				</p>
				<br>
				<ul>
					<li>
						<span class="name">Username:<i class="fixed_red">*</i></span>
						<input id="B_Username" name="B_Username" type="text" />
					</li>

					<li>
						<span class="name">First Name:<i class="fixed_red">*</i></span>
						<input type="text" id="B_FirstName" name="B_FirstName" value="" />

					</li>

					<li>
						<span class="name">Last Name:<i class="fixed_red">*</i></span>
						<input type="text" id="B_SecondName" name="B_SecondName" value="" />

					</li>

					<li>
						<span class="name">Address:<i class="fixed_red">*</i></span>
						<input type="text" id="B_Address" name="B_Address" size="80" value="" />

					</li>

					<li>
						<span class="name">City:<i class="fixed_red">*</i></span>
						<input type="text" id="B_City" name="B_City" value=""  />

					</li>

					<li>
						<span class="name">Country:<i class="fixed_red">*</i></span>
						<select onchange="print_state('B_State',this.selectedIndex);" id="B_Country" name="B_Country">
							<option value="">Select Country</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia And Herzegowina">Bosnia And Herzegowina</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="China">China</option><option value="Chile">Chile</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo The Democratic Republic">Congo The Democratic Republic</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote d Ivoire (Ivory Coast)">Cote d Ivoire (Ivory Coast)</option><option value="Croatia">Croatia</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Dominican Republic">Dominican Republic</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Estonia">Estonia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France (Includes Monaco)">France (Includes Monaco)</option><option value="French Guiana">French Guiana</option><option value="Gambia">Gambia</option><option value="Germany">Germany</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guyana">Guyana</option><option value="Guam">Guam</option><option value="Haiti">Haiti</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Japan">Japan</option><option value="Jamaica">Jamaica</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kuwait">Kuwait</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia">Macedonia</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Montenegro">Montenegro</option><option value="Morocco">Morocco</option><option value="Myanmar (Burma)">Myanmar (Burma)</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nigeria">Nigeria</option><option value="Norway">Norway</option><option value="Pakistan">Pakistan</option><option value="Palestinian Territory Occupied">Palestinian Territory Occupied</option><option value="Panama">Panama</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Paraguay">Paraguay</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russian">Russian</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Scotland">Scotland</option><option value="Serbia">Serbia</option><option value="Singapore">Singapore</option><option value="Slovak Republic">Slovak Republic</option><option value="Slovenia">Slovenia</option><option selected="selected" value="South Africa">South Africa</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Timor Leste">Timor Leste</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Uruguai">Uruguai</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Wales">Wales</option><option value="Yugoslavia">Yugoslavia</option><option value="Zambia">Zambia</option>
						</select>
					</li>
					<li>
						<span class="name">State/province:<i class="fixed_red">*</i></span>
						<input type="text" id="B_State" name="B_State"  value="" size="50" />
					</li>
					<li>
						<span class="name">Post/Zip Code:<i class="fixed_red">*</i></span>
						<input type="text" id="B_PostCode" name="B_PostCode" value="" id="Text2" />

					</li>

					<li>
						<span class="name">TEL:<i class="fixed_red">*</i></span>
						<input type="text" id="B_Tel" name="B_Tel" value=""/>

					</li>

					<li>
						<span class="name">Email:<i class="fixed_red">*</i></span>
						<input type="text" id="B_Email" name="B_Email"  value=""/>
					</li>
				</ul>
				<input class="Submit1" value="" type="submit" id="Submit1" style="width:84px; float:right; text-align:right;" />
			</div>
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