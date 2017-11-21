<?php 
/**
* 
*/
class Login_admin_model extends CI_Model 
{
	public $nama_table ='pengurus';
	public $nim		  ='nim';
	public $order	  ='ASC';

function __construct()  
	{
		parent::__construct();
	}

function cek_login($nim)
	{
		$this->db->where('nim',$nim);
		return $this->db->get($this->nama_table)->row();	
	}
function ambil_data()
{
	$this->db->order_by($this->nim,$this->nim);
	return $this->db->get($this->nama_table)->result();
}

function ambil_data_id($nim)
{
	$this->db->where($this->nim,$nim);
	return $this->db->get($this->nama_table)->result();
}

}

?>


