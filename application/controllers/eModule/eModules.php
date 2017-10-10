<?php 
class eModules extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('url');
      
    }public function regiseModules()
	{
		$this->load->view("navbar");
		$this->load->view("eModule/regiseModules");
		$this->load->view("footer");
	}
}
?>