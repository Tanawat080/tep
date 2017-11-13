<?php
class contactUs extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('url');

    }public function contactUsPage()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->lang->load('navbar',$lang);
		$this->lang->load('contactUs/contactUs',$lang);
		$this->load->view("navbar");
		$this->load->view("contactUs/contactUsPage");
		$this->load->view("footer");
	}
}
?>
