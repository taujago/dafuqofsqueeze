<?php 
class statistik_penduduk_tahunan extends  op_controller {
 	function __construct() {
		parent::__construct();
 
		$this->load->model("statpt","dm");
		$this->load->model("core_model","cm");
		$this->load->model("add_model","add");
		$this->load->model("add_model","am");
		$this->load->helper("tanggal");
		 
		 
	}


function index()
    {
 
    $data['title'] = "Laporan Penduduk Per Tahun ";	
    $data['header'] = "Laporan Penduduk Per Tahun ";
	$data['controller'] = "statistik_penduduk_tahunan";
  

 
 
   	$content = $this->load->view("statistik_penduduk_tahunan_view",$data,true);
	$this->set_title("Laporan Penduduk Per Tahun ");
	$this->set_content($content);
	$this->render();
    }
  
 
 function cetak($tahun) {
 	 
	
 	//$this->cm->data_desa();

	$data['bulan'] = $bulan;
	$data['bulan_ini'] = $this->dm->get_penduduk($bulan);
	$data['lahir'] = $this->dm->get_lahir($bulan);
	$data['mati'] = $this->dm->get_mati($bulan);
	$data['datang'] = $this->dm->get_datang($bulan);
	$data['pindah'] = $this->dm->get_pindah($bulan);
	$data['sekarang'] = $this->dm->get_sekarang($bulan);
	
	/*// pendatang 
	$data['pendatang_antar_desa'] = $this->dm->pendatang_antar_desa($bulan);
	$data['pendatang_antar_kecamatan'] = $this->dm->pendatang_antar_kecamatan($bulan); 
	$data['pendatang_antar_kota'] = $this->dm->pendatang_antar_kota($bulan); 
	$data['pendatang_antar_provinsi'] = $this->dm->pendatang_antar_provinsi($bulan);  
	$data['pendatang_antar_negara'] = $this->dm->pendatang_antar_negara($bulan); 	 
	$data['pendatang_jumlah'] = $this->dm->pendatang_jumlah($bulan);
	
	$data['pindah_antar_desa'] = $this->dm->pindah_antar_desa($bulan);
	$data['pindah_antar_kecamatan'] = $this->dm->pindah_antar_kecamatan($bulan);
	$data['pindah_antar_kota'] = $this->dm->pindah_antar_kota($bulan);
	$data['pindah_antar_provinsi'] = $this->dm->pindah_antar_provinsi($bulan);
	$data['pindah_antar_negara'] = $this->dm->pindah_antar_negara($bulan);
	$data['pindah_jumlah'] = $this->dm->pindah_jumlah($bulan);*/
	
	$this->load->view("statistik_penduduk_bulanan_cetak",$data); 	



 }
 
	
}


?>

