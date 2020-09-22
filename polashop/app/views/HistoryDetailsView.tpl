<h2>Zamówienie nr. {$idtransaction}</h2>
<table>
	<tr>
		<b>
			<td>Data</td>
			<td>Stan opłacenia</td>
			<td>Stan wysyłki</td>
			<td>Suma</td>
			<td>Koszty przesyłki</td>
		</b>
	</tr>
	<tr>
		  <td>{$transaction["date"]}</td>
		  {if $transaction["is_paid_for"] eq 0}
		  <td style="background: #600;">Nieopłacona</td>
		  {else}
		  <td style="background: #600;">Opłacona</td>
		  {/if}
		  {if $transaction["is_send"] eq 0}
		  <td style="background: #060;">Niewysłana</td>
		  {else}
		  <td style="background: #060";>Wysłana</td>
		  {/if}
		  <td> {$transaction["price"]}zł</td>
		  <td> {$transaction["shipping_costs"]}zł</td>
	</tr>
</table>
<h3>Dane wysyłki:</h3>
<table>
	<tr>
		<td>
			{$shipping_details['name']}
		</td>
		<td>
			{$shipping_details['town']}
		</td>
	</tr>
	<tr>
		<td>
			{$shipping_details['surname']}
		</td>
		<td>
			{$shipping_details['street']}
		</td>
	</tr>
	<tr>
		<td>
			nr. tel {$shipping_details['telephone_number']}
		</td>
		<td>
			{$shipping_details['flat']}
		</td>
	</tr>
	<tr>
		<td>
			
		</td>
		<td>
			{$shipping_details['zipcode']}
		</td>
	</tr>
</table>
<h3>Produkty:</h3>
<table>
	<tr>
			<td>Nazwa</td>
			<td>Ilość</td>
			<td>Cena (sztuka)</td>
			<td>Cena (całość)</td>
	</tr>
	{foreach $product as $p}
		<tr>
			<td>{$p['name']}</td>
			<td>{$p['amount']}</td>
			<td>{$p['price']}zł</td>
			<td>{$p['price']*$p['amount']}zł</td>
		</tr>
	{/foreach}
</table>
<button onclick='ajaxReloadElement("history_details","{$conf->app_url}/order_history_details")'>Zamknij</button>