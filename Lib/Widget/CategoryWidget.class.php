<?php
/**
 * 文件:广告挂件Adwidget
 * 功能:统计文告点击效果
 * 日期:2013-04-27
 * 作者：邱银乐
 */
class CategoryWidget extends Widget {
	public function render($data) {
		$category = D("Producttype");
		$data['category'] = $category -> field("id,name") -> where("pid=0") -> select();
		$content = $this -> renderFile('Category', $data);
		return $content;
	}

}
?>