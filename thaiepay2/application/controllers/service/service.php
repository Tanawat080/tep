<?php 
class service extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();

      
    }public function servicePage()
	{
		$this->load->view("navbar");
		$this->load->view("service/servicePage");
		$this->load->view("footer");
	}

}
?>