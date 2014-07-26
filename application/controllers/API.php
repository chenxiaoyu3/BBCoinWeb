<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'libraries/REST_Controller.php';

class API extends REST_Controller {

	var $COINS;
	function __construct() {
        parent::__construct();
        $this->load->driver('cache');
    }
    public function index(){

    }
    public function test_get(){
    	$this->response("ab");
    }
	public function trade_list_get(){
		$ret = array();
		foreach ($this->Coin_model->coinsName() as $c) {
			$key = '38_tradeList_'.$c;
			$ret[$c] = $this->cache->kvdb->get($key);
		}
		$ret['updatetime'] = $this->cache->kvdb->get('38_tradeList_updatetime');
		$this->response($ret);
	}

	public function single_trade_list_get($c){
		if (isset($c)) {
			$key = '38_tradeList_'.$c;
			$this->response($this->cache->kvdb->get($key));
		}
	}

	public function price_get($buyOrSell)
	{
		if (isset($buyOrSell)) {
			$this->response( $this->cache->kvdb->get('38_price_'.$buyOrSell) );
		}
		
	}

	
	
}