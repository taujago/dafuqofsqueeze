<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_surat_perjanjian extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
       // $this->_table = 'country';
	}
    
	
	 function get_data($param)
	{		
		
		/*SELECT dus.*, l.id_desa, l.desa, l.id_kecamatan, l.kecamatan, l.id_kota, l.kota
FROM tiger_dusun dus
JOIN  lokasi l ON l.id_desa = dus.`id_desa` */


		$this->db->select('*')->from('surat_perjanjian');
 		
 		
 		if($param['pihak1_nama']<> 'x') {
 			$this->db->like('pihak1_nama',$param['pihak1_nama']);
 		}

 		if($param['pihak2_nama']<> 'x') {
 			$this->db->like('pihak2_nama',$param['pihak2_nama']);
 		}
 		
 
	 	/*if($param['id_kecamatan'] <> 'x') {
	 		$this->db->where('id_kecamatan',$param['id_kecamatan']);
	 	}
	 	if($param['id_desa'] <> 'x') {
	 		$this->db->where('id_desa',$param['id_desa']);
	 	}
	 	if($param['dusun'] <> 'x' ) {
	 		$this->db->like("dusun",$param['dusun']);
	 	}

	 	$this->db->where("l.id_desa",$this->session->userdata("operator_id_desa"));
		*/ 
		$this->db->where("deleted","0");
		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		// echo $this->db->last_query();
 		return $res;
	}
	
	
	
}
