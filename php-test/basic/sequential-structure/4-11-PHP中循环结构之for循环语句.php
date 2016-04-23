<?php
//for语句写法
for($i=1,$sum=0;$i<=100;$i++){
    $sum = $sum + $i; //	累加求和
}
echo "for语句的运行结果：".$sum."<br />" ;

//while语句写法
$i =  1 ; // 从1开始累加
$sum = 0; //初始化和为0
while($i<=100){  //判断是否小于100
	$sum = $sum + $i; //	累加求和
	$i++; //递增1
}
echo "while语句的运行结果：".$sum."<br />" ;
?>
