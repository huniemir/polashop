<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\Validator;


class ShopCartCtrl {
	public $surname;
    public $zipcode;
    public $town;
    public $street;
    public $flat;
    public $telephone_number;
    public $shipping_cost = 20;
    public $rows;
    public $sum_all = 0;
    public $amount;
    public $products;
    public $sum;

	//Tutaj będzie strona odpowiedzialna za koszyk
   	public function action_add_to_cart() {
   		if(ParamUtils::getFromRequest('amount') || ParamUtils::getFromRequest('id')){
   			$shopcart = "";
	   		if(ParamUtils::getFromCookies("shopcart")) $shopcart = ParamUtils::getFromCookies("shopcart");

			$amount = ParamUtils::getFromRequest('amount');
			if($amount == "") $amount=1;
		

			$shopcart = $shopcart.ParamUtils::getFromRequest('id').",".$amount.",";

			
			setcookie("shopcart", $shopcart);
		}
		
		      
    }

    public function action_remove_from_cart() {

    	if(ParamUtils::getFromCookies("shopcart") && ParamUtils::getFromRequest('remove_id') ){

    		$remove_id = explode(",",ParamUtils::getFromRequest('remove_id'));
    		$shopcart = explode(",",ParamUtils::getFromCookies("shopcart"));
    		$newshopcart = "";
    		for($i = 0;$i<=count($shopcart)-1;$i+=2){

    			if($shopcart[$i] == $remove_id["0"] && $shopcart[$i+1] == $remove_id["1"]) continue;

    			if($shopcart[$i] != "") $newshopcart = $newshopcart.$shopcart[$i].",".$shopcart[$i+1].",";

    		}
    		setcookie("shopcart", $newshopcart);
    		$_COOKIE["shopcart"] = $newshopcart;

    	}
    	$this->action_shopcart_data();

		
		      
    }
    public function download_shopcart(){
    	$id = \core\SessionUtils::load("iduser", $keep = true);
    	
    	if(ParamUtils::getFromCookies("shopcart")){
    		
    		

    		$this->shopcart = explode(",",ParamUtils::getFromCookies("shopcart"));
    		$count_shopcart = floor(count($this->shopcart)/2);
    		
    		for($i = 0;$i<$count_shopcart;$i++){
    			$this->amount[intval($this->shopcart[$i*2])] = $this->shopcart[$i*2+1];
    			$this->products[$i*2] = $this->shopcart[$i*2];
    		    	
    		}
    		$this->rows = App::getDB()->select(
				"product", 
				["idproduct","name","price"],
				["idproduct" => $this->products]
			);

			foreach($this->rows as $r){
				$this->product_id = intval($r["idproduct"]);
				$this->sum[$this->product_id] = intval($this->amount[$this->product_id])*intval($r["price"]);
				$this->sum_all += $this->sum[$this->product_id];
			}
			$this->sum_all += $this->shipping_cost;
			return true;
    	}else{
    		return false;
    	}
    }

    public function action_shopcart_data() {
		if($this->download_shopcart()){
			App::getSmarty()->assign('rows', $this->rows);
    		App::getSmarty()->assign('amount', $this->amount);
    		App::getSmarty()->assign('sum', $this->sum);
    		App::getSmarty()->assign('sumall', $this->sum_all);
    		App::getSmarty()->assign('shipping_cost', $this->shipping_cost);
    		App::getSmarty()->display("ShopCartDataView.tpl");  
    		exit();

    	} 
    	
  		echo "Koszyk jest pusty :(";
    	
		             
    }

    public function action_shopcart() {
    	
  		App::getSmarty()->display("ShopCartView.tpl");  
		             
    }

    public function action_choose_shipping_details() {
    	
    	  if(RoleUtils::inRole("user") || RoleUtils::inRole("admin")){
    	  		$id = \core\SessionUtils::load("iduser", $keep = true);



    	  		if(ParamUtils::getFromRequest('shipping') && ParamUtils::getFromRequest('shipping') != "-----"){

    	  			$this->pay(ParamUtils::getFromRequest('shipping'));

    	  			exit();
    	  		}

    	  		$rows = App::getDB()->select(
					"shipping_details", 
					["idshipping_details","name","surname","town","street","flat","zipcode"],
					["user_iduser" => $id]
				);


		
				App::getSmarty()->assign('rows', $rows);
    	  		App::getSmarty()->display("ChooseShippingDetailsView.tpl");
    	  }else{
    	  		$this->enter_shipping_details();	
    	  }
  		  
		             
    }

    private function enter_shipping_details(){
    	if(ParamUtils::getFromRequest('name') || ParamUtils::getFromRequest('surname') || ParamUtils::getFromRequest('zipcode') || ParamUtils::getFromRequest('town') || ParamUtils::getFromRequest('street') || ParamUtils::getFromRequest('flat')){
    		$this->name = ParamUtils::getFromRequest('name');
    		$this->surname = ParamUtils::getFromRequest('surname');
    		$this->zipcode = ParamUtils::getFromRequest('zipcode');
    		$this->town = ParamUtils::getFromRequest('town');
    		$this->street = ParamUtils::getFromRequest('street');
    		$this->flat = ParamUtils::getFromRequest('flat');
    		$this->telephone_number = ParamUtils::getFromRequest('telephone_number');

    		if($this->validate_shipping_details()){

		    		if($this->telephone_number == ""){
		    			$data = App::getDB()->insert("shipping_details", [
							"name" => $this->name,
							"surname" => $this->surname,
							"zipcode" => $this->zipcode,
							"town" => $this->town,
							"street" => $this->street,
							"flat" => $this->flat
						]);
		    		}else{
			    		$data = App::getDB()->insert("shipping_details", [
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
		    			$rows = App::getDB()->select(
							"shipping_details", 
							"idshipping_details",
							[
							"name" => $this->name,
							"surname" => $this->surname,
							"zipcode" => $this->zipcode,
							"town" => $this->town,
							"street" => $this->street,
							"flat" => $this->flat
							]
						);

		    			$this->pay($rows[count($rows)-1]);
		    			exit();
		    		}
		    }
		    	App::getMessages()->addMessage(new \core\Message("Należy poprawnie wypełnić wszystkie wymagane pola!", \core\Message::ERROR));
		}

    		
    	
    	App::getSmarty()->display("EnterShippingDetailsView.tpl");
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

    private function pay($id_shipping_details){

    	if($this->download_shopcart()){

	    	$data = App::getDB()->insert("transaction", [
			"date" => date("Y-m-d"),
			"is_paid_for" => 0,
			"is_send" => 0,
			"shipping_details_idshipping_details" => $id_shipping_details,
			"price" => $this->sum_all-$this->shipping_cost,
			"shipping_costs" => $this->shipping_cost,
			"user_iduser" => \core\SessionUtils::load("iduser", $keep = true)
			]);

			$rows = App::getDB()->select(
			"transaction", 
			"idtransaction",[
			"date" => date("Y-m-d"),
			"is_paid_for" => 0,
			"is_send" => 0,
			"shipping_details_idshipping_details" => $id_shipping_details,
			"price" => $this->sum_all-$this->shipping_cost,
			"shipping_costs" => $this->shipping_cost,
			"user_iduser" => \core\SessionUtils::load("iduser", $keep = true)
			]);
			$idtransaction = $rows[count($rows)-1];

			foreach($this->products as $p){
				$data = App::getDB()->insert("product_has_transaction", [
				"product_idproduct" => $p,
				"transaction_idtransaction" => $idtransaction,
				"amount" => $this->amount[$p]
				]);
				
			}
			setcookie("shopcart","");

			App::getSmarty()->assign('id', $idtransaction);
			App::getSmarty()->display("PayView.tpl");
    	}else{
    		echo "Błąd w dodawaniu tranzakcji";
    	}
    
	}
}