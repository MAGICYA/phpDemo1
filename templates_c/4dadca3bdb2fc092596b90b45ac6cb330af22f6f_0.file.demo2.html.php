<?php
/* Smarty version 3.1.29, created on 2017-03-14 18:18:44
  from "/Users/Kelly/Desktop/12 学习/13 工程/2 php/phpDemo1/templates/demo2.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c7c384d8bb37_76242357',
  'file_dependency' => 
  array (
    '4dadca3bdb2fc092596b90b45ac6cb330af22f6f' => 
    array (
      0 => '/Users/Kelly/Desktop/12 学习/13 工程/2 php/phpDemo1/templates/demo2.html',
      1 => 1489486721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c7c384d8bb37_76242357 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>demo2</title>
</head>
<body>
<div>
php says hello world! -- Kelly
    <div>
        <p>1.php 传值赋值</p>
        <p>$var1 = "value1";</p>
        <p>$var2 = $var1;</p>
        <p>console:var2 =  <?php echo $_smarty_tpl->tpl_vars['out1']->value;?>
</p>
    </div>
    <div>
        <p>1.php 引用赋值</p>
        <p>$var1 = "value1";</p>
        <p>$var2 = &$var1;</p>
        <p>console:var2 =  <?php echo $_smarty_tpl->tpl_vars['out2']->value;?>
</p>
    </div>
</div>
</body>
</html><?php }
}
