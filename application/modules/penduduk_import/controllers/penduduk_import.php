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
	$arr_agama = array(
"Islam" => 1,
"Kristen" =>  2);

return $arr_agama[$agama];

}




// function get_id_status_kawin($status_kawin){
// 	$status_kawin = str_replace(" ", "", $status_kawin);
// $arr_status_kawin = array("blm kwn" => 1,
// "kwn" => 2,
// "cerai mti" =>  4,
// "cerai hdp" => 3);

// return $arr_status_kawin[$status_kawin];

// }


function get_id_pendidikan($pendidikan) {

$pendidikan = str_replace(" ", '', $pendidikan);
	// 
$arr = array(
"SLTA"	=> 37, 
"tdk_blm_sekolah"	=> 50, 
"DIPLOMAI/II"	=> 89, 
"DiplomaIV_SI"	=> 95, 
"tmt_SD"	=> 53, 
"STRATAII"	=> 97, 
"SLTP"	=> 56, 
"blm_tmt_SD"	=> 52, 
"DiplomaIII_Smud"	=> 91, 
"STRATAIII"	=> 98 ) ;

return $arr[$pendidikan];

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

		//show_array($data);

		// $arr_status_kawin = $this->cm->arr_status_kawin;
		// $arr_status_kawin = array_flip($arr_status_kawin); 
		$arr_status_kawin = $this->manual_mapping('status_perkawinan');
		$arr_pekerjaan = $this->cm->arr_pekerjaan();
		$arr_pekerjaan = array_flip($arr_pekerjaan);
		$arr_pendidikan = $this->manual_mapping('pendidikan_akhir');
		$arr_hubungan_keluarga = $this->manual_mapping('stat_hb_kel');

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
		 
		// if( $data_desa->id_kota."_".$data['AB']."_".$data['Z'] == $data_desa->id_desa ) { 

			$penduduk[] = array( 
		// "nik"					=>  str_replace("_", "", $data['H']) ,
		"nik"					=>  $data['A'] ,
		"nama" 					=>  $data['B'],
		"jk"					=> $data['C'] ,
		"tmp_lahir"				=> $data['D'],
		"tgl_lahir"				=> flipdate($this->fix_date($data['E']) ),
		"golongan_darah"		=> $data['F'],
		// "id_agama"				=> $this->get_id_agama($data['P']),
		"id_agama"				=>  $data['G'],
		"status_kawin"			=> $arr_status_kawin[strtoupper($data['H'])],
		"kepala_keluarga"		=> ($data['J']=="1")?1:0 ,
		"hubungan_dlm_keluarga"	=> $data['I'],
		// "id_pendidikan"			=> $arr_pendidikan[strtoupper($data['K'])],
		"id_pendidikan"			=> $this->get_pendidikan($data['K']),
		"id_pekerjaan"			=> $this->get_pekerjaan($data['L']),
		"nama_ibu"				=> $data['M'], 
		"nama_ayah"				=> $data['N'],
		// "no_kk" 				=> str_replace("_", "", $data['E']),
		"no_kk" 				=> $data['O'],

		"alamat" 				=> htmlentities($data['Q']),
		"foto"					=> $data['W'] ,
		
		// "alamat" 				=> substr($data['Q'],"0","5"),

		
		// "rt"					=>  $data['V'],
		"rt"					=>  substr($data['V'],"1","4") ,
		"rw"					=>  substr($data['V'],"5","6") ,
		// "rw"					=> $data['A'],
		// "id_penduduk"			=> str_replace("_", "", $data['H']) ,
		"id_penduduk"			=>  $data['A'] ,

		
		
		
		// "status_kawin"			=> $arr_status_kawin[strtoupper($data['K'])],
		
		
		"id_desa"				=> $this->session->userdata("operator_id_desa"),
		// "id_agama"				=> $this->get_id_agama($data['P']),
		// "dusun"					=> $data['C'],		 
		"warga_negara"			=> "WNI",
		"hidup_mati"			=> "1",
		"kebangsaan"			=> "INDONESIA",
		"regdate"				=> date("Y-m-d"),	 
		
		"status_kependudukan"	=> 0,
		
		
		// "nik_ayah"				=> $data['U'],
		// "nik_ibu"				=> $data['T'], 
// 		"kepala_keluarga"		=> (strtoupper($data['K']) == strtoupper("Kepala Keluarga
// "))?1:0 , 
		
		// "hubungan_dlm_keluarga" => $arr_hubungan_keluarga[strtoupper($data['K'])]
					);

			
			endforeach;
			// show_array($penduduk); exit;

			$xdata = $penduduk;
				$_SESSION['xdata'] = $xdata;
				$arrdata['title'] = "IMPORT DATA PENDUDUK";
		 		$arrdata['data'] = $xdata;
				$arrdata['arr_pendidikan'] = $arr_pendidikan;
				$arrdata['arr_pekerjaan'] = $arr_pekerjaan;
		 		$arrdata['controller'] = "penduduk_import";
			   	$content = $this->load->view("pi_review_view",$arrdata,true);
		}

			$this->set_title($arrdata['title']);
			$this->set_content($content);
			$this->render();
		// show_array($penduduk);

}
		

		


		//$xdata = $penduduk;
		// $_SESSION['xdata'] = $xdata;
		// $arrdata['title'] = "IMPORT DATA PENDUDUK";
 	// 	$arrdata['data'] = $xdata;
 	// 	$arrdata['controller'] = "penduduk_import";
	 //   	$content = $this->load->view("pi_review_view",$arrdata,true);

	public function manual_mapping($selector = ''){
		$return = '';
		switch($selector){
			
			case "stat_hb_kel":
				$return = array(strtoupper("Kepala Keluarga") => "KEPALA KELUARGA",strtoupper("Istri") => "ISTRI",strtoupper("Anak Kandung") => "ANAK",strtoupper("Fmly_lain") => "FAMILY LAIN",strtoupper("Mertua") => "MERTUA",strtoupper("Org_tua") => "ORANG TUA",strtoupper("Keponakan") => "KEPONAKAN",strtoupper("Lainya") => "LAINNYA",strtoupper("Menantu") => "MENANTU");
			break;
			
			case "month":
				$return = array("JAN" => "01","FEB" => "02","MAR" => "03","APR" => "04","MEI" => "05","JUN" => "06","JUL" => "07","AGUST" => "08","SEP" => "09","OKT" => "10","NOP" => "11","DES" => "12");
			break;

			case "pendidikan_akhir":
				$return = array(strtoupper("TIDAK/BELUM SEKOLAH") => "50",
								strtoupper("SLTP/SEDERAJAT") => "56",
								strtoupper("TAMAT SD/SEDERAJAT") => "53",
								strtoupper("DIPLOMA IV/STRATA I") => "95",
								strtoupper("STRATA II") => "97",
								strtoupper("TIDAK TAMAT SD/SEDERAJAT") => "904",
								strtoupper("SLTA/SEDERAJAT") => "37",
								strtoupper("DIPLOMA I/II") => "89",
								strtoupper("AKADEMI/DIPLOMA III/S. MUDA") => "91",
								);

							// 	strtoupper("blm/tmt/SD") => "52",
							// 	// strtoupper("blm_tmt_SD") => "52",
								
								
							// strtoupper("TAMAT D-3/SEDERAJAT") => "903",
							
							// strtoupper("TAMAT SLTP/SEDERAJAT") => "905",
							// strtoupper("SEDANG S-1/SEDERAJAT") => "906",
							// strtoupper("SEDANG SLTP/SEDERAJAT") => "907",
							// strtoupper("SEDANG TK/KELOMPOK BERMAIN") => "908",

 
							
								
							// 	strtoupper("S_III") => "98",
								
								
							// strtoupper("Tamat SLTA/sederajat") => "901",
								
							// 	// strtoupper("Tidak tamat SD/sederajat") => "50",
								
								
							// strtoupper("Sedang SD/sederajat") => "902",
							// 	strtoupper("Tidak pernah sekolah") => "23");

				


			break;
			
			case "status_perkawinan":
				$return = array(strtoupper("BELUM KAWIN") => "1",
					strtoupper("CERAI HIDUP") => "3",
					strtoupper("CERAI MATI") => "4",
					strtoupper("KAWIN") => "2");
			break;
			
			case "jenis_kelamin":
				$return = array("Laki laki" => "l","Perempuan" => "p");
			break;
			
		}
		return $return;
	}
	
	public function get_pekerjaan($pekerjaan = ''){
		$this->db->where("pekerjaan",$pekerjaan);
		$data = $this->db->get("pekerjaan")->row();
		return $data->id_pekerjaan;
	}

	public function get_pendidikan($pendidikan = ''){
		$this->db->where("pendidikan",$pendidikan);
		$data = $this->db->get("pendidikan")->row();
		return $data->id_pendidikan;
	}
	
	public function fix_date($date = ''){
		// $temp = explode("/",$date);
		// // $arr_month = $this->manual_mapping("month");
		
		// $y = $temp[0];
		// $m = $temp[1];
		// $d = $temp[2];
		
		// if(intval($m) > 12)
		// {
		// 	$tmp = $d;
		// 	$d = $m;
		// 	$m = $tmp;
		// }
		
		// if(intval($y) > 20 && intval($y) <= 90)
		// {
		// 	$y = "19".$y;
		// 	$date = "$d/$m/$y";
		// 	return $date;
		// }
		
		// $date = "$d-$m-$y";
		$time = strtotime($date);
		$date = date('d-m-Y',$time);
		$date = str_replace("/", "-", $date);
		return $date;
	}

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