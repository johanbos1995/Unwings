<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class backend extends CI_Controller {

	
	public function index()
	{
               $this->load->helper(array('form'));
               $this->load->view('backend/login');
	}
        
        public function contact()
	{
              
                $this->load->view('header/header');
		$this->load->view('frontend/contact');
	}
        
           public function login()
	{
              
                $this->load->view('header/header');
		$this->load->view('frontend/login');
	}
}

/* End of file frontend.php */
/* Location: ./application/controllers/frontend.php */