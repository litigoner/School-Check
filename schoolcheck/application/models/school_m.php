<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class School_M extends MY_Model{
	protected $_table_name='school';
	protected $_primary_key='school_id';
	protected $_order_by='name';

public $rules=array(

	'pubdate' =>array(
		'field' =>'pubdate',
		'label'	=> 'Publication date',
		'rules'	=>'trim|required|exact_length[10]|xss_clean'
		),


		'title' =>array(
		'field' =>'title',
		'label'	=> 'Title',
		'rules'	=>'trim|required|max_length[100]|xss_clean'
		),
		
		'slug' => array(
			'field' =>'slug',
			'label' =>'Slug',
					/** callback__unique_slug  need to be maintain***/

			'rules' =>'trim|required|url_title|xss_clean'
			),

		

		'body' => array(
			'field' =>'body',
			'label' =>'Body',
			'rules' =>'trim|required'
			)
		);


	public function get_new()
	{
		$school = new stdClass();
		$school->title='';
		$school->body='';
		$school->slug='';
		$school->pubdate=date('Y-m-d');	
		return $school;	


	}

	public function get_recent($limit=3)
	{
		$limit = (int) $limit;
		$this->db->limit($limit);
		return parent::get();
	}

	
	

	}