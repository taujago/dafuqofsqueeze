<?php 
class statistik_penduduk_triwulan extends  op_controller {
 	function __construct() {
		parent::__construct();
 
		$this->load->model("statpt","dm");
		$this->load->model("core_model","cm");
		$this->load->model("add_model","add");
 		$this->load->helper("tanggal");
		 
		 
	}


function index()
    {
 
    $data['title'] = "Laporan Penduduk Per Triwulan ";	
    $data['header'] = "Laporan Penduduk Per Triwulan ";
	$data['controller'] = "statistik_penduduk_triwulan";
  

 
 
   	$content = $this->load->view("statistik_penduduk_triwulan_view",$data,true);
	$this->set_title("Laporan Penduduk Per Triwulan ");
	$this->set_content($content);
	$this->render();
    }
    
  
 
 function cetak($bulan) {
 	 
	
 	//$this->cm->data_desa();
	
	
	
	 $arr_triwulan = $this->add->arr_triwulan();
	 $data['periode'] = $arr_triwulan[$bulan];
	 $data['jumlah_penduduk'] = $this->dm->jumlah_penduduk($bulan);
	 $data['jumlah_kk'] = $this->dm->jumlah_kk($bulan);
	 $data['jumlah_wajib_kk'] = $this->dm->jumlah_wajib_kk($bulan);
	 $data['jumlah_punya_kk'] = $this->dm->jumlah_punya_kk($bulan);
	 $data['jumlah_belum_punya_kk'] = $this->dm->jumlah_belum_punya_kk($bulan);
	 $data['jumlah_telah_punya_kk'] = $this->dm->jumlah_telah_punya_kk($bulan);

	 
	 $data['jumlah_wajib_ktp'] = $this->dm->jumlah_wajib_ktp($bulan);
	 $data['jumlah_punya_ktp'] = $this->dm->jumlah_punya_ktp($bulan);
	 $data['jumlah_belum_punya_ktp'] = $this->dm->jumlah_belum_punya_ktp($bulan);
	 $data['jumlah_kelahiran'] = $this->dm->jumlah_kelahiran($bulan);
	 $data['jumlah_kematian'] = $this->dm->jumlah_kematian($bulan);
	 
	 
	
	$this->load->view("statistik_penduduk_triwulan_cetak",$data); 	



 }
 
	
}


?>

