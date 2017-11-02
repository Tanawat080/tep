<?php 
class service extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();

      
    }public function servicePage()
	{

		
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("service/servicePage");
		$this->load->view("footer");
	}public function eBusiness()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("service/eBusiness");
		$this->load->view("footer");
	}
	public function eShop()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("service/eShop");
		$this->load->view("footer");
	}
	public function eBooking()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("service/eBooking");
		$this->load->view("footer");
	}
	public function ePayment()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("service/ePayment");
		$this->load->view("footer");
	}
	public function eCart()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("service/eCart");
		$this->load->view("footer");
	}
	public function eCharity()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("service/eCharity");
		$this->load->view("footer");
	}public function eBookingPlus()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("service/eBookingPlus");
		$this->load->view("footer");
	}public function comparePackage()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("service/comparePackage");
		$this->load->view("footer");
	}

}
?>