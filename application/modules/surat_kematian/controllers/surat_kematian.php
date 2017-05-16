<?php 
class surat_kematian extends op_controller {
	function __construct(){
		parent::__construct();
		$this->load->model("core_model","cm");
		$this->load->model("skmm","dm");
        $this->load->model("add_model","am");
		$this->load->helper("tanggal");
	}


	function index(){
		$data['controller'] = get_class($this);
		$data['header'] = "Data Surat kematian";
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
        $nama = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $ibu_nama = isset($_REQUEST['search_ibu_nama'])?$_REQUEST['search_ibu_nama']:"x";
        $bapak_nama = isset($_REQUEST['search_bapak_nama'])?$_REQUEST['search_bapak_nama']:"x";
        $jk = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";
        /*$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        $id_desa =  isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
        $dusun =  isset($_REQUEST['search_dusun'])?$_REQUEST['search_dusun']:"x"; */
       
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null ,
                "nama"  => $nama,
                "ibu_nama"  => $ibu_nama,
                "bapak_nama" => $bapak_nama,
                "jk"        =>$jk
 
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
            $responce->rows[$i]['id']			= $result[$i]['id'] ;
            $responce->rows[$i]['nik']           = $result[$i]['nik'] ;
            $responce->rows[$i]['id_penduduk']  = $result[$i]['id_penduduk'] ;
             $responce->rows[$i]['no_surat']     = $result[$i]['no_surat']; 
            $responce->rows[$i]['tanggal']     =  flipdate($result[$i]['tanggal']);     
           
            $responce->rows[$i]['nama']			= $result[$i]['nama'] ;
            $responce->rows[$i]['warga_negara']         = $result[$i]['warga_negara'] ;
            $responce->rows[$i]['kecamatan']         = $result[$i]['kecamatan'] ;
            $responce->rows[$i]['jam_meninggal']         = $result[$i]['jam_meninggal'] ;
              $responce->rows[$i]['tempat_meninggal']         = $result[$i]['tempat_meninggal'] ;
              $responce->rows[$i]['tempat_pemakaman']         = $result[$i]['tempat_pemakaman'] ;
            $responce->rows[$i]['tanggal_lahir']		= flipdate($result[$i]['tanggal_lahir']) ;
          //  $responce->rows[$i]['tgl_lahir']	= $result[$i]['tgl_lahir'] ;
            $responce->rows[$i]['tempat_lahir']    = $result[$i]['tempat_lahir'] ;    
            $responce->rows[$i]['tgl_meninggal']	= flipdate($result[$i]['tgl_meninggal']) ;  
           // $responce->rows[$i]['jam_meninggal']	= $result[$i]['jam_meninggal'] ;    
            $responce->rows[$i]['tempat_lahir']  = $result[$i]['tempat_lahir'] ;
			$responce->rows[$i]['jk']			= strtoupper($result[$i]['jk']) ;  	
            $responce->rows[$i]['pekerjaan']  = $result[$i]['pekerjaan'] ;
            $responce->rows[$i]['agama']  = $result[$i]['agama'] ;
            $responce->rows[$i]['alamat']  = $result[$i]['alamat'] ;
            $responce->rows[$i]['dusun']  = $result[$i]['dusun'] ;
            $responce->rows[$i]['provinsi']  = $result[$i]['provinsi'] ;
            $responce->rows[$i]['kabupaten']  = $result[$i]['kabupaten'] ;
            $responce->rows[$i]['desa']  = $result[$i]['desa'] ;
            $responce->rows[$i]['penyebab_kematian']  = $result[$i]['penyebab_kematian'] ;
            $responce->rows[$i]['yang_menerangkan']  = $result[$i]['yang_menerangkan'] ;


            
            $responce->rows[$i]['bapak_id_penduduk']      = $result[$i]['bapak_id_penduduk'] ; 
            $responce->rows[$i]['bapak_nik']      = $result[$i]['bapak_nik'] ; 
            $responce->rows[$i]['bapak_nama']     = $result[$i]['bapak_nama'] ; 
            $responce->rows[$i]['bapak_tempat_lahir']     = $result[$i]['bapak_tempat_lahir'] ;
            $responce->rows[$i]['bapak_tanggal_lahir']    = flipdate($result[$i]['bapak_tanggal_lahir']) ;
			$responce->rows[$i]['bapak_agama']	= $result[$i]['bapak_agama'] ;  
			$responce->rows[$i]['bapak_warga_negara']	= $result[$i]['bapak_warga_negara'] ;  
            $responce->rows[$i]['bapak_pekerjaan']    = $result[$i]['bapak_pekerjaan'] ;  
			$responce->rows[$i]['bapak_alamat']		= $result[$i]['bapak_alamat'] ; 
			$responce->rows[$i]['bapak_desa']		= $result[$i]['bapak_desa'] ; 
            $responce->rows[$i]['bapak_kecamatan']     = $result[$i]['saksi1_nik'] ;
			$responce->rows[$i]['bapak_kabupaten']     = $result[$i]['bapak_kabupaten'] ;
            $responce->rows[$i]['bapak_provinsi']     = $result[$i]['bapak_provinsi'] ;

                   
            $responce->rows[$i]['ibu_id_penduduk']      = $result[$i]['ibu_id_penduduk'] ; 
            $responce->rows[$i]['ibu_nik']      = $result[$i]['ibu_nik'] ; 
            $responce->rows[$i]['ibu_nama']     = $result[$i]['ibu_nama'] ; 
            $responce->rows[$i]['ibu_tempat_lahir']     = $result[$i]['ibu_tempat_lahir'] ;
            $responce->rows[$i]['ibu_tanggal_lahir']    = flipdate($result[$i]['ibu_tanggal_lahir']) ;
            $responce->rows[$i]['ibu_agama']  = $result[$i]['ibu_agama'] ;  
            $responce->rows[$i]['ibu_warga_negara']   = $result[$i]['ibu_warga_negara'] ;  
            $responce->rows[$i]['ibu_pekerjaan']    = $result[$i]['ibu_pekerjaan'] ;  
            $responce->rows[$i]['ibu_alamat']     = $result[$i]['ibu_alamat'] ; 
            $responce->rows[$i]['ibu_desa']       = $result[$i]['ibu_desa'] ; 
            $responce->rows[$i]['ibu_kecamatan']     = $result[$i]['ibu_kecamatan'] ;
            $responce->rows[$i]['ibu_kabupaten']     = $result[$i]['ibu_kabupaten'] ;
            $responce->rows[$i]['ibu_provinsi']     = $result[$i]['ibu_provinsi'] ;

             $responce->rows[$i]['saksi1_nik']       = $result[$i]['saksi1_nik'] ; 
            $responce->rows[$i]['saksi1_nama']     = $result[$i]['saksi1_nama'] ;
            $responce->rows[$i]['saksi2_nik']     = $result[$i]['saksi2_nik'] ;
            $responce->rows[$i]['saksi2_nama']     = $result[$i]['saksi2_nama'] ;
             $responce->rows[$i]['hubungan_pelapor']     = $result[$i]['hubungan_pelapor'] ;




             $responce->rows[$i]['ttd']          = $result[$i]['ttd'] ; 
            $responce->rows[$i]['nip']          = $result[$i]['nip'] ; 
            $responce->rows[$i]['ttd_nama']          = $result[$i]['ttd_nama'] ; 
            $responce->rows[$i]['pangkat']          = $result[$i]['pangkat'] ; 
            $responce->rows[$i]['ttd_jabatan']          = $result[$i]['ttd_jabatan'] ; 

        } }
		//echo "<hr />";
        echo json_encode($responce); 
    }

    function save(){
        $data = $this->input->post();

        $this->load->library('form_validation');
     
        // $this->form_validation->set_rules('ayah_nik','Bapak ','required');

        $this->form_validation->set_rules('nik','Nama','required');
        $this->form_validation->set_rules('ttd','Penandatangan','required');

        $this->form_validation->set_rules('ibu_nik','Ibu','required');
        $this->form_validation->set_rules('ttd','Penandatangan','required');

        $this->form_validation->set_rules('bapak_nik','NIK Bapak','callback_cek_nik');
        $this->form_validation->set_rules('ibu_nik','NIK Ibu','callback_cek_nik');
       
      
        $this->form_validation->set_message('required', ' %s Harus diisi '); 
        $this->form_validation->set_message('numeric', ' %s Harus diisi dengan angka ');
        $this->form_validation->set_message('alpha', ' %s Harus diisi dengan huruf ');
        
        


        $this->form_validation->set_error_delimiters("* ", '<br>');
        if($this->form_validation->run() == TRUE) {
        $data['tanggal_lahir'] = flipdate($data['tanggal_lahir']);
        $data['tgl_meninggal'] = flipdate($data['tgl_meninggal']);
        $data['bapak_tanggal_lahir'] = flipdate($data['bapak_tanggal_lahir']);
        $data['ibu_tanggal_lahir'] = flipdate($data['ibu_tanggal_lahir']);
        $data['tanggal'] = flipdate($data['tanggal']);
        $data['id_penduduk'] = $data['nik'];

 
         $data['id'] = md5(date("Ymdhis"));

           
                
                $desa = $this->cm->data_desa();
                if($data['ttd'] == "kepala" ) {
                    
                    if($desa->bentuk_lembaga=="Kelurahan") {
                        $data['ttd_jabatan'] = "LURAH ";
                        ///$data['nip_kepala_desa'] = $desa->nip_kepala_desa;
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
            
                
                $res = $this->db->insert("surat_kematian_1",$data);         

                if($res) { 
                $this->db->where("id_penduduk",$data['id_penduduk']);
                $this->db->update("penduduk",array("hidup_mati"=>"0"));


 
                $this->cm->update_nomor_surat($data['no_surat']);
             //   echo $this->db->last_query();
                $ret = array("success"=>true,
                            "pesan"=>"Data berhasil disimpan",
                            "operation" =>"insert");


                }

            // }

            else {
              // echo $this->db->last_query() . 
                  $ret = array("success"=>false,
                            "pesan"=> mysql_error(),
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
     
        // $this->form_validation->set_rules('ayah_nik','Bapak ','required');

        $this->form_validation->set_rules('nik','Nama','required');
        $this->form_validation->set_rules('ttd','Penandatangan','required');

        $this->form_validation->set_rules('ibu_nik','Ibu','required');
        $this->form_validation->set_rules('ttd','Penandatangan','required');

        $this->form_validation->set_rules('bapak_nik','NIK Bapak','callback_cek_nik');
        $this->form_validation->set_rules('ibu_nik','NIK Ibu','callback_cek_nik');
       
      
        $this->form_validation->set_message('required', ' %s Harus diisi '); 
        $this->form_validation->set_message('numeric', ' %s Harus diisi dengan angka ');
        $this->form_validation->set_message('alpha', ' %s Harus diisi dengan huruf ');
        
        


        $this->form_validation->set_error_delimiters("* ", '<br>');
        if($this->form_validation->run() == TRUE) {
        $data['tanggal_lahir'] = flipdate($data['tanggal_lahir']);
        $data['tgl_meninggal'] = flipdate($data['tgl_meninggal']);
        $data['bapak_tanggal_lahir'] = flipdate($data['bapak_tanggal_lahir']);
        $data['ibu_tanggal_lahir'] = flipdate($data['ibu_tanggal_lahir']);
        $data['tanggal'] = flipdate($data['tanggal']);
        $data['id_penduduk'] = $data['nik'];

 
 
           
                
                $desa = $this->cm->data_desa();
                if($data['ttd'] == "kepala" ) {
                    
                    if($desa->bentuk_lembaga=="Kelurahan") {
                        $data['ttd_jabatan'] = "LURAH ";
                        ///$data['nip_kepala_desa'] = $desa->nip_kepala_desa;
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
            
                
                $this->db->where("id",$data['id']);
                $res = $this->db->update("surat_kematian_1",$data);         

                if($res) { 
                $this->db->where("id_penduduk",$data['id_penduduk']);
                $this->db->update("penduduk",array("hidup_mati"=>"0"));


 
                $this->cm->update_nomor_surat($data['no_surat']);
             //   echo $this->db->last_query();
                $ret = array("success"=>true,
                            "pesan"=>"Data berhasil disimpan",
                            "operation" =>"insert");


                }

            // }

            else {
              // echo $this->db->last_query() . 
                  $ret = array("success"=>false,
                            "pesan"=> mysql_error(),
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



function detail($id) {
    $this->db->where("id",$id);
    $data = $this->db->get("v_kematian");
    $data = $data->row_array();
   // echo "<pre>"; print_r($data); echo "</pre>";
    $data['controller'] = get_class($this);
    $data['header'] = "Detail Surat kematian";
    $data['title'] = $data['header'];
    $content = $this->load->view($data['controller']."_detail_view",$data,true);
    $this->set_title($data['header']);
    $this->set_content($content);
    $this->render();
}
function cetak($id) {
	 
    $this->db->where("id",$id);
	$jenis_cetak = $this->uri->segment(4);
    $data = $this->db->get("v_kematian");
	 
    $data = $data->row_array();
     $data['controller'] = get_class($this);
	 $data['jenis_cetak'] = $jenis_cetak;
    $data['header'] = "Data Surat kematian";
    $data['title'] = $data['header'];
	if($jenis_cetak =="luar"){
		$this->load->view($data['controller']."_print_luar_view",$data);
	}
	else {
		$this->load->view($data['controller']."_print_desa_view",$data);
	}
    
}


// function pdf($id) {
     
//     $this->db->where("id",$id);
//     $jenis_cetak = $this->uri->segment(4);
//     $data = $this->db->get("surat_kematian_1");
     
//     $data = $data->row_array();
//     ///echo "<pre>";    print_r($data); echo "</pre>"; exit; 
//      $data['controller'] = get_class($this);
//      $data['jenis_cetak'] = $jenis_cetak;
//     $data['header'] = "Data Surat kematian";
//     $data['title'] = $data['header'];
    

    
    

//     $this->load->library('Pdf');
//         $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
//         $pdf->SetTitle( $data['header']);       
//         $pdf->SetMargins(10, 10, 10);
//         $pdf->SetHeaderMargin(10);
//         $pdf->SetFooterMargin(10);
//         $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

//         $pdf->SetAutoPageBreak(true,10);
//         $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
//         $pdf->setPrintHeader(false);
//         $pdf->setPrintFooter(true);

//          // add a page
//         $pdf->AddPage('P');


         


//          // $html = $this->load->view("pdf/statistik_penduduk_bulanan_pdf",$data,true);
//          // $pdf->writeHTML($html, true, false, true, false, '');

//            if($jenis_cetak =="luar"){
//              $html =    $this->load->view("pdf/surat_kematian_pdf_keluar_view",$data,true);
//             }
//             else {
//             $html =     $this->load->view("pdf/surat_kematian_pdf_desa_view",$data,true);
//             }


 
//          //echo $html; exit;
//          // $html = $this->load->view("pdf_ttd",$data,true);
//           $pdf->writeHTML($html, true, false, true, false, '');      
 

//          $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');


// }
function pdf($id) {
    $this->db->select('*')->from('surat_kematian_1 ')
     
        ->where("id",$id);

    $data = $this->db->get();

    $data = $data->row_array();
    $data['controller'] = get_class($this);
    $data['header'] = "Surat Kematian";
    $data['title'] = $data['header'];
    $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
     
        $pdf->SetMargins(25, 20, 20);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

         // add a page
        $pdf->AddPage('P');

 

         $html = $this->load->view("pdf/surat_kematian_pdf_view_old",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');

 
         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');
}

function pdf_kematian($id) {
    $this->db->select('*')->from('surat_kematian_1 ')
     
    ->where("id",$id);

    $data = $this->db->get();

    $data = $data->row_array();
    $data['controller'] = get_class($this);
    $data['header'] = "Surat Kematian";
    $data['title'] = $data['header'];
    $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
     
        $pdf->SetMargins(25, 20, 20);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

         // add a page
        $pdf->AddPage('P');

 

         $html = $this->load->view("pdf/surat_kematian_pdf_view_old",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');

 
         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');
}

function pdf_formulir($id) {
    $this->db->select('*')->from('surat_kematian_1 ')
     
        ->where("id",$id);

    $data = $this->db->get();

    $data = $data->row_array();
    $data['controller'] = get_class($this);
    $data['header'] = "Formulir Pelaporan Kematian";
    $data['title'] = $data['header'];
    $this->load->library('Pdf');
        $pdf = new Pdf('P', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
     
        $pdf->SetMargins(25, 20, 20);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

         // add a page
        $pdf->AddPage('P');

 

         $html = $this->load->view("pdf/surat_kematian_pdf_view_formulir",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');

 
         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');
}



function word($id){
     $this->db->where("id",$id);
    $jenis_cetak = $this->uri->segment(4);
    $data = $this->db->get("surat_kematian_1");
     
    $data = $data->row_array();
    ///echo "<pre>";    print_r($data); echo "</pre>"; exit; 
     $data['controller'] = get_class($this);
     $data['jenis_cetak'] = $jenis_cetak;
    $data['header'] = "Data Surat kematian";
    $data['title'] = $data['header'];
    $html = $this->load->view("pdf/surat_kematian_pdf_view",$data,true);
    $this->load->helper('download');
    force_download("surat kematian.doc",$html);
}


function hapus(){
    $data = $this->input->post();
    $ids = explode(",", $data['ids']);
    foreach($ids as $id) {
		$this->db->where("id",$id);
		$xx = $this->db->get("surat_kematian_1")->row();
		
        $this->db->where("id",$id);
        $this->db->delete("surat_kematian_1");
		
		$this->db->where("id_penduduk",$xx->id_penduduk);
		$this->db->update("penduduk",array("hidup_mati"=>"1"));
    }
    echo json_encode(array("success"=>true,"pesan"=>"Berhasil dihapus"));
}

function excel($id) {
    $this->db->where("id",$id);
    $data = $this->db->get("surat_kematian_1");
    $data = $data->row_array();
   // print_r($data);
   // exit;
    extract($data);

    $desa2 = $this->cm->data_desa();

    $this->load->library('Excel');
    $this->excel->setActiveSheetIndex(0);
    $this->excel->getActiveSheet()->setTitle('KeteranganLahir');
    $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(8);
    $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(8);
    $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(3);
    $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
    $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(8);
    $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(8);
    $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(3);
    $this->excel->getActiveSheet()->getColumnDimension('h')->setWidth(35);
    
    $arr_kolom = array('i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','aa',
        'ab','ac','ad');
    foreach($arr_kolom as $kolom) {
        $this->excel->getActiveSheet()->getColumnDimension($kolom)->setWidth(3);    
    }

    $this->excel->getActiveSheet()->getColumnDimension('ae')->setWidth(8);
    $this->excel->getActiveSheet()->getColumnDimension('af')->setWidth(8);
    $this->excel->getActiveSheet()->getColumnDimension('ag')->setWidth(8);
    $this->excel->getActiveSheet()->getColumnDimension('ah')->setWidth(8);
    $this->excel->getActiveSheet()->getColumnDimension('ai')->setWidth(3);
    $this->excel->getActiveSheet()->getColumnDimension('aj')->setWidth(35);

     


    $baris = 1; 

    $this->excel->getActiveSheet()
            ->setCellValue('A'.$baris,  "Kode: F.2.02");
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Pemerintah ". $desa2->kota  );
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Kecamatan ". $desa2->kecamatan  );
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  $desa2->bentuk_lembaga." ".$desa2->desa );
    $baris++;
    $baris++;

    
    $this->excel->getActiveSheet()->mergeCells('A'.$baris.':d'.$baris);
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris, "ARSIP UNTUK ".$desa2->bentuk_lembaga );
    $baris++;
    $baris++;
    
    $this->excel->getActiveSheet()->mergeCells('A'.$baris.':d'.$baris);
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris, "SURAT KETERANGAN KEMATIAN" );
    $baris++;

    $this->excel->getActiveSheet()->mergeCells('A'.$baris.':d'.$baris);
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris, "No. ". $no_surat );
    $baris++; $baris++;


    $this->excel->getActiveSheet()
            ->setCellValue('b'.$baris,  "Yang bertandatanga di bawah ini, " );
    $baris++;
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Menerangkan bahwa : " );
    $baris++;     

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Nama lengkap  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris,  $nama);
    $baris++;     

     $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "NIK   " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris,  $nik);
    $baris++;   
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Jenis kelamin   " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris,  $jk);
    $baris++;  
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Tgl Lahir / Umur " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $tgl_lahir . " ". $this->am->umur($tgl_lahir) );
    $baris++; 
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Agama" )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $agama );
    $baris++; 

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Alamat" )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $alamat );
    $baris++; 



    $baris++;
    $arr_jk = $this->cm->arr_jk;
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Telah meninggal dunia pada :  " . $arr_jk[$jk] );     
    $baris++; 

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Hari  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris,  $this->am->hari($tgl_meninggal) );             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Tanggal " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, flipdate($tgl_meninggal));             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Bertempat di  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris,  $tmp_meninggal);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Penyebab kematian  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $penyebab_kematian);             
    $baris++;
 
    $this->excel->getActiveSheet()
            
            ->setCellValue('b'.$baris,  "Surat keterangan ini dibuat berdasarkan " );
    $baris++;
    $this->excel->getActiveSheet()
            
            ->setCellValue('b'.$baris,  "keterangan pelapor" );
    $baris++;
    $baris++;

     $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Nama Lengkap  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $pelapor_nama);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "NIK  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $pelapor_nik);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Umur  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $this->am->umur($pelapor_tgl_lahir)." Tahun");             
    $baris++;
 
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Pekerjaan  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $pelapor_pekerjaan);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Alamat  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $pelapor_alamat);             
    $baris++; 

    $arr_hubungan = $this->cm->arr_hubungan;
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Hub. dengan pelapor  dengan yang mati " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $arr_hubungan[$hubungan_pelapor]);             
    $baris++; 

    $baris++;
    $baris +=2;


    $this->excel->getActiveSheet()
    ->setCellValue('d'.$baris, $desa2->desa.", ".$tanggal );  
 
    $baris++;
   
    $this->excel->getActiveSheet()
    ->setCellValue('d'.$baris, $ttd_jabatan ." ". $desa2->bentuk_lembaga  );
    
     $baris++; $baris++; $baris++;
     $this->excel->getActiveSheet()
    ->setCellValue('d'.$baris, $ttd_nama );
     $baris++;

//                    _______________
// __________________/ BAGIAN TENGAH \____________
// |                   Love you So mUch ..     

 
    $baris = 1; 

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "Kode: F.2.02");
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "Pemerintah Kabupaten ". $desa2->kota  );
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "Kecamatan ". $desa2->kecamatan  );
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  $desa2->bentuk_lembaga." ".$desa2->desa );
    $baris++;
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "Arsip untuk kecamatan / Perekaman data" );
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "SURAT KETERANGAN KEMATIAN DI LUAR DOMISILI" );
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "Nomor : ". $no_surat );
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "Nama kepala Keluarga  ")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $ayah_nama);
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "Nomor Kartu Keluarga  ")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $this->am->no_kk($ayah_nik));
    $baris++;
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "JENAZAH" );
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "1")
            ->setCellValue('h'.$baris,  "NIK ")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $nama);
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "2")
            ->setCellValue('h'.$baris,  "Nama Lengkap")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $nama);
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "3")
            ->setCellValue('h'.$baris,  "jenis Kelamin")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $jk);
    $baris++;


    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "4")
            ->setCellValue('h'.$baris,  "Tanggal Lahir / Umur")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $tgl_lahir . " / ". $this->am->umur($tgl_lahir) );
    $baris++;
     $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "5")
            ->setCellValue('h'.$baris,  "Tempat Lahir")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $tmp_lahir);
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "6")
            ->setCellValue('h'.$baris,  "Agama")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $agama);
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "7")
            ->setCellValue('h'.$baris,  "Pekerjaan")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $pekerjaan);
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "8")
            ->setCellValue('h'.$baris,  "Alamat")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  "a. ". $desa2->bentuk_lembaga." ".$desa)
            ->setCellValue('v'.$baris,  "c. ". "Kecamatan ". $kecamatan)
            ->setCellValue('j'.($baris+1),  "b. ". $kota)
            ->setCellValue('v'.($baris+1),  "d. ". "Privinsi ". $provinsi)
            ;
    $baris++;
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "9")
            ->setCellValue('h'.$baris,  "Kewarganegaraan")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $warga_negara);
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "10")
            ->setCellValue('h'.$baris,  "Keturunan")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $keturunan);
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "11")
            ->setCellValue('h'.$baris,  "Kebangsaan")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $kebangsaan);
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "12")
            ->setCellValue('h'.$baris,  "Anak ke ")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  "");
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "13")
            ->setCellValue('h'.$baris,  "Tanggal kematian")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  flipdate($tgl_meninggal));
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "14")
            ->setCellValue('h'.$baris,  "Pukul")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $jam_meninggal);
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "15")
            ->setCellValue('h'.$baris,  "Sebab Kematian")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $penyebab_kematian);
    $baris++;

   $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "16")
            ->setCellValue('h'.$baris,  "Tempat Kematian")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $tmp_meninggal);
    $baris++;

   $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "17")
            ->setCellValue('h'.$baris,  "Yang Menerangkan")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $yang_menerangkan);
    $baris++;

//  //             __________________
// ///____________/ ayah 
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "AYAH" );
    $baris++;
     $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "1")
            ->setCellValue('h'.$baris,  "Nama")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $ayah_nama);
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "2")
            ->setCellValue('h'.$baris,  "NIK")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  "'$ayah_nik");
    $baris++;
	//echo "tgl lahir ayah ".$ayah_tgl_lahir. "<br />";
	///exit;
	//exit;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "3")
            ->setCellValue('h'.$baris,  "Umur")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  !empty($ayah_tgl_lahir)?$this->am->umur(flipdate($ayah_tgl_lahir))." Tahun":"");
    $baris++;
	//exit;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "4")
            ->setCellValue('h'.$baris,  "Pekerjaan")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $ayah_pekerjaan);
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "5")
            ->setCellValue('h'.$baris,  "Alamat")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  "a. ". $desa2->bentuk_lembaga." ".$ayah_desa)
            ->setCellValue('v'.$baris,  "c. ". "Kecamatan ". $ayah_kecamatan)
            ->setCellValue('j'.($baris+1),  "b. ".  $ayah_kota)
            ->setCellValue('v'.($baris+1),  "d. ". "Privinsi ". $ayah_provinsi)
            ;
    $baris++;
    $baris++;


/// ibu 
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "IBU" );
    $baris++;
     $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "1")
            ->setCellValue('h'.$baris,  "Nama")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $ibu_nama);
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "2")
            ->setCellValue('h'.$baris,  "NIK")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  "'$ibu_nik");
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "3")
            ->setCellValue('h'.$baris,  "Umur")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $this->am->umur(flipdate($ibu_tgl_lahir))." Tahun");
    $baris++;
	 
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "4")
            ->setCellValue('h'.$baris,  "Pekerjaan")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $ibu_pekerjaan);
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "5")
            ->setCellValue('h'.$baris,  "Alamat")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  "a. ". $desa2->bentuk_lembaga." ".$ibu_desa)
            ->setCellValue('v'.$baris,  "c. ". "Kecamatan ". $ibu_kecamatan)
            ->setCellValue('j'.($baris+1),  "b. ". $ibu_kota)
            ->setCellValue('v'.($baris+1),  "d. ". "Privinsi ". $ibu_provinsi)
            ;
    $baris++;
    $baris++;
 




 

//                          /
    // _____________________| Section saksi 
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "Saksi I " );
    $baris++;
     $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "1")
            ->setCellValue('h'.$baris,  "NIK")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  "'$saksi1_nik");
    $baris++;
     $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "2")
            ->setCellValue('h'.$baris,  "Nama Lengkap")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $saksi1_nama);
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "Saksi II " );
    $baris++;
     $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "1")
            ->setCellValue('h'.$baris,  "NIK")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  "'$saksi2_nik");
    $baris++;
     $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "2")
            ->setCellValue('h'.$baris,  "Nama Lengkap")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  "'$saksi2_nama");
    $baris++;
    $baris +=4;

    $this->excel->getActiveSheet()
    ->setCellValue('w'.$baris, $desa2->desa.", ".$tanggal );  
 
    $baris++;
   
    $this->excel->getActiveSheet()
    ->setCellValue('w'.$baris, $ttd_jabatan ." ". $desa2->bentuk_lembaga  );
    
     $baris++; $baris++; $baris++;
     $this->excel->getActiveSheet()
    ->setCellValue('w'.$baris, $ttd_nama );
     $baris++;
  
//                        ____________________________
//     __________________/  BAGIAN KANAN 

$baris = 1; 

    $this->excel->getActiveSheet()
            ->setCellValue('Ag'.$baris,  "Kode: F.2.02");
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Pemerintah ". $desa2->kota  );
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Kecamatan ". $desa2->kecamatan  );
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  $desa2->bentuk_lembaga." ".$desa2->desa );
    $baris++;
    $baris++;

    
    $this->excel->getActiveSheet()->mergeCells('A'.$baris.':d'.$baris);
    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris, "ARSIP UNTUK YANG BERSANGKUTAN " );
    $baris++;
    $baris++;
    
    $this->excel->getActiveSheet()->mergeCells('A'.$baris.':d'.$baris);
    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris, "SURAT KETERANGAN kematian" );
    $baris++;

    $this->excel->getActiveSheet()->mergeCells('A'.$baris.':d'.$baris);
    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris, "No. ". $no_surat );
    $baris++; $baris++;


    $this->excel->getActiveSheet()
            ->setCellValue('ai'.$baris,  "Yang bertandatanga di bawah ini, " );
    $baris++;
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Menerangkan bahwa : " );
    $baris++;     

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Nama lengkap  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris,  $nama);
    $baris++;     

     $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "NIK   " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris,  $nik);
    $baris++;   
    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Jenis kelamin   " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris,  $jk);
    $baris++;  
    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Tgl Lahir / Umur " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $tgl_lahir . " ". $this->am->umur($tgl_lahir) );
    $baris++; 
     $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Agama" )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $agama );
    $baris++; 

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Alamat" )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $alamat );
    $baris++; 



    $baris++;
    $arr_jk = $this->cm->arr_jk;
    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Telah meninggal dunia pada :  " . $arr_jk[$jk] );     
    $baris++; 

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Hari  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris,  $this->am->hari($tgl_meninggal) );             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Tanggal " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, flipdate($tgl_meninggal));             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Bertempat di  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris,  $tmp_meninggal);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Penyebab kematian  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $penyebab_kematian);             
    $baris++;
 
    $this->excel->getActiveSheet()
            
            ->setCellValue('ai'.$baris,  "Surat keterangan ini dibuat berdasarkan " );
    $baris++;
    $this->excel->getActiveSheet()
            
            ->setCellValue('ai'.$baris,  "keterangan pelapor" );
    $baris++;
    $baris++;

     $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Nama Lengkap  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $pelapor_nama);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "NIK  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $pelapor_nik);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Umur  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $this->am->umur($pelapor_tgl_lahir)." Tahun");             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Pekerjaan  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $pelapor_pekerjaan);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Alamat  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $pelapor_alamat);             
    $baris++; 

    $arr_hubungan = $this->cm->arr_hubungan;
    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Hub. dengan pelapor  dengan yang mati " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $arr_hubungan[$hubungan_pelapor]);             
    $baris++; 

    $baris++;
    $baris +=2;
 
    $this->excel->getActiveSheet()
    ->setCellValue('aj'.$baris, $desa2->desa.", ".$tanggal );  
 
    $baris++;
   
    $this->excel->getActiveSheet()
    ->setCellValue('aj'.$baris, $ttd_jabatan ." ". $desa2->bentuk_lembaga  );
    
     $baris++; $baris++; $baris++;
     $this->excel->getActiveSheet()
    ->setCellValue('aj'.$baris, $ttd_nama );
     $baris++;

 
    $filename = "Surat Keterangan Kematian.xls";

 
    header('Content-Type: application/vnd.ms-excel'); //mime type
    header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
    header('Cache-Control: max-age=0'); //no cache
                  
     //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
     //if you want to save it as .XLSX Excel 2007 format
    $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');  
     //force user to download the Excel file without writing it to server's HD
    $objWriter->save('php://output');
}


}
?>