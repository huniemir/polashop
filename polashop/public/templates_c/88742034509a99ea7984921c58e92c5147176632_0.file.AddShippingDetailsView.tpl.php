<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-18 16:53:52
  from '/opt/lampp/htdocs/polashop/app/views/AddShippingDetailsView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f64ca0017de04_93957379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88742034509a99ea7984921c58e92c5147176632' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/AddShippingDetailsView.tpl',
      1 => 1600440824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f64ca0017de04_93957379 (Smarty_Internal_Template $_smarty_tpl) {
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
/settings_data","results");'>Dodaj szczegóły wysyłki</button>
<?php }
}
