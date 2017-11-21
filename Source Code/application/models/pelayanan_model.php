<?php 

/**
* 
*/
class pelayanan_model extends CI_Model
{
	public $nama_table 	= 'mahasiswa';
	public $nim 		= 'nim';
	public $order		= 'ASC';

	public $nama_tabel1	= 'pengurus';
	public $nim1 		= 'nim';
	public $order1		= 'ASC';

	public $nama_tabel2	= 'aspirasi';
	public $id2			= 'id_aspirasi';
	public $order2		= 'ASC';

	public $nama_tabel3	= 'solusi';
	public $id3			= 'id_solusi';
	public $nim3      	= 'nim';
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

public function ambil_data_nim($a)
	{
		return $this->db->query("select nim , nama, prodi from mahasiswa where nim =".$a)->row();
	}

public function ambil_data_tabel_aspirasi($nim)
	{
		$this->db->where($this->nim,$nim);
		return $this->db->get($this->nama_tabel2)->result();
	}
public function ambil_data_tabel_solusi($nim)
	{
		$this->db->where($this->nim3,$nim);
		return $this->db->get($this->nama_tabel3)->result();
	}

function tambah_data_akademik($data,$data1)//data dalam bentuk array
	{
		$this->db->insert($this->nama_tabel3,$data1);
		return $this->db->insert($this->nama_tabel2,$data);
	}
function ambil_data_idaspirasi($id){
	$this->db->where($this->id2, $id);
	return $this->db->insert($this->nama_tabel2)->row();
}

}

 ?>