<?php 
class shoppingmall extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('url');
      
    }public function regisShoppingmall()
	{
		$this->load->view("navbar");
		$this->load->view("shoppingmall/regisShoppingmall");
		$this->load->view("footer");
	}
}
?>