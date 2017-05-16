<?php 
class formulir_kk_perubahan extends op_controller {
	function __construct(){
		parent::__construct();
		$this->load->model("core_model","cm");
		$this->load->model("m_formulir_kk_perubahan","dm");
        $this->load->model("add_model","am");
		$this->load->helper("tanggal");
	}



	function index(){
		$data['controller'] = get_class($this);
		$data['header'] = "Data Permohonan Perubahan KK  (F-1.16)";
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
        $pemohon_nama = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
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
                "pemohon_nama"  => $pemohon_nama,
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
            $responce->rows[$i]['id']			= $result[$i]['id'] ;
            $responce->rows[$i]['pemohon_nik']          = $result[$i]['pemohon_nik'] ;
            $responce->rows[$i]['no_surat']           = $result[$i]['no_surat'] ;
            $responce->rows[$i]['tanggal']      = flipdate($result[$i]['tanggal']) ;
            $responce->rows[$i]['id_penduduk']  = $result[$i]['id_penduduk'] ;
            $responce->rows[$i]['pemohon_nama']         = $result[$i]['pemohon_nama']; 

            $responce->rows[$i]['kk_diikuti_nik']       = $result[$i]['kk_diikuti_nik'];     
            $responce->rows[$i]['kk_diikuti_nama']  = $result[$i]['kk_diikuti_nama'] ;             
            $responce->rows[$i]['kk_diikuti_no_kk']  = $result[$i]['kk_diikuti_no_kk'] ;             
            $responce->rows[$i]['kk_diikuti_alamat']          = $result[$i]['kk_diikuti_alamat'] ; 
            $responce->rows[$i]['kk_diikuti_desa']          = $result[$i]['kk_diikuti_desa'] ; 
            $responce->rows[$i]['kk_diikuti_kecamatan']          = $result[$i]['kk_diikuti_kecamatan'] ; 
			$responce->rows[$i]['kk_diikuti_kota']          = $result[$i]['kk_diikuti_kota'] ; 
			$responce->rows[$i]['kk_diikuti_rt']          = $result[$i]['kk_diikuti_rt'] ; 
            $responce->rows[$i]['kk_diikuti_rw']          = $result[$i]['kk_diikuti_rw'] ; 
            $responce->rows[$i]['kk_diikuti_kode_pos']          = $result[$i]['kk_diikuti_kode_pos'] ; 
            $responce->rows[$i]['kk_diikuti_telepon']          = $result[$i]['kk_diikuti_telepon'] ; 

            $responce->rows[$i]['kk_diikuti_nik_sebelumnya']       = $result[$i]['kk_diikuti_nik_sebelumnya'];     
            $responce->rows[$i]['kk_diikuti_nama_sebelumnya']  = $result[$i]['kk_diikuti_nama_sebelumnya'] ;             
            $responce->rows[$i]['kk_diikuti_no_kk_sebelumnya']  = $result[$i]['kk_diikuti_no_kk_sebelumnya'] ;             
            $responce->rows[$i]['kk_diikuti_alamat_sebelumnya']          = $result[$i]['kk_diikuti_alamat_sebelumnya'] ; 
            $responce->rows[$i]['kk_diikuti_desa_sebelumnya']          = $result[$i]['kk_diikuti_desa_sebelumnya'] ; 
            $responce->rows[$i]['kk_diikuti_kecamatan_sebelumnya']          = $result[$i]['kk_diikuti_kecamatan_sebelumnya'] ; 
            $responce->rows[$i]['kk_diikuti_kota_sebelumnya']          = $result[$i]['kk_diikuti_kota_sebelumnya'] ; 
            $responce->rows[$i]['kk_diikuti_rt_sebelumnya']          = $result[$i]['kk_diikuti_rt_sebelumnya'] ; 
            $responce->rows[$i]['kk_diikuti_rw_sebelumnya']          = $result[$i]['kk_diikuti_rw_sebelumnya'] ; 
            $responce->rows[$i]['kk_diikuti_kode_pos_sebelumnya']          = $result[$i]['kk_diikuti_kode_pos_sebelumnya'] ; 
            $responce->rows[$i]['kk_diikuti_telepon_sebelumnya']          = $result[$i]['kk_diikuti_telepon_sebelumnya'] ; 


            $responce->rows[$i]['ttd']          = $result[$i]['ttd'] ;
            $responce->rows[$i]['ttd_nama']          = $result[$i]['ttd_nama'] ;
            $responce->rows[$i]['ttd_jabatan']          = $result[$i]['ttd_jabatan'] ;
            $responce->rows[$i]['ttd_camat']          = $result[$i]['ttd_camat'] ; 

         
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
        $this->form_validation->set_rules('pemohon_nik','NIK Pemohon','required');    
		$this->form_validation->set_rules('kk_diikuti_nik','Nik KK Diikuti','required');  
		$this->form_validation->set_rules('kk_diikuti_nik_sebelumnya','Nik KK Lama ','required');
        $this->form_validation->set_rules('ttd','Penandatangan','required');              
        $this->form_validation->set_message('required', ' %s Harus diisi '); 
        $this->form_validation->set_message('numeric', ' %s Harus diisi dengan angka ');
        $this->form_validation->set_message('alpha', ' %s Harus diisi dengan huruf ');
        
        
        $this->form_validation->set_error_delimiters("* ", '<br>');
        if($this->form_validation->run() == TRUE) {

                $data['id'] = md5(date("Ymdhis"));
                $data['tanggal'] = date("Y-m-d");


               // $arr_data_pengikut['id_penduduk'] = $data['id_penduduk_pengikut'];
                //$arr_data_pengikut['hubungan'] =  $data['hubungan_pengikut'];
                if(isset($data['nik_pengikut'])) { 
                unset($data['nik_pengikut']); }
                if(isset($data['hubungan_pengikut'])) { 
                unset($data['hubungan_pengikut']); }

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
                
                
				

                $data['id_penduduk'] = $this->cm->get_id_penduduk($data['nik']);
                unset($data['nik']);

                $res = $this->db->insert("formulir_permohonan_kk_perubahan",$data);



                if($res) {    
                  //  echo "ini kenapa ? ";
                    // $this->db->where("id_penduduk",$data['id_penduduk']);
                    // $this->db->update("penduduk",array("status_kependudukan"=>"3"));



                $arr_data_pengikut_session = $this->session->userdata("arr_pengikut_kk_perubahan");
                //echo "<pre>";
                //print_r($arr_data_pengikut_session); echo "ss</pre>";
                //exit;
              //  echo  "Jumlah array " .count($arr_data_pengikut_session) ; 
                if( is_array($arr_data_pengikut_session) and  count($arr_data_pengikut_session)  > 0 ) { 
                    $i=0;
                    foreach($arr_data_pengikut_session as $id_penduduk => $hubungan) {
                        $i++;
                        $arr_tmp = array("id_penduduk"  => $id_penduduk,
                                         "hubungan"     => $hubungan,
                                         "id"           => $data['id'],
                                         "id_surat_detail" => md5(date("Ymdhis").$i)
                                         );
                       $res2=  $this->db->insert("formulir_permohonan_kk_perubahan_detail",$arr_tmp);
                       
                       // $this->db->where("id_penduduk",$arr_tmp['id_penduduk']);
                       // $this->db->update("penduduk",array("status_kependudukan"=>"3"));
                        
                       
                    } 
                    $this->session->unset_userdata("arr_pengikut_kk_perubahan");
                }
				// $this->cm->update_nomor_surat($data['no_surat']);
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
        $this->form_validation->set_rules('pemohon_nik','NIK Pemohon','required');    
        $this->form_validation->set_rules('kk_diikuti_nik','Nik KK Diikuti','required');  
        $this->form_validation->set_rules('kk_diikuti_nik_sebelumnya','Nik KK Lama ','required');
        $this->form_validation->set_message('required', ' %s Harus diisi '); 
        $this->form_validation->set_message('numeric', ' %s Harus diisi dengan angka ');
        $this->form_validation->set_message('alpha', ' %s Harus diisi dengan huruf ');
        
        
        $this->form_validation->set_error_delimiters("* ", '<br>');
        if($this->form_validation->run() == TRUE) {

                
                if(isset($data['nik_pengikut'])) { 
                unset($data['nik_pengikut']); }
                if(isset($data['hubungan_pengikut'])) { 
                unset($data['hubungan_pengikut']); }


                 $data['id_penduduk'] = $this->cm->get_id_penduduk($data['nik']);
                unset($data['nik']);

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

            
				$this->db->where("id",$data['id']);
				$xy = $this->db->get("formulir_permohonan_kk_perubahan")->row();
				// $this->db->where("id_penduduk",$xy->id_penduduk);
				// $this->db->update("penduduk",array("status_kependudukan"=>"0"));
				 
				$this->db->where("id",$data['id']);
                $res = $this->db->update("formulir_permohonan_kk_perubahan",$data);
                


                if($res) {    
                  //  echo "ini kenapa ? ";
                // $this->db->where("id_penduduk",$data['id_penduduk']);
                // $this->db->update("penduduk",array("status_kependudukan"=>"3"));

                $arr_data_pengikut_session = $this->session->userdata("arr_pengikut_kk_perubahan");
                //echo "<pre>";
                //print_r($arr_data_pengikut_session); echo "ss</pre>";
                //exit;
              //  echo  "Jumlah array " .count($arr_data_pengikut_session) ; 

                // kembalikan dulu. 
                // $sql="update penduduk set status_kependudukan='0' where id_penduduk  in 
                // (select id_penduduk from surat_pindah_detail where id='".$data['id']."' ) ";
				

                $this->db->query($sql);
				/*echo "query restoe ". $this->db->last_query();
				
				exit;*/


                $this->db->where("id",$data['id']);
                $this->db->delete("formulir_permohonan_kk_perubahan_detail");
                if( is_array($arr_data_pengikut_session) and  count($arr_data_pengikut_session)  > 0 ) { 
                    $i=0;
                    foreach($arr_data_pengikut_session as $id_penduduk => $hubungan) {
                        $i++;
                        $arr_tmp = array("id_penduduk"  => $id_penduduk,
                                         "hubungan"     => $hubungan,
                                         "id"           => $data['id'],
                                         "id_surat_detail" => md5(date("Ymdhis").$i)
                                         );
                       $res2=  $this->db->insert("formulir_permohonan_kk_perubahan_detail",$arr_tmp);
                       
                        // $this->db->where("id_penduduk",$arr_tmp['id_penduduk']);
                        // $this->db->update("penduduk",array("status_kependudukan"=>"3"));
                        
                       
                    } 
                    $this->session->unset_userdata("arr_pengikut_kk_perubahan");
                }

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


// function hapus(){
//     $data = $this->input->post();
//     $ids = explode(",", $data['ids']);
//     foreach($ids as $id) {
// 		// update data penduduk kembalikan ke status 0 
// 		$sql="update penduduk set status_kependudukan = '0' where id_penduduk in (SELECT id_penduduk FROM surat_pindah_detail 
// 				WHERE id ='$id'
// 				UNION 
// 				SELECT id_penduduk FROM surat_pindah WHERE id='$id')";
// 		$this->db->query($sql);
		
//         $this->db->where("id",$id);
//         $this->db->delete("surat_pindah");
//     }
//     echo json_encode(array("success"=>true,"pesan"=>"Berhasil dihapus"));
// }
function hapus(){
    $data = $this->input->post();
    $ids = explode(",", $data['ids']);
    foreach($ids as $id) {
        $this->db->where("id",$id);
        $this->db->delete("formulir_permohonan_kk_perubahan");
    }
    echo json_encode(array("success"=>true,"pesan"=>"Berhasil dihapus"));
}

 
function cetak($id) {
     
   $this->db->select('*')->from('formulir_permohonan_kk_perubahan')
        // ->join("v_penduduk2",'v_penduduk2.id_penduduk=sp.id_penduduk')
        // ->join("lokasi",'lokasi.id_desa=sp.pindah_id_desa')
        ->where("deleted","0")
        ->where("id",$id);

    $data = $this->db->get();

    $data = $data->row_array();
    $data['controller'] = get_class($this);
    $data['header'] = "Formulir Permohonan Perubahan KK (F-1.16)";
    $data['title'] = $data['header'];

    $this->db->select("*")->from("formulir_permohonan_kk_perubahan_detail spd")
    ->join("v_penduduk2 p",'spd.id_penduduk=p.id_penduduk')
    ->where("id",$data['id']);
    $res = $this->db->get();
    $data['record'] = $res;


    $this->db->select("*")->from("formulir_permohonan_kk_perubahan_detail spd")
    ->join("v_penduduk2 p",'spd.id_penduduk=p.id_penduduk')
    ->where("id",$data['id']);
    $total = $this->db->count_all_results();
    $data['jum'] = $total;

    $this->load->view($data['controller']."_print_view",$data);
   // $this->set_title($data['header']);
    //$this->set_content($content);
    //$this->render();
}
 


function pdf($id) {
   $this->db->select('sp.*,
    `v_penduduk2`.`id_penduduk`
    , `v_penduduk2`.`nik`
    , v_penduduk2.tmp_lahir
    , `v_penduduk2`.`nama`
    , `v_penduduk2`.`jk`
    , `v_penduduk2`.`tgl_lahir`
    , `v_penduduk2`.`tgl_lahir2`
    , `v_penduduk2`.`golongan_darah`
    , `v_penduduk2`.`id_agama`
    , `v_penduduk2`.`agama`
    , `v_penduduk2`.`pekerjaan`
    , `v_penduduk2`.`pendidikan`
    , `v_penduduk2`.`warga_negara`
    , `v_penduduk2`.`status_kawin`
    , `v_penduduk2`.`status`
    , `v_penduduk2`.`alamat`
    , `v_penduduk2`.`rt`
    , `v_penduduk2`.`rw`
    , `v_penduduk2`.`id_desa`
    , `v_penduduk2`.`desa`
    , `v_penduduk2`.`id_kecamatan`
    , `v_penduduk2`.`kecamatan`
    , `v_penduduk2`.`id_kota`
    , `v_penduduk2`.`kota`
    , `v_penduduk2`.`dusun`
    , `v_penduduk2`.`id_dusun`
    , `v_penduduk2`.`id_provinsi`
    , `v_penduduk2`.`no_paspor`
    , `v_penduduk2`.`provinsi`
    , `lokasi`.`desa` AS pindah_desa
    , `lokasi`.`id_kecamatan` AS  pindah_id_kecamatan
    , `lokasi`.`kecamatan` AS pindah_kecamatan
    , `lokasi`.`id_kota` AS pindah_id_kota
    , `lokasi`.`kota` AS pindah_kota
    , `lokasi`.`id_provinsi` AS pindah_id_provinsi
    , `lokasi`.`provinsi` AS pindah_provinsi')->from('surat_pindah sp ')
        ->join("v_penduduk2",'v_penduduk2.id_penduduk=sp.id_penduduk')
        ->join("lokasi",'lokasi.id_desa=sp.pindah_id_desa','left')
        ->where("deleted","0")
        ->where("id",$id);

    $data = $this->db->get();
    ///echo $this->db->last_query() ; exit; 
    $data = $data->row_array();
    $data['controller'] = get_class($this);
    $data['header'] = "Permohonan KK Baru";
    $data['title'] = $data['header'];

    $this->db->select("*")->from("surat_pindah_detail spd")
    ->join("v_penduduk2 p",'spd.id_penduduk=p.id_penduduk')
    ->where("id",$data['id']);
    $res = $this->db->get();
    $data['record'] = $res;

    $this->load->view($data['controller']."_print_view",$data);
    

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

 

         $html = $this->load->view("pdf/surat_pindah_pdf_view",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');

 
         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}

function word($id) {
    $this->db->select('sp.*,
    `v_penduduk2`.`id_penduduk`
    , `v_penduduk2`.`nik`
    , v_penduduk2.tmp_lahir
    , `v_penduduk2`.`nama`
    , `v_penduduk2`.`jk`
    , `v_penduduk2`.`tgl_lahir`
    , `v_penduduk2`.`tgl_lahir2`
    , `v_penduduk2`.`golongan_darah`
    , `v_penduduk2`.`id_agama`
    , `v_penduduk2`.`agama`
    , `v_penduduk2`.`pekerjaan`
    , `v_penduduk2`.`status_kawin`
    , `v_penduduk2`.`status`
    , `v_penduduk2`.`alamat`
    , `v_penduduk2`.`rt`
    , `v_penduduk2`.`rw`
    , `v_penduduk2`.`id_desa`
    , `v_penduduk2`.`desa`
    , `v_penduduk2`.`id_kecamatan`
    , `v_penduduk2`.`kecamatan`
    , `v_penduduk2`.`id_kota`
    , `v_penduduk2`.`kota`
    , `v_penduduk2`.`dusun`
    , `v_penduduk2`.`id_dusun`
    , `v_penduduk2`.`id_provinsi`
    , `v_penduduk2`.`no_paspor`
    , `v_penduduk2`.`provinsi`
    , `lokasi`.`desa` AS pindah_desa
    , `lokasi`.`id_kecamatan` AS  pindah_id_kecamatan
    , `lokasi`.`kecamatan` AS pindah_kecamatan
    , `lokasi`.`id_kota` AS pindah_id_kota
    , `lokasi`.`kota` AS pindah_kota
    , `lokasi`.`id_provinsi` AS pindah_id_provinsi
    , `lokasi`.`provinsi` AS pindah_provinsi')->from('surat_pindah sp ')
        ->join("v_penduduk2",'v_penduduk2.id_penduduk=sp.id_penduduk')
        ->join("lokasi",'lokasi.id_desa=sp.pindah_id_desa','left')
        ->where("deleted","0")
        ->where("id",$id);

    $data = $this->db->get();
    ///echo $this->db->last_query() ; exit; 
    $data = $data->row_array();
    $data['controller'] = get_class($this);
    $data['header'] = "Permohonan KK Baru";
    $data['title'] = $data['header'];

    $this->db->select("*")->from("surat_pindah_detail spd")
    ->join("v_penduduk2 p",'spd.id_penduduk=p.id_penduduk')
    ->where("id",$data['id']);
    $res = $this->db->get();
    $data['record'] = $res;

    $html = $this->load->view($data['controller']."_print_view",$data,true);
    $this->load->helper('download');
    force_download("surat pindah.doc", $html);

}


/*
function hapus_semua() {
    $this->session->unset_userdata()
} */
function add_pengikut() {
   // print_r($_POST);
    $data = $this->input->post();
    $arr = $this->session->userdata("arr_pengikut_kk_perubahan");

    $data['id_penduduk'] = $this->cm->get_id_penduduk($data['id_penduduk']);
    $arr[$data['id_penduduk']] = $data['hubungan'];
    $this->session->set_userdata("arr_pengikut_kk_perubahan",$arr);
}

function hapus_pengikut() {
   // print_r($_POST);
    $data = $this->input->post();
    $arr = $this->session->userdata("arr_pengikut_kk_perubahan");
    //$arr[$data['id_penduduk']] = $data['hubungan'];
    unset($arr[$data['id_penduduk']]);
    print_r($arr);
    $this->session->set_userdata("arr_pengikut_kk_perubahan",$arr);
}


function load_pengikut() {  ?>
    <table border=1 class="tabel" width="80%">
        <tr><th>NIK  </th> <th>Nama  </th>  <th>SHDK </th><th></th></tr>
    <?php
    //$this->session->unset_userdata("arr_pengikut_kk_perubahan"); 
    $arr = $this->session->userdata("arr_pengikut_kk_perubahan");
   // print_r($arr);

    if( (! is_array($arr)) or  count($arr) == 0 )  {
        echo ""; exit;
    }
     foreach($arr as $id_penduduk => $hubungan ) : 
          $this->db->where("id_penduduk",$id_penduduk);
          $res = $this->db->get("v_penduduk2");
          $data = $res->row();
          $arr_hubungan_kependudukan = $this->cm->arr_hubungan_kependudukan;
          $hubungan2 = $arr_hubungan_kependudukan[$hubungan]; 
          echo "<tr>
           <td>$data->nik </td><td>$data->nama </td>
            <td>$hubungan2</td>
            <td> <a title=\"Hapus pengikut\" onclick=\"hapus_pengikut('$data->id_penduduk');\" href=\"#\"> <img src=\"". base_url()."assets/images/delete.png" ."\" /> </a>   </td>
          </tr>";
    endforeach;
   echo "</table>";
}

function load_edit($id) {

    $arr = array();
    $this->db->select("*")->from("formulir_permohonan_kk_perubahan_detail spd")
    ->join("v_penduduk2 p",'spd.id_penduduk = p.id_penduduk');
    $this->db->where("id",$id);
    $res = $this->db->get();
   // echo $this->db->last_query();
    $arr_hubungan_kependudukan = $this->cm->arr_hubungan_kependudukan;
    if($res->num_rows() > 0 ) {
        echo "<table  border=1 class=\"tabel\" width=\"80%\">
        <tr><th>NIK  </th> <th>Nama  </th>  <th>SHDK </th><th></th></tr>";
        foreach($res->result() as $data) {

        $arr[$data->id_penduduk] = $data->hubungan;
             $hubungan2 = $arr_hubungan_kependudukan[$data->hubungan]; 
        echo "<tr>
           <td>$data->nik </td><td>$data->nama </td>
            <td>$hubungan2</td>
            <td> <a title=\"Hapus pengikut\" onclick=\"hapus_pengikut('$data->id_penduduk');\" href=\"#\"> <img src=\"". base_url()."assets/images/delete.png" ."\" /> </a>   </td>
         </tr>";
        }
    }
    $this->session->set_userdata("arr_pengikut_kk_perubahan",$arr);
}

function tambahdarikk($id_penduduk){
    $sql = "select * from kk_anggota where no_kk = 
    (select no_kk from kk where id_penduduk='$id_penduduk')
    and id_penduduk <> '$id_penduduk'";
    echo $sql;
    $arr= array();
    $res = $this->db->query($sql);
    foreach($res->result() as $row) {
        $arr[$row->id_penduduk] = $row->sebagai;

    }
    print_r($arr);
    $this->session->set_userdata("arr_pengikut_kk_perubahan",$arr);
}

}
?>