<?php 
class statistik_penduduk_kelompok_umur extends  op_controller {
 	function __construct() {
		parent::__construct();
 
		$this->load->model("penkeum","dm");
		$this->load->model("core_model","cm");
		$this->load->model("add_model","am");
		$this->load->helper("tanggal");
		 
		 
	}

function index()
    {
 
    $data['title'] = "Data Penduduk Berdasarkan Batasan Umur";    
    $data['header'] = "Data Penduduk Berdasarkan Batasan Umur";
    $data['controller'] = "statistik_penduduk_kelompok_umur";
     

    $content = $this->load->view("statistik_penduduk_kelompok_umur_view",$data,true);

    $this->set_title("Data Pendudku");
    $this->set_content($content);
    $this->render();
    }



function u_1_5()
    {
 
    $data['title'] = "Data Penduduk Berumur 0 - 5 Tahun";	
    $data['header'] = "Data Penduduk Berumur 0 - 5 Tahun";
	$data['controller'] = "statistik_penduduk_kelompok_umur";
   	 

   	$content = $this->load->view("u_1_5/statistik_penduduk_kelompok_umur_u_1_5_view",$data,true);

	$this->set_title("Data Pendudku");
	$this->set_content($content);
	$this->render();
    }

function u_6_10()
    {
 
    $data['title'] = "Data Penduduk Berumur 6 - 10 Tahun";    
    $data['header'] = "Data Penduduk Berumur 6 - 10 Tahun";
    $data['controller'] = "statistik_penduduk_kelompok_umur";
     

    $content = $this->load->view("u_6_10/statistik_penduduk_kelompok_umur_u_6_10_view",$data,true);

    $this->set_title("Data Pendudku");
    $this->set_content($content);
    $this->render();
    }

function u_11_20()
    {
 
    $data['title'] = "Data Penduduk Berumur 11 - 20 Tahun";    
    $data['header'] = "Data Penduduk Berumur 11 - 20 Tahun";
    $data['controller'] = "statistik_penduduk_kelompok_umur";
     

    $content = $this->load->view("u_11_20/statistik_penduduk_kelompok_umur_u_11_20_view",$data,true);

    $this->set_title("Data Pendudku");
    $this->set_content($content);
    $this->render();
    }

 function u_21_30()
    {
 
    $data['title'] = "Data Penduduk Berumur 21 - 30 Tahun";    
    $data['header'] = "Data Penduduk Berumur 21 - 30 Tahun";
    $data['controller'] = "statistik_penduduk_kelompok_umur";
     

    $content = $this->load->view("u_21_30/statistik_penduduk_kelompok_umur_u_21_30_view",$data,true);

    $this->set_title("Data Pendudku");
    $this->set_content($content);
    $this->render();
    }

 function u_31_40()
    {
 
    $data['title'] = "Data Penduduk Berumur 31 -40 Tahun";    
    $data['header'] = "Data Penduduk Berumur 31 -40 Tahun";
    $data['controller'] = "statistik_penduduk_kelompok_umur";
     

    $content = $this->load->view("u_31_40/statistik_penduduk_kelompok_umur_u_31_40_view",$data,true);

    $this->set_title("Data Pendudku");
    $this->set_content($content);
    $this->render();
    }



 function u_41_50()
    {
 
    $data['title'] = "Data Penduduk Berumur 41 -50 Tahun";    
    $data['header'] = "Data Penduduk Berumur 41 -50 Tahun";
    $data['controller'] = "statistik_penduduk_kelompok_umur";
     

    $content = $this->load->view("u_41_50/statistik_penduduk_kelompok_umur_u_41_50_view",$data,true);

    $this->set_title("Data Pendudku");
    $this->set_content($content);
    $this->render();
    }

function u_51_60()
    {
 
    $data['title'] = "Data Penduduk Berumur 51 -60 Tahun";    
    $data['header'] = "Data Penduduk Berumur 51 -60 Tahun";
    $data['controller'] = "statistik_penduduk_kelompok_umur";
     

    $content = $this->load->view("u_51_60/statistik_penduduk_kelompok_umur_u_51_60_view",$data,true);

    $this->set_title("Data Pendudku");
    $this->set_content($content);
    $this->render();
    }

function u_61_70()
    {
 
    $data['title'] = "Data Penduduk Berumur 61 -70 Tahun";    
    $data['header'] = "Data Penduduk Berumur 61 -70 Tahun";
    $data['controller'] = "statistik_penduduk_kelompok_umur";
     

    $content = $this->load->view("u_61_70/statistik_penduduk_kelompok_umur_u_61_70_view",$data,true);

    $this->set_title("Data Pendudku");
    $this->set_content($content);
    $this->render();
    }

 function u_70()
    {
 
    $data['title'] = "Data Penduduk Berumur Diatas 70 Tahun";    
    $data['header'] = "Data Penduduk Berumur Diatas 70 Tahun";
    $data['controller'] = "statistik_penduduk_kelompok_umur";
     

    $content = $this->load->view("u_70/statistik_penduduk_kelompok_umur_u_70_view",$data,true);

    $this->set_title("Data Pendudku");
    $this->set_content($content);
    $this->render();
    }







function get_data(){
        $page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"provinsi"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        //$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        //$id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
        $nama  = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $nik  = isset($_REQUEST['search_nik'])?$_REQUEST['search_nik']:"x";
        $status_kependudukan  = isset($_REQUEST['search_status_kependudukan'])?$_REQUEST['search_status_kependudukan']:"x";
        $status_kawin  = isset($_REQUEST['search_status_kawin'])?$_REQUEST['search_status_kawin']:"x";
        $jk  = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";
       
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null  ,
                "id_desa"   => $this->session->userdata("operator_id_desa"),
                "nik" => $nik,
                "jk" => $jk,
                "status_kawin" => $status_kawin,
                "status_kependudukan" => $status_kependudukan,
                "nama" => $nama    
                /*
                "id_kecamatan" => $id_kecamatan */
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
        $responce = new stdClass();
        $responce->total = $count; 
        //$responce->records = $count;


        $x=0;
        if($count == 0 ) {
              $responce->rows[0]['nik']         = " ";    
        }    
        else {     
        for($i=0; $i<count($result); $i++){
            $x++;
            //$responce->rows[$i]['id']=$result[$i]['id_provinsi'];
            // data berikut harus sesuai dengan kolom-kolom yang ingin ditampilkan di view (js)
            $responce->rows[$i]['id_penduduk']          = $result[$i]['id_penduduk'] ;    
            $responce->rows[$i]['nik']          = $result[$i]['nik'] ;    
            $responce->rows[$i]['nama']         = $result[$i]['nama'] ; 
            $responce->rows[$i]['tgl_lahir']    = $result[$i]['tgl_lahir'] ;       
            
            $responce->rows[$i]['tmp_lahir']    = $result[$i]['tmp_lahir'] ; 
            $responce->rows[$i]['jk']           = $result[$i]['jk'] ;  
            $responce->rows[$i]['alamat']       = $result[$i]['alamat'] ;  
            $responce->rows[$i]['rt']           = $result[$i]['rt'] ;  
            $responce->rows[$i]['rw']           = $result[$i]['rw'] ;
            $responce->rows[$i]['id_desa']      = $result[$i]['id_desa'] ; 
            $responce->rows[$i]['desa']         = $result[$i]['desa'] ;   
            $responce->rows[$i]['id_dusun']     = $result[$i]['id_dusun'] ;
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;   
            $responce->rows[$i]['kecamatan']    = $result[$i]['kecamatan'] ; 
            $responce->rows[$i]['id_pendidikan']        = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['baca_tulis']       = $result[$i]['baca_tulis'] ;  
            
              
        
            $responce->rows[$i]['warga_negara'] = $result[$i]['warga_negara'] ;   
            $responce->rows[$i]['golongan_darah']   = $result[$i]['golongan_darah'] ;  
            $responce->rows[$i]['id_agama'] = $result[$i]['id_agama'] ;  
            $responce->rows[$i]['id_pekerjaan'] = $result[$i]['id_pekerjaan'] ;
            $responce->rows[$i]['status_kawin'] = $result[$i]['status_kawin'] ;             
            $responce->rows[$i]['id_pendidikan']    = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;  
            $responce->rows[$i]['status_kependudukan']  = $result[$i]['status_kependudukan'] ; 
            
            $arr_status_kependudukan = $this->cm->arr_status_kependudukan; 
            $responce->rows[$i]['status_kependudukan2'] = $arr_status_kependudukan[$result[$i]['status_kependudukan']] ; 
            $responce->rows[$i]['hidup_mati']   = $result[$i]['hidup_mati'] ; 
            $responce->rows[$i]['keturunan']    = $result[$i]['keturunan'] ;    
            $responce->rows[$i]['dusun']    = $result[$i]['dusun'] ;    
            $responce->rows[$i]['pendidikan']   = $result[$i]['pendidikan'] ;   
            $responce->rows[$i]['pekerjaan']    = $result[$i]['pekerjaan'] ;            
            $responce->rows[$i]['status_hidup'] = $result[$i]['status_hidup'] ;     
            $responce->rows[$i]['umur'] = $result[$i]['umur'] ; 
            
            $responce->rows[$i]['nama_ayah']    = $result[$i]['nama_ayah'] ; 

            $responce->rows[$i]['rt_sebelumnya']        = $result[$i]['rt_sebelumnya'] ; 
            $responce->rows[$i]['rw_sebelumnya']        = $result[$i]['rw_sebelumnya'] ; 
            $responce->rows[$i]['alamat_sebelumnya']        = $result[$i]['alamat_sebelumnya'] ; 
            $responce->rows[$i]['id_desa_sebelumnya']       = $result[$i]['id_desa_sebelumnya'] ; 
            $responce->rows[$i]['id_kecamatan_sebelumnya']      = $result[$i]['id_kecamatan_sebelumnya'] ; 
            $responce->rows[$i]['id_kota_sebelumnya']       = $result[$i]['id_kota_sebelumnya'] ; 
            $responce->rows[$i]['id_provinsi_sebelumnya']       = $result[$i]['id_provinsi_sebelumnya'] ; 
            $responce->rows[$i]['sementara_maksud']     = $result[$i]['sementara_maksud'] ; 
            $responce->rows[$i]['sementara_id_tujuan']      = $result[$i]['sementara_id_tujuan'] ; 
             



             $responce->rows[$i]['foto']            = (!empty($result[$i]['foto']))?
            '<img width="50px" height="50px" src="'.base_url().'foto/' .$result[$i]['foto'].'" />':
            '<img width="50px" height="50px" src="'.base_url().'foto/no_photo.jpg" />';
            
    /*$responce->rows[$i]['no_paspor']      = $result[$i]['no_paspor'] ; 
            $responce->rows[$i]['tgl_paspor_akhir'] = $result[$i]['tgl_paspor_akhir'] ; 
            $responce->rows[$i]['no_akta_lahir']    = $result[$i]['no_akta_lahir'] ; 
            $responce->rows[$i]['no_akta_nikah']    = $result[$i]['no_akta_nikah'] ; 
            $responce->rows[$i]['tgl_akta_nikah']   = $result[$i]['tgl_akta_nikah'] ; 
            $responce->rows[$i]['no_akta_cerai']    = $result[$i]['no_akta_cerai'] ; 
            $responce->rows[$i]['tgl_akta_cerai']   = $result[$i]['tgl_akta_cerai'] ; */

             

        }
    }
        echo json_encode($responce); 
    }
 
 
function get_data_u_1_5(){
        $page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"provinsi"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        //$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        //$id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
        $nama  = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $nik  = isset($_REQUEST['search_nik'])?$_REQUEST['search_nik']:"x";
        $status_kependudukan  = isset($_REQUEST['search_status_kependudukan'])?$_REQUEST['search_status_kependudukan']:"x";
        $status_kawin  = isset($_REQUEST['search_status_kawin'])?$_REQUEST['search_status_kawin']:"x";
        $jk  = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";
       
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null  ,
                "id_desa"   => $this->session->userdata("operator_id_desa"),
                "nik" => $nik,
                "jk" => $jk,
                "status_kawin" => $status_kawin,
                "status_kependudukan" => $status_kependudukan,
                "nama" => $nama    
                /*
                "id_kecamatan" => $id_kecamatan */
        );     
           
        $row = $this->dm->get_data_1_5($req_param)->result_array();
        
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
        
        $result = $this->dm->get_data_1_5($req_param)->result_array();        
        $responce = new stdClass();
        $responce->total = $count; 
        //$responce->records = $count;


        $x=0;
        if($count == 0 ) {
              $responce->rows[0]['nik']         = " ";    
        }    
        else {     
        for($i=0; $i<count($result); $i++){
            $x++;
            //$responce->rows[$i]['id']=$result[$i]['id_provinsi'];
            // data berikut harus sesuai dengan kolom-kolom yang ingin ditampilkan di view (js)
            $responce->rows[$i]['id_penduduk']          = $result[$i]['id_penduduk'] ;    
            $responce->rows[$i]['nik']          = $result[$i]['nik'] ;    
            $responce->rows[$i]['nama']         = $result[$i]['nama'] ; 
            $responce->rows[$i]['tgl_lahir']    = $result[$i]['tgl_lahir'] ;       
            
            $responce->rows[$i]['tmp_lahir']    = $result[$i]['tmp_lahir'] ; 
            $responce->rows[$i]['jk']           = $result[$i]['jk'] ;  
            $responce->rows[$i]['alamat']       = $result[$i]['alamat'] ;  
            $responce->rows[$i]['rt']           = $result[$i]['rt'] ;  
            $responce->rows[$i]['rw']           = $result[$i]['rw'] ;
            $responce->rows[$i]['id_desa']      = $result[$i]['id_desa'] ; 
            $responce->rows[$i]['desa']         = $result[$i]['desa'] ;   
            $responce->rows[$i]['id_dusun']     = $result[$i]['id_dusun'] ;
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;   
            $responce->rows[$i]['kecamatan']    = $result[$i]['kecamatan'] ; 
            $responce->rows[$i]['id_pendidikan']        = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['baca_tulis']       = $result[$i]['baca_tulis'] ;  
            
              
        
            $responce->rows[$i]['warga_negara'] = $result[$i]['warga_negara'] ;   
            $responce->rows[$i]['golongan_darah']   = $result[$i]['golongan_darah'] ;  
            $responce->rows[$i]['id_agama'] = $result[$i]['id_agama'] ;  
            $responce->rows[$i]['id_pekerjaan'] = $result[$i]['id_pekerjaan'] ;
            $responce->rows[$i]['status_kawin'] = $result[$i]['status_kawin'] ;             
            $responce->rows[$i]['id_pendidikan']    = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;  
            $responce->rows[$i]['status_kependudukan']  = $result[$i]['status_kependudukan'] ; 
            
            $arr_status_kependudukan = $this->cm->arr_status_kependudukan; 
            $responce->rows[$i]['status_kependudukan2'] = $arr_status_kependudukan[$result[$i]['status_kependudukan']] ; 
            $responce->rows[$i]['hidup_mati']   = $result[$i]['hidup_mati'] ; 
            $responce->rows[$i]['keturunan']    = $result[$i]['keturunan'] ;    
            $responce->rows[$i]['dusun']    = $result[$i]['dusun'] ;    
            $responce->rows[$i]['pendidikan']   = $result[$i]['pendidikan'] ;   
            $responce->rows[$i]['pekerjaan']    = $result[$i]['pekerjaan'] ;            
            $responce->rows[$i]['status_hidup'] = $result[$i]['status_hidup'] ;     
            $responce->rows[$i]['umur'] = $result[$i]['umur'] ; 
            
            $responce->rows[$i]['nama_ayah']    = $result[$i]['nama_ayah'] ; 

            $responce->rows[$i]['rt_sebelumnya']        = $result[$i]['rt_sebelumnya'] ; 
            $responce->rows[$i]['rw_sebelumnya']        = $result[$i]['rw_sebelumnya'] ; 
            $responce->rows[$i]['alamat_sebelumnya']        = $result[$i]['alamat_sebelumnya'] ; 
            $responce->rows[$i]['id_desa_sebelumnya']       = $result[$i]['id_desa_sebelumnya'] ; 
            $responce->rows[$i]['id_kecamatan_sebelumnya']      = $result[$i]['id_kecamatan_sebelumnya'] ; 
            $responce->rows[$i]['id_kota_sebelumnya']       = $result[$i]['id_kota_sebelumnya'] ; 
            $responce->rows[$i]['id_provinsi_sebelumnya']       = $result[$i]['id_provinsi_sebelumnya'] ; 
            $responce->rows[$i]['sementara_maksud']     = $result[$i]['sementara_maksud'] ; 
            $responce->rows[$i]['sementara_id_tujuan']      = $result[$i]['sementara_id_tujuan'] ; 
             



             $responce->rows[$i]['foto']            = (!empty($result[$i]['foto']))?
            '<img width="50px" height="50px" src="'.base_url().'foto/' .$result[$i]['foto'].'" />':
            '<img width="50px" height="50px" src="'.base_url().'foto/no_photo.jpg" />';
            
    /*$responce->rows[$i]['no_paspor']      = $result[$i]['no_paspor'] ; 
            $responce->rows[$i]['tgl_paspor_akhir'] = $result[$i]['tgl_paspor_akhir'] ; 
            $responce->rows[$i]['no_akta_lahir']    = $result[$i]['no_akta_lahir'] ; 
            $responce->rows[$i]['no_akta_nikah']    = $result[$i]['no_akta_nikah'] ; 
            $responce->rows[$i]['tgl_akta_nikah']   = $result[$i]['tgl_akta_nikah'] ; 
            $responce->rows[$i]['no_akta_cerai']    = $result[$i]['no_akta_cerai'] ; 
            $responce->rows[$i]['tgl_akta_cerai']   = $result[$i]['tgl_akta_cerai'] ; */

             

        }
    }
        echo json_encode($responce); 
    }
 
 
function get_data_u_6_10(){
    	$page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"provinsi"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        //$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        //$id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
        $nama  = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $nik  = isset($_REQUEST['search_nik'])?$_REQUEST['search_nik']:"x";
        $status_kependudukan  = isset($_REQUEST['search_status_kependudukan'])?$_REQUEST['search_status_kependudukan']:"x";
        $status_kawin  = isset($_REQUEST['search_status_kawin'])?$_REQUEST['search_status_kawin']:"x";
        $jk  = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";
       
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null  ,
				"id_desa"	=> $this->session->userdata("operator_id_desa"),
				"nik" => $nik,
				"jk" => $jk,
				"status_kawin" => $status_kawin,
				"status_kependudukan" => $status_kependudukan,
				"nama" => $nama    
				/*
				"id_kecamatan" => $id_kecamatan */
		);     
           
        $row = $this->dm->get_data_u_6_10($req_param)->result_array();
		
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
        
        $result = $this->dm->get_data_u_6_10($req_param)->result_array();        
        $responce = new stdClass();
        $responce->total = $count; 
        //$responce->records = $count;


        $x=0;
        if($count == 0 ) {
        	  $responce->rows[0]['nik']			= " ";    
        }    
        else {     
        for($i=0; $i<count($result); $i++){
        	$x++;
            //$responce->rows[$i]['id']=$result[$i]['id_provinsi'];
            // data berikut harus sesuai dengan kolom-kolom yang ingin ditampilkan di view (js)
            $responce->rows[$i]['id_penduduk']			= $result[$i]['id_penduduk'] ;    
            $responce->rows[$i]['nik']			= $result[$i]['nik'] ;    
			$responce->rows[$i]['nama']			= $result[$i]['nama'] ; 
			$responce->rows[$i]['tgl_lahir']	= $result[$i]['tgl_lahir'] ;       
			
			$responce->rows[$i]['tmp_lahir']	= $result[$i]['tmp_lahir'] ; 
			$responce->rows[$i]['jk']			= $result[$i]['jk'] ;  
			$responce->rows[$i]['alamat']		= $result[$i]['alamat'] ;  
			$responce->rows[$i]['rt']			= $result[$i]['rt'] ;  
			$responce->rows[$i]['rw']			= $result[$i]['rw'] ;
			$responce->rows[$i]['id_desa']		= $result[$i]['id_desa'] ; 
			$responce->rows[$i]['desa']			= $result[$i]['desa'] ;   
			$responce->rows[$i]['id_dusun']		= $result[$i]['id_dusun'] ;
			$responce->rows[$i]['id_kecamatan']	= $result[$i]['id_kecamatan'] ;   
			$responce->rows[$i]['kecamatan']	= $result[$i]['kecamatan'] ; 
			$responce->rows[$i]['id_pendidikan']		= $result[$i]['id_pendidikan'] ;  
			$responce->rows[$i]['baca_tulis']		= $result[$i]['baca_tulis'] ;  
			
			  
 		
			$responce->rows[$i]['warga_negara']	= $result[$i]['warga_negara'] ;   
			$responce->rows[$i]['golongan_darah']	= $result[$i]['golongan_darah'] ;  
 			$responce->rows[$i]['id_agama']	= $result[$i]['id_agama'] ;  
			$responce->rows[$i]['id_pekerjaan']	= $result[$i]['id_pekerjaan'] ;
			$responce->rows[$i]['status_kawin']	= $result[$i]['status_kawin'] ;    			
			$responce->rows[$i]['id_pendidikan']	= $result[$i]['id_pendidikan'] ;  
			$responce->rows[$i]['id_kecamatan']	= $result[$i]['id_kecamatan'] ;  
			$responce->rows[$i]['status_kependudukan']	= $result[$i]['status_kependudukan'] ; 
			
			$arr_status_kependudukan = $this->cm->arr_status_kependudukan; 
			$responce->rows[$i]['status_kependudukan2']	= $arr_status_kependudukan[$result[$i]['status_kependudukan']] ; 
			$responce->rows[$i]['hidup_mati']	= $result[$i]['hidup_mati'] ; 
 			$responce->rows[$i]['keturunan']	= $result[$i]['keturunan'] ; 	
			$responce->rows[$i]['dusun']	= $result[$i]['dusun'] ; 	
			$responce->rows[$i]['pendidikan']	= $result[$i]['pendidikan'] ; 	
			$responce->rows[$i]['pekerjaan']	= $result[$i]['pekerjaan'] ; 			
			$responce->rows[$i]['status_hidup']	= $result[$i]['status_hidup'] ; 	
			$responce->rows[$i]['umur']	= $result[$i]['umur'] ; 
			
			$responce->rows[$i]['nama_ayah']	= $result[$i]['nama_ayah'] ; 

			$responce->rows[$i]['rt_sebelumnya']		= $result[$i]['rt_sebelumnya'] ; 
			$responce->rows[$i]['rw_sebelumnya']		= $result[$i]['rw_sebelumnya'] ; 
			$responce->rows[$i]['alamat_sebelumnya']		= $result[$i]['alamat_sebelumnya'] ; 
			$responce->rows[$i]['id_desa_sebelumnya']		= $result[$i]['id_desa_sebelumnya'] ; 
			$responce->rows[$i]['id_kecamatan_sebelumnya']		= $result[$i]['id_kecamatan_sebelumnya'] ; 
			$responce->rows[$i]['id_kota_sebelumnya']		= $result[$i]['id_kota_sebelumnya'] ; 
			$responce->rows[$i]['id_provinsi_sebelumnya']		= $result[$i]['id_provinsi_sebelumnya'] ; 
			$responce->rows[$i]['sementara_maksud']		= $result[$i]['sementara_maksud'] ; 
			$responce->rows[$i]['sementara_id_tujuan']		= $result[$i]['sementara_id_tujuan'] ; 
			 



			 $responce->rows[$i]['foto']			= (!empty($result[$i]['foto']))?
			'<img width="50px" height="50px" src="'.base_url().'foto/' .$result[$i]['foto'].'" />':
			'<img width="50px" height="50px" src="'.base_url().'foto/no_photo.jpg" />';
			
	/*$responce->rows[$i]['no_paspor']		= $result[$i]['no_paspor'] ; 
			$responce->rows[$i]['tgl_paspor_akhir']	= $result[$i]['tgl_paspor_akhir'] ; 
			$responce->rows[$i]['no_akta_lahir']	= $result[$i]['no_akta_lahir'] ; 
			$responce->rows[$i]['no_akta_nikah']	= $result[$i]['no_akta_nikah'] ; 
			$responce->rows[$i]['tgl_akta_nikah']	= $result[$i]['tgl_akta_nikah'] ; 
			$responce->rows[$i]['no_akta_cerai']	= $result[$i]['no_akta_cerai'] ; 
			$responce->rows[$i]['tgl_akta_cerai']	= $result[$i]['tgl_akta_cerai'] ; */

			 

        }
    }
        echo json_encode($responce); 
    }


    function get_data_u_11_20(){
        $page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"provinsi"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        //$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        //$id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
        $nama  = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $nik  = isset($_REQUEST['search_nik'])?$_REQUEST['search_nik']:"x";
        $status_kependudukan  = isset($_REQUEST['search_status_kependudukan'])?$_REQUEST['search_status_kependudukan']:"x";
        $status_kawin  = isset($_REQUEST['search_status_kawin'])?$_REQUEST['search_status_kawin']:"x";
        $jk  = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";
       
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null  ,
                "id_desa"   => $this->session->userdata("operator_id_desa"),
                "nik" => $nik,
                "jk" => $jk,
                "status_kawin" => $status_kawin,
                "status_kependudukan" => $status_kependudukan,
                "nama" => $nama    
                /*
                "id_kecamatan" => $id_kecamatan */
        );     
           
        $row = $this->dm->get_data_u_11_20($req_param)->result_array();
        
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
        
        $result = $this->dm->get_data_u_11_20($req_param)->result_array();        
        $responce = new stdClass();
        $responce->total = $count; 
        //$responce->records = $count;


        $x=0;
        if($count == 0 ) {
              $responce->rows[0]['nik']         = " ";    
        }    
        else {     
        for($i=0; $i<count($result); $i++){
            $x++;
            //$responce->rows[$i]['id']=$result[$i]['id_provinsi'];
            // data berikut harus sesuai dengan kolom-kolom yang ingin ditampilkan di view (js)
            $responce->rows[$i]['id_penduduk']          = $result[$i]['id_penduduk'] ;    
            $responce->rows[$i]['nik']          = $result[$i]['nik'] ;    
            $responce->rows[$i]['nama']         = $result[$i]['nama'] ; 
            $responce->rows[$i]['tgl_lahir']    = $result[$i]['tgl_lahir'] ;       
            
            $responce->rows[$i]['tmp_lahir']    = $result[$i]['tmp_lahir'] ; 
            $responce->rows[$i]['jk']           = $result[$i]['jk'] ;  
            $responce->rows[$i]['alamat']       = $result[$i]['alamat'] ;  
            $responce->rows[$i]['rt']           = $result[$i]['rt'] ;  
            $responce->rows[$i]['rw']           = $result[$i]['rw'] ;
            $responce->rows[$i]['id_desa']      = $result[$i]['id_desa'] ; 
            $responce->rows[$i]['desa']         = $result[$i]['desa'] ;   
            $responce->rows[$i]['id_dusun']     = $result[$i]['id_dusun'] ;
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;   
            $responce->rows[$i]['kecamatan']    = $result[$i]['kecamatan'] ; 
            $responce->rows[$i]['id_pendidikan']        = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['baca_tulis']       = $result[$i]['baca_tulis'] ;  
            
              
        
            $responce->rows[$i]['warga_negara'] = $result[$i]['warga_negara'] ;   
            $responce->rows[$i]['golongan_darah']   = $result[$i]['golongan_darah'] ;  
            $responce->rows[$i]['id_agama'] = $result[$i]['id_agama'] ;  
            $responce->rows[$i]['id_pekerjaan'] = $result[$i]['id_pekerjaan'] ;
            $responce->rows[$i]['status_kawin'] = $result[$i]['status_kawin'] ;             
            $responce->rows[$i]['id_pendidikan']    = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;  
            $responce->rows[$i]['status_kependudukan']  = $result[$i]['status_kependudukan'] ; 
            
            $arr_status_kependudukan = $this->cm->arr_status_kependudukan; 
            $responce->rows[$i]['status_kependudukan2'] = $arr_status_kependudukan[$result[$i]['status_kependudukan']] ; 
            $responce->rows[$i]['hidup_mati']   = $result[$i]['hidup_mati'] ; 
            $responce->rows[$i]['keturunan']    = $result[$i]['keturunan'] ;    
            $responce->rows[$i]['dusun']    = $result[$i]['dusun'] ;    
            $responce->rows[$i]['pendidikan']   = $result[$i]['pendidikan'] ;   
            $responce->rows[$i]['pekerjaan']    = $result[$i]['pekerjaan'] ;            
            $responce->rows[$i]['status_hidup'] = $result[$i]['status_hidup'] ;     
            $responce->rows[$i]['umur'] = $result[$i]['umur'] ; 
            
            $responce->rows[$i]['nama_ayah']    = $result[$i]['nama_ayah'] ; 

            $responce->rows[$i]['rt_sebelumnya']        = $result[$i]['rt_sebelumnya'] ; 
            $responce->rows[$i]['rw_sebelumnya']        = $result[$i]['rw_sebelumnya'] ; 
            $responce->rows[$i]['alamat_sebelumnya']        = $result[$i]['alamat_sebelumnya'] ; 
            $responce->rows[$i]['id_desa_sebelumnya']       = $result[$i]['id_desa_sebelumnya'] ; 
            $responce->rows[$i]['id_kecamatan_sebelumnya']      = $result[$i]['id_kecamatan_sebelumnya'] ; 
            $responce->rows[$i]['id_kota_sebelumnya']       = $result[$i]['id_kota_sebelumnya'] ; 
            $responce->rows[$i]['id_provinsi_sebelumnya']       = $result[$i]['id_provinsi_sebelumnya'] ; 
            $responce->rows[$i]['sementara_maksud']     = $result[$i]['sementara_maksud'] ; 
            $responce->rows[$i]['sementara_id_tujuan']      = $result[$i]['sementara_id_tujuan'] ; 
             



             $responce->rows[$i]['foto']            = (!empty($result[$i]['foto']))?
            '<img width="50px" height="50px" src="'.base_url().'foto/' .$result[$i]['foto'].'" />':
            '<img width="50px" height="50px" src="'.base_url().'foto/no_photo.jpg" />';
            
    /*$responce->rows[$i]['no_paspor']      = $result[$i]['no_paspor'] ; 
            $responce->rows[$i]['tgl_paspor_akhir'] = $result[$i]['tgl_paspor_akhir'] ; 
            $responce->rows[$i]['no_akta_lahir']    = $result[$i]['no_akta_lahir'] ; 
            $responce->rows[$i]['no_akta_nikah']    = $result[$i]['no_akta_nikah'] ; 
            $responce->rows[$i]['tgl_akta_nikah']   = $result[$i]['tgl_akta_nikah'] ; 
            $responce->rows[$i]['no_akta_cerai']    = $result[$i]['no_akta_cerai'] ; 
            $responce->rows[$i]['tgl_akta_cerai']   = $result[$i]['tgl_akta_cerai'] ; */

             

        }
    }
        echo json_encode($responce); 
    }
 
   function get_data_u_21_30(){
        $page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"provinsi"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        //$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        //$id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
        $nama  = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $nik  = isset($_REQUEST['search_nik'])?$_REQUEST['search_nik']:"x";
        $status_kependudukan  = isset($_REQUEST['search_status_kependudukan'])?$_REQUEST['search_status_kependudukan']:"x";
        $status_kawin  = isset($_REQUEST['search_status_kawin'])?$_REQUEST['search_status_kawin']:"x";
        $jk  = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";
       
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null  ,
                "id_desa"   => $this->session->userdata("operator_id_desa"),
                "nik" => $nik,
                "jk" => $jk,
                "status_kawin" => $status_kawin,
                "status_kependudukan" => $status_kependudukan,
                "nama" => $nama    
                /*
                "id_kecamatan" => $id_kecamatan */
        );     
           
        $row = $this->dm->get_data_u_21_30($req_param)->result_array();
        
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
        
        $result = $this->dm->get_data_u_21_30($req_param)->result_array();        
        $responce = new stdClass();
        $responce->total = $count; 
        //$responce->records = $count;


        $x=0;
        if($count == 0 ) {
              $responce->rows[0]['nik']         = " ";    
        }    
        else {     
        for($i=0; $i<count($result); $i++){
            $x++;
            //$responce->rows[$i]['id']=$result[$i]['id_provinsi'];
            // data berikut harus sesuai dengan kolom-kolom yang ingin ditampilkan di view (js)
            $responce->rows[$i]['id_penduduk']          = $result[$i]['id_penduduk'] ;    
            $responce->rows[$i]['nik']          = $result[$i]['nik'] ;    
            $responce->rows[$i]['nama']         = $result[$i]['nama'] ; 
            $responce->rows[$i]['tgl_lahir']    = $result[$i]['tgl_lahir'] ;       
            
            $responce->rows[$i]['tmp_lahir']    = $result[$i]['tmp_lahir'] ; 
            $responce->rows[$i]['jk']           = $result[$i]['jk'] ;  
            $responce->rows[$i]['alamat']       = $result[$i]['alamat'] ;  
            $responce->rows[$i]['rt']           = $result[$i]['rt'] ;  
            $responce->rows[$i]['rw']           = $result[$i]['rw'] ;
            $responce->rows[$i]['id_desa']      = $result[$i]['id_desa'] ; 
            $responce->rows[$i]['desa']         = $result[$i]['desa'] ;   
            $responce->rows[$i]['id_dusun']     = $result[$i]['id_dusun'] ;
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;   
            $responce->rows[$i]['kecamatan']    = $result[$i]['kecamatan'] ; 
            $responce->rows[$i]['id_pendidikan']        = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['baca_tulis']       = $result[$i]['baca_tulis'] ;  
            
              
        
            $responce->rows[$i]['warga_negara'] = $result[$i]['warga_negara'] ;   
            $responce->rows[$i]['golongan_darah']   = $result[$i]['golongan_darah'] ;  
            $responce->rows[$i]['id_agama'] = $result[$i]['id_agama'] ;  
            $responce->rows[$i]['id_pekerjaan'] = $result[$i]['id_pekerjaan'] ;
            $responce->rows[$i]['status_kawin'] = $result[$i]['status_kawin'] ;             
            $responce->rows[$i]['id_pendidikan']    = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;  
            $responce->rows[$i]['status_kependudukan']  = $result[$i]['status_kependudukan'] ; 
            
            $arr_status_kependudukan = $this->cm->arr_status_kependudukan; 
            $responce->rows[$i]['status_kependudukan2'] = $arr_status_kependudukan[$result[$i]['status_kependudukan']] ; 
            $responce->rows[$i]['hidup_mati']   = $result[$i]['hidup_mati'] ; 
            $responce->rows[$i]['keturunan']    = $result[$i]['keturunan'] ;    
            $responce->rows[$i]['dusun']    = $result[$i]['dusun'] ;    
            $responce->rows[$i]['pendidikan']   = $result[$i]['pendidikan'] ;   
            $responce->rows[$i]['pekerjaan']    = $result[$i]['pekerjaan'] ;            
            $responce->rows[$i]['status_hidup'] = $result[$i]['status_hidup'] ;     
            $responce->rows[$i]['umur'] = $result[$i]['umur'] ; 
            
            $responce->rows[$i]['nama_ayah']    = $result[$i]['nama_ayah'] ; 

            $responce->rows[$i]['rt_sebelumnya']        = $result[$i]['rt_sebelumnya'] ; 
            $responce->rows[$i]['rw_sebelumnya']        = $result[$i]['rw_sebelumnya'] ; 
            $responce->rows[$i]['alamat_sebelumnya']        = $result[$i]['alamat_sebelumnya'] ; 
            $responce->rows[$i]['id_desa_sebelumnya']       = $result[$i]['id_desa_sebelumnya'] ; 
            $responce->rows[$i]['id_kecamatan_sebelumnya']      = $result[$i]['id_kecamatan_sebelumnya'] ; 
            $responce->rows[$i]['id_kota_sebelumnya']       = $result[$i]['id_kota_sebelumnya'] ; 
            $responce->rows[$i]['id_provinsi_sebelumnya']       = $result[$i]['id_provinsi_sebelumnya'] ; 
            $responce->rows[$i]['sementara_maksud']     = $result[$i]['sementara_maksud'] ; 
            $responce->rows[$i]['sementara_id_tujuan']      = $result[$i]['sementara_id_tujuan'] ; 
             



             $responce->rows[$i]['foto']            = (!empty($result[$i]['foto']))?
            '<img width="50px" height="50px" src="'.base_url().'foto/' .$result[$i]['foto'].'" />':
            '<img width="50px" height="50px" src="'.base_url().'foto/no_photo.jpg" />';
            
    /*$responce->rows[$i]['no_paspor']      = $result[$i]['no_paspor'] ; 
            $responce->rows[$i]['tgl_paspor_akhir'] = $result[$i]['tgl_paspor_akhir'] ; 
            $responce->rows[$i]['no_akta_lahir']    = $result[$i]['no_akta_lahir'] ; 
            $responce->rows[$i]['no_akta_nikah']    = $result[$i]['no_akta_nikah'] ; 
            $responce->rows[$i]['tgl_akta_nikah']   = $result[$i]['tgl_akta_nikah'] ; 
            $responce->rows[$i]['no_akta_cerai']    = $result[$i]['no_akta_cerai'] ; 
            $responce->rows[$i]['tgl_akta_cerai']   = $result[$i]['tgl_akta_cerai'] ; */

             

        }
    }
        echo json_encode($responce); 
    }


function get_data_u_31_40(){
        $page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"provinsi"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        //$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        //$id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
        $nama  = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $nik  = isset($_REQUEST['search_nik'])?$_REQUEST['search_nik']:"x";
        $status_kependudukan  = isset($_REQUEST['search_status_kependudukan'])?$_REQUEST['search_status_kependudukan']:"x";
        $status_kawin  = isset($_REQUEST['search_status_kawin'])?$_REQUEST['search_status_kawin']:"x";
        $jk  = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";
       
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null  ,
                "id_desa"   => $this->session->userdata("operator_id_desa"),
                "nik" => $nik,
                "jk" => $jk,
                "status_kawin" => $status_kawin,
                "status_kependudukan" => $status_kependudukan,
                "nama" => $nama    
                /*
                "id_kecamatan" => $id_kecamatan */
        );     
           
        $row = $this->dm->get_data_u_31_40($req_param)->result_array();
        
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
        
        $result = $this->dm->get_data_u_31_40($req_param)->result_array();        
        $responce = new stdClass();
        $responce->total = $count; 
        //$responce->records = $count;


        $x=0;
        if($count == 0 ) {
              $responce->rows[0]['nik']         = " ";    
        }    
        else {     
        for($i=0; $i<count($result); $i++){
            $x++;
            //$responce->rows[$i]['id']=$result[$i]['id_provinsi'];
            // data berikut harus sesuai dengan kolom-kolom yang ingin ditampilkan di view (js)
            $responce->rows[$i]['id_penduduk']          = $result[$i]['id_penduduk'] ;    
            $responce->rows[$i]['nik']          = $result[$i]['nik'] ;    
            $responce->rows[$i]['nama']         = $result[$i]['nama'] ; 
            $responce->rows[$i]['tgl_lahir']    = $result[$i]['tgl_lahir'] ;       
            
            $responce->rows[$i]['tmp_lahir']    = $result[$i]['tmp_lahir'] ; 
            $responce->rows[$i]['jk']           = $result[$i]['jk'] ;  
            $responce->rows[$i]['alamat']       = $result[$i]['alamat'] ;  
            $responce->rows[$i]['rt']           = $result[$i]['rt'] ;  
            $responce->rows[$i]['rw']           = $result[$i]['rw'] ;
            $responce->rows[$i]['id_desa']      = $result[$i]['id_desa'] ; 
            $responce->rows[$i]['desa']         = $result[$i]['desa'] ;   
            $responce->rows[$i]['id_dusun']     = $result[$i]['id_dusun'] ;
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;   
            $responce->rows[$i]['kecamatan']    = $result[$i]['kecamatan'] ; 
            $responce->rows[$i]['id_pendidikan']        = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['baca_tulis']       = $result[$i]['baca_tulis'] ;  
            
              
        
            $responce->rows[$i]['warga_negara'] = $result[$i]['warga_negara'] ;   
            $responce->rows[$i]['golongan_darah']   = $result[$i]['golongan_darah'] ;  
            $responce->rows[$i]['id_agama'] = $result[$i]['id_agama'] ;  
            $responce->rows[$i]['id_pekerjaan'] = $result[$i]['id_pekerjaan'] ;
            $responce->rows[$i]['status_kawin'] = $result[$i]['status_kawin'] ;             
            $responce->rows[$i]['id_pendidikan']    = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;  
            $responce->rows[$i]['status_kependudukan']  = $result[$i]['status_kependudukan'] ; 
            
            $arr_status_kependudukan = $this->cm->arr_status_kependudukan; 
            $responce->rows[$i]['status_kependudukan2'] = $arr_status_kependudukan[$result[$i]['status_kependudukan']] ; 
            $responce->rows[$i]['hidup_mati']   = $result[$i]['hidup_mati'] ; 
            $responce->rows[$i]['keturunan']    = $result[$i]['keturunan'] ;    
            $responce->rows[$i]['dusun']    = $result[$i]['dusun'] ;    
            $responce->rows[$i]['pendidikan']   = $result[$i]['pendidikan'] ;   
            $responce->rows[$i]['pekerjaan']    = $result[$i]['pekerjaan'] ;            
            $responce->rows[$i]['status_hidup'] = $result[$i]['status_hidup'] ;     
            $responce->rows[$i]['umur'] = $result[$i]['umur'] ; 
            
            $responce->rows[$i]['nama_ayah']    = $result[$i]['nama_ayah'] ; 

            $responce->rows[$i]['rt_sebelumnya']        = $result[$i]['rt_sebelumnya'] ; 
            $responce->rows[$i]['rw_sebelumnya']        = $result[$i]['rw_sebelumnya'] ; 
            $responce->rows[$i]['alamat_sebelumnya']        = $result[$i]['alamat_sebelumnya'] ; 
            $responce->rows[$i]['id_desa_sebelumnya']       = $result[$i]['id_desa_sebelumnya'] ; 
            $responce->rows[$i]['id_kecamatan_sebelumnya']      = $result[$i]['id_kecamatan_sebelumnya'] ; 
            $responce->rows[$i]['id_kota_sebelumnya']       = $result[$i]['id_kota_sebelumnya'] ; 
            $responce->rows[$i]['id_provinsi_sebelumnya']       = $result[$i]['id_provinsi_sebelumnya'] ; 
            $responce->rows[$i]['sementara_maksud']     = $result[$i]['sementara_maksud'] ; 
            $responce->rows[$i]['sementara_id_tujuan']      = $result[$i]['sementara_id_tujuan'] ; 
             



             $responce->rows[$i]['foto']            = (!empty($result[$i]['foto']))?
            '<img width="50px" height="50px" src="'.base_url().'foto/' .$result[$i]['foto'].'" />':
            '<img width="50px" height="50px" src="'.base_url().'foto/no_photo.jpg" />';
            
    /*$responce->rows[$i]['no_paspor']      = $result[$i]['no_paspor'] ; 
            $responce->rows[$i]['tgl_paspor_akhir'] = $result[$i]['tgl_paspor_akhir'] ; 
            $responce->rows[$i]['no_akta_lahir']    = $result[$i]['no_akta_lahir'] ; 
            $responce->rows[$i]['no_akta_nikah']    = $result[$i]['no_akta_nikah'] ; 
            $responce->rows[$i]['tgl_akta_nikah']   = $result[$i]['tgl_akta_nikah'] ; 
            $responce->rows[$i]['no_akta_cerai']    = $result[$i]['no_akta_cerai'] ; 
            $responce->rows[$i]['tgl_akta_cerai']   = $result[$i]['tgl_akta_cerai'] ; */

             

        }
    }
        echo json_encode($responce); 
    }

function get_data_u_41_50(){
        $page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"provinsi"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        //$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        //$id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
        $nama  = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $nik  = isset($_REQUEST['search_nik'])?$_REQUEST['search_nik']:"x";
        $status_kependudukan  = isset($_REQUEST['search_status_kependudukan'])?$_REQUEST['search_status_kependudukan']:"x";
        $status_kawin  = isset($_REQUEST['search_status_kawin'])?$_REQUEST['search_status_kawin']:"x";
        $jk  = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";
       
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null  ,
                "id_desa"   => $this->session->userdata("operator_id_desa"),
                "nik" => $nik,
                "jk" => $jk,
                "status_kawin" => $status_kawin,
                "status_kependudukan" => $status_kependudukan,
                "nama" => $nama    
                /*
                "id_kecamatan" => $id_kecamatan */
        );     
           
        $row = $this->dm->get_data_u_41_50($req_param)->result_array();
        
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
        
        $result = $this->dm->get_data_u_41_50($req_param)->result_array();        
        $responce = new stdClass();
        $responce->total = $count; 
        //$responce->records = $count;


        $x=0;
        if($count == 0 ) {
              $responce->rows[0]['nik']         = " ";    
        }    
        else {     
        for($i=0; $i<count($result); $i++){
            $x++;
            //$responce->rows[$i]['id']=$result[$i]['id_provinsi'];
            // data berikut harus sesuai dengan kolom-kolom yang ingin ditampilkan di view (js)
            $responce->rows[$i]['id_penduduk']          = $result[$i]['id_penduduk'] ;    
            $responce->rows[$i]['nik']          = $result[$i]['nik'] ;    
            $responce->rows[$i]['nama']         = $result[$i]['nama'] ; 
            $responce->rows[$i]['tgl_lahir']    = $result[$i]['tgl_lahir'] ;       
            
            $responce->rows[$i]['tmp_lahir']    = $result[$i]['tmp_lahir'] ; 
            $responce->rows[$i]['jk']           = $result[$i]['jk'] ;  
            $responce->rows[$i]['alamat']       = $result[$i]['alamat'] ;  
            $responce->rows[$i]['rt']           = $result[$i]['rt'] ;  
            $responce->rows[$i]['rw']           = $result[$i]['rw'] ;
            $responce->rows[$i]['id_desa']      = $result[$i]['id_desa'] ; 
            $responce->rows[$i]['desa']         = $result[$i]['desa'] ;   
            $responce->rows[$i]['id_dusun']     = $result[$i]['id_dusun'] ;
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;   
            $responce->rows[$i]['kecamatan']    = $result[$i]['kecamatan'] ; 
            $responce->rows[$i]['id_pendidikan']        = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['baca_tulis']       = $result[$i]['baca_tulis'] ;  
            
              
        
            $responce->rows[$i]['warga_negara'] = $result[$i]['warga_negara'] ;   
            $responce->rows[$i]['golongan_darah']   = $result[$i]['golongan_darah'] ;  
            $responce->rows[$i]['id_agama'] = $result[$i]['id_agama'] ;  
            $responce->rows[$i]['id_pekerjaan'] = $result[$i]['id_pekerjaan'] ;
            $responce->rows[$i]['status_kawin'] = $result[$i]['status_kawin'] ;             
            $responce->rows[$i]['id_pendidikan']    = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;  
            $responce->rows[$i]['status_kependudukan']  = $result[$i]['status_kependudukan'] ; 
            
            $arr_status_kependudukan = $this->cm->arr_status_kependudukan; 
            $responce->rows[$i]['status_kependudukan2'] = $arr_status_kependudukan[$result[$i]['status_kependudukan']] ; 
            $responce->rows[$i]['hidup_mati']   = $result[$i]['hidup_mati'] ; 
            $responce->rows[$i]['keturunan']    = $result[$i]['keturunan'] ;    
            $responce->rows[$i]['dusun']    = $result[$i]['dusun'] ;    
            $responce->rows[$i]['pendidikan']   = $result[$i]['pendidikan'] ;   
            $responce->rows[$i]['pekerjaan']    = $result[$i]['pekerjaan'] ;            
            $responce->rows[$i]['status_hidup'] = $result[$i]['status_hidup'] ;     
            $responce->rows[$i]['umur'] = $result[$i]['umur'] ; 
            
            $responce->rows[$i]['nama_ayah']    = $result[$i]['nama_ayah'] ; 

            $responce->rows[$i]['rt_sebelumnya']        = $result[$i]['rt_sebelumnya'] ; 
            $responce->rows[$i]['rw_sebelumnya']        = $result[$i]['rw_sebelumnya'] ; 
            $responce->rows[$i]['alamat_sebelumnya']        = $result[$i]['alamat_sebelumnya'] ; 
            $responce->rows[$i]['id_desa_sebelumnya']       = $result[$i]['id_desa_sebelumnya'] ; 
            $responce->rows[$i]['id_kecamatan_sebelumnya']      = $result[$i]['id_kecamatan_sebelumnya'] ; 
            $responce->rows[$i]['id_kota_sebelumnya']       = $result[$i]['id_kota_sebelumnya'] ; 
            $responce->rows[$i]['id_provinsi_sebelumnya']       = $result[$i]['id_provinsi_sebelumnya'] ; 
            $responce->rows[$i]['sementara_maksud']     = $result[$i]['sementara_maksud'] ; 
            $responce->rows[$i]['sementara_id_tujuan']      = $result[$i]['sementara_id_tujuan'] ; 
             



             $responce->rows[$i]['foto']            = (!empty($result[$i]['foto']))?
            '<img width="50px" height="50px" src="'.base_url().'foto/' .$result[$i]['foto'].'" />':
            '<img width="50px" height="50px" src="'.base_url().'foto/no_photo.jpg" />';
            
    /*$responce->rows[$i]['no_paspor']      = $result[$i]['no_paspor'] ; 
            $responce->rows[$i]['tgl_paspor_akhir'] = $result[$i]['tgl_paspor_akhir'] ; 
            $responce->rows[$i]['no_akta_lahir']    = $result[$i]['no_akta_lahir'] ; 
            $responce->rows[$i]['no_akta_nikah']    = $result[$i]['no_akta_nikah'] ; 
            $responce->rows[$i]['tgl_akta_nikah']   = $result[$i]['tgl_akta_nikah'] ; 
            $responce->rows[$i]['no_akta_cerai']    = $result[$i]['no_akta_cerai'] ; 
            $responce->rows[$i]['tgl_akta_cerai']   = $result[$i]['tgl_akta_cerai'] ; */

             

        }
    }
        echo json_encode($responce); 
    }


function get_data_u_51_60(){
        $page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"provinsi"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        //$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        //$id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
        $nama  = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $nik  = isset($_REQUEST['search_nik'])?$_REQUEST['search_nik']:"x";
        $status_kependudukan  = isset($_REQUEST['search_status_kependudukan'])?$_REQUEST['search_status_kependudukan']:"x";
        $status_kawin  = isset($_REQUEST['search_status_kawin'])?$_REQUEST['search_status_kawin']:"x";
        $jk  = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";
       
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null  ,
                "id_desa"   => $this->session->userdata("operator_id_desa"),
                "nik" => $nik,
                "jk" => $jk,
                "status_kawin" => $status_kawin,
                "status_kependudukan" => $status_kependudukan,
                "nama" => $nama    
                /*
                "id_kecamatan" => $id_kecamatan */
        );     
           
        $row = $this->dm->get_data_u_51_60($req_param)->result_array();
        
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
        
        $result = $this->dm->get_data_u_51_60($req_param)->result_array();        
        $responce = new stdClass();
        $responce->total = $count; 
        //$responce->records = $count;


        $x=0;
        if($count == 0 ) {
              $responce->rows[0]['nik']         = " ";    
        }    
        else {     
        for($i=0; $i<count($result); $i++){
            $x++;
            //$responce->rows[$i]['id']=$result[$i]['id_provinsi'];
            // data berikut harus sesuai dengan kolom-kolom yang ingin ditampilkan di view (js)
            $responce->rows[$i]['id_penduduk']          = $result[$i]['id_penduduk'] ;    
            $responce->rows[$i]['nik']          = $result[$i]['nik'] ;    
            $responce->rows[$i]['nama']         = $result[$i]['nama'] ; 
            $responce->rows[$i]['tgl_lahir']    = $result[$i]['tgl_lahir'] ;       
            
            $responce->rows[$i]['tmp_lahir']    = $result[$i]['tmp_lahir'] ; 
            $responce->rows[$i]['jk']           = $result[$i]['jk'] ;  
            $responce->rows[$i]['alamat']       = $result[$i]['alamat'] ;  
            $responce->rows[$i]['rt']           = $result[$i]['rt'] ;  
            $responce->rows[$i]['rw']           = $result[$i]['rw'] ;
            $responce->rows[$i]['id_desa']      = $result[$i]['id_desa'] ; 
            $responce->rows[$i]['desa']         = $result[$i]['desa'] ;   
            $responce->rows[$i]['id_dusun']     = $result[$i]['id_dusun'] ;
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;   
            $responce->rows[$i]['kecamatan']    = $result[$i]['kecamatan'] ; 
            $responce->rows[$i]['id_pendidikan']        = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['baca_tulis']       = $result[$i]['baca_tulis'] ;  
            
              
        
            $responce->rows[$i]['warga_negara'] = $result[$i]['warga_negara'] ;   
            $responce->rows[$i]['golongan_darah']   = $result[$i]['golongan_darah'] ;  
            $responce->rows[$i]['id_agama'] = $result[$i]['id_agama'] ;  
            $responce->rows[$i]['id_pekerjaan'] = $result[$i]['id_pekerjaan'] ;
            $responce->rows[$i]['status_kawin'] = $result[$i]['status_kawin'] ;             
            $responce->rows[$i]['id_pendidikan']    = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;  
            $responce->rows[$i]['status_kependudukan']  = $result[$i]['status_kependudukan'] ; 
            
            $arr_status_kependudukan = $this->cm->arr_status_kependudukan; 
            $responce->rows[$i]['status_kependudukan2'] = $arr_status_kependudukan[$result[$i]['status_kependudukan']] ; 
            $responce->rows[$i]['hidup_mati']   = $result[$i]['hidup_mati'] ; 
            $responce->rows[$i]['keturunan']    = $result[$i]['keturunan'] ;    
            $responce->rows[$i]['dusun']    = $result[$i]['dusun'] ;    
            $responce->rows[$i]['pendidikan']   = $result[$i]['pendidikan'] ;   
            $responce->rows[$i]['pekerjaan']    = $result[$i]['pekerjaan'] ;            
            $responce->rows[$i]['status_hidup'] = $result[$i]['status_hidup'] ;     
            $responce->rows[$i]['umur'] = $result[$i]['umur'] ; 
            
            $responce->rows[$i]['nama_ayah']    = $result[$i]['nama_ayah'] ; 

            $responce->rows[$i]['rt_sebelumnya']        = $result[$i]['rt_sebelumnya'] ; 
            $responce->rows[$i]['rw_sebelumnya']        = $result[$i]['rw_sebelumnya'] ; 
            $responce->rows[$i]['alamat_sebelumnya']        = $result[$i]['alamat_sebelumnya'] ; 
            $responce->rows[$i]['id_desa_sebelumnya']       = $result[$i]['id_desa_sebelumnya'] ; 
            $responce->rows[$i]['id_kecamatan_sebelumnya']      = $result[$i]['id_kecamatan_sebelumnya'] ; 
            $responce->rows[$i]['id_kota_sebelumnya']       = $result[$i]['id_kota_sebelumnya'] ; 
            $responce->rows[$i]['id_provinsi_sebelumnya']       = $result[$i]['id_provinsi_sebelumnya'] ; 
            $responce->rows[$i]['sementara_maksud']     = $result[$i]['sementara_maksud'] ; 
            $responce->rows[$i]['sementara_id_tujuan']      = $result[$i]['sementara_id_tujuan'] ; 
             



             $responce->rows[$i]['foto']            = (!empty($result[$i]['foto']))?
            '<img width="50px" height="50px" src="'.base_url().'foto/' .$result[$i]['foto'].'" />':
            '<img width="50px" height="50px" src="'.base_url().'foto/no_photo.jpg" />';
            
    /*$responce->rows[$i]['no_paspor']      = $result[$i]['no_paspor'] ; 
            $responce->rows[$i]['tgl_paspor_akhir'] = $result[$i]['tgl_paspor_akhir'] ; 
            $responce->rows[$i]['no_akta_lahir']    = $result[$i]['no_akta_lahir'] ; 
            $responce->rows[$i]['no_akta_nikah']    = $result[$i]['no_akta_nikah'] ; 
            $responce->rows[$i]['tgl_akta_nikah']   = $result[$i]['tgl_akta_nikah'] ; 
            $responce->rows[$i]['no_akta_cerai']    = $result[$i]['no_akta_cerai'] ; 
            $responce->rows[$i]['tgl_akta_cerai']   = $result[$i]['tgl_akta_cerai'] ; */

             

        }
    }
        echo json_encode($responce); 
    }
function get_data_u_61_70(){
        $page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"provinsi"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        //$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        //$id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
        $nama  = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $nik  = isset($_REQUEST['search_nik'])?$_REQUEST['search_nik']:"x";
        $status_kependudukan  = isset($_REQUEST['search_status_kependudukan'])?$_REQUEST['search_status_kependudukan']:"x";
        $status_kawin  = isset($_REQUEST['search_status_kawin'])?$_REQUEST['search_status_kawin']:"x";
        $jk  = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";
       
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null  ,
                "id_desa"   => $this->session->userdata("operator_id_desa"),
                "nik" => $nik,
                "jk" => $jk,
                "status_kawin" => $status_kawin,
                "status_kependudukan" => $status_kependudukan,
                "nama" => $nama    
                /*
                "id_kecamatan" => $id_kecamatan */
        );     
           
        $row = $this->dm->get_data_u_61_70($req_param)->result_array();
        
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
        
        $result = $this->dm->get_data_u_61_70($req_param)->result_array();        
        $responce = new stdClass();
        $responce->total = $count; 
        //$responce->records = $count;


        $x=0;
        if($count == 0 ) {
              $responce->rows[0]['nik']         = " ";    
        }    
        else {     
        for($i=0; $i<count($result); $i++){
            $x++;
            //$responce->rows[$i]['id']=$result[$i]['id_provinsi'];
            // data berikut harus sesuai dengan kolom-kolom yang ingin ditampilkan di view (js)
            $responce->rows[$i]['id_penduduk']          = $result[$i]['id_penduduk'] ;    
            $responce->rows[$i]['nik']          = $result[$i]['nik'] ;    
            $responce->rows[$i]['nama']         = $result[$i]['nama'] ; 
            $responce->rows[$i]['tgl_lahir']    = $result[$i]['tgl_lahir'] ;       
            
            $responce->rows[$i]['tmp_lahir']    = $result[$i]['tmp_lahir'] ; 
            $responce->rows[$i]['jk']           = $result[$i]['jk'] ;  
            $responce->rows[$i]['alamat']       = $result[$i]['alamat'] ;  
            $responce->rows[$i]['rt']           = $result[$i]['rt'] ;  
            $responce->rows[$i]['rw']           = $result[$i]['rw'] ;
            $responce->rows[$i]['id_desa']      = $result[$i]['id_desa'] ; 
            $responce->rows[$i]['desa']         = $result[$i]['desa'] ;   
            $responce->rows[$i]['id_dusun']     = $result[$i]['id_dusun'] ;
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;   
            $responce->rows[$i]['kecamatan']    = $result[$i]['kecamatan'] ; 
            $responce->rows[$i]['id_pendidikan']        = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['baca_tulis']       = $result[$i]['baca_tulis'] ;  
            
              
        
            $responce->rows[$i]['warga_negara'] = $result[$i]['warga_negara'] ;   
            $responce->rows[$i]['golongan_darah']   = $result[$i]['golongan_darah'] ;  
            $responce->rows[$i]['id_agama'] = $result[$i]['id_agama'] ;  
            $responce->rows[$i]['id_pekerjaan'] = $result[$i]['id_pekerjaan'] ;
            $responce->rows[$i]['status_kawin'] = $result[$i]['status_kawin'] ;             
            $responce->rows[$i]['id_pendidikan']    = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;  
            $responce->rows[$i]['status_kependudukan']  = $result[$i]['status_kependudukan'] ; 
            
            $arr_status_kependudukan = $this->cm->arr_status_kependudukan; 
            $responce->rows[$i]['status_kependudukan2'] = $arr_status_kependudukan[$result[$i]['status_kependudukan']] ; 
            $responce->rows[$i]['hidup_mati']   = $result[$i]['hidup_mati'] ; 
            $responce->rows[$i]['keturunan']    = $result[$i]['keturunan'] ;    
            $responce->rows[$i]['dusun']    = $result[$i]['dusun'] ;    
            $responce->rows[$i]['pendidikan']   = $result[$i]['pendidikan'] ;   
            $responce->rows[$i]['pekerjaan']    = $result[$i]['pekerjaan'] ;            
            $responce->rows[$i]['status_hidup'] = $result[$i]['status_hidup'] ;     
            $responce->rows[$i]['umur'] = $result[$i]['umur'] ; 
            
            $responce->rows[$i]['nama_ayah']    = $result[$i]['nama_ayah'] ; 

            $responce->rows[$i]['rt_sebelumnya']        = $result[$i]['rt_sebelumnya'] ; 
            $responce->rows[$i]['rw_sebelumnya']        = $result[$i]['rw_sebelumnya'] ; 
            $responce->rows[$i]['alamat_sebelumnya']        = $result[$i]['alamat_sebelumnya'] ; 
            $responce->rows[$i]['id_desa_sebelumnya']       = $result[$i]['id_desa_sebelumnya'] ; 
            $responce->rows[$i]['id_kecamatan_sebelumnya']      = $result[$i]['id_kecamatan_sebelumnya'] ; 
            $responce->rows[$i]['id_kota_sebelumnya']       = $result[$i]['id_kota_sebelumnya'] ; 
            $responce->rows[$i]['id_provinsi_sebelumnya']       = $result[$i]['id_provinsi_sebelumnya'] ; 
            $responce->rows[$i]['sementara_maksud']     = $result[$i]['sementara_maksud'] ; 
            $responce->rows[$i]['sementara_id_tujuan']      = $result[$i]['sementara_id_tujuan'] ; 
             



             $responce->rows[$i]['foto']            = (!empty($result[$i]['foto']))?
            '<img width="50px" height="50px" src="'.base_url().'foto/' .$result[$i]['foto'].'" />':
            '<img width="50px" height="50px" src="'.base_url().'foto/no_photo.jpg" />';
            
    /*$responce->rows[$i]['no_paspor']      = $result[$i]['no_paspor'] ; 
            $responce->rows[$i]['tgl_paspor_akhir'] = $result[$i]['tgl_paspor_akhir'] ; 
            $responce->rows[$i]['no_akta_lahir']    = $result[$i]['no_akta_lahir'] ; 
            $responce->rows[$i]['no_akta_nikah']    = $result[$i]['no_akta_nikah'] ; 
            $responce->rows[$i]['tgl_akta_nikah']   = $result[$i]['tgl_akta_nikah'] ; 
            $responce->rows[$i]['no_akta_cerai']    = $result[$i]['no_akta_cerai'] ; 
            $responce->rows[$i]['tgl_akta_cerai']   = $result[$i]['tgl_akta_cerai'] ; */

             

        }
    }
        echo json_encode($responce); 
    }


function get_data_u_70(){
        $page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"provinsi"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        //$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        //$id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
        $nama  = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $nik  = isset($_REQUEST['search_nik'])?$_REQUEST['search_nik']:"x";
        $status_kependudukan  = isset($_REQUEST['search_status_kependudukan'])?$_REQUEST['search_status_kependudukan']:"x";
        $status_kawin  = isset($_REQUEST['search_status_kawin'])?$_REQUEST['search_status_kawin']:"x";
        $jk  = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";
       
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null  ,
                "id_desa"   => $this->session->userdata("operator_id_desa"),
                "nik" => $nik,
                "jk" => $jk,
                "status_kawin" => $status_kawin,
                "status_kependudukan" => $status_kependudukan,
                "nama" => $nama    
                /*
                "id_kecamatan" => $id_kecamatan */
        );     
           
        $row = $this->dm->get_data_u_70($req_param)->result_array();
        
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
        
        $result = $this->dm->get_data_u_70($req_param)->result_array();        
        $responce = new stdClass();
        $responce->total = $count; 
        //$responce->records = $count;


        $x=0;
        if($count == 0 ) {
              $responce->rows[0]['nik']         = " ";    
        }    
        else {     
        for($i=0; $i<count($result); $i++){
            $x++;
            //$responce->rows[$i]['id']=$result[$i]['id_provinsi'];
            // data berikut harus sesuai dengan kolom-kolom yang ingin ditampilkan di view (js)
            $responce->rows[$i]['id_penduduk']          = $result[$i]['id_penduduk'] ;    
            $responce->rows[$i]['nik']          = $result[$i]['nik'] ;    
            $responce->rows[$i]['nama']         = $result[$i]['nama'] ; 
            $responce->rows[$i]['tgl_lahir']    = $result[$i]['tgl_lahir'] ;       
            
            $responce->rows[$i]['tmp_lahir']    = $result[$i]['tmp_lahir'] ; 
            $responce->rows[$i]['jk']           = $result[$i]['jk'] ;  
            $responce->rows[$i]['alamat']       = $result[$i]['alamat'] ;  
            $responce->rows[$i]['rt']           = $result[$i]['rt'] ;  
            $responce->rows[$i]['rw']           = $result[$i]['rw'] ;
            $responce->rows[$i]['id_desa']      = $result[$i]['id_desa'] ; 
            $responce->rows[$i]['desa']         = $result[$i]['desa'] ;   
            $responce->rows[$i]['id_dusun']     = $result[$i]['id_dusun'] ;
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;   
            $responce->rows[$i]['kecamatan']    = $result[$i]['kecamatan'] ; 
            $responce->rows[$i]['id_pendidikan']        = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['baca_tulis']       = $result[$i]['baca_tulis'] ;  
            
              
        
            $responce->rows[$i]['warga_negara'] = $result[$i]['warga_negara'] ;   
            $responce->rows[$i]['golongan_darah']   = $result[$i]['golongan_darah'] ;  
            $responce->rows[$i]['id_agama'] = $result[$i]['id_agama'] ;  
            $responce->rows[$i]['id_pekerjaan'] = $result[$i]['id_pekerjaan'] ;
            $responce->rows[$i]['status_kawin'] = $result[$i]['status_kawin'] ;             
            $responce->rows[$i]['id_pendidikan']    = $result[$i]['id_pendidikan'] ;  
            $responce->rows[$i]['id_kecamatan'] = $result[$i]['id_kecamatan'] ;  
            $responce->rows[$i]['status_kependudukan']  = $result[$i]['status_kependudukan'] ; 
            
            $arr_status_kependudukan = $this->cm->arr_status_kependudukan; 
            $responce->rows[$i]['status_kependudukan2'] = $arr_status_kependudukan[$result[$i]['status_kependudukan']] ; 
            $responce->rows[$i]['hidup_mati']   = $result[$i]['hidup_mati'] ; 
            $responce->rows[$i]['keturunan']    = $result[$i]['keturunan'] ;    
            $responce->rows[$i]['dusun']    = $result[$i]['dusun'] ;    
            $responce->rows[$i]['pendidikan']   = $result[$i]['pendidikan'] ;   
            $responce->rows[$i]['pekerjaan']    = $result[$i]['pekerjaan'] ;            
            $responce->rows[$i]['status_hidup'] = $result[$i]['status_hidup'] ;     
            $responce->rows[$i]['umur'] = $result[$i]['umur'] ; 
            
            $responce->rows[$i]['nama_ayah']    = $result[$i]['nama_ayah'] ; 

            $responce->rows[$i]['rt_sebelumnya']        = $result[$i]['rt_sebelumnya'] ; 
            $responce->rows[$i]['rw_sebelumnya']        = $result[$i]['rw_sebelumnya'] ; 
            $responce->rows[$i]['alamat_sebelumnya']        = $result[$i]['alamat_sebelumnya'] ; 
            $responce->rows[$i]['id_desa_sebelumnya']       = $result[$i]['id_desa_sebelumnya'] ; 
            $responce->rows[$i]['id_kecamatan_sebelumnya']      = $result[$i]['id_kecamatan_sebelumnya'] ; 
            $responce->rows[$i]['id_kota_sebelumnya']       = $result[$i]['id_kota_sebelumnya'] ; 
            $responce->rows[$i]['id_provinsi_sebelumnya']       = $result[$i]['id_provinsi_sebelumnya'] ; 
            $responce->rows[$i]['sementara_maksud']     = $result[$i]['sementara_maksud'] ; 
            $responce->rows[$i]['sementara_id_tujuan']      = $result[$i]['sementara_id_tujuan'] ; 
             



             $responce->rows[$i]['foto']            = (!empty($result[$i]['foto']))?
            '<img width="50px" height="50px" src="'.base_url().'foto/' .$result[$i]['foto'].'" />':
            '<img width="50px" height="50px" src="'.base_url().'foto/no_photo.jpg" />';
            
    /*$responce->rows[$i]['no_paspor']      = $result[$i]['no_paspor'] ; 
            $responce->rows[$i]['tgl_paspor_akhir'] = $result[$i]['tgl_paspor_akhir'] ; 
            $responce->rows[$i]['no_akta_lahir']    = $result[$i]['no_akta_lahir'] ; 
            $responce->rows[$i]['no_akta_nikah']    = $result[$i]['no_akta_nikah'] ; 
            $responce->rows[$i]['tgl_akta_nikah']   = $result[$i]['tgl_akta_nikah'] ; 
            $responce->rows[$i]['no_akta_cerai']    = $result[$i]['no_akta_cerai'] ; 
            $responce->rows[$i]['tgl_akta_cerai']   = $result[$i]['tgl_akta_cerai'] ; */

             

        }
    }
        echo json_encode($responce); 
    }




 function cetak_1_5() {
 	$this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur >= 0 and p.umur <=5",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_1_5('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_1_5('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
	

	$this->load->view("u_1_5/pdf/statistik_penduduk_kelompok_umur_u_1_5_cetak",$data); 

 }


 function cetak_6_10() {
      $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur >= 6 and p.umur <=10",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_6_10('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_6_10('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
   
    $this->load->view("u_6_10/pdf/statistik_penduduk_kelompok_umur_u_6_10_cetak",$data); 

 }

  function cetak_11_20() {
       $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur >= 11 and p.umur <=20",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_11_20('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_11_20('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
    $this->load->view("u_11_20/pdf/statistik_penduduk_kelompok_umur_u_11_20_cetak",$data); 

 }
 
 function cetak_21_30() {
    $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur >= 21 and p.umur <=30",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_21_30('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_21_30('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
    $this->load->view("u_21_30/pdf/statistik_penduduk_kelompok_umur_u_21_30_cetak",$data); 

 }

 function cetak_31_40() {
  $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur >= 31 and p.umur <=40",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_31_40('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_31_40('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
   
    $this->load->view("u_31_40/pdf/statistik_penduduk_kelompok_umur_u_31_40_cetak",$data); 

 }

  function cetak_41_50() {
 $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur >= 41 and p.umur <=50",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_41_50('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_41_50('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
   
    $this->load->view("u_41_50/pdf/statistik_penduduk_kelompok_umur_u_41_50_cetak",$data); 

 }

 function cetak_51_60() {
  $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur >= 51 and p.umur <=60",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_51_60('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_51_60('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
   
    $this->load->view("u_51_60/pdf/statistik_penduduk_kelompok_umur_u_51_60_cetak",$data); 

 }


 function cetak_61_70() {
 $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur >= 61 and p.umur <=70",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_61_70('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_61_70('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
    $this->load->view("u_61_70/pdf/statistik_penduduk_kelompok_umur_u_61_70_cetak",$data); 

 }

  function cetak_70() {
  $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur > 70",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_70('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_70('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
    
    $this->load->view("u_70/pdf/statistik_penduduk_kelompok_umur_u_70_cetak",$data); 

 }



 function pdf(){
   $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur =null",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
   
    $data['header'] = "DATA PENDUDUK BALITA ";
    $data['title'] = $data['header'];

        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
        //$pdf->SetHeaderMargin(30);
        //$pdf->SetTopMargin(10);

 


         
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(true);

         // add a page
        $pdf->AddPage('L');


         // $html = $this->load->view("ringkasan_pdf_head",$data,true);
         // $pdf->writeHTML($html, true, false, true, false, '');


         $html = $this->load->view("pdf/statistik_penduduk_kelompok_umur_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("pdf/statistik_penduduk_kelompok_umur_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
           $html = $this->load->view("pdf/statistik_penduduk_kelompok_umur_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}




 function pdf_1_5(){
   $this->db->select('*')->from('v_penduduk p')
	->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur >= 0 and p.umur <=5",NULL,FALSE)
    ->order_by("dusun");

 	$data['record'] = $res = $this->db->get();
	$id_desa =	 $this->session->userdata("operator_id_desa");
	$data['l'] =  $this->dm->get_stat_1_5('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
	$data['p'] =  $this->dm->get_stat_1_5('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
	
   
    $data['header'] = "DATA PENDUDUK 0 - 5 TAHUN ";
    $data['title'] = $data['header'];

        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
        //$pdf->SetHeaderMargin(30);
        //$pdf->SetTopMargin(10);

 


         
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(true);

         // add a page
        $pdf->AddPage('L');


         // $html = $this->load->view("ringkasan_pdf_head",$data,true);
         // $pdf->writeHTML($html, true, false, true, false, '');


         $html = $this->load->view("u_1_5/pdf/statistik_penduduk_kelompok_umur_u_1_5_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("u_1_5/pdf/statistik_penduduk_kelompok_umur_u_1_5_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
           $html = $this->load->view("u_1_5/pdf/statistik_penduduk_kelompok_umur_u_1_5_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}

 function pdf_6_10(){
   $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur >= 6 and p.umur <=10",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_6_10('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_6_10('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
   
    $data['header'] = "DATA PENDUDUK 6 - 10 TAHUN ";
    $data['title'] = $data['header'];

        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
        //$pdf->SetHeaderMargin(30);
        //$pdf->SetTopMargin(10);

 


         
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(true);

         // add a page
        $pdf->AddPage('L');


         // $html = $this->load->view("ringkasan_pdf_head",$data,true);
         // $pdf->writeHTML($html, true, false, true, false, '');


         $html = $this->load->view("u_6_10/pdf/statistik_penduduk_kelompok_umur_u_6_10_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("u_6_10/pdf/statistik_penduduk_kelompok_umur_u_6_10_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
           $html = $this->load->view("u_6_10/pdf/statistik_penduduk_kelompok_umur_u_6_10_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}

function pdf_11_20(){
   $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur >= 11 and p.umur <=20",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_11_20('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_11_20('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
   
    $data['header'] = "DATA PENDUDUK 11 - 20 TAHUN ";
    $data['title'] = $data['header'];

        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
        //$pdf->SetHeaderMargin(30);
        //$pdf->SetTopMargin(10);

 


         
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(true);

         // add a page
        $pdf->AddPage('L');


         // $html = $this->load->view("ringkasan_pdf_head",$data,true);
         // $pdf->writeHTML($html, true, false, true, false, '');


         $html = $this->load->view("u_11_20/pdf/statistik_penduduk_kelompok_umur_u_11_20_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("u_11_20/pdf/statistik_penduduk_kelompok_umur_u_11_20_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
           $html = $this->load->view("u_11_20/pdf/statistik_penduduk_kelompok_umur_u_11_20_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}

function pdf_21_30(){
   $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur >= 21 and p.umur <=30",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_21_30('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_21_30('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
   
    $data['header'] = "DATA PENDUDUK 21 - 30 TAHUN ";
    $data['title'] = $data['header'];

        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
        //$pdf->SetHeaderMargin(30);
        //$pdf->SetTopMargin(10);

 


         
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(true);

         // add a page
        $pdf->AddPage('L');


         // $html = $this->load->view("ringkasan_pdf_head",$data,true);
         // $pdf->writeHTML($html, true, false, true, false, '');


         $html = $this->load->view("u_21_30/pdf/statistik_penduduk_kelompok_umur_u_21_30_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("u_21_30/pdf/statistik_penduduk_kelompok_umur_u_21_30_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
           $html = $this->load->view("u_21_30/pdf/statistik_penduduk_kelompok_umur_u_21_30_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}

function pdf_31_40(){
   $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur >= 31 and p.umur <=40",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_31_40('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_31_40('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
   
    $data['header'] = "DATA PENDUDUK 31 - 40 TAHUN ";
    $data['title'] = $data['header'];

        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
        //$pdf->SetHeaderMargin(30);
        //$pdf->SetTopMargin(10);

 


         
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(true);

         // add a page
        $pdf->AddPage('L');


         // $html = $this->load->view("ringkasan_pdf_head",$data,true);
         // $pdf->writeHTML($html, true, false, true, false, '');


         $html = $this->load->view("u_31_40/pdf/statistik_penduduk_kelompok_umur_u_31_40_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("u_31_40/pdf/statistik_penduduk_kelompok_umur_u_31_40_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
           $html = $this->load->view("u_31_40/pdf/statistik_penduduk_kelompok_umur_u_31_40_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}

function pdf_41_50(){
   $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur >= 41 and p.umur <=50",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_41_50('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_41_50('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
   
    $data['header'] = "DATA PENDUDUK 41 - 50 TAHUN ";
    $data['title'] = $data['header'];

        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
        //$pdf->SetHeaderMargin(30);
        //$pdf->SetTopMargin(10);

 


         
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(true);

         // add a page
        $pdf->AddPage('L');


         // $html = $this->load->view("ringkasan_pdf_head",$data,true);
         // $pdf->writeHTML($html, true, false, true, false, '');


         $html = $this->load->view("u_41_50/pdf/statistik_penduduk_kelompok_umur_u_41_50_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("u_41_50/pdf/statistik_penduduk_kelompok_umur_u_41_50_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
           $html = $this->load->view("u_41_50/pdf/statistik_penduduk_kelompok_umur_u_41_50_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}

function pdf_51_60(){
   $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur >= 51 and p.umur <=60",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_51_60('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_51_60('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
   
    $data['header'] = "DATA PENDUDUK 41 - 50 TAHUN ";
    $data['title'] = $data['header'];

        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
        //$pdf->SetHeaderMargin(30);
        //$pdf->SetTopMargin(10);

 


         
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(true);

         // add a page
        $pdf->AddPage('L');


         // $html = $this->load->view("ringkasan_pdf_head",$data,true);
         // $pdf->writeHTML($html, true, false, true, false, '');


         $html = $this->load->view("u_51_60/pdf/statistik_penduduk_kelompok_umur_u_51_60_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("u_51_60/pdf/statistik_penduduk_kelompok_umur_u_51_60_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
           $html = $this->load->view("u_51_60/pdf/statistik_penduduk_kelompok_umur_u_51_60_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}

function pdf_61_70(){
   $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur >= 61 and p.umur <=70",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_61_70('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_61_70('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
   
    $data['header'] = "DATA PENDUDUK 61 - 70 TAHUN ";
    $data['title'] = $data['header'];

        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
        //$pdf->SetHeaderMargin(30);
        //$pdf->SetTopMargin(10);

 


         
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(true);

         // add a page
        $pdf->AddPage('L');


         // $html = $this->load->view("ringkasan_pdf_head",$data,true);
         // $pdf->writeHTML($html, true, false, true, false, '');


         $html = $this->load->view("u_61_70/pdf/statistik_penduduk_kelompok_umur_u_61_70_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("u_61_70/pdf/statistik_penduduk_kelompok_umur_u_61_70_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
           $html = $this->load->view("u_61_70/pdf/statistik_penduduk_kelompok_umur_u_61_70_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}


function pdf_70(){
   $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan <> '3'",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("p.umur > 70",NULL,FALSE)
    ->order_by("dusun");

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_70('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_70('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
   
    $data['header'] = "DATA PENDUDUK Diatas 70 TAHUN ";
    $data['title'] = $data['header'];

        $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
        //$pdf->SetHeaderMargin(30);
        //$pdf->SetTopMargin(10);

 


         
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(true);

         // add a page
        $pdf->AddPage('L');


         // $html = $this->load->view("ringkasan_pdf_head",$data,true);
         // $pdf->writeHTML($html, true, false, true, false, '');


         $html = $this->load->view("u_70/pdf/statistik_penduduk_kelompok_umur_u_70_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("u_70/pdf/statistik_penduduk_kelompok_umur_u_70_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
           $html = $this->load->view("u_70/pdf/statistik_penduduk_kelompok_umur_u_70_pdf",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}






function excel(){
    $this->db->select('*,p.no_kk')->from('v_penduduk p')
    ->join('pendidikan pdk','pdk.id_pendidikan = p.id_pendidikan','left')
    ->join('pekerjaan pk','pk.id_pekerjaan = p.id_pekerjaan','left');

     
    $this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL, FALSE) 
   	->where(" umur <=5 " , NULL, FALSE)   
    ->order_by("p.no_kk");

      $res = $this->db->get();

      // echo $this->db->last_query(); exit;

  $id_desa =   $this->session->userdata("operator_id_desa");
  $data['l'] =  $this->dm->get_stat('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
  $data['p'] =  $this->dm->get_stat('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
       

// echo $this->db->last_query(); exit;

        $this->load->library('Excel');
        $this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('Data Penduduk balita ');

         $arr_kolom = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o');

        $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
        $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(18);  // nomor kk  
        $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(18);  // nik 
        $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(31); // nama 
        $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(10);  // umur 
        $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(18); // tmp lahir 
        $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(18);  // tgl lahir 
        $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(30);  // alamat 
        $this->excel->getActiveSheet()->getColumnDimension('I')->setWidth(5);  // rt 
        $this->excel->getActiveSheet()->getColumnDimension('J')->setWidth(5); // rw
        $this->excel->getActiveSheet()->getColumnDimension('K')->setWidth(18);  // hubungan dalam kelurga 
        $this->excel->getActiveSheet()->getColumnDimension('L')->setWidth(18);  // Pendidikan
        $this->excel->getActiveSheet()->getColumnDimension('M')->setWidth(18);  
        $this->excel->getActiveSheet()->getColumnDimension('N')->setWidth(18);  // Pendidikan
        $this->excel->getActiveSheet()->getColumnDimension('O')->setWidth(18);  
         
        $data_desa = $this->cm->data_desa();
        $baris = 1;

        $this->excel->getActiveSheet()->mergeCells('a'.$baris.':m'.$baris);
         $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "DATA PENDUDUK BALITA");
       
       $this->format_center($arr_kolom,$baris);

        // $this->format_baris(
        //     array("arr_kolom"=>$arr_kolom, 
        //          "baris"=>$baris,
        //          "bold"=>true,
        //          "align"=>true) );

        $baris++; 

        $this->excel->getActiveSheet()->mergeCells('a'.$baris.':m'.$baris);
         $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "PEMERINTAH DESA  " .$data_desa->desa );
        $this->format_center($arr_kolom,$baris);
        $baris++; 


        $this->excel->getActiveSheet()->mergeCells('a'.$baris.':m'.$baris);
         $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "KECAMATAN" .$data_desa->kecamatan );
        $this->format_center($arr_kolom,$baris);
        $baris++; 

        $this->excel->getActiveSheet()->mergeCells('a'.$baris.':m'.$baris);
         $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, $data_desa->kota );
        $this->format_center($arr_kolom,$baris);



        $baris = 6;

        $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "NO.")
                ->setCellValue('B' . $baris, "NOMOR KK")
                ->setCellValue('C' . $baris, "NIK")
                ->setCellValue('D' . $baris, "NAMA")
                ->setCellValue('E' . $baris, "UMUR")      
                ->setCellValue('F' . $baris, "TEMPAT LAHIR")
                ->setCellValue('G' . $baris, "TANGGAL LAHIR")
                ->setCellValue('H' . $baris, "ALAMAT")
                ->setCellValue('I' . $baris, "RT")
                ->setCellValue('J' . $baris, "RW")
                ->setCellValue('K' . $baris, "HUBUNGAN DLM. KELUARGA")
                ->setCellValue('L' . $baris, "PENDIDIKAN")
                ->setCellValue('M' . $baris, "PEKERJAAN")
                ->setCellValue('N' . $baris, "NAMA BAPAK")
                ->setCellValue('O' . $baris, "NAMA IBU") ;     



               
                $this->format_header($arr_kolom,$baris);

                $baris++;
                $n=0;
                foreach($res->result() as $row) : 
                $n++;
                $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, $n)
                ->setCellValue('B' . $baris, "$row->no_kk")
                ->setCellValue('C' . $baris, "$row->nik")
                ->setCellValue('D' . $baris, $row->nama)
                ->setCellValue('E' . $baris, $row->umur)      
                ->setCellValue('F' . $baris, $row->tmp_lahir)
                ->setCellValue('G' . $baris, $row->tgl_lahir)
                ->setCellValue('H' . $baris, $row->alamat)
                ->setCellValue('I' . $baris, $row->rt)
                ->setCellValue('J' . $baris, $row->rw)
                ->setCellValue('K' . $baris, $row->hubungan_dlm_keluarga)
                ->setCellValue('L' . $baris, $row->pendidikan)
                ->setCellValue('M' . $baris, $row->pekerjaan)
                ->setCellValue('N' . $baris, $row->nama_ayah)
                ->setCellValue('O' . $baris, $row->nama_ibu) ;  

                $this->format_baris($arr_kolom,$baris);
                $baris++;
                endforeach;





        $filename = "LAPORAN DATA PENDUDUK USIA BALITA.xls";

        //exit;

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