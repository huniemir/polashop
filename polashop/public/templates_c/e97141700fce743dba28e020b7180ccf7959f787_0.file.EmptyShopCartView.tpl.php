<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 15:51:18
  from '/opt/lampp/htdocs/polashop/app/views/EmptyShopCartView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f68afd67c6a72_39947671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e97141700fce743dba28e020b7180ccf7959f787' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/EmptyShopCartView.tpl',
      1 => 1600696269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f68afd67c6a72_39947671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17510191105f68afd67c2f30_46401935', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15384140235f68afd67c4f79_53483221', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_584031535f68afd67c5e96_35500360', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/".((string)$_smarty_tpl->tpl_vars['conf']->value->theme)."/view.tpl");
}
/* {block 'title'} */
class Block_17510191105f68afd67c2f30_46401935 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17510191105f68afd67c2f30_46401935',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	Koszyk
<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_15384140235f68afd67c4f79_53483221 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15384140235f68afd67c4f79_53483221',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'body'} */
/* {block 'content'} */
class Block_584031535f68afd67c5e96_35500360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_584031535f68afd67c5e96_35500360',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Koszyk jest pusty :(
<?php
}
}
/* {/block 'content'} */
}
