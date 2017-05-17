<?php 
class operator_penduduk_ektp extends  op_controller {
 	function __construct() {
		parent::__construct();
 
		$this->load->model("ektpmodel","dm");
		$this->load->model("core_model","cm");
		$this->load->model("add_model","am");
		$this->load->helper("tanggal");
		 
		 
	}



function index()
    {


    

 	//echo $this->uri->segment(3);
    $data['title'] = "PENDUDUK MEMILIKI EKTP";	
    $data['header'] = "PENDUDUK MEMILIKI EKTP";
	$data['controller'] = "operator_penduduk_ektp";
   	$data['arr_kecamatan'] = $this->cm->add_arr_head($this->cm->arr_kecamatan(),'x',' - Semua Kecamatan -');
   	$data['arr_kecamatan2'] = $this->cm->add_arr_head($this->cm->arr_kecamatan(),'x',' - Pilih Kecamatan -');


   	$data['arr_jk']  = $this->cm->arr_jk;
   	$data['arr_kaya_miskin']  = $this->cm->arr_kaya_miskin;

   	$arr['ektp'] = $this->cm->arr_ektp; 

   	//$data['arr_golongan_darah']  = $this->cm->arr_golongan_darah;
   	$data['arr_warga_negara']  = $this->cm->arr_warga_negara;
   	$data['arr_agama']  = $this->cm->arr_agama();
   	$data['arr_pendidikan'] = $this->cm->arr_pendidikan();
   	$data['arr_status_kawin'] = $this->cm->arr_status_kawin;
   	$data['arr_provinsi']   = $this->cm->add_arr_head($this->cm->arr_tiger_provinsi(),'x','-Pilih Provinsi-');
   	$data['arr_pekerjaan'] = $this->cm->arr_pekerjaan();

   	$data['arr_dusun'] = $this->cm->arr_dusun();
	$data['xxx'] = $this->uri->segment(3);
   	$content = $this->load->view("operator_penduduk_ektp_view",$data,true);
	$this->set_title("Data Penduduk");
	$this->set_content($content);
	$this->render();
    }
 
function get_data(){
    	$page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"no_kk"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        //$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        //$id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
        $nama  = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"zzzzzzzz";
        $umur  = isset($_REQUEST['search_umur'])?$_REQUEST['search_umur']:"zzzzzzzz";
        $nik  = isset($_REQUEST['search_nik'])?$_REQUEST['search_nik']:"x";
        $no_kk  = isset($_REQUEST['search_no_kk'])?$_REQUEST['search_no_kk']:"x";
        $status_kependudukan  = isset($_REQUEST['search_status_kependudukan'])?$_REQUEST['search_status_kependudukan']:"x";
        $status_kawin  = isset($_REQUEST['search_status_kawin'])?$_REQUEST['search_status_kawin']:"x";
        $jk  = isset($_REQUEST['search_jk'])?$_REQUEST['search_jk']:"x";
        $ektp  = isset($_REQUEST['search_ektp'])?$_REQUEST['search_ektp']:"x";
       
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null  ,
				"id_desa"	=> $this->session->userdata("operator_id_desa"),
				"nik" => $nik,
				"no_kk" => $no_kk,
				"jk" => $jk,
				"ektp" => $ektp,
				"status_kawin" => $status_kawin,
				"status_kependudukan" => $status_kependudukan,
				"nama" => $nama,
				"umur" => $umur,

				"id_dusun" =>   isset($_REQUEST['search_id_dusun'])?$_REQUEST['search_id_dusun']:"x"
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
        	  //$responce->rows[0]['nik']			= null;    
        	 $responce->rows[1][$sidx] = ''; 
        }    
        else {     
        for($i=0; $i<count($result); $i++){
        	$x++;
            //$responce->rows[$i]['id']=$result[$i]['id_provinsi'];
            // data berikut harus sesuai dengan kolom-kolom yang ingin ditampilkan di view (js)
            $responce->rows[$i]['id_penduduk']	 = $result[$i]['id_penduduk'] ;   
            $responce->rows[$i]['regdate']	 =  flipdate($result[$i]['regdate']) ;   
            $responce->rows[$i]['nik']			 = $result[$i]['nik'] ;    
             $responce->rows[$i]['no_kk']			 = $result[$i]['no_kk'] ;    
			$responce->rows[$i]['nama']			 = $result[$i]['nama'] ; 
			$responce->rows[$i]['tgl_lahir']	 = $result[$i]['tgl_lahir'] ;       
			
			$responce->rows[$i]['tmp_lahir']	 = $result[$i]['tmp_lahir'] ; 
			$responce->rows[$i]['jk']			 = $result[$i]['jk'] ;  
			$responce->rows[$i]['kaya_miskin']	 = $result[$i]['kaya_miskin'] ;  
			$responce->rows[$i]['alamat']		 = $result[$i]['alamat'] ;  
			$responce->rows[$i]['rt']			 = $result[$i]['rt'] ;  
			$responce->rows[$i]['rw']			 = $result[$i]['rw'] ;
			$responce->rows[$i]['id_desa']		 = $result[$i]['id_desa'] ; 
			$responce->rows[$i]['desa']			 = $result[$i]['desa'] ;   
			// $responce->rows[$i]['id_dusun']		 = $result[$i]['id_dusun'] ;
			$responce->rows[$i]['id_kecamatan']	 = $result[$i]['id_kecamatan'] ;   
			$responce->rows[$i]['kecamatan']	 = $result[$i]['kecamatan'] ; 
			$responce->rows[$i]['id_pendidikan'] = $result[$i]['id_pendidikan'] ;  
			$responce->rows[$i]['baca_tulis']	 = $result[$i]['baca_tulis'] ;  
			$responce->rows[$i]['ektp']	 		= ($result[$i]['ektp'] == "1" )?"<span >ADA</span>":"<span style='color:red;'>TIDAK ADA</span>"; 
			
			  
 		
			$responce->rows[$i]['warga_negara']	= $result[$i]['warga_negara'] ;   
			$responce->rows[$i]['golongan_darah']	= $result[$i]['golongan_darah'] ;  
 			$responce->rows[$i]['id_agama']	= $result[$i]['id_agama'] ;  
			$responce->rows[$i]['id_pekerjaan']	= $result[$i]['id_pekerjaan'] ;
			$responce->rows[$i]['status_kawin']	= $result[$i]['status_kawin'] ;    			
			$responce->rows[$i]['id_pendidikan']	= $result[$i]['id_pendidikan'] ;  
			$responce->rows[$i]['id_kecamatan']	= $result[$i]['id_kecamatan'] ;  
			$responce->rows[$i]['status_kependudukan']	= $result[$i]['status_kependudukan'] ; 
			
			$arr_status_kependudukan = $this->cm->arr_status_kependudukan; 
			$responce->rows[$i]['status_kependudukan2']	= ($result[$i]['status_kependudukan'] == "")?"":$arr_status_kependudukan[$result[$i]['status_kependudukan']] ; 
			$responce->rows[$i]['hidup_mati']	= $result[$i]['hidup_mati'] ; 
			//$responce->rows[$i]['id_suku']	= $result[$i]['id_suku'] ; 		
			$responce->rows[$i]['keturunan']	= $result[$i]['keturunan'] ; 	
			$responce->rows[$i]['dusun']	= $result[$i]['dusun'] ; 	
			$responce->rows[$i]['pendidikan']	= $result[$i]['pendidikan'] ; 	
			$responce->rows[$i]['pekerjaan']	= $result[$i]['pekerjaan'] ; 			
			$responce->rows[$i]['status_hidup']	= $result[$i]['status_hidup'] ; 	
			$responce->rows[$i]['umur']	= $result[$i]['umur'] ; 
			
			$responce->rows[$i]['jenis_kedatangan']	= $result[$i]['jenis_kedatangan'] ; 
			
			$responce->rows[$i]['asal_negara']	= $result[$i]['asal_negara'] ;
			$responce->rows[$i]['umur']	= $result[$i]['umur'] ; 
			$responce->rows[$i]['rt_sebelumnya']		= $result[$i]['rt_sebelumnya'] ; 
			$responce->rows[$i]['rw_sebelumnya']		= $result[$i]['rw_sebelumnya'] ; 
			$responce->rows[$i]['alamat_sebelumnya']		= $result[$i]['alamat_sebelumnya'] ; 
			$responce->rows[$i]['id_desa_sebelumnya']		= $result[$i]['id_desa_sebelumnya'] ; 
			// $responce->rows[$i]['id_kecamatan_sebelumnya']		= $result[$i]['id_kecamatan_sebelumnya'] ; 
			// $responce->rows[$i]['id_kota_sebelumnya']		= $result[$i]['id_kota_sebelumnya'] ; 
			// $responce->rows[$i]['id_provinsi_sebelumnya']		= $result[$i]['id_provinsi_sebelumnya'] ; 
			$responce->rows[$i]['sementara_maksud']		= $result[$i]['sementara_maksud'] ; 
			$responce->rows[$i]['sementara_id_tujuan']		= $result[$i]['sementara_id_tujuan'] ; 
			 



			 

			 

        }
    }
        echo json_encode($responce); 
    }
  
function ada() {
		$ids = $_POST['ids'];
		$arr_id = explode(",",$ids);
		$a=array(); $b=array();
		foreach($arr_id as $id) {
			//$this->core_model->delete_table_data('kk',array("no_kk"=>$id)); 
			$this->db->where('id_penduduk',$id);
			// $res = $this->db->delete("penduduk");
			$res = $this->db->query("UPDATE penduduk SET ektp='1' WHERE id_penduduk='$id' ");
			if($res) $a[]=$id;
			else $b[]=$id;
			//echo $this->db->last_query()."<br />";
		}
		if(count($a)>0) $pesan =  "Id ".implode(",", $a). " Berhasil   ";
		if(count($b)>0) $pesan = "Id ".implode(",", $b). " Gagal   ";

		echo json_encode(array("success"=>true,"pesan"=>$pesan));
	}    
function tidakada() {
		$ids = $_POST['ids'];
		$arr_id = explode(",",$ids);
		$a=array(); $b=array();
		foreach($arr_id as $id) {
			//$this->core_model->delete_table_data('kk',array("no_kk"=>$id)); 
			$this->db->where('id_penduduk',$id);
			// $res = $this->db->delete("penduduk");
			$res = $this->db->query("UPDATE penduduk SET ektp='0' WHERE id_penduduk='$id' ");
			if($res) $a[]=$id;
			else $b[]=$id;
			//echo $this->db->last_query()."<br />";
		}
		if(count($a)>0) $pesan =  "Id ".implode(",", $a). " Berhasil  ";
		if(count($b)>0) $pesan = "Id ".implode(",", $b). " Gagal  ";

		echo json_encode(array("success"=>true,"pesan"=>$pesan));
	}    
    
 

 
  


 function cetak($status) {
 	 

    $data['record'] = $this->dm->rec_data($status);
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat('L',$status); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat('P',$status); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();

    $data['judul'] = ($status=="0")?" BELUM MEMILIKI EKTP":"MEMILIKI EKTP";
    

	$this->load->view("operator_penduduk_ektp_cetak",$data); 	



 }
 

 function grafik(){
 	$data = array();

 	$jumlah_sudah = $this->dm->rec_data(1)->num_rows();
 	$jumlah_belum = $this->dm->rec_data(0)->num_rows();

 	$total = $jumlah_sudah + $jumlah_belum; 

 	// echo "Jumlah sudah $jumlah_sudah <br />" ;
 	// echo "Jumlah sudah $jumlah_belum <br />" ; exit; 

 	$data['persen_sudah'] = number_format((($jumlah_sudah / $total) * 100),2 );
 	$data['persen_belum'] =  number_format((($jumlah_belum / $total) * 100),2);

 	// show_array($data);  exit;


 	$data['title'] = "GRAFIK KEPEMILIKAN E-KTP";	
    $data['header'] = "GRAFIK KEPEMILIKAN E-KTP";
 	$content = $this->load->view("operator_penduduk_ektp_grafik",$data,true);
	$this->set_title("GRAFIK KEPEMILIKAN E-KTP");
	$this->set_content($content);
	$this->render();
 }
	
}


?>

