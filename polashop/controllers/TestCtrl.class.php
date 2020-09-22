<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\Validator;


class WelcomeCtrl {
		
    public function action_welcome() {
		        
		App::getSmarty()->display("WelcomeView.tpl");
        
    }
    
}
