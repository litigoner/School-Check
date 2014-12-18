<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller{
	public $data=array();

	public function __construct(){

		parent:: __construct();
		
		
		$this->data['hello']="my name is manish";
		$this->data['error']="errors";
		//$this->data['site_name']= config_item('site_name');

	} 

		
		
	

}