<?php 
class package extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('url');
      
    }public function pricePackage()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("package/pricePackage");
		$this->load->view("footer");
	}
}
?>