<?php 
class merchant extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('url');
      
    }public function payment()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("merchant/payment");
		$this->load->view("footer");
	}
	public function adminSystem()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("merchant/adminSystem");
		$this->load->view("footer");
	}
	public function download()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("merchant/download");
		$this->load->view("footer");
	}
	public function forgotPassword()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("merchant/forgotPassword");
		$this->load->view("footer");
	}public function merchantInfo()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("merchant/merchantInfo");
		$this->load->view("footer");
	}
}
?>