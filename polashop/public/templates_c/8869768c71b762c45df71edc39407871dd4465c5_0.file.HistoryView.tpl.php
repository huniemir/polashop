<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-18 11:29:25
  from '/opt/lampp/htdocs/polashop/app/views/HistoryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f647df5d4ff25_54673152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8869768c71b762c45df71edc39407871dd4465c5' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/HistoryView.tpl',
      1 => 1600421212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f647df5d4ff25_54673152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19621608945f647df5d3fb17_25390749', 'script');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11868783465f647df5d47e49_79339521', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20892772375f647df5d4a0d0_22138941', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21233886945f647df5d4c565_44931927', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/".((string)$_smarty_tpl->tpl_vars['conf']->value->theme)."/view.tpl");
}
/* {block 'script'} */
class Block_19621608945f647df5d3fb17_25390749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_19621608945f647df5d3fb17_25390749',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	window.onload = ajaxReloadElement("results","<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/order_history_data");
<?php
}
}
/* {/block 'script'} */
/* {block 'title'} */
class Block_11868783465f647df5d47e49_79339521 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11868783465f647df5d47e49_79339521',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	Historia zakupów
<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_20892772375f647df5d4a0d0_22138941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20892772375f647df5d4a0d0_22138941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="history_details">

</div>
<?php
}
}
/* {/block 'body'} */
/* {block 'content'} */
class Block_21233886945f647df5d4c565_44931927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21233886945f647df5d4c565_44931927',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form id="search">
  <label for="nr_zamowienia">Numer zamówienia:</label>
  <input type="text" id="nr_zamowienia" name="nr_zamowienia">
  <label for="sort">Sortuj według:</label>
  <select id="sort" name="sort">
  <option value="0">Nr zamówienia rosnąco</option>
  <option value="1">Nr zamówienia malejąco</option>
  <option value="2">Data rosnąco</option>
  <option value="3">Data malejąco</option>
</select>
</form> 
<button onclick='ajaxPostForm("search","<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/order_history_data","results")'>Szukaj</button>

<div id="results">
Ładowanie...

</div>
<?php
}
}
/* {/block 'content'} */
}
