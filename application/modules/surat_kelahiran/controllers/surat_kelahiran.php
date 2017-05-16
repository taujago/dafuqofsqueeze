<?php 
class surat_kelahiran extends op_controller {
    function __construct(){
        parent::__construct();
        $this->load->model("core_model","cm");
        $this->load->model("m_surat_lahir","dm");
        $this->load->model("add_model","am");
        //$this->load->helper("tanggal");
        $this->load->helper(array("tanggal","file","download"));
    }


    function index(){
        $data['controller'] = get_class($this);
        $data['header'] = "Data Surat Kelahiran";
        $data['arr_warga_negara']  = $this->cm->arr_warga_negara;
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
        $nama_ibu = isset($_REQUEST['search_nama_ibu'])?$_REQUEST['search_nama_ibu']:"x";
        $nama_bapak = isset($_REQUEST['search_nama_bapak'])?$_REQUEST['search_nama_bapak']:"x";
        $jk = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";
        /*$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        $id_desa =  isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
        $dusun =  isset($_REQUEST['search_dusun'])?$_REQUEST['search_dusun']:"x"; */
       
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null ,
                "nama"  => $nama,
                "nama_ibu"  => $nama_ibu,
                "nama_bapak" => $nama_bapak,
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
            $responce->rows[$i]['id']           = $result[$i]['id'] ;
            $responce->rows[$i]['id_penduduk']  = $result[$i]['id_penduduk'] ;
            $responce->rows[$i]['no_surat']     = $result[$i]['no_surat'];     
            $responce->rows[$i]['tmp_kelahiran']  = $result[$i]['tmp_kelahiran'] ;
            $responce->rows[$i]['nama']         = $result[$i]['nama'] ;
            $responce->rows[$i]['tanggal']      = flipdate($result[$i]['tanggal']) ;
            $responce->rows[$i]['tgl_lahir']    = $result[$i]['tgl_lahir'] ;    
            $responce->rows[$i]['jam_lahir']    = $result[$i]['jam_lahir'] ;  
            $responce->rows[$i]['tmp_lahir']    = $result[$i]['tmp_lahir'] ;    
            $responce->rows[$i]['jk']           = strtoupper($result[$i]['jk']) ;            
            $responce->rows[$i]['bapak_nik']    = $result[$i]['bapak_nik'] ;  
            $responce->rows[$i]['bapak_nama']   = $result[$i]['bapak_nama'] ; 
            $responce->rows[$i]['bapak_pekerjaan']   = $result[$i]['bapak_pekerjaan'] ; 
            $responce->rows[$i]['bapak_alamat']   = $result[$i]['bapak_alamat'] ; 
            $responce->rows[$i]['bapak_rt']   = $result[$i]['bapak_rt'] ; 
            $responce->rows[$i]['bapak_rw']   = $result[$i]['bapak_rw'] ; 
            $responce->rows[$i]['bapak_desa']   = $result[$i]['bapak_desa'] ; 
            $responce->rows[$i]['bapak_kecamatan']   = $result[$i]['bapak_kecamatan'] ;
            $responce->rows[$i]['bapak_kota']   = $result[$i]['bapak_kota'] ; 
            $responce->rows[$i]['bapak_provinsi']   = $result[$i]['bapak_provinsi'] ;  
            $responce->rows[$i]['bapak_tmp_lahir']   = $result[$i]['bapak_tmp_lahir'] ; 
            $responce->rows[$i]['bapak_tgl_lahir']    = flipdate($result[$i]['bapak_tgl_lahir']) ;
            $responce->rows[$i]['ibu_nama']     = $result[$i]['ibu_nama'] ; 
             $responce->rows[$i]['ibu_pekerjaan']     = $result[$i]['ibu_pekerjaan'] ; 
              $responce->rows[$i]['ibu_alamat']     = $result[$i]['ibu_alamat'] ; 
               $responce->rows[$i]['ibu_rt']     = $result[$i]['ibu_rt'] ; 
                $responce->rows[$i]['ibu_rw']     = $result[$i]['ibu_rw'] ; 
                 $responce->rows[$i]['ibu_tmp_lahir']     = $result[$i]['ibu_tmp_lahir'] ; 
               $responce->rows[$i]['ibu_desa']     = $result[$i]['ibu_desa'] ; 
                $responce->rows[$i]['ibu_kota']     = $result[$i]['ibu_kota'] ; 
                 $responce->rows[$i]['ibu_kecamatan']     = $result[$i]['ibu_nama'] ; 
                  $responce->rows[$i]['ibu_provinsi']     = $result[$i]['ibu_provinsi'] ; 
            $responce->rows[$i]['ibu_nik']      = $result[$i]['ibu_nik'] ;
            $responce->rows[$i]['ibu_tgl_lahir']    = flipdate($result[$i]['ibu_tgl_lahir']) ;
            $responce->rows[$i]['saksi1_tgl_lahir']    = flipdate($result[$i]['saksi1_tgl_lahir']) ;
            $responce->rows[$i]['saksi2_tgl_lahir']    = flipdate($result[$i]['saksi2_tgl_lahir']) ;
            $responce->rows[$i]['saksi1_pekerjaan']      = $result[$i]['saksi1_pekerjaan'] ;
            $responce->rows[$i]['saksi1_alamat']      = $result[$i]['saksi1_alamat'] ;
            $responce->rows[$i]['saksi2_pekerjaan']      = $result[$i]['saksi2_pekerjaan'] ;
            $responce->rows[$i]['saksi2_alamat']      = $result[$i]['saksi2_alamat'] ;
            
            $responce->rows[$i]['tgl_pernikahan']      = flipdate($result[$i]['tgl_pernikahan']) ; 
            $responce->rows[$i]['penolong_kelahiran']       = $result[$i]['penolong_kelahiran'] ; 
            $responce->rows[$i]['penolong_nik']       = $result[$i]['penolong_nik'] ; 
            $responce->rows[$i]['penolong_nama']       = $result[$i]['penolong_nama'] ; 
            $responce->rows[$i]['penolong_alamat']       = $result[$i]['penolong_alamat'] ; 
            $responce->rows[$i]['pelapor_nik']      = $result[$i]['pelapor_nik'] ; 
            $responce->rows[$i]['pelapor_nama']     = $result[$i]['pelapor_nama'] ; 
            $arr_hubungan_pelapor = $this->cm->arr_hubungan_pelapor;
            $responce->rows[$i]['hubungan_pelapor2']        = $arr_hubungan[$result[$i]['hubungan_pelapor']] ; 
            $responce->rows[$i]['berat']     = $result[$i]['berat'] ;
            $responce->rows[$i]['panjang_badan']     = $result[$i]['panjang_badan'] ;
            $responce->rows[$i]['jenis_kelahiran']     = $result[$i]['jenis_kelahiran'] ;

            $responce->rows[$i]['anak_ke']     = $result[$i]['anak_ke'] ;
            
            $responce->rows[$i]['ayah_id_penduduk']     = $result[$i]['ayah_id_penduduk'] ;
            $responce->rows[$i]['ibu_id_penduduk']     = $result[$i]['ibu_id_penduduk'] ;
            $responce->rows[$i]['pelapor_id_penduduk']     = $result[$i]['pelapor_id_penduduk'] ;
            $responce->rows[$i]['hubungan_pelapor']     = $result[$i]['hubungan_pelapor'] ;
            $responce->rows[$i]['saksi1_nik']     = $result[$i]['saksi1_nik'] ;
            $responce->rows[$i]['saksi1_nama']     = $result[$i]['saksi1_nama'] ;
            $responce->rows[$i]['saksi2_nik']     = $result[$i]['saksi2_nik'] ;
            $responce->rows[$i]['saksi2_nama']     = $result[$i]['saksi2_nama'] ;

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
        $this->form_validation->set_rules('nama','Nama','required');
        // $this->form_validation->set_rules('ayah_nik','Bapak ','required');
        $this->form_validation->set_rules('ibu_nik','Ibu','required');
        $this->form_validation->set_rules('ttd','Penandatangan','required');

        // $this->form_validation->set_rules('bapak_nik','NIK Ayah','callback_cek_nik');

        $this->form_validation->set_rules('ibu_nik','NIK Ibu','callback_cek_nik');
        $this->form_validation->set_rules('pelapor_nik','NIK Pelapor','callback_cek_nik');
        
            
        $this->form_validation->set_rules('hubungan_pelapor','Hubungan Pelapor','required');    
        $this->form_validation->set_rules('jk','Jenis kelamin','required');   
        $this->form_validation->set_message('required', ' %s Harus diisi '); 
        $this->form_validation->set_message('numeric', ' %s Harus diisi dengan angka ');
        $this->form_validation->set_message('alpha', ' %s Harus diisi dengan huruf ');
        
        


        $this->form_validation->set_error_delimiters("* ", '<br>');
        if($this->form_validation->run() == TRUE) {



                $data['ayah_id_penduduk'] = $data['bapak_nik'];
                //unset($data['ayah_nik']);
                //echo $this->db->last_query();
                
                 $data['ibu_id_penduduk'] = $data['ibu_nik'];
               //  unset($data['ibu_nik']);
                
                $data['pelapor_id_penduduk'] = $this->cm->get_id_penduduk($data['pelapor_nik']);
                unset($data['pelapor_nik']);
                // echo $this->db->last_query();
                // exit;





            $this->db->where("id_penduduk",$data['ibu_id_penduduk']);
            $xx = $this->db->get("penduduk")->row();

                
            $data['tgl_lahir'] = flipdate($data['tgl_lahir']);
            $data['tgl_pernikahan'] = flipdate($data['tgl_pernikahan']);
            $data['bapak_tgl_lahir'] = flipdate($data['bapak_tgl_lahir']);
            $data['ibu_tgl_lahir'] = flipdate($data['ibu_tgl_lahir']);
            $data['saksi1_tgl_lahir'] = flipdate($data['saksi1_tgl_lahir']);
            $data['saksi2_tgl_lahir'] = flipdate($data['saksi2_tgl_lahir']);
            $data_penduduk['id_penduduk'] = md5(date('Ymdhis'));            
            $data_penduduk['id_desa'] = $this->session->userdata("operator_id_desa");
            $data_penduduk['nama']= $data['nama'];
            $data_penduduk['tgl_lahir']= $data['tgl_lahir'];
            $data_penduduk['regdate']= $data['tgl_lahir'];
            $data_penduduk['tmp_lahir']= $data['tmp_lahir'];
            $data_penduduk['jk']= $data['jk'];
            $data_penduduk['warga_negara']= $xx->warga_negara;
            $data_penduduk['id_agama']= $xx->id_agama;
            $data_penduduk['dusun']= $xx->dusun; 
            $data_penduduk['rt']= $xx->rt; 
            $data_penduduk['hidup_mati']= "1";
            $data_penduduk['nik']= $this->am->get_temp_nik();
            
           // $data_penduduk['status_kependudukan']= "1";
            $data_penduduk['status_kependudukan']= $xx->status_kependudukan;
            $data_penduduk['status_kawin']= "1";
            $data_penduduk['kepala_keluarga']= "0";
            //$data_penduduk['regdate']= date("Y-m-d");
            $data_penduduk['nik_ayah'] = $data['bapak_nik'];
            $data_penduduk['nama_ayah'] =   $data['bapak_nama']; // $this->am->get_nama($data['ayah_id_penduduk']);
            $data_penduduk['nik_ibu'] = $data['ibu_nik'];
            $data_penduduk['nama_ibu'] = $data['ibu_nama']; //$this->am->get_nama($data['ibu_id_penduduk']);
            $data_penduduk['flag'] = 'l';




            $res = $this->db->insert("penduduk",$data_penduduk);
            if($res) {




                $arr_lahir['id']       = md5(date("Ymdhis"));
                $arr_lahir['id_penduduk']       = $data_penduduk['id_penduduk'];
                $arr_lahir['no_surat']          = $data['no_surat'];
                $arr_lahir['tmp_kelahiran']     = $data['tmp_kelahiran'];
                $arr_lahir['anak_ke']           = $data['anak_ke'];
                $arr_lahir['tanggal']           = date("Y-m-d");
                $arr_lahir['anak_ke']           = $data['anak_ke'];
                $arr_lahir['jam_lahir']         = $data['jam_lahir'].":00";
                $arr_lahir['ayah_id_penduduk']  = $data['ayah_id_penduduk'];
                $arr_lahir['ibu_id_penduduk']  = $data['ibu_id_penduduk'];
                $arr_lahir['penolong_kelahiran']  = $data['penolong_kelahiran'];
                $arr_lahir['penolong_nik']  = $data['penolong_nik'];
                $arr_lahir['penolong_nama']  = $data['penolong_nama'];
                $arr_lahir['penolong_alamat']  = $data['penolong_alamat'];
                $arr_lahir['berat']  = $data['berat'];
                $arr_lahir['panjang_badan']  = $data['panjang_badan'];
                $arr_lahir['jenis_kelahiran']  = $data['jenis_kelahiran'];
                $arr_lahir['tgl_pernikahan']  = $data['tgl_pernikahan'];
                $arr_lahir['pelapor_id_penduduk']  = $data['pelapor_id_penduduk'];
                $arr_lahir['hubungan_pelapor']  = $data['hubungan_pelapor'];
                $arr_lahir['saksi1_nik']  = $data['saksi1_nik'];
                $arr_lahir['saksi1_nama']  = $data['saksi1_nama'];
                $arr_lahir['saksi2_nik']  = $data['saksi2_nik'];
                $arr_lahir['saksi2_nama']  = $data['saksi2_nama'];

                $arr_lahir['bapak_nik']  = $data['bapak_nik'];
                $arr_lahir['bapak_nama']  = $data['bapak_nama'];
                $arr_lahir['bapak_umur']  = $data['bapak_umur'];
                 $arr_lahir['bapak_tmp_lahir']  = $data['bapak_tmp_lahir'];
                $arr_lahir['bapak_tgl_lahir']  = $data['bapak_tgl_lahir'];
                $arr_lahir['saksi1_tgl_lahir']  = $data['saksi1_tgl_lahir'];
                $arr_lahir['saksi2_tgl_lahir']  = $data['saksi2_tgl_lahir'];
                $arr_lahir['saksi1_pekerjaan']  = $data['saksi1_pekerjaan'];
                $arr_lahir['saksi1_alamat']  = $data['saksi1_alamat'];
                $arr_lahir['saksi2_pekerjaan']  = $data['saksi2_pekerjaan'];
                $arr_lahir['saksi2_alamat']  = $data['saksi2_alamat'];
                $arr_lahir['bapak_warga_negara']  = $data['bapak_warga_negara'];
                $arr_lahir['bapak_keturunan']  = $data['bapak_keturunan'];
                $arr_lahir['bapak_pekerjaan']  = $data['bapak_pekerjaan'];
                $arr_lahir['bapak_alamat']  = $data['bapak_alamat'];
                 $arr_lahir['bapak_rt']  = $data['bapak_rt'];
                $arr_lahir['bapak_rw']  = $data['bapak_rw'];
                $arr_lahir['bapak_desa']  = $data['bapak_desa'];
                $arr_lahir['bapak_kecamatan']  = $data['bapak_kecamatan'];
                $arr_lahir['bapak_kota']  = $data['bapak_kota'];
                $arr_lahir['bapak_provinsi']  = $data['bapak_provinsi'];
 
                $arr_lahir['ibu_nik']  = $data['ibu_nik'];
                $arr_lahir['ibu_nama']  = $data['ibu_nama'];
                $arr_lahir['ibu_tmp_lahir']  = $data['ibu_tmp_lahir'];
                $arr_lahir['ibu_rt']  = $data['ibu_rt'];
                $arr_lahir['ibu_rw']  = $data['ibu_rw'];

                $arr_lahir['ibu_umur']  = $data['ibu_umur'];
                $arr_lahir['ibu_tgl_lahir']  = $data['ibu_tgl_lahir'];
                $arr_lahir['ibu_warga_negara']  = $data['ibu_warga_negara'];
                $arr_lahir['ibu_keturunan']  = $data['ibu_keturunan'];
                $arr_lahir['ibu_pekerjaan']  = $data['ibu_pekerjaan'];
                $arr_lahir['ibu_alamat']  = $data['ibu_alamat'];
                $arr_lahir['ibu_desa']  = $data['ibu_desa'];
                $arr_lahir['ibu_kecamatan']  = $data['ibu_kecamatan'];
                $arr_lahir['ibu_kota']  = $data['ibu_kota'];
                $arr_lahir['ibu_provinsi']  = $data['ibu_provinsi'];
 



                $desa = $this->cm->data_desa();
                if($data['ttd'] == "kepala" ) {
                    
                    if($desa->bentuk_lembaga=="Kelurahan") {
                        $arr_lahir['ttd_jabatan'] = "LURAH ";
                        ///$arr_lahir['nip_kepala_desa'] = $desa->nip_kepala_desa;
                         $arr_lahir['nip'] = $desa->nip_kepala_desa;
                         $arr_lahir['pangkat'] = $desa->pangkat_kepala_desa;
                    }
                    else { 
                        $arr_lahir['ttd_jabatan'] = "KEPALA DESA ";
                    }
                    
                    $arr_lahir['ttd'] = $data['ttd'];                    
                    $arr_lahir['ttd_nama'] = $desa->nama_kepala_desa;
                }
                else if($data['ttd'] == "sek" ) {
                    $arr_lahir['ttd'] = $data['ttd'];
                    
                    if($desa->bentuk_lembaga=="Kelurahan") {
                        $arr_lahir['ttd_jabatan'] = "SEKLUR ";
                        $arr_lahir['nip'] = $desa->nip_sek_desa; 
                        $arr_lahir['pangkat'] = $desa->pangkat_sek_desa;
                        
                    }
                    else { 
                         $arr_lahir['ttd_jabatan'] = "Sekretaris Desa";
                    }
                    $arr_lahir['ttd_nama'] = $desa->nama_sek_desa;
                    $arr_lahir['nip'] = $desa->nip_sek_desa;
                    $arr_lahir['pangkat'] = $desa->pangkat_sek_desa;
                }
                
                 else  {
                    $arr_lahir['ttd'] = $data['ttd'];
                    $arr_lahir['ttd_jabatan'] = $data['penandatangan_jabatan'];
                    $arr_lahir['ttd_nama'] = $data['penandatangan_nama'];
                    $arr_lahir['nip'] = $data['nip'];
                    $arr_lahir['pangkat'] = $data['pangkat'];
                }
                unset($data['penandatangan_jabatan']);
                unset($data['penandatangan_nama']);
                




                $xx = $this->db->insert("surat_kelahiran",$arr_lahir);
                if(!$xx) {
                    //echo $this->db->last_query() . 
                    mysql_error();
                }
                $this->cm->update_nomor_surat($data['no_surat']);
                //echo $this->db->last_query();
                $ret = array("success"=>true,
                            "pesan"=>"Data berhasil disimpan",
                            "operation" =>"insert");

            }

            else {
                //  echo $this->db->last_query() . 
                    mysql_error();
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
        $this->form_validation->set_rules('nama','Nama','required');
        // $this->form_validation->set_rules('bapak_nik','Bapak ','required');
        $this->form_validation->set_rules('ibu_nik','Ibu','required');
        $this->form_validation->set_rules('ttd','Penandatangan','required');
            
        $this->form_validation->set_rules('hubungan_pelapor','Hubungan Pelapor','required');    
        $this->form_validation->set_rules('jk','Jenis kelamin','required');   
        $this->form_validation->set_message('required', ' %s Harus diisi '); 
        $this->form_validation->set_message('numeric', ' %s Harus diisi dengan angka ');
        $this->form_validation->set_message('alpha', ' %s Harus diisi dengan huruf ');
        
        
        $this->form_validation->set_error_delimiters("* ", '<br>');
        if($this->form_validation->run() == TRUE) {


              $data['ayah_id_penduduk'] = $data['bapak_nik'];
                


                $data['ibu_id_penduduk'] =  $data['ibu_nik'];
                //unset($data['ibu_nik']);

                $data['pelapor_id_penduduk'] = $this->cm->get_id_penduduk($data['pelapor_nik']);
                unset($data['pelapor_nik']);





            $this->db->where("id_penduduk",$data['ibu_id_penduduk']);
            $xx = $this->db->get("penduduk")->row();

            $data['tgl_lahir'] = flipdate($data['tgl_lahir']);
            $data['tgl_pernikahan'] = flipdate($data['tgl_pernikahan']);
            $data['bapak_tgl_lahir'] = flipdate($data['bapak_tgl_lahir']);
            $data['ibu_tgl_lahir'] = flipdate($data['ibu_tgl_lahir']);
            $data['saksi1_tgl_lahir'] = flipdate($data['saksi1_tgl_lahir']);
            $data['saksi2_tgl_lahir'] = flipdate($data['saksi2_tgl_lahir']);
            //$data_penduduk['id_penduduk'] = md5(date('Ymdhis'));            
            $data_penduduk['id_desa'] = $this->session->userdata("operator_id_desa");
            $data_penduduk['nama']= $data['nama'];
            $data_penduduk['tgl_lahir']= $data['tgl_lahir'];
            $data_penduduk['tmp_lahir']= $data['tmp_lahir'];
            $data_penduduk['jk']= $data['jk'];
            $data_penduduk['warga_negara']= $xx->warga_negara;
            $data_penduduk['id_agama']= $xx->id_agama;
            $data_penduduk['id_dusun']= $xx->id_dusun; 
            
            $data_penduduk['hidup_mati']= "1";
            $data_penduduk['status_kependudukan']= "0";
            $data_penduduk['status_kawin']= "1";
            $data_penduduk['regdate']= $data['tgl_lahir'];
            $data_penduduk['nik_ayah'] = $this->am->get_nik($data['ayah_id_penduduk']);
            $data_penduduk['nama_ayah'] = $this->am->get_nama($data['ayah_id_penduduk']);
            $data_penduduk['nik_ibu'] = $this->am->get_nik($data['ibu_id_penduduk']);
            $data_penduduk['nama_ibu'] = $this->am->get_nama($data['ibu_id_penduduk']);

            $this->db->where("id_penduduk",$data['id_penduduk']);
            $res = $this->db->update("penduduk",$data_penduduk);
            //echo $this->db->last_query() ."<br /> penduduk <br />";

            if($res) {
               // $arr_lahir['id']       = md5(date("Ymdhis"));
                //$arr_lahir['id_penduduk']       = $data_penduduk['id_penduduk'];
               
                $arr_lahir['no_surat']          = $data['no_surat'];
                $arr_lahir['tmp_kelahiran']     = $data['tmp_kelahiran'];
                $arr_lahir['anak_ke']           = $data['anak_ke'];
               // $arr_lahir['tanggal']           = date("Y-m-d");
                $arr_lahir['anak_ke']           = $data['anak_ke'];
                $arr_lahir['jam_lahir']         = $data['jam_lahir'].":00";
                $arr_lahir['ayah_id_penduduk']  = $data['ayah_id_penduduk'];
                $arr_lahir['ibu_id_penduduk']  = $data['ibu_id_penduduk'];
                $arr_lahir['penolong_kelahiran']  = $data['penolong_kelahiran'];
                $arr_lahir['penolong_nik']  = $data['penolong_nik'];
                $arr_lahir['penolong_nama']  = $data['penolong_nama'];
                $arr_lahir['penolong_alamat']  = $data['penolong_alamat'];
                $arr_lahir['berat']  = $data['berat'];
                $arr_lahir['panjang_badan']  = $data['panjang_badan'];
                $arr_lahir['jenis_kelahiran']  = $data['jenis_kelahiran'];
                $arr_lahir['tgl_pernikahan']  = $data['tgl_pernikahan'];
                $arr_lahir['pelapor_id_penduduk']  = $data['pelapor_id_penduduk'];
                $arr_lahir['hubungan_pelapor']  = $data['hubungan_pelapor'];
                $arr_lahir['saksi1_nik']  = $data['saksi1_nik'];
                $arr_lahir['saksi1_nama']  = $data['saksi1_nama'];
                $arr_lahir['saksi2_nik']  = $data['saksi2_nik'];
                $arr_lahir['saksi2_nama']  = $data['saksi2_nama'];
                $arr_lahir['saksi1_pekerjaan']  = $data['saksi1_pekerjaan'];
                $arr_lahir['saksi1_alamat']  = $data['saksi1_alamat'];
                $arr_lahir['saksi2_pekerjaan']  = $data['saksi2_pekerjaan'];
                $arr_lahir['saksi2_alamat']  = $data['saksi2_alamat'];


                $arr_lahir['bapak_nik']  = $data['bapak_nik'];
                $arr_lahir['bapak_nama']  = $data['bapak_nama'];
                $arr_lahir['bapak_umur']  = $data['bapak_umur'];
                $arr_lahir['bapak_tmp_lahir']  = $data['bapak_tmp_lahir'];
                $arr_lahir['bapak_tgl_lahir']  = $data['bapak_tgl_lahir'];
                $arr_lahir['saksi1_tgl_lahir']  = $data['saksi1_tgl_lahir'];
                $arr_lahir['saksi2_tgl_lahir']  = $data['saksi2_tgl_lahir'];
                $arr_lahir['bapak_warga_negara']  = $data['bapak_warga_negara'];
                $arr_lahir['bapak_keturunan']  = $data['bapak_keturunan'];
                $arr_lahir['bapak_pekerjaan']  = $data['bapak_pekerjaan'];
                $arr_lahir['bapak_alamat']  = $data['bapak_alamat'];
                $arr_lahir['bapak_rt']  = $data['bapak_rt'];
                $arr_lahir['bapak_rw']  = $data['bapak_rw'];
                $arr_lahir['bapak_desa']  = $data['bapak_desa'];
                $arr_lahir['bapak_kecamatan']  = $data['bapak_kecamatan'];
                $arr_lahir['bapak_kota']  = $data['bapak_kota'];
                $arr_lahir['bapak_provinsi']  = $data['bapak_provinsi'];
 
                $arr_lahir['ibu_nik']  = $data['ibu_nik'];
                $arr_lahir['ibu_nama']  = $data['ibu_nama'];
                $arr_lahir['ibu_umur']  = $data['ibu_umur'];
                $arr_lahir['ibu_tgl_lahir']  = $data['ibu_tgl_lahir'];
                $arr_lahir['ibu_warga_negara']  = $data['ibu_warga_negara'];
                $arr_lahir['ibu_keturunan']  = $data['ibu_keturunan'];
                $arr_lahir['ibu_pekerjaan']  = $data['ibu_pekerjaan'];
                $arr_lahir['ibu_alamat']  = $data['ibu_alamat'];
                $arr_lahir['ibu_desa']  = $data['ibu_desa'];
                $arr_lahir['ibu_kecamatan']  = $data['ibu_kecamatan'];
                $arr_lahir['ibu_kota']  = $data['ibu_kota'];
                $arr_lahir['ibu_provinsi']  = $data['ibu_provinsi'];
                $arr_lahir['ibu_tmp_lahir']  = $data['ibu_tmp_lahir'];
                $arr_lahir['ibu_rt']  = $data['ibu_rt'];
                $arr_lahir['ibu_rw']  = $data['ibu_rw'];
 


              $desa = $this->cm->data_desa();
                if($data['ttd'] == "kepala" ) {
                    
                    if($desa->bentuk_lembaga=="Kelurahan") {
                        $arr_lahir['ttd_jabatan'] = "LURAH ";
                        ///$arr_lahir['nip_kepala_desa'] = $desa->nip_kepala_desa;
                         $arr_lahir['nip'] = $desa->nip_kepala_desa;
                         $arr_lahir['pangkat'] = $desa->pangkat_kepala_desa;
                    }
                    else { 
                        $arr_lahir['ttd_jabatan'] = "KEPALA DESA ";
                    }
                    
                    $arr_lahir['ttd'] = $data['ttd'];                    
                    $arr_lahir['ttd_nama'] = $desa->nama_kepala_desa;
                }
                else if($data['ttd'] == "sek" ) {
                    $arr_lahir['ttd'] = $data['ttd'];
                    
                    if($desa->bentuk_lembaga=="Kelurahan") {
                        $arr_lahir['ttd_jabatan'] = "SEKLUR ";
                        $arr_lahir['nip'] = $desa->nip_sek_desa; 
                        $arr_lahir['pangkat'] = $desa->pangkat_sek_desa;
                        
                    }
                    else { 
                         $arr_lahir['ttd_jabatan'] = "Sekretaris Desa";
                    }
                    $arr_lahir['ttd_nama'] = $desa->nama_sek_desa;
                    $arr_lahir['nip'] = $desa->nip_sek_desa;
                    $arr_lahir['pangkat'] = $desa->pangkat_sek_desa;
                }
                
                 else  {
                    $arr_lahir['ttd'] = $data['ttd'];
                    $arr_lahir['ttd_jabatan'] = $data['penandatangan_jabatan'];
                    $arr_lahir['ttd_nama'] = $data['penandatangan_nama'];
                    $arr_lahir['nip'] = $data['nip'];
                    $arr_lahir['pangkat'] = $data['pangkat'];
                }
                unset($data['penandatangan_jabatan']);
                unset($data['penandatangan_nama']);
                
                
                //echo "fuck";
                //exit; 


                $this->db->where("id",$data['id']);
                $this->db->update("surat_kelahiran",$arr_lahir);

                //echo $this->db->last_query(); exit;
                
                $ret = array("success"=>true,
                            "pesan"=>"Data berhasil disimpan",
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
        $xx = $this->db->get("surat_kelahiran")->row();
        
        $this->db->where("id",$id);
        $this->db->delete("surat_kelahiran");
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
    $data = $this->db->get("v_kelahiran");
    $data = $data->row_array();
     $data['controller'] = get_class($this);
    $data['header'] = "Detail Surat Kelahiran";
    $data['title'] = $data['header'];
    $data['jenis_cetak'] = $jenis_cetak;
    

    if($jenis_cetak == "arsip_camata" ) 
    {
    $this->load->view($data['controller']."_cetak_arsip_kecamatan",$data);
    }
    else {
        $this->load->view($data['controller']."_cetak_arsip_desa",$data);
    }
  
}

function pdf($id){

        $this->db->where("id",$id);
        $jenis_cetak = $this->uri->segment(4);
        $data = $this->db->get("v_kelahiran");
        $data = $data->row_array();
        // echo $this->db->last_query();
        // show_array($data);
         $data['controller'] = get_class($this);
        $data['header'] = "Detail Surat Kelahiran";
        $data['title'] = $data['header'];
        $data['jenis_cetak'] = $jenis_cetak;
        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);       
        $pdf->SetMargins(25, 10, 20);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', '8'));

       // $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

         // add a page
        $pdf->AddPage('P');


         


         // $html = $this->load->view("pdf/statistik_penduduk_bulanan_pdf",$data,true);
         // $pdf->writeHTML($html, true, false, true, false, '');

            if($jenis_cetak == "arsip_camata" ) 
            {
                $html =  $this->load->view("pdf/surat_kelahiran_pdf_arsip_kecamatan2",$data,true);
            }
            else {
                $html =  $this->load->view("pdf/surat_kelahiran_pdf_arsip_desa2",$data,true);
            }


 
         //echo $html; exit;
         // $html = $this->load->view("pdf_ttd",$data,true);
          $pdf->writeHTML($html, true, false, true, false, '');      
 

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}

function pdf_besangkutan($id){

        $this->db->where("id",$id);
        $jenis_cetak = $this->uri->segment(4);
        $data = $this->db->get("v_kelahiran");
        $data = $data->row_array();
        // echo $this->db->last_query();
        // show_array($data);
         $data['controller'] = get_class($this);
        $data['header'] = "Detail Surat Kelahiran";
        $data['title'] = $data['header'];
        $data['jenis_cetak'] = $jenis_cetak;
        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);       
        $pdf->SetMargins(25, 10, 20);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', '8'));

       // $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

         // add a page
        $pdf->AddPage('P');


        $html =  $this->load->view("pdf/surat_kelahiran_pdf_arsip_desa2",$data,true);
        
        $pdf->writeHTML($html, true, false, true, false, '');      
 

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}

function pdf_arsip_camata($id){

        $this->db->where("id",$id);
        $jenis_cetak = $this->uri->segment(4);
        $data = $this->db->get("v_kelahiran");
        $data = $data->row_array();
        // echo $this->db->last_query();
        // show_array($data);
         $data['controller'] = get_class($this);
        $data['header'] = "Detail Surat Kelahiran";
        $data['title'] = $data['header'];
        $data['jenis_cetak'] = $jenis_cetak;
        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);       
        $pdf->SetMargins(25, 10, 20);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', '8'));

       // $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

         // add a page
        $pdf->AddPage('P');


        $html =  $this->load->view("pdf/surat_kelahiran_pdf_arsip_kecamatan2",$data,true);
        
        $pdf->writeHTML($html, true, false, true, false, '');      
 

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}
function pdf_arsip_desa($id){

        $this->db->where("id",$id);
        $jenis_cetak = $this->uri->segment(4);
        $data = $this->db->get("v_kelahiran");
        $data = $data->row_array();
        // echo $this->db->last_query();
        // show_array($data);
         $data['controller'] = get_class($this);
        $data['header'] = "Detail Surat Kelahiran";
        $data['title'] = $data['header'];
        $data['jenis_cetak'] = $jenis_cetak;
        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);       
        $pdf->SetMargins(25, 10, 20);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', '8'));

       // $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

         // add a page
        $pdf->AddPage('P');


        $html =  $this->load->view("pdf/surat_kelahiran_pdf_arsip_desa2",$data,true);
        
        $pdf->writeHTML($html, true, false, true, false, '');      
 

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}
function pdf_pernyataan($id){

        $this->db->where("id",$id);
        $jenis_cetak = $this->uri->segment(4);
        $data = $this->db->get("v_kelahiran");
        $data = $data->row_array();
        // echo $this->db->last_query();
        // show_array($data);
         $data['controller'] = get_class($this);
        $data['header'] = "Detail Surat Kelahiran";
        $data['title'] = $data['header'];
        $data['jenis_cetak'] = $jenis_cetak;
        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);       
        $pdf->SetMargins(25, 10, 20);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', '8'));

       // $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

         // add a page
        $pdf->AddPage('P');


        $html =  $this->load->view("pdf/surat_pernyataan",$data,true);
        
        $pdf->writeHTML($html, true, false, true, false, '');      
 

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}

function pdf_kebenaran($id){

        $this->db->where("id",$id);
        $jenis_cetak = $this->uri->segment(4);
        $data = $this->db->get("v_kelahiran");
        $data = $data->row_array();
        // echo $this->db->last_query();
        // show_array($data);
         $data['controller'] = get_class($this);
        $data['header'] = "Detail Surat Kelahiran";
        $data['title'] = $data['header'];
        $data['jenis_cetak'] = $jenis_cetak;
        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);       
        $pdf->SetMargins(25, 10, 20);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', '8'));

       // $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

         // add a page
        $pdf->AddPage('P');


        $html =  $this->load->view("pdf/surat_kebenaran_kelahiran",$data,true);
        
        $pdf->writeHTML($html, true, false, true, false, '');      
 

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}




function word($id) {
        $this->db->where("id",$id);
        $jenis_cetak = $this->uri->segment(4);
        $data = $this->db->get("v_kelahiran");
        $data = $data->row_array();
        $data['jenis_cetak'] = $jenis_cetak;
        // if($jenis_cetak == "arsip_camata" ) 
        //     {
        //         $html =  $this->load->view("rtf/surat_kelahiran_kec_rtf",$data,true);
        //     }
        //     else {
        //         $html =  $this->load->view("rtf/surat_kelahiran_kec_rtf",$data,true);
        //     }
        
         if($jenis_cetak == "arsip_camata" ) 
            {
                $html =  $this->load->view("pdf/surat_kelahiran_pdf_arsip_kecamatan",$data,true);
            }
            else {
                $html =  $this->load->view("pdf/surat_kelahiran_pdf_arsip_desa",$data,true);
            } 
        force_download("surat kelahiran.doc", $html);
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