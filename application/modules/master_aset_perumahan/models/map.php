<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class map extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
       // $this->_table = 'country';
	}
	
	 function get_data($param)
	{		
		
 
		//print_r($param);

		$this->db->select('*')->from('master_aset_perumahan as map')->join("master_jenis_rumah as j", "j.id = map.category");
		$this->db->where('map.deleted','0');
	 	 
		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}
	
	
	
}
