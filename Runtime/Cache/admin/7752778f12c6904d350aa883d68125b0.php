<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<title>show</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="__PUBLIC__/Css/admin.css" type="text/css" rel="stylesheet" />

		<style>
			li {
				list-style: none;
				width: 200px;
				height: 200px;
				float: left;
			}
		</style>
	</head>

	<body>

		<ul>
			<?php if(is_array($tp_data)): $i = 0; $__LIST__ = $tp_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
					<p>
						<img src="__TMPL__<?php echo ($vo["image"]); ?>" />
					</p>

					<p>
						<?php echo ($vo["author"]); ?>
					</p>
					<p>
						<?php echo ($vo["date"]); ?>
					</p>
					<p>
						<?php echo ($vo["version"]); ?>
					</p>
					<a href="__URL__/update_tpl/tpname/<?php echo ($vo["author"]); ?>">启用</a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>

		</ul>
	</body>
</html>