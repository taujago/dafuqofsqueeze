<?php 
class surat_asal_usul_mempelai extends op_controller {
	function __construct(){
		parent::__construct();
		$this->load->model("core_model","cm");
		$this->load->model("m_surat_asal_usul_mempelai","dm");
        $this->load->model("add_model","am");
		//$this->load->helper("tanggal");
        $this->load->helper(array("tanggal","file","download"));
	}


	function index(){
		$data['controller'] = get_class($this);
		$data['header'] = "Data Surat Pengantar Nikah";
        $data['arr_warga_negara']  = $this->cm->arr_warga_negara;
		$content = $this->load->view($data['controller']."_view",$data,true);
		$this->set_title($data['header']);
		$this->set_content($content);
		$this->render();
	}

	function get_data(){
    	$page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"tanggal_surat"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"desc"; // get the direction if(!$sidx) $sidx =1;  
        $nama = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $istri_nama = isset($_REQUEST['search_istri_nama'])?$_REQUEST['search_istri_nama']:"x";
        $suami_nama = isset($_REQUEST['search_suami_nama'])?$_REQUEST['search_suami_nama']:"x";
        $ayah_suami_nama = isset($_REQUEST['search_ayah_suami_nama'])?$_REQUEST['search_ayah_suami_nama']:"x";
        $ibu_suami_nama = isset($_REQUEST['search_ibu_suami_nama'])?$_REQUEST['search_ibu_suami_nama']:"x";
        $jk = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";
        /*$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        $id_desa =  isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
        $dusun =  isset($_REQUEST['search_dusun'])?$_REQUEST['search_dusun']:"x"; */
       
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null ,
              
                "istri_nama"  => $istri_nama,
                "suami_nama" => $suami_nama,
                 "ayah_suami_nama" => $ayah_suami_nama,
                  "ibu_suami_nama" => $ibu_suami_nama,
             
 
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
            $responce->rows[$i]['id_penduduk']  = $result[$i]['id_penduduk'] ;
            $responce->rows[$i]['no_surat']     = $result[$i]['no_surat'];   
             $responce->rows[$i]['no_surat_asal_usul']     = $result[$i]['no_surat_asal_usul'];   
              $responce->rows[$i]['no_surat_orang_tua']     = $result[$i]['no_surat_orang_tua']; 
              $responce->rows[$i]['no_izin_orang_tua']     = $result[$i]['no_izin_orang_tua'];    
              $responce->rows[$i]['tanggal_surat']     = flipdate($result[$i]['tanggal_surat']) ;   
           
        
			$responce->rows[$i]['suami_nik']	= $result[$i]['suami_nik'] ;  
			$responce->rows[$i]['suami_nama']	= $result[$i]['suami_nama'] ;
            $responce->rows[$i]['suami_jk']   = $result[$i]['suami_jk'] ;
            $responce->rows[$i]['suami_tempat_lahir']   = $result[$i]['suami_tempat_lahir'] ;  
            $responce->rows[$i]['suami_tanggal_lahir']     = flipdate($result[$i]['suami_tanggal_lahir']) ;
            $responce->rows[$i]['suami_agama']   = $result[$i]['suami_agama'] ;
            $responce->rows[$i]['suami_warga_negara']   = $result[$i]['suami_warga_negara'] ;
            $responce->rows[$i]['suami_pekerjaan']   = $result[$i]['suami_pekerjaan'] ;
            $responce->rows[$i]['suami_alamat']   = $result[$i]['suami_alamat'] ;
            $responce->rows[$i]['suami_rt']   = $result[$i]['suami_rt'] ;
            $responce->rows[$i]['suami_rw']   = $result[$i]['suami_rw'] ;
            $responce->rows[$i]['suami_desa']   = $result[$i]['suami_desa'] ;
            $responce->rows[$i]['suami_kecamatan']   = $result[$i]['suami_kecamatan'] ;
            $responce->rows[$i]['suami_kota']   = $result[$i]['suami_kota'] ;
            $responce->rows[$i]['suami_provinsi']   = $result[$i]['suami_provinsi'] ;
             $responce->rows[$i]['ket_pria']   = $result[$i]['ket_pria'] ;
              $responce->rows[$i]['ket_wanita']   = $result[$i]['ket_wanita'] ;
               $responce->rows[$i]['nama_mantan']   = $result[$i]['nama_mantan'] ;


               $responce->rows[$i]['calon_nik'] = $result[$i]['calon_nik'] ;  
            $responce->rows[$i]['calon_nama']   = $result[$i]['calon_nama'] ;
            $responce->rows[$i]['calon_ayah']   = $result[$i]['calon_ayah'] ;
            $responce->rows[$i]['calon_tmp_lahir']   = $result[$i]['calon_tmp_lahir'] ;  
            $responce->rows[$i]['calon_tgl_lahir']     = flipdate($result[$i]['calon_tgl_lahir']) ;
            $responce->rows[$i]['calon_agama']   = $result[$i]['calon_agama'] ;
            $responce->rows[$i]['calon_warga_negara']   = $result[$i]['calon_warga_negara'] ;
            $responce->rows[$i]['calon_pekerjaan']   = $result[$i]['calon_pekerjaan'] ;
            $responce->rows[$i]['calon_tmp_tinggal']   = $result[$i]['calon_tmp_tinggal'] ;


            $responce->rows[$i]['ayah_suami_nama']       = $result[$i]['ayah_suami_nama'] ; 
            $responce->rows[$i]['ayah_suami_nik']        = $result[$i]['ayah_suami_nik'] ; 
            $responce->rows[$i]['ayah_suami_warga_negara']   = $result[$i]['ayah_suami_warga_negara'] ;
            $responce->rows[$i]['ayah_suami_alamat']   = $result[$i]['ayah_suami_alamat'] ;
            $responce->rows[$i]['ayah_suami_desa']   = $result[$i]['ayah_suami_desa'] ;
            $responce->rows[$i]['ayah_suami_kecamatan']   = $result[$i]['ayah_suami_kecamatan'] ;
            $responce->rows[$i]['ayah_suami_kota']   = $result[$i]['ayah_suami_kota'] ;
            $responce->rows[$i]['ayah_suami_provinsi']   = $result[$i]['ayah_suami_provinsi'] ;
            $responce->rows[$i]['ayah_suami_tanggal_lahir']   = flipdate($result[$i]['ayah_suami_tanggal_lahir']) ;
            $responce->rows[$i]['ayah_suami_tempat_lahir']   = $result[$i]['ayah_suami_tempat_lahir'] ;
            $responce->rows[$i]['ayah_suami_pekerjaan']   = $result[$i]['ayah_suami_pekerjaan'] ;
            $responce->rows[$i]['ayah_suami_agama']   = $result[$i]['ayah_suami_agama'] ;
             $responce->rows[$i]['ayah_suami_rt']   = $result[$i]['ayah_suami_rt'] ;
              $responce->rows[$i]['ayah_suami_rw']   = $result[$i]['ayah_suami_rw'] ;

            $responce->rows[$i]['ibu_suami_nama']       = $result[$i]['ibu_suami_nama'] ; 
            $responce->rows[$i]['ibu_suami_nik']        = $result[$i]['ibu_suami_nik'] ; 
            $responce->rows[$i]['ibu_suami_warga_negara']   = $result[$i]['ibu_suami_warga_negara'] ;
            $responce->rows[$i]['ibu_suami_alamat']   = $result[$i]['ibu_suami_alamat'] ;
            $responce->rows[$i]['ibu_suami_desa']   = $result[$i]['ibu_suami_desa'] ;
            $responce->rows[$i]['ibu_suami_kecamatan']   = $result[$i]['ibu_suami_kecamatan'] ;
            $responce->rows[$i]['ibu_suami_kota']   = $result[$i]['ibu_suami_kota'] ;
            $responce->rows[$i]['ibu_suami_provinsi']   = $result[$i]['ibu_suami_provinsi'] ;
            $responce->rows[$i]['ibu_suami_tanggal_lahir']   = flipdate($result[$i]['ibu_suami_tanggal_lahir']) ;
            $responce->rows[$i]['ibu_suami_tempat_lahir']   = $result[$i]['ibu_suami_tempat_lahir'] ;
            $responce->rows[$i]['ibu_suami_pekerjaan']   = $result[$i]['ibu_suami_pekerjaan'] ;
            $responce->rows[$i]['ibu_suami_agama']   = $result[$i]['ibu_suami_agama'] ;
             $responce->rows[$i]['ibu_suami_rt']   = $result[$i]['ibu_suami_rt'] ;
              $responce->rows[$i]['ibu_suami_rw']   = $result[$i]['ibu_suami_rw'] ;


            $responce->rows[$i]['ttd']          = $result[$i]['ttd'] ; 
            $responce->rows[$i]['nip']          = $result[$i]['nip'] ; 
            $responce->rows[$i]['penandatangan_nama']          = $result[$i]['ttd_nama'] ; 
            $responce->rows[$i]['pangkat']          = $result[$i]['pangkat'] ; 
            $responce->rows[$i]['penandatangan_jabatan']          = $result[$i]['ttd_jabatan'] ; 



        } }
		//echo "<hr />";
        echo json_encode($responce); 
    }




    function cek_nik($nik) {
        $this->db->where("nik",$nik);
        $baris = $this->db->get("penduduk")->num_rows();
        if($baris == 0){
             $this->form_validation->set_message('cek_nik', '    %s  tidak ada ');
             return false;
        }
    }


    function save(){
        $data = $this->input->post();

        $this->load->library('form_validation');
     
        // $this->form_validation->set_rules('ayah_nik','Bapak ','required');
        
        $this->form_validation->set_rules('ttd','Penandatangan','required');

        $this->form_validation->set_rules('suami_nik','NIK Suami','callback_cek_nik');
        // $this->form_validation->set_rules('calon_nik','NIK Calon','callback_cek_nik');
       
        // $this->form_validation->set_rules('ayah_suami_nik','NIK Ayah Suami','callback_cek_nik');
        // $this->form_validation->set_rules('ayah_suami_nik','NIK Ayah Suami','callback_cek_nik');
        $this->form_validation->set_rules('ibu_suami_nik','NIK Ibu Suami','callback_cek_nik');
       
       
        $this->form_validation->set_rules('ibu_suami_nik','NIK Ibu Suami','callback_cek_nik');
        
      
        $this->form_validation->set_message('required', ' %s Harus diisi '); 
        $this->form_validation->set_message('numeric', ' %s Harus diisi dengan angka ');
        $this->form_validation->set_message('alpha', ' %s Harus diisi dengan huruf ');
        
        


        $this->form_validation->set_error_delimiters("* ", '<br>');
        if($this->form_validation->run() == TRUE) {


        $data['suami_tanggal_lahir'] = flipdate($data['suami_tanggal_lahir']);
        $data['calon_tgl_lahir'] = flipdate($data['calon_tgl_lahir']);
        $data['ayah_suami_tanggal_lahir'] = flipdate($data['ayah_suami_tanggal_lahir']);
        $data['ibu_suami_tanggal_lahir'] = flipdate($data['ibu_suami_tanggal_lahir']);
         $data['tanggal_surat'] = flipdate($data['tanggal_surat']);

   
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
                         $data['ttd_jabatan'] = "Sekretaris Gampong";
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
            
                




                $xx = $this->db->insert("surat_asal_usul_mempelai",$data);
                // echo $this->db->last_query();  
                // echo mysql_error();
                if($xx) {
                   //echo $this->db->last_query() . 
                    $ret = array("success"=>true,
                            "pesan"=>"Data berhasil disimpan",
                            "operation" =>"insert");
               
				$this->cm->update_nomor_surat($data['no_surat']);
                
                $ret = array("success"=>true,
                            "pesan"=>"Data berhasil disimpan",
                            "operation" =>"insert");

                }

                else {
                  $ret = array("success"=>false,
                            "pesan"=>mysql_error(),
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
        
        $this->form_validation->set_rules('ttd','Penandatangan','required');

        $this->form_validation->set_rules('suami_nik','NIK Suami','callback_cek_nik');
       // $this->form_validation->set_rules('calon_nik','NIK Calon','callback_cek_nik');
        $this->form_validation->set_rules('ayah_suami_nik','NIK Ayah Suami','callback_cek_nik');
        $this->form_validation->set_rules('ayah_suami_nik','NIK Ayah Suami','callback_cek_nik');
        $this->form_validation->set_rules('ibu_suami_nik','NIK Ibu Suami','callback_cek_nik');
       
       
        $this->form_validation->set_rules('ibu_suami_nik','NIK Ibu Suami','callback_cek_nik');
        
      
        $this->form_validation->set_message('required', ' %s Harus diisi '); 
        $this->form_validation->set_message('numeric', ' %s Harus diisi dengan angka ');
        $this->form_validation->set_message('alpha', ' %s Harus diisi dengan huruf ');
        
        


        $this->form_validation->set_error_delimiters("* ", '<br>');
        if($this->form_validation->run() == TRUE) {


        $data['suami_tanggal_lahir'] = flipdate($data['suami_tanggal_lahir']);
         $data['calon_tgl_lahir'] = flipdate($data['calon_tgl_lahir']);
        $data['ayah_suami_tanggal_lahir'] = flipdate($data['ayah_suami_tanggal_lahir']);
        $data['ibu_suami_tanggal_lahir'] = flipdate($data['ibu_suami_tanggal_lahir']);
        $data['tanggal_surat'] = flipdate($data['tanggal_surat']);

   
        

           

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
                         $data['ttd_jabatan'] = "Sekretaris Gampong";
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
                $xx = $this->db->update("surat_asal_usul_mempelai",$data);
                // echo $this->db->last_query();  
                // echo mysql_error();
                if($xx) {
                   //echo $this->db->last_query() . 
                    $ret = array("success"=>true,
                            "pesan"=>"Data berhasil diupdate",
                            "operation" =>"insert");
               
                $this->cm->update_nomor_surat($data['no_surat']);
                
                $ret = array("success"=>true,
                            "pesan"=>"Data berhasil disimpan",
                            "operation" =>"insert");

                }

                else {
                  $ret = array("success"=>false,
                            "pesan"=>mysql_error(),
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
		$xx = $this->db->get("surat_asal_usul_mempelai")->row();
		
        $this->db->where("id",$id);
        $this->db->delete("surat_asal_usul_mempelai");
		//echo $this->db->last_query();
		
		$this->db->where("id_penduduk",$xx->id_penduduk);
		$this->db->delete("penduduk");
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
    $this->db->where("id",$id);
	$jenis_cetak = $this->uri->segment(4);
    $data = $this->db->get("surat_asal_usul_mempelai");
    $data = $data->row_array();
     $data['controller'] = get_class($this);
    $data['header'] = "Detail Surat Kelahiran";
    $data['title'] = $data['header'];
	 $this->load->view($data['controller']."_print_view",$data);
}

function pdf_asal_usul($id){

    // echo "fuck off " ; exit;

        $this->db->where("id",$id);
        $jenis_cetak = $this->uri->segment(4);
        $data = $this->db->get("surat_asal_usul_mempelai");
        $data = $data->row_array();
        // echo $this->db->last_query();
        // show_array($data);
         $data['controller'] = get_class($this);
        $data['header'] = "Detail Surat Keterangan Menikah";
        $data['title'] = $data['header'];
        $data['jenis_cetak'] = $jenis_cetak;
        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);       
        $pdf->SetMargins(25, 10, 20);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', '9'));

       // $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

         // add a page
        $pdf->AddPage('P');

        $html = $this->load->view("pdf/surat_asal_usul_mempelai_pdf_view",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');   
 

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}

function pdf_nikah($id){

    // echo "fuck off " ; exit;

        $this->db->where("id",$id);
        $jenis_cetak = $this->uri->segment(4);
        $data = $this->db->get("surat_asal_usul_mempelai");
        $data = $data->row_array();
        // echo $this->db->last_query();
        // show_array($data);
         $data['controller'] = get_class($this);
        $data['header'] = "Detail Surat Keterangan Menikah";
        $data['title'] = $data['header'];
        $data['jenis_cetak'] = $jenis_cetak;
        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);       
        $pdf->SetMargins(25, 10, 20);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', '9'));

       // $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

         // add a page
        $pdf->AddPage('P');

        $html = $this->load->view("pdf/surat_keterangan_nikah_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');   
 

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}

function pdf_orang_tua($id){

    // echo "fuck off " ; exit;

        $this->db->where("id",$id);
        $jenis_cetak = $this->uri->segment(4);
        $data = $this->db->get("surat_asal_usul_mempelai");
        $data = $data->row_array();
        // echo $this->db->last_query();
        // show_array($data);
         $data['controller'] = get_class($this);
        $data['header'] = "Detail Surat Keterangan Menikah";
        $data['title'] = $data['header'];
        $data['jenis_cetak'] = $jenis_cetak;
        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);       
        $pdf->SetMargins(25, 10, 20);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', '9'));

       // $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

         // add a page
        $pdf->AddPage('P');

        $html = $this->load->view("pdf/surat_keterangan_orang_tua_pdf_view",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');   
 

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}

function pdf_setuju($id){

    // echo "fuck off " ; exit;

        $this->db->where("id",$id);
        $jenis_cetak = $this->uri->segment(4);
        $data = $this->db->get("surat_asal_usul_mempelai");
        $data = $data->row_array();
        // echo $this->db->last_query();
        // show_array($data);
         $data['controller'] = get_class($this);
        $data['header'] = "Detail Persetujuan Mempelai";
        $data['title'] = $data['header'];
        $data['jenis_cetak'] = $jenis_cetak;
        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);       
        $pdf->SetMargins(25, 10, 20);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', '9'));

       // $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

         // add a page
        $pdf->AddPage('P');

        $html = $this->load->view("pdf/surat_persetujuan_mempelai",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');   
 

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}


function pdf_izin_orang_tua($id){

    // echo "fuck off " ; exit;

        $this->db->where("id",$id);
        $jenis_cetak = $this->uri->segment(4);
        $data = $this->db->get("surat_asal_usul_mempelai");
        $data = $data->row_array();
        // echo $this->db->last_query();
        // show_array($data);
         $data['controller'] = get_class($this);
        $data['header'] = "Izin Orang Tua";
        $data['title'] = $data['header'];
        $data['jenis_cetak'] = $jenis_cetak;
        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);       
        $pdf->SetMargins(25, 10, 20);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', '9'));

       // $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

         // add a page
        $pdf->AddPage('P');

        $html = $this->load->view("pdf/surat_izin_orang_tua",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');   
 

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}


function word($id) {
        $this->db->select('*')->from('surat_asal_usul_mempelai ')
     //   ->join("v_penduduk2 p",'p.id_penduduk=skt.id_penduduk')
        ->where("id",$id);

    $data = $this->db->get();

    $data = $data->row_array();
    $data['controller'] = get_class($this);
    $data['header'] = "Surat Pengantar Nikah ";
    $data['title'] = $data['header'];
    $this->load->library('Pdf');
    $html = $this->load->view("pdf/surat_asal_usul_mempelai_pdf_view",$data,true);
    $this->load->helper('download');
    force_download("surat keterangan nikah.doc", $html);    
}


function excel($id) {
    $this->db->where("id",$id);
    $data = $this->db->get("v_kelahiran");
    $data = $data->row_array();
    extract($data);
    $desa = $this->cm->data_desa();

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
            ->setCellValue('a'.$baris,  "Pemerintah Kabupaten ". $desa->kota  );
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Kecamatan Tallunglipu ". $desa->kecamatan  );
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  $desa->bentuk_lembaga." ".$desa->desa );
    $baris++;
    $baris++;

    
    $this->excel->getActiveSheet()->mergeCells('A'.$baris.':d'.$baris);
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris, "ARSIP UNTUK ".$desa->bentuk_lembaga );
    $baris++;
    $baris++;
    
    $this->excel->getActiveSheet()->mergeCells('A'.$baris.':d'.$baris);
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris, "SURAT KETERANGAN KELAHIRAN" );
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
            ->setCellValue('a'.$baris,  "Hari  : " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris,  $this->am->hari(flipdate($tgl_lahir)));
    $baris++;     

     $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Tanggal  : " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris,  $tgl_lahir);
    $baris++;   
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Pukul  : " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris,  $jam_lahir);
    $baris++;  
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Tempat Kelahiran  : " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $tmp_kelahiran);
    $baris++; 
    $baris++;
    $arr_jk = $this->cm->arr_jk;
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Telah lahir seorang anak " . $arr_jk[$jk] );     
    $baris++; 

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Bernama : " . $nama );     
    $baris++; 
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Dari seorang ibu  ");     
    $baris++; 

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Nama Lengkap  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $ibu_nama);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "NIK  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $ibu_nik);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Umur  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $this->am->umur($ibu_tgl_lahir)." Tahun");             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Pekerjaan  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $ibu_pekerjaan);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Alamat  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $ibu_alamat);             
    $baris++;
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Istri dari  ");     
    $baris++; 

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Nama Lengkap  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $bapak_nama);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "NIK  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $bapak_nik);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Umur  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $this->am->umur($bapak_tgl_lahir)." Tahun");             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Pekerjaan  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $bapak_pekerjaan);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('a'.$baris,  "Alamat  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $bapak_alamat);             
    $baris++; $baris++;

     $this->excel->getActiveSheet()
            
            ->setCellValue('b'.$baris,  "Surat keterangan ini dibuat berdasarkan " );
    $baris++;
    $this->excel->getActiveSheet()
            
            ->setCellValue('b'.$baris,  "keterangan pelapor" );
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
            ->setCellValue('a'.$baris,  "Hub. dengan pelapor  " )
            ->setCellValue('c'.$baris,  ":" )
            ->setCellValue('d'.$baris, $arr_hubungan[$hubungan_pelapor]);             
    $baris++; 

    $baris++;
    $baris +=2;


    $this->excel->getActiveSheet()
    ->setCellValue('d'.$baris, $desa->desa.", ".$tanggal );  
 
    $baris++;
   
    $this->excel->getActiveSheet()
    ->setCellValue('d'.$baris, $ttd_jabatan ." ". $desa->bentuk_lembaga  );
    
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
            ->setCellValue('g'.$baris,  "Pemerintah Kabupaten ". $desa->kota  );
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "Kecamatan ". $desa->kecamatan  );
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  $desa->bentuk_lembaga." ".$desa->desa );
    $baris++;
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "Arsip untuk kecamatan / Perekaman data" );
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "SURAT KETERANGAN KELAHIRAN" );
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "Nomor : ". $no_surat );
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "Nama kepala Keluarga  ")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $bapak_nama);
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "Nomor Kartu Keluarga  ")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $this->am->no_kk($bapak_nik));
    $baris++;
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "BAYI" );
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "1")
            ->setCellValue('h'.$baris,  "Nama")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $nama);
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "2")
            ->setCellValue('h'.$baris,  "jenis Kelamin")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $jk);
    $baris++;


    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "3")
            ->setCellValue('h'.$baris,  "Tempat dilahirkan")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $tmp_kelahiran);
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "4")
            ->setCellValue('h'.$baris,  "Tempat Kelahiran")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $tmp_lahir);
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "5")
            ->setCellValue('h'.$baris,  "Hari dan tanggal lahir")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $this->am->hari(flipdate($tgl_lahir)).", ". $tgl_lahir);
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "6")
            ->setCellValue('h'.$baris,  "Pukul")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $jam_lahir);
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "7")
            ->setCellValue('h'.$baris,  "Kelahiran ke ")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $anak_ke);
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "8")
            ->setCellValue('h'.$baris,  "Penolong kelahiran ")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $penolong_kelahiran);
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "9")
            ->setCellValue('h'.$baris,  "Berat bayi ")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $berat." Kg");
    $baris++;
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "Ibu" );
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
            ->setCellValue('j'.$baris,  $this->am->umur($ibu_tgl_lahir)." Tahun");
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
            ->setCellValue('j'.$baris,  "a. ". $desa->bentuk_lembaga." ".$ibu_desa)
            ->setCellValue('v'.$baris,  "c. ". "Kecamatan ". $ibu_kecamatan)
            ->setCellValue('j'.($baris+1),  "b. ". "Kabupaten / Kota ". $ibu_kota)
            ->setCellValue('v'.($baris+1),  "d. ". "Privinsi ". $ibu_provinsi)
            ;
    $baris++;
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "6")
            ->setCellValue('h'.$baris,  "Kewarganegaraan")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $ibu_warga_negara);
    $baris++;
      $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "7")
            ->setCellValue('h'.$baris,  "Keturunan")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $ibu_keturunan);
    $baris++;

      $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "8")
            ->setCellValue('h'.$baris,  "Kebangsaan")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  "-");
    $baris++;

  $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "9")
            ->setCellValue('h'.$baris,  "Tgl. pencatatan pernikahan")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  flipdate($tgl_pernikahan));
    $baris++;



    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "Bapak" );
    $baris++;
     $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "1")
            ->setCellValue('h'.$baris,  "Nama")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $bapak_nama);
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "2")
            ->setCellValue('h'.$baris,  "NIK")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  "'$bapak_nik");
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "3")
            ->setCellValue('h'.$baris,  "Umur")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $this->am->umur($bapak_tgl_lahir)." Tahun");
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "4")
            ->setCellValue('h'.$baris,  "Pekerjaan")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $bapak_pekerjaan);
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "5")
            ->setCellValue('h'.$baris,  "Alamat")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  "a. ". $desa->bentuk_lembaga." ".$bapak_desa)
            ->setCellValue('v'.$baris,  "c. ". "Kecamatan ". $bapak_kecamatan)
            ->setCellValue('j'.($baris+1),  "b. ". "Kabupaten / Kota ". $bapak_kota)
            ->setCellValue('v'.($baris+1),  "d. ". "Privinsi ". $bapak_provinsi)
            ;
    $baris++;
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "6")
            ->setCellValue('h'.$baris,  "Kewarganegaraan")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $bapak_warga_negara);
    $baris++;
      $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "7")
            ->setCellValue('h'.$baris,  "Keturunan")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  $bapak_keturunan);
    $baris++;

      $this->excel->getActiveSheet()
            ->setCellValue('g'.$baris,  "8")
            ->setCellValue('h'.$baris,  "Kebangsaan")
            ->setCellValue('i'.$baris,  ":")
            ->setCellValue('j'.$baris,  "-");
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
            ->setCellValue('j'.$baris,  $saksi1_nik);
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
    ->setCellValue('w'.$baris, $desa->desa.", ".$tanggal );  
 
    $baris++;
   
    $this->excel->getActiveSheet()
    ->setCellValue('w'.$baris, $ttd_jabatan ." ". $desa->bentuk_lembaga  );
    
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
            ->setCellValue('ag'.$baris,  "Pemerintah Kabupaten ". $desa->kota  );
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Kecamatan Tallunglipu ". $desa->kecamatan  );
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  $desa->bentuk_lembaga." ".$desa->desa );
    $baris++;
    $baris++;

    
    $this->excel->getActiveSheet()->mergeCells('ag'.$baris.':ai'.$baris);
    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris, "ARSIP UNTUK ".$desa->bentuk_lembaga );
    $baris++;
    $baris++;
    
    $this->excel->getActiveSheet()->mergeCells('Ag'.$baris.':ai'.$baris);
    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris, "SURAT KETERANGAN KELAHIRAN" );
    $baris++;

    $this->excel->getActiveSheet()->mergeCells('Ag'.$baris.':ai'.$baris);
    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris, "No. ". $no_surat );
    $baris++; $baris++;


    $this->excel->getActiveSheet()
            ->setCellValue('ah'.$baris,  "Yang bertandatanga di bawah ini, " );
    $baris++;
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Menerangkan bahwa : " );
    $baris++;     

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Hari  : " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris,  $this->am->hari(flipdate($tgl_lahir)));
    $baris++;     

     $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Tanggal  : " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris,  $tgl_lahir);
    $baris++;   
    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Pukul  : " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris,  $jam_lahir);
    $baris++;  
    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Tempat Kelahiran  : " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $tmp_kelahiran);
    $baris++; 
    $baris++;
    $arr_jk = $this->cm->arr_jk;
    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Telah lahir seorang anak " . $arr_jk[$jk] );     
    $baris++; 

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Bernama : " . $nama );     
    $baris++; 
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Dari seorang ibu  ");     
    $baris++; 

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Nama Lengkap  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $ibu_nama);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "NIK  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $ibu_nik);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Umur  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $this->am->umur($ibu_tgl_lahir)." Tahun");             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Pekerjaan  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $ibu_pekerjaan);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Alamat  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $ibu_alamat);             
    $baris++;
    $baris++;
    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Istri dari  ");     
    $baris++; 

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Nama Lengkap  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $bapak_nama);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "NIK  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $bapak_nik);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Umur  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $this->am->umur($bapak_tgl_lahir)." Tahun");             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Pekerjaan  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $bapak_pekerjaan);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Alamat  " )
            ->setCellValue('ai'.$baris,  ":" )
            ->setCellValue('aj'.$baris, $bapak_alamat);             
    $baris++; $baris++;

     $this->excel->getActiveSheet()
            
            ->setCellValue('ah'.$baris,  "Surat keterangan ini dibuat berdasarkan " );
    $baris++;
    $this->excel->getActiveSheet()
            
            ->setCellValue('ah'.$baris,  "keterangan pelapor" );
    $baris++;
   

     $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Nama Lengkap  " )
            ->setCellValue('AI'.$baris,  ":" )
            ->setCellValue('AJ'.$baris, $pelapor_nama);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "NIK  " )
            ->setCellValue('AI'.$baris,  ":" )
            ->setCellValue('AJ'.$baris, $pelapor_nik);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Umur  " )
            ->setCellValue('AI'.$baris,  ":" )
            ->setCellValue('AJ'.$baris, $this->am->umur($pelapor_tgl_lahir)." Tahun");             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Pekerjaan  " )
            ->setCellValue('AI'.$baris,  ":" )
            ->setCellValue('AJ'.$baris, $pelapor_pekerjaan);             
    $baris++;

    $this->excel->getActiveSheet()
            ->setCellValue('ag'.$baris,  "Alamat  " )
            ->setCellValue('AI'.$baris,  ":" )
            ->setCellValue('AJ'.$baris, $pelapor_alamat);             
    $baris++; 

    $arr_hubungan = $this->cm->arr_hubungan;
    $this->excel->getActiveSheet()
            ->setCellValue('aG'.$baris,  "Hub. dengan pelapor  " )
            ->setCellValue('AI'.$baris,  ":" )
            ->setCellValue('AJ'.$baris, $arr_hubungan[$hubungan_pelapor]);             
    $baris++; 

    $baris++;
    $baris +=2;


    $this->excel->getActiveSheet()
    ->setCellValue('AJ'.$baris, $desa->desa.", ".$tanggal );  
 
    $baris++;
   
    $this->excel->getActiveSheet()
    ->setCellValue('AJ'.$baris, $ttd_jabatan ." ". $desa->bentuk_lembaga  );
    
     $baris++; $baris++; $baris++;
     $this->excel->getActiveSheet()
    ->setCellValue('AJ'.$baris, $ttd_nama );
     $baris++;    


    $filename = "Surat Keterangan Lahir.xls";

    //   exit;

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