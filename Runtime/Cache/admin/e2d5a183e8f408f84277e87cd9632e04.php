<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>商城后台管理系统</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<script src="__PUBLIC__/Js/jquery.js" type="text/javascript"></script>
		<script src="__PUBLIC__/Js/my.js" type="text/javascript"></script>
		<script src="__PUBLIC__/Js/jquery-ui.js" type="text/javascript"></script>
		<script src="__PUBLIC__/Js/artDialog/jquery.artDialog.min.js" type="text/javascript"></script>
		<script src="__PUBLIC__/Js/artDialog/artDialog.plugins.min.js" type="text/javascript"></script>
		<script src="__PUBLIC__/Js/editor/kindeditor.js" type="text/javascript"></script>
		<link href="__PUBLIC__/Js/artDialog/skins/default.css" type="text/css" rel="stylesheet" />
		<link href="__PUBLIC__/Css/admin.css" type="text/css" rel="stylesheet" />
		<link href="__PUBLIC__/Js/jquery-ui.css" type="text/css" rel="stylesheet" />
		<script src="__PUBLIC__/Js/jquery-ui.js" type="text/javascript"></script>	
	</head>


<script src="__PUBLIC__/Js/city.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('body').on('blur', '#username', function() {
            if ($.trim($("#username").val()) != '') {
                $.post("__GROUP__/User/Info", {
                    'username' : $("#username").val()
                }, function(data) {
                    if (data.status == 1) {
                        $("#country").val(data.data.country);
                        $("#email").val(data.data.email);
                        $("#state").val(data.data.state);
                        $("#address").val(data.data.address);
                    } else {
                        $.alert(data.info);
                    }
                }, 'json');
            }
        })

        $('body').on('focus', '#username', function() {
            $("#country").val('');
            $("#email").val('');
            $("#state").val('');
            $("#address").val('');
        })

        $("#add").click(function() {
            var payment;
            var delivery;
            $.getJSON("__URL__/infoArray", function(data) {
                var main = $.dialog({
                    initialize : function() {
                        $.each(data.data.payment, function(index, item) {
                            payment += "<option value='" + item.id + "'>" + item.Name + "</option>";
                        });
                        $.each(data.data.delivery, function(index, item) {
                            delivery += "<option value='" + item.id + "'>" + item.Name + "</option>";
                        });
                        print_country('country');
                        $("#country").change(function() {
                            var checkIndex = $(this).get(0).selectedIndex;
                            print_state('state', checkIndex);
                        })
                        print_state('state', 0);

                        $("#paymethod").html(payment);
                        $("#delivery").html(delivery);

                        $('#username').autocomplete({
                            minLength : 0,
                            max : 10,
                            width : 10,
                            autoFill : true,
                            source : "__URL__/userList",
                        });
                        $('#product').autocomplete({
                            minLength : 0,
                            max : 10,
                            width : 10,
                            autoFill : true,
                            source : "__URL__/productList",
                        });
                    },
                    title : "添加订单",
                    content : order,
                    button : [{
                        focus : true,
                        value : "添加产品",
                        callback : function() {
                            var backup = $.dialog({
                                title : "选择产品",
                                content : "ok",
                                okValue : "添加",
                                ok : function() {
                                    $.alert("ok");
                                    return false;
                                },
                                cancelValue : "关闭",
                                cancel : function() {
                                    backup.close();
                                }
                            })
                            return false;
                        }
                    }, {
                        value : "添加",
                        callback : function() {
                            $.post("__URL__/insert", $("#order").serialize(), function(data) {
                                $.alert(data.info);
                            }, 'json');

                        },
                    }, {
                        value : "取消",
                        callback : function() {
                            this.close();
                        }
                    }]

                })

            }, 'json');
        })
    });

</script>
<body>
	<h1><a href="javascript:void(0)" id="add"> 添加订单 </a></h1>
	<div>
		<form name="qfrom" action="_URL__/Query" method="get" style="border: 1px solid rgb(204, 204, 204); padding: 2px; margin: 5px; width: 98%; height: 55px; line-height: 55px;">
			<!-- 推广组：
			<input style="width: 150px; display: none;" panelheight="auto" multiple="true" textfield="text" valuefield="id" url="/EasyuiJson/TgzJsonData.aspx?Group2=#{Group2}" class="easyui-combotree combotree-f combo-f" comboname="Group2">
			<span class="combo" style="width: 148px;">
			<input type="text" class="combo-text validatebox-text" autocomplete="off" readonly="readonly" style="width: 130px;">
			<span><span class="combo-arrow"></span></span></span>
			-->
			<!-- 品牌：
			<input style="width: 150px; display: none;" panelheight="height:100px; overflow:auto;" multiple="true" textfield="text" valuefield="id" url="/EasyuiJson/BrandJsonData.aspx?Brand=#{Brand}" class="easyui-combotree combotree-f combo-f" comboname="Brand">
			<span class="combo" style="width: 148px;">
			<input type="text" class="combo-text validatebox-text" autocomplete="off" readonly="readonly" style="width: 130px;">
			<span><span class="combo-arrow"></span></span></span>
			支付状态：

			<select id="PayStatus" name="PayStatus">
			<option value="-1">支付状态</option><option value="2">支付成功</option><option value="3">支付失败</option><option value="1">等待处理</option><option value="0">未提交</option>
			</select>
			<br>-->
			订单号/Email：
			<input type="text" value="" name="orderId" class="input" id="Text1">
			开始时间：
			<input type="text" value="" name="st" class="input" onclick="WdatePicker()" id="Text2">
			结束时间：
			<input type="text" value="" name="et" class="input" onclick="WdatePicker()" id="Text3">
			站点：
			<input type="text" value="" name="stName" class="input" style="width: 170px;" id="Text4">
			<input type="hidden" name="subtype" id="Hidden1">
			<input type="submit" value="查询" id="Submit1">
			<input type="submit" value="导出excel" id="Submit2">
		</form>

	</div>
	<table>
		<tr>
			<td> 订单编号 </td>
			<td> 用户信息 </td>
			<td> 订单金额 </td>
			<td> 支付返回信息 </td>
			<td> 付款状态 </td>
			<td> 关键词 </td>
			<td> 产品信息 </td>
			<td> 下单时间 </td>			
		</tr>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td> <?php echo ($vo["OrderId"]); ?> </td>
				<td><a class="view" href="__URL__/viewUser/<?php echo ($vo["OrderId"]); ?>"><?php echo ($vo["C_Email"]); ?></a></td>
				<td> <?php echo ($vo["OrderPrice"]); ?></td>
				<td> 支付状态 </td>
				<td> 时效 </td>
				<td >关键词 </td>
				<td><a class="vieworder" href="__URL__/viewOrder/<?php echo ($vo["OrderId"]); ?>">详情</a></td>
				<td> <?php echo ($vo["OrderTime"]); ?> </td>
				<!-- <td><a target="_blank" href="http://zts.com"><?php echo ($vo["SiteId"]); ?></a></td>
				<td>品牌 </td> -->
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
	<div class="page">
		<?php echo ($page); ?>
	</div>
</body>
</html>