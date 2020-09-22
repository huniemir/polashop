{extends file="templates/{$conf->theme}/view.tpl"}
{block name=script}
	window.onload = ajaxReloadElement("results","{$conf->app_url}/order_history_data");
{/block}
{block name=title}
	Historia zakupów
{/block}
{block name=body}
<div id="history_details">

</div>
{/block}
{block name=content}
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
<button onclick='ajaxPostForm("search","{$conf->app_url}/order_history_data","results")'>Szukaj</button>

<div id="results">
Ładowanie...

</div>
{/block}
