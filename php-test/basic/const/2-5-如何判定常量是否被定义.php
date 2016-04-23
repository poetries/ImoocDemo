<?php 
define("PI1",3.14);
$p = "PI1";
$is1 = defined($p); //define可以判断是否定义，若定义，返回值为布尔型的true,否则为false;
$is2 = defined("PI2");
var_dump($is1);//可判断真假
var_dump($is2);

/*
  defined()函数可以帮助我们判断一个常量是否已经定义，其语法格式为：
  bool defined(string constants_name)
  它只有参数constant_name，指的是要获取常量的名称，若存在则返回布尔类型true，否则返回布尔类型false; （注：bool表示函数返回值类型为布尔类型）
*/
?>
