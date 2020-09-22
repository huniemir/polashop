<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-16 15:52:00
  from '/opt/lampp/htdocs/polashop/app/views/HistoryDataView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f621880d293c6_28045598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dadb3baf4e41f61168e038a9126aabaaf5d60275' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/HistoryDataView.html',
      1 => 1600264317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f621880d293c6_28045598 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
	<tr>
		<b>
			<td>Numer zamówienia</td>
			<td>Data</td>
			<td>Stan przesyłki</td>
			<td></td>
		</b>
	</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
		<tr>
		  <td><?php echo $_smarty_tpl->tpl_vars['i']->value['idtransaction'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['i']->value['date'];?>
</td>
		  <?php if ($_smarty_tpl->tpl_vars['i']->value['is_paid_for'] == 0) {?>
		  <td style="background: #600;">Nieopłacona</td>
		  <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['is_send'] == 0) {?>
		  <td style="background: #060;">Opłacona</td>
		  <?php } else { ?>
		  <td style="background: #060";>Wysłana</td>
		  <?php }?>
		  <td>Szczegóły</td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	
</table><?php }
}
