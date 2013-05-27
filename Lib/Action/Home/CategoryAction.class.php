<?php
/**
 * 购物车模块
 */

class CategoryAction extends Action {
	public function index() {
		$this -> display();
	}

	//执行前端的空操作,利于seo
	public function _empty() {
		import("ORG.Util.Page");
		$name = ACTION_NAME;
		$map['name'] = array('like', $name);
		$category = D("Producttype");
		$product = D("Product");
		$list = $category -> where($map) -> getInfo();
		$count = $result = $product -> where("ProductTypeId=" . $list['id']) -> count();
		$page = New Page($count, 2);
		$result = $product -> where("ProductTypeId=" . $list['id']) -> limit($page -> firstRow, $page -> listRows) -> getWidget();
		$show = $page -> show();
		$this -> assign($list);
		$this -> assign('result', $result);
		$this -> assign('page', $show);
		$this -> display("index");
	}

	public function serach() {
		//复合查询要新建一个条件$where,['_logic']表示是什么样的逻辑and,or,然后用  $map['_complex']并如$map条件来查询
		$where = 'SELECT id, attrValue,Name,Price FROM shop_product WHERE attrValue like "%';
		$sql = implode('%" and attrValue like "%', $_POST);
		$where .= $sql . '%"';
		$product = D("Product");
		$list = $product -> query($where);
		$image = M("Productimg");
		foreach ($list as $key => $value) {
			$img = $image -> field('Img') -> where('UseType=1 and ProductId=' . $value['id']) -> find();
			$list[$key]['Img'] = $img;		
		}
	//	print_r($list);
		$count = count($list);
		if ($list) {
			$this -> ajaxReturn($list, '', 1);
		} else {
			$this -> error("无法查询到符合条件的产品");
		}

	}

}
?>