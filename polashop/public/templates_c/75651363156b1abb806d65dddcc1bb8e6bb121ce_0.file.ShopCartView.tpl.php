<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 18:08:10
  from '/opt/lampp/htdocs/polashop/app/views/ShopCartView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f68cfeae195e2_67868247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75651363156b1abb806d65dddcc1bb8e6bb121ce' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/ShopCartView.tpl',
      1 => 1600704487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f68cfeae195e2_67868247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6087857495f68cfeae13f93_53035666', 'script');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4966699165f68cfeae17327_15336095', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2694597755f68cfeae17f27_88865240', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6726565f68cfeae18ab9_03286427', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/".((string)$_smarty_tpl->tpl_vars['conf']->value->theme)."/view.tpl");
}
/* {block 'script'} */
class Block_6087857495f68cfeae13f93_53035666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_6087857495f68cfeae13f93_53035666',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  window.onload = ajaxReloadElement("results","<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/shopcart_data");
<?php
}
}
/* {/block 'script'} */
/* {block 'title'} */
class Block_4966699165f68cfeae17327_15336095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4966699165f68cfeae17327_15336095',
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
class Block_2694597755f68cfeae17f27_88865240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2694597755f68cfeae17f27_88865240',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'body'} */
/* {block 'content'} */
class Block_6726565f68cfeae18ab9_03286427 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6726565f68cfeae18ab9_03286427',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div id="results">

</div>


<?php
}
}
/* {/block 'content'} */
}
