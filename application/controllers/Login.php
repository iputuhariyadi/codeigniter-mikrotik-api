<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();				
	}
	
	public function index()
	{		
		if ($this->session->userdata('login') == TRUE)
		{
			redirect('hotspot');
		}else{
			$data['form_action'] = site_url('login/process_login');
			$data['container'] = 'login/login_form';
			$this->load->view('template', $data);	
		}				
	}
	
	public function process_login(){
		$this->form_validation->set_rules('hostname', 'Hostname', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');		
		
		if ($this->form_validation->run() == TRUE)
		{
			$hostname = $this->input->post('hostname');
			$username = $this->input->post('username');
			$password = $this->input->post('password');								
			
			if ($this->routerosapi->connect($hostname, $username, $password))
			{				
				$data = array('hostname_mikrotik'=> $hostname, 'username_mikrotik' => $username, 'password_mikrotik' => $password, 'login' => TRUE);
				$this->session->set_userdata($data);
				redirect('hotspot');
			}
			else
			{
				$this->session->set_flashdata('message', 'Login gagal. Pastikan hostname, username dan password yang Anda masukkan benar!');
				redirect('login');
			}			
		}
		else
		{
			$data['form_action'] = site_url('login/process_login');
			$data['container'] = 'login/login_form';			
			$this->load->view('template', $data);
		}
	}
	
	public function logout(){
		$this->session->unset_userdata(array('hostname_mikrotik' => '', 'username_mikrotik'=>'', 'password_mikrotik' => '','login' => FALSE));
		$this->session->sess_destroy();
		redirect('login', 'refresh');
	}
}
