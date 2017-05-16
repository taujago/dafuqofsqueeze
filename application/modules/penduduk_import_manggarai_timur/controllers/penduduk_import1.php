<?php 
class penduduk_import extends op_controller {
var $data_desa; 	
	function __construct(){
		session_start();
		parent::__construct();
		$this->load->helper(array("tanggal","file"));
		$this->load->model("core_model","cm");
		$this->data_desa = $this->cm->data_desa();
	}


 
	function index(){

		$data['title'] = "IMPORT DATA PENDUDUK";
		 
	   	$content = $this->load->view("penduduk_import_view",$data,true);
		$this->set_title($data['title']);
		$this->set_content($content);
		$this->render();
	}

function get_id_desa($nama_desa) {
	// 
$desa = $this->data_desa;

$this->db->where("desa",$nama_desa); 
$this->db->where("id_kecamatan",$desa->id_kecamatan);
$this->db->where("id_kota",$desa->id_kota);
$this->db->where("id_provinsi",$desa->id_provinsi);
$data = $this->db->get("lokasi")->row();
return $data->id_desa;

}


function get_id_agama($agama){
	$agama = str_replace(" ", "", $agama);
$arr_agama = array("ISLAM" => 1,
"HINDU" => 4,
"KRISTEN" =>  2,
"KONGHUCU" => 7,
"BUDHA" => 5,
"KATHOLIK" => 3,
"ALIRANKEPERCAYAAN" => 9);





return $arr_agama[$agama];

}

function get_id_pendidikan($pendidikan) {

$pendidikan = str_replace(" ", '', $pendidikan);
	// 
$arr = array(
"SLTA/SEDERAJAT"	=> 37, 
"TIDAK/BELUMSEKOLAH"	=> 50, 
"DIPLOMAI/II"	=> 89, 
"DIPLOMAIV/STRATAI"	=> 95, 
"TAMATSD/SEDERAJAT"	=> 53, 
"STRATAII"	=> 97, 
"SLTP/SEDERAJAT"	=> 56, 
"TIDAKTAMATSD/SEDERAJAT"	=> 52, 
"AKADEMI/DIPLOMAIII/S.MUDA"	=> 91, 
"STRATAIII"	=> 98 ) ;

return $arr[$pendidikan];

}




function import2(){


			$this->db->get("agama");


			$arr_status_kawin = $this->cm->arr_status_kawin;
			$arr_status_kawin = array_flip($arr_status_kawin); 

			$arr_pekerjaan = $this->cm->arr_pekerjaan();
			$arr_pekerjaan = array_flip($arr_pekerjaan);


			$config['upload_path'] = './temp_upload/';
	 
		if(!is_uploaded_file($_FILES['xlsfile']['tmp_name'])) {
			$ret = array("error"=>true,'pesan'=>"error");
			echo json_encode($ret);
		}

		else {
			$full_path = $config['upload_path']. date("dmYhis")."_".$_FILES['xlsfile']['name'];
			copy($_FILES['xlsfile']['tmp_name'],$full_path);
			// exit;

			// $upload_data = $this->upload->data();
			//$file =  $upload_data['full_path'];
			$this->load->library('excel');

			$objPHPExcel = PHPExcel_IOFactory::load($full_path);
 


			//get only the Cell Collection
			//$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
			$data = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true); 

			// echo "jumalh ". count($data); 
			$index=0;
			$res=array();

			$header = 0; 
			$mark = 0 ;
			
			for($i=1; $i<=count($data); $i++) {

				if(  str_replace(" ","",$data[$i]['K'])  == 'NO.KK:') {
					$no_kk = $data[$i]['L'];
					$nama_kk = $data[$i+1]['L'];
					$alamat = $data[$i+2]['L'];

					// $index++; 
				}

				else if(  str_replace(" ","",$data[$i]['B'])  == 'NO') {
					 $header=1;
				}
				else if($i==$mark){
					$header = 1; 
				}
				else {
					$header = "0";
				}

				if($header==0 and !(empty($data[$i]['E'])) ){

					$tmp_ = explode(",", $alamat); 
					//show_array($tmp_); 
					$tmp_rt_ = explode(':', $tmp_[1]);
					$tmp_rw_ = explode(':', $tmp_[2]);


					/*$res[$index] = array( 
		  "nik"						=>$data[$i]['C'],
		  "nama" 					=>$data[$i]['D'],
		  "alamat" 					=> $alamat,
		  "no_kk" 					=> $no_kk,
		  "rt"						=> isset($tmp_rt_[1])?$tmp_rt_[1]:"",
		  "rw"						=>isset($tmp_rw_[1])?$tmp_rw_[1]:"",
		  "id_penduduk"				=>$data[$i]['C'],
		  "jk"						=> $data[$i]['E'],  
		  "tmp_lahir"				=>$data[$i]['F'],
		  "tgl_lahir"				=> flipdate($data[$i]['G']),
		  "status_kawin"			=> $arr_status_kawin[$data[$i]['J']],
		  "id_pekerjaan"			=> $arr_pekerjaan[strtoupper($data[$i]['M'])],
		  "id_desa"					=> $this->session->userdata("operator_id_desa"), 
		  "id_agama"				=> 1,
		  "dusun"				=> "",


	 
		"warga_negara"			=> "WNI",
		"hidup_mati"			=> "1",
		"kebangsaan"			=> "INDONESIA",
		"regdate"				=> date("Y-m-d"),
		"status_kependudukan"	=> 0,
		"nama_ayah"				=> $data[$i]['O'],
		"nama_ibu"				=> $data[$i]['N']
										);*/

$penduduk[$index] = array( 
		"nik"					=>$data[$i]['C'],
		"nama" 					=>$data[$i]['D'],
		"alamat" 				=> $tmp_[0], //$alamat,
		"no_kk" 				=> $no_kk,
		"rt"					=> isset($tmp_rt_[1])?$tmp_rt_[1]:"",
		"rw"					=> isset($tmp_rw_[1])?$tmp_rw_[1]:"",
		"id_penduduk"			=> $data[$i]['C'],
		"jk"					=> strtoupper($data[$i]['E']), 
		"tmp_lahir"				=> $data[$i]['F'],
		"tgl_lahir"				=> flipdate($data[$i]['G']),
		"status_kawin"			=> $arr_status_kawin[strtoupper($data[$i]['J'])],
		"id_pekerjaan"			=> $arr_pekerjaan[strtoupper($data[$i]['M'])],
		"id_desa"				=> $this->session->userdata("operator_id_desa"), 
		"id_agama"				=> $this->get_id_agama(strtoupper($data[$i]['I']) ) , //." ". strtoupper($data[$i]['I']),  
		"dusun"					=> "",	 
		"warga_negara"			=> "WNI",
		"hidup_mati"			=> "1",
		"kebangsaan"			=> "INDONESIA",
		"regdate"				=> date("Y-m-d"),
		"id_pendidikan"			=> strtoupper($data[$i]['L']), 
		"status_kependudukan"	=> 0,
		"nama_ayah"				=> $data[$i]['O'],
		"nama_ibu"				=> $data[$i]['N'],
		// "nik_ayah"				=> $data['U'],
		// "nik_ibu"				=> $data['T'], 
		"kepala_keluarga"		=> ( trim($data[$i]['D']) ==$nama_kk)?1:0 , 
		"hubungan_dlm_keluarga" => strtoupper($data[$i]['K']) );



					$index++;
				}

			}
			// show_array($penduduk); 
			// show_array($data);

			$xdata = $penduduk;
			$_SESSION['xdata'] = $xdata;
			$arrdata['title'] = "IMPORT DATA PENDUDUK";
	 		$arrdata['data'] = $xdata;
	 		$arrdata['controller'] = "penduduk_import";
		   	$content = $this->load->view("pi_review_view",$arrdata,true);
			$this->set_title($arrdata['title']);
			$this->set_content($content);
			$this->render();



		}


}



function import(){

// show_array($this->data_desa); exit;

	$config['upload_path'] = './temp_upload/';
	if(!is_uploaded_file($_FILES['xlsfile']['tmp_name'])) {
			$ret = array("error"=>true,'pesan'=>"error");
			echo json_encode($ret);
		}
	else {
		$full_path = $config['upload_path']. date("dmYhis")."_".$_FILES['xlsfile']['name'];
		copy($_FILES['xlsfile']['tmp_name'],$full_path);
		
		$this->load->library('excel');

		$objPHPExcel = PHPExcel_IOFactory::load($full_path);
		$arr_data = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);	

		////show_array($data);

		$arr_status_kawin = $this->cm->arr_status_kawin;
		$arr_status_kawin = array_flip($arr_status_kawin); 

		$arr_pekerjaan = $this->cm->arr_pekerjaan();
		$arr_pekerjaan = array_flip($arr_pekerjaan);
		$i=2;


		$data_desa = $this->data_desa;

		$penduduk = array();

		foreach($arr_data   as  $index =>  $data) : 
			//echo "index $index <br />" ;
			//show_array($data);
		// echo $i.'<br />';
		// echo $data[$i]['A'] . '<br />'; 
		// $i++;
		if($index == 1)  continue;
		 
		if( $data_desa->id_kota."_".$data['AB']."_".$data['Z'] == $data_desa->id_desa ) { 

			$penduduk[] = array( 
		"nik"					=>$data['B'],
		"nama" 					=>$data['C'],
		"alamat" 				=> $data['AD'],
		"no_kk" 				=>$data['A'],
		"rt"					=>  $data['X'],
		"rw"					=> $data['Y'],
		"id_penduduk"			=> $data['B'],
		"jk"					=> ($data['E'] == "LAKI-LAKI")?"L":"P",
		"tmp_lahir"				=> $data['G'],
		"tgl_lahir"				=> flipdate(str_replace(" ","", $data['F'])),
		"status_kawin"			=> $data['L'],
		"id_pekerjaan"			=> $data['R'],
		"id_desa"				=> $data_desa->id_kota."_".$data['AB']."_".$data['Z'],  
		"id_agama"				=> $data['J'],
		"dusun"					=> $data['AF'],		 
		"warga_negara"			=> "WNI",
		"hidup_mati"			=> "1",
		"kebangsaan"			=> "INDONESIA",
		"regdate"				=> date("Y-m-d"),
		"id_pendidikan"			=>  $data['P'],		 
		"status_kependudukan"	=> 0,
		"nama_ayah"				=> $data['W'],
		"nama_ibu"				=> $data['V'], 
		"nik_ayah"				=> $data['U'],
		"nik_ibu"				=> $data['T'], 
		"kepala_keluarga"		=> ($data['N']=="1")?1:0 , 
		"hubungan_dlm_keluarga" => $data['O']
					);

			}
			endforeach;
			// show_array($penduduk); exit;

				$xdata = $penduduk;
				$_SESSION['xdata'] = $xdata;
				$arrdata['title'] = "IMPORT DATA PENDUDUK";
		 		$arrdata['data'] = $xdata;
		 		$arrdata['controller'] = "penduduk_import";
			   	$content = $this->load->view("pi_review_view",$arrdata,true);
		}

			$this->set_title($arrdata['title']);
			$this->set_content($content);
			$this->render();
		//show_array($penduduk);

}
		

		


		//$xdata = $penduduk;
		// $_SESSION['xdata'] = $xdata;
		// $arrdata['title'] = "IMPORT DATA PENDUDUK";
 	// 	$arrdata['data'] = $xdata;
 	// 	$arrdata['controller'] = "penduduk_import";
	 //   	$content = $this->load->view("pi_review_view",$arrdata,true);


	 




	function save(){
		// session_start();
		// show_array($_POST);
		$post = $this->input->post();
		$xdata = $_SESSION['xdata'];  //$this->session->userdata("xdata");
		// echo "array xdata <br />"; exit;
		// show_array($xdata); exit;
		// echo "end or usedata";
		//show_array($post);
		$true = 0;
		$false = 0; 

		$arr_berhasil = array();
		$arr_gagal = array();

		foreach($post['data'] as $index) : 
			
			// echo "index $index <br />";
			// show_array($xdata[$index]);
			if($xdata[$index]['id_desa'] == $this->data_desa->id_desa ) : 
					$res = $this->db->insert("penduduk",$xdata[$index]);
					// echo $this->db->last_query()."<br />"; 

					if($res) { 
						$true++;
						$arr_berhasil[] = $xdata[$index]['nik']. " ". $xdata[$index]['nama'];
					}
					else {
					//	echo "error ".$xdata[$index]['nik']. " ". $xdata[$index]['nama']. mysql_error()."<br />";
						$false++;
						$arr_gagal[] = $xdata[$index]['nik']. " ". $xdata[$index]['nama'];
					}
			endif;
		endforeach;




		$arrdata['title'] = "HASIL IMPORT DATA PENDUDUK";
		 		$arrdata['berhasil'] = $true;
		 		$arrdata['gagal'] = $false;
		 		$arrdata['arr_berhasil'] = $arr_berhasil;
		 		$arrdata['arr_gagal'] = $arr_gagal;
		 		$arrdata['controller'] = "penduduk_import";
			   	$content = $this->load->view("pi_hasil_view",$arrdata,true);
				$this->set_title($arrdata['title']);
				$this->set_content($content);
				$this->render();
	}
	 

}
?>