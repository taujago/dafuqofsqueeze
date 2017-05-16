<?php 
class formulir_pindah_antar_kecamatan extends op_controller {
    function __construct(){
        parent::__construct();
        $this->load->model("core_model","cm");
        $this->load->model("m_formulir_pindah_antar_kecamatan","dm");
        $this->load->model("add_model","am");
        $this->load->helper("tanggal");
    }


    function index(){
        $data['controller'] = get_class($this);
        $data['header'] = "Formulir Permohonan Pindah WNI Antar Kecamatan Dalam Satu Kabupaten/Kota (F-1.29)";
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
                "nama"  => $nama,
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
            $responce->rows[$i]['id']           = $result[$i]['id'] ;
             $responce->rows[$i]['nik']          = $result[$i]['nik'] ;
            $responce->rows[$i]['no_surat']           = $result[$i]['no_surat'] ;
            $responce->rows[$i]['tanggal']      = flipdate($result[$i]['tanggal']) ;
            $responce->rows[$i]['id_penduduk']  = $result[$i]['id_penduduk'] ;
            $responce->rows[$i]['nama']         = $result[$i]['nama']; 
            $responce->rows[$i]['alamat']       = $result[$i]['alamat'];     
            $responce->rows[$i]['tmp_lahir']  = $result[$i]['tmp_lahir'] ;             
            $responce->rows[$i]['tgl_lahir']  = $result[$i]['tgl_lahir'] ;             
            $responce->rows[$i]['ttd']          = $result[$i]['ttd'] ; 
            $responce->rows[$i]['jk']          = $result[$i]['jk'] ; 
            $responce->rows[$i]['hubungan']          = $result[$i]['hubungan'] ; 
            $responce->rows[$i]['pindah_jenis']          = $result[$i]['pindah_jenis'] ; 
            $responce->rows[$i]['pindah_negara']          = $result[$i]['pindah_negara'] ; 
            $responce->rows[$i]['alasan_pindah']          = $result[$i]['alasan_pindah'] ; 
            $responce->rows[$i]['alasan_lainnya']          = $result[$i]['alasan_lainnya'] ;
            $responce->rows[$i]['kepala_keluarga_nik']          = $result[$i]['kepala_keluarga_nik'] ;
            $responce->rows[$i]['kepala_keluarga_nama']          = $result[$i]['kepala_keluarga_nama'] ;
            $responce->rows[$i]['kepala_keluarga_kk']          = $result[$i]['kepala_keluarga_kk'] ; 
            $responce->rows[$i]['telepon_pemohon']          = $result[$i]['telepon_pemohon'] ; 
            $responce->rows[$i]['no_formulir']          = $result[$i]['no_formulir'] ; 
            $responce->rows[$i]['jenis_formulir']          = $result[$i]['jenis_formulir'] ; 
            $responce->rows[$i]['jenis_kepindahan']          = $result[$i]['jenis_kepindahan'] ; 
            $responce->rows[$i]['status_tidak_pindah']          = $result[$i]['status_tidak_pindah'] ; 
            $responce->rows[$i]['status_pindah']          = $result[$i]['status_pindah'] ; 
            $responce->rows[$i]['kode_pos_pindah']          = $result[$i]['kode_pos_pindah'] ; 
            $responce->rows[$i]['telepon_pindah']          = $result[$i]['telepon_pindah'] ; 
            $responce->rows[$i]['petugas']          = $result[$i]['petugas'] ; 






            $responce->rows[$i]['ttd']          = $result[$i]['ttd'] ;
            $responce->rows[$i]['ttd_nama']          = $result[$i]['ttd_nama'] ;
            $responce->rows[$i]['ttd_jabatan']          = $result[$i]['ttd_jabatan'] ;
            $responce->rows[$i]['ttd_camat']          = $result[$i]['ttd_camat'] ; 

            $responce->rows[$i]['tgl_pindah']          = flipdate($result[$i]['tgl_pindah']) ; 
            $responce->rows[$i]['pindah_id_desa']          = $result[$i]['pindah_id_desa'] ; 
            $responce->rows[$i]['pindah_id_kecamatan']          = $result[$i]['pindah_id_kecamatan'] ; 
            $responce->rows[$i]['pindah_id_kota']          = $result[$i]['pindah_id_kota'] ; 
            $responce->rows[$i]['pindah_id_provinsi']          = $result[$i]['pindah_id_provinsi'] ; 

            $responce->rows[$i]['pindah_provinsi']          = $result[$i]['pindah_provinsi'] ; 
            $responce->rows[$i]['pindah_kota']          = $result[$i]['pindah_kota'] ; 
            $responce->rows[$i]['pindah_kecamatan']          = $result[$i]['pindah_kecamatan'] ; 
            $responce->rows[$i]['pindah_desa']          = $result[$i]['pindah_desa'] ; 
            $responce->rows[$i]['alamat_pindah']          = $result[$i]['alamat_pindah'] ;
            $responce->rows[$i]['dusun_pindah']          = $result[$i]['dusun_pindah'] ; 
            $responce->rows[$i]['rt_pindah']          = $result[$i]['rt_pindah'] ; 
            $responce->rows[$i]['rw_pindah']          = $result[$i]['rw_pindah'] ; 
           
             $responce->rows[$i]['ttd']          = $result[$i]['ttd'] ; 
            $responce->rows[$i]['nip']          = $result[$i]['nip'] ; 
            $responce->rows[$i]['penandatangan_nama']          = $result[$i]['ttd_nama'] ; 
            $responce->rows[$i]['pangkat']          = $result[$i]['pangkat'] ; 
            $responce->rows[$i]['penandatangan_jabatan']          = $result[$i]['ttd_jabatan'] ;  
             

        } }
        //echo "<hr />";
        echo json_encode($responce); 
    }


function cek_desa($pindah_id_desa) {
    $id_desa = $this->session->userdata("operator_id_desa");
    if($id_desa == $pindah_id_desa) {
        $this->form_validation->set_message('cek_desa', ' Desa tujuan harus berbeda. '); 
        return false;
    }
}
    function save(){
        $data = $this->input->post();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nik','NIK Pemohon','required');
        $this->form_validation->set_rules('kepala_keluarga_nik','NIK Kepala Keluarag','required');     
        $this->form_validation->set_rules('alasan_pindah','Alasan Kepindahan','required');  
        $this->form_validation->set_rules('pindah_id_desa','Desa tujuan ','callback_cek_desa');
        $this->form_validation->set_rules('no_surat','Nomor surat','required');  
        $this->form_validation->set_rules('no_formulir','Nomor Formulir','required');    
        $this->form_validation->set_rules('tgl_pindah','Tanggal pindah','required');   
        $this->form_validation->set_rules('jenis_kepindahan','Jenis Kepindahan','required'); 
        $this->form_validation->set_rules('petugas','Petugas Registrasi','required'); 
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
                
                $data['tgl_pindah'] = flipdate($data['tgl_pindah']); 
                
                
                
                if($data['pindah_jenis'] == "ln") {
                    unset($data['pindah_id_desa']);
                }
                else {
                    unset($data['pindah_negara']);
                }
                

                $data['id_penduduk'] = $this->cm->get_id_penduduk($data['nik']);
                unset($data['nik']);

                $res = $this->db->insert("surat_pindah",$data);



                if($res) {    
                  //  echo "ini kenapa ? ";
                    $this->db->where("id_penduduk",$data['id_penduduk']);
                    $this->db->update("penduduk",array("status_kependudukan"=>"3"));



                $arr_data_pengikut_session = $this->session->userdata("arr_pengikut_pindah");
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
                       $res2=  $this->db->insert("surat_pindah_detail",$arr_tmp);
                       
                       $this->db->where("id_penduduk",$arr_tmp['id_penduduk']);
                       $this->db->update("penduduk",array("status_kependudukan"=>"3"));
                        
                       
                    } 
                    $this->session->unset_userdata("arr_pengikut_pindah");
                }
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
        $this->form_validation->set_rules('nik','NIK','required');    
        $this->form_validation->set_rules('no_surat','Nomor surat','required');   
        // $this->form_validation->set_rules('hubungan','Kedudukan dalam keluarga','required');              
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

                
                if($data['pindah_jenis'] == "ln") {
                    //unset($data['pindah_id_desa']);
                    $data['pindah_id_desa']=NULL;
                }
                else {
                    //unset($data['pindah_negara']);
                    $data['pindah_negara'] = NULL;
                }
                
                $data['tgl_pindah'] = flipdate($data['tgl_pindah']);
                // before update, ganti dulu yang lama ke 0 
                $this->db->where("id",$data['id']);
                $xy = $this->db->get("surat_pindah")->row();
                $this->db->where("id_penduduk",$xy->id_penduduk);
                $this->db->update("penduduk",array("status_kependudukan"=>"0"));
                 
                $this->db->where("id",$data['id']);
                $res = $this->db->update("surat_pindah",$data);
                


                if($res) {    
                  //  echo "ini kenapa ? ";
                $this->db->where("id_penduduk",$data['id_penduduk']);
                $this->db->update("penduduk",array("status_kependudukan"=>"3"));

                $arr_data_pengikut_session = $this->session->userdata("arr_pengikut_pindah");
                //echo "<pre>";
                //print_r($arr_data_pengikut_session); echo "ss</pre>";
                //exit;
              //  echo  "Jumlah array " .count($arr_data_pengikut_session) ; 

                // kembalikan dulu. 
                $sql="update penduduk set status_kependudukan='0' where id_penduduk  in 
                (select id_penduduk from surat_pindah_detail where id='".$data['id']."' ) ";
                

                $this->db->query($sql);
                /*echo "query restoe ". $this->db->last_query();
                
                exit;*/


                $this->db->where("id",$data['id']);
                $this->db->delete("surat_pindah_detail");
                if( is_array($arr_data_pengikut_session) and  count($arr_data_pengikut_session)  > 0 ) { 
                    $i=0;
                    foreach($arr_data_pengikut_session as $id_penduduk => $hubungan) {
                        $i++;
                        $arr_tmp = array("id_penduduk"  => $id_penduduk,
                                         "hubungan"     => $hubungan,
                                         "id"           => $data['id'],
                                         "id_surat_detail" => md5(date("Ymdhis").$i)
                                         );
                       $res2=  $this->db->insert("surat_pindah_detail",$arr_tmp);
                       
                        $this->db->where("id_penduduk",$arr_tmp['id_penduduk']);
                        $this->db->update("penduduk",array("status_kependudukan"=>"3"));
                        
                       
                    } 
                    $this->session->unset_userdata("arr_pengikut_pindah");
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


function hapus(){
    $data = $this->input->post();
    $ids = explode(",", $data['ids']);
    foreach($ids as $id) {
        // update data penduduk kembalikan ke status 0 
        $sql="update penduduk set status_kependudukan = '0' where id_penduduk in (SELECT id_penduduk FROM surat_pindah_detail 
                WHERE id ='$id'
                UNION 
                SELECT id_penduduk FROM surat_pindah WHERE id='$id')";
        $this->db->query($sql);
        
        $this->db->where("id",$id);
        $this->db->delete("surat_pindah");
    }
    echo json_encode(array("success"=>true,"pesan"=>"Berhasil dihapus"));
}

 
function cetak($id) {
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
        ->join("lokasi",'lokasi.id_desa=sp.pindah_id_desa')
        ->where("deleted","0")
        ->where("id",$id);

    $data = $this->db->get();

    $data = $data->row_array();
    $data['controller'] = get_class($this);
    $data['header'] = "F-1.25";
    $data['title'] = $data['header'];

    $this->db->select("*")->from("surat_pindah_detail spd")
    ->join("v_penduduk2 p",'spd.id_penduduk=p.id_penduduk')
    ->where("id",$data['id']);
    $res = $this->db->get();
    $data['record'] = $res;

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
    $data['header'] = "Surat keterangan pindah";
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
    $data['header'] = "Surat keterangan pindah";
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
    $arr = $this->session->userdata("arr_pengikut_pindah");

    $data['id_penduduk'] = $this->cm->get_id_penduduk($data['id_penduduk']);
    $arr[$data['id_penduduk']] = $data['hubungan'];
    $this->session->set_userdata("arr_pengikut_pindah",$arr);
}

function hapus_pengikut() {
   // print_r($_POST);
    $data = $this->input->post();
    $arr = $this->session->userdata("arr_pengikut_pindah");
    //$arr[$data['id_penduduk']] = $data['hubungan'];
    unset($arr[$data['id_penduduk']]);
    print_r($arr);
    $this->session->set_userdata("arr_pengikut_pindah",$arr);
}


function load_pengikut() {  ?>
    <table border=1 class="tabel" width="80%">
        <tr><th>NIK  </th> <th>Nama  </th> <th>Umur </th> <th>Hubungan </th><th></th></tr>
    <?php
    //$this->session->unset_userdata("arr_pengikut_pindah"); 
    $arr = $this->session->userdata("arr_pengikut_pindah");
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
           <td>$data->nik </td><td>$data->nama </td><td>$data->umur </td>
            <td>$hubungan2</td>
            <td> <a title=\"Hapus pengikut\" onclick=\"hapus_pengikut('$data->id_penduduk');\" href=\"#\"> <img src=\"". base_url()."assets/images/delete.png" ."\" /> </a>   </td>
          </tr>";
    endforeach;
   echo "</table>";
}

function load_edit($id) {

    $arr = array();
    $this->db->select("*")->from("surat_pindah_detail spd")
    ->join("v_penduduk2 p",'spd.id_penduduk = p.id_penduduk');
    $this->db->where("id",$id);
    $res = $this->db->get();
   // echo $this->db->last_query();
    $arr_hubungan_kependudukan = $this->cm->arr_hubungan_kependudukan;
    if($res->num_rows() > 0 ) {
        echo "<table  border=1 class=\"tabel\" width=\"80%\">
        <tr><th>NIK  </th> <th>Nama  </th> <th>Umur </th> <th>Hubungan </th><th></th></tr>";
        foreach($res->result() as $data) {

        $arr[$data->id_penduduk] = $data->hubungan;
             $hubungan2 = $arr_hubungan_kependudukan[$data->hubungan]; 
        echo "<tr>
           <td>$data->nik </td><td>$data->nama </td><td>$data->umur </td>
            <td>$hubungan2</td>
            <td> <a title=\"Hapus pengikut\" onclick=\"hapus_pengikut('$data->id_penduduk');\" href=\"#\"> <img src=\"". base_url()."assets/images/delete.png" ."\" /> </a>   </td>
         </tr>";
        }
    }
    $this->session->set_userdata("arr_pengikut_pindah",$arr);
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
    $this->session->set_userdata("arr_pengikut_pindah",$arr);
}

}
?>