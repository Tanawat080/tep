<?php 
class eModules extends CI_Controller {
	    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('url');
      
    }public function regiseModules()
	{
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$this->load->view("navbar");
		$this->load->view("eModule/regiseModules");
		$this->load->view("footer");
	}
	public function index()
	{	
		$lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
		$this->lang->load($lang,$lang);
		$radio_value = $this->input->post('eModules');

		if($radio_value=='ePayment'){

			$this->load->view("navbar");
			$this->load->view("eModule/packageePayment");
			$this->load->view("eModule/formeModule");
			$this->load->view("footer");
		}else if($radio_value=='eBooking'){
			$this->load->view("navbar");
			$this->load->view("eModule/packageeBooking");
			$this->load->view("eModule/formeModule");
			$this->load->view("footer");
		}else if($radio_value=='eCart'){
			$this->load->view("navbar");
			$this->load->view("eModule/packageeCart");
			$this->load->view("eModule/formeModule");
			$this->load->view("footer");
		}
	}
	
	

}
?>