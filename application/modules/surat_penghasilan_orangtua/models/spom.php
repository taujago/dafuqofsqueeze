<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class spom extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
       // $this->_table = 'country';
	}
    
	
	 function get_data($param)
	{		
		
 	
		$this->db->select('spom.* ,
							ayah.nama AS ayah_nama, 
							ayah.tmp_lahir AS ayah_tmp_lahir, 
							ayah.tgl_lahir AS ayah_tgl_lahir, 
							ayah.agama AS ayah_agama, 
							ayah.pekerjaan AS ayah_pekerjaan, 
							ayah.alamat AS ayah_alamat, 
							ayah.nik AS ayah_nik,							 

							anak.nama AS nama, anak.jk,
							anak.`tmp_lahir`, anak.`tgl_lahir`, anak.`agama`, anak.`pekerjaan`,
							anak.`alamat`, anak.`nik`')
		->from('surat_penghasilan_orangtua spom ')
		->join("v_penduduk2 ayah",'ayah.id_penduduk = spom.ayah_id_penduduk')		 
		->join("v_penduduk2 anak",'anak.id_penduduk = spom.id_penduduk')
		->where("deleted","0");
 		
 		if($param['nama']<> 'x') {
 			$this->db->like('nama',$param['nama']);
 		}

 		if($param['tgl_awal'] <> 'x' and $param['tgl_akhir'] <> 'x') {
 			$awal = flipdate($param['tgl_awal']);
 			$akhir = flipdate($param['tgl_akhir']);
 			$this->db->where(" tanggal between '$awal' and '$akhir'",null,false);
 		} 

 
	 	 
		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}
	
	
	function get_detail($id) {
		$this->db->select('spom.* ,
							ayah.nama AS ayah_nama, 
							ayah.tmp_lahir AS ayah_tmp_lahir, 
							ayah.tgl_lahir AS ayah_tgl_lahir, 
							ayah.agama AS ayah_agama, 
							ayah.pekerjaan AS ayah_pekerjaan, 
							ayah.alamat AS ayah_alamat, 
							ayah.nik AS ayah_nik,	ayah.jk as ayah_jk,
							ayah.rt as ayah_rt, ayah.rw as ayah_rw, ayah.dusun as ayah_dusun,						 

							anak.nama AS nama, anak.jk,
							anak.`tmp_lahir`, anak.`tgl_lahir`, anak.`agama`, anak.`pekerjaan`,
							anak.`alamat`, anak.`nik`,
							anak.jk  ,
							anak.rt , anak.rw  , anak.dusun  
							')
		->from('surat_penghasilan_orangtua spom ')
		->join("v_penduduk2 ayah",'ayah.id_penduduk = spom.ayah_id_penduduk')		 
		->join("v_penduduk2 anak",'anak.id_penduduk = spom.id_penduduk')
		->where("deleted","0")
		->where("id",$id);
		return $this->db->get();
	}

	
}
