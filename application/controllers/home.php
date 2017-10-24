<?php 
class home extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();
      
    }public function index()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);

		$this->load->view("navbar");
		$this->load->view("header");
		$this->load->view("homepage");
		$this->load->view("footer");
	}public function whyThaiepay()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);

		$this->load->view("navbar");
		$this->load->view("whyThaiepay");
		$this->load->view("footer");
	}
	
	public function securities()
	{
		$lang=$this->session->userdata('lang')==null?"english":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("securities");
		$this->load->view("footer");
	}public function changeLang($type){
		$this->session->set_userdata('lang',$type);
		$url= $_SERVER['HTTP_REFERER'];
		redirect($url,"refresh");
	}

}
?>