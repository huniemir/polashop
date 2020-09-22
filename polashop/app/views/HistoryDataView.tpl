<table>
	<tr>
		<b>
			<td>Numer zamówienia</td>
			<td>Data</td>
			<td>Stan przesyłki</td>
			<td></td>
		</b>
	</tr>

		{foreach $rows as $r}

		<tr>
		  <td>{$r["idtransaction"]}</td>
		  <td>{$r["date"]}</td>
		  {if $r["is_paid_for"] eq 0}
		  <td style="background: #600;">Nieopłacona</td>
		  {elseif $r["is_send"] eq 0}
		  <td style="background: #060;">Opłacona</td>
		  {else}
		  <td style="background: #060";>Wysłana</td>
		  {/if}
		  <td><a onclick='ajaxPostOne("details",{$r["idtransaction"]},"{$conf->app_url}/order_history_details","history_details")' href="#">Szczegóły</a></td>
		</tr>
		{/foreach}
		

</table>
<button onclick='ajaxPostOne("page",{1},"{$conf->app_url}/order_history_data","results")'>|<<<</button>

<!--Podświetlanie odnośnika nr.1 -->
{if $page eq 1}
<button style="background-color: #666;" onclick='ajaxPostOne("page",{1},"{$conf->app_url}/order_history_data","results")'>1</button>
{else}
<button onclick='ajaxPostOne("page",{1},"{$conf->app_url}/order_history_data","results")'>1</button>
{/if}

<!-- Wygeneruj wszystkie odnośniki jeśli jest ich < 6 + podświetlanie odpowiedniego odnośnika -->
{if $max_page < 6}
	{for $i=2 to $max_page-1}

		{if $page eq $i}
    	<button style="background-color: #666;" onclick='ajaxPostOne("page",{$i},"{$conf->app_url}/order_history_data","results")'>{$i}</button>

    	{else}
    	<button onclick='ajaxPostOne("page",{$i},"{$conf->app_url}/order_history_data","results")'>{$i}</button>
		{/if}

	{/for}

<!--Wyświetlenie pierwszych 4 odnośników + podświetlenie odpowiedniego -->

{else if $page < 4}
	{for $i=2 to 4}
    	{if $page eq $i}
    	<button style="background-color: #666;" onclick='ajaxPostOne("page",{$i},"{$conf->app_url}/order_history_data","results")'>{$i}</button>

    	{else}
    	<button onclick='ajaxPostOne("page",{$i},"{$conf->app_url}/order_history_data","results")'>{$i}</button>
		{/if}
	{/for}
	<span>...</span>


<!--Wygenerowanie odnośników w formacie 1...k-1, k, k+1...n + podświetlenie k -->
{else if $page < $max_page-2}
	<span>...</span>
	<button onclick='ajaxPostOne("page",{$page-1},"{$conf->app_url}/order_history_data","results")'>{$page-1}</button>
	<button style="background-color: #666;" onclick='ajaxPostOne("page",{$page},"{$conf->app_url}/order_history_data","results")'>{$page}</button>
	<button onclick='ajaxPostOne("page",{$page+1},"{$conf->app_url}/order_history_data","results")'>{$page+1}</button>
	<span>...</span>

{else}
	
<!--Wygenerowanie odnośników w formacie 1...n-3, n-2, n-1, n + podświetlenie odpowiedniej strony  -->
	<span>...</span>
	{for $i=$max_page-3 to $max_page-1}
		{if $page eq $i}
	    	<button style="background-color: #666;" onclick='ajaxPostOne("page",{$i},"{$conf->app_url}/order_history_data","results")'>{$i}</button>

    	{else}
    		<button onclick='ajaxPostOne("page",{$i},"{$conf->app_url}/order_history_data","results")'>{$i}</button>
		{/if}
	{/for}
{/if}

<!--Podświetlanie ostatniego odnośnika -->
{if $max_page >1}
	{if $page eq $max_page}
		<button style="background-color: #666; onclick='ajaxPostOne("page",{$max_page},"{$conf->app_url}/order_history_data","results")'>{$max_page}</button>
	{else}

		<button onclick='ajaxPostOne("page",{$max_page},"{$conf->app_url}/order_history_data","results")'>{$max_page}</button>
	{/if}
{/if}
<button onclick='ajaxPostOne("page",{$max_page},"{$conf->app_url}/order_history_data","results")'>>>>|</button>
