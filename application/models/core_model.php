<?php
class core_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}
var $desa;
var $arr_jk = array("L"=>"Laki-Laki","P" =>"Perempuan");

var $arr_kaya_miskin = array("1" =>"Bukan Penduduk Miskin","2" =>"Penduduk Miskin");





var $arr_umur = array("0-5"=>"0 -5 Tahun",
					"6-10" =>"6 - 10 Tahun");


 var $arr_warga_negara = array("WNI"=>"WNI","WNA"=>"WNA");

// var $arr_status_kawin = array(1=>"blm kwn","2"=>"kwn","3"=>"cerai hdp","4"=>"cerai mti");

var $arr_status_kawin = array(1=>"Belum Kawin","2"=>"Kawin","3"=>"Cerai Hidup","4"=>"Cerai Mati");	
 var $arr_status_kawin_import = array("kwn"=>"Kawin","blm kawin"=>"Belum Kawin","cerai hdp"=>"Cerai Hidup","cerai mti"=>"Cerai Mati");


var $arr_hubungan = array("b"=>"Bapak","i"=>"Istri","I"=>"Ibu","a"=>"Anak",
"kk"=>"Kakek","nn"=>"Nenek","kp"=>"Keponakan","sp"=>"Sepupu",
"pm"=>"Paman","bb"=>"Bibi","kk"=>"Kakek","nn"=>"Nenek","cc"=>"cicit");	

var $arr_hubungan_pelapor = array("Bapak"=>"Bapak","Istri"=>"Istri","Ibu"=>"Ibu","Anak"=>"Anak",
"Kakek"=>"Kakek","Nenek"=>"Nenek","Keponakan"=>"Keponakan","Sepupu"=>"Sepupu",
"Paman"=>"Paman","Bibi"=>"Bibi","Kakek"=>"Kakek","Nenek"=>"Nenek","cicit"=>"cicit");	


var $arr_hubungan_kependudukan = array("01"=>"Kepala Keluarga (01)","02"=>"Suami (02)","03"=>"Istri (03)","04"=>"Anak (04)","05"=>"Menantu (05)","06"=>"Cucu (06)","07"=>"Orang Tua (07)","08"=>"Mertua (08)",
"09"=>"Famili Lain (09)","10"=>"Pembantu (10)","11"=>"Lainnya (11)");	

var $alacang_pindah = array(
					 "1" => "Pekerjaan ",
					 "2" => "Pendidikan ",
					 "3" => "Keamanan ",
					 "4" => "Kesehatan ",
					 "5" => "Perumahan ",
					 "6" => "Keluarga ",
					 "7" => "Lainnya ");

function arr_alasan_pindah(){
	$alacang_pindah = $this->alacang_pindah;
	return $alacang_pindah;
}

var $bid_pekerjaan = array(
					 "1" => "Industri/Perdagangan ",
					 "2" => "Kehutanan/Perkebunan ",
					 "3" => "Pertambangan/Energi ",
					 "4" => "Pekerjaan Umum/Konstruksi ",
					 "5" => "Pertanian/Peternakan/Perikanan ",
					 "6" => "Keagamaan",
					 "7" => "Keuangan/Perbankan ",
					 "8" => "Kesehatan/Sosial ",
					 "9" => "Pariwisata",
					 "10" => "Transportasi/Komunikasi ",
					 "11" => "Pendidikan/Kebudayaan ",
					 "12" => "Jasa dan Lainnya (sebutkan) ");
function arr_bidang_pekerjaan(){
	$bid_pekerjaan = $this->bid_pekerjaan;
	return $bid_pekerjaan;
}
var $jenis_formulir = array("1"=>"Formulir Permohonan Pindah WNI Antar Desa/Kelurahan Dalam Satu Kecamatan (F-1.25) ",
							  "2"=>"Formulir Permohonan Pindah WNI Antar Kecamatan Dalam Satu Kabupaten/Kota (F-1.29) ",
							  "3"=>"Formulir Permohonan Pindah WNI Antar Kabupaten/Kota atau Antar Provinsi (F-1.34)",
							   "4"=>"Formulir Surat Pengantar Pindah Ke Luar Negeri (F-1.59)");	


var $jenis_kepindahan = array("1"=>"1. Kep. Keluarga",
							  "2"=>"2. Kep. Keluarga dan Seluruh Angg. Keluarga",
							  "3"=>"3. Kep. Keluarga dan Sbg. Angg. Keluarga",
							  "4"=>"4. Angg. Keluarga");	

var $status_kk = array("1"=>"1. Numpang KK ",
							  "2"=>"2. Membuat KK Baru",
							  "3"=>"3. Nomor KK Tetap");	




var $arr_hubungan_keluarga = array(
	"Kep_kel"=>"Bapak",
	"ii"=>"Ibu",
	"Suami"=>"Suami",
	"Istri"=>"Istri",
	// "I"=>"Ibu",
	"Anak"=>"Anak",
	"c" => "Cucu",
	"Fmly_lain" => "Famili Lain",
	"Mertua" => "Mertua" ,
	"kp" => "Keponakan",
	"kk"=>"Kakek",
	"nn"=>"Nenek",
"cc"=>"cicit"
	); 
var $arr_status_kependudukan = array(
	0=>"Tetap","Sementara","Pendatang","Pindah");

var $arr_yang_menerangkan = array(
	"Dokter"	=> "Dokter",
	"Kepolisian"	=> "Kepolisian",
	"Tenaga Kesehatan" 	=> "Tenaga Kesehatan",
	"Lainnya"
	);
var $arr_penyebab_kematian = array(
	"Sakit Biasa/Tua" 	=> "Sakit Biasa/Tua",
	"Wabah Penyakit"	=> "Wabah Penyakit",
	"Kecelakaan"		=> "Kecelakaan",
	"Kriminalitas"		=> "Kriminalitas",
	"Bunuh Diri"		=> "Bunuh Diri",
	"Bencana Alam"		=> "Bencana Alam",
	"Lainnya"			=>"Lainnya"
	);

var $arr_kelompok_umur = array(
	"1 - 5 Tahun" 	=> "1 - 5 Tahun",
	"2 -10 Tahun"	=> "2 -10 Tahun",
	"Kecelakaan"		=> "Kecelakaan",
	"Kriminalitas"		=> "Kriminalitas",
	"Bunuh Diri"		=> "Bunuh Diri",
	"Bencana Alam"		=> "Bencana Alam",
	"Lainnya"			=>"Lainnya"
	);

var $arr_ada = array(0=>"Tidak ada","Ada");

function arr_jenis_tkd(){
	$arr = array();
	$this->db->order_by("tkd_jenis");
	$res = $this->db->get("master_jenis_tkd");
	foreach($res->result() as $row) :
		$arr[$row->tkd_id_jenis]  = $row->tkd_jenis;
	endforeach;
	return $arr;
}

function arr_tkd(){
	$arr = array();
	$this->db->order_by("tkd");
	$res = $this->db->get("master_tanah_tkd");
	foreach($res->result() as $row) :
		$arr[$row->tkd_id]  = $row->tkd;
	endforeach;
	return $arr;
}


function data_desa(){
	$this->db->select('*')->from("setting_desa sd")->
	join('lokasi l','l.id_desa=sd.id_desa');
	// echo "jdfkjkdfkj"; exit;
	//$this->db->where("sd.id_desa",$this->session->userdata("operator_id_desa"));
	//$this->desa = $this->db->get()->row();
	//echo $this->session->userdata("operator_id_desa");
	$res = $this->db->get();
	// echo "jfdjdkfj " . $this->db->last_query(); exit;
	if(!$res) { 
	echo mysql_error();
	echo $this->db->last_query();
	}
	$this->desa = $res->row();
	//print_r($this->desa);
	//$this->desa->desa = "KAYUARANG";
	//$this->desa->kecamatan = "KELAPA";
	//$this->desa->kota = "BANGKA BARAT";
	return $this->desa;

}

function jk($jk){
	$arr_jk = $this->arr_jk;
	return (isset($arr_jk[$jk]))?$arr_jk[$jk]:"";
}

function status_kawin($status_kawin){
	$arr_status_kawin_view = $this->arr_status_kawin;
	return (isset($arr_status_kawin_view[$status_kawin]))?$arr_status_kawin_view[$status_kawin]:"";

	
}
//var $id = md5(date("Ymdhis"));

//var $dd = $this->data_desa();
//var $arr_ttd = array("kepala"=>"Kapala ".$dd->bentuk_lembaga,
					 //"sek" => "Sekteratis ".$dd->bentuk_lembaga);

function arr_ttd(){
	$dd = $this->data_desa();
	$arr_ttd = array("kepala"=>"Kepala Desa / Lurah ",
					 "sek" => "Sekretaris ",
					 "lain" => "Lainnya (atas nama) ");
	return $arr_ttd;
}


function arr_ttd_camat(){
	$dd = $this->data_desa();
	$arr_ttd = array("camat"=>"Camat ",
					 // "sek_camat" => "Sekretaris Camat ",
					 "lain" => "Lainnya (atas nama) ");
	return $arr_ttd;
}



function arr_ktp(){
	$dd = $this->data_desa();
	$arr_ttd = array("baru"=>"Baru ",
					 "perpanjangan" => "Perpanjangan ",
					 "penggantian" => "Penggantian ");
	return $arr_ktp;
}

var $arr_baca_tulis = array(0=>"Tidak","Ya");



var $arr_status_hidup = array(1=>"Hidup",0=>"Mati");


function kedudukan_dalam_keluarga($id_penduduk){
	$data = null;
	$arr_sebagai = $this->arr_sebagai;
	$this->db->where("aktif","1");
	$this->db->where("id_penduduk",$id_penduduk);
	$res = $this->db->get("kk_anggota"); 

	//echo $this->db->last_query();
	if($res->num_rows() == 0 ) { return "-"; exit; } 
	$data = $res->row();
	 if($data->is_kk=="1") {
		
		return "Kepala Keluarga";
	}
	else {
		//$data = $res->row();
		return isset($arr_sebagai[$data->sebagai])?$arr_sebagai[$data->sebagai]:"-";
	}
}


function arr_tiger_provinsi(){
	$arr=array();
	 
	$this->db->order_by("provinsi");
	$res = $this->db->get("tiger_provinsi");
	foreach($res->result() as $row) :
		$arr[$row->id]  = $row->provinsi;
	endforeach;
	return $arr;
}




function get_setting_kota() {
	$data = $this->db->get("setting")->row();
	return $data->id_kota;
}


function arr_kecamatan(){
	$this->db->where("id_kota",$this->get_setting_kota());
	$this->db->order_by("kecamatan");
	$res = $this->db->get("tiger_kecamatan");
	// echo $this->db->last_query(); exit;
	if(!$res) {
		echo mysql_error();
	}
	foreach($res->result() as $row) :
		$arr[$row->id]  = $row->kecamatan;
	endforeach;
	return $arr;
}



 
function add_arr_head($arr,$index,$str) {
	$res[$index] = $str;
	foreach($arr as $x => $y) : 
	$res[$x] = $y;
	endforeach;
	return $res;
}
 

function arr_dusun(){
	
	$sql = "SELECT DISTINCT dusun as  dusun FROM penduduk order by dusun";

	$res = $this->db->query($sql);
	foreach($res->result() as $row) {
		$arr[$row->dusun] = $row->dusun;
	}
	return $arr;
}

function arr_desaku(){
	
	$sql = "SELECT id_kecamatan,kecamatan FROM setting_desa JOIN lokasi ON setting_desa.id_desa=lokasi.id_desa";

	$res = $this->db->query($sql);
	foreach($res->result() as $row) {
		$arr[$row->id_kecamatan] = $row->kecamatan;
	}
	return $arr;
}





function arr_agama() {
	$ret = array();
	$this->db->order_by("id_agama");
	$res = $this->db->get("agama");
	//echo $this->db->last_query();
	foreach($res->result() as $row) : 
		$ret[$row->id_agama] = $row->agama;
	endforeach;
	return $ret;
}


function arr_judul_surat_miskin(){
	$dd = $this->data_desa();
	$arr_judul_surat_miskin = array("SURAT KETERANGAN MISKIN"=>"SURAT KETERANGAN MISKIN ",
					 "SURAT KETERANGAN TIDAK MAMPU" => "SURAT KETERANGAN TIDAK MAMPU ",
					 );
	return $arr_judul_surat_miskin;
}
function arr_pendidikan() {
	$arr=array();
	$this->db->order_by("id_pendidikan");
	$this->db->where('deleted','0');
	$res = $this->db->get('pendidikan');
	foreach($res->result() as $row) : 
	//$arr['x'] = " - Semua Kabupaten / kota  - ";
	$arr[$row->id_pendidikan] = $row->pendidikan;
	endforeach;
	return $arr;
}
function arr_pekerjaan() {
	$arr=array();
	$this->db->where("deleted","0");
	$this->db->order_by("pekerjaan");
	$res = $this->db->get('pekerjaan');
	foreach($res->result() as $row) : 
	//$arr['x'] = " - Semua Kabupaten / kota  - ";
	$arr[$row->id_pekerjaan] = strtoupper($row->pekerjaan);
	endforeach;
	return $arr;
}


function arr_pekerjaan_b() {
	$arr=array();
	$this->db->where("deleted","0");
	$this->db->where("id_pekerjaan > 1");
	$this->db->order_by("pekerjaan");
	$res = $this->db->get('pekerjaan');
	foreach($res->result() as $row) : 
	//$arr['x'] = " - Semua Kabupaten / kota  - ";
	$arr[$row->id_pekerjaan] = strtoupper($row->pekerjaan);
	endforeach;
	return $arr;
}


function get_id_penduduk($nik) {
	$this->db->where("nik",$nik);
	$x = $this->db->get("penduduk")->row();
	//echo $this->db->last_query();
	if(count($x) == 0 ) return false;
	else return $x->id_penduduk;
}

function update_kk($nik,$status=1) {
		$this->db->query("UPDATE kk SET `status`='$status'  
	WHERE no_kk = ( SELECT ka.no_kk FROM kk_anggota ka WHERE ka.nik='$nik' AND is_kk IS NOT NULL )");
}



function arr_tabel($tb_name, $index, $value, $order_by) {
	
	$arr = array();
	$this->db->order_by($order_by);
	$this->db->where("deleted","0");
	$res = $this->db->get($tb_name);
	
	foreach($res->result_array() as $row) : 
		$arr[$row["$index"]] = $row["$value"];
	endforeach;
	
	return $arr;
}

function get_grid_data($page,$limit,$sidx,$sord,$table,$del = '',$id_penduduk=''){ 
		$page--;
		$start = $page * $limit;
		$this->db->limit($limit,$start);
		if(!empty($sord))$this->db->order_by($sidx,$sord);
		if(!empty($del))$this->db->where('deleted','0');
		if(!empty($id_penduduk))$this->db->where('id_penduduk',$id_penduduk);
		$result = $this->db->get($table)->result_array($sidx);
		//echo $this->db->last_query();
		$query = "SELECT COUNT($sidx) AS total FROM $table";
		if(!empty($del))$query .= " WHERE deleted = '0'";
		$res = $this->db->query($query)->result_array();
		$result['total']=$res[0]['total'];
        return $result; 
}

function get_all_total($master,$id_master,$index_master)
{
		$this->db->where("deleted","0");
		$res = $this->db->get($master)->result_object();
		$temp = array();
		$sum = 0;
		foreach($res as $val)
		{
			$id = $val->$id_master;
			$this->db->where($id_master,$id);
			$res1 = $this->db->get("penduduk_detail")->result_object();
			$tot = count($res1);
			$sum += $tot;
			$temp[$val->$index_master] = $tot;
		}
		//echo $this->db->last_query();
		$temp["Total"] = $sum;
		return $temp;
}



function GetVolumeLabel() {
	  // Try to grab the volume name
	  if (preg_match('#Volume Serial Number is (.*)\n#i', shell_exec('dir c:'), $m)) {
	    $volname = ' ('.$m[1].')';
	  } else {
	    $volname = '';
	  }
	//return $volname;
	$serial =  str_replace("(","",str_replace(")","",$volname));
	$serial = md5($serial);
	$serial = substr(preg_replace("/[^0-9]/", '', $serial),0,4);
	return $serial;
}



function nama_bulan($bulan) {
	$arr_bulan = array(1=>"JANUARI","FEBRUARI","MARET",
						  "APRIL","MEI","JUNI","JULI",
						  'AGUSTUS','SEPTEMBER','OKTOBER','NOVEMBER','DESEMBER');
	$bulan = intval($bulan);
	return isset($arr_bulan[$bulan])?$arr_bulan[$bulan]:"";
}



function update_nomor_surat($nomor) {
	 	$bulan = date("m");
		$tahun = date("Y");
	
	 	$tmp = explode("/",$nomor);
		
	 	$kode = $tmp[1];
	 
		$sql="update surat_a_nomor set nomor = nomor + 1
		where kode='$kode' and tahun=$tahun and bulan = $bulan";
		$this->db->query($sql);
		 
	 
 
}


}

?>