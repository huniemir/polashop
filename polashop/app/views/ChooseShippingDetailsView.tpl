Proszę wybrać dane wysyłki:
<form id="choose-shipping">
<select name="shipping">
  <option>-----</option>
  {foreach $rows as $r}
  		<option value="{$r['idshipping_details']}">{$r["name"]} {$r["surname"]} {$r["zipcode"]} {$r["town"]} {$r["street"]} {$r["flat"]}</option>
  {/foreach}
</select>

</form>
<button onclick='ajaxPostForm("choose-shipping","{$conf->app_url}/choose_shipping_details","results")'>Wybierz</button>