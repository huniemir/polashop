<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-18 18:36:02
  from '/opt/lampp/htdocs/polashop/app/views/SettingsDataView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f64e1f27bae80_79847955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '811533728ec764504b018aaa3a3429524bafed76' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/SettingsDataView.tpl',
      1 => 1600446958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f64e1f27bae80_79847955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<button onclick='ajaxReloadElement("results","<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/add_shipping_details_page")'>Dodaj nowe dane wysyłki</button>
<table>
	<tr>
		<b>
			<td>Adres</td>
			<td></td>
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
 <?php echo $_smarty_tpl->tpl_vars['r']->value["surname"];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value["zipcode"];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value["town"];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value["street"];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value["flat"];?>
</td>
		  
		  <td><button onclick='ajaxPostOne("edit",<?php echo $_smarty_tpl->tpl_vars['r']->value["idshipping_details"];?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/edit_shipping_details_page","results")'>Edytuj</button></td>
		  <td><button onclick='ajaxPostOne("delete",<?php echo $_smarty_tpl->tpl_vars['r']->value["idshipping_details"];?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data","results")'>Usuń</button></td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		

</table>
<button onclick='ajaxPostOne("page",<?php echo 1;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data","results")'>|<<<</button>

<!--Podświetlanie odnośnika nr.1 -->
<?php if ($_smarty_tpl->tpl_vars['page']->value == 1) {?>
<button style="background-color: #666;" onclick='ajaxPostOne("page",<?php echo 1;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data","results")'>1</button>
<?php } else { ?>
<button onclick='ajaxPostOne("page",<?php echo 1;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data","results")'>1</button>
<?php }?>

<!-- Wygeneruj wszystkie odnośniki jeśli jest ich < 6 + podświetlanie odpowiedniego odnośnika -->
<?php if ($_smarty_tpl->tpl_vars['max_page']->value < 6) {?>
	<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['max_page']->value-1+1 - (2) : 2-($_smarty_tpl->tpl_vars['max_page']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 2, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>

		<?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['i']->value) {?>
    	<button style="background-color: #666;" onclick='ajaxPostOne("page",<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data","results")'><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</button>

    	<?php } else { ?>
    	<button onclick='ajaxPostOne("page",<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data","results")'><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</button>
		<?php }?>

	<?php }
}
?>

<!--Wyświetlenie pierwszych 4 odnośników + podświetlenie odpowiedniego -->

<?php } elseif ($_smarty_tpl->tpl_vars['page']->value < 4) {?>
	<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 4+1 - (2) : 2-(4)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 2, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
    	<?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['i']->value) {?>
    	<button style="background-color: #666;" onclick='ajaxPostOne("page",<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data","results")'><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</button>

    	<?php } else { ?>
    	<button onclick='ajaxPostOne("page",<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data","results")'><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</button>
		<?php }?>
	<?php }
}
?>
	<span>...</span>


<!--Wygenerowanie odnośników w formacie 1...k-1, k, k+1...n + podświetlenie k -->
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['max_page']->value-2) {?>
	<span>...</span>
	<button onclick='ajaxPostOne("page",<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data","results")'><?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
</button>
	<button style="background-color: #666;" onclick='ajaxPostOne("page",<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data","results")'><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</button>
	<button onclick='ajaxPostOne("page",<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data","results")'><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</button>
	<span>...</span>

<?php } else { ?>
	
<!--Wygenerowanie odnośników w formacie 1...n-3, n-2, n-1, n + podświetlenie odpowiedniej strony  -->
	<span>...</span>
	<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['max_page']->value-1+1 - ($_smarty_tpl->tpl_vars['max_page']->value-3) : $_smarty_tpl->tpl_vars['max_page']->value-3-($_smarty_tpl->tpl_vars['max_page']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['max_page']->value-3, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['i']->value) {?>
	    	<button style="background-color: #666;" onclick='ajaxPostOne("page",<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data","results")'><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</button>

    	<?php } else { ?>
    		<button onclick='ajaxPostOne("page",<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data","results")'><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</button>
		<?php }?>
	<?php }
}
}?>

<!--Podświetlanie ostatniego odnośnika -->
<?php if ($_smarty_tpl->tpl_vars['max_page']->value > 1) {?>
	<?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['max_page']->value) {?>
		<button style="background-color: #666; onclick='ajaxPostOne("page",<?php echo $_smarty_tpl->tpl_vars['max_page']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data","results")'><?php echo $_smarty_tpl->tpl_vars['max_page']->value;?>
</button>
	<?php } else { ?>

		<button onclick='ajaxPostOne("page",<?php echo $_smarty_tpl->tpl_vars['max_page']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data","results")'><?php echo $_smarty_tpl->tpl_vars['max_page']->value;?>
</button>
	<?php }
}?>
<button onclick='ajaxPostOne("page",<?php echo $_smarty_tpl->tpl_vars['max_page']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings_data","results")'>>>>|</button>
<?php }
}
