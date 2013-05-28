<?php
/**
 * 文件:前台用户模块
 * 功能:显示修改用户基本信息,购物车,订单查看
 * 作者:邱银乐
 * QQ:563712987
 * 日期:2013/03/11
 * 版本:V1.0
 */
class UserAction extends Action {

	//等到显示商品的时候 再提取订单信息
	public function index() {
		if (!empty($_SESSION['uid'])) {
			$this -> redirect('./User/info');
		}
		$user = D("User");
		//$order = D("Order");
		$field = "username,email,address,tel,regIp,regTime";
		$list = $user -> field($field) -> find($_SESSION['uid']);
		//$orderList = $order -> where($map) -> select();
		$this -> assign($list);
		//$this -> assign('orderlist', $orderlist);
		$this -> display();
	}

	//登陆验证
	public function checkUser() {
		$user = D('User');
		$map['email'] = $_POST['email'];
		if ($info = $user -> where($map) -> find()) {
			if (md5($_POST['password']) != $info['password']) {
				$this -> error("密码错误");
			}
			if ($info['status'] == 0) {
				$this -> redirect('User/replayEmail', '', 5, '您注册的邮箱还未验证，5秒后跳转到验证页.....');
			}
			// $user -> lastLoginIp = get_client_ip();
			// $user -> lastLoginTime = date("Y-m-d H:i:s");
			// $user -> where('id=' . $info['id']) -> save();
			//可以添加会员等级
			$_SESSION['username'] = $info['username'];
			$_SESSION['uid'] = $info['id'];
			$this -> success("登陆成功", "info");
		} else {
			$this -> error("无法找到该用户");
		}
	}

	public function updateInfo() {
		$user = D("User");
		$map['id'] = $_SESSION['uid'];
		$user -> create();
		if ($user -> where($map) -> data($_POST) -> save() !== false) {
			$this -> ajaxReturn(null, "用户信息设置成功!", 1);
		} else {
			$this -> ajaxReturn(null, "用户信息设置失败!", 0);
		}

	}

	//更新密码
	public function updatePwd() {
		$user = D("User");
		if ($_POST['password'] != $_POST['repassword']) {
			$this -> error("两次密码不一致");
		}
		$map['id'] = $_SESSION['uid'];
		$data['password'] = md5($_POST['password']);
		if ($user -> changeInfo($map, $data) === false) {
			$this -> error("密码修改失败");
		} else {
			$this -> success("修改成功,系统退出,请重新登陆");
		}
	}

	//更新邮箱
	public function updateEmail() {
		$user = D("User");
		$map['id'] = $_SESSION['uid'];
		//未检查email地址有效
		$data['email'] = $_POST['email'];
		if ($user -> changeInfo($map, $data) === false) {
			$this -> error("邮箱修改失败");
		} else {
			$this -> success("邮箱修改成功");
		}
	}

	//调试
	public function info() {
		$map['id'] = $_SESSION['uid'];
		$user = D("User");
		$info['Profie'] = $user -> where($map) -> find();
		$this -> assign("Profie", $info['Profie']);
		$this -> display();
	}

	//找回用户名是否只要发回用户名??
	public function backUsername() {
		$map['email'] = $_POST['email'];
		$user = D("User");
		if ($user -> create()) {
			$info = $user -> backInfo($map);
			$mail = D("Email");
			$mail -> subject = "This is System email,don't replay!";
			$mail -> AltBody = "Forget passowrd";
			$mail -> Body = "This is you send sslsl" . $info['username'];
			$mail -> sendEmail($map['email']);
		} else {
			$this -> error($user -> getError());
		}
	}

	//找回密码 输入邮箱发送邮件链接
	public function backPassword() {
		$map['email'] = $_POST['email'];
		$user = D("User");
		if ($user -> create()) {
			$info = $user -> backInfo($map);
			$mail = D("Email");
			$mail -> subject = "This is System email,don't replay!";
			$mail -> AltBody = "Forget passowrd";
			$mail -> Body = "This is your Username " . $info['username'];
			$mail -> sendEmail($map['email']);
		} else {
			$this -> error($user -> getError());
		}
	}

	public function addUser() {
		$user = D("User");
		if ($user -> create()) {
			if (md5($_POST['verify']) != $_SESSION['verify']) {
				$this -> error("验证码错误");
			}
			$username = trim($_POST['username']);
			$user -> username = $username;
			if ($uid = $user -> add()) {
				// $_SESSION['username'] = $username;
				// $_SESSION['uid'] = $uid;
				//存放用户uid,和验证码的数据表
				$tmp = M("temp");
				$code = randstr();
				$url = C("siteUrl") . "/User/checkEmail/uid/";
				$tmp -> uid = $uid;
				$tmp -> code = $code;
				if ($tmp -> add()) {
					$mail = D("Email");
					$mailtemp = D("Mailtemp");
					$data = array("username" => $username, "url" => $url . $uid . "/code/" . $code);
					$temp = $mailtemp -> field("Title,Body") -> getTemp("reg", 1, "#", $data);
					$mail -> setContent($temp['Title'], $temp['Body']);
					if ($mail -> send(trim($_POST['email']))) {
						// $info = L("register");
						$this -> success("注册成功,系统已经发出一封验证信息到您的邮箱,请前往验证!", "login");
					}
				};

			} else {
				$this -> error("注册失败");
			}
		} else {
			$this -> error($user -> getError());
		}
	}

	//重新请求验证邮箱
	public function applyEmail() {
		$user = D("User");
		$map['email'] = $_POST['email'];
		if ($list = $user -> where($map) -> find()) {
			$code = randstr();
			$url = C("siteUrl") . "/User/checkEmail/uid/";
			$uid = $list['id'];
			$tmp = M("temp");
			$tmp -> uid = $uid;
			$tmp -> code = $code;
			if ($tmp -> add()) {
				$mail = D("Email");
				$mailtemp = D("Mailtemp");
				$data = array("username" => $username, "url" => $url . $uid . "/code/" . $code);
				$temp = $mailtemp -> field("Title,Body") -> getTemp("vaildemail", 1, "#", $data);
				$mail -> setContent($temp['Title'], $temp['Body']);
				if ($mail -> send(trim($_POST['email']))) {
					$this -> success("邮件已经发出,请检查邮箱");
				}
			}

		}
	}

	//验证邮箱
	public function checkEmail() {
		$map['id'] = $_GET['uid'];
		$user = D("User");
		$list = $user -> where($map) -> find();
		if ($list['status'] == 0) {
			$map['code'] = $_GET['code'];
			$temp = D("Temp");
			if ($result = $temp -> where($map) -> find()) {
				$data['status'] = 1;
				if ($user -> where("id=" . $_GET['uid']) -> save($data)) {
					$temp -> where($map) -> delete();
					//$this -> success("邮箱验证成功", "login");
					$this -> redirect('./User/login', '', 5, '您的邮箱验证成功，5秒后跳转到登陆页面.....');
				}
			} else {

				$this -> redirect('./User/replayEmail', '', 5, '您的邮箱未验证，5秒后跳转到验证页面.....');
				//echo "<a href='" . __URL__ . "/replayEmail'>点击验证邮箱</a>";
			}
		} else {
			//$this -> success("您的邮箱已经激活过了", "./login");

			$this -> redirect('./User/login', '', 5, '您的邮箱已经激活过了，5秒后跳转到登陆页面.....');

		}
	}

	public function myorder() {
		$order = D("Orderinfo");
		$map['C_Id'] = $_SESSION['uid'];
		$data = $order -> where($map) -> getField("OrderId,OrderPrice,OrderTime,CompleteTime", TRUE);
		$this -> assign("list", $data);
	}

}
?>