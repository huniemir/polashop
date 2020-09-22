<form id="add_shipping_details">

  <label for="name">Imię</label><br>
  <input type="text" id="name" name="name" ><br>

  <label for="surname">Nazwisko:</label><br>
  <input type="text" id="surname" name="surname"><br>

  <label for="zipcode">Kod pocztowy:</label><br>
  <input type="text" id="zipcode" name="zipcode"><br>

  <label for="town">Miasto:</label><br>
  <input type="text" id="town" name="town"><br>

  <label for="street">Ulica:</label><br>
  <input type="text" id="street" name="street"><br>

  <label for="flat">Nr mieszkania:</label><br>
  <input type="text" id="flat" name="flat" ><br>

  <label for="telephone_number">Numer telefonu (opcjonalne):</label><br>
  +48 <input type="text" id="telephone_number" name="telephone_number"><br>

</form> 

	<button onclick='ajaxPostForm("add_shipping_details","{$conf->app_url}/choose_shipping_details","results");'>Zamów</button>
