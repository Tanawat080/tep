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
		$this->lang->load('navbar',$lang);
		$this->lang->load('homepage',$lang);
		$this->load->view("navbar");
		$this->load->view("header");
		$this->load->view("homepage");
		$this->load->view("footer");
	}public function whyThaiepay()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->lang->load('navbar',$lang);
		$this->lang->load('whyThaiepay',$lang);
		$this->load->view("navbar");
		$this->load->view("whyThaiepay");
		$this->load->view("footer");
	}
	public function securities()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->lang->load('navbar',$lang);
		$this->lang->load('securities_lang',$lang);
		$this->load->view("navbar");
		$this->load->view("securities");
		$this->load->view("footer");
	}public function news()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->lang->load('navbar',$lang);
		$this->lang->load('news',$lang);
		$this->load->view("navbar");
		$this->load->view("news");
		$this->load->view("footer");
	}public function changeLang($type){
		$this->session->set_userdata('lang',$type);
		$url= $_SERVER['HTTP_REFERER'];
		redirect($url,"refresh");
	}

}
?>
