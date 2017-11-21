<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('Login_admin_model');
    }

    public function index()
    {
		if($this->session->userdata('logined') == true)
		{
			redirect('home');
		}
		
		if(!$this->input->post())
		{
			$this->load->view('login_awal');
		}
		else
		{
			$cek_login=$this->Login_model->cek_login(
				$this->input->post('nim')
			);
			$cek_login1=$this->Login_admin_model->cek_login(
				$this->input->post('nim')
			);
			
			if(!empty($cek_login))
			{
				$this->session->set_userdata('nim',$cek_login->nim);				
				
				$this->session->set_userdata('logined', true);
				
				redirect("home");//diarahkan
			}

			else if(!empty($cek_login1))
			{
				
				$this->session->set_userdata('nama_pengurus',$cek_login1->nama_pengurus);
				$this->session->set_userdata('logined', true);
				
				redirect("admin/Home");//diarahkan
			}
		
			
			else 
			{
				redirect("/");
			}
		}
        
    } 
	
	public function logout()
    {
		$this->session->unset_userdata('logined');
		redirect("/");
    } 
}


