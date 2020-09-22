<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use core\Validator;


class RegisterCtrl {
	public $login;
	public $email;
	public $pass;

	public function validate(){
		$this->email = ParamUtils::getFromRequest('email');
		$this->login = ParamUtils::getFromRequest('login');
		$this->pass = ParamUtils::getFromRequest('pass');
		$v = new Validator();
		if($this->login == "" || $this->pass == "") return false;
		$this->login = $v->validate($this->login,
			[ 
				'trim' => true, // usuwa białe znaki z początku i końca parametru - false jest domyślne
				'required' => true , // czy wymagane
				'required_message' => 'Należy podać hasło użytkownika!',
				'min_length' => 3, //min liczba znaków
				'max_length' => 20, //max liczba znakówa

				'validator_message' => 'Podano błędne dane', //komunikat walidatora - generowany gdy parametr niepoprawny
				
			] 
		);
		if($v->isLastOK()){
			$this->pass = $v->validate($this->pass,
				[ 
					'escape' => true, // true jest domyślne
					'required' => true , // czy wymagane
					'required_message' => 'Należy podać hasło!', //komunikat wymagalności parametru - generowany gdy brak

					'min_length' => 3, //min liczba znaków
					'max_length' => 20, //max liczba znaków
					
					'validator_message' => 'Podano błędne dane', //komunikat walidatora - generowany gdy parametr niepoprawny
					
				] 
			);
		}
		if($v->isLastOK()){
			$this->email = $v->validate($this->email,
				[ 
					'escape' => true, // true jest domyślne
					'required' => true , // czy wymagane
					'required_message' => 'Należy podać email!', //komunikat wymagalności parametru - generowany gdy brak

					'email' => true, //min liczba znaków
					
					'validator_message' => 'Podano błędne dane', //komunikat walidatora - generowany gdy parametr niepoprawny
					
				] 
			);
			if($v->isLastOK()) return true;
		}
		return false;
	}

	public function generateView(){
		App::getSmarty()->display("RegisterView.tpl");
	}
	
	

    public function action_register() {
		        
		if(RoleUtils::inRole("user")) App::getRouter()->redirectTo("welcome");
        if($this->validate()){
        	$data = App::getDB()->insert("user",[
	  		"login" => $this->login,
	  		"password" => $this->pass,
	  		"email" => $this->email,
	  		"role" => "user"
			]);
			App::getRouter()->redirectTo("login");
        }
        $this->generateView();
        
    }
    
}
