<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends Admin_Controller{
	function __construct(){
		parent:: __construct();
		
	}

	public function index()
	{
		
		$this->data['subview']='admin/dashboard/index';
		$this->load->view('admin/component/_layout_main',$this->data);
	}

	public function higher()
	{
		$this->data['subview']='admin/dashboard/higher';
		$this->load->view('admin/component/_layout_main',$this->data);

	}

	public function budget()
	{
		$this->data['subview']='admin/dashboard/budget';
		$this->load->view('admin/component/_layout_main',$this->data);

	}

	public function activity()
	{
		$this->data['subview']='admin/dashboard/activity';
		$this->load->view('admin/component/_layout_main',$this->data);

	}


	
}