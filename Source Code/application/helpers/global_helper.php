<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('pelayanan/layanan').'"><i class="fa fa-list fa-fw"></i> First Page</a>
	</li><li>
		<a href="'.site_url('pelayanan/form_akademik').'"><i class="fa fa-list fa-fw"></i> Akademik</a>
	</li><li>
		<a href="'.site_url('pelayanan/form_blm').'"><i class="fa fa-list fa-fw"></i> Badan Legislatif Mahasiswa</a>
	</li><li>
		<a href="'.site_url('pelayanan/form_hima').'"><i class="fa fa-list fa-fw"></i>  Himpunan Mahasiswa</a>
	</li><li>
		<a href="'.site_url('pelayanan/form_ukm').'"><i class="fa fa-list fa-fw"></i>  Unit Kegiatan Mahasiswa</a>
	</li><li>
		<a href="'.site_url('pelayanan/form_lainnya').'"><i class="fa fa-list fa-fw"></i> Lainya</a>
	</li>
	</li><li>
		<a href="'.site_url('pelayanan/aspirasi').'"><i class="fa fa-list fa-fw"></i>  Aspirasi Anda</a>
	</li>';
	}

	function bea_sidemenu()
	{
		return '<li>
		<a href="'.site_url('pelayanan/beasiswa').'"><i class="fa fa-list fa-fw"></i> First Page</a>
	</li><li>
		<a href="'.site_url('pelayanan/form_beasiswa').'"><i class="fa fa-list fa-fw"></i> Layanan Beasiswa</a>
	</li><li>
		<a href="'.site_url('pelayanan/beasiswa_hasil').'"><i class="fa fa-list fa-fw"></i> Result</a>
	</li>';
	}

	function saran_sidemenu()
	{
		return '<li>
		<a href="'.site_url('pelayanan/form_kritik_saran').'"><i class="fa fa-list fa-fw"></i> Kritik dan Saran</a>
	</li>';
	}

function admin_sidemenu()
	{
		return '<li>
		<a href="'.site_url('admin/Home/index').'"><i class="fa fa-list fa-fw"></i> Answer</a>
	</li><li>
		<a href="'.site_url('admin/Home/result').'"><i class="fa fa-list fa-fw"></i> Result</a>
	</li>';
	}