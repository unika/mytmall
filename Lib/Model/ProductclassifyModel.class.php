<?php
/**
 * 产品分类模型
 */
class ProductclassifyModel extends Model {
	public function getInfo() {
		$list = $this -> select();
		foreach ($list as $key => $value) {
			$count = count(json_decode($value['ProductIdList']), TRUE);
			$list[$key]['count'] = $count;
		}
		return $list;
	}

}
?>