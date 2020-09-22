<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-20 16:59:11
  from '/opt/lampp/htdocs/polashop/app/views/messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f676e3fbf1115_33436356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a61bfb2360b5d0a9b04d8b73e54567514232acb' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/messages.tpl',
      1 => 1600610800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f676e3fbf1115_33436356 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->getSize() > 0) {?>
	
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
			<?php if ($_smarty_tpl->tpl_vars['err']->value->isError()) {?>
				<ul style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;  color: black;">
					<li><?php echo $_smarty_tpl->tpl_vars['err']->value->text;?>
</li>
				</ul>
			<?php } else { ?>
				<ul style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #8f8; width:300px;  color: black;">
					<li><?php echo $_smarty_tpl->tpl_vars['err']->value->text;?>
</li>
				</ul>
			<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		
<?php }?>


<?php }
}
