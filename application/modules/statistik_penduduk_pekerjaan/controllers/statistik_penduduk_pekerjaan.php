<?php 
class statistik_penduduk_pekerjaan extends  op_controller {
 	function __construct() {
		parent::__construct();
 
		$this->load->model("stat_ppk","dm");
		$this->load->model("core_model","cm");
		$this->load->model("add_model","am");
		$this->load->helper("tanggal");
		$this->desa2 = $this->cm->data_desa();   
		 
	}

function index_utama()
    {
 
    $data['title'] = "Data Penduduk Berdasarkan Pekerjaan ";    
    $data['header'] = "Data Penduduk Berdasarkan Pekerjaan";
    $data['controller'] = "statistik_penduduk_pekerjaan";
  

 
 
    $content = $this->load->view("statistik_penduduk_pekerjaan_view_utama",$data,true);
    $this->set_title("Data Penduduk Berdasarkan Pekerjaan");
    $this->set_content($content);
    $this->render();
    }



function index()
    {
 
    $data['title'] = "Data Penduduk Berdasarkan Pekerjaan ";	
    $data['header'] = "Data Penduduk Berdasarkan Pekerjaan";
	$data['controller'] = "statistik_penduduk_pekerjaan";
  

 
 
   	$content = $this->load->view("statistik_penduduk_pekerjaan_view",$data,true);
	$this->set_title("Data Penduduk Berdasarkan Pekerjaan");
	$this->set_content($content);
	$this->render();
    }

function index_statistik()
    {
 
    $data['title'] = "Data Statistik Pekerjaan Penduduk ";    
    $data['header'] = "Data Statistik Pekerjaan Penduduk";
    $data['controller'] = "statistik_penduduk_pekerjaan";
  

 
 
    $content = $this->load->view("statistik_penduduk_pekerjaan_index",$data,true);
    $this->set_title("Data Penduduk Berdasarkan Pekerjaan");
    $this->set_content($content);
    $this->render();
    }



function petani()
    {
 
    $data['title'] = "Data Penduduk Yang Bekerja Pada Sektor Pertanian ";    
    $data['header'] = "Data Penduduk Yang Bekerja Pada Sektor Pertanian";
    $data['controller'] = "statistik_penduduk_pekerjaan";

    $content = $this->load->view("petani/statistik_penduduk_pekerjaan_view",$data,true);
    $this->set_title("Data Penduduk Yang Bekerja Pada Sektor Pertanian");
    $this->set_content($content);
    $this->render();
    }
  
  function non_petani()
    {
 
    $data['title'] = "Data Penduduk Yang Bekerja Pada Sektor Non-Pertanian ";    
    $data['header'] = "Data Penduduk Yang Bekerja Pada Sektor Non-Pertanian";
    $data['controller'] = "statistik_penduduk_pekerjaan";
  


 
 
    $content = $this->load->view("non_petani/statistik_penduduk_pekerjaan_view",$data,true);
    $this->set_title("Data Penduduk Yang Bekerja Pada Sektor Non-Pertanian");
    $this->set_content($content);
    $this->render();
    }
    
function index_15()
    {
 
    $data['title'] = "Data Penduduk Berumur 15 Tahun Ke Atas Menurut Pekerjaan ";    
    $data['header'] = "Data Penduduk Berumur 15 Tahun Ke Atas Menurut Pekerjaan";
    $data['controller'] = "statistik_penduduk_pekerjaan";
  

 
 
    $content = $this->load->view("index_15/statistik_penduduk_pekerjaan_15_view",$data,true);
    $this->set_title("Data Penduduk Berumur 15 Tahun Ke Atas Menurut Pekerjaan");
    $this->set_content($content);
    $this->render();
    }
    


 function cek_nik($nik)
 {
 	 if(empty($nik)) {
 	 	$this->form_validation->set_message('cek_nik', '%s harus diisi');
 	 	return false;
 	 }

 	 $this->db->where("nik",$nik);
 	 $jumlah = $this->db->get("penduduk")->num_rows();
 	 ///cho $this->db->last_query();
 	 //echo "jumlah " . $jumlah;
 	 if($jumlah > 0 ) {
 	 	$this->form_validation->set_message('cek_nik', '%s sudah ada');
 	 	return false;
 	 }
 }

 
function get_data(){
    	$page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"provinsi"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        //$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        //$id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
       /* $nama  = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $nik  = isset($_REQUEST['search_nik'])?$_REQUEST['search_nik']:"x";
        $status_kependudukan  = isset($_REQUEST['search_status_kependudukan'])?$_REQUEST['search_status_kependudukan']:"x";
        $status_kawin  = isset($_REQUEST['search_status_kawin'])?$_REQUEST['search_status_kawin']:"x";
        $jk  = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";*/
       
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null  ,
				"id_pekerjaan" => isset($_REQUEST['id_pekerjaan'])?$_REQUEST['id_pekerjaan']:"x",
				"id_desa"	=> $this->session->userdata("operator_id_desa") /*,
				"nik" => $nik,
				"jk" => $jk,
				"status_kawin" => $status_kawin,
				"status_kependudukan" => $status_kependudukan,
				"nama" => $nama   */ 
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

			$responce->rows[$i]['umur']	= $result[$i]['umur'] ; 
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
 

function get_data_15(){
        $page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"provinsi"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        //$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        //$id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
       /* $nama  = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $nik  = isset($_REQUEST['search_nik'])?$_REQUEST['search_nik']:"x";
        $status_kependudukan  = isset($_REQUEST['search_status_kependudukan'])?$_REQUEST['search_status_kependudukan']:"x";
        $status_kawin  = isset($_REQUEST['search_status_kawin'])?$_REQUEST['search_status_kawin']:"x";
        $jk  = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";*/
       
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null  ,
                "id_pekerjaan" => isset($_REQUEST['id_pekerjaan'])?$_REQUEST['id_pekerjaan']:"x",
                "id_desa"   => $this->session->userdata("operator_id_desa") /*,
                "nik" => $nik,
                "jk" => $jk,
                "status_kawin" => $status_kawin,
                "status_kependudukan" => $status_kependudukan,
                "nama" => $nama   */ 
                /*
                "id_kecamatan" => $id_kecamatan */
        );     
           
        $row = $this->dm->get_data_15($req_param)->result_array();
        
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
        
        $result = $this->dm->get_data_15($req_param)->result_array();        
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

            $responce->rows[$i]['umur'] = $result[$i]['umur'] ; 
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
 
function get_data_petani(){
        $page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"provinsi"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        //$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        //$id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
       /* $nama  = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $nik  = isset($_REQUEST['search_nik'])?$_REQUEST['search_nik']:"x";
        $status_kependudukan  = isset($_REQUEST['search_status_kependudukan'])?$_REQUEST['search_status_kependudukan']:"x";
        $status_kawin  = isset($_REQUEST['search_status_kawin'])?$_REQUEST['search_status_kawin']:"x";
        $jk  = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";*/
       
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null  ,
                "id_pekerjaan" => isset($_REQUEST['id_pekerjaan'])?$_REQUEST['id_pekerjaan']:"x",
                "id_desa"   => $this->session->userdata("operator_id_desa") /*,
                "nik" => $nik,
                "jk" => $jk,
                "status_kawin" => $status_kawin,
                "status_kependudukan" => $status_kependudukan,
                "nama" => $nama   */ 
                /*
                "id_kecamatan" => $id_kecamatan */
        );     
           
        $row = $this->dm->get_data_petani($req_param)->result_array();
        
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
        
        $result = $this->dm->get_data_petani($req_param)->result_array();        
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

            $responce->rows[$i]['umur'] = $result[$i]['umur'] ; 
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
 
function get_data_non_petani(){
        $page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"provinsi"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        //$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        //$id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
       /* $nama  = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $nik  = isset($_REQUEST['search_nik'])?$_REQUEST['search_nik']:"x";
        $status_kependudukan  = isset($_REQUEST['search_status_kependudukan'])?$_REQUEST['search_status_kependudukan']:"x";
        $status_kawin  = isset($_REQUEST['search_status_kawin'])?$_REQUEST['search_status_kawin']:"x";
        $jk  = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";*/
       
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null  ,
                "id_pekerjaan" => isset($_REQUEST['id_pekerjaan'])?$_REQUEST['id_pekerjaan']:"x",
                "id_desa"   => $this->session->userdata("operator_id_desa") /*,
                "nik" => $nik,
                "jk" => $jk,
                "status_kawin" => $status_kawin,
                "status_kependudukan" => $status_kependudukan,
                "nama" => $nama   */ 
                /*
                "id_kecamatan" => $id_kecamatan */
        );     
           
        $row = $this->dm->get_data_non_petani($req_param)->result_array();
        
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
        
        $result = $this->dm->get_data_non_petani($req_param)->result_array();        
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

            $responce->rows[$i]['umur'] = $result[$i]['umur'] ; 
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
 


 function cetak($id_pekerjaan) {
 	 $this->db->select('*')->from('v_penduduk p')
	->where("hidup_mati","1")->where("status_kependudukan not in  ('1','3')",NULL,FALSE)
 	->where("p.id_desa",$this->session->userdata("operator_id_desa"))
	->where("id_pekerjaan",$id_pekerjaan)
	->order_by("dusun");
	
	$data['id_pekerjaan'] = $id_pekerjaan;
 	$data['rec'] = $res = $this->db->get();
	$this->load->view("statistik_penduduk_pekerjaan_cetak",$data); 	
 }


 function cetak_l($id_pekerjaan) {
     $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan not in  ('1','3')",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("id_pekerjaan",$id_pekerjaan)
    ->where('jk','l')
    ->order_by("dusun");
    
    $data['id_pekerjaan'] = $id_pekerjaan;
    $data['rec'] = $res = $this->db->get();
    $this->load->view("statistik_penduduk_pekerjaan_cetak",$data);  
 }

 function cetak_p($id_pekerjaan) {
     $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan not in  ('1','3')",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("id_pekerjaan",$id_pekerjaan)
    ->where('jk','p')
    ->order_by("dusun");
    
    $data['id_pekerjaan'] = $id_pekerjaan;
    $data['rec'] = $res = $this->db->get();
    $this->load->view("statistik_penduduk_pekerjaan_cetak",$data);  
 }



 function cetak_15($id_pekerjaan) {
     $data['controller'] = get_class($this);
    $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan not in  ('1','3')",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
     ->where("p.umur >= 0 and p.umur >=15",NULL,FALSE)
    ->where("id_pekerjaan",$id_pekerjaan)
    ->order_by("dusun");
    
    $data['id_pekerjaan'] = $id_pekerjaan;
    $data['rec'] = $res = $this->db->get();
   
 

    $this->load->view("index_15/statistik_penduduk_pekerjaan_15_cetak",$data);  
}

function cetak_petani($id_pekerjaan) {
    $data['controller'] = get_class($this);
    $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan not in  ('1','3')",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("id_pekerjaan in  ('9','20')",NULL,FALSE)
    // ->where("id_pekerjaan",$id_pekerjaan)
    ->order_by("dusun");

    $data['id_pekerjaan'] = $id_pekerjaan;
    $data['rec'] = $res = $this->db->get();
      $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_petani('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_petani('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();

    $this->load->view("petani/statistik_penduduk_pekerjaan_cetak",$data);  
 }
 
function cetak_petani_l($id_pekerjaan) {
    $data['controller'] = get_class($this);
    $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan not in  ('1','3')",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("id_pekerjaan in  ('9','20')",NULL,FALSE)
    ->where('jk','l')
    // ->where("id_pekerjaan",$id_pekerjaan)
    ->order_by("dusun");

    $data['id_pekerjaan'] = $id_pekerjaan;
    $data['rec'] = $res = $this->db->get();
      $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_petani('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_petani('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();

    $this->load->view("petani/statistik_penduduk_pekerjaan_cetak_l",$data);  
 }
function cetak_petani_p($id_pekerjaan) {
    $data['controller'] = get_class($this);
    $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan not in  ('1','3')",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("id_pekerjaan in  ('9','20')",NULL,FALSE)
    ->where('jk','p')
    // ->where("id_pekerjaan",$id_pekerjaan)
    ->order_by("dusun");

    $data['id_pekerjaan'] = $id_pekerjaan;
    $data['rec'] = $res = $this->db->get();
      $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_petani('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_petani('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();

    $this->load->view("petani/statistik_penduduk_pekerjaan_cetak_p",$data);  
 }



function cetak_non_petani($id_pekerjaan) {
    $data['controller'] = get_class($this);
    $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan not in  ('1','3')",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("id_pekerjaan not in  ('9','1')",NULL,FALSE)
    // ->where("id_pekerjaan",$id_pekerjaan)
    ->order_by("dusun");

    $data['id_pekerjaan'] = $id_pekerjaan;
    $data['rec'] = $res = $this->db->get();
      $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_non_petani('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_non_petani('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();

    $this->load->view("non_petani/statistik_penduduk_pekerjaan_cetak",$data);  
 }

 function cetak_non_petani_l($id_pekerjaan) {
    $data['controller'] = get_class($this);
    $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan not in  ('1','3')",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("id_pekerjaan not in  ('9','1')",NULL,FALSE)
    ->where('jk','l')
    ->order_by("dusun");

    $data['id_pekerjaan'] = $id_pekerjaan;
    $data['rec'] = $res = $this->db->get();
      $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_non_petani('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_non_petani('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();

    $this->load->view("non_petani/statistik_penduduk_pekerjaan_cetak_l",$data);  
 }


 function cetak_non_petani_p($id_pekerjaan) {
    $data['controller'] = get_class($this);
    $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan not in  ('1','3')",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("id_pekerjaan not in  ('9','1')",NULL,FALSE)
    ->where('jk','p')
    ->order_by("dusun");

    $data['id_pekerjaan'] = $id_pekerjaan;
    $data['rec'] = $res = $this->db->get();
      $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_non_petani('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_non_petani('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();

    $this->load->view("non_petani/statistik_penduduk_pekerjaan_cetak_p",$data);  
 }
 

 



 function pdf($id_pekerjaan){
   $data['controller'] = get_class($this);
	$this->db->select('*')->from('v_penduduk p')
	->where("hidup_mati","1")->where("status_kependudukan not in  ('1','3')",NULL,FALSE)
 	->where("p.id_desa",$this->session->userdata("operator_id_desa"))
	->where("id_pekerjaan",$id_pekerjaan)
	;
	
	$data['id_pekerjaan'] = $id_pekerjaan;
 	$data['rec'] = $res = $this->db->get();
   
    $data['header'] = "DATA PENDUDUK MENURUT PEKERJAAN  ";
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


         $html = $this->load->view("pdf/statistik_penduduk_pekerjaan_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("pdf/statistik_penduduk_pekerjaan_pdf_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
            $html = $this->load->view("pdf/statistik_penduduk_pekerjaan_pdf_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}


function pdf_15($id_pekerjaan){
   $data['controller'] = get_class($this);
    $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan not in  ('1','3')",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
     ->where("p.umur >= 0 and p.umur >=15",NULL,FALSE)
    ->where("id_pekerjaan",$id_pekerjaan)
    ->order_by("dusun");
    
    $data['id_pekerjaan'] = $id_pekerjaan;
    $data['rec'] = $res = $this->db->get();
   
    $data['header'] = "DATA PENDUDUK MENURUT PEKERJAAN  ";
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


         $html = $this->load->view("index_15/pdf/statistik_penduduk_pekerjaan_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("index_15/pdf/statistik_penduduk_pekerjaan_pdf_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
            $html = $this->load->view("index_15/pdf/statistik_penduduk_pekerjaan_pdf_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}
function pdf_petani($id_pekerjaan){
   $data['controller'] = get_class($this);
    $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan not in  ('1','3')",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("pekerjaan = 'PETANI/PEKEBUN'",NULL,FALSE)
    // ->where("id_pekerjaan",$id_pekerjaan)
    ->order_by("dusun");

    $data['id_pekerjaan'] = $id_pekerjaan;
    $data['rec'] = $res = $this->db->get();
      $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_petani('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_petani('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();

   
    $data['header'] = "DATA PENDUDUK SEKTOR PERTANIAN  ";
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


         $html = $this->load->view("petani/pdf/statistik_penduduk_pekerjaan_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("petani/pdf/statistik_penduduk_pekerjaan_pdf_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
            $html = $this->load->view("petani/pdf/statistik_penduduk_pekerjaan_pdf_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}
function pdf_non_petani($id_pekerjaan){
   $data['controller'] = get_class($this);
    $this->db->select('*')->from('v_penduduk p')
    ->where("hidup_mati","1")->where("status_kependudukan not in  ('1','3')",NULL,FALSE)
    ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where("pekerjaan NOT LIKE 'PETANI/PEKEBUN' AND pekerjaan NOT LIKE 'BELUM/TIDAK BEKERJA'",NULL,FALSE)
    // ->where("id_pekerjaan",$id_pekerjaan)
    ->order_by("dusun");

    $data['id_pekerjaan'] = $id_pekerjaan;
    $data['rec'] = $res = $this->db->get();
      $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat_non_petani('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat_non_petani('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();

   
    $data['header'] = "DATA PENDUDUK SEKTOR NON-PERTANIAN  ";
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


         $html = $this->load->view("non_petani/pdf/statistik_penduduk_pekerjaan_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("non_petani/pdf/statistik_penduduk_pekerjaan_pdf_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
            $html = $this->load->view("non_petani/pdf/statistik_penduduk_pekerjaan_pdf_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}

  
 // function cetak_statistik(){
 // 	$sql="SELECT k.`id_pekerjaan`, k.`pekerjaan`,
	// 	SUM(IF(p.jk='l',1,0)) AS l,
	// 	SUM(IF(p.jk='p',1,0)) AS p
	// 	FROM pekerjaan k
	// 	LEFT JOIN penduduk p ON p.`id_pekerjaan` = k.`id_pekerjaan`
	// 	 WHERE k.deleted='0' AND p.`deleted`='0' AND status_kependudukan not in ('1','3')  AND hidup_mati ='1'
	// 	 and p.deleted='0'
	// 	GROUP BY k.`id_pekerjaan`
	// 	ORDER BY pekerjaan";
	// $res = $this->db->query($sql);
	// $data['record'] = $res;
	// $this->load->view("statistik_penduduk_pekerjaan_stat_cetak",$data); 	
 // }

 function cetak_statistik(){
   $data['controller'] = get_class($this);

 $sql="SELECT k.`id_pekerjaan`, k.`pekerjaan`,
        SUM(IF(p.jk='l',1,0)) AS l,
        SUM(IF(p.jk='p',1,0)) AS p
        FROM pekerjaan k
        LEFT JOIN penduduk p ON p.`id_pekerjaan` = k.`id_pekerjaan`
         WHERE k.deleted='0' AND p.`deleted`='0' AND status_kependudukan not in ('1','3')  AND hidup_mati ='1'
         and p.deleted='0'
        GROUP BY k.`id_pekerjaan`
        ORDER BY pekerjaan";
    $res = $this->db->query($sql);
    $data['record'] = $res;
    $this->load->view("statistik_penduduk_pekerjaan_stat_cetak",$data);     
 }
 
function diag() {
    
    $data['pekerjaan'] = $this->dm->stat_penduduk_pekerjaan()->row();
    
 
    $this->load->view("diag",$data);
}

function diag_petani() {
    
    $data['pekerjaan'] = $this->dm->stat_penduduk_petani()->row();
    
 
    $this->load->view("diag_petani",$data);
}





function pdf_statistik(){
   $data['controller'] = get_class($this);

 $sql="SELECT k.`id_pekerjaan`, k.`pekerjaan`,
		SUM(IF(p.jk='l',1,0)) AS l,
		SUM(IF(p.jk='p',1,0)) AS p
		FROM pekerjaan k
		LEFT JOIN penduduk p ON p.`id_pekerjaan` = k.`id_pekerjaan`
		 WHERE k.deleted='0' AND p.`deleted`='0' AND status_kependudukan not in ('1','3')  AND hidup_mati ='1'
		 and p.deleted='0'
		GROUP BY k.`id_pekerjaan`
		ORDER BY pekerjaan";
	$res = $this->db->query($sql);
	$data['record'] = $res;
   
    $data['header'] = "STATISTIK PEKERJAAN PENDUDUK ";
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
        $pdf->AddPage('P');


         // $html = $this->load->view("ringkasan_pdf_head",$data,true);
         // $pdf->writeHTML($html, true, false, true, false, '');


         $html = $this->load->view("pdf/statistik_penduduk_pekerjaan_stat_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("pdf/statistik_penduduk_pekerjaan_stat_pdf_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
            $html = $this->load->view("pdf/statistik_penduduk_pekerjaan_stat_pdf_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}


function excel($id_pekerjaan){

$this->db->where("id_pekerjaan",$id_pekerjaan);
$pekerjaan = $this->db->get("pekerjaan")->row();


        $this->db->select('*')->from('v_penduduk p')
        ->join('pendidikan pdk','pdk.id_pendidikan = p.id_pendidikan','left')
        ->join('pekerjaan pk','pk.id_pekerjaan = p.id_pekerjaan','left');

         
        $this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL, FALSE)->
        where("p.id_pekerjaan",$id_pekerjaan)
        ->order_by("p.no_kk");

        $res = $this->db->get();

        // echo $this->db->last_query(); exit;

     $data['l'] =  $this->dm->get_stat('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
       

// echo $this->db->last_query(); exit;

        $this->load->library('Excel');
        $this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('Data Penduduk per pekerjaan ');

         $arr_kolom = array('a','b','c','d','e','f','g','h','i','j','k','l','m');

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
         
        $data_desa = $this->cm->data_desa();
        $baris = 1;

        $this->excel->getActiveSheet()->mergeCells('a'.$baris.':m'.$baris);
         $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "DATA PENDUDUK PEKERJAAN ". $pekerjaan->pekerjaan );
       
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
                ->setCellValue('M' . $baris, "PEKERJAAN") ;     



               
                $this->format_header($arr_kolom,$baris);

                $baris++;
                $n=0;
                foreach($res->result() as $row) : 
                $n++;
                $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, $n)
                ->setCellValueExplicit('B' . $baris, "$row->no_kk")
                ->setCellValueExplicit('C' . $baris, "$row->nik")
                ->setCellValue('D' . $baris, $row->nama)
                ->setCellValue('E' . $baris, $row->umur)      
                ->setCellValue('F' . $baris, $row->tmp_lahir)
                ->setCellValue('G' . $baris, $row->tgl_lahir)
                ->setCellValue('H' . $baris, $row->alamat)
                ->setCellValue('I' . $baris, $row->rt)
                ->setCellValue('J' . $baris, $row->rw)
                ->setCellValue('K' . $baris, $row->hubungan_dlm_keluarga)
                ->setCellValue('L' . $baris, $row->pendidikan)
                ->setCellValue('M' . $baris, $row->pekerjaan) ;  

                $this->format_baris($arr_kolom,$baris);
                $baris++;
                endforeach;





        $filename = "LAPORAN DATA PENDUDUK PEKERJAAN ".$pekerjaan->pekerjaan.".xls";

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