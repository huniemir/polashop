<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-20 16:59:11
  from '/opt/lampp/htdocs/polashop/app/views/OfferView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f676e3f283ae0_59774196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d9e044372fa54ecec7b0155c2f9aa6674650f04' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/OfferView.tpl',
      1 => 1600610933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f676e3f283ae0_59774196 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7173082605f676e3f27d6c7_38741621', 'script');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8674310145f676e3f280da5_74995087', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9497807185f676e3f281a25_52753792', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4387762185f676e3f2825e0_46613948', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/".((string)$_smarty_tpl->tpl_vars['conf']->value->theme)."/view.tpl");
}
/* {block 'script'} */
class Block_7173082605f676e3f27d6c7_38741621 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_7173082605f676e3f27d6c7_38741621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	window.onload = ajaxReloadElement("results","<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer_data");
<?php
}
}
/* {/block 'script'} */
/* {block 'title'} */
class Block_8674310145f676e3f280da5_74995087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8674310145f676e3f280da5_74995087',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	Oferta
<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_9497807185f676e3f281a25_52753792 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9497807185f676e3f281a25_52753792',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'body'} */
/* {block 'content'} */
class Block_4387762185f676e3f2825e0_46613948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4387762185f676e3f2825e0_46613948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form id="search" style="font-size: 12px;">
  <label for="name">Nazwa:</label>
  <input type="text" id="name" name="name">

  <label for="pricemin">Cena od:</label>
  <input type="text" id="pricemin" name="pricemin">

  <label for="pricemax">Cena do:</label>
  <input type="text" id="pricemax" name="pricemax">

  <label for="sort">Sortuj według:</label>
  <select id="sort" name="sort">
  <option value="0">Nazwa rosnąco</option>
  <option value="1">Nazwa malejąco</option>
  <option value="2">Cena rosnąco</option>
  <option value="3">Cena malejąco</option>

</select>
</form> 
<button onclick='ajaxPostForm("search","<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer_data","results")'>Szukaj</button>

<div id="results">
Ładowanie...

</div>
<?php
}
}
/* {/block 'content'} */
}
