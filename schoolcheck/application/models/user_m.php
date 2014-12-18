<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class User_M extends MY_Model{
	protected $_table_name='user';
	protected $_order_by='name';
	protected $_primary_key='user_id';
	protected $_primary_filter='intval';
	
	public $rules_admin=array(
		'email' =>array(
		'field' =>'email',
		'label'	=> 'Email',
		
		'rules'	=>'trim|required|valid_email|xss_clean|callback__unique_email'
		),
		'name' =>array(
		'field' =>'name',
		'label'	=> 'Name',
		'rules'	=>'trim|required|xss_clean'
		),
		
		
		'password' => array(
			'field' =>'password',
			'label' =>'Password',
			'rules' =>'trim|matches[password_confirm]'
			),
		'password_confirm' => array(
			'field' =>'password_confirm',
			'label' =>'Confirm Password',
			'rules' =>'trim|matches[password]'
			)
		);

public $rules=array(
		'email' =>array(
		'field' =>'email',
		'label'	=> 'Email',
		'rules'	=>'trim|required|valid_email|xss_clean'
		),
		
		'password' => array(
			'field' =>'password',
			'label' =>'Password',
			'rules' =>'trim|required'
			)
		);

	public function __construct()
	{
		parent:: __construct();
	}


	public function login()
	{
		$user =$this->get_by(array(
			'email' =>$this->input->post('email'),
			'password'=>$this->hash($this->input->post('password')),
			),TRUE);

		if(count($user)){
			//log in user
			$data =array(
				'name' =>$user->name,
				'email' =>$user->email,
				'id'	=>$user->user_id,
				'loggedin'=>TRUE,

				);
			$this->session->set_userdata($data);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
	}

	public function loggedin()
	{
		return (bool) $this->session->userdata('loggedin');
	}


	public function hash($string)
	{
		return hash('sha512',$string.config_item('encryption_key'));
	}

	

	public function get_new()
	{
		$user = new stdClass();
		$user->name='';
		$user->email='';
		$user->password='';
		return $user;
	}
	}