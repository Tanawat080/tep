<?php 
class MY_Controller extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
        }
        public function changeLang($type)
        {
        	$this->session->set_userdata('lang',$type);
			$url= $_SERVER['HTTP_REFERER'];
			redirect($url,"refresh");

            $lang=$this->session->userdata('lang')==null?"thailand":$this->session->userdata('lang');
			$this->lang->load($lang,$lang);   
        }
}
?>