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


<script>
    $(document).ready(function(data) {
        $(".add").click(function() {
            var mydialog = $.dialog;
            mydialog({
                title : "添加物流",
                okValue : "添加",
                content : delivery,
                lock : true,
                ok : function() {
                    $.post("__URL__/insert", $("#delivery").serialize(), function(data) {
                        if (data.status == 1) {
                            alert(data.info.message);
                        } else {
                            alert(data.info.message);
                        }
                    }, 'json');

                },
                cancelValue : "取消",
                cancel : function() {
                    this.close();

                }
            });

        });
        $(".del").click(function() {
            var id = $(this).attr("aid");
            $.confirm("确认要删除吗?", function() {
                $.post("__URL__/del", {
                    "id" : id
                }, function(data) {
                    if (data) {
                        $.alert(data.info.message);
                    } else {
                        $.alert("没有找到数据");
                    }
                }, 'json');

            }, function() { value:"取消"

            })
        })
    }); 
</script>
<body>
	<h1><a class="add" href="javascript:void(0)"> 添加物流信息 </a></h1>
	<table>
		<tr>
			<td>物流名称</td><td>价格</td><td>状态</td><td>价格波动</td><td>操作</td>
		</tr>

		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($vo["Name"]); ?></td><td><?php echo ($vo["Price"]); ?></td><td>
				<?php if(($vo["Status"]) == "0"): ?><span class="warring">禁用</span>
					<?php else: ?>
					<span class="green"> 启用</span><?php endif; ?></td><td><?php echo ($vo["DynamicPrice"]); ?></td><td><a class="del" aid="<?php echo ($vo["id"]); ?>" href="javascript:void(0)">删除</a></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>

	</table>
	<div id="page">
		<?php echo ($page); ?>
	</div>
</body>
</html>