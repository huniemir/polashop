<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-11 16:04:02
  from '/opt/lampp/htdocs/polashop/app/views/LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f32a55293dc49_95704823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae65e0e6046c8fb1c089294d07e03a9e81750302' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/LoginView.tpl',
      1 => 1597154639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f32a55293dc49_95704823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7406085095f32a5529313c0_28936668', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11658605045f32a552933293_93434554', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20637677375f32a552933ec7_59543352', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/".((string)$_smarty_tpl->tpl_vars['conf']->value->theme)."/view.tpl");
}
/* {block 'title'} */
class Block_7406085095f32a5529313c0_28936668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7406085095f32a5529313c0_28936668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Sklep internetowy Polashop<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_11658605045f32a552933293_93434554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11658605045f32a552933293_93434554',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Logowanie<?php
}
}
/* {/block 'body'} */
/* {block 'content'} */
class Block_20637677375f32a552933ec7_59543352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20637677375f32a552933ec7_59543352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">Nazwa użytkownika: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
