<?php 
class statistik_kepemilikan_tanah extends  op_controller {
 	function __construct() {
		parent::__construct();
 
		// $this->load->model("penjandam","dm");
		$this->load->model("core_model","cm");
		$this->load->model("add_model","am");
		$this->load->helper("tanggal");
		 
		 
	}


function index_utama()
    {
 
    $data['title'] = "Data Penduduk Duda dan Janda";    
    $data['header'] = "Data Penduduk Duda dan Janda";
    $data['controller'] = "statistik_kepemilikan_tanah";
  

 
 
    $content = $this->load->view("statistik_penduduk_duda_janda_view",$data,true);
    $this->set_title("Data Penduduk Duda dan Janda");
    $this->set_content($content);
    $this->render();
    }


function index()
    {
 
    $data['title'] = "GRAFIK KELENGKAPAN DOKUMEN KEPEMILIKAN TANAH";	
    $data['header'] = "GRAFIK KELENGKAPAN DOKUMEN KEPEMILIKAN TANAH";
	$data['controller'] = "statistik_kepemilikan_tanah";

    $this->db->where("lengkap",0); 
    $this->db->where("deleted",0);
    $jumlah_sudah  = $this->db->get("surat_kepemilikan_tanah")->num_rows(); 

    $this->db->where("lengkap",1); 
    $this->db->where("deleted",0);
    $jumlah_belum  = $this->db->get("surat_kepemilikan_tanah")->num_rows(); 
   	
    $total =  $jumlah_sudah + $jumlah_belum; 

    $data['persen_sudah'] = number_format( ($jumlah_sudah / $total * 100) ,2);
    $data['persen_belum'] = number_format( ($jumlah_belum / $total * 100) ,2);

   	$content = $this->load->view("statistik_kepemilikan_tanah_view",$data,true);
	$this->set_title("Data Penduduk");
	$this->set_content($content);
	$this->render();
    }

}



?>