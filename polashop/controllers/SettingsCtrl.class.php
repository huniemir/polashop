<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\Validator;


class SettingsCtrl {
	public $name;
    public $surname;
    public $zipcode;
    public $town;
    public $street;
    public $flat;
    public $telephone_number;

    //Tutaj będzie strona odpowiedzialna za ustawienia konta użytkownika (może tutaj będzie można ustawić dane wysyłki)
    public function action_add_shipping_details_page(){

    	App::getSmarty()->display("AddShippingDetailsView.tpl");
    }

    public function action_edit_shipping_details_page(){

    	$id_user = \core\SessionUtils::load("iduser", $keep = true);

    	if(ParamUtils::getFromRequest('edit')){

	    	$row = App::getDB()->select(
				"shipping_details", 
				["name","surname","town","street","flat","zipcode","telephone_number"],
				["user_iduser" => $id_user, "idshipping_details" => ParamUtils::getFromRequest('edit')]
			);

	    	$row = $row[0];

	    	App::getSmarty()->assign('row', $row);
	    	App::getSmarty()->assign('idshipping_details', ParamUtils::getFromRequest('edit'));
	    	App::getSmarty()->display("EditShippingDetailsView.tpl");
    	}else{
    		echo "Niedozwolona akcja";
    	}
    }

    public function action_settings() {
		        
		App::getSmarty()->display("SettingsView.tpl");
        
    }

    private function delete_shipping_details($shippingid){
    	$id = \core\SessionUtils::load("iduser", $keep = true);
    	
    		$data =  App::getDB()->delete("shipping_details", ["user_iduser" => $id, "idshipping_details" => $shippingid]);

    		if($data->rowCount() > 0){
    			App::getMessages()->addMessage(new \core\Message("Usunięto adres", \core\Message::INFO));
    		}
    }

    private function validate_shipping_details(){

    	$v = new Validator();
    	if($this->name == "" || $this->surname == "" || $this->zipcode == "" || $this->town == "" || $this->street == "" || $this->flat == "") return false;

		$this->name = $v->validate($this->name, [
  			'trim' => true,
  			'required' => false,
  			//'required' => true,
  			'required_message' => 'Imię jest wymagane',
  			'min_length' => 3,
  			'max_length' => 45,
  			'validator_message' => 'Imię powinno mieścić się pomiędzy 3 i 45 znakami'
		]);

		if($v->isLastOK()){
			$this->surname = $v->validate($this->surname, [
  			'trim' => true,
  			'required' => true,
  			'required_message' => 'Nazwisko jest wymagane',
  			'min_length' => 3,
  			'max_length' => 45,
  			'validator_message' => 'Nazwisko powinno mieścić się pomiędzy 3 i 45 znakami',
			]);
		}
		if($v->isLastOK()){
			$this->zipcode = $v->validate($this->zipcode, [
  			'trim' => true,
  			'required' => true,
  			'required_message' => 'Kod pocztowy jest wymagany',
  			'regexp' => '/[0-9][0-9]-[0-9][0-9][0-9]/',
  			'validator_message' => 'Zły format kodu pocztowego',
			]);
		}
		if($v->isLastOK()){
			$this->town = $v->validate($this->town, [
  			'trim' => true,
  			'required' => true,
  			'required_message' => 'Miasto jest wymagane',
  			'min_length' => 3,
  			'max_length' => 45,
  			'validator_message' => 'Miasto powinno mieścić się pomiędzy 3 i 45 znakami',
			]);
		}
		if($v->isLastOK()){
			$this->street = $v->validate($this->street, [
  			'trim' => true,
  			'required' => true,
  			'required_message' => 'Ulica jest wymagana',
  			'min_length' => 3,
  			'max_length' => 45,
  			'validator_message' => 'Ulica powinna mieścić się pomiędzy 3 i 45 znakami',
			]);
		}
		if($v->isLastOK()){
			$this->flat = $v->validate($this->flat, [
  			'trim' => true,
  			'required' => true,
  			'required_message' => 'Nr. mieszkania jest wymagany',
  			'int' => true,
  			'validator_message' => 'Nr. mieszkania powinien być liczbą całkowitą',
			]);
		}
		if($v->isLastOK()){
			if($this->telephone_number == "") return true;

			$this->telephone_number = $v->validate($this->telephone_number, [
  			'trim' => true,
  			'required' => false,
  			'regexp' => '/[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/',
  			'validator_message' => 'Numer telefonu powinien mieć 9 cyfr',
			]);
		
		}
		if($v->isLastOK()) return true;




    	return false;
    }

    private function add_shipping_details($id){

    	if($this->validate_shipping_details()){

    		if($this->telephone_number == ""){
    			$data = App::getDB()->insert("shipping_details", [
    				"user_iduser" => $id,
					"name" => $this->name,
					"surname" => $this->surname,
					"zipcode" => $this->zipcode,
					"town" => $this->town,
					"street" => $this->street,
					"flat" => $this->flat
				]);
    		}else{
	    		$data = App::getDB()->insert("shipping_details", [
	    			"user_iduser" => $id,
					"name" => $this->name,
					"surname" => $this->surname,
					"zipcode" => $this->zipcode,
					"town" => $this->town,
					"street" => $this->street,
					"flat" => $this->flat,
					"telephone_number" => $this->telephone_number
				]);
    		}

    		if($data->rowCount() > 0){
    			App::getMessages()->addMessage(new \core\Message("Dodano nowe dane wysyłki", \core\Message::INFO));
    			return;
    		}
    	}
    	App::getMessages()->addMessage(new \core\Message("Należy poprawnie wypełnić wszystkie wymagane pola!", \core\Message::ERROR));

    }

    private function edit_shipping_details($id_shippingdetails, $id_user){

    	if($this->validate_shipping_details()){

    		if($this->telephone_number == ""){
    			$data = App::getDB()->update("shipping_details", [
					"name" => $this->name,
					"surname" => $this->surname,
					"zipcode" => $this->zipcode,
					"town" => $this->town,
					"street" => $this->street,
					"flat" => $this->flat
				],
				[
					"idshipping_details" => $id_shippingdetails,
					"user_iduser" => $id_user
				]);
    		}else{
	    		$data = App::getDB()->update("shipping_details", [
						"name" => $this->name,
						"surname" => $this->surname,
						"zipcode" => $this->zipcode,
						"town" => $this->town,
						"street" => $this->street,
						"flat" => $this->flat,
						"telephone_number" => $this->telephone_number
					],
					[
						"idshipping_details" => $id_shippingdetails,
						"user_iduser" => $id_user
					]
				);
    		}

    		if($data->rowCount() > 0){
    			App::getMessages()->addMessage(new \core\Message("Edytowano dane wysyłki", \core\Message::INFO));
    			return;
    		}
    	}
    	App::getMessages()->addMessage(new \core\Message("Należy poprawnie wypełnić wszystkie wymagane pola!", \core\Message::ERROR));

    }

    public function action_settings_data() {
    	$id = \core\SessionUtils::load("iduser", $keep = true);
    	$page = 1;
    	$page_size = 5;

    	if(ParamUtils::getFromRequest('delete')){
    		$this->delete_shipping_details(ParamUtils::getFromRequest('delete'));
    	}

    	if(ParamUtils::getFromRequest('name') || ParamUtils::getFromRequest('surname') || ParamUtils::getFromRequest('zipcode') || ParamUtils::getFromRequest('town') || ParamUtils::getFromRequest('street') || ParamUtils::getFromRequest('flat')){
    		$this->name = ParamUtils::getFromRequest('name');
    		$this->surname = ParamUtils::getFromRequest('surname');
    		$this->zipcode = ParamUtils::getFromRequest('zipcode');
    		$this->town = ParamUtils::getFromRequest('town');
    		$this->street = ParamUtils::getFromRequest('street');
    		$this->flat = ParamUtils::getFromRequest('flat');
    		$this->telephone_number = ParamUtils::getFromRequest('telephone_number');

    		$this->add_shipping_details($id);
    	}

    	if(ParamUtils::getFromRequest('ename') || ParamUtils::getFromRequest('esurname') || ParamUtils::getFromRequest('ezipcode') || ParamUtils::getFromRequest('etown') || ParamUtils::getFromRequest('estreet') || ParamUtils::getFromRequest('eflat')){
    		$this->name = ParamUtils::getFromRequest('ename');
    		$this->surname = ParamUtils::getFromRequest('esurname');
    		$this->zipcode = ParamUtils::getFromRequest('ezipcode');
    		$this->town = ParamUtils::getFromRequest('etown');
    		$this->street = ParamUtils::getFromRequest('estreet');
    		$this->flat = ParamUtils::getFromRequest('eflat');
    		$this->telephone_number = ParamUtils::getFromRequest('etelephone_number');

    		$this->edit_shipping_details(ParamUtils::getFromRequest('idshipping_details'),$id);
    	}



    	$count_rows = App::getDB()->count(
			"shipping_details",
			["user_iduser" => $id]
		);

		$max_page = ceil($count_rows/$page_size);
		
    	if(ParamUtils::getFromRequest('page')){
    		$page = ParamUtils::getFromRequest('page');
    		if($page > $max_page) $page = $max_page;
    		if($page < 1) $page = 1;
    	} 

    	
		$rows = App::getDB()->select(
			"shipping_details", 
			["idshipping_details","name","surname","town","street","flat","zipcode"],
			["user_iduser" => $id, 'LIMIT' => [($page-1)*$page_size, $page_size]]
		);


		
		App::getSmarty()->assign('rows', $rows);
		App::getSmarty()->assign('page', $page);
		App::getSmarty()->assign('max_page', $max_page);
		App::getSmarty()->display("SettingsDataView.tpl");
    }
    
}
