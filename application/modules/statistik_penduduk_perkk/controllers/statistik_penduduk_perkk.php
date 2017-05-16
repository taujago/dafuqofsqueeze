<?php 
class statistik_penduduk_perkk extends  op_controller {
	var $error;
  var $controller;
	function __construct() {
		parent::__construct();
 
		$this->load->model("stat_ppk","dm");
		$this->load->model("core_model","cm");
		 $this->desa2 = $this->cm->data_desa(); 
     $this->controller = get_class($this);
		 
	}


function index()
    {

    	//$tpl['content'] = $this->load->view("pengguna_view");
  /* 
	$content = $this->load->view("kota_view",$data,true);
	//$this->load->view("template",$tpl);
	$this->set_title("Data kota");
		$this->set_content($content);
		$this->render();
   * */
  $data['title'] = "EXPORT DATA PENDUDUK PER KK";	
  $data['header'] = $data['title'];
	//$data['controller'] = "statistik_penduduk_perkk";
   	 

   	$content = $this->load->view("statistik_penduduk_perkk_view",$data,true);
	$this->set_title($data['title']);
	$this->set_content($content);
	$this->render();
    }
    
 function cek_no_kk($no_kk)
 {
 	 if(empty($no_kk)) {
 	 	$this->form_validation->set_message('cek_no_kk', '%s harus diisi');
 	 	return false;
 	 }

 	 $this->db->where("no_kk",$no_kk);
 	 $jumlah = $this->db->get("kk")->num_rows();
 	 ///cho $this->db->last_query();
 	 //echo "jumlah " . $jumlah;
 	 if($jumlah > 0 ) {
 	 	$this->form_validation->set_message('cek_no_kk', '%s sudah ada');
 	 	return false;
 	 }
 }
 


function excel(){
       $data_desa = $this->cm->data_desa();

        $this->load->library('Excel');
        $this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('Data Penduduk ');

         $arr_kolom = array('a','b','c','d','e','f','g','h','i','j','k','l','m');

        $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);        
        $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(31);  // nik 
        $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(31); // no kk  
        $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(40);  // nama 
        $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(10); // umur
        $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(18);  // tgl lahir 
        $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(20);  // alamat 
        $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(40);  // rt 
        $this->excel->getActiveSheet()->getColumnDimension('I')->setWidth(5); // rw
        $this->excel->getActiveSheet()->getColumnDimension('J')->setWidth(18);  // hubungan dalam kelurga 
        $this->excel->getActiveSheet()->getColumnDimension('K')->setWidth(18);  // Pendidikan
        $this->excel->getActiveSheet()->getColumnDimension('L')->setWidth(30);  
        $this->excel->getActiveSheet()->getColumnDimension('M')->setWidth(40);  



         $baris = 1;

        $this->excel->getActiveSheet()->mergeCells('a'.$baris.':L'.$baris);
         $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "DATA PENDUDUK ");
       
       $this->format_center($arr_kolom,$baris);
 

        $baris++; 

        $this->excel->getActiveSheet()->mergeCells('a'.$baris.':L'.$baris);
         $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "PEMERINTAH DESA  " .$data_desa->desa );
        $this->format_center($arr_kolom,$baris);
        $baris++; 


        $this->excel->getActiveSheet()->mergeCells('a'.$baris.':L'.$baris);
         $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "KECAMATAN" .$data_desa->kecamatan );
        $this->format_center($arr_kolom,$baris);
        $baris++; 


        $this->excel->getActiveSheet()->mergeCells('a'.$baris.':L'.$baris);
         $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, $data_desa->kota );
        $this->format_center($arr_kolom,$baris);

        $baris +=2; 

        $this->db->select('kk.*,p.nama');
        $this->db->from("kk"); 
        $this->db->join("Penduduk p", 'p.id_penduduk = kk.id_penduduk');

        $res = $this->db->get();


        foreach($res->result() as $row  ) : 
          $baris++;
          $this->excel->getActiveSheet()->mergeCells('a'.$baris.':b'.$baris);

          $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "NO. KK" )
                ->setCellValueExplicit('C' . $baris, "$row->no_kk" );           
          $baris++;

          
          $this->excel->getActiveSheet()->mergeCells('a'.$baris.':b'.$baris);

          $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "NAMA KK" )
                ->setCellValue('C' . $baris, $row->nama );           
          $baris++;

          $this->excel->getActiveSheet()->mergeCells('a'.$baris.':b'.$baris);

          $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "ALAMAT" )
                ->setCellValue('C' . $baris, $row->alamat );           
          $baris++;

          $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "RT/RW" )
                ->setCellValue('C' . $baris, $row->rt . "/".$row->rw );           
          $baris++;

           $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "DUSUN" )
                ->setCellValue('C' . $baris, $row->dusun );           
          $baris++;
          $baris++;
          


          // $this->db->select('p.*')
          // $this->db->where("no_kk",$row->no_kk);
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

           
           $this->db->select('*')->from('v_penduduk p')
            ->join('pendidikan pdk','pdk.id_pendidikan = p.id_pendidikan','left')
            ->join('kk_anggota kk','kk.id_penduduk = p.id_penduduk','left')
            ->join('pekerjaan pk','pk.id_pekerjaan = p.id_pekerjaan','left');
            $this->db->where("kk.no_kk",$row->no_kk);
            $this->db->where("p.hidup_mati",1)->where("p.status_kependudukan<>3",NULL,FALSE);
            $this->db->order_by('p.no_kk, kk.urutan');

            $resx = $this->db->get();
            // echo $this->db->last_query(); exit;
            $xx = 0;
            foreach($resx->result() as  $rowx) : 
              $xx++;
                 $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, $xx)
                ->setCellValueExplicit('B' . $baris, "$rowx->no_kk")
                ->setCellValueExplicit('C' . $baris, "$rowx->nik")
                ->setCellValue('D' . $baris, $rowx->nama)
                ->setCellValue('E' . $baris, $rowx->umur)      
                ->setCellValue('F' . $baris, $rowx->tmp_lahir)
                ->setCellValue('G' . $baris, $rowx->tgl_lahir)
                ->setCellValue('H' . $baris, $rowx->alamat)
                ->setCellValue('I' . $baris, $rowx->rt)
                ->setCellValue('J' . $baris, $rowx->rw)
                ->setCellValue('K' . $baris, $rowx->hubungan_dlm_keluarga)
                ->setCellValue('L' . $baris, $rowx->pendidikan)
                ->setCellValue('M' . $baris, $rowx->pekerjaan) ;  

                $this->format_baris($arr_kolom,$baris);
                $baris++;
            endforeach;

            $baris++;

        endforeach;


        $filename = "LAPORAN DATA PENDUDU PER KK.xls";

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




function get_data(){
    	$page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"no_kk"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
       // $id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
       // $id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
       $nama  = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"";
       $no_kk  = isset($_REQUEST['search_no_kk'])?$_REQUEST['search_no_kk']:"";
       
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"id_desa" => $this->session->userdata("operator_id_desa"),
				"limit" => null   ,
				"nama" => $nama    ,
				"no_kk" => $no_kk   
				/*
				"id_desa"	=> $id_desa,
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
        // sekarang format data dari dB sehingga sesuai yang diinginkan oleh jqGrid dalam hal ini aku pakai JSON format
        //$responce->page = $page; 
        $responce = new stdClass();
        $responce->total = $count; 
        //$responce->records = $count;
                $x=0;

        if($count == 0) {
        		 $responce->rows[0]['no_kk']	= "";    
        }   else {      
        $arr_sebagai = $this->cm->arr_hubungan;

        for($i=0; $i<count($result); $i++){
        	$x++;
            //$responce->rows[$i]['id']=$result[$i]['id_provinsi'];
            // data berikut harus sesuai dengan kolom-kolom yang ingin ditampilkan di view (js)
            $responce->rows[$i]['no_kk']	= $result[$i]['no_kk'] ;    
			$responce->rows[$i]['alamat']	= $result[$i]['alamat'] ; 
			$responce->rows[$i]['rt']		= $result[$i]['rt'] ;       
			$responce->rows[$i]['rw']		= $result[$i]['rw'] ;    
			$responce->rows[$i]['id_desa']	= $result[$i]['id_desa'] ;  
			$responce->rows[$i]['id_dusun']	= $result[$i]['id_dusun'] ;  
			$responce->rows[$i]['dusun']	= $result[$i]['dusun'] ;  
			$responce->rows[$i]['desa']		= $result[$i]['desa'] ;  
			$responce->rows[$i]['sebagai']	= $result[$i]['sebagai'] ; 
			$responce->rows[$i]['sebagai2']	= !empty($result[$i]['sebagai']) ? $arr_sebagai[$result[$i]['sebagai']]:"" ; 
			$responce->rows[$i]['id_penduduk']		= $result[$i]['id_penduduk']; 
			$responce->rows[$i]['nik']		= $result[$i]['nik'] ; 
			$responce->rows[$i]['nama']		= $result[$i]['nama'] ;  
			$responce->rows[$i]['jumlah']		= $result[$i]['jumlah'] ;  
			$responce->rows[$i]['kecamatan']		= $result[$i]['kecamatan'] ;  
			$responce->rows[$i]['id_kecamatan']		= $result[$i]['id_kecamatan'] ;  

        }
        
  		  } 
  echo json_encode($responce); 
}
 

 

function get_data_anggota(){
    	$page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"sebagai"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"asc"; // get the direction if(!$sidx) $sidx =1;  
       // $id_kecamatan  = isset($_REQUEST['search_id_kecamatan'])?$_REQUEST['search_id_kecamatan']:"x";
       // $id_desa  = isset($_REQUEST['search_id_desa'])?$_REQUEST['search_id_desa']:"x";
       // $nama  = isset($_REQUEST['search_nama'])?$_REQUEST['search_nama']:"x";
        $no_kk = isset($_REQUEST['no_kk'])?$_REQUEST['no_kk']:"xxx"; // get the direction if(!$sidx) $sidx =1;  
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null ,
				"no_kk" => $no_kk
				/* ,
				"nama" => $nama    ,
				"id_desa"	=> $id_desa,
				"id_kecamatan" => $id_kecamatan */
		);     
           
        $row = $this->dm->get_data_anggota($req_param)->result_array();
		
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
          
        
        $result = $this->dm->get_data_anggota($req_param)->result_array();
        // sekarang format data dari dB sehingga sesuai yang diinginkan oleh jqGrid dalam hal ini aku pakai JSON format
        //$responce->page = $page; 
        $responce = new stdClass();
        $responce->total = $count; 
        //$responce->records = $count;
                $x=0;
        if($count == 0) {
        		 $responce->rows[0]['nik']	= "";    
        }   else {      
        $arr_sebagai = $this->cm->arr_hubungan;
        for($i=0; $i<count($result); $i++){
        	$x++;
            //$responce->rows[$i]['id']=$result[$i]['id_provinsi'];
            // data berikut harus sesuai dengan kolom-kolom yang ingin ditampilkan di view (js)
            $responce->rows[$i]['id_kk']	= $result[$i]['id_kk'] ;    
			$responce->rows[$i]['id_penduduk']		= $result[$i]['id_penduduk'];
			$responce->rows[$i]['nik']		 = $result[$i]['nik'] ;
			$responce->rows[$i]['umur']		 = $result[$i]['umur']." Tahun" ;
			$responce->rows[$i]['nama']	= $result[$i]['nama'] ; 
			$responce->rows[$i]['ttl']		= $result[$i]['tmp_lahir'] .", ".$result[$i]['tgl_lahir'];       
			$responce->rows[$i]['jk']		= $result[$i]['jk'] ;    
			$responce->rows[$i]['sebagai']	= $arr_sebagai[$result[$i]['sebagai']] ;  
			$responce->rows[$i]['anakke']		= $result[$i]['anakke'] ; 
			$responce->rows[$i]['is_kk']		= $result[$i]['is_kk'] ; 
			 

        }
       
  		  } 
  	 echo json_encode($responce); 
} 
	
 

function cetak() {
	
 	$this->db->order_by("dusun");
	$data['rec_kk'] = $this->db->get("v_kk");
	
 
	$this->load->view("statistik_penduduk_perkk_print",$data);
}


function pdf(){
   $data['controller'] = get_class($this);

    $this->db->order_by("dusun");
    $data['rec_kk'] = $this->db->get("v_kk");
    // echo $this->db->last_query(); exit;
   
    $data['header'] = "DATA PENDUDUK ".$this->desa2->bentuk_lembaga;
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


         $html = $this->load->view("pdf/statistik_penduduk_perkk_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');

         // echo $html; exit;

         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       

 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("pdf/statistik_penduduk_perkk_pdf_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
            $html = $this->load->view("pdf/statistik_penduduk_perkk_pdf_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}

}


?>