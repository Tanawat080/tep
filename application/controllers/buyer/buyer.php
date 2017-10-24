<?php 
class buyer extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();

      
    }public function loginBuyer()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("buyer/loginBuyer");
		$this->load->view("footer");
	}
	public function checkOrders()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("buyer/checkOrders");
		$this->load->view("footer");
	}
	public function forgotPassword()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("buyer/forgotPassword");
		$this->load->view("footer");
	}public function regisBuyer()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("buyer/regisBuyer");
		$this->load->view("footer");
	}public function buyerInfo()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("buyer/buyerInfo");
		$this->load->view("footer");
	}
}
?>