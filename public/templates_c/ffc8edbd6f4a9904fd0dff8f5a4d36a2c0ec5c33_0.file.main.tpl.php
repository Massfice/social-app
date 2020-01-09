<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-08 00:25:35
  from 'C:\xampp\htdocs\massfice-social-app\usage\Views\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e15136f434a96_13060045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffc8edbd6f4a9904fd0dff8f5a4d36a2c0ec5c33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\massfice-social-app\\usage\\Views\\main.tpl',
      1 => 1578439532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e15136f434a96_13060045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>

<head>

    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8620478405e15136f42e906_52473842', "title");
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20654698755e15136f4304f1_33695405', "addons");
?>

    <?php echo '<script'; ?>
>
        var uri = "<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
";
        var config = "<?php echo $_smarty_tpl->tpl_vars['config']->value;?>
";
    <?php echo '</script'; ?>
>

</head>

<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7228099125e15136f433f81_17565795', "header");
?>

    <div id="body"></div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15809038365e15136f434615_93218009', "footer");
?>

</body>

</html><?php }
/* {block "title"} */
class Block_8620478405e15136f42e906_52473842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8620478405e15136f42e906_52473842',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Title<?php
}
}
/* {/block "title"} */
/* {block "addons"} */
class Block_20654698755e15136f4304f1_33695405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'addons' => 
  array (
    0 => 'Block_20654698755e15136f4304f1_33695405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "addons"} */
/* {block "header"} */
class Block_7228099125e15136f433f81_17565795 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_7228099125e15136f433f81_17565795',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "header"} */
/* {block "footer"} */
class Block_15809038365e15136f434615_93218009 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15809038365e15136f434615_93218009',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "footer"} */
}
