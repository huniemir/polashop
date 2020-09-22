<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-18 12:22:58
  from '/opt/lampp/htdocs/polashop/app/views/SettingsView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f648a82bda1c5_06442987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaac0886c59e14850f5d2ec6933b1e05079fd6ac' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/SettingsView.tpl',
      1 => 1600424576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f648a82bda1c5_06442987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16513443125f648a82bcc6a7_38594478', 'script');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11997503995f648a82bd41c2_98900640', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3774130575f648a82bd64b3_10876412', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8869969135f648a82bd86c7_08308599', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/".((string)$_smarty_tpl->tpl_vars['conf']->value->theme)."/view.tpl");
}
/* {block 'script'} */
class Block_16513443125f648a82bcc6a7_38594478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_16513443125f648a82bcc6a7_38594478',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	window.onload = ajaxReloadElement("results","<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data");
<?php
}
}
/* {/block 'script'} */
/* {block 'title'} */
class Block_11997503995f648a82bd41c2_98900640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11997503995f648a82bd41c2_98900640',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	Ustawienia konta
<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_3774130575f648a82bd64b3_10876412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3774130575f648a82bd64b3_10876412',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'body'} */
/* {block 'content'} */
class Block_8869969135f648a82bd86c7_08308599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8869969135f648a82bd86c7_08308599',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="results">
Ładowanie...

</div>
<?php
}
}
/* {/block 'content'} */
}
