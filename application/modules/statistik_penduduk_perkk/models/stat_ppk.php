<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class stat_ppk extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
       // $this->_table = 'country';
	}
    
	
	
	
	 function data_perkk($no_kk){
	 	$this->db->select('p.*, kk.*')->from('v_penduduk p')
		->join('kk_anggota kk','kk.id_penduduk=p.id_penduduk')
 		->where("aktif","1")
		->where("kk.no_kk",$no_kk)
		->where(" (p.status_kependudukan <> '3' and p.hidup_mati = '1')  ",NULL,FALSE);
		$this->db->order_by("kk.urutan");
		$res  = $this->db->get();
		//echo $this->db->last_query();
		return $res;
	
	 }
	
	
}
