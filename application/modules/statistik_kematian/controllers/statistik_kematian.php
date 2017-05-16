<?php 
class statistik_kematian extends op_controller {
	function __construct(){
		parent::__construct();
		$this->load->model("core_model","cm");
		$this->load->model("skmm","dm");
        $this->load->model("add_model","am");
		$this->load->helper("tanggal");
	}


	function index(){
		$data['controller'] = get_class($this);
		$data['header'] = "Data Statistik  Penduduk Mati";
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
            $responce->rows[$i]['id']			= $result[$i]['id'] ;
            $responce->rows[$i]['id_penduduk']  = $result[$i]['id_penduduk'] ;
            $responce->rows[$i]['no_surat']     = $result[$i]['no_surat'];     
           
            $responce->rows[$i]['nama']			= $result[$i]['nama'] ;
            $responce->rows[$i]['alamat']         = $result[$i]['alamat'] ;
            $responce->rows[$i]['tanggal']		= flipdate($result[$i]['tanggal']) ;
            $responce->rows[$i]['tanggal_lahir']	= flipdate($result[$i]['tanggal_lahir']) ;
             $responce->rows[$i]['tgl_meninggal']   = flipdate($result[$i]['tgl_meninggal']) ;
            $responce->rows[$i]['tempat_lahir']    = $result[$i]['tempat_lahir'] ;    
            $responce->rows[$i]['tempat_meninggal']	= ($result[$i]['tempat_meninggal']) ;  
            $responce->rows[$i]['jam_meninggal']	= $result[$i]['jam_meninggal'] ;    
             $responce->rows[$i]['tmp_meninggal']  = $result[$i]['tmp_meninggal'] ;
              $responce->rows[$i]['dusun']  = $result[$i]['dusun'] ;
			$responce->rows[$i]['jk']			= strtoupper($result[$i]['jk']) ;  	
            
            $responce->rows[$i]['pelapor_id_penduduk']      = $result[$i]['pelapor_id_penduduk'] ; 
            $responce->rows[$i]['pelapor_nik']      = $result[$i]['pelapor_nik'] ; 
            $responce->rows[$i]['pelapor_nama']     = $result[$i]['pelapor_nama'] ; 
            $responce->rows[$i]['hubungan_pelapor']     = $result[$i]['hubungan_pelapor'] ;
            $responce->rows[$i]['ayah_id_penduduk']    = $result[$i]['ayah_id_penduduk'] ;  
            $responce->rows[$i]['ayah_id_penduduk']    = $result[$i]['ayah_id_penduduk'] ;  
			$responce->rows[$i]['bapak_nik']	= $result[$i]['bapak_nik'] ;  
			$responce->rows[$i]['bapak_nama']	= $result[$i]['bapak_nama'] ;  
            $responce->rows[$i]['ibu_id_penduduk']    = $result[$i]['ibu_id_penduduk'] ;  
			$responce->rows[$i]['ibu_nama']		= $result[$i]['ibu_nama'] ; 
			$responce->rows[$i]['ibu_nik']		= $result[$i]['ibu_nik'] ; 
            $responce->rows[$i]['saksi1_nik']     = $result[$i]['saksi1_nik'] ;
            $responce->rows[$i]['saksi1_nama']     = $result[$i]['saksi1_nama'] ;
            $responce->rows[$i]['saksi2_nik']     = $result[$i]['saksi2_nik'] ;
            
            $responce->rows[$i]['ibu_nik_temp']                 = $result[$i]['ibu_nik_temp'];
			$responce->rows[$i]['ibu_nama_temp']		        = $result[$i]['ibu_nama_temp'] ;            
            $responce->rows[$i]['ibu_tgl_lahir_temp']           = $result[$i]['ibu_tgl_lahir_temp'] ;            
            $responce->rows[$i]['ibu_id_pekerjaan_temp']        = $result[$i]['ibu_id_pekerjaan_temp'] ;
            $responce->rows[$i]['ibu_alamat_temp']              = $result[$i]['ibu_alamat_temp'] ;            
            $responce->rows[$i]['ibu_id_desa_temp']             = $result[$i]['ibu_id_desa_temp'] ;            
            $responce->rows[$i]['ibu_id_kecamatan_temp']        = $result[$i]['ibu_id_kecamatan_temp'] ;
            $responce->rows[$i]['ibu_id_kota_temp']             = $result[$i]['ibu_id_kota_temp'] ;
            $responce->rows[$i]['ibu_id_provinsi_temp']         = $result[$i]['ibu_id_provinsi_temp'] ;
            $responce->rows[$i]['sumber_data_ibu']             = $result[$i]['sumber_data_ibu'] ;
            

            $responce->rows[$i]['ayah_nik_temp']                 = $result[$i]['ayah_nik_temp']; 
            $responce->rows[$i]['ayah_nama_temp']                = $result[$i]['ayah_nama_temp'] ;            
            $responce->rows[$i]['ayah_tgl_lahir_temp']           = $result[$i]['ayah_tgl_lahir_temp'] ;            
            $responce->rows[$i]['ayah_id_pekerjaan_temp']        = $result[$i]['ayah_id_pekerjaan_temp'] ;
            $responce->rows[$i]['ayah_alamat_temp']              = $result[$i]['ayah_alamat_temp'] ;            
            $responce->rows[$i]['ayah_id_desa_temp']             = $result[$i]['ayah_id_desa_temp'] ;            
            $responce->rows[$i]['ayah_id_kecamatan_temp']        = $result[$i]['ayah_id_kecamatan_temp'] ;
            $responce->rows[$i]['ayah_id_kota_temp']             = $result[$i]['ayah_id_kota_temp'] ;
            $responce->rows[$i]['ayah_id_provinsi_temp']         = $result[$i]['ayah_id_provinsi_temp'] ;
            $responce->rows[$i]['sumber_data_ayah']             = $result[$i]['sumber_data_ayah'] ;


            /*$responce->rows[$i]['pelapor_id_penduduk']     = $result[$i]['pelapor_id_penduduk'] ;
            
            $arr_hubungan = $this->cm->arr_hubungan;
                        $responce->rows[$i]['hubungan_pelapor2']        = $arr_hubungan[$result[$i]['hubungan_pelapor']] ; 
                    */


        } }
		//echo "<hr />";
        echo json_encode($responce); 
    }

function cetak() {
     
  $data['record'] = $this->db->get("v_kematian");
    $data['controller'] = get_class($this);
    $data['header'] = "Detail Surat kematian";
    $data['title'] = $data['header'];
    $data['l'] =  $this->dm->get_stat('l');
    $data['p'] = $this->dm->get_stat('p');
    $this->load->view($data['controller']."_cetak",$data);
   
}

function cetak_l() {
    $this->db->select('*')->from('v_kematian p')
    // ->where("hidup_mati","1")->where("status_kependudukan not in ('1','3')",null,false)
    // ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where('jk','l')
    ;

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
    //$this->cm->data_desa();
    $this->load->view("statistik_kematian_cetak_l",$data);
 }

 function cetak_p() {
    $this->db->select('*')->from('v_kematian p')
    // ->where("hidup_mati","1")->where("status_kependudukan not in ('1','3')",null,false)
    // ->where("p.id_desa",$this->session->userdata("operator_id_desa"))
    ->where('jk','p')
    ;

    $data['record'] = $res = $this->db->get();
    $id_desa =   $this->session->userdata("operator_id_desa");
    $data['l'] =  $this->dm->get_stat('l'); //$this->dm->get_data(array("jk"=>"l","id_desa"=>$id_desa))->num_rows();
    $data['p'] =  $this->dm->get_stat('p'); //$this->dm->get_data(array("jk"=>"p","id_desa"=>$id_desa))->num_rows();
    
    //$this->cm->data_desa();
    $this->load->view("statistik_kematian_cetak_p",$data);
 }


function pdf(){
   $data['record'] = $this->db->get("v_kematian");
    $data['controller'] = get_class($this);
    $data['header'] = "Detail Surat kematian";
    $data['title'] = $data['header'];
    $data['l'] =  $this->dm->get_stat('l');
    $data['p'] = $this->dm->get_stat('p');
   
    $data['header'] = "STATISTIK PENDUDUK MATI  ";
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


         $html = $this->load->view("pdf/statistik_kematian_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("pdf/statistik_kematian_pdf"."_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
           $html = $this->load->view("pdf/statistik_kematian_pdf"."_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}
function excel(){

        $this->db->select('*')->from('v_kematian p');

        $res = $this->db->get();

       // echo $this->db->last_query(); exit;

        $this->load->library('Excel');
        $this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('Data Penduduk mati ');

         $arr_kolom = array('a','b','c','d','e','f','g','h','i','j');

        $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
        $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(18);  // nomor kk  
        $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(40);  // nik 
        $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(31); // nama 
        $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(15);  // umur 
        $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(18); // tmp lahir 
        $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(18);  // tgl lahir 
        $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(30);  // alamat 
        $this->excel->getActiveSheet()->getColumnDimension('I')->setWidth(10);  // rt 
        $this->excel->getActiveSheet()->getColumnDimension('J')->setWidth(40); // rw
        // $this->excel->getActiveSheet()->getColumnDimension('K')->setWidth(18);  // hubungan dalam kelurga 
        // $this->excel->getActiveSheet()->getColumnDimension('L')->setWidth(18);  // Pendidikan
        
         
        $data_desa = $this->cm->data_desa();
        $baris = 1;

        $this->excel->getActiveSheet()->mergeCells('a'.$baris.':l'.$baris);
         $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "DATA PENDUDUK MATI");
       
       $this->format_center($arr_kolom,$baris);

        // $this->format_baris(
        //     array("arr_kolom"=>$arr_kolom, 
        //          "baris"=>$baris,
        //          "bold"=>true,
        //          "align"=>true) );

        $baris++; 

        $this->excel->getActiveSheet()->mergeCells('a'.$baris.':l'.$baris);
         $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "PEMERINTAH DESA  " .$data_desa->desa );
        $this->format_center($arr_kolom,$baris);
        $baris++; 


        $this->excel->getActiveSheet()->mergeCells('a'.$baris.':l'.$baris);
         $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "KECAMATAN" .$data_desa->kecamatan );
        $this->format_center($arr_kolom,$baris);
        $baris++; 

        $this->excel->getActiveSheet()->mergeCells('a'.$baris.':l'.$baris);
         $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, $data_desa->kota );
        $this->format_center($arr_kolom,$baris);



        $baris = 6;

        $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, "NO.")               
                ->setCellValue('B' . $baris, "NIK")
                ->setCellValue('C' . $baris, "NAMA")
                ->setCellValue('D' . $baris, "PEKERJAAN")      
                ->setCellValue('E' . $baris, "TEMPAT LAHIR")
                ->setCellValue('F' . $baris, "TANGGAL LAHIR")
                ->setCellValue('G' . $baris, "ALAMAT")               
                ->setCellValue('h' . $baris, "TANGGAL KEMATIAN")
                ->setCellValue('i' . $baris, "JAM")
                ->setCellValue('j' . $baris, "PENYEBAB KEMATIAN") ;     



               
                $this->format_header($arr_kolom,$baris);

                $baris++;
                $n=0;
                foreach($res->result() as $row) : 
                $n++;
                $this->excel->getActiveSheet()
                ->setCellValue('A' . $baris, $n)

                ->setCellValueExplicit('B' . $baris, "$row->nik")
                // ->setCellValue('B' . $format_baris, $row->nik)
                ->setCellValue('C' . $baris, $row->nama)
                ->setCellValue('D' . $baris, $row->pekerjaan)
                ->setCellValue('E' . $baris, $row->tempat_lahir)    
                ->setCellValue('f' . $baris, $row->tanggal_lahir)  
                ->setCellValue('g' . $baris, $row->alamat)                
                ->setCellValue('h' . $baris, $row->tgl_meninggal)
                ->setCellValue('i' . $baris, $row->jam_meninggal)
                ->setCellValue('j' . $baris, $row->penyebab_kematian) ;  

                $this->format_baris($arr_kolom,$baris);
                $baris++;
                endforeach;





        $filename = "LAPORAN DATA PENDUDUK MATI.xls";

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