<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class fktp extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
       // $this->_table = 'country';
	}
    
	
	 function get_data($param)
	{		
		
 
		//print_r($param);

		$this->db->select('*')->from('formulir_ktp sbb ')
		->join("v_penduduk2 p",'p.id_penduduk=sbb.id_penduduk')
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
	
	
}
