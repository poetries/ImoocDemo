<?php
    //A例子
	$num = 2;
	$sum  = 10; 
	while($num>3){
		$sum = $sum  + 10;
	}
	echo "A例子的结果：".$sum."<br />";
	//B例子
	$num = 2;
	$sum  = 10;			
	do{
		$sum = $sum  + 10;
	}while($num>3);
	echo "B例子的结果：".$sum."<br />";
	
	/*
	while与do…while循环语句的区别是，while先判断条件是否成立，后执行循环，do...while先执行一次任务，再判断是否继续执行循环，也就是说do...while至少会执行一次任务。
	当条件为FALSE时，while中的任务会一次也不执行，do...while中的任务会执行1次。
	*/
?>
