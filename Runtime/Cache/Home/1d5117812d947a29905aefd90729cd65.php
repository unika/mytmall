<?php if (!defined('THINK_PATH')) exit(); foreach($category as $row){ ?>
<?php switch($Display){ case "nav": ?>
<a target="_top" href="/Category/<?php echo ($row["name"]); ?>"><?php echo ($row["name"]); ?></a> &gt;
<?php break; case "tree": ?>
<!--一级分类开始 -->
<li class="">
	<a target="_top" href="/Category/<?php echo ($row["name"]); ?>"><?php echo ($row["name"]); ?></a>
	<!--二级分类开始 -->
	<div class="">
		<ul>
			<li class="">
				<a target="_top" href="#"></a>
			</li>
		</ul>
	</div>
	<!--二级分类结束 -->
</li>
<!--一级分类结束 -->

<?php } } ?>