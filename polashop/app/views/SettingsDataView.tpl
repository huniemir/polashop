{include file='messages.tpl'}
<button onclick='ajaxReloadElement("results","{$conf->app_url}/add_shipping_details_page")'>Dodaj nowe dane wysyłki</button>
<table>
	<tr>
		<b>
			<td>Adres</td>
			<td></td>
			<td></td>
		</b>
	</tr>

		{foreach $rows as $r}

		<tr>
		  <td>{$r["name"]} {$r["surname"]} {$r["zipcode"]} {$r["town"]} {$r["street"]} {$r["flat"]}</td>
		  
		  <td><button onclick='ajaxPostOne("edit",{$r["idshipping_details"]},"{$conf->app_url}/edit_shipping_details_page","results")'>Edytuj</button></td>
		  <td><button onclick='ajaxPostOne("delete",{$r["idshipping_details"]},"{$conf->app_url}/settings_data","results")'>Usuń</button></td>
		</tr>
		{/foreach}
		

</table>
<button onclick='ajaxPostOne("page",{1},"{$conf->app_url}/settings_data","results")'>|<<<</button>

<!--Podświetlanie odnośnika nr.1 -->
{if $page eq 1}
<button style="background-color: #666;" onclick='ajaxPostOne("page",{1},"{$conf->app_url}/settings_data","results")'>1</button>
{else}
<button onclick='ajaxPostOne("page",{1},"{$conf->app_url}/settings_data","results")'>1</button>
{/if}

<!-- Wygeneruj wszystkie odnośniki jeśli jest ich < 6 + podświetlanie odpowiedniego odnośnika -->
{if $max_page < 6}
	{for $i=2 to $max_page-1}

		{if $page eq $i}
    	<button style="background-color: #666;" onclick='ajaxPostOne("page",{$i},"{$conf->app_url}/settings_data","results")'>{$i}</button>

    	{else}
    	<button onclick='ajaxPostOne("page",{$i},"{$conf->app_url}/settings_data","results")'>{$i}</button>
		{/if}

	{/for}

<!--Wyświetlenie pierwszych 4 odnośników + podświetlenie odpowiedniego -->

{else if $page < 4}
	{for $i=2 to 4}
    	{if $page eq $i}
    	<button style="background-color: #666;" onclick='ajaxPostOne("page",{$i},"{$conf->app_url}/settings_data","results")'>{$i}</button>

    	{else}
    	<button onclick='ajaxPostOne("page",{$i},"{$conf->app_url}/settings_data","results")'>{$i}</button>
		{/if}
	{/for}
	<span>...</span>


<!--Wygenerowanie odnośników w formacie 1...k-1, k, k+1...n + podświetlenie k -->
{else if $page < $max_page-2}
	<span>...</span>
	<button onclick='ajaxPostOne("page",{$page-1},"{$conf->app_url}/settings_data","results")'>{$page-1}</button>
	<button style="background-color: #666;" onclick='ajaxPostOne("page",{$page},"{$conf->app_url}/settings_data","results")'>{$page}</button>
	<button onclick='ajaxPostOne("page",{$page+1},"{$conf->app_url}/settings_data","results")'>{$page+1}</button>
	<span>...</span>

{else}
	
<!--Wygenerowanie odnośników w formacie 1...n-3, n-2, n-1, n + podświetlenie odpowiedniej strony  -->
	<span>...</span>
	{for $i=$max_page-3 to $max_page-1}
		{if $page eq $i}
	    	<button style="background-color: #666;" onclick='ajaxPostOne("page",{$i},"{$conf->app_url}/settings_data","results")'>{$i}</button>

    	{else}
    		<button onclick='ajaxPostOne("page",{$i},"{$conf->app_url}/settings_data","results")'>{$i}</button>
		{/if}
	{/for}
{/if}

<!--Podświetlanie ostatniego odnośnika -->
{if $max_page >1}
	{if $page eq $max_page}
		<button style="background-color: #666; onclick='ajaxPostOne("page",{$max_page},"{$conf->app_url}/settings_data","results")'>{$max_page}</button>
	{else}

		<button onclick='ajaxPostOne("page",{$max_page},"{$conf->app_url}/settings_data","results")'>{$max_page}</button>
	{/if}
{/if}
<button onclick='ajaxPostOne("page",{$max_page},"{$conf->app_url}/settings_data","results")'>>>>|</button>
