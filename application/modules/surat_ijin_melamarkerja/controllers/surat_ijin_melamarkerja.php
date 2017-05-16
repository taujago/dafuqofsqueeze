<?php 
class surat_ijin_melamarkerja extends op_controller {
	function __construct(){
		parent::__construct();
		$this->load->model("core_model","cm");
		$this->load->model("simkm","dm");
        $this->load->model("add_model","am");
		$this->load->helper("tanggal");
	}


	function index(){
		$data['controller'] = get_class($this);
		$data['header'] = "Data surat ijin orangtua melamar kerja";
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
        $tgl_awal = !empty($_REQUEST['search_tgl_awal'])?$_REQUEST['search_tgl_awal']:"x";
        $tgl_akhir =!empty($_REQUEST['search_tgl_akhir'])?$_REQUEST['search_tgl_akhir']:"x";
        
    
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null ,
                "nama"  => $nama,
                "tgl_awal" => $tgl_awal,
                "tgl_akhir" => $tgl_akhir
                 /*,
                "nama_ibu"  => $nama_ibu,
                "nama_bapak" => $nama_bapak,
                "jk"        =>$jk */
 
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
            $responce->rows[$i]['nik']           = $result[$i]['nik'] ;
            $responce->rows[$i]['no_surat']           = $result[$i]['no_surat'] ;
            $responce->rows[$i]['tanggal']      = flipdate($result[$i]['tanggal']) ;
            $responce->rows[$i]['id_penduduk']  = $result[$i]['id_penduduk'] ;
            $responce->rows[$i]['nama']         = $result[$i]['nama']; 
            $responce->rows[$i]['alamat']       = $result[$i]['alamat'];     
            $responce->rows[$i]['tmp_lahir']  = $result[$i]['tmp_lahir'] ;             
            $responce->rows[$i]['tgl_lahir']  = $result[$i]['tgl_lahir'] ;             
            $responce->rows[$i]['jk']          = $result[$i]['jk'] ; 
            $responce->rows[$i]['ayah_nama']          = $result[$i]['ayah_nama'] ; 
            $responce->rows[$i]['ayah_id_penduduk']          = $result[$i]['ayah_id_penduduk'] ; 
            $responce->rows[$i]['alamat_perusahaan']          = $result[$i]['alamat_perusahaan'] ;
            $responce->rows[$i]['melamar_sebagai']          = $result[$i]['melamar_sebagai'] ;
            $responce->rows[$i]['ayah_alamat']          = $result[$i]['ayah_alamat'] ;
             $responce->rows[$i]['lengkap']          = $result[$i]['lengkap'] ;
            $responce->rows[$i]['ttd']          = $result[$i]['ttd'] ; 
            $responce->rows[$i]['ttd_nama']          = $result[$i]['ttd_nama'] ; 
            $responce->rows[$i]['ttd_jabatan']          = $result[$i]['ttd_jabatan'] ; 
             $responce->rows[$i]['ttd']          = $result[$i]['ttd'] ; 
            $responce->rows[$i]['nip']          = $result[$i]['nip'] ; 
            $responce->rows[$i]['penandatangan_nama']          = $result[$i]['ttd_nama'] ; 
            $responce->rows[$i]['pangkat']          = $result[$i]['pangkat'] ; 
            $responce->rows[$i]['penandatangan_jabatan']          = $result[$i]['ttd_jabatan'] ; 
             

        } }
		//echo "<hr />";
        echo json_encode($responce); 
    }

    function save(){
        $data = $this->input->post();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nik','NIK','required');    
        $this->form_validation->set_rules('no_surat','Nomor surat','required');    
        $this->form_validation->set_rules('ayah_nik','NIK Ayah','required');    
        $this->form_validation->set_rules('alamat_perusahaan','Alamat perusahaan','required');              
        $this->form_validation->set_rules('melamar_sebagai','Posisi yang dilamar ','required');              

        $this->form_validation->set_message('required', ' %s Harus diisi '); 
        $this->form_validation->set_message('numeric', ' %s Harus diisi dengan angka ');
        $this->form_validation->set_message('alpha', ' %s Harus diisi dengan huruf ');
        
        
        $this->form_validation->set_error_delimiters("* ", '<br>');
        if($this->form_validation->run() == TRUE) {

                $data['id'] = md5(date("Ymdhis"));
                $data['tanggal'] = date("Y-m-d");

                 $desa = $this->cm->data_desa();
                if($data['ttd'] == "kepala" ) {
                    
                    if($desa->bentuk_lembaga=="Kelurahan") {
                        $data['ttd_jabatan'] = "LURAH ";
                        ///$arr_lahir['nip_kepala_desa'] = $desa->nip_kepala_desa;
                         $data['nip'] = $desa->nip_kepala_desa;
                         $data['pangkat'] = $desa->pangkat_kepala_desa;
                    }
                    else { 
                        $data['ttd_jabatan'] = "KEPALA DESA ";
                    }
                    
                    $data['ttd'] = $data['ttd'];                    
                    $data['ttd_nama'] = $desa->nama_kepala_desa;
                }
                else if($data['ttd'] == "sek" ) {
                    $data['ttd'] = $data['ttd'];
                    
                    if($desa->bentuk_lembaga=="Kelurahan") {
                        $data['ttd_jabatan'] = "SEKLUR ";
                        $data['nip'] = $desa->nip_sek_desa; 
                        $data['pangkat'] = $desa->pangkat_sek_desa;
                        
                    }
                    else { 
                         $data['ttd_jabatan'] = "Sekretaris Desa";
                    }
                    $data['ttd_nama'] = $desa->nama_sek_desa;
                    $data['nip'] = $desa->nip_sek_desa;
                    $data['pangkat'] = $desa->pangkat_sek_desa;
                }
                
                 else  {
                    $data['ttd'] = $data['ttd'];
                    $data['ttd_jabatan'] = $data['penandatangan_jabatan'];
                    $data['ttd_nama'] = $data['penandatangan_nama'];
                    $data['nip'] = $data['nip'];
                    $data['pangkat'] = $data['pangkat'];
                }
                unset($data['penandatangan_jabatan']);
                unset($data['penandatangan_nama']);
                

                
                 
                 $data['id_penduduk'] = $this->cm->get_id_penduduk($data['nik']);
                unset($data['nik']);

                  $data['ayah_id_penduduk'] = $this->cm->get_id_penduduk($data['ayah_nik']);
                unset($data['ayah_nik']);



                $res = $this->db->insert("surat_ijin_melamarkerja",$data);

                if($res) {    
				$this->cm->update_nomor_surat($data['no_surat']);
                $ret = array("success"=>true,
                            "pesan"=>"Data berhasil disimpan",
                            "operation" =>"insert");
                }
                else {
                 $ret = array("success"=>false,
                            "pesan"=>"Data berhasil disimpan" .mysql_error(),
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



    function update() {
        $data = $this->input->post();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nik','NIK','required');    
        $this->form_validation->set_rules('no_surat','Nomor surat','required');    
        $this->form_validation->set_rules('ayah_nik','NIK Ayah','required');    
        $this->form_validation->set_rules('alamat_perusahaan','Alamat perusahaan','required');              
        $this->form_validation->set_rules('melamar_sebagai','Posisi yang dilamar ','required');        
        $this->form_validation->set_message('required', ' %s Harus diisi '); 
        $this->form_validation->set_message('numeric', ' %s Harus diisi dengan angka ');
        $this->form_validation->set_message('alpha', ' %s Harus diisi dengan huruf ');
        
        
        $this->form_validation->set_error_delimiters("* ", '<br>');
        if($this->form_validation->run() == TRUE) {

               

                $desa = $this->cm->data_desa();
                if($data['ttd'] == "kepala" ) {
                    
                    if($desa->bentuk_lembaga=="Kelurahan") {
                        $data['ttd_jabatan'] = "LURAH ";
                        ///$arr_lahir['nip_kepala_desa'] = $desa->nip_kepala_desa;
                         $data['nip'] = $desa->nip_kepala_desa;
                         $data['pangkat'] = $desa->pangkat_kepala_desa;
                    }
                    else { 
                        $data['ttd_jabatan'] = "KEPALA DESA ";
                    }
                    
                    $data['ttd'] = $data['ttd'];                    
                    $data['ttd_nama'] = $desa->nama_kepala_desa;
                }
                else if($data['ttd'] == "sek" ) {
                    $data['ttd'] = $data['ttd'];
                    
                    if($desa->bentuk_lembaga=="Kelurahan") {
                        $data['ttd_jabatan'] = "SEKLUR ";
                        $data['nip'] = $desa->nip_sek_desa; 
                        $data['pangkat'] = $desa->pangkat_sek_desa;
                        
                    }
                    else { 
                         $data['ttd_jabatan'] = "Sekretaris Desa";
                    }
                    $data['ttd_nama'] = $desa->nama_sek_desa;
                    $data['nip'] = $desa->nip_sek_desa;
                    $data['pangkat'] = $desa->pangkat_sek_desa;
                }
                
                 else  {
                    $data['ttd'] = $data['ttd'];
                    $data['ttd_jabatan'] = $data['penandatangan_jabatan'];
                    $data['ttd_nama'] = $data['penandatangan_nama'];
                    $data['nip'] = $data['nip'];
                    $data['pangkat'] = $data['pangkat'];
                }
                unset($data['penandatangan_jabatan']);
                unset($data['penandatangan_nama']);
                
                
                
                 $data['id_penduduk'] = $this->cm->get_id_penduduk($data['nik']);
                unset($data['nik']);

                  $data['ayah_id_penduduk'] = $this->cm->get_id_penduduk($data['ayah_nik']);
                unset($data['ayah_nik']);


                $this->db->where("id",$data['id']);
                $res = $this->db->update("surat_ijin_melamarkerja",$data);

                if($res) {    
                $ret = array("success"=>true,
                            "pesan"=>"Data berhasil disimpan",
                            "operation" =>"insert");
                }
                else {
                 $ret = array("success"=>false,
                            "pesan"=>"Data berhasil disimpan" .mysql_error(),
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
        $this->db->delete("surat_ijin_melamarkerja");
    }
    echo json_encode(array("success"=>true,"pesan"=>"Berhasil dihapus"));
}

 
function cetak($id) {
    

    $data = $this->dm->get_detail($id);
    //echo $this->db->last_query();
    $data = $data->row_array();
    $data['controller'] = get_class($this);
    $data['header'] = "Surat ijin orangtua melamar pekerjaan";
    $data['title'] = $data['header'];
    $this->load->view($data['controller']."_print_view",$data);
 
}

function pdf($id) {
    

    $data = $this->dm->get_detail($id);
    //echo $this->db->last_query();
    $data = $data->row_array();
    $data['controller'] = get_class($this);
    $data['header'] = "Surat ijin orangtua melamar pekerjaan";
    $data['title'] = $data['header'];
    $this->load->library('Pdf');
        $pdf = new Pdf('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->SetTitle( $data['header']);
     
        $pdf->SetMargins(25, 20, 20);
        $pdf->SetHeaderMargin(10);
        $pdf->SetFooterMargin(10);
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetAutoPageBreak(true,10);
        $pdf->SetAuthor('PKPD  taujago@gmail.com');
         
            
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

         // add a page
        $pdf->AddPage('P');

 

         $html = $this->load->view("pdf/surat_ijin_melamarkerja_pdf_view",$data,true);
         $pdf->writeHTML($html, true, false, true, false, '');

 
         $pdf->Output($data['header']. $this->session->userdata("tahun") .'.pdf', 'I');
 
} 


function word($id) {
    

    $data = $this->dm->get_detail($id);
    //echo $this->db->last_query();
    $data = $data->row_array();
    $data['controller'] = get_class($this);
    $data['header'] = "Surat ijin orangtua melamar pekerjaan";
    $data['title'] = $data['header'];
    
        $html = $this->load->view("pdf/surat_ijin_melamarkerja_pdf_view",$data,true);
    $this->load->helper('download');
    force_download("surat ijin melamar kerja.doc", $html);
} 

}
?>