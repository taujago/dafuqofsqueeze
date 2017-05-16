<?php 
class indeks_desa_membangun extends  op_controller {
	var $controller; 
 	function __construct() {
		parent::__construct();
 		$this->load->model("indeks_desa_membangun_model","cp");
		$this->load->model("core_model","cm");
		$this->load->helper("tanggal");
		$this->controller = get_class($this);
	}

	function index(){

		$data = $this->db->get("indeks_desa_membangun")->row_array();
		$data['title'] = "INDEKS DESA MEMBANGUN ";
		 
	   	$content = $this->load->view($this->controller."_view",$data,true);
		$this->set_title($data['title']);
		$this->set_content($content);
		$this->render();


		//$this->load->view("");
	}


	function save(){
		$data = $this->input->post();
		// /show_array($data);
		$res  = $this->db->update("indeks_desa_membangun",$data);
		if($res){
			$ret['success'] = true;
			$ret['pesan']  = "data indeks desa membangun berhasil disimpan";
		}
		else {
			$ret['success'] = false;
			$ret['pesan']  = "data indeks desa membangun gagal disimpan".mysql_error();
		}
		echo json_encode($ret);
	}


function cetak1() {
     
     $post = $this->input->get();
     $tahun = $post['tahun'];
     // show_array($post); exit;

   // $data = $data->row_array();
	$data = $this->cp->get_monografi();
    $data['controller'] = get_class($this);
    $data['header'] = "DATA MONOGRAFI DESA ";
    $data['title'] = $data['header'];

    $data['rec_batas_wilayah'] 			= $this->cp->get_batas_wilayah();
    $data['get_data_penduduk_per_jk'] 	= $this->cp->get_data_penduduk_per_jk();
    $data['get_data_kk'] 				= $this->cp->get_data_kk();
    $data['get_data_per_warga_negara'] 	= $this->cp->get_data_per_warga_negara();
    $data['get_data_penduduk_per_agama'] 	= $this->cp->get_data_penduduk_per_agama();
    $data['get_penduduk_usia_pendidikan'] 	= $this->cp->get_penduduk_usia_pendidikan();
    $data['get_penduduk_usia_kerja'] 	= $this->cp->get_penduduk_usia_kerja();
    $data['get_penduduk_per_pekerjaan'] 	= $this->cp->get_penduduk_per_pekerjaan();
    $data['get_jumlah_lahir'] 	= $this->cp->get_jumlah_lahir($tahun);
    $data['get_jumlah_mati'] 	= $this->cp->get_jumlah_mati($tahun);
    $data['get_jumlah_datang'] 	= $this->cp->get_jumlah_datang($tahun);
    $data['get_jumlah_pindah'] 	= $this->cp->get_jumlah_pindah($tahun);
    $data['get_penduduk_per_pendidikan']     = $this->cp->get_penduduk_per_pendidikan();


 



    $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
     
        $pdf->SetMargins(20, 10, 10);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

         // add a page
        $pdf->AddPage('P');

 

         $html = $this->load->view("pdf/monografi_pdf_view",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');

 
         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');
} 
 
function cetak() {
    

    $data = $this->cp->get_monografi();
    //echo $this->db->last_query();
    // $data = $data->row_array();
    $data['controller'] = get_class($this);
    $data['header'] = "Indeks Desa Membangun";
    $data['title'] = $data['header'];
    $this->load->view($data['controller']."_print_view",$data);
 
}



	
}


?>
