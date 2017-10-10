<?php 
class merchantList extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('url');
      
    }public function merchantListPage()
	{
		$this->load->view("navbar");
		$this->load->view("merchantList/merchantListPage");
		$this->load->view("footer");
	}
}
?>