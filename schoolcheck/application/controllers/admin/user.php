<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends Admin_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('user_m');

		
	}

	public function index()
	{
		//Fetch all users
		$this->data['users']=$this->user_m->get();

		//Load view
		$this->data['subview']='admin/user/index';
		$this->load->view('admin/component/_layout_main',$this->data);
	}

	/*** Edit and update function ***/
	public function edit($id=NULL)
	{
		$id=$this->uri->segment(4);

		//Fetch a user or set a new one
		if($id){
			$this->data['user']=$this->user_m->get($id);
			count($this->data['user'])||$this->data['errors'][]='User could not be found';
		}else{
			$this->data['user']=$this->user_m->get_new();

		}

		//Set up the form
		$rules_admin= $this->user_m->rules_admin;
		$this->form_validation->set_rules($rules_admin);
		//$id|| $rules_admin['password'].='|required'; 
		//Process the form
		if($this->form_validation->run()==TRUE){
		
		
			$data= $this->user_m->array_from_post(array('name','email','password'));
			$data['password']=$this->user_m->hash($data['password']);
			$this->user_m->save($data,$id);
			redirect('admin/user');
			
		}


		//Load the view
		$this->data['users']=$this->user_m->get($id);
		$this->data['subview']='admin/user/edit';
		$this->load->view('admin/component/_layout_main',$this->data);
	}
	/*** End of edit and update function ***/

	public function login()
	{
		//Redirect the user if already login
		$dashboard='admin/dashboard';
		$this->user_m->loggedin() == FALSE || redirect($dashboard);

		//Process the form 
		$rules= $this->user_m->rules;
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run()==TRUE){
			//we can login and redirect
			if($this->user_m->login()==TRUE){
				redirect($dashboard);
			}else{
				$this->session->set_flashdata('error','That email/password combination does not exist');
				redirect('admin/user/login','refresh');
			}
			
		}

		//Load the view
		$this->data['subview']='admin/user/login';
		$this->load->view('admin/component/_layout_model',$this->data);
	}

	public function delete()
	{
		$id=$this->uri->segment(4);
		$this->user_m->delete($id);
		redirect('admin/user');
	}


	/*** for logout ***/
	public function logout()
	{
		$this->user_m->logout();
		redirect('admin/user/login');
	}
	/*** End function for logout ***/


	 function _unique_email($str)
	{
		$id=$this->uri->segment(4);
		$this->db->where('email',$this->input->post('email'));
		!$id||$this->db->where('user_id ! =', $id);
		$user=$this->user_m->get();
		if(count($user)){
			$this->form_validation->set_message('_unique_email', 'The %s field should be unique ');
			return FALSE;
		}

			return TRUE;
	}

	}


	
