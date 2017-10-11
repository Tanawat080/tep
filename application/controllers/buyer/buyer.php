<?php 
class buyer extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();

      
    }public function loginBuyer()
	{
		$this->load->view("navbar");
		$this->load->view("buyer/loginBuyer");
		$this->load->view("footer");
	}
	public function checkOrders()
	{
		$this->load->view("navbar");
		$this->load->view("buyer/checkOrders");
		$this->load->view("footer");
	}
	public function forgotPassword()
	{
		$this->load->view("navbar");
		$this->load->view("buyer/forgotPassword");
		$this->load->view("footer");
	}public function regisBuyer()
	{
		$this->load->view("navbar");
		$this->load->view("buyer/regisBuyer");
		$this->load->view("footer");
	}

}
?>