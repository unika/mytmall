<?php
/**
 * 前台公共模块
 * 日期:2013-03-14
 * 作者:邱银乐
 * qq:563712987
 *
 */
class PublicAction extends Action {
	public function login() {
		$this -> display();
	}

	public function logout() {
		if (session_destroy()) {
			$this -> success("logout success", "__APP__/", 1);
		}
	}

	public function check() {
		$user = D('User');
		if (md5($_POST['verify']) != $_SESSION['verify']) {
			$this -> error("验证码错误");
		}
		$map['username'] = $_POST['username'];
		$userinfo = $user -> where($map) -> find();
		if ($userinfo) {
			if (md5($_POST['password']) != $userinfo['password']) {
				$this -> error("密码错误");
			} else {
				$user -> lastLoginIp = get_client_ip();
				$user -> lastLoginTime = date("Y-m-d H:i:s");
				$user -> where('id=' . $userinfo['id']) -> save();
				//可以添加会员等级
				$_SESSION['username'] = $userinfo['username'];
				$_SESSION['uid'] = $userinfo['id'];
				$this -> success("login success", "__APP__/User", 1);
			}

		}
	}

	public function serach() {
		import("ORG.Util.Page");
		$product = D("Product");
		$map['Name'] = array('like', $this -> _post('key'));
		$count = $product -> where($map) -> count();
		$page = new Page($count, 25);
		$list = $product -> where($map) -> limit($page -> firstRow . ',' . $page -> listRows) -> getProduct();
		$show = $page -> show();
		$this -> assign("page", $show);
		$this -> assign("list", $list);
		$this -> display();
	}

	public function productList() {
		$product = D("Product");
		$map['Name'] = array('like', "%" . trim($_GET['term'] . "%"));
		$list = $product -> distinct(true) -> where($map) -> getField("Name", TRUE);
		if ($list) {
			//直接输出json字符形式,,给jquery自动完成传递数据
			echo json_encode($list);
		} else {
			$this -> error("无此产品");
		}
	}

}
?>