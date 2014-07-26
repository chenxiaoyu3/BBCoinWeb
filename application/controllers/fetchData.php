<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FetchData extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->driver('cache');
    }
	public function index()
	{
		
		for( $i = 0; $i < 6; $i++){
			echo "</br>" . (date("y-m-d H:i:s",time())) . "  Step" . $i ;
			$data = $this->fetch_38();
			sleep(10);
		}
	}
	public function fetch_38()
	{
		$succCnt = 0;
		$allBuyPrice = array();
		$allSellPrice = array();
		foreach($this->Coin_model->coinsName() as $c)
		{
			$tradeList = 'http://www.btc38.com/trade/getTradeList.php?coinname='.$c;
			echo $tradeList;
			$data = $this->fetchURL($tradeList);
			// echo $data;
			if( !is_null($data) && !is_null($dd = my_json_decode($data)) )
			{
				$this->cache->kvdb->save('38_tradeList_'.$c, $dd);
				$succCnt++;
				echo '... OK';
				$allBuyPrice[$c] = floatval($dd->buyOrder[0]->price );
				$allSellPrice[$c] = floatval($dd->sellOrder[0]->price );
			}
			echo  '</br>';
		}
		echo '</br>Succ: '. $succCnt;
		if($succCnt == count($this->Coin_model->coinsName()) ){
			$allBuyPrice['updatetime'] = time();
			$allSellPrice['updatetime'] = time();
			$this->cache->kvdb->save('38_tradeList_updatetime', time());
			$this->cache->kvdb->save('38_price_buy', $allBuyPrice);
			$this->cache->kvdb->save('38_price_sell', $allSellPrice);
		}
		
	}
	
	public function fetch_allTrade_6time(){
		for( $i = 0; $i < 6; $i++){
			echo "</br>" . (date("y-m-d H:i:s",time())) . "  Step" . $i ;
			$data = $this->fetch_38();
			sleep(10);
		}
	}
	public function fetch_allPrice()
	{
		$ret = $this->fetchURL("http://btc38.com/httpAPI.php");
		if(!is_null($ret) && !is_null($this->my_json_decode($ret))){
			$this->cache->kvdb->save('38_allPrice', $ret, 0);
		}else{
			$ret = null;
		}
		return $ret;
	}
	public function fetch_allPrice_6time()
	{
		for( $i = 0; $i < 6; $i++){
			echo "</br>" . (date("y-m-d H:i:s",time())) . "  Step" . $i ;
			echo $this->fetch_allPrice();
			sleep(10);
		}
	}

	public function fetch_test(){
		$tradeList = 'http://www.btc38.com/trade/getTradeList.php?coinname=LTC';
		$data = $this->fetchURL($tradeList);
		var_dump($data);
		$data = $this->addTimeJson($data);
		var_dump( $data );
		
	}
	public function fetchURL($url)
	{
		$ret = NULL;
		$ch = curl_init();
		$header = "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8";
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.57 Safari/537.36');
		curl_setopt($ch,CURLOPT_HTTPHEADER,array("Host: www.btc38.com"));
	    $content = curl_exec($ch);
	    if(curl_errno($ch))
	    {
	    	// echo curl_error($ch);
	    }
	    else
	    {
	    	// echo $content;
	    	$ret = $content;
	    }
	    	
	    curl_close($ch);

	    return $ret;
	}

	public function test(){
		$this->cache->kvdb->save('aaa','ggg');
		var_dump($this->cache->kvdb->get('aaa'));
		echo 'bad';
	}
	
}
