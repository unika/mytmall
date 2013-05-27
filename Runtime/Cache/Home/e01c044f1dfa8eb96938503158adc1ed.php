<?php if (!defined('THINK_PATH')) exit();?><ul>
	<?php foreach($product as $row){ ?>
	<?php if($type!="promotion"){ ?>
	<div class="list">
		<a class="l_img" title="<?php echo ($row["Name"]); ?>" href="/Product/show/id/<?php echo ($row["id"]); ?>" target="_top"> <img alt="<?php echo ($row["Name"]); ?>" src="/Upload/Product/<?php echo ($row["Img"]["Img"]); ?>"> </a>
		<a class="l_name" href="/Product/show/id/<?php echo ($row["id"]); ?>" title="<?php echo ($row["Name"]); ?>" target="_top"><?php echo ($row["Name"]); ?></a>
		<!--产品分数-->
		<?php if($row['score'] !=null){ ?>
		<img src="/Tpl/Home/h_lv3/Public/Images/<?php echo ($row["score"]); ?>star.jpg">
		<?php }else { ?>
		<img src="/Tpl/Home/h_lv3/Public/Images/1star.jpg">
		<?php } ?>
		<!--产品分数-->
		<div class="price">
			<span class="sys_cur">$</span>
			<span class="sys_p"><?php echo ($row["Price"]); ?></span>
		</div>
	</div>
	<?php }else { ?>
	<div class="list">
		<a title="<?php echo ($row["Name"]); ?>" href="/Product/show/id/<?php echo ($row["id"]); ?>" class="l_img" target="_top"><img alt="<?php echo ($row["Name"]); ?>" src="/Upload/Product/<?php echo ($row["Img"]["Img"]); ?>" /></a>
		<p>
			<a href="/Product/show/id/<?php echo ($row["id"]); ?>" title="<?php echo ($row["Name"]); ?>" class="l_name" target="_top"><?php echo ($row["Name"]); ?></a>
			<?php if($row['score'] !=null){ ?>
			<img src="/Tpl/Home/h_lv3/Public/Images/<?php echo ($row["score"]); ?>star.jpg">
			<?php }else { ?>
			<img src="/Tpl/Home/h_lv3/Public/Images/1star.jpg">
			<?php } ?>
			<span class="price"><span class="sys_cur">$</span><span class="sys_p"><?php echo ($row["Price"]); ?></span></span>
		</p>
	</div>
	<?php }} ?>

</ul>