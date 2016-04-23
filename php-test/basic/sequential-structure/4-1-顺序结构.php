<?php
    $shoesPrice = 49; //鞋子单价
    $shoesNum = 1; //鞋子数量
	$shoesMoney = $shoesPrice * $shoesNum;//计算鞋子金额

	$shirtPrice = 99; //衬衣单价
	$shirtNum = 2; //衬衣数量
	$shirtMoney = $shirtPrice * $shirtNum;//计算衬衣金额
    $orderMoney = $shoesMoney + $shirtMoney;//计算订单总金额
	

	echo $orderMoney ;
?>
