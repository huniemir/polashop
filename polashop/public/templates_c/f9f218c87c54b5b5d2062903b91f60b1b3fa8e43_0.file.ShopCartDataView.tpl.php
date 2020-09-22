<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-21 19:24:12
  from '/opt/lampp/htdocs/polashop/app/views/ShopCartDataView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f68e1bc03cba1_21978702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9f218c87c54b5b5d2062903b91f60b1b3fa8e43' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/ShopCartDataView.tpl',
      1 => 1600709048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f68e1bc03cba1_21978702 (Smarty_Internal_Template $_smarty_tpl) {
?>  <table>
    <tr>
      <b>
        <td>Produkt</td>
        <td>Ilość</td>
        <td>Cena</td>
        <td>Suma</td>
        <td></td>
      </b>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>

    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['r']->value["name"];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['amount']->value[$_smarty_tpl->tpl_vars['r']->value["idproduct"]];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['r']->value["price"];?>
zł</td>
      <td><?php echo $_smarty_tpl->tpl_vars['sum']->value[$_smarty_tpl->tpl_vars['r']->value["idproduct"]];?>
zł</td>
      <td><button onclick='ajaxPostOne("remove_id","<?php echo $_smarty_tpl->tpl_vars['r']->value["idproduct"];?>
,<?php echo $_smarty_tpl->tpl_vars['amount']->value[$_smarty_tpl->tpl_vars['r']->value["idproduct"]];?>
","<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/remove_from_cart","results");'>Usuń z koszyka</button>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <tr>
      <td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <td>Koszty przesyłki</td>
      
      <td><?php echo $_smarty_tpl->tpl_vars['shipping_cost']->value;?>
zł</td>

      
    </tr>

    <tr>
      <td>W sumie:</td>
      
      <td><?php echo $_smarty_tpl->tpl_vars['sumall']->value;?>
zł</td>
      <td></td><td></td><td></td>

      
    </tr>

</table>
<button onclick='ajaxReloadElement("results","<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/choose_shipping_details")'>Zapłać</button><?php }
}
