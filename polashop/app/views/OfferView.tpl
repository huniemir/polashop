{extends file="templates/{$conf->theme}/view.tpl"}
{block name=script}
	window.onload = ajaxReloadElement("results","{$conf->app_url}/offer_data");
{/block}
{block name=title}
	Oferta
{/block}
{block name=body}

{/block}
{block name=content}
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
<button onclick='ajaxPostForm("search","{$conf->app_url}/offer_data","results")'>Szukaj</button>

<div id="results">
Ładowanie...

</div>
{/block}
