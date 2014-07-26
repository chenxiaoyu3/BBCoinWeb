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

	public function download(){
		$this->load->helper('download');
		$name = '学而思邮件发送助手.rar';
		$data = file_get_contents(asset_url().'bin/Mail.rar');
		force_download($name, $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */