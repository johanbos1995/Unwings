<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class frontend extends CI_Controller {

	
	public function index()
	{
                $this->load->view('header/header');
		$this->load->view('frontend/home');
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