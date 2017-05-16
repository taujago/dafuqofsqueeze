<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class siknm extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
       // $this->_table = 'country';
	}
    
	
	 function get_data($param)
	{		
		
 	
		$this->db->select('sik.* ,
							ayah.nama AS ayah_nama, 
							ayah.tmp_lahir AS ayah_tmp_lahir, 
							ayah.tgl_lahir AS ayah_tgl_lahir, 
							ayah.agama AS ayah_agama, 
							ayah.pekerjaan AS ayah_pekerjaan, 
							ayah.alamat AS ayah_alamat, 
							ayah.nik AS ayah_nik,

							ibu.nama AS ibu_nama, 
							ibu.tmp_lahir AS ibu_tmp_lahir,
							ibu.tgl_lahir AS ibu_tgl_lahir, 
							ibu.agama AS ibu_agama, 
							ibu.`pekerjaan` AS ibu_pekerjaan, 
							ibu.alamat AS ibu_alamat, 
							ibu.nik AS ibu_nik , 

							anak.nama AS nama, anak.jk,
							anak.`tmp_lahir`, anak.`tgl_lahir`, anak.`agama`, anak.`pekerjaan`,
							anak.`alamat`, anak.`nik`')
		->from('surat_ijin_keluarnegeri sik ')
		->join("v_penduduk2 ayah",'ayah.id_penduduk = sik.ayah_id_penduduk')
		->join("v_penduduk2 ibu",'ibu.id_penduduk = sik.ibu_id_penduduk')
		->join("v_penduduk2 anak",'anak.id_penduduk = sik.id_penduduk')
		->where("deleted","0");
 		
 		if($param['nama']<> 'x') {
 			$this->db->like('nama',$param['nama']);
 		}

 		if($param['tgl_awal'] <> 'x' and $param['tgl_akhir'] <> 'x') {
 			$awal = flipdate($param['tgl_awal']);
 			$akhir = flipdate($param['tgl_akhir']);
 			$this->db->where(" tanggal between '$awal' and '$akhir'",null,false);
 		} 

 		/*

 		if($param['nama_ibu']<> 'x') {
 			$this->db->like('ibu_nama',$param['nama_ibu']);
 		}

 		if($param['nama_bapak']<> 'x') {
 			$this->db->like('bapak_nama',$param['nama_bapak']);
 		}
 		if($param['jk']<> 'x') {
 			$this->db->where('jk',$param['jk']);
 		} */
 
	 	 
		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}
	
	
	function get_detail($id) {
		$this->db->select('sik.* ,
							ayah.nama AS ayah_nama, 
							ayah.tmp_lahir AS ayah_tmp_lahir, 
							ayah.tgl_lahir AS ayah_tgl_lahir, 
							ayah.agama AS ayah_agama, 
							ayah.pekerjaan AS ayah_pekerjaan, 
							ayah.alamat AS ayah_alamat, 
							ayah.nik AS ayah_nik,
							ayah.jk as ayah_jk, 
							ayah.rt as ayah_rt, 
							ayah.rw as ayah_rw, 
							ayah.dusun as ayah_dusun,

							ibu.nama AS ibu_nama, 
							ibu.tmp_lahir AS ibu_tmp_lahir,
							ibu.tgl_lahir AS ibu_tgl_lahir, 
							ibu.agama AS ibu_agama, 
							ibu.`pekerjaan` AS ibu_pekerjaan, 
							ibu.alamat AS ibu_alamat, 
							ibu.nik AS ibu_nik , 
							ibu.jk as ibu_jk, 
							ibu.rt as ibu_rt, 
							ibu.rw as ibu_rw, 
							ibu.dusun as ibu_dusun,

							anak.nama AS nama, anak.jk,
							anak.`tmp_lahir`, anak.`tgl_lahir`, anak.`agama`, anak.`pekerjaan`,
							anak.`alamat`, anak.`nik`,
							anak.jk as jk, 
							anak.rt as rt, 
							anak.rw as rw, 
							anak.dusun as dusun
							')
		->from('surat_ijin_keluarnegeri sik ')
		->join("v_penduduk2 ayah",'ayah.id_penduduk = sik.ayah_id_penduduk')
		->join("v_penduduk2 ibu",'ibu.id_penduduk = sik.ibu_id_penduduk')
		->join("v_penduduk2 anak",'anak.id_penduduk = sik.id_penduduk')
		->where("deleted","0")
		->where("id",$id);
		return $this->db->get();
	}

	
}
