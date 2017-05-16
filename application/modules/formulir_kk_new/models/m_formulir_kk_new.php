<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_formulir_kk_new extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
       // $this->_table = 'country';
	}
    
	
	 function get_data($param)
	{		
		
    $this->db->select('*')->from('formulir_permohonan_kk_new sp')
  
		->join("v_penduduk p",'p.id_penduduk=sp.id_penduduk') 
		// ->join("lokasi l",'l.id_desa=sp.pindah_id_desa','left')
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
		// echo $this->db->last_query(); 
 		return $res;
	}


 function kk_jumlah() {

    $sql = "SELECT COUNT(*)-1 FROM formulir_permohonan_kk_new_detail JOIN formulir_permohonan_kk_new ON formulir_permohonan_kk_new.id=formulir_permohonan_kk_new_detail.id";  
    $res = $this->db->query($sql);

    // echo $this->db->last_query(); exit;
     
    return $res;
   }
	
}
