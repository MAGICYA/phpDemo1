<?php
//创建smarty对象
require_once './libs/smarty/Smarty.class.php';
$smarty = new Smarty;//建立smarty实例对象$smarty
//初始化
$smarty -> caching = false;//是否使用缓存
$smarty -> template_dir = "./templates";//设置模板目录
$smarty -> compile_dir = "./templates_c";//设置编译目录
$smarty -> cache_dir = "./smarty_cache";//缓存文件夹
//修改左右边界符号
$smarty -> left_delimiter="<{";
$smarty -> right_delimiter="}>";


$var1 = "value1";
$var2 = $var1;
$var1 = "change";

//把$res分配到smarty对象
$smarty->assign("out1",$var2);


$var11 = "value11";
$var12 = &$var11;
$var11 = "change11";

//把$res分配到smarty对象
$smarty->assign("out2",$var12);

//指定用哪个模版显示
$smarty->display("demo2.html");
?>