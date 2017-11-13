<?php
class shoppingmall extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('url');

    }public function regisShoppingmall()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->lang->load('navbar',$lang);
		$this->lang->load('shoppingMall/regisShoppingmall',$lang);
		$this->load->view("navbar");
		$this->load->view("shoppingmall/regisShoppingmall");
		$this->load->view("footer");
	}public function regisShoppingmall2()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->lang->load('navbar',$lang);
		$this->lang->load('shoppingMall/regisShoppingmall2',$lang);
		$this->load->view("navbar");
		$this->load->view("shoppingmall/regisShoppingmall2");
		$this->load->view("footer");
	}
}
?>
