<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class scm extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
       // $this->_table = 'country';
	}
    
	
	 function get_data($param)
	{		
		
 
		//print_r($param);

		$this->db->select('sc.*,
		laki.`nik` AS laki_nik, laki.`nama` AS laki_nama, 
		laki.`tmp_lahir`  AS laki_tmp_lahir,  
		laki.`tgl_lahir` AS laki_tgl_lahir, 
		laki.`pekerjaan` AS laki_pekerjaan, laki.`agama` AS laki_agama, 
		laki.jk AS laki_jk, laki.umur as laki_umur,laki.alamat as laki_alamat,

		perempuan.`nik` AS perempuan_nik, perempuan.`nama` AS perempuan_nama, 
		perempuan.`tmp_lahir` AS perempuan_tmp_lahir,  
		perempuan.`tgl_lahir` AS perempuan_tgl_lahir, 
		perempuan.`pekerjaan` AS perempuan_pekerjaan, perempuan.`agama` AS perempuan_agama, 
		perempuan.jk AS perempuan_jk, perempuan.umur as perempuan_umur,
		perempuan.alamat as perempuan_alamat
		')->from('surat_cerai sc ')
		->join("v_penduduk2 laki",'laki.id_penduduk=sc.laki_id_penduduk')
		->join("v_penduduk2 perempuan",'perempuan.id_penduduk = sc.perempuan_id_penduduk')
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
	
	
	
}
