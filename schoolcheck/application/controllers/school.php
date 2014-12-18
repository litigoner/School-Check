<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class School extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('school_m');
		$this->data['mini_title']="Dashboard";

		
	}
	
	public function index()
	{
		$this->load->view('admin/dashboard/index');

	}
}
