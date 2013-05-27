<?php
/**
 * 分类模型
 */
class CategoryModel extends Model {
	public function getListtree($delmit, $list) {
		global $typetree;
		foreach ($list as $key => $first) {
			$typetree .= "<p style='margin: 0px; line-height: 24px; height: 24px;'>" . $delmit . $first['info']['Name'] . "<a href='javascript:void(0)' class='edit' value='" . $first['info']['Id'] . "'>编辑</a></p>";
			if (is_array($first['child'])) {
				$this -> getListtree($delmit . $delmit, $first['child']);
			}
		}
		return $typetree;
	}

}
?>