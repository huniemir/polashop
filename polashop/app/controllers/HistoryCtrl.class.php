<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\SessionUtils;
use core\ParamUtils;
use core\Validator;


class HistoryCtrl {
		
	
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

    public function action_order_history() {
		        
		App::getSmarty()->display("HistoryView.tpl");
        
    }

    public function action_order_history_data() {
    	$id = \core\SessionUtils::load("iduser", $keep = true);
    	$page = 1;
    	$page_size = 5;


    	$count_rows = App::getDB()->count(
			"transaction",
			["user_iduser" => $id]
		);

		$max_page = ceil($count_rows/$page_size);
		
    	if(ParamUtils::getFromRequest('page')){
    		$page = ParamUtils::getFromRequest('page');
    		if($page > $max_page) $page = $max_page;
    		if($page < 1) $page = 1;
    	} 

    	if(ParamUtils::getFromRequest('nr_zamowienia')){
	    	$rows = App::getDB()->select(
				"transaction", 
				["idtransaction","date","is_paid_for","is_send"],
				["user_iduser" => $id,"idtransaction" => ParamUtils::getFromRequest('nr_zamowienia'), 'LIMIT' => [($page-1)*$page_size, $page_size]]
			);
	    }
		else if(ParamUtils::getFromRequest('sort')){
			switch(ParamUtils::getFromRequest('sort')){
				case "0":
					$rows = App::getDB()->select(
						"transaction", 
						["idtransaction","date","is_paid_for","is_send"],
						["user_iduser" => $id,"ORDER" => ["idtransaction" => "ASC"], 'LIMIT' => [($page-1)*$page_size, $page_size]]
					);
				break;
				case "1":
					$rows = App::getDB()->select(
						"transaction", 
						["idtransaction","date","is_paid_for","is_send"],
						["user_iduser" => $id,"ORDER" => ["idtransaction" => "DESC"], 'LIMIT' => [($page-1)*$page_size, $page_size]]
					);

				break;
				case "2":
					$rows = App::getDB()->select(
						"transaction", 
						["idtransaction","date","is_paid_for","is_send"],
						["user_iduser" => $id,"ORDER" => ["date" => "ASC"], 'LIMIT' => [($page-1)*$page_size, $page_size]]
					);
				break;
				case "3":
					$rows = App::getDB()->select(
						"transaction", 
						["idtransaction","date","is_paid_for","is_send"],
						["user_iduser" => $id,"ORDER" => ["date" => "DESC"], 'LIMIT' => [($page-1)*$page_size, $page_size]]
					);
				break;
				default:
					$rows = App::getDB()->select(
						"transaction", 
						["idtransaction","date","is_paid_for","is_send"],
						["user_iduser" => $id, 'LIMIT' => [($page-1)*$page_size, $page_size]]
					);
				break;
			}
		}
		else{
			$rows = App::getDB()->select(
				"transaction", 
				["idtransaction","date","is_paid_for","is_send"],
				["user_iduser" => $id, 'LIMIT' => [($page-1)*$page_size, $page_size]]
			);
		}
		App::getSmarty()->assign('rows', $rows);
		App::getSmarty()->assign('page', $page);
		App::getSmarty()->assign('max_page', $max_page);
		App::getSmarty()->display("HistoryDataView.tpl");
        
    }


    
    
}
