<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('welcome'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('welcome', 'PagesCtrl');
Utils::addRoute('test', 'PagesCtrl');
Utils::addRoute('protected_test', 'PagesCtrl', ["user","admin"]);
Utils::addRoute('offer', 'OfferCtrl'); 
Utils::addRoute('offer_data', 'OfferCtrl'); 
Utils::addRoute('add_to_cart', 'ShopCartCtrl'); 
Utils::addRoute('remove_from_cart', 'ShopCartCtrl'); 
Utils::addRoute('shopcart', 'ShopCartCtrl'); 
Utils::addRoute('shopcart_data', 'ShopCartCtrl'); 
Utils::addRoute('choose_shipping_details', 'ShopCartCtrl'); 
Utils::addRoute('register', 'RegisterCtrl');
Utils::addRoute('login', 'LoginCtrl');
//Utils::addRoute('action_name', 'controller_class_name');
Utils::addRoute('logout', 'LoginCtrl', ["user","admin"]);
Utils::addRoute('settings', 'SettingsCtrl', ["user","admin"]);  
Utils::addRoute('settings_data', 'SettingsCtrl', ["user","admin"]); 
Utils::addRoute('add_shipping_details_page', 'SettingsCtrl', ["user","admin"]); 
Utils::addRoute('edit_shipping_details_page', 'SettingsCtrl', ["user","admin"]); 
Utils::addRoute('order_history', 'HistoryCtrl', ["user","admin"]); 
Utils::addRoute('order_history_data', 'HistoryCtrl', ["user","admin"]); 
Utils::addRoute('order_history_details', 'HistoryCtrl', ["user","admin"]); 




