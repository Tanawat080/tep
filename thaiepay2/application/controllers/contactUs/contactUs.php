<?php 
class contactUs extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('url');
      
    }public function contactUsPage()
	{
		$this->load->view("navbar");
		$this->load->view("contactUs/contactUsPage");
		$this->load->view("footer");
	}
}
?>