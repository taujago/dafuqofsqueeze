<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class penpm extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
       // $this->_table = 'country';
	}
    
	
	 function get_data($param)
	{		
		 
		$this->db->select('*')->from('v_pindah p');
		 
		 
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa'])->where("p.status_kependudukan","3");

	 	 
		
		//$this->db->where("hidup_mati",1)->where("status_kependudukan",0);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}
	
	
 	function get_stat($jk) {
 		$this->db->where("jk",$jk)->where("p.status_kependudukan","3");
		$res = $this->db->get("v_pindah p");
		return $res->num_rows();
	}
	
	
}
