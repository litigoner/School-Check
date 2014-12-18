<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hello extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		$this->load->model('hello_m');
		$this->data['mini_title']="Dashboard";

		
	}
	public function index()
	{
		echo "This is Manish Pandey";
	}
}
