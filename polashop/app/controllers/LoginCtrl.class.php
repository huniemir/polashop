<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use core\Validator;


class LoginCtrl {
	public $login;
	public $pass;
	public function action_logout(){
		session_destroy();
		App::getRouter()->redirectTo('login');
	}

	public function validate(){
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

				'validator_message' => 'Podano błędną nazwę użytkownika lub hasło', //komunikat walidatora - generowany gdy parametr niepoprawny
				
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
					
					'validator_message' => 'Podano błędną nazwę użytkownika lub hasło', //komunikat walidatora - generowany gdy parametr niepoprawny
					
				] 
			);
			if($v->isLastOK()) return true;
		}
		return false;
	}

	public function generateView(){
		App::getSmarty()->display("LoginView.tpl");
	}
	
	

    public function action_login() {
		        
		if(RoleUtils::inRole("user")) App::getRouter()->redirectTo("welcome");
        if($this->validate()){
        	$data = App::getDB()->select("user", ["iduser","role"],[
	  		"login" => $this->login,
	  		"password" => $this->pass
			]);
			\core\RoleUtils::addRole($data[0]["role"]); //zapisanie roli w sesji
			\core\SessionUtils::store("iduser", $data[0]["iduser"]);
			App::getRouter()->redirectTo("welcome");
        }
        $this->generateView();
        
    }
    
}
