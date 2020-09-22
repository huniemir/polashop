<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-18 18:42:27
  from '/opt/lampp/htdocs/polashop/app/views/EditShippingDetailsView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f64e373ca6409_77292886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ec41ccae87addb05c257680d708388cbc30ca31' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/EditShippingDetailsView.tpl',
      1 => 1600447339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f64e373ca6409_77292886 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="edit_shipping_details">

  <label for="ename">Imię</label><br>
  <input type="text" id="ename" name="ename" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
"><br>

  <label for="esurname">Nazwisko:</label><br>
  <input type="text" id="esurname" name="esurname" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['surname'];?>
"><br>

  <label for="ezipcode">Kod pocztowy:</label><br>
  <input type="text" id="ezipcode" name="ezipcode" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['zipcode'];?>
"><br>

  <label for="etown">Miasto:</label><br>
  <input type="text" id="etown" name="etown" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['town'];?>
"><br>

  <label for="estreet">Ulica:</label><br>
  <input type="text" id="estreet" name="estreet" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['street'];?>
"><br>

  <label for="eflat">Nr mieszkania:</label><br>
  <input type="text" id="eflat" name="eflat" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['flat'];?>
"><br>

  <label for="etelephone_number">Numer telefonu (opcjonalne):</label><br>
  +48 <input type="text" id="etelephone_number" name="etelephone_number" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['telephone_number'];?>
"><br>

</form> 

	<button onclick='ajaxPostFormAppend("edit_shipping_details","<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data","results","idshipping_details","<?php echo $_smarty_tpl->tpl_vars['idshipping_details']->value;?>
");'>Edytuj</button>
  <button onclick='ajaxReloadElement("results","<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data")'>Wróć</button>
<?php }
}
