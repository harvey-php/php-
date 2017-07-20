<?php
namespace Home\Controller;
use Think\Controller;

//操纵购物车
class ActController extends Controller
{
	//购买商品
	public function index($bookId,$bookCount)
	{
		//判断：是否重复购买
		$userId = $_SESSION["userMsg"]["userId"];
		$carInfo = M("carinfo")->where("userId={$userId} and bookId={$bookId}")->find();
		
		if($carInfo)
		{
			//重复购买：数量累加
			//M("carinfo")->where()->save(数组);
			M("carinfo")->where("userId={$userId} and bookId={$bookId}")->setInc("bookCount",$bookCount);
			
		}
		else
		{
			//没有重复购买：添加一个新商品
			$data = array(
				"userId"=>$userId,
				"bookId"=>$bookId,
				"bookCount"=>$bookCount
			);
			M("carinfo")->add($data);
		}
		
		
		$this->redirect("Car/index");
	}
	//删除单个商品
	public function delete($carId)
	{
		//M("carinfo")->where("bookId=值 and userId=值")->delete();
		M("carinfo")->where("carId={$carId}")->delete();
		
		$this->redirect("Car/index");
	}
	//清空购物车
	public function clear()
	{
		//将当前用户购买的所有商品，全部删除
		$userId = $_SESSION["userMsg"]["userId"];
		M("carinfo")->where("userId={$userId}")->delete();
		
		$this->redirect("Car/index");
	}
	//修改产品数量(为ajax提供服务)
	public function change()
	{
		//1、获得ajax提交的数据
		//2、修改数据库中产品数量
		//3、查询"所有商品总价、该商品总价"
		//4、将这两个总价返回给客户端
	}
}












