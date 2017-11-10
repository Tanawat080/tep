<?php
class aboutCompany extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('url');

    }public function aboutUsPage()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->lang->load('navbar',$lang);
		$this->lang->load('aboutUs',$lang);
		$this->load->view("navbar");
		$this->load->view("aboutCompany/aboutUsPage");
		$this->load->view("footer");
	}
	public function themePage()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->lang->load('navbar',$lang);
		$this->lang->load('theme',$lang);
		$this->load->view("navbar");
		$this->load->view("aboutCompany/themePage");
		$this->load->view("footer");
	}public function conditionPage()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->lang->load('navbar',$lang);
		$this->lang->load('conditions',$lang);
		$this->load->view("navbar");
		$this->load->view("aboutCompany/conditionPage");
		$this->load->view("footer");
	}public function policyPage()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->lang->load('navbar',$lang);
		$this->lang->load('policy',$lang);
		$this->load->view("navbar");
		$this->load->view("aboutCompany/policyPage");
		$this->load->view("footer");
	}
}
?>
