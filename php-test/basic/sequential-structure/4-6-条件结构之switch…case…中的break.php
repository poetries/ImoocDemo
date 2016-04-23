<?php
//A例子
$num = 2;
$sum  = 10; 
switch($num){
    case 1:
		$sum = $sum  + 10;
	break;	
	case 2:
		$sum = $sum  + 10;
	break;	
 	case 3:
		$sum = $sum  + 10;
	break;	
	default:
		$sum = $sum  + 10;
}
 echo "A例子的值是：".$sum."<br />";
//B例子
$num = 2;
$sum  = 10; 
switch($num){
	case 1:
		$sum = $sum  + 10;
	case 2:
		$sum = $sum  + 10;
	case 3:
		$sum = $sum  + 10;
	default:
		$sum = $sum  + 10;
}
 echo "B例子的值是：".$sum."<br />";
 
 //break的作用是阻止代码进入下一个case 中继续执行
 
?>
