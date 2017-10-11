<?php 
class merchant extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('url');
      
    }public function payment()
	{
		$this->load->view("navbar");
		$this->load->view("merchant/payment");
		$this->load->view("footer");
	}
	public function adminSystem()
	{
		$this->load->view("navbar");
		$this->load->view("merchant/adminSystem");
		$this->load->view("footer");
	}
	public function download()
	{
		$this->load->view("navbar");
		$this->load->view("merchant/download");
		$this->load->view("footer");
	}
	public function forgotPassword()
	{
		$this->load->view("navbar");
		$this->load->view("merchant/forgotPassword");
		$this->load->view("footer");
	}
}
?>