<?php 
echo $m1 = memory_get_usage(); 
echo "<br />";
$var_string = "123";
echo $m2 = memory_get_usage()-$m1; 
echo "<br />";
$n = 123; 
echo $m3 = memory_get_usage()-$m1-$m2; 
echo "<br />";
 $f = 123.00;
echo $m4 = memory_get_usage()-$m1-$m2-$m3; 
echo "<br />";
 $var_arry = array("123");
echo $m5 = memory_get_usage()-$m1-$m2-$m3-$m4; 

/*
什么是变量的数据类型
在变量中，由于变量占用的空间单元不一样（占的地盘大小不一样），也分成几种数据类型，就像超市商品的包装袋，有几种不同类型，不同的商品使用不同的包装袋。
我们可以通过使用“memory_get_usage”获取当前PHP消耗的内存。

*/
?>
