<div id="messages">{include file='messages.tpl'}</div>
<table>
		{foreach $rows as $r}
		<tr>
					
				<td>
					{if $r['image'] eq ""}
						<img src="{$conf->app_url}/images/brak-obrazu.jpg" width="150" height="150"/>
					{else}
						<img src="{$conf->app_url}/images/{$r['image']}" width="150" height="150"/>
					{/if}
					<h3>{$r['name']}</h3> </br>
				</td>
				<td>
					<span>{$r['description']}</span>
				</td>
				<td>
					<span>{$r['price']}zł</span>
				</td>
				<td>
					Ilość <input type="text" id="amount{$r["idproduct"]}" name="amount" maxlength="2" size="2">
					
				</td>
				<td>
					<button onclick='addToCart("{$r["idproduct"]}","{$conf->app_url}/add_to_cart");'>Dodaj do koszyka</button>
				</td>
			
		</tr>
		{/foreach}

</table>
<button onclick='ajaxPostOneAndForm("{$filterFlag}","search","page",{1},"{$conf->app_url}/offer_data","results")'>|<<<</button>

<!--Podświetlanie odnośnika nr.1 -->
{if $page eq 1}
<button style="background-color: #666;" onclick='ajaxPostOneAndForm("{$filterFlag}","search","page",{1},"{$conf->app_url}/offer_data","results")'>1</button>
{else}
<button onclick='ajaxPostOneAndForm("{$filterFlag}","search","page",{1},"{$conf->app_url}/offer_data","results")'>1</button>
{/if}

<!-- Wygeneruj wszystkie odnośniki jeśli jest ich < 6 + podświetlanie odpowiedniego odnośnika -->
{if $max_page < 6}
	{for $i=2 to $max_page-1}

		{if $page eq $i}
    	<button style="background-color: #666;" onclick='ajaxPostOneAndForm("{$filterFlag}","search","page",{$i},"{$conf->app_url}/offer_data","results")'>{$i}</button>

    	{else}
    	<button onclick='ajaxPostOneAndForm("{$filterFlag}","search","page",{$i},"{$conf->app_url}/offer_data","results")'>{$i}</button>
		{/if}

	{/for}

<!--Wyświetlenie pierwszych 4 odnośników + podświetlenie odpowiedniego -->

{else if $page < 4}
	{for $i=2 to 4}
    	{if $page eq $i}
    	<button style="background-color: #666;" onclick='ajaxPostOneAndForm("{$filterFlag}","search","page",{$i},"{$conf->app_url}/offer_data","results")'>{$i}</button>

    	{else}
    	<button onclick='ajaxPostOneAndForm("{$filterFlag}","search","page",{$i},"{$conf->app_url}/offer_data","results")'>{$i}</button>
		{/if}
	{/for}
	<span>...</span>


<!--Wygenerowanie odnośników w formacie 1...k-1, k, k+1...n + podświetlenie k -->
{else if $page < $max_page-2}
	<span>...</span>
	<button onclick='ajaxPostOneAndForm("{$filterFlag}","search","page",{$page-1},"{$conf->app_url}/offer_data","results")'>{$page-1}</button>
	<button style="background-color: #666;" onclick='ajaxPostOneAndForm("{$filterFlag}","search","page",{$page},"{$conf->app_url}/offer_data","results")'>{$page}</button>
	<button onclick='ajaxPostOneAndForm("{$filterFlag}","search","page",{$page+1},"{$conf->app_url}/offer_data","results")'>{$page+1}</button>
	<span>...</span>

{else}
	
<!--Wygenerowanie odnośników w formacie 1...n-3, n-2, n-1, n + podświetlenie odpowiedniej strony  -->
	<span>...</span>
	{for $i=$max_page-3 to $max_page-1}
		{if $page eq $i}
	    	<button style="background-color: #666;" onclick='ajaxPostOneAndForm("{$filterFlag}","search","page",{$i},"{$conf->app_url}/offer_data","results")'>{$i}</button>

    	{else}
    		<button onclick='ajaxPostOneAndForm("{$filterFlag}","search","page",{$i},"{$conf->app_url}/offer_data","results")'>{$i}</button>
		{/if}
	{/for}
{/if}

<!--Podświetlanie ostatniego odnośnika -->
{if $max_page >1}
	{if $page eq $max_page}
		<button style="background-color: #666; onclick='ajaxPostOneAndForm("{$filterFlag}","search","page",{$max_page},"{$conf->app_url}/offer_data","results")'>{$max_page}</button>
	{else}

		<button onclick='ajaxPostOneAndForm("{$filterFlag}","search","page",{$max_page},"{$conf->app_url}/offer_data","results")'>{$max_page}</button>
	{/if}
{/if}
<button onclick='ajaxPostOneAndForm("{$filterFlag}","search","page",{$max_page},"{$conf->app_url}/offer_data","results")'>>>>|</button>
