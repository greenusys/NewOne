<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuperAdmin extends CI_Controller {
	public function index()
	{
		$this->load->view('SuperAdmin/Template/header');
		$this->load->view('SuperAdmin/Home/index');
	}
}
