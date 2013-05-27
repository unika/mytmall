<?php
header("Content-type:text/html; charset=utf-8"); 

/**
* 返回验证页面
* 验证方式：交易返回接口采用Md5摘要验证
* 验证过程: 明文信息: MD5原文=base64_decode(hash)+本地密钥，验证与signature是否匹配
*
* 注意:由于可能多次返回支付结果,故需要商户的系统有能力处理多次返回的情况.
*/

//接收返回数据

//交易证书
$orderhash = 'OnQ6IHtjkXOJXmAtcmOOpW3rnDlaEe7JO4BF3cMPu2ZEyrju8HsyhNw1syTewtNgYf42T3zaJ7tv5y14uZb6VJBaHJnEsHsbpTPtwpJehrYiua43GXTGsPupM3vkQ4Rb';//测试商户证书
$version = $_REQUEST['version'];   //接口版本号 设定为:PHP_1.0.0(接口名称+版本号)
$encoding = $_REQUEST['encoding']; //编码字符集 设定utf-8
$language = $_REQUEST['language']; //界面语言
$merchantid = $_REQUEST['merchantid']; //商户号，由Moneybrace分配
$transtype = $_REQUEST['transtype']; //交易类型IC
$orderid = $_REQUEST['orderid']; //订单号
$orderdate = $_REQUEST['orderdate']; //订单时间
$currency = $_REQUEST['currency'];//订单币种
$orderamount = $_REQUEST['orderamount']; //订单金额
$paycurrency = $_REQUEST['paycurrency']; //实际支付币种
$payamount = $_REQUEST['payamount'];//实际支付金额
$remark1 = $_REQUEST['remark1'];  //商户备注1
$remark2 = $_REQUEST['remark2'];//商户备注2
$remark3 = $_REQUEST['remark3'];//商户备注3
$productname = array();
$productsn = array();
$quantity = array();
$unit = array();
for ($i = 0; $i < 10; $i++)
	{
		$num=$i+1;
		$str=strval($num);
		//&&!empty($_REQUEST['productname'.$str]) !isset($_REQUEST['productname'.$str])
		error_reporting(E_ALL);
        if (!empty($_REQUEST['productname'.$str])){
			echo $i;
            $productname[$i] = $_REQUEST['productname'.$str]; //商品$i名称
            $productsn[$i] = $_REQUEST['productsn'.$str];   //商品$i货号
            $quantity[$i] = $_REQUEST['quantity'.$str];//商品i数量
            $unit[$i] = $_REQUEST['unit'.$str];//商品i单价
    }else{
		break;
	}
$shippingfee = $_REQUEST['shippingfee']; //运费
$deliveryname = $_REQUEST['deliveryname']; //收货人姓名 
$deliveryaddress = $_REQUEST['deliveryaddress'];//收货人地址
$deliverycountry = $_REQUEST['deliverycountry'];//收货人国家 
$deliveryprovince = $_REQUEST['deliveryprovince'];//收货人地区
$deliverycity = $_REQUEST['deliverycity']; //收货人城市
$deliveryemail = $_REQUEST['deliveryemail']; //收货人email
$deliveryphone = $_REQUEST['deliveryphone'];//收货人电话
$deliverypost = $_REQUEST['deliverypost'];//收货人邮编
$transid = $_REQUEST['transid'];//交易订单ID
$transdate = $_REQUEST['transdate'];//交易时间
$status = $_REQUEST['status']; //状态
$message = $_REQUEST['message']; //信息
$signature = $_REQUEST['signature']; //订单签名
$hash=$version.$encoding.$language.$merchantid.$transtype.$orderid.$orderdate.$currency.$orderamount.$paycurrency.$payamount.$remark1.$remark2.$remark3;
for ($j = 0; $j < 10; $j++){
	if (empty($productname[$j])||$productname[$j]==""){
		break;
	}else{
        $hash=$hash.$productname[$j] . $productsn[$j] . $quantity[$j] . $unit[$j];
	}
}
$hash=$hash.$shippingfee.$deliveryname.$deliveryaddress.$deliverycountry.$deliveryprovince.$deliverycity.$deliveryemail.$deliveryphone.$deliverypost.$transid.$transdate.$status;
$hashbytes = md5($orderhash.$hash);
if (strtoupper($hashbytes) == strtoupper($signature)){
	if($status=='Y'){
		echo ('交易成功');//可以跳转到指定的成功页面
		exit();
	}
}
?>