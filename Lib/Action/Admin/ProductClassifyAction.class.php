<?php
/**
 * 产品归类标签
 * 2013-05-30
 * 邱银乐
 */
class ProductClassifyAction extends Action {
	public function index() {
		import("ORG.Util.Page");
		$classify = M("Productclassify");
		$count = $classify -> count();
		$page = new Page($count, 25);
		$data = $classify -> order("Id desc") -> limit($page -> firstRow . ',' . $page -> listRows) -> select();
		$show = $page -> show();
		$this -> assign('list', $data);
		$this -> assign('page', $show);
		$this -> display();
	}

	public function addClass() {
		$classify = D("Productclassify");
		if ($classify -> create()) {
			if ($Id = $classify -> add()) {
				$data = $classify -> find($Id);
				$this -> ajaxReturn($data, '推荐类型创建成功', 1);
			} else {
				$this -> error("推荐类型创建失败");
			}
		} else {
			$this -> error($classify -> getError());
		}

	}

	public function delClass() {
		$classify = D("Productclassify");
		$Id = $this -> _post("Id");
		if ($classify -> delete($Id)) {
			$this -> success('删除成功');
		} else {
			$this -> error("删除失败");
		}

	}

	public function getClass() {
		$classify = D("Productclassify");
		$Id = $this -> _post("Id");
		$data = $classify -> find($Id);
		if ($data) {
			$this -> ajaxReturn($data, '', 1);
		} else {
			$this -> error("无此推荐类型");
		}

	}

	public function updateClass() {
		$classify = D("Productclassify");
		$map['Id'] = $this -> _post("Id");
		$classify -> create();
		if ($classify -> where($map) -> save() !== false) {
			$this -> success('更新成功');
		} else {
			$this -> error("更新失败");
		}

	}

}
?>