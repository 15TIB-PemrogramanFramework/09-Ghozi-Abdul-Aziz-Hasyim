<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_admin_model');
       
    }

    public function index()
    {
		if($this->session->userdata('logined') == true)
		{
			redirect('admin/Home');
		}
		
		if(!$this->input->post())
		{
			$this->load->view('admin/login_admin');
		}
		else
		{
			$cek_login=$this->Login_admin_model->cek_login(
				$this->input->post('nim')
			);
			
			if(!empty($cek_login))
			{
				$this->session->set_userdata('nim',$cek_login->nim);
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


/* End of file Workflows.php */
/* Location: ./application/controllers/Workflows.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-04-15 00:43:10 */
/* http://harviacode.com */