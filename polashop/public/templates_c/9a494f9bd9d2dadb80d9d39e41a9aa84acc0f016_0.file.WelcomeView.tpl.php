<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-22 16:41:32
  from '/opt/lampp/htdocs/polashop/app/views/WelcomeView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6a0d1c7e7a23_90197750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a494f9bd9d2dadb80d9d39e41a9aa84acc0f016' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/WelcomeView.tpl',
      1 => 1600785689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6a0d1c7e7a23_90197750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9534957615f6a0d1c7e4523_69552212', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20389571745f6a0d1c7e5f27_80209022', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4662794745f6a0d1c7e6e28_45333808', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/".((string)$_smarty_tpl->tpl_vars['conf']->value->theme)."/view.tpl");
}
/* {block 'title'} */
class Block_9534957615f6a0d1c7e4523_69552212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9534957615f6a0d1c7e4523_69552212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Sklep internetowy Polashop<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_20389571745f6a0d1c7e5f27_80209022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20389571745f6a0d1c7e5f27_80209022',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Witaj na stronie głównej sklepu internetowego PolaShop!<?php
}
}
/* {/block 'body'} */
/* {block 'content'} */
class Block_4662794745f6a0d1c7e6e28_45333808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4662794745f6a0d1c7e6e28_45333808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p>Najlepszy w sklep w mieście</p>
<?php
}
}
/* {/block 'content'} */
}
