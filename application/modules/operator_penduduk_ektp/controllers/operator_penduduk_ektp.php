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
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"provinsi"; // get index row - i.e. user click to sort 
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
        $kaya_miskin  = isset($_REQUEST['search_kaya_miskin'])?$_REQUEST['search_kaya_miskin']:"x";
       
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null  ,
				"id_desa"	=> $this->session->userdata("operator_id_desa"),
				"nik" => $nik,
				"no_kk" => $no_kk,
				"jk" => $jk,
				"kaya_miskin" => $kaya_miskin,
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
  
function hapus() {
		$ids = $_POST['ids'];
		$arr_id = explode(",",$ids);
		$a=array(); $b=array();
		foreach($arr_id as $id) {
			//$this->core_model->delete_table_data('kk',array("no_kk"=>$id)); 
			$this->db->where('id_penduduk',$id);
			// $res = $this->db->delete("penduduk");
			$res = $this->db->query("UPDATE penduduk SET kaya_miskin='2' WHERE id_penduduk='$id' ");
			if($res) $a[]=$id;
			else $b[]=$id;
			//echo $this->db->last_query()."<br />";
		}
		if(count($a)>0) $pesan =  "Id ".implode(",", $a). " Berhasil   ";
		if(count($b)>0) $pesan = "Id ".implode(",", $b). " Gagal   ";

		echo json_encode(array("success"=>true,"pesan"=>$pesan));
	}    
function kaya() {
		$ids = $_POST['ids'];
		$arr_id = explode(",",$ids);
		$a=array(); $b=array();
		foreach($arr_id as $id) {
			//$this->core_model->delete_table_data('kk',array("no_kk"=>$id)); 
			$this->db->where('id_penduduk',$id);
			// $res = $this->db->delete("penduduk");
			$res = $this->db->query("UPDATE penduduk SET kaya_miskin='1' WHERE id_penduduk='$id' ");
			if($res) $a[]=$id;
			else $b[]=$id;
			//echo $this->db->last_query()."<br />";
		}
		if(count($a)>0) $pesan =  "Id ".implode(",", $a). " Berhasil  ";
		if(count($b)>0) $pesan = "Id ".implode(",", $b). " Gagal  ";

		echo json_encode(array("success"=>true,"pesan"=>$pesan));
	}    
    
 

 
 

 function cetak($id_penduduk) {

 	$this->db->select('*')->from('v_penduduk p')
 	->join('kk_anggota kk','p.id_penduduk=kk.id_penduduk','left')
 	->where("p.id_penduduk",$id_penduduk)
 	->where("p.id_desa",$this->session->userdata("operator_id_desa"));

 	$res = $this->db->get();
 	$data=$res->row_array();
	
 	$this->cm->data_desa();
	$temp = $this->dm->get_all_data($id_penduduk);
	$data = array_merge($data,$temp);
	
 	$data['nama_camat'] = $this->cm->desa->nama_camat;
	//echo $this->cm->desa->nama_camat;
	//var_dump($data);
	$this->load->view("biodata",$data); 	



 }



 function pdf($id_penduduk) {

 	$this->db->select('*')->from('v_penduduk p')
 	->join('kk_anggota kk','p.id_penduduk=kk.id_penduduk','left')
 	->where("p.id_penduduk",$id_penduduk)
 	->where("p.id_desa",$this->session->userdata("operator_id_desa"));

 	$res = $this->db->get();
 	$data=$res->row_array();
	
 	$this->cm->data_desa();
	$temp = $this->dm->get_all_data($id_penduduk);
	$data = array_merge($data,$temp);
	
 	$data['nama_camat'] = $this->cm->desa->nama_camat;	 
    $data['controller'] = get_class($this);       
    $data['header'] = "BIODATA PENDUDUK ";
  

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

 


         $html = $this->load->view("pdf/pdf_biodata",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');


  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');
	



 }

 function json_detail($id_penduduk) {
 	$this->db->where("id_penduduk",$id_penduduk);
 	$res = $this->db->get("v_penduduk");
 	$data = $res->row_array();
 	echo json_encode($data);
 }

 

 function get_temp_nik(){
 	  
 	echo $this->am->get_temp_nik();
 }




 

	
}


?>

