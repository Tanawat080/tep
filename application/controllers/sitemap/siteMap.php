<?php 
class siteMap extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('url');
      
    }public function siteMapPage()
	{
		$this->load->view("navbar");
		$this->load->view("siteMap/siteMap");
		$this->load->view("footer");
	}
}
?>