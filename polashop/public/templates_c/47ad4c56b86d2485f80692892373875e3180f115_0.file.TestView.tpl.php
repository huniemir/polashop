<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-15 19:15:17
  from '/opt/lampp/htdocs/polashop/app/views/TestView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f60f6a5255740_17690505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47ad4c56b86d2485f80692892373875e3180f115' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/TestView.tpl',
      1 => 1597313212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f60f6a5255740_17690505 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11641886755f60f6a5250965_74206008', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15823384135f60f6a52534f2_16383854', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21438402025f60f6a5254825_75162049', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/".((string)$_smarty_tpl->tpl_vars['conf']->value->theme)."/view.tpl");
}
/* {block 'title'} */
class Block_11641886755f60f6a5250965_74206008 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11641886755f60f6a5250965_74206008',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Strona tetowa<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_15823384135f60f6a52534f2_16383854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15823384135f60f6a52534f2_16383854',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Yhym, testowa<?php
}
}
/* {/block 'body'} */
/* {block 'content'} */
class Block_21438402025f60f6a5254825_75162049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21438402025f60f6a5254825_75162049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p>XD</p>
<?php
}
}
/* {/block 'content'} */
}
