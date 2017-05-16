<?php 
class penduduk_import extends op_controller {
var $data_desa; 
var $alamat;
var $no_kk;
var $arr_pendidikan = array(); 
	function __construct(){
		session_start();
		parent::__construct();
		$this->load->helper(array("tanggal","file"));
		$this->load->model("core_model","cm");
		$this->data_desa = $this->cm->data_desa();
	}


 
	function index(){

		$data['title'] = "IMPORT DATA PENDUDUK DARI DUKCAPIL";
		 
	   	$content = $this->load->view("penduduk_import_view",$data,true);
		$this->set_title($data['title']);
		$this->set_content($content);
		$this->render();
	}


	function index_pkpd(){

		$data['title'] = "IMPORT DATA PENDUDUK ";
		 
	   	$content = $this->load->view("penduduk_import_pkpd_view",$data,true);
		$this->set_title($data['title']);
		$this->set_content($content);
		$this->render();
	}
 

function get_id_agama($agama){
	$agama = str_replace(" ", "", $agama);
$arr_agama = array("ISLAM" => 1,
"HINDU" => 4,
"KRISTEN" =>  2,
"KONGHUCU" => 7,
"BUDHA" => 5,
"KATHOLIK" => 3,
"ALIRANKEPERCAYAAN" => 9,
"","0");

if(!isset($arr_agama[$agama])) {
	return "";
}
else 
return $arr_agama[$agama];

}

function get_id_pendidikan($pendidikan) {

$pendidikan = trim(str_replace(" ", '', $pendidikan) );

	// 
$arr = array(
"SLTA/SEDERAJAT"	=> 37, 
"TIDAK/BLMSEKOLAH"	=> 50, 
"DIPLOMAI/II"	=> 89, 
"DIPLOMAIV/STRATAI"	=> 95, 
"TAMATSD/SEDERAJAT"	=> 53,   
"STRATA-II"	=> 97, 
"SLTP/SEDERAJAT"	=> 56, 
"BELUMTAMATSD/SEDERAJAT"	=> 52, 
"AKADEMI/DIPLOMAIII/SARJANAMUDA"	=> 91, 
"STRATAIII"	=> 98 ) ;





$arr2 = array_flip($arr);

$this->arr_pendidikan = $arr2; 

if(!in_array($pendidikan, $arr2))
return '';

else {
return $arr[$pendidikan]; 
}

}





function get_id_pekerjaan($pekerjaan) {
	$arr_pekerjaan = $this->cm->arr_pekerjaan();

	$pekerjaan = str_replace(" ",'',trim($pekerjaan)) ; 


	$new_arr=array();
	foreach($arr_pekerjaan as $index => $val) : 
		$new_arr[$index] = str_replace(" ", '', $val); 
	endforeach; 

	//$arr_pekerjaan = $this->cm->arr_pekerjaan();
	$arr_pekerjaan = array_flip($new_arr);

	$ret = isset($arr_pekerjaan[$pekerjaan])?$arr_pekerjaan[$pekerjaan]:"";

	return $ret; 


}


function import(){




	//$pekerjaan = str_replace(" ",'',trim($pekerjaan)) ; 

	// show_array($arr_pekerjaan); 

	// show_array($pekerjaan);  
	// exit;



			$this->db->get("agama");


			$arr_status_kawin = $this->cm->arr_status_kawin;
			$arr_status_kawin = array_flip($arr_status_kawin); 

		
			$arr_pekerjaan[''] = "";

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
			// $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
			// show_array($cell_collection); exit;
			$data = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true); 

			// show_array($data);
			// exit;

			// echo "jumalh ". count($data); 
			$index=0;
			$res=array();

			$header = 0; 
			$mark = 0 ;
			


			for($i=8; $i<=count($data); $i++) {

				// $tmp_kk = explode(":", trim($data[$i]['K'])) ; 
				// $no_kk = $tmp_kk[0];

				$xtr = str_replace(" ", "", trim($data[$i]['B'])); 
				$str =  strtoupper(substr($xtr,0,5))  ;

				if($str == "NO.KK") {
					$_tmp = explode(":", $xtr); 
					$no_kk = $_tmp[1];
					// echo "nomor KK $no_kk <br />";

					// get alamat 
					$_tmp1 = explode(":", $data[$i]['E']);
					$alamat = str_replace("RT/RW", "", $_tmp1[1]);  //$_tmp1[1]; 

					// echo "alamat $alamat <br />";
					$header = 1; 
					$this->alamat = $alamat;
					$this->no_kk = $no_kk;
					$mark = $i;
				}


				else if($i==$mark){
					$header = 1; 
				}
				else {
					$header = "0";
				}

				// echo "string $str <br>";


/*
				if( substr($str, start)  ) {
					$no_kk = $data[$i]['L'];
					$nama_kk = $data[$i+1]['L'];
					$alamat = $data[$i+2]['L'];

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
 */ 
				if($header==0 and $data[$i]['E'] <> '' ){

					// echo "alamat $header $alamat <br />";

					// $tmp_ = explode(",", $alamat); 
					// //show_array($tmp_); 
					// $tmp_rt_ = explode(':', $tmp_[1]);
					// $tmp_rw_ = explode(':', $tmp_[2]);

 

$penduduk[$index] = array( 
"nik"					=>$data[$i]['E'],
"nama" 					=>$data[$i]['C'],
"alamat" 				=> $this->alamat,
"no_kk" 				=> $this->no_kk,
"rt"					=> "", //isset($tmp_rt_[1])?$tmp_rt_[1]:"",
"rw"					=> "", //isset($tmp_rw_[1])?$tmp_rw_[1]:"",
"id_penduduk"			=> $data[$i]['E'],
"jk"					=> substr(strtoupper( trim($data[$i]['H'] ) ),0,1), 
"tmp_lahir"				=> $data[$i]['F'],
"tgl_lahir"				=> flipdate(str_replace(" ", '', $data[$i]['G']))  ,
// "status_kawin"			=> $arr_status_kawin[strtoupper($data[$i]['J'])],
"id_pekerjaan"			=> $this->get_id_pekerjaan($data[$i]['N']), 
"id_desa"				=> $this->session->userdata("operator_id_desa"), 
"id_agama"				=>  $this->get_id_agama(strtoupper($data[$i]['K']) ) , //." ". strtoupper($data[$i]['I']),  
"dusun"					=> "",	 
"warga_negara"			=> "WNI",
"hidup_mati"			=> "1",
"kebangsaan"			=> "INDONESIA",
"regdate"				=> date("Y-m-d"),
"id_pendidikan"			=> $this->get_id_pendidikan($data[$i]['M']), 
"status_kependudukan"	=> 0,
// "nama_ayah"				=> $data[$i]['O'],
"nama_ibu"				=> $data[$i]['O'],
// "nik_ayah"				=> $data['U'],
// "nik_ibu"				=> $data['T'], 
"kepala_keluarga"		=> (trim(strtoupper($data[$i]['J']) ) == "KEPALA KELUARGA")?1:0 , 
"hubungan_dlm_keluarga" => trim(strtoupper($data[$i]['J']) ) );



					$index++;
				} 

			}

			
			
			// show_array($penduduk);
			// exit;

			$xdata = $penduduk;
			$_SESSION['xdata'] = $xdata;
			$arrdata['title'] = "IMPORT DATA PENDUDUK";
	 		$arrdata['data'] = $xdata;
	 		$arrdata['controller'] = "penduduk_import";
	 		$arrdata['arr_pendidikan'] = $this->arr_pendidikan; 
	 		$arrdata['arr_pekerjaan'] = $this->cm->arr_pekerjaan(); 
	 		 
		   	$content = $this->load->view("pi_review_view",$arrdata,true);
			$this->set_title($arrdata['title']);
			$this->set_content($content);
			$this->render();



		}


}



function import2(){

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

		// show_array($arr_data);

		// exit;

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
		 
		// if( $data_desa->id_kota."_".$data['AA']."_".$data['Y'] == $data_desa->id_desa ) { 

			$penduduk[] = array( 
		"nik"					=>$data['B'],
		"nama" 					=>$data['C'],
		"alamat" 				=> $data['AC'],
		"no_kk" 				=>$data['A'],
		"rt"					=>  $data['W'],
		"rw"					=> $data['X'],
		"id_penduduk"			=> $data['B'],
		"jk"					=> $data['D'], 
		"tmp_lahir"				=> $data['F'],
		"tgl_lahir"				=> flipdate(str_replace(" ","", $data['E'])),
		"status_kawin"			=> $data['K'],
		"id_pekerjaan"			=> $arr_pekerjaan[$data['R']],
		"id_desa"				=> $this->session->userdata("operator_id_desa"),
		"id_agama"				=> $data['I'],
		"dusun"					=> $data['AD'],		 
		"warga_negara"			=> "WNI",
		"hidup_mati"			=> "1",
		"kebangsaan"			=> "INDONESIA",
		"regdate"				=> date("Y-m-d"),
		"id_pendidikan"			=>  $this->get_id_pendidikan($data['P']),		 
		"status_kependudukan"	=> 0,
		"nama_ayah"				=> $data['V'],
		"nama_ibu"				=> $data['U'], 
		"nik_ayah"				=> $data['T'],
		"nik_ibu"				=> $data['S'], 
		"kepala_keluarga"		=> ($data['M']=="1")?1:0 , 
		"hubungan_dlm_keluarga" => $data['N']
					);

			// }
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
		

		


		// $xdata = $penduduk;
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
		// echo "array xdata <br />"; 
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


					$this->db->where("id_penduduk",$xdata[$index]['id_penduduk']);
					$this->db->delete("penduduk");


					$res = $this->db->insert("penduduk",$xdata[$index]);
					// show_array($xdata[$index]);
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