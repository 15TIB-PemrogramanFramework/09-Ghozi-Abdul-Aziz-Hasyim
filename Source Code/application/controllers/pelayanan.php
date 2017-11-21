<?php 
/**
* 
*/
class pelayanan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pelayanan_model');
	}

public function aspirasi()
	{
		$a= $this->session->userdata('nim');
		$data['aspirasi']=$this->pelayanan_model->ambil_data_tabel_aspirasi($a);
		$data['solusi']=$this->pelayanan_model->ambil_data_tabel_solusi($a);
		$this->load->view('aspirasi',$data);
	}


/*------------------------------------------We Care We Solve----------------------------------------------------*/
public function layanan()
	{
		$this->load->view('pelayanan');
	}
public function form_akademik()
	{
		$a= $this->session->userdata('nim');
		$akademi_form=$this->pelayanan_model->ambil_data_nim($a);

		$data=array(
			'aksi_tambah_akademik' => site_url('pelayanan/aksi_tambah_akademik'),
			'jns_masalah' => set_value('jns_masalah'),
			'aspirasi' => set_value('aspirasi'),
			'nim' => set_value('nim',$akademi_form->nim),
			'hp' => set_value('hp'),
			'alamat' => set_value('alamat'),
			'nama'=> set_value('nama',$akademi_form->nama),
			'prodi'=> set_value('prodi',$akademi_form->prodi),
			'button' => 'Kirim' 
		);
		$this->load->view('form_akademik', $data);
	}
	function aksi_tambah_akademik()
	{
		$data=array(
			'jns_masalah' => $this->input->post('jns_masalah'),
			'aspirasi' => $this->input->post('aspirasi'),
			'hp' => $this->input->post('hp'),
			'nim' => $this->input->post('nim'),
			'status' => 'Proses',
			'alamat' => $this->input->post('alamat')
			);
		$data1=array(
			'jns_masalah' => $this->input->post('jns_masalah'),
			'aspirasi' => $this->input->post('aspirasi'),
			'status' => 'Proses',
			'nim' => $this->input->post('nim')
			);
		$this->pelayanan_model->tambah_data_akademik($data,$data1);
		redirect(site_url('pelayanan/aspirasi'));
	}
public function form_blm()
	{
		$a= $this->session->userdata('nim');
		$akademi_form=$this->pelayanan_model->ambil_data_nim($a);

		$data=array(
			'aksi_tambah_akademik' => site_url('pelayanan/aksi_tambah_blm'),
			'jns_masalah' => set_value('jns_masalah'),
			'aspirasi' => set_value('aspirasi'),
			'nim' => set_value('nim',$akademi_form->nim),
			'hp' => set_value('hp'),
			'alamat' => set_value('alamat'),
			'nama'=> set_value('nama',$akademi_form->nama),
			'prodi'=> set_value('prodi',$akademi_form->prodi),
			'button' => 'Kirim' 
		);
		$this->load->view('form_blm', $data);
	}
	function aksi_tambah_blm()
	{
		$data=array(

			'jns_masalah' => $this->input->post('jns_masalah'),
			'aspirasi' => $this->input->post('aspirasi'),
			'hp' => $this->input->post('hp'),
			'nim' => $this->input->post('nim'),
			'status' => 'Proses',
			'alamat' => $this->input->post('alamat')
			);
		$data1=array(
			'jns_masalah' => $this->input->post('jns_masalah'),
			'aspirasi' => $this->input->post('aspirasi'),
			'status' => 'Proses',
			'nim' => $this->input->post('nim')
			);
		$this->pelayanan_model->tambah_data_akademik($data,$data1);
		redirect(site_url('pelayanan/aspirasi'));
	}
public function form_hima()
	{
		$a= $this->session->userdata('nim');
		$akademi_form=$this->pelayanan_model->ambil_data_nim($a);

		$data=array(
			'aksi_tambah_akademik' => site_url('pelayanan/aksi_tambah_hima'),
			'jns_masalah' => set_value('jns_masalah'),
			'aspirasi' => set_value('aspirasi'),
			'nim' => set_value('nim',$akademi_form->nim),
			'hp' => set_value('hp'),
			'alamat' => set_value('alamat'),
			'nama'=> set_value('nama',$akademi_form->nama),
			'prodi'=> set_value('prodi',$akademi_form->prodi),
			'button' => 'Kirim' 
		);
		$this->load->view('form_hima', $data);
	}
	function aksi_tambah_hima()
	{
		$data=array(

			'jns_masalah' => $this->input->post('jns_masalah'),
			'aspirasi' => $this->input->post('aspirasi'),
			'hp' => $this->input->post('hp'),
			'nim' => $this->input->post('nim'),
			'status' => 'Proses',
			'alamat' => $this->input->post('alamat')
			);
		$data1=array(
			'jns_masalah' => $this->input->post('jns_masalah'),
			'aspirasi' => $this->input->post('aspirasi'),
			'status' => 'Proses',
			'nim' => $this->input->post('nim')
			);
		$this->pelayanan_model->tambah_data_akademik($data,$data1);
		redirect(site_url('pelayanan/aspirasi'));
	}
public function form_ukm()
	{
		$a= $this->session->userdata('nim');
		$akademi_form=$this->pelayanan_model->ambil_data_nim($a);

		$data=array(
			'aksi_tambah_akademik' => site_url('pelayanan/aksi_tambah_ukm'),
			'jns_masalah' => set_value('jns_masalah'),
			'aspirasi' => set_value('aspirasi'),
			'nim' => set_value('nim',$akademi_form->nim),
			'hp' => set_value('hp'),
			'alamat' => set_value('alamat'),
			'nama'=> set_value('nama',$akademi_form->nama),
			'prodi'=> set_value('prodi',$akademi_form->prodi),
			'button' => 'Kirim' 
		);
		$this->load->view('form_ukm', $data);
	}
	function aksi_tambah_ukm()
	{
		$data=array(

			'jns_masalah' => $this->input->post('jns_masalah'),
			'aspirasi' => $this->input->post('aspirasi'),
			'hp' => $this->input->post('hp'),
			'status' => 'Proses',
			'nim' => $this->input->post('nim'),
			'alamat' => $this->input->post('alamat')
			);
		$data1=array(
			'jns_masalah' => $this->input->post('jns_masalah'),
			'aspirasi' => $this->input->post('aspirasi'),
			'status' => 'Proses',
			'nim' => $this->input->post('nim')
			);
		$this->pelayanan_model->tambah_data_akademik($data,$data1);
		redirect(site_url('pelayanan/aspirasi'));
	}
public function form_lainnya()
	{
		$a= $this->session->userdata('nim');
		$akademi_form=$this->pelayanan_model->ambil_data_nim($a);

		$data=array(
			'aksi_tambah_akademik' => site_url('pelayanan/aksi_tambah_lainnya'),
			'jns_masalah' => set_value('jns_masalah'),
			'aspirasi' => set_value('aspirasi'),
			'nim' => set_value('nim',$akademi_form->nim),
			'hp' => set_value('hp'),
			'alamat' => set_value('alamat'),
			'nama'=> set_value('nama',$akademi_form->nama),
			'prodi'=> set_value('prodi',$akademi_form->prodi),
			'button' => 'Kirim' 
		);
		$this->load->view('form_lainnya', $data);
	}
	function aksi_tambah_lainnya()
	{
		$data=array(

			'jns_masalah' => $this->input->post('jns_masalah'),
			'aspirasi' => $this->input->post('aspirasi'),
			'hp' => $this->input->post('hp'),
			'nim' => $this->input->post('nim'),
			'status' => 'Proses',
			'alamat' => $this->input->post('alamat')
			);
		$data1=array(
			'jns_masalah' => $this->input->post('jns_masalah'),
			'aspirasi' => $this->input->post('aspirasi'),
			'status' => 'Proses',
			'nim' => $this->input->post('nim')
			);
		$this->pelayanan_model->tambah_data_akademik($data,$data1);
		redirect(site_url('pelayanan/aspirasi'));
	}


/*------------------------------------------You Deserve It----------------------------------------------------*/
public function beasiswa()
	{
		$this->load->view('beasiswa');
	}
public function beasiswa_hasil()
	{
		$a= $this->session->userdata('nim');
		$data['aspirasi']=$this->pelayanan_model->ambil_data_tabel_aspirasi($a);
		$data['solusi']=$this->pelayanan_model->ambil_data_tabel_solusi($a);
		$this->load->view('beasiswa_hasil',$data);
	}
public function form_beasiswa()
	{
		$a= $this->session->userdata('nim');
		$akademi_form=$this->pelayanan_model->ambil_data_nim($a);

		$data=array(
			'aksi_tambah_akademik' => site_url('pelayanan/aksi_tambah_beasiswa'),
			'jns_masalah' => set_value('jns_masalah'),
			'aspirasi' => set_value('aspirasi'),
			'nim' => set_value('nim',$akademi_form->nim),
			'hp' => set_value('hp'),
			'alamat' => set_value('alamat'),
			'nama'=> set_value('nama',$akademi_form->nama),
			'prodi'=> set_value('prodi',$akademi_form->prodi),
			'button' => 'Kirim' 
		);
		$this->load->view('form_beasiswa', $data);
	}
	function aksi_tambah_beasiswa()
	{
		$data=array(

			'jns_masalah' => $this->input->post('jns_masalah'),
			'aspirasi' => $this->input->post('aspirasi'),
			'hp' => $this->input->post('hp'),
			'nim' => $this->input->post('nim'),
			'jns_masalah' => $this->input->post('jns_masalah'),
			'alamat' => $this->input->post('alamat')
			);
		$data1=array(
			'jns_masalah' => $this->input->post('jns_masalah'),
			'aspirasi' => $this->input->post('aspirasi'),
			'nim' => $this->input->post('nim')
			);
		$this->pelayanan_model->tambah_data_akademik($data,$data1);
		redirect(site_url('pelayanan/beasiswa_hasil'));
	}


/*------------------------------------------Apa kabar PCR hari ini?----------------------------------------------------*/
public function kritik_saran()
	{
		$this->load->view('kritik_saran');
	}
public function form_kritik_saran()
	{
		$a= $this->session->userdata('nim');
		$akademi_form=$this->pelayanan_model->ambil_data_nim($a);

		$data=array(
			'aksi_tambah_akademik' => site_url('pelayanan/aksi_tambah_saran'),
			'jns_masalah' => set_value('jns_masalah'),
			'aspirasi' => set_value('aspirasi'),
			'nim' => set_value('nim',$akademi_form->nim),
			'hp' => set_value('hp'),
			'alamat' => set_value('alamat'),
			'nama'=> set_value('nama',$akademi_form->nama),
			'prodi'=> set_value('prodi',$akademi_form->prodi),
			'button' => 'Kirim' 
		);
		$this->load->view('form_kritik_saran', $data);
	}
	function aksi_tambah_saran()
	{
		$data=array(

			'jns_masalah' => $this->input->post('jns_masalah'),
			'aspirasi' => $this->input->post('aspirasi'),
			'hp' => $this->input->post('hp'),
			'nim' => $this->input->post('nim'),
			'jns_masalah' => $this->input->post('jns_masalah'),
			'alamat' => $this->input->post('alamat')
			);
		$data1=array(
			'jns_masalah' => $this->input->post('jns_masalah'),
			'aspirasi' => $this->input->post('aspirasi'),
			'nim' => $this->input->post('nim')
			);
		$this->pelayanan_model->tambah_data_akademik($data,$data1);
		redirect(site_url('pelayanan/kritik_saran'));
	}
}
 ?>