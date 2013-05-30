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
	$(document).ready(function() {
		$("#add").click(function() {
			$.dialog({
				title : "添加推荐类型",
				content : classify,
				okValue : "添加",
				lock : true,
				ok : function() {
					$.post("__URL__/addClass", $("#classify").serialize(), function(data) {
						if (data.status == 1) {
							var html = new String();
							html += '<tr>';
							html += '<td>' + data.data.Id + '</td>';
							html += '<td>' + data.data.Iden + '</td>';
							html += '<td>' + data.data.IdenAlias + '</td>';
							html += '<td>' + data.data.ProductList + '</td>';
							html += '<td><a href="javascript:void(0)" class="del" aid="' + data.data.Id + '">删除</a>|';
							html += '<a href="javascript:void(0)" class="edit" aid="' + data.data.Id + '">编辑</a></td>';
							html += '</tr>';
							$("#table").find("tr:first").after(html);
							$.alert(data.info);
						} else {
							$.alert(data.info);
						}

					}, 'json')
					return false;
				}
			})
		})
		$("body").on('click', 'button', function() {
			$.dialog({
				title : "添加产品",
				content : "sss",
				okValue : "关闭",
				ok : function() {
					this.close();
					return false;
				}
			})
		})
		$("body").on('click', '.del', function() {
			var obj = $(this);
			$.post("__URL__/delClass", {
				"Id" : $(this).attr("aid")
			}, function(data) {
				if (data.status == 1) {
					obj.parents("tr").remove();
					$.alert(data.info);
				}
			}, 'json');

		})
		$("body").on('click', '.edit', function() {
			var obj = $(this);
			$.post("__URL__/getClass", {
				"Id" : $(this).attr("aid")
			}, function(data) {
				if (data.status == 1) {
					$.dialog({
						initialize : function() {
							$("#Iden").val(data.data.Iden);
							$("#IdenAlias").val(data.data.IdenAlias)
							$("#IdenAlias").after("<input type='hidden' name='Id' id='Id' value='" + data.data.Id + "' />");
						},
						title : "编辑推荐类型",
						content : classify,
						okValue : "保存",
						ok : function() {
							$.post("__URL__/updateClass", $("#classify").serialize(), function(data) {
								if (data.status == 1) {
									$.alert(data.info);
								} else {
									$.alert(data.info);
								}

							}, 'json')

							return false;
						},
						cancelValue : "取消",
						cancel : function() {
							this.close();
						}
					})

				} else {
					$.alert(data.info);
				}

			}, 'json');

		})
		$(".addProduct").click(function() {
			$.alert("addProduct"+$(this).attr("aid"));
		})
	})
</script>
<h1><a href="javascript:void(0)" id="add">添加推荐类型</a></h1>
<table id="table">
	<tr>
		<td>编号</td><td>类型名称</td><td>别名</td><td>产品集合</td>
	</tr>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<td> <?php echo ($vo["Id"]); ?></td>
			<td><?php echo ($vo["Iden"]); ?></td>
			<td><?php echo ($vo["IdenAlias"]); ?></td>
			<td><?php echo ($vo["ProductList"]); ?></td>
			<td><a href="javascript:void(0)" class="del" aid="<?php echo ($vo["Id"]); ?>">删除</a>| <a href="javascript:void(0)" class="edit" aid="<?php echo ($vo["Id"]); ?>">编辑</a>| <a href="javascript:void(0)" class="addProduct" aid="<?php echo ($vo["Id"]); ?>">添加产品</a>|</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</body>
</html>