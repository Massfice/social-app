<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-11 01:16:59
  from 'C:\xampp\htdocs\massfice-social-app\usage\Views\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1913fbb70078_54564674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffc8edbd6f4a9904fd0dff8f5a4d36a2c0ec5c33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\massfice-social-app\\usage\\Views\\main.tpl',
      1 => 1578701816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1913fbb70078_54564674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>

<head>

    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11252513275e1913fbb69b02_27298421', "title");
?>
</title>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var uri = "<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
";
        var config = "<?php echo $_smarty_tpl->tpl_vars['config']->value;?>
";
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
js/engine.js?v=2"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6176092495e1913fbb6ef13_52540771', "addons");
?>


</head>

<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13569549535e1913fbb6f5e4_39044630', "header");
?>

    <div id="body"></div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7928387825e1913fbb6fbf7_28299112', "footer");
?>

</body>

</html><?php }
/* {block "title"} */
class Block_11252513275e1913fbb69b02_27298421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11252513275e1913fbb69b02_27298421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Title<?php
}
}
/* {/block "title"} */
/* {block "addons"} */
class Block_6176092495e1913fbb6ef13_52540771 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'addons' => 
  array (
    0 => 'Block_6176092495e1913fbb6ef13_52540771',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "addons"} */
/* {block "header"} */
class Block_13569549535e1913fbb6f5e4_39044630 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_13569549535e1913fbb6f5e4_39044630',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "header"} */
/* {block "footer"} */
class Block_7928387825e1913fbb6fbf7_28299112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7928387825e1913fbb6fbf7_28299112',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "footer"} */
}
