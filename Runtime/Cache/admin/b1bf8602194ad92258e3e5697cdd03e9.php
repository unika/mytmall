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
        $(".view").click(function() {
            $.alert(data.info);
        });
        $(".del").click(function() {
            $.post("__URL__/delUser", {
                "uid" : $(this).attr("uid")
            }, function(data) {
                $.alert(data.info);
            }, 'json');
            $(this).parents("tr").remove();
        })

        $("#add").click(function() {
            $.dialog({
                title : "添加会员",
                content : register,
                lock : true,
                okValue : "添加",
                ok : function() {
                    $.post("__URL__/addUser", $("#register").serialize(), function(data) {
                        if (data.status == 1) {
                            $("#reset").trigger("click");
                            var html = new String();
                            html += '<tr>';
                            html += '<td>' + data.data.id + '</td>';
                            html += '<td>' + data.data.username + '</td>';
                            html += '<td>' + data.data.email + '</td>';
                            html += '<td>' + data.data.address + '</td>';
                            html += '<td>';
                            if (data.data.status == 0) {
                                html += '<span style="color:red">no</span>';
                            } else {
                                html += '<span style="color:green">yes</span>';
                            }
                            html += '</td>';
                            html += '<td>' + data.data.regIp + '</td>';
                            html += '<td>' + data.data.regTime + '</td>';
                            html += '<td>' + data.data.lastLoginIp + '</td>';
                            html += '<td>' + data.data.lastLoginTime + '</td>';
                            html += '<td><a href="javascript:void(0)" class="view" uid="' + data.data.id + '">查看订单</a>&nbsp; <a href="javascript:void(0)" class="pwd" uid="' + data.data.id + '">修改密码</a>&nbsp;<a href="javascript:void(0)" class="email" uid="' + data.data.id + '">修改邮箱</a> &nbsp;<a href="javascript:void(0)" class="del" uid="' + data.data.id + '">删除</a></td>';
                            html += '</tr>';
                            $("#table").find("tr:first").after(html);
                        } else {
                            $.alert(data.info);
                        }
                    }, 'json');
                    return false;
                },
                cancelValue : "取消",
                cancel : function() {
                    this.close();
                }
            });
        })
        $(".email").click(function() {
            var uid = $(this).attr("uid");
            $.dialog({
                initialize : function() {
                    $("#uid").val(uid);
                },
                title : "修改邮箱",
                content : email,
                lock : true,
                okValue : "修改",
                ok : function() {
                    $.post("__URL__/updateEmail", $("#email").serialize(), function(data) {
                        $.alert(data.info);
                    }, 'json');
                },
            });

        });

        $(".pwd").click(function() {
            var uid = $(this).attr("uid");
            $.dialog({
                initialize : function() {
                    $("#uid").val(uid);
                },
                title : "修改密码",
                content : pass,
                lock : true,
                okValue : "修改",
                ok : function() {
                    $.post("__URL__/updatePwd", $("#pass").serialize(), function(data) {
                        $.alert(data.info);
                    }, 'json');
                },
            });

        });

    })
</script>
<body>
	<h1><a href="javascript:void(0)" id="add">添加会员</a></h1>
	<table id="table">
		<tr>
			<td>编号</td>
			<td>姓名</td>
			<td>邮箱</td>
			<td>地址</td>
			<td>邮箱验证</td>
			<td>注册ip</td>
			<td>注册时间</td>
			<td>最后登陆ip</td>
			<td>最后登陆时间</td>
			<td>操作</td>
		</tr>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["username"]); ?></td>
				<td><?php echo ($vo["email"]); ?></td>
				<td><?php echo ($vo["address"]); ?></td>
				<td>
				<?php if(($vo["status"]) == "0"): ?><span style="color:red">no</span>
					<?php else: ?>
					<span style="color:green">yes</span><?php endif; ?></td>
				<td><?php echo ($vo["regIp"]); ?></td>
				<td><?php echo ($vo["regTime"]); ?></td>
				<td><?php echo ($vo["lastLoginIp"]); ?></td>
				<td><?php echo ($vo["lastLoginTime"]); ?></td>
				<td><a href="javascript:void(0)" class="view" uid="<?php echo ($vo["id"]); ?>">查看订单</a>&nbsp; <a href="javascript:void(0)" class="pwd" uid="<?php echo ($vo["id"]); ?>">修改密码</a>&nbsp;<a href="javascript:void(0)" class="email" uid="<?php echo ($vo["id"]); ?>">修改邮箱</a> &nbsp;<a href="javascript:void(0)" class="del" uid="<?php echo ($vo["id"]); ?>">删除</a></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>

	</table>
	<div class="page">
		<?php echo ($page); ?>
	</div>
</body>
</html>