<?php
//计算所有商品总价
function getTotalPrice($arr)
{
	$totalPrice = 0;
	foreach ($arr as $v)
	{
		$a = $v["price"] * $v["bookCount"];
		$totalPrice += $a;
	}
	return $totalPrice;
}




