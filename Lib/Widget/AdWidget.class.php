<?php
/**
 * 文件:广告挂件Adwidget
 * 功能:统计文告点击效果
 * 日期:2013-04-27
 * 作者：邱银乐
 */
class AdWidget extends Widget {
	public function render($data) {
		$ad = D("Adurl");
		$data['ad'] = $ad -> field('id,image,url,start_time,end_time') -> limit($data['count']) -> filter_Ad();

		$content = $this -> renderFile('Ad', $data);
		return $content;
	}

}
?>