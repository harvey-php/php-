<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller
{
	public function index()
	{
		$this->display();
	}
	//会员登陆
	public function login()
	{
		//获得表单提交的数据
		$userName = $_POST["userName"];
		$password = $_POST["password"];
		//登陆验证
		$userInfo = M("userinfo")->where("userName='{$userName}' and password='{$password}'")->find();
		
		if($userInfo)
		{
			$_SESSION["userMsg"] = $userInfo;
			$this->success("会员登陆成功！",U("Index/index"));
		}
		else
		{
			$this->success("会员登陆失败！",U("Login/index"));
		}
	}
}












