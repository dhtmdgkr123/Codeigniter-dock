<?php
if(! class_exists('Login')) {
	defined('BASEPATH') or exit('No direct script access allowed');
	class Login extends CI_Controller
	{
		/**
		 * Index Page for this controller.
		 *
		 * Maps to the following URL
		 * 		http://example.com/index.php/Login
		 *	- or -
		* 		http://example.com/index.php/Login/index
		*	- or -
		* Since this controller is set as the default controller in
		* config/routes.php, it's displayed at http://example.com/
		*
		* So any other public methods not prefixed with an underscore will
		* map to /index.php/Login/<method_name>
		* @see https://codeigniter.com/user_guide/general/urls.html
		*/
		public function __construct()
		{
			parent::__construct();
		}
		public function index() : void 
		{
			if ($this->file->checkView('Login/head', 'Login/body', 'Login/footer')) {
				$this->load->view('Login/head');
				$this->load->view('Login/body');
				$this->load->view('Login/footer');
			} else {
				show_404();
			}
		}
	}
}