<?php 
class statistik_penduduk_umur extends  op_controller {
	var $error;
	function __construct() {
		parent::__construct();
 
		$this->load->model("stat_pu","dm");
		$this->load->model("core_model","cm");
		$this->desa2 = $this->cm->data_desa();  
		 
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
    $data['title'] = "Statistik Penduduk Menurut Umur";	
    $data['header'] = $data['title'];
	$data['controller'] = "statistik_penduduk_umur";
   	 

   	$content = $this->load->view("statistik_penduduk_umur_view",$data,true);
	$this->set_title($data['title']);
	$this->set_content($content);
	$this->render();
    }
    
function cetak() {
	
 	$data['umur'] = $this->dm->stat_penduduk_umur()->row();
	
 
	$this->load->view("statistik_penduduk_umur_print",$data);
}

function cetak_pertahun() {
    
    $data['umur'] = $this->dm->stat_penduduk_umur_pertahun()->row();
    
 
    $this->load->view("statistik_penduduk_umur_pertahun_print",$data);
}




function diag() {
    
    $data['umur'] = $this->dm->stat_penduduk_umur()->row();
    
 
    $this->load->view("diag",$data);
}



function pdf(){
   $data['controller'] = get_class($this);

  $data['umur'] = $this->dm->stat_penduduk_umur()->row();
   
    $data['header'] = "DATA PENDUDUK MENURUT UMUR  ".$this->desa2->bentuk_lembaga;
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


         $html = $this->load->view("pdf/statistik_penduduk_umur_pdf",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');



         $halaman  = $pdf->getPage();
         $pdf->startTransaction();
         $y = $pdf->getY();
      
         $html = $this->load->view("pdf/pdf_ttd",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');
       
 
         if($halaman <> $pdf->getPage() ) {
            $pdf->rollbackTransaction(true);

            $pdf->AddPage();
            $html = $this->load->view("pdf/statistik_penduduk_umur_pdf_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }

         else if( $y < 20 ) {
            $pdf->rollbackTransaction(true);

            //$pdf->AddPage();
            $html = $this->load->view("pdf/statistik_penduduk_umur_pdf_table_header",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

            $html = $this->load->view("pdf/pdf_ttd",$data,true);
            $pdf->writeHTML($html, true, false, true, false, '');

         }  

         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');

}

}


?>
