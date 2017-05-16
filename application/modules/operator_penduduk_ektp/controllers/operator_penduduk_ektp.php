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
    
 

 
 

 // function cetak($id_penduduk) {

 // 	$this->db->select('*')->from('v_penduduk p')
 // 	->join('kk_anggota kk','p.id_penduduk=kk.id_penduduk','left')
 // 	//->where("p.id_penduduk",$id_penduduk)
 // 	->where("p.id_desa",$this->session->userdata("operator_id_desa"));

 // 	$res = $this->db->get();
 // 	$data=$res->row_array();
	
 // 	$this->cm->data_desa();
	// $temp = $this->dm->get_all_data($id_penduduk);
	// $data = array_merge($data,$temp);
	
 // 	$data['nama_camat'] = $this->cm->desa->nama_camat;
	// //echo $this->cm->desa->nama_camat;
	// //var_dump($data);
	// $this->load->view("biodata",$data); 	



 // }




 // function cetak($id_penduduk) {

 // 	$this->db->select('*')->from('v_penduduk p')
 // 	->join('kk_anggota kk','p.id_penduduk=kk.id_penduduk','left')
 // 	//->where("p.id_penduduk",$id_penduduk)
 // 	->where("p.id_desa",$this->session->userdata("operator_id_desa"));

 // 	$res = $this->db->get();
 // 	$data=$res->row_array();
	
 // 	$this->cm->data_desa();
	// $temp = $this->dm->get_all_data($id_penduduk);
	// $data = array_merge($data,$temp);
	
 // 	$data['nama_camat'] = $this->cm->desa->nama_camat;
	// //echo $this->cm->desa->nama_camat;
	// //var_dump($data);
	// $this->load->view("biodata",$data); 	



 // }


 function cetak($status) {
 	 

    $data['record'] = $this->dm->rec_data($status);
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat('L',$status); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat('P',$status); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();

    $data['judul'] = ($status=="0")?" BELUM MEMILIKI EKTP":"MEMILIKI EKTP";
    

	$this->load->view("operator_penduduk_ektp_cetak",$data); 	



 }
 function excelagama($id_agama){

    $this->db->where("id_agama",$id_agama);
    $agama  = $this->db->get("agama")->row();



        $this->db->select('*,p.no_kk')->from('v_penduduk p')
        ->join('pendidikan pdk','pdk.id_pendidikan = p.id_pendidikan','left')
        ->join('kk_anggota kk','kk.id_penduduk = p.id_penduduk','left')
        ->join('pekerjaan pk','pk.id_pekerjaan = p.id_pekerjaan','left');

        $this->db->where("p.hidup_mati",1)->where("p.status_kependudukan<>3",NULL,FALSE);
        $this->db->where("id_agama",$id_agama);
        $this->db->order_by('p.no_kk, kk.urutan');

        $res = $this->db->get();

       // echo $this->db->last_query(); exit;

        $this->load->library('Excel');
        $this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('Data Penduduk Agama ');

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
                ->setCellValue('A' . $baris, "DATA PENDUDUK AGAMA");
       
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


        $baris++; 
         $this->excel->getActiveSheet()
              
                ->setCellValue('B' . $baris, "AGAMA $agama->agama");

        $baris = 8;

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





        $filename = "LAPORAN DATA PENDUDUK AGAMA .xls";

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

function excel($status) {
		$this->load->library('Excel');
        $this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('EKTP');

        $arr_kolom = array('a','b','c','d','e','f','g','h','i','j','k','l','m');

       /* $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
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
        $this->excel->getActiveSheet()->getColumnDimension('M')->setWidth(18);   */ 

        $filename = "LAPORAN.xls";

        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
                     
        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');  
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
}


function excelxy($status){
	$id_agama = 1;
    $this->db->where("id_agama",$id_agama);
    $agama  = $this->db->get("agama")->row();



        $this->db->select('*,p.no_kk')->from('v_penduduk p')
        ->join('pendidikan pdk','pdk.id_pendidikan = p.id_pendidikan','left')
        ->join('kk_anggota kk','kk.id_penduduk = p.id_penduduk','left')
        ->join('pekerjaan pk','pk.id_pekerjaan = p.id_pekerjaan','left');

        $this->db->where("p.hidup_mati",1)->where("p.status_kependudukan<>3",NULL,FALSE);
        $this->db->where("id_agama",$id_agama);
        $this->db->order_by('p.no_kk, kk.urutan');

        $res = $this->db->get();

       // echo $this->db->last_query(); exit;

        $this->load->library('Excel');
        $this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('Data Penduduk Agama ');

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
                ->setCellValue('A' . $baris, "DATA PENDUDUK AGAMA");
       
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


        $baris++; 
         $this->excel->getActiveSheet()
              
                ->setCellValue('B' . $baris, "AGAMA");

        $baris = 8;

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





        $filename = "LAPORAN DATA PENDUDUK AGAMA .xls";

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




 function excelx($status){

      
 		$judul = ($status=="0")?" BELUM MEMILIKI EKTP":"MEMILIKI EKTP";

        $res = $this->dm->rec_data($status);

       // echo $this->db->last_query(); exit;

        $this->load->library('Excel');
        $this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('EKTP');

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

         /* 
        $this->excel->getActiveSheet()->mergeCells('a'.$baris.':m'.$baris);
         $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "DATA PENDUDUK $judul");
       
       $this->format_center($arr_kolom,$baris);

        

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
    endforeach; */ 





        $filename = "PENDUDUK EKTP.xls";

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

