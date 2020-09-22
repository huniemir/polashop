<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-18 11:48:50
  from '/opt/lampp/htdocs/polashop/app/views/HistoryDetailsView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f648282a3b542_03185634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f20307a643cb484763e7f37132a6e1a012ef12eb' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/HistoryDetailsView.tpl',
      1 => 1600422527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f648282a3b542_03185634 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Zamówienie nr. <?php echo $_smarty_tpl->tpl_vars['idtransaction']->value;?>
</h2>
<table>
	<tr>
		<b>
			<td>Data</td>
			<td>Stan opłacenia</td>
			<td>Stan wysyłki</td>
			<td>Suma</td>
			<td>Koszty przesyłki</td>
		</b>
	</tr>
	<tr>
		  <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value["date"];?>
</td>
		  <?php if ($_smarty_tpl->tpl_vars['transaction']->value["is_paid_for"] == 0) {?>
		  <td style="background: #600;">Nieopłacona</td>
		  <?php } else { ?>
		  <td style="background: #600;">Opłacona</td>
		  <?php }?>
		  <?php if ($_smarty_tpl->tpl_vars['transaction']->value["is_send"] == 0) {?>
		  <td style="background: #060;">Niewysłana</td>
		  <?php } else { ?>
		  <td style="background: #060";>Wysłana</td>
		  <?php }?>
		  <td> <?php echo $_smarty_tpl->tpl_vars['transaction']->value["price"];?>
zł</td>
		  <td> <?php echo $_smarty_tpl->tpl_vars['transaction']->value["shipping_costs"];?>
zł</td>
	</tr>
</table>
<h3>Dane wysyłki:</h3>
<table>
	<tr>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['shipping_details']->value['name'];?>

		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['shipping_details']->value['town'];?>

		</td>
	</tr>
	<tr>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['shipping_details']->value['surname'];?>

		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['shipping_details']->value['street'];?>

		</td>
	</tr>
	<tr>
		<td>
			nr. tel <?php echo $_smarty_tpl->tpl_vars['shipping_details']->value['telephone_number'];?>

		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['shipping_details']->value['flat'];?>

		</td>
	</tr>
	<tr>
		<td>
			
		</td>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['shipping_details']->value['zipcode'];?>

		</td>
	</tr>
</table>
<h3>Produkty:</h3>
<table>
	<tr>
			<td>Nazwa</td>
			<td>Ilość</td>
			<td>Cena (sztuka)</td>
			<td>Cena (całość)</td>
	</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['p']->value['amount'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
zł</td>
			<td><?php echo $_smarty_tpl->tpl_vars['p']->value['price']*$_smarty_tpl->tpl_vars['p']->value['amount'];?>
zł</td>
		</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<button onclick='ajaxReloadElement("history_details","<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/order_history_details")'>Zamknij</button><?php }
}
