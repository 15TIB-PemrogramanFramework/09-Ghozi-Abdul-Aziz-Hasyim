<?php 

class admin_model extends CI_Model
{
	public $nama_tabel	= 'pengurus';
	public $nim 		= 'nim';
	public $order		= 'ASC';

	public $nama_tabel2	= 'solusi';
	public $id2			= 'id_solusi';
	public $aspirasi    = 'aspirasi';
	public $order2		= 'ASC';

	public $nama_tabel3	= 'aspirasi';
	public $id3			= 'id_aspirasi';
	public $order3		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

public function ambil_data_admin($nim)
	{
		$this->db->query("select nama from pengurus where nim =".$nim)->row();
	}	
public function ambil_data()
	{
		$this->db->order_by($this->id3, $this->order3);
		return $this->db->get($this->nama_tabel3)->result();
	}
public function ambil_data_solusi()
	{
		$this->db->order_by($this->id2, $this->order2);
		return $this->db->get($this->nama_tabel2)->result();
	}	
	public function update_data($data,$id)
	{

		$this->db->where($this->id2,$id);
 		return $this->db->update($this->nama_tabel2,$data);
 	}
public function update_status($data1,$id)
	{
		
		$this->db->where('id_aspirasi',$id);
 		return $this->db->update($this->nama_tabel3,$data1);
 	}

function ambil_data_aspirasi_id($id){
 		$this->db->where($this->id3, $id);
 		return $this->db->get($this->nama_tabel3)->row();

}
 	public function ambil_data_solusi_aspirasi($aspirasi){
 		
 		$this->db->where($this->aspirasi, $aspirasi);
 		return $this->db->get($this->nama_tabel2)->row();
 	}
		
}
 ?>