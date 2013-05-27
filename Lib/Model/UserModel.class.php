<?php
/**
 *  @module  用户信息模型
 * 	@athour	邱银乐
 * 	@version	1.0.0
 *	@copyright 谷德网络技术有限公司
 */
class UserModel extends Model {
	protected $_auto = array(//自动验证,和填充
	array('password', 'md5', 1, 'function'), //密码加密
	array('regIp', 'get_client_ip', 1, 'function'), //填充注册
	array('regTime', 'fill_date', 1, 'callback'), //填充注册时间
	array('lastLoginIp', 'get_client_ip', 3, 'function'), //最后登陆ip
	array('lastLoginTime', 'fill_date', 3, 'callback'), //最后登陆时间
	//array('lastLoginTime', 'fill_date', 3, 'callback') //最后登陆ip
	);
	//array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间])
	//包括：require 字段必须、email 邮箱、url URL地址、currency 货币、number 数字。
	protected $_validate = array(//自动验证
	array('verify', 'require', '验证码必须'), //
	array('username', '', '账户已经存在', 0, 'unique', 1), //用户名唯一性
	array('email', '', '邮箱已经存在', 0, 'unique', 1), //邮箱唯一性
	array('password', 8, '密码长度必须8位', 0, 'length'), //密码是否一致
	array('repassword', 'password', '确认密码不正确', 0, 'confirm'), //确认密码
	array('email', 'email', '不是有效的邮箱地址', 3), //验证邮箱地址
	array('tel', 11, 'Tel长度必须11位', 0, 'length'), //密码是否一致
	);
	public function fill_date() {
		return date("Y-m-d H:i:s");
	}

	public function changeInfo($map, $data) {
		return $this -> where($map) -> save($data);
	}

	public function backInfo() {
		if ($list = $this -> where($map) -> find()) {
			return $list;
		} else {
			return false;
		}
	}

	public function getUserList() {
		$list = $this -> select();
		return $list;
	}

}
?>