  <table>
    <tr>
      <b>
        <td>Produkt</td>
        <td>Ilość</td>
        <td>Cena</td>
        <td>Suma</td>
        <td></td>
      </b>
    </tr>
    {foreach $rows as $r}

    <tr>
      <td>{$r["name"]}</td>
      <td>{$amount[$r["idproduct"]]}</td>
      <td>{$r["price"]}zł</td>
      <td>{$sum[$r["idproduct"]]}zł</td>
      <td><button onclick='ajaxPostOne("remove_id","{$r["idproduct"]},{$amount[$r["idproduct"]]}","{$conf->app_url}/remove_from_cart","results");'>Usuń z koszyka</button>
    </tr>
    {/foreach}
    <tr>
      <td></td><td></td><td></td><td></td><td></td>
    </tr>
    <tr>
      <td>Koszty przesyłki</td>
      
      <td>{$shipping_cost}zł</td>

      
    </tr>

    <tr>
      <td>W sumie:</td>
      
      <td>{$sumall}zł</td>
      <td></td><td></td><td></td>

      
    </tr>

</table>
<button onclick='ajaxReloadElement("results","{$conf->app_url}/choose_shipping_details")'>Zapłać</button>