<form id="edit_shipping_details">

  <label for="ename">Imię</label><br>
  <input type="text" id="ename" name="ename" value="{$row['name']}"><br>

  <label for="esurname">Nazwisko:</label><br>
  <input type="text" id="esurname" name="esurname" value="{$row['surname']}"><br>

  <label for="ezipcode">Kod pocztowy:</label><br>
  <input type="text" id="ezipcode" name="ezipcode" value="{$row['zipcode']}"><br>

  <label for="etown">Miasto:</label><br>
  <input type="text" id="etown" name="etown" value="{$row['town']}"><br>

  <label for="estreet">Ulica:</label><br>
  <input type="text" id="estreet" name="estreet" value="{$row['street']}"><br>

  <label for="eflat">Nr mieszkania:</label><br>
  <input type="text" id="eflat" name="eflat" value="{$row['flat']}"><br>

  <label for="etelephone_number">Numer telefonu (opcjonalne):</label><br>
  +48 <input type="text" id="etelephone_number" name="etelephone_number" value="{$row['telephone_number']}"><br>

</form> 

	<button onclick='ajaxPostFormAppend("edit_shipping_details","{$conf->app_url}/settings_data","results","idshipping_details","{$idshipping_details}");'>Edytuj</button>
  <button onclick='ajaxReloadElement("results","{$conf->app_url}/settings_data")'>Wróć</button>
