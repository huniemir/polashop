<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 21:18:35
  from '/opt/lampp/htdocs/polashop/app/views/ChooseShippingDetailsView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f68fc8b816804_84147537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '501291d63938f316b6a71efd71a58b6567592fa2' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/ChooseShippingDetailsView.tpl',
      1 => 1600715909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f68fc8b816804_84147537 (Smarty_Internal_Template $_smarty_tpl) {
?>Proszę wybrać dane wysyłki:
<form id="choose-shipping">
<select name="shipping">
  <option>-----</option>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
  		<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['idshipping_details'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value["name"];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value["surname"];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value["zipcode"];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value["town"];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value["street"];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value["flat"];?>
</option>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>

</form>
<button onclick='ajaxPostForm("choose-shipping","<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/choose_shipping_details","results")'>Wybierz</button><?php }
}
