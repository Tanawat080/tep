<?php 
class service extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();

      
    }public function servicePage()
	{
		$this->load->view("navbar");
		$this->load->view("service/servicePage");
		$this->load->view("footer");
	}public function eBusiness()
	{
		$this->load->view("navbar");
		$this->load->view("service/eBusiness");
		$this->load->view("footer");
	}
	public function eShop()
	{
		$this->load->view("navbar");
		$this->load->view("service/eShop");
		$this->load->view("footer");
	}
	public function eBooking()
	{
		$this->load->view("navbar");
		$this->load->view("service/eBooking");
		$this->load->view("footer");
	}
	public function ePayment()
	{
		$this->load->view("navbar");
		$this->load->view("service/ePayment");
		$this->load->view("footer");
	}
	public function eCart()
	{
		$this->load->view("navbar");
		$this->load->view("service/eCart");
		$this->load->view("footer");
	}
	public function eCharity()
	{
		$this->load->view("navbar");
		$this->load->view("service/eCharity");
		$this->load->view("footer");
	}public function eBookingPlus()
	{
		$this->load->view("navbar");
		$this->load->view("service/eBookingPlus");
		$this->load->view("footer");
	}

}
?>