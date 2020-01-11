<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-11 01:29:22
  from 'C:\xampp\htdocs\massfice-social-app\usage\Views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1916e24749e2_94883735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee19f64d83ccbdec9cfa8d14acd36c54745eaf0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\massfice-social-app\\usage\\Views\\index.tpl',
      1 => 1578702558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1916e24749e2_94883735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12308682895e1916e2473aa0_38486995', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_856570505e1916e2474432_95748282', "header");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "title"} */
class Block_12308682895e1916e2473aa0_38486995 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12308682895e1916e2473aa0_38486995',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "header"} */
class Block_856570505e1916e2474432_95748282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_856570505e1916e2474432_95748282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="javascript:void(0)" onclick="go('test','body')">Test</a><?php
}
}
/* {/block "header"} */
}
