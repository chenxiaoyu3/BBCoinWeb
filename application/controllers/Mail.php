<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller {

	var $lastVersionNum;
	var $lastVersionStr;
	var $lastVersionDate = "Wed, 12 Mar 2014 0:0:0 +0000";
	var $lastVersionSize = 123445;
	public function index()
	{
		$this->load->view('head');
		$this->load->view('mail');
		$this->load->view('foot');
	}

	public function appcast()
	{
		$this->lastVersionNum = 1;
	    $this->lastVersionStr = "1.0";
	    $this->lastVersionDate = "Wed, 12 Mar 2014 0:0:0 +0000";
		$this->lastVersionSize = 123445;
		 $xml = '<?xml version="1.0" encoding="utf-8"?>
		<rss version="2.0" xmlns:sparkle="http://www.andymatuschak.org/xml-namespaces/sparkle"  xmlns:dc="http://purl.org/dc/elements/1.1/">
			<channel>
				<title>邮件发送助手</title>
				<link>http://ggcoin.sinaapp.com/Mail</link>
				<description></description>
				<language>zh</language>

				<item>
					<title>$ITEM_TITLE</title>
					<description><![CDATA[ $DESCRIPTION ]]></description>
					<pubDate>$DATE</pubDate>
					<enclosure url="$URL" 
							sparkle:shortVersionString="$VERSION_STR" 
							sparkle:version="$VERSION_NUM" 
							length="$FILE_SIZE" 
							type="application/octet-stream" 
							/>
				</item>
			</channel>
		</rss>';

		$xml = str_replace('$ITEM_TITLE', "版本".$this->lastVersionStr."更新", $xml);
		$xml = str_replace('$DATE', $this->lastVersionDate, $xml);
		$xml = str_replace('$VERSION_NUM', $this->lastVersionNum, $xml);
		$xml = str_replace('$VERSION_STR', $this->lastVersionStr, $xml);
		$xml = str_replace('$FILE_SIZE', $this->lastVersionSize, $xml);

		echo $xml;
	}

	public function download(){
		$this->load->helper('download');
		$name = '学而思邮件发送助手.rar';
		$data = file_get_contents(asset_url().'bin/Mail.rar');
		force_download($name, $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */