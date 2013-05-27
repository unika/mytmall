<?php
/*
 * 产品模型
 * 日期:2013-03-12
 * 作者:邱银乐
 *
 */
class ProductModel extends Model {
	protected $_auto = array(//
	array('AddTime', 'fill_date', 1, 'callback'), //
	array('UpdateTime', 'fill_date', 2, 'callback'), //
	array('AttrValue', 'fill_attrvalue', 3, 'callback'), //
	);
	//后台产品必须选项
	protected $_validate = array(//自动验证
	array('Name', 'require', '产品名称必须'), //
	array('Page_Title', 'require', 'SEO页面标题必须'), //
	array('Page_Keyword', 'require', 'SEO页面关键字必须'), //
	array('Page_Description', 'require', 'SEO页面描述必须'), //
	array('Price', 'require', '产品价格必须'), //
	);

	public function fill_date() {
		$AddTime = date("Y-m-d H:i:s");
		return $AddTime;
	}

	public function fill_attrvalue() {
		return $this -> AttrValue = json_encode($_POST['AttrValue']);
	}

	//返回该产品的类型ID,参数为产品id;
	public function getProductType($id) {
		$map['Id'] = $id;
		$ProductTypeId = $this -> where($map) -> getField('ProductTypeId');
		return $ProductTypeId;
	}

	public function copyToNew($id) {
		$data = $this -> find($id);
		$Img = D("Productimg");
		$data['Img'] = $Img -> where("ProductId=" . $id) -> select();
		unset($data['Id']);
		return $data;
	}

	//根据产品id,查询并返回此id的信息
	public function getProductInfo($id) {
		$list = $this -> find($id);
		return $list;
	}

	public function getProduct() {
		$list = $this -> select();
		$image = M("Productimg");
		$type = M("Producttype");
		foreach ($list as $key => $value) {
			$img = $image -> where('Id=' . $value['ProductImgId']) -> getField('Img');
			$typename = $type -> where('Id=' . $value['ProductTypeId']) -> getField("name");
			$list[$key]['Img'] = $img;
			$list[$key]['Typename'] = $typename;
		}
		return $list;
	}

	//获取产品只含主图信息
	public function getinfo() {
		$list = $this -> find();
		$image = M("Productimg");
		$type = M("Producttype");
		$img = $image -> field('Id,Img') -> where('UseType=1 and ProductId=' . $list['Id']) -> find();
		$typeinfo = $type -> field('Id,name') -> where('Id=' . $list['ProductTypeId']) -> find();
		$list['Img'] = $img;
		$list['Typename'] = $typeinfo;
		return $list;
	}

	//读取产品的全部图片信息
	public function getAllinfo() {
		$list = $this -> find();
		$image = M("Productimg");
		$type = M("Producttype");
		$img = $image -> field('Img,UseType') -> where('ProductId=' . $list['Id']) -> select();
		$typeinfo = $type -> field('Id,Name') -> where('Id=' . $list['ProductTypeId']) -> find();
		$list['Img'] = $img;
		$list['Typename'] = $typeinfo;
		return $list;
	}

	//挂件产品信息
	public function getWidget() {
		$list = $this -> field("Id,Name,Price,score") -> select();
		$image = M("Productimg");
		$type = M("Producttype");
		foreach ($list as $key => $value) {
			$img = $image -> field('Img') -> where('UseType=1 and ProductId=' . $value['Id']) -> find();
			$typeinfo = $type -> field('Name') -> where('Id=' . $value['ProductTypeId']) -> find();
			$list[$key]['Img'] = $img;
			$list[$key]['Typename'] = $typeinfo;
		}
		return $list;
	}

}
?>