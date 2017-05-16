<?php 
class maintenance extends op_controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array("tanggal","file"));
		$this->load->model("core_model","cm");
	}


	function backup(){

		$data['title'] = "BACKUP DATABASE";
		 
	   	$content = $this->load->view("backup_view",$data,true);
		$this->set_title($data['title']);
		$this->set_content($content);
		$this->render();
	}


	function export_index(){
		// $data = $this->db	>get("setting_service")->row_array();

		$data['title'] = "EXPORT DATA ";

		$this->db->limit(1); 
		$url = $this->db->get("setting")->row();
		$data['service_url'] = $url->service_url;
		 
	   	$content = $this->load->view("export_view",$data,true);
		$this->set_title($data['title']);
		$this->set_content($content);
		$this->render();
	}

function reset_data_penduduk_index(){
		// $data = $this->db	>get("setting_service")->row_array();

		$data['title'] = "Reset Data Penduduk";

		$this->db->limit(1); 
		$url = $this->db->get("setting")->row();
		$data['service_url'] = $url->service_url;
		 
	   	$content = $this->load->view("reset_data_penduduk",$data,true);
		$this->set_title($data['title']);
		$this->set_content($content);
		$this->render();
	}



function reset_data_penduduk(){
		// $data = $this->db	>get("setting_service")->row_array();
	$data['title'] = "Reset Data Penduduk";
$this->db->where("id",$id);
	$this->db->delete("penduduk");

	$sql="delete from penduduk";
	$res = $this->db->query($sql);
	
	
		// $content = $this->load->view("reset_data_penduduk",$data,true);
		// $this->set_title($data['title']);
		// $this->set_content($content);
		// $this->render();
}


	function restore(){

		$data['title'] = "RESTORE DATABASE";
		 
	   	$content = $this->load->view("restore_view",$data,true);
		$this->set_title($data['title']);
		$this->set_content($content);
		$this->render();
	}
	
	function contact(){

		$data['title'] = "SMS CENTER - PUSAT KONSULTASI PEMERINTAHAN DAERAH";
		 
	   	$content = $this->load->view("contact_view",$data,true);
		$this->set_title($data['title']);
		$this->set_content($content);
		$this->render();
	}

	function dobackup(){

	$desa = $this->cm->data_desa();
	//$outfile="sikdes_lutar_".$desa->desa."_backupdb_".date("dmY_his").".sql";
	$outfile="simdeskel_backupdb_".str_replace("_","",$desa->id_desa)."_".str_replace(" ","",$desa->desa).".sql";
	//$outfile = str_replace(" ", "_", $outfile);

	$url = base_url()."backup/backup.php?outfile=$outfile";
	
	$x = file_get_contents($url); 
	 
	// if($x){
	// 	$this->load->helper('download');
	// 	$content = file_get_contents("./backup/tmp/$outfile"); 
	// 	force_download($outfile, $content);
	// 	unlink("./backup/tmp/$outfile");
	// }
	
	// $this->load->helper('download');
	// $name = $outfile;
	//copy("backup/tmp/$outfile",'foto');
	//copy("backup/tmp/simdeskel_backupdb_18082014_042027.sql",'foto');
	//exit;
		$file_path = "backup/tmp/$outfile";
 		$this->load->library('zip');
		$path = 'foto/';
		//echo $path;
		$this->zip->read_dir($path); 
		$this->zip->read_file($file_path); 
		$time = time();
		$backupfile="SIMDESKEL_BACKUP_".str_replace("_","",$desa->id_desa)."_".str_replace(" ","",$desa->desa)."_".date("dmY_his");
		$x = $result = $this->zip->download($backupfile); 
		
		if($x) {
			unlink($outfile);
		}
	 

	}


	function zip(){
		$this->load->library('zip');
		$path = 'foto/';
		//echo $path;
		$this->zip->read_dir($path); 
		$time = time();
		$x = $result = $this->zip->download('backup.'.$time.'.zip'); 
		//$x = $this->zip->archive('./backup/backup.zip');
		if($x) echo "berhasil buat"; else echo "gagal buat";
		//$this->zip->download('my_backup.zip'); 

	}


	function dorestore(){
		ini_set('max_execution_time', 0);
		$ret = array();
		//print_r($_FILES);
		//$tmp_name="tmp_backup_".date("dmyhis").".sql";
		if(empty($_FILES['backup']['tmp_name'])) {
			$ret = array("success"=>false,"pesan"=>"Tidak ada file yang diupload");
		}
		
		else {
			if(is_uploaded_file($_FILES['backup']['tmp_name'])){
				//echo "file terupload " ;
				
				
				$x = copy($_FILES['backup']['tmp_name'], "backup/tmp_restore/".$_FILES['backup']['name']);
				if($x) { 
					//echo "copy sukses";
				$ret = array("success"=>true,"pesan"=>"Data berhasil direstore ");
				//exit;
				}

				// extract semua file dan direxctory
				$zip = new ZipArchive;

				if ($zip->open("backup/tmp_restore/".$_FILES['backup']['name']) === TRUE) {
					$zip->extractTo('backup/tmp_restore/');
					$zip->close();
					//unlink(APPPATH.'/foto');
					$photo_source = realpath('backup/tmp_restore/foto/');
					$photo_path = realpath('foto/');
					//unlink($photo_path);
					// echo $photo_source . " ". $photo_path; exit;

					// proses foto 
					copyr($photo_source,$photo_path);
					// copyr
					// exit;

					// restore database. 
					//copy('backup/tmp_restore/foto','/');

					$tmp_file_name = explode("_", $_FILES['backup']['name']);
					//$xx = "simdeskel_backupdb_82_4_8_2003_AMASING_KALI.sql";
					$tmp_name = "simdeskel_backupdb_".$tmp_file_name[2]."_".$tmp_file_name[3].".sql";
					 
					 // echo "tmp nama " . $tmp_name . "<br />";
					$url = base_url()."backup/restore.php?tmp_file=$tmp_name";
					// echo "url $url"; 
					// exit;
					$y = @file_get_contents($url);
					//$tmp_name = ""

					$desa2 = $this->cm->data_desa(); 
					// show_array($desa2);
					$this->session->set_userdata("operator_id_desa",$desa2->id_desa);
			 		$this->session->set_userdata("id_desa",$desa2->id_desa);

					$ret = array("success"=>true,"pesan"=>"Data berhasil direstore. Silahkan Logout dan login kembali  ");
				}
				else {
					$ret = array("false"=>true,"pesan"=>"Gagal extract file ");
				}

				// extract filenya dan ambil 

				
				// $url = base_url()."backup/restore.php?tmp_file=$tmp_name";
				// $y = @file_get_contents($url);
				
				
				 
				
			}
		
		} 
		echo json_encode($ret);
	}


function save_service(){
	$data = $this->input->post();
	$res = $this->db->update("setting",$data);
	if($res) {
		$arr = array("error"=>false,'message'=>'Konfigurasi disimpan');
	}
	else {
		$arr = array("error"=>true,'message'=>'Konfigurasi gagal disimpan');
	}
	echo json_encode($arr);
}




function export(){
	//$data = $this->input->post(); 
	$arr_setting_desa = array();
	$res = $this->db->get("setting_desa");
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_setting_desa[] = $row;
	endforeach;

	$arr_penduduk = array();
	$res = $this->db->get("penduduk");
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_penduduk[] = $row;
	endforeach;

	$arr_admin_a1 = array();
	// Mencegah duplicate entry id mas bro
	$res = $this->db->select('nomor,tanggal,tentang,uraian_singkat,persetujuan_bpd_tgl,persetujuan_bpd_nomor,dilaporkan_tgl,dilaporkan_nomor,keterangan,deleted,id_desa')->from('admin_a1');
	$res = $this->db->get();
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_admin_a1[] = $row;
	endforeach;

		$arr_admin_a2 = array();
	// Mencegah duplicate entry id mas bro
	$res = $this->db->select('nomor,tanggal,tentang,uraian_singkat,dilaporkan_tgl,dilaporkan_nomor,keterangan,deleted,id_desa')->from('admin_a2');
	$res = $this->db->get();
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_admin_a2[] = $row;
	endforeach;

		$arr_admin_a3 = array();
	// Mencegah duplicate entry id mas bro
	$res = $this->db->select('jenis_inventaris,asal_sendiri,asal_pemerintah,asal_provinsi,asal_kab,asal_sumbangan,awal_tahun_baik,awal_tahun_rusak,hapus_rusak,hapus_jual,hapus_sumbang,hapus_tanggal,akhir_tahun_baik,akhir_tahun_rusak,keterangan,deleted,id_desa')->from('admin_a3');
	$res = $this->db->get();
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_admin_a3[] = $row;
	endforeach;

	$arr_admin_a4 = array();
	// Mencegah duplicate entry id mas bro
	$res = $this->db->select('nama,niap,nip,jk,tmp_lahir,tgl_lahir,id_agama,pangkat,golongan,jabatan,pendidikan_terakhir,pengangkatan_nomor,pengangkatan_tanggal,pemberhentian_nomor,pemberhentian_tanggal,keterangan,deleted,id_desa')->from('admin_a4');
	$res = $this->db->get();
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_admin_a4[] = $row;
	endforeach;

	$arr_admin_a5 = array();
	// Mencegah duplicate entry id mas bro
	$res = $this->db->select('asal_tanah,nomor_sertifikat,luas,kelas_tanah,luas_biaya_desa,luas_biaya_pemerintah,luas_biaya_pemprov,luas_biaya_pemkab,luas_biaya_lainnya,tanggal_perolehan,jenis_sawah,jenis_tegalan,jenis_kebun,jenis_kolam,jenis_tanah_kering,tanda_ada,tanda_tidak_ada,papan_nama_ada,papan_nama_tidak_ada,lokasi,mutasi,peruntukan,keterangan,deleted,id_desa')->from('admin_a5');
	$res = $this->db->get();
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_admin_a5[] = $row;
	endforeach;

	$arr_admin_a6 = array();
	// Mencegah duplicate entry id mas bro
	$res = $this->db->select('nama_pemilik,luas,luas_sertifikat_hm,luas_sertifikat_hgb,luas_sertifikat_hp,luas_sertifikat_hgu,luas_sertifikat_hpl,luas_sertifikat_ma,luas_sertifikat_vi,luas_sertifikat_tn,non_pertanian_perumahan,non_pertanian_perdagangan,non_pertanian_perkantoran,non_pertanian_industri,non_pertanian_fasilitas_umum,pertanian_sawah,pertanian_tegalan,pertanian_perkebunan,pertanian_peternakan,pertanian_hutan,ket,mutasi,pertanian_hutan_lindung,pertanian_tanah_kosong,pertanian_lain,keterangan,deleted,id_desa')->from('admin_a6');
	$res = $this->db->get();
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_admin_a6[] = $row;
	endforeach;

	$arr_admin_a7 = array();
	// Mencegah duplicate entry id mas bro
	$res = $this->db->select('jenis_surat,tanggal,masuk_nomor,masuk_tanggal,masuk_pengirim,masuk_isi_singkat,keluar_isi_singkat,keluar_nomor,keluar_tanggal,keluar_tujuan,keterangan,deleted,id_desa')->from('admin_a7');
	$res = $this->db->get();
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_admin_a7[] = $row;
	endforeach;

	$arr_admin_a9 = array();
	// Mencegah duplicate entry id mas bro
	$res = $this->db->select('nomor_diundangkan,tanggal_diundangkan,jenis,nomor_ditetapkan,tanggal_ditetapkan,keterangan,tentang,deleted,id_desa')->from('admin_a9');
	$res = $this->db->get();
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_admin_a9[] = $row;
	endforeach;



	$arr_admin_e1 = array();
	// Mencegah duplicate entry id mas bro
	$res = $this->db->select('nama,tanggal,jenis_kelamin,tempat_lahir,tanggal_lahir,agama,jabatan,pendidikan_terakhir,tanggal_pengangkatan,nomor_pengangkatan,tanggal_pemberhentian,nomor_pemberhentian,ket,id_desa,deleted')->from('admin_e1');
	$res = $this->db->get();
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_admin_e1[] = $row;
	endforeach;

	$arr_admin_e2 = array();
	// Mencegah duplicate entry id mas bro
	$res = $this->db->select('tanggal_keputusan,nomor_keputusan,tentang,uraian_singkat,ket,id_desa,deleted')->from('admin_e2');
	$res = $this->db->get();
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_admin_e2[] = $row;
	endforeach;


	$arr_admin_e3 = array();
	// Mencegah duplicate entry id mas bro
	$res = $this->db->select('tentang,tanggal,pelaksana,pokok,hasil,ket,id_desa,deleted')->from('admin_e3');
	$res = $this->db->get();
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_admin_e3[] = $row;
	endforeach;

	$arr_admin_e4a = array();
	// Mencegah duplicate entry id mas bro
	$res = $this->db->select('tanggal,nomor_surat_masuk,tanggal_surat_masuk,pengirim_surat_masuk,isi_surat_masuk,isi_surat_keluar,tanggal_surat_keluar,tujuan,ket,id_desa,deleted')->from('admin_e4a');
	$res = $this->db->get();
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_admin_e4a[] = $row;
	endforeach;

	$arr_admin_e4b = array();
	// Mencegah duplicate entry id mas bro
	$res = $this->db->select('tanggal,tanggal_surat,no_surat,isi,tujuan,ket,id_desa,deleted')->from('admin_e4b');
	$res = $this->db->get();
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_admin_e4b[] = $row;
	endforeach;

	$arr_tiger_dusun = array();
	
	$res = $this->db->select('dusun,id_desa')->from('tiger_dusun');
	$res = $this->db->get();
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_tiger_dusun[] = $row;
	endforeach;







$arr_kk = array();
	$res = $this->db->get("kk");
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_kk[] = $row;
	endforeach;


$arr_kk_anggota = array();
	$res = $this->db->get("kk_anggota");
	$arr_data = array();
	foreach($res->result_array() as $row) : 
		$arr_kk_anggota[] = $row;
	endforeach;

	$result = $arrayName = array('id_desa' => $this->session->userdata("operator_id_desa") , 
		"data_setting_desa" => $arr_setting_desa, 

			"data_penduduk" => $arr_penduduk, 
			"data_admin_a1" => $arr_admin_a1, 
			"data_admin_a2" => $arr_admin_a2, 
			"data_admin_a3" => $arr_admin_a3, 
			"data_admin_a4" => $arr_admin_a4, 
			"data_admin_a5" => $arr_admin_a5, 
			"data_admin_a6" => $arr_admin_a6, 
			"data_admin_a7" => $arr_admin_a7, 
			"data_admin_a9" => $arr_admin_a9, 
			"data_admin_e1" => $arr_admin_e1, 
			"data_admin_e2" => $arr_admin_e2, 
			"data_admin_e3" => $arr_admin_e3, 
			"data_admin_e4a" => $arr_admin_e4a,
			"data_admin_e4b" => $arr_admin_e4b, 
			"data_kk" =>$arr_kk, 
			"data_kk_anggota" => $arr_kk_anggota,
			"data_tiger_dusun" => $arr_tiger_dusun

		);

	

	$json_data =   json_encode($result); 
	 

	$data = json_encode($result); 



	$this->db->limit(1); 
	$url = $this->db->get("setting")->row();
	$service_url = $url->service_url;


	$url = $service_url."/in/index.php/get_export";

	// echo $url;

	$ch = curl_init();

 	 


	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, 1);
	curl_setopt($ch,CURLOPT_POSTFIELDS, array("json_data"=>$json_data));
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

	$info = curl_getinfo($ch);
 	// show_array($info);
	$result = curl_exec($ch);

 
	curl_close($ch);
	echo  $result;
	$error = ($info['http_code']=="200")?false:true;
	// echo "error"; 
	echo json_encode(array('error'=>$error));


}

}
?>