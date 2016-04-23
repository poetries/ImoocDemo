<?php
date_default_timezone_set('asia/shanghai');
$week = date("w");//获取当天星期几
$info = "";//提示信息
if($week == 1){
    $info = "上午有课";
}else if($week == 3){
	$info = "下午有课";	 
}else{
	$info = "今天没课";
}
echo $info; //输出提示信息

/*

      PHP中的“if…else if…else…”语法，如下：
      
        <?php
        if(条件一){
             //分配服务器干的任务A
        }else if(条件二){
             //分配服务器干的任务B
        }else{
             //分配服务器干的任务C
        }
        ?>

*/

?>
