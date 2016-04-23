<?php
    $totalMoney = 0;//总工资
    $basicMoney =  2000;//基本工资
	$sex = "男";

	if($sex == "男"){
		$totalMoney = $basicMoney  + 0;// 男的没奖金
	}else if($sex == "女"){
		$totalMoney = $basicMoney  + 300;// 女的有奖金300元
	}
	echo $totalMoney;
	
	/*
        PHP中的“if…else if…”语法，如下：
        
          <?php
                if(条件一){
                     //分配服务器干的任务A
                }else if(条件二){
                     //分配服务器干的任务B
                }
          ?>
	
	*/
	
?>
