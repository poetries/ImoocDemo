<?php 
$english = 110; //英语成绩
$math= 118; //数学成绩
$biological = 80; //生物成绩
$physical = 90; //物理成绩
$sum = $english+$math+$biological+$physical;//计算总
$avg = $sum / 4; //用于计算平均分
$x = $math - $english; //计算数学比英语高几分
$x2 = $english * $english; //平方的计算方法


echo "总分:".$sum."<br />";
echo "平均分:".$avg."<br />";
echo "数学比英语高的分数:".$x."<br />";
echo "英语成绩的平方:".$x2."<br />";
