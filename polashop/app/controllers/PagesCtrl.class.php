<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\Validator;


class PagesCtrl {
		
    public function action_welcome() {
		        
		App::getSmarty()->display("WelcomeView.tpl");
        
    }
    public function action_test() {
		        
		App::getSmarty()->display("TestView.tpl");
        
    }

    public function action_protected_test() {
		        
		App::getSmarty()->display("TestView.tpl");
        
    }
    
}
