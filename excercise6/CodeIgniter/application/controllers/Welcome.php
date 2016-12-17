<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('index');

	}
		public function Register()
	{
		$this->load->view('Register');

	}
		public function More()
	{
		$this->load->view('more');

	}
}


