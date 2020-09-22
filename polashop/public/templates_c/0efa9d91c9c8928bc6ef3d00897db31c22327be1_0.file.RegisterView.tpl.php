<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-22 16:36:46
  from '/opt/lampp/htdocs/polashop/app/views/RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6a0bfe402750_50690189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0efa9d91c9c8928bc6ef3d00897db31c22327be1' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/RegisterView.tpl',
      1 => 1600784884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f6a0bfe402750_50690189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16518376305f6a0bfe3f64e5_04947282', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4379095655f6a0bfe3f80a0_74125072', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6124228565f6a0bfe3f9197_85349291', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/".((string)$_smarty_tpl->tpl_vars['conf']->value->theme)."/view.tpl");
}
/* {block 'title'} */
class Block_16518376305f6a0bfe3f64e5_04947282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16518376305f6a0bfe3f64e5_04947282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Sklep internetowy Polashop<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_4379095655f6a0bfe3f80a0_74125072 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4379095655f6a0bfe3f80a0_74125072',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Rejestracja<?php
}
}
/* {/block 'body'} */
/* {block 'content'} */
class Block_6124228565f6a0bfe3f9197_85349291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6124228565f6a0bfe3f9197_85349291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<fieldset>
		 <div class="pure-control-group">
			<label for="id_email">E-Mail: </label>
			<input id="id_email" type="text" name="email"/>
		</div>
        <div class="pure-control-group">
			<label for="id_login">Nazwa użytkownika: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zarejestruj" class="pure-button pure-button-primary"/>
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
