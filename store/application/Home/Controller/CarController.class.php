<?php
namespace Home\Controller;
use Think\Controller;

class CarController extends Controller
{
	public function index()
	{
		//查询当前用户购买的所有商品(视图：carview)
		$userId = $_SESSION["userMsg"]["userId"];
		$carInfo = M("carview")->where("userId={$userId}")->select();
		
		
		$this->assign("carInfo",$carInfo);
		$this->display();
	}
}








