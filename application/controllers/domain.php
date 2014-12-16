<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Domain extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/domain
	 *	- or -  
	 * 		http://example.com/index.php/domain/index
	 *	- or -
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form', 'url'));		
		$this->load->library('form_validation');
		
		/* Note: Declaring form_validation must always define some rules..
		 * Else it will return false*/
		$this->load->model('dbase');
		$this->load->model('user');
		
	}
	/*
	 * Loads the basic view page(Registration form)...
	 */
	
	public function index()
	{
		$this->load->view('index');
	}
	
	public function register()
	{
		
		$this->form_validation->set_rules('dname', 'Domain Name', 'required|is_unique[domain.Domain_name]');
		$this->form_validation->set_rules('rdate', 'Registration Date', 'required');
		$this->form_validation->set_rules('edate', 'Expiry Date', 'required');
		$this->form_validation->set_rules('uname', 'Username', 'required|is_unique[domain.User_name]|max_length[25]');
		$this->form_validation->set_rules('pwd', 'Password', 'required|min_length[6]|max_length[25]');
		$this->form_validation->set_rules('confpwd', 'Confirm Password', 'required|matches[pwd]');
		
		$this->form_validation->set_message('is_unique', 'The %s is already taken.');
		$this->form_validation->set_message('matches', 'Passwords do not match');
		
		
				
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('index');
		}
		else
		{
			
			// Setting Values For Tabel Columns
			$database = array(
			'Domain_name' => $this->input->post('dname'),
			'Register_date' => $this->input->post('rdate'),
			'Expire_date' => $this->input->post('edate'),
			'Client_name' => $this->input->post('cname'),
			'User_name' => $this->input->post('uname'),
			'Password' => $this->input->post('pwd')
			);
			// Transfering Data To Model
			$this->dbase->form_insert($database);
			// Loading View
			$this->load->view('formsuccess');
		}
	}
	
	public function domainList ()
	{
		
		$data['records'] = $this->dbase->form_retrieve();
		$this->load->view("getlist", $data);
	}
	
	public function login()
	{
		$this->load->view('loginform');
	}
	
	public function checklogin()
	{
		/*$this->form_validation->set_rules('uname','Username','callback_check_database');
		$this->form_validation->set_rules('pwd', 'Password', 'required');*/
		
		/*if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('loginform');
		}
		else
			$this->load->view('main');*/
		
		/*function check_database()
		{*/
			$username=$this->input->post('uname');
			$password=$this->input->post('pwd');
			
			$data =$this->user->login($username, $password);
			if($data)
			{
				$data['record'] =$this->user->login($username, $password);
				$this->load->view("main",$data);
			}
			else
			{
				echo "Invalid!";
				$this->load->view('loginform');
			}
			
			//}
		
	}
	
	
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */