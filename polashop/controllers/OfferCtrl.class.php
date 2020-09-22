<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\SessionUtils;
use core\ParamUtils;
use core\Validator;


class OfferCtrl {
		
	
    //Tutaj będzie podstrona odpowiedzialna za historię dokonanych zakupów

	public function action_order_history_details(){
		$id = \core\SessionUtils::load("iduser", $keep = true);

		if(ParamUtils::getFromRequest('details')){
			$transaction = App::getDB()->select(
				"transaction", 
				["date","is_paid_for","is_send","shipping_details_idshipping_details","price","shipping_costs"],
				["user_iduser" => $id, "idtransaction" => ParamUtils::getFromRequest('details')]
			);

			$shipping_details = App::getDB()->select(
				"shipping_details", 
				["telephone_number","name","surname","town","street","flat","zipcode"],
				["idshipping_details" => $transaction[0]['shipping_details_idshipping_details']]
			);

			$product = App::getDB()->select(
				"product", 
				[
					"[>]product_has_transaction" => ["idproduct" => "product_idproduct"]
				],
				["product.name","product.price","product_has_transaction.amount"],
				["product_has_transaction.transaction_idtransaction" => ParamUtils::getFromRequest('details')]
			);

			$shipping_details = $shipping_details[0];
			$transaction = $transaction[0];

			App::getSmarty()->assign('idtransaction', ParamUtils::getFromRequest('details'));
			App::getSmarty()->assign('product', $product);
			App::getSmarty()->assign('shipping_details', $shipping_details);
			App::getSmarty()->assign('transaction', $transaction);
			App::getSmarty()->display("HistoryDetailsView.tpl");
			
		}
			
	}

    public function action_offer() {
		        
		App::getSmarty()->display("OfferView.tpl");
        
    }

    public function action_offer_data() {
    	$id = \core\SessionUtils::load("iduser", $keep = true);
    	$page = 1;
    	$page_size = 5;
    	$where;
    	$count_rows = App::getDB()->count(
			"product");
    	$filterFlag = false;
    	
    	if(ParamUtils::getFromRequest('name')){

    		$where["name[~]"] = [ParamUtils::getFromRequest('name')];
    		$count_rows = App::getDB()->count(
			"product",$where);
			$filterFlag = true;
	    }

	    if(ParamUtils::getFromRequest('pricemin')){
	    	$pricemin = intval(ParamUtils::getFromRequest('pricemin'));

    		$where["price[>=]"] = $pricemin;
    		$count_rows = App::getDB()->count(
			"product",$where);
			$filterFlag = true;
    		
	    }

	    if(ParamUtils::getFromRequest('pricemax')){

	    	$pricemax = intval(ParamUtils::getFromRequest('pricemax'));
    		$where["price[<=]"] = $pricemax;
    		$count_rows = App::getDB()->count(
			"product",$where);
			$filterFlag = true;
    		
	    }



	    if(ParamUtils::getFromRequest('sort')){
			switch(ParamUtils::getFromRequest('sort')){
				case "0":
					$where["ORDER"] = array("name" => "ASC");
					
				break;
				case "1":
					$where["ORDER"] = array("name" => "DESC");
				break;
				case "2":
					$where["ORDER"] = array("price" => "ASC");
				break;
				case "3":
					$where["ORDER"] = array("price" => "DESC");
				break;
			}
			$filterFlag = true;
		}

		

	    $max_page = ceil($count_rows/$page_size);

	    if(ParamUtils::getFromRequest('page')){
    		$page = ParamUtils::getFromRequest('page');
    		if($page > $max_page) $page = $max_page;
    		if($page < 1) $page = 1;
    	} 

    	$where['LIMIT'] = array(($page-1)*$page_size, $page_size);		
		$rows = App::getDB()->select(
			"product","*",$where
		);


		

		App::getSmarty()->assign('rows', $rows);
		App::getSmarty()->assign('page', $page);
		App::getSmarty()->assign('filterFlag', $filterFlag);
		App::getSmarty()->assign('max_page', $max_page);
		App::getSmarty()->display("OfferDataView.tpl");
        
    }


    
    
}

