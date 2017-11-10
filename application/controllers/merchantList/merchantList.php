<?php
class merchantList extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('url');

    }public function merchantListPage()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->lang->load('navbar',$lang);
		$this->lang->load('merchantListPage',$lang);
		$this->load->view("navbar");
		$this->load->view("merchantList/merchantListPage");
		$this->load->view("footer");
	}
}
?>
