<?php
header("Content-type:text/html; charset=utf-8");

/**
 * Payitrust online payment
 *
 * 提交数据到支付网关
 *
 */

//从数据库或SESSION,COOKIE等处读取订单相关数据或生成相关数据

function utf8_htmldecode($str) {
	$str = str_replace("&", "&amp;", trim($str));
	$str = str_replace("\"", "&quot;", trim($str));
	$str = str_replace("<", "&lt;", trim($str));
	$str = str_replace(">", "&gt;", trim($str));
	$str = str_replace("'", "&#39;", trim($str));
	return $str;
}

//过滤ASCII码32-127位之外的订单字符串
function filter_code($str) {
	if ($str == null || $str == "") {
		return "";
	} else {
		$str = str_split($str);
		for ($ii = 0; $ii < count($str); $ii++) {
			if (ord($str[$ii]) < 32 || ord($str[$ii]) > 127) {
				$str[$ii] = '';
			}
		}
	}
	$str = implode('', $str);

	return $str;
}

//接口版本
$version = trim("PHP V1.0.0");
//商户证书
$orderhash = trim("Nez7jW5rJxl3yrGqQSZu15mSg2sT8epgJbIGRmBRb5DEXjXjLdVEZeTR1P0qDmsEhftxRaIDris4BR35fjh4rUpFr0ObvknYN7wSZAALDsmRVXpjV4luewmvYXfZvHih");
//商户号
$merchantid = trim("100107");
//商户订单日期
$orderdate = trim(date('YmdHis', time()));
//商户订单号
$orderid = trim($orderdate . mt_rand(10000, 99999));
//字符编码集
$encoding = trim("utf-8");
//交易类型
$transtype = trim("IC");
//界面语言格式
$language = trim("English");
//服务器返回地址
$callbackurl = trim("http://localhost/Payment/MB/OrderReturnS2S.php");
//浏览器返回地址
$browserbackurl = trim("http://localhost/Payment/MB/OrderReturn.php");
//交易地址
$accessurl = trim("www.97ganghuo.com");

//下面是购物车信息

//商户订单交易币种
$currency = trim("USD  ");
//商户订单交易金额
$orderamount = trim("0.01    ");
//商户订单实际交易金额
$payamount = trim("0.01");
//产品名称
$productname1 = trim("xiezi    ");
//产品货号
$productsn1 = trim("002");
//产品数量
$quantity1 = trim("1");
//产品单价
$unit1 = trim("2.5");
//运费
$shippingfee = trim($_POST['shippingfee']);
//商户备注1
$remark1 = trim($_POST['remark1']);
//商户备注2
$remark2 = trim($_POST['remark2']);
//商户备注3
$remark3 = trim($_POST['remark3']);

//下面是账单信息

//账单EMAIL
$billemail = trim($_POST['B_Email']);
//账单电话
$billphone = trim($_POST['B_Tel']);
//账单地址

$billaddress = trim($_POST['B_Address']);
//账单国家
$billcountry = trim($_POST['B_Country']);
//账单地区
$billprovince = trim($_POST['B_State']);
//账单城市
$billcity = trim($_POST['B_City']);
//账单邮编
$billpost = trim($_POST['B_PostCode']);

//收货姓名
$deliveryname = trim($_POST['C_FirstName']);
//收货地址
$deliveryaddress = trim($_POST['C_Address']);
//收货国家
$deliverycountry = trim($_POST['C_Country']);
//收货城市
$deliverycity = trim($_POST['C_City']);
//收货地区
$deliveryprovince = trim($_POST['C_State']);
//收货人联系EMAIL
$deliveryemail = trim($_POST['C_Email']);
//收货人联系电话
$deliveryphone = trim($_POST['C_Tel']);
//收货人邮编
$deliverypost = trim($_POST['C_PostCode']);

//全字段订单字符串
$orderstr = $orderhash . $version . $encoding . $language . $merchantid . $orderid . $orderdate . $currency . $orderamount . $payamount . $transtype . $callbackurl . $browserbackurl . $accessurl . $remark1 . $remark2 . $remark3 . $productname1 . $productsn1 . $quantity1 . $unit1 . $shippingfee . $billaddress . $billcountry . $billprovince . $billcity . $billemail . $billphone . $billpost . $deliveryname . $deliveryaddress . $deliverycountry . $deliveryprovince . $deliverycity . $deliveryemail . $deliveryphone . $deliverypost;

//商户订单签名
$signature = md5(filter_code($orderstr));

//提交数据到支付网关
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head id="Head1" runat="server">
		<meta http-equiv="content-Type" content="text/html; charset=utf-8" />
		<title>国际信用卡商户订单支付接口(新接口)</title>
		<style type="text/css">
			TD {
				FONT-SIZE: 9pt
			}
			SELECT {
				FONT-SIZE: 9pt
			}
			OPTION {
				COLOR: #5040aa;
				FONT-SIZE: 9pt
			}
			INPUT {
				FONT-SIZE: 9pt;
				width: 106px;
			}
		</style>

	</head>
	<body>

		<form action="https://payment.payitrust.com/Payment/PayPage.aspx" method="POST" name="frm" id="frm">
			<table width="420" border="1" cellspacing="0" cellpadding="3" bordercolordark="#FFFFFF" bordercolorlight="#333333" bgcolor="#F0F0FF" align="center">
				<tr bgcolor="#8070FF">
					<td colspan="2" align="center"><font color="#FFFF00"><b>商户模拟测试(模拟交易接口)</b></font></td>
				</tr>
				<tr>
					<td>商户号</td>
					<td>
					<input id="merchantid" name="merchantid" type="text" value="<?php echo utf8_htmldecode($merchantid); ?>"/>
					<!--测试商户号--></td>
				</tr>
				<tr>
					<td>商户订单号</td>
					<td>
					<input type="text" name="orderid" id="orderid" size="40" value="<?php echo utf8_htmldecode($orderid); ?>"/>
					</td>
				</tr>
				<tr>
					<td>编码集</td>
					<td>
					<input name="encoding" type="text" id="encoding"  value="<?php echo utf8_htmldecode($encoding); ?>" />
					</td>
				</tr>
				<tr>
					<td>交易类型</td>
					<td>
					<input id="transtype" name="transtype" type="text" value="<?php echo utf8_htmldecode($transtype); ?>" />
					</td>
				</tr>
				<tr>
					<td>语言</td>
					<td>
					<input id="language" name="language" type="text" value="<?php echo utf8_htmldecode($language); ?>" />
					</td>
				</tr>
				<tr>
					<td>服务器返回地址</td>
					<td><!--请修改地址为您自己的实际环境服务器返回地址（即s2s对账地址）-->
					<input name="callbackurl" type="text" id="callbackurl"  value="<?php echo utf8_htmldecode($callbackurl); ?>"/>
					</td>
				</tr>
				<tr>
					<td>浏览器返回地址</td>
					<td><!--请修改为您自己的实际环境的地址浏览器返回地址（即客户支付完成后，商城提供的客户返回页面）-->
					<input id="browserbackurl" name="browserbackurl" type="text"  value="<?php echo utf8_htmldecode($browserbackurl); ?>"/>
					</td>
				</tr>
				<tr>
					<td>交易地址</td>
					<td><!--请修改为您自己的交易地址（即提交交易到我司网关的页面地址）-->
					<input id="accessurl" name="accessurl" type="text" value="<?php echo utf8_htmldecode($accessurl); ?>"/>
					</td>
				</tr>
				<tr>
					<td>商户订单时间</td>
					<td>
					<input id="orderdate" name="orderdate" type="text" value="<?php echo utf8_htmldecode($orderdate); ?>" />
					</td>
				</tr>
				<tr>
					<td>商户订单交易币种</td>
					<td>
					<input id="currency" name="currency" type="text" value="<?php echo utf8_htmldecode($currency); ?>" />
					</td>
				</tr>
				<tr>
					<td>商户订单交易金额</td>
					<td>
					<input name="orderamount" id="orderamount" type="text" value="<?php echo utf8_htmldecode($orderamount); ?>"/>
					</td>
				</tr>
				<tr>
					<td>商户订单实际交易金额</td>
					<td>
					<input name="payamount" id="payamount" type="text" value="<?php echo utf8_htmldecode($payamount); ?>"/>
					</td>
				</tr>
				<tr>
					<td>商户订单签名</td>
					<td>
					<input name="signature" id="signature" type="text" value="<?php echo utf8_htmldecode($signature); ?>"/>
					</td>
				</tr>
				<tr>
					<td>顾客购买的产品名称</td>
					<td>
					<input id="productname1" name="productname1" type="text" value="<?php echo utf8_htmldecode($productname1); ?>" />
					</td>
				</tr>
				<tr>
					<td>顾客购买的产品货号</td>
					<td>
					<input id="productsn1" name="productsn1" type="text" value="<?php echo utf8_htmldecode($productsn1); ?>" />
					</td>
				</tr>
				<tr>
					<td>顾客购买的产品数量</td>
					<td>
					<input id="quantity1" name="quantity1" type="text" value="<?php echo utf8_htmldecode($quantity1); ?>" />
					</td>
				</tr>
				<tr>
					<td>顾客购买的产品单价</td>
					<td>
					<input id="unit1" name="unit1" type="text" value="<?php echo utf8_htmldecode($unit1); ?>" />
					</td>
				</tr>
				<tr>
					<td>运费</td>
					<td>
					<input id="shippingfee" name="shippingfee" type="text" value="<?php echo utf8_htmldecode($shippingfee); ?>" />
					</td>
				</tr>
				<tr>
					<td>商户备注1</td>
					<td><!-- 此备注可提交商户网站看到的订单号 -->
					<input id="remark1" name="remark1" type="text" value="<?php echo utf8_htmldecode($remark1); ?>" />
					</td>
				</tr>
				<tr>
					<td>商户备注2</td>
					<td>
					<input id="remark2" name="remark2" type="text" value="<?php echo utf8_htmldecode($remark2); ?>" />
					</td>
				</tr>
				<tr>
					<td>商户备注3</td>
					<td>
					<input id="remark3" name="remark3" type="text" value="<?php echo utf8_htmldecode($remark3); ?>" />
					</td>
				</tr>
				<tr>
					<td>接口版本</td>
					<td>
					<input id="version" name="version" type="text" value="<?php echo utf8_htmldecode($version); ?>" />
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><b>账单信息</b></td>
				</tr>
				<tr>
					<td>账单EMAIL</td>
					<td>
					<input id="billemail" name="billemail" type="text" value="<?php echo utf8_htmldecode($billemail); ?>" />
					</td>
				</tr>
				<tr>
					<td>账单电话</td>
					<td>
					<input id="billphone" name="billphone" type="text" value="<?php echo utf8_htmldecode($billphone); ?>" />
					</td>
				</tr>
				<tr>
					<td>账单地址</td>
					<td>
					<input id="billaddress" name="billaddress" type="text" value="<?php echo utf8_htmldecode($billaddress); ?>" />
					</td>
				</tr>
				<tr>
					<td>账单国家</td>
					<td>
					<input id="billcountry" name="billcountry" type="text" value="<?php echo utf8_htmldecode($billcountry); ?>" />
					</td>
				</tr>
				<tr>
					<td>账单地区</td>
					<td>
					<input id="billprovince" name="billprovince" type="text" value="<?php echo utf8_htmldecode($billprovince); ?>" />
					</td>
				</tr>
				<tr>
					<td>账单城市</td>
					<td>
					<input id="billcity" name="billcity" type="text" value="<?php echo utf8_htmldecode($billcity); ?>" />
					</td>
				</tr>
				<tr>
					<td>账单邮编</td>
					<td>
					<input id="billpost" name="billpost" type="text" value="<?php echo utf8_htmldecode($billpost); ?>" />
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><b>收货信息</b></td>
				</tr>
				<tr>
					<td>收货姓名</td>
					<td>
					<input id="deliveryname" name="deliveryname" type="text" value="<?php echo utf8_htmldecode($deliveryname); ?>" />
					</td>
				</tr>
				<tr>
					<td>收货地址</td>
					<td>
					<input id="deliveryaddress" name="deliveryaddress" type="text" value="<?php echo utf8_htmldecode($deliveryaddress); ?>" />
					</td>
				</tr>
				<tr>
					<td>收货国家</td>
					<td>
					<input id="deliverycountry" name="deliverycountry" type="text" value="<?php echo utf8_htmldecode($deliverycountry); ?>" />
					</td>
				</tr>
				<tr>
					<td>收货城市</td>
					<td>
					<input id="deliverycity" name="deliverycity" type="text" value="<?php echo utf8_htmldecode($deliverycity); ?>" />
					</td>
				</tr>
				<tr>
					<td>收货地区</td>
					<td>
					<input id="deliveryprovince" name="deliveryprovince" type="text" value="<?php echo utf8_htmldecode($deliveryprovince); ?>" />
					</td>
				</tr>
				<tr>
					<td>收货人联系EMAIL</td>
					<td>
					<input id="deliveryemail" name="deliveryemail" type="text" value="<?php echo utf8_htmldecode($deliveryemail); ?>" />
					</td>
				</tr>
				<tr>
					<td>收货人联系电话</td>
					<td>
					<input id="deliveryphone" name="deliveryphone" type="text" value="<?php echo utf8_htmldecode($deliveryphone); ?>" />
					</td>
				</tr>
				<tr>
					<td>收货人邮编</td>
					<td>
					<input id="deliverypost" name="deliverypost" type="text" value="<?php echo utf8_htmldecode($deliverypost); ?>" />
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
					<input type="submit" value="提交"/>
					<input type="reset" value="重置"/>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
