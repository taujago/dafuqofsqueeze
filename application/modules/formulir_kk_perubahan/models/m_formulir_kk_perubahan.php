<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_formulir_kk_perubahan extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
       // $this->_table = 'country';
	}
    
	
	 function get_data($param)
	{		
		
    $this->db->select('*')->from('formulir_permohonan_kk_perubahan')
  
		// ->join("v_penduduk p",'p.id_penduduk=sp.id_penduduk') 
		// ->join("lokasi l",'l.id_desa=sp.pindah_id_desa','left')
		->where("deleted","0");
 		
 		if($param['pemohon_nama']<> 'x') {
 			$this->db->like('pemohon_nama',$param['pemohon_nama']);
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
		// echo $this->db->last_query(); 
 		return $res;
	}


	
}
