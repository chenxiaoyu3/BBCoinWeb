<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('head');
		$this->load->view('index');
		$this->load->view('foot');
	}

	public function downloadAPK(){
		$this->load->helper('download');
		$name = 'BBKanPan_beta_0.1.apk';
		$data = file_get_contents(asset_url().'bin/v0.1.apk');
		force_download($name, $data);
	}
    
    public function test(){
        $this->load->view('head');
        $this->load->view('ran');
        $this->load->view('foot');
    }
	
	
	//修改日志和代码示例
	public function log(){
		$this->load->view('welcome_log');
	}
		

		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */