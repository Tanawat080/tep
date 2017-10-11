<?php 
class aboutCompany extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('url');
      
    }public function aboutUsPage()
	{
		$this->load->view("navbar");
		$this->load->view("aboutCompany/aboutUsPage");
		$this->load->view("footer");
	}
	public function themePage()
	{
		$this->load->view("navbar");
		$this->load->view("aboutCompany/themePage");
		$this->load->view("footer");
	}public function conditionPage()
	{
		$this->load->view("navbar");
		$this->load->view("aboutCompany/conditionPage");
		$this->load->view("footer");
	}public function policyPage()
	{
		$this->load->view("navbar");
		$this->load->view("aboutCompany/policyPage");
		$this->load->view("footer");
	}
}
?>