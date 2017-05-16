<?php 
class surat_hibah extends op_controller {
	function __construct(){
		parent::__construct();
		$this->load->model("core_model","cm");
		$this->load->model("hib","dm");
        $this->load->model("add_model","am");
		$this->load->helper("tanggal");
	}


	function index(){
		$data['controller'] = get_class($this);
		$data['header'] = "Data Surat Hibah";
		$content = $this->load->view($data['controller']."_view",$data,true);
		$this->set_title($data['header']);
		$this->set_content($content);
		$this->render();
	}

	function get_data(){
    	$page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"tanggal"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"desc"; // get the direction if(!$sidx) $sidx =1;  
        $nama_1 = isset($_REQUEST['search_nama_1'])?$_REQUEST['search_nama_1']:"x";
        $nama_2 = isset($_REQUEST['search_nama_2'])?$_REQUEST['search_nama_2']:"x";
        $tgl_awal = !empty($_REQUEST['search_tgl_awal'])?$_REQUEST['search_tgl_awal']:"x";
        $tgl_akhir =!empty($_REQUEST['search_tgl_akhir'])?$_REQUEST['search_tgl_akhir']:"x";
        /*$nama_ibu = isset($_REQUEST['search_nama_ibu'])?$_REQUEST['search_nama_ibu']:"x";
        $nama_bapak = isset($_REQUEST['search_nama_bapak'])?$_REQUEST['search_nama_bapak']:"x";
        $jk = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";
        $id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        $id_desa =  isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
        $dusun =  isset($_REQUEST['search_dusun'])?$_REQUEST['search_dusun']:"x"; */
       
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null ,
                "nama_1"  => $nama_1,
                "nama_2"  => $nama_2,
                "tgl_awal" => $tgl_awal,
                "tgl_akhir" => $tgl_akhir
                 /*,
                "nama_ibu"  => $nama_ibu,
                "nama_bapak" => $nama_bapak,
                "jk"        =>$jk */
 
		);     
           
        $row = $this->dm->get_data($req_param)->result_array();
		
        $count = count($row); 
        if( $count >0 ) { 
            $total_pages = ceil($count/$limit); 
        } else { 
            $total_pages = 0; 
        } 
        if ($page > $total_pages) 
            $page=$total_pages; 
        $start = $limit*$page - $limit; // do not put $limit*($page - 1) 
        
        $start = ($start < 0 )?0:$start;
        
        $req_param['limit'] = array(
                    'start' => $start,
                    'end' => $limit
        );
          
        
        $result = $this->dm->get_data($req_param)->result_array();
        // sekarang format data dari dB sehingga sesuai yang diinginkan oleh jqGrid dalam hal ini aku pakai JSON format
        //$responce->page = $page; 
        $responce = new stdClass();
        $responce->total = $count; 
        //$responce->records = $count;

        if($count == 0 ) {
        	$responce->rows['1']['id']= "";
        }
        else {
                $x=0;
        for($i=0; $i<count($result); $i++){
        	$x++;
            //$responce->rows[$i]['id']=$result[$i]['id_provinsi'];
            // data berikut harus sesuai dengan kolom-kolom yang ingin ditampilkan di view (js)
            $responce->rows[$i]['id']		         = $result[$i]['id'] ;
            $responce->rows[$i]['tanggal']                = flipdate($result[$i]['tanggal']) ;
            $responce->rows[$i]['tanggal_lahir_1']                = flipdate($result[$i]['tanggal_lahir_1']) ;
            $responce->rows[$i]['nik']          = $result[$i]['nik'] ;
              $responce->rows[$i]['tanggal_lahir']                = flipdate($result[$i]['tanggal_lahir']) ;
            $responce->rows[$i]['nama']          = $result[$i]['nama'] ;
               $responce->rows[$i]['jk']          = $result[$i]['jk'] ;
            $responce->rows[$i]['alamat']          = $result[$i]['alamat'] ;
            $responce->rows[$i]['pekerjaan']          = $result[$i]['pekerjaan'] ;
            $responce->rows[$i]['tempat_lahir']          = $result[$i]['tempat_lahir'] ;
            $responce->rows[$i]['no_surat']          = $result[$i]['no_surat'] ;
			$responce->rows[$i]['sumber_data_1']          = $result[$i]['sumber_data_1'] ;
			$responce->rows[$i]['sumber_data_2']          = $result[$i]['sumber_data_2'] ;
			$responce->rows[$i]['nama_1']          = $result[$i]['nama_1'] ;
            $responce->rows[$i]['jk_1']          = $result[$i]['jk_1'] ;
			$responce->rows[$i]['nama_2']          = $result[$i]['nama_2'] ;
            $responce->rows[$i]['nik_1']          = $result[$i]['nik_1'] ;
            $responce->rows[$i]['nik_2']          = $result[$i]['nik_2'] ;
            $responce->rows[$i]['pekerjaan_1']          = $result[$i]['pekerjaan_1'] ;
            $responce->rows[$i]['alamat_1']          = $result[$i]['alamat_1'] ;
            $responce->rows[$i]['warga_negara_penduduk_1']          = $result[$i]['warga_negara_penduduk_1'] ;
            $responce->rows[$i]['nik_penduduk_1']          = $result[$i]['nik_penduduk_1'] ;
            $responce->rows[$i]['nik_penduduk_2']          = $result[$i]['nik_penduduk_2'] ;
			$responce->rows[$i]['alamat_penduduk_1']          = $result[$i]['alamat_penduduk_1'] ;
			$responce->rows[$i]['alamat_penduduk_2']          = $result[$i]['alamat_penduduk_2'] ;
            $responce->rows[$i]['jk_2']          = $result[$i]['jk_2'] ;
            $responce->rows[$i]['pekerjaan_penduduk_1']          = $result[$i]['pekerjaan_penduduk_1'] ;
            $responce->rows[$i]['pekerjaan_penduduk_2']          = $result[$i]['pekerjaan_penduduk_2'] ;
			$responce->rows[$i]['id_penduduk_1']          = $result[$i]['id_penduduk_1'] ;
			$responce->rows[$i]['id_penduduk_2']          = $result[$i]['id_penduduk_2'] ;
			
			$responce->rows[$i]['nama_penduduk_1']          = $result[$i]['nama_penduduk_1'] ;
			$responce->rows[$i]['nama_penduduk_2']          = $result[$i]['nama_penduduk_2'] ;
			$responce->rows[$i]['panjang']          = $result[$i]['panjang'] ;
            $responce->rows[$i]['lebar']          = $result[$i]['lebar'] ;
            $responce->rows[$i]['luas']          = $result[$i]['luas'] ;
            $responce->rows[$i]['uang']          = $result[$i]['uang'] ;
            $responce->rows[$i]['terbilang']          = $result[$i]['terbilang'] ;
            $responce->rows[$i]['batas_utara']          = $result[$i]['batas_utara'] ;
            $responce->rows[$i]['batas_selatan']          = $result[$i]['batas_selatan'] ;
            $responce->rows[$i]['batas_timur']          = $result[$i]['batas_timur'] ;
            $responce->rows[$i]['batas_barat']          = $result[$i]['batas_barat'] ;
            $responce->rows[$i]['saksi_1']          = $result[$i]['saksi_1'] ;
            $responce->rows[$i]['saksi_2']          = $result[$i]['saksi_2'] ;
             $responce->rows[$i]['saksi_3']          = $result[$i]['saksi_3'] ;
              $responce->rows[$i]['saksi_4']          = $result[$i]['saksi_4'] ;
			
			$responce->rows[$i]['alamat_tanah']          = $result[$i]['alamat_tanah'] ;
			$responce->rows[$i]['rt_tanah']          = $result[$i]['rt_tanah'] ;
			
			$responce->rows[$i]['kaur_pemerintahan']          = $result[$i]['kaur_pemerintahan'] ;
			$responce->rows[$i]['notulis']          = $result[$i]['notulis'] ;
			
			$responce->rows[$i]['dusun']          = $result[$i]['dusun'] ;
			$responce->rows[$i]['id_dusun_tanah']          = $result[$i]['id_dusun_tanah'] ;
           
			
            // $responce->rows[$i]['bidang_usaha']      = $result[$i]['bidang_usaha'];     			 
            $responce->rows[$i]['ttd']               = $result[$i]['ttd'] ; 
            $responce->rows[$i]['ttd_nama']          = $result[$i]['ttd_nama'] ; 
            $responce->rows[$i]['ttd_jabatan']          = $result[$i]['ttd_jabatan'] ; 
            $responce->rows[$i]['nip']          = $result[$i]['nip'] ; 
            $responce->rows[$i]['penandatangan_nama']          = $result[$i]['ttd_nama'] ; 
            $responce->rows[$i]['pangkat']          = $result[$i]['pangkat'] ; 
            $responce->rows[$i]['penandatangan_jabatan']          = $result[$i]['ttd_jabatan'] ; 
           
           
  
             

        } }
		//echo "<hr />";
        echo json_encode($responce); 
    }

    function save(){
        $data = $this->input->post();
        $this->load->library('form_validation');
        //$this->form_validation->set_rules('nik','NIK','required');    
        // $this->form_validation->set_rules('no_surat','Nomor surat','required');    
        //$this->form_validation->set_rules('jenis_usaha','Jenis Usaha ','required');        
       // $this->form_validation->set_rules('bidang_usaha','Bidang Usaha ','required');        
        $this->form_validation->set_rules('alamat_tanah','Alamat Usaha ','required');        
        $this->form_validation->set_message('required', ' %s Harus diisi '); 
        $this->form_validation->set_message('numeric', ' %s Harus diisi dengan angka ');
        $this->form_validation->set_message('alpha', ' %s Harus diisi dengan huruf ');
        
        
        $this->form_validation->set_error_delimiters("* ", '<br>');
        if($this->form_validation->run() == TRUE) {

                $data['id'] = md5(date("Ymdhis"));
                $data['tanggal'] = flipdate($data['tanggal']);
                $data['tanggal_lahir'] = flipdate($data['tanggal_lahir']);
                 
				//$data['ex_tgl_lahir'] =  !empty($data['ex_tgl_lahir'])?flipdate($data['ex_tgl_lahir']):"" ;

                $desa = $this->cm->data_desa();
                if($data['ttd'] == "kepala" ) {
                    
                    if($desa->bentuk_lembaga=="Kelurahan") {
                        $data['ttd_jabatan'] = "LURAH ";
                        ///$arr_lahir['nip_kepala_desa'] = $desa->nip_kepala_desa;
                         $data['nip'] = $desa->nip_kepala_desa;
                         $data['pangkat'] = $desa->pangkat_kepala_desa;
                    }
                    else { 
                        $data['ttd_jabatan'] = "KEPALA DESA ";
                    }
                    
                    $data['ttd'] = $data['ttd'];                    
                    $data['ttd_nama'] = $desa->nama_kepala_desa;
                }
                else if($data['ttd'] == "sek" ) {
                    $data['ttd'] = $data['ttd'];
                    
                    if($desa->bentuk_lembaga=="Kelurahan") {
                        $data['ttd_jabatan'] = "SEKLUR ";
                        $data['nip'] = $desa->nip_sek_desa; 
                        $data['pangkat'] = $desa->pangkat_sek_desa;
                        
                    }
                    else { 
                         $data['ttd_jabatan'] = "Sekretaris Desa";
                    }
                    $data['ttd_nama'] = $desa->nama_sek_desa;
                    $data['nip'] = $desa->nip_sek_desa;
                    $data['pangkat'] = $desa->pangkat_sek_desa;
                }
                
                 else  {
                    $data['ttd'] = $data['ttd'];
                    $data['ttd_jabatan'] = $data['penandatangan_jabatan'];
                    $data['ttd_nama'] = $data['penandatangan_nama'];
                    $data['nip'] = $data['nip'];
                    $data['pangkat'] = $data['pangkat'];
                }
                unset($data['penandatangan_jabatan']);
                unset($data['penandatangan_nama']);
                
                
				if($data['sumber_data_1'] == "in") {
				$data['id_penduduk_1'] = $this->cm->get_id_penduduk($data['nik_1']);
				}
				if($data['sumber_data_2'] == "in") {
				$data['id_penduduk_2'] = $this->cm->get_id_penduduk($data['nik_2']);
				}
                unset($data['nik_1']);
				unset($data['nik_2']);
				
				
                $res = $this->db->insert("surat_hibah",$data);

                if($res) {    
				$this->cm->update_nomor_surat($data['no_surat']);
                $ret = array("success"=>true,
                            "pesan"=>"Data berhasil disimpan",
                            "operation" =>"insert");
                }
                else {
                 $ret = array("success"=>false,
                            "pesan"=>"Data berhasil disimpan" .mysql_error(),
                            "operation" =>"insert");   
                }

            }

        else {
             $ret = array("success"=>false,
                            "pesan"=>validation_errors(),
                            "operation" =>"insert");
        }
        echo json_encode($ret);
    }



    function update() {
        $data = $this->input->post();
        $this->load->library('form_validation');
        //$this->form_validation->set_rules('nik','NIK','required');    
        // $this->form_validation->set_rules('no_surat','Nomor surat','required');    
        //$this->form_validation->set_rules('jenis_usaha','Jenis Usaha ','required');        
       // $this->form_validation->set_rules('bidang_usaha','Bidang Usaha ','required');        
        $this->form_validation->set_rules('alamat_tanah','Alamat Usaha ','required');        
        $this->form_validation->set_message('required', ' %s Harus diisi '); 
        $this->form_validation->set_message('numeric', ' %s Harus diisi dengan angka ');
        $this->form_validation->set_message('alpha', ' %s Harus diisi dengan huruf ');
        
        
        
        $this->form_validation->set_error_delimiters("* ", '<br>');
        if($this->form_validation->run() == TRUE) {

               
                $data['tanggal'] = flipdate($data['tanggal']);
                  $data['tanggal_lahir'] = flipdate($data['tanggal_lahir']);
                 $data['tanggal_lahir_penduduk_1'] = flipdate($data['tanggal_lahir_penduduk_1']);
                  $data['tanggal_lahir_penduduk_2'] = flipdate($data['tanggal_lahir_penduduk_2']);
                $desa = $this->cm->data_desa();
                if($data['ttd'] == "kepala" ) {
                    
                    if($desa->bentuk_lembaga=="Kelurahan") {
                        $data['ttd_jabatan'] = "LURAH ";
                        ///$arr_lahir['nip_kepala_desa'] = $desa->nip_kepala_desa;
                         $data['nip'] = $desa->nip_kepala_desa;
                         $data['pangkat'] = $desa->pangkat_kepala_desa;
                    }
                    else { 
                        $data['ttd_jabatan'] = "KEPALA DESA ";
                    }
                    
                    $data['ttd'] = $data['ttd'];                    
                    $data['ttd_nama'] = $desa->nama_kepala_desa;
                }
                else if($data['ttd'] == "sek" ) {
                    $data['ttd'] = $data['ttd'];
                    
                    if($desa->bentuk_lembaga=="Kelurahan") {
                        $data['ttd_jabatan'] = "SEKLUR ";
                        $data['nip'] = $desa->nip_sek_desa; 
                        $data['pangkat'] = $desa->pangkat_sek_desa;
                        
                    }
                    else { 
                         $data['ttd_jabatan'] = "Sekretaris Desa";
                    }
                    $data['ttd_nama'] = $desa->nama_sek_desa;
                    $data['nip'] = $desa->nip_sek_desa;
                    $data['pangkat'] = $desa->pangkat_sek_desa;
                }
                
                 else  {
                    $data['ttd'] = $data['ttd'];
                    $data['ttd_jabatan'] = $data['penandatangan_jabatan'];
                    $data['ttd_nama'] = $data['penandatangan_nama'];
                    $data['nip'] = $data['nip'];
                    $data['pangkat'] = $data['pangkat'];
                }
                unset($data['penandatangan_jabatan']);
                unset($data['penandatangan_nama']);
                

                if($data['sumber_data_1'] == "in") {
				$data['id_penduduk_1'] = $this->cm->get_id_penduduk($data['nik_1']);
				}
				if($data['sumber_data_2'] == "in") {
				$data['id_penduduk_2'] = $this->cm->get_id_penduduk($data['nik_2']);
				}
                unset($data['nik_1']);
				unset($data['nik_2']);
                
                 $this->db->where("id",$data['id']);
                $res = $this->db->update("surat_hibah",$data);

                if($res) {    
                $ret = array("success"=>true,
                            "pesan"=>"Data berhasil disimpan",
                            "operation" =>"insert");
                }
                else {
                 $ret = array("success"=>false,
                            "pesan"=>"Data berhasil disimpan" .mysql_error(),
                            "operation" =>"insert");   
                }

            }

        else {
             $ret = array("success"=>false,
                            "pesan"=>validation_errors(),
                            "operation" =>"insert");
        }
        echo json_encode($ret);
    }


function hapus(){
    $data = $this->input->post();
    $ids = explode(",", $data['ids']);
    foreach($ids as $id) {
        $this->db->where("id",$id);
        $this->db->delete("surat_hibah");
    }
    echo json_encode(array("success"=>true,"pesan"=>"Berhasil dihapus"));
}

function detail($id) {
    $this->db->where("id",$id);
    $data = $this->db->get("v_kelahiran");
    $data = $data->row_array();
   // echo "<pre>"; print_r($data); echo "</pre>";
    $data['controller'] = get_class($this);
    $data['header'] = "Detail Surat Kelahiran";
    $data['title'] = $data['header'];
    $content = $this->load->view($data['controller']."_detail_view",$data,true);
    $this->set_title($data['header']);
    $this->set_content($content);
    $this->render();
}
function cetak($id) {
    $this->db->select('*')->from('v_surat_hibah skt ')
       // ->join("v_penduduk2 p",'p.id_penduduk=skt.id_penduduk')
        ->where("id",$id);

    $data = $this->db->get();

    $data = $data->row_array();
    $data['controller'] = get_class($this);
    $data['header'] = "Surat Jual Beli Tanah";
    $data['title'] = $data['header'];
    $this->load->view($data['controller']."_print_view",$data);
   // $this->set_title($data['header']);
    //$this->set_content($content);
    //$this->render();
}
 
function pdf($id) {
    $this->db->select('*')->from('v_surat_hibah skt ')
       // ->join("v_penduduk2 p",'p.id_penduduk=skt.id_penduduk')
        ->where("id",$id);

    $data = $this->db->get();

    $data = $data->row_array();
    $data['controller'] = get_class($this);
    $data['header'] = "Surat Hibah";
    $data['title'] = $data['header'];
     $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
     
        $pdf->SetMargins(25, 10, 20);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

         // add a page
        $pdf->AddPage('P');

 

         $html = $this->load->view("pdf/surat_hibah_pdf_view",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');

 
         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');
}
function word($id) {
    $this->db->select('*')->from('v_surat_hibah skt ')
       // ->join("v_penduduk2 p",'p.id_penduduk=skt.id_penduduk')
        ->where("id",$id);

    $data = $this->db->get();

    $data = $data->row_array();
    $data['controller'] = get_class($this);
    $data['header'] = "Berita Acara Penyelesaian Sengketa Tanah";
    $data['title'] = $data['header'];
      
         $html = $this->load->view("pdf/surat_berita_acara_tanah_pdf_view",$data,true);
     $this->load->helper('download');
    force_download("surat berita acara tanah.doc", $html);     
    }
}
?>