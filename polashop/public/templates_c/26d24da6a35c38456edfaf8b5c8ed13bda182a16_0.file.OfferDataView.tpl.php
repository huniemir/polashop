<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-20 17:05:43
  from '/opt/lampp/htdocs/polashop/app/views/OfferDataView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f676fc7795448_96296388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26d24da6a35c38456edfaf8b5c8ed13bda182a16' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/OfferDataView.tpl',
      1 => 1600614340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5f676fc7795448_96296388 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="messages"><?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
<table>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
		<tr>
					
				<td>
					<?php if ($_smarty_tpl->tpl_vars['r']->value['image'] == '') {?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/brak-obrazu.jpg" width="150" height="150"/>
					<?php } else { ?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/<?php echo $_smarty_tpl->tpl_vars['r']->value['image'];?>
" width="150" height="150"/>
					<?php }?>
					<h3><?php echo $_smarty_tpl->tpl_vars['r']->value['name'];?>
</h3> </br>
				</td>
				<td>
					<span><?php echo $_smarty_tpl->tpl_vars['r']->value['description'];?>
</span>
				</td>
				<td>
					<span><?php echo $_smarty_tpl->tpl_vars['r']->value['price'];?>
zł</span>
				</td>
				<td>
					Ilość <input type="text" id="amount<?php echo $_smarty_tpl->tpl_vars['r']->value["idproduct"];?>
" name="amount" maxlength="2" size="2">
					
				</td>
				<td>
					<button onclick='addToCart("<?php echo $_smarty_tpl->tpl_vars['r']->value["idproduct"];?>
","<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/add_to_cart");'>Dodaj do koszyka</button>
				</td>
			
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>
<button onclick='ajaxPostOneAndForm("<?php echo $_smarty_tpl->tpl_vars['filterFlag']->value;?>
","search","page",<?php echo 1;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer_data","results")'>|<<<</button>

<!--Podświetlanie odnośnika nr.1 -->
<?php if ($_smarty_tpl->tpl_vars['page']->value == 1) {?>
<button style="background-color: #666;" onclick='ajaxPostOneAndForm("<?php echo $_smarty_tpl->tpl_vars['filterFlag']->value;?>
","search","page",<?php echo 1;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer_data","results")'>1</button>
<?php } else { ?>
<button onclick='ajaxPostOneAndForm("<?php echo $_smarty_tpl->tpl_vars['filterFlag']->value;?>
","search","page",<?php echo 1;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer_data","results")'>1</button>
<?php }?>

<!-- Wygeneruj wszystkie odnośniki jeśli jest ich < 6 + podświetlanie odpowiedniego odnośnika -->
<?php if ($_smarty_tpl->tpl_vars['max_page']->value < 6) {?>
	<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['max_page']->value-1+1 - (2) : 2-($_smarty_tpl->tpl_vars['max_page']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 2, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>

		<?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['i']->value) {?>
    	<button style="background-color: #666;" onclick='ajaxPostOneAndForm("<?php echo $_smarty_tpl->tpl_vars['filterFlag']->value;?>
","search","page",<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer_data","results")'><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</button>

    	<?php } else { ?>
    	<button onclick='ajaxPostOneAndForm("<?php echo $_smarty_tpl->tpl_vars['filterFlag']->value;?>
","search","page",<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer_data","results")'><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
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
    	<button style="background-color: #666;" onclick='ajaxPostOneAndForm("<?php echo $_smarty_tpl->tpl_vars['filterFlag']->value;?>
","search","page",<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer_data","results")'><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</button>

    	<?php } else { ?>
    	<button onclick='ajaxPostOneAndForm("<?php echo $_smarty_tpl->tpl_vars['filterFlag']->value;?>
","search","page",<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer_data","results")'><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</button>
		<?php }?>
	<?php }
}
?>
	<span>...</span>


<!--Wygenerowanie odnośników w formacie 1...k-1, k, k+1...n + podświetlenie k -->
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['max_page']->value-2) {?>
	<span>...</span>
	<button onclick='ajaxPostOneAndForm("<?php echo $_smarty_tpl->tpl_vars['filterFlag']->value;?>
","search","page",<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer_data","results")'><?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
</button>
	<button style="background-color: #666;" onclick='ajaxPostOneAndForm("<?php echo $_smarty_tpl->tpl_vars['filterFlag']->value;?>
","search","page",<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer_data","results")'><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</button>
	<button onclick='ajaxPostOneAndForm("<?php echo $_smarty_tpl->tpl_vars['filterFlag']->value;?>
","search","page",<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer_data","results")'><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
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
	    	<button style="background-color: #666;" onclick='ajaxPostOneAndForm("<?php echo $_smarty_tpl->tpl_vars['filterFlag']->value;?>
","search","page",<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer_data","results")'><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</button>

    	<?php } else { ?>
    		<button onclick='ajaxPostOneAndForm("<?php echo $_smarty_tpl->tpl_vars['filterFlag']->value;?>
","search","page",<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer_data","results")'><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</button>
		<?php }?>
	<?php }
}
}?>

<!--Podświetlanie ostatniego odnośnika -->
<?php if ($_smarty_tpl->tpl_vars['max_page']->value > 1) {?>
	<?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['max_page']->value) {?>
		<button style="background-color: #666; onclick='ajaxPostOneAndForm("<?php echo $_smarty_tpl->tpl_vars['filterFlag']->value;?>
","search","page",<?php echo $_smarty_tpl->tpl_vars['max_page']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer_data","results")'><?php echo $_smarty_tpl->tpl_vars['max_page']->value;?>
</button>
	<?php } else { ?>

		<button onclick='ajaxPostOneAndForm("<?php echo $_smarty_tpl->tpl_vars['filterFlag']->value;?>
","search","page",<?php echo $_smarty_tpl->tpl_vars['max_page']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer_data","results")'><?php echo $_smarty_tpl->tpl_vars['max_page']->value;?>
</button>
	<?php }
}?>
<button onclick='ajaxPostOneAndForm("<?php echo $_smarty_tpl->tpl_vars['filterFlag']->value;?>
","search","page",<?php echo $_smarty_tpl->tpl_vars['max_page']->value;?>
,"<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer_data","results")'>>>>|</button>
<?php }
}
