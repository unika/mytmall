<?php if (!defined('THINK_PATH')) exit();?><!--记录广告点击率-->
<script>
	function adclick(obj) {
		var url = $(obj).attr("href");
		$(obj).attr("href", "#");
		$.post("__GROUP__/admin/Admanager/adClick", {
			'id' : $(obj).attr("id"),
		});
		$(obj).attr("href", url);
	}
</script>

<!--$row['valid']检查广告是否有效,有效才输出0为未开始,1为进行中,2为过期-->
<?php $count=count($ad); foreach($ad as $row){ if($row['valid']=='1'){ switch($Display){ case "single": ?>
<li>
	<!-- <a id="<?php echo ($row["id"]); ?>" onclick="adclick(this)" href="javascript:void(0)" style="display: block;"> <img  style="width: 300px;" src="/Upload/Admanager/<?php echo ($row["image"]); ?>" alt="" /> </a> -->
	<a class="" id="<?php echo ($row["id"]); ?>" target="_blank" onclick="adclick(this)" href="<?php echo ($row["url"]); ?>" title="<?php echo ($row["Name"]); ?>"> <img style="width: <?php echo ($width); ?>;height: <?php echo ($height); ?>;" src="/Upload/Admanager/<?php echo ($row["image"]); ?>" alt="<?php echo ($row["Name"]); ?>" /> </a>
</li>
<?php break; case "slide": ?>
<div style="opacity: 0; z-index: 0;" class="smask">
	<a  id="<?php echo ($row["id"]); ?>" target="_blank" onclick="adclick(this)" title="<?php echo ($row["Name"]); ?>" href="<?php echo ($row["url"]); ?>" rel="nofollow"><img style="width: <?php echo ($width); ?>;height: <?php echo ($height); ?>;" title="<?php echo ($row["Name"]); ?>" alt="<?php echo ($row["Name"]); ?>" src="/Upload/Admanager/<?php echo ($row["image"]); ?>" /></a>
</div>

<?php break; case "banner": ?>
<a  id="<?php echo ($row["id"]); ?>" target="_blank" onclick="adclick(this)" title="<?php echo ($row["Name"]); ?>" href="<?php echo ($row["url"]); ?>" ><img style="width: <?php echo ($width); ?>;height: <?php echo ($height); ?>;" title="<?php echo ($row["Name"]); ?>" alt="<?php echo ($row["Name"]); ?>" src="/Upload/Admanager/<?php echo ($row["image"]); ?>" /></a>
<?php } } } ?>

<!--如果有其他的广告类型-->