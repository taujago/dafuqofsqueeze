<?php 
class statistik_penduduk_miskin extends  op_controller {
 	function __construct() {
		parent::__construct();
 
		$this->load->model("miskinm","dm");
		$this->load->model("core_model","cm");
		$this->load->model("add_model","am");
		$this->load->helper("tanggal");
		 //////////////
		 
	}


function index()
    {
 
    $data['title'] = "Data Penduduk Miskin";	
    $data['header'] = "Data Penduduk Miskin";
	$data['controller'] = "statistik_penduduk_miskin";
   	$data['arr_kecamatan'] = $this->cm->add_arr_head($this->cm->arr_kecamatan(),'x',' - Semua Kecamatan -');
   	$data['arr_kecamatan2'] = $this->cm->add_arr_head($this->cm->arr_kecamatan(),'x',' - Pilih Kecamatan -');


   	$data['arr_jk']  = $this->cm->arr_jk;
   //	$data['arr_golongan_darah']  = $this->arr_tabel("master_gol_darah", "gol", "gol", "gol") // $this->cm->arr_golongan_darah;
   	//$data['arr_warga_negara']  = $this->cm->arr_warga_negara;
   	//$data['arr_agama']  = $this->cm->arr_agama();
   	//$data['arr_pendidikan'] = $this->cm->arr_pendidikan();
   	$data['arr_status_kawin'] = $this->cm->arr_status_kawin;
   	$data['arr_provinsi']   = $this->cm->add_arr_head($this->cm->arr_tiger_provinsi(),'x','-Pilih Provinsi-');
   	$data['arr_pekerjaan'] = $this->cm->arr_pekerjaan();

   	$data['arr_dusun'] = $this->cm->arr_dusun();

   	$content = $this->load->view("statistik_penduduk_miskin_view",$data,true);
	$this->set_title("Data Pendudku");
	$this->set_content($content);
	$this->render();
    }


 
function get_data(){
    	$page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"id_dusun, rt, rt"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        //$id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
        //$id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
        $nama  = !empty($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $nik  = !empty($_REQUEST['search_nik'])?$_REQUEST['search_nik']:"x";
        $id_dusun  = !empty($_REQUEST['search_id_dusun'])?$_REQUEST['search_id_dusun']:"x";
        $rt  = !empty($_REQUEST['search_rt'])?$_REQUEST['search_rt']:"x";
        $rw  = !empty($_REQUEST['search_rw'])?$_REQUEST['search_rw']:"x";
       
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null  ,
				"id_desa"	=> $this->session->userdata("operator_id_desa"),
				"nik" => $nik,
				"nama" => $nama,
				"id_dusun" => $id_dusun,
				"rt" => $rt,
				"rw" => $rw    
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
			//$responce->rows[$i]['id_suku']	= $result[$i]['id_suku'] ; 		
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
			
	 
			 

        }
    }
        echo json_encode($responce); 
    }
 

function save(){
        $data = $this->input->post();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nik','Nama penduduk','required');    
         $this->form_validation->set_message('required', ' %s Harus diisi '); 
         
        
        $this->form_validation->set_error_delimiters("* ", '<br>');
        if($this->form_validation->run() == TRUE) {


        	$data['id_penduduk'] = $this->cm->get_id_penduduk($data['nik']);
            unset($data['nik']);
			//$this->db->where("id_penduduk",$data['id_penduduk']);
			$res  = $this->db->insert("statistik_miskin",
                array("id_penduduk"=>$data['id_penduduk'],"tahun"=>date("Y")));
			if($res) {

                $this->db->where("nik",$data['id_penduduk']);
                $this->db->update("penduduk",array("miskin"=>1));

				$ret = array("success"=>true,
                            "pesan"=>"Data berhasil disimpan",
                            "operation" =>"insert");
			}
			else {
				$ret = array("success"=>false,
                            "pesan"=>"Data gagal disimpan ".mysql_error(),
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
        $this->db->where("id_penduduk",$id);
        $this->db->update("penduduk",array("miskin"=>0));

        $this->db->where("id_penduduk",$id);
        $this->db->delete("statistik_miskin");
    }
    echo json_encode(array("success"=>true,"pesan"=>"Berhasil dihapus"));
}

 function cetak() {
 		 
		$this->db->select('p.*')->from('v_penduduk p')
		->join("statistik_miskin sm","p.id_penduduk=sm.id_penduduk");
	 	$this->db->where('p.id_desa',$this->session->userdata("operator_id_desa"));		
		$this->db->where("hidup_mati",1)->where("status_kependudukan<>'3'",NULL,FALSE)->where("tahun", date("Y") );
		$this->db->order_by("dusun,rw,rt,nama");
		
 	$data['record'] = $res = $this->db->get();
	
	$id_desa =	 $this->session->userdata("operator_id_desa");
	$data['l'] =  $this->dm->get_stat('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
	$data['p'] =  $this->dm->get_stat('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
	
 	//$this->cm->data_desa();

	

	$this->load->view("statistik_penduduk_miskin_cetak",$data); 	



 }
 function pdf(){
        $this->db->select('p.*')->from('v_penduduk p')
		->join("statistik_miskin sm","p.id_penduduk=sm.id_penduduk");

	 	$this->db->where('p.id_desa',$this->session->userdata("operator_id_desa"));		
		$this->db->where("hidup_mati",1)->where("status_kependudukan<>'3'",NULL,FALSE)->where("tahun", date("Y") );
		$this->db->order_by("dusun,rw,rt,nama");
		
 	$data['record'] = $res = $this->db->get();
	
	$id_desa =	 $this->session->userdata("operator_id_desa");
	$data['l'] =  $this->dm->get_stat('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
	$data['p'] =  $this->dm->get_stat('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
	
    $data['header'] = "DATA PENDUDUK MISKIN ";
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


         $html = $this->load->view("pdf/statistik_penduduk_miskin_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("pdf/statistik_penduduk_miskin_pdf"."_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
           $html = $this->load->view("pdf/statistik_penduduk_miskin_pdf"."_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}
 

function excel(){


       $this->db->select('*')->from('v_penduduk p')
        ->join('pendidikan pdk','pdk.id_pendidikan = p.id_pendidikan','left')
        ->join('kk_anggota kk','kk.id_penduduk = p.id_penduduk','left')
        ->join('pekerjaan pk','pk.id_pekerjaan = p.id_pekerjaan','left');

        $this->db->where("p.hidup_mati",1)->where("p.status_kependudukan<>3",NULL,FALSE);
        $this->db->where("miskin",1);
        $this->db->order_by('p.no_kk, kk.urutan');

        $res = $this->db->get();



    $this->load->library('Excel');
        $this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('Data Penduduk ');

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
                ->setCellValue('A' . $baris, "DATA PENDUDUK MISKIN ");
       
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
                ->setCellValue('B' . $baris, "'xxx$row->no_kk")
                ->setCellValue('C' . $baris, "'xxx$row->nik")
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





        $filename = "LAPORAN DATA PENDUDUK MISKIN .xls";

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