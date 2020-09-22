<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 19:25:18
  from '/opt/lampp/htdocs/polashop/app/views/EnterShippingDetailsView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f68e1fed67ae8_17755182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7105b96596af3dc650ffc1abbfadaa5bd7f9919a' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/EnterShippingDetailsView.tpl',
      1 => 1600708827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f68e1fed67ae8_17755182 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="add_shipping_details">

  <label for="name">Imię</label><br>
  <input type="text" id="name" name="name" ><br>

  <label for="surname">Nazwisko:</label><br>
  <input type="text" id="surname" name="surname"><br>

  <label for="zipcode">Kod pocztowy:</label><br>
  <input type="text" id="zipcode" name="zipcode"><br>

  <label for="town">Miasto:</label><br>
  <input type="text" id="town" name="town"><br>

  <label for="street">Ulica:</label><br>
  <input type="text" id="street" name="street"><br>

  <label for="flat">Nr mieszkania:</label><br>
  <input type="text" id="flat" name="flat" ><br>

  <label for="telephone_number">Numer telefonu (opcjonalne):</label><br>
  +48 <input type="text" id="telephone_number" name="telephone_number"><br>

</form> 

	<button onclick='ajaxPostForm("add_shipping_details","<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/choose_shipping_details","results");'>Zamów</button>
<?php }
}
