<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function information_technology()
	{
		$this->load->view('information-technology');
	}
}
