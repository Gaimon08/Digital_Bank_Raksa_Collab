<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {



	public function __construct()
	{
		parent::__construct();
		check_not_login();
		// $this->load->model( 'barang_m');
	}

		public function index()
	{
		// check_already_login();
		$this->template->load('template' , 'dashboard');
	}
}
