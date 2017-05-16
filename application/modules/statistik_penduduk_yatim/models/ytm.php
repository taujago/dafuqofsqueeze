<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class ytm extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
       // $this->_table = 'country';
	}
    
	
	 function get_data_yatim_piatu($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
		// $this->db->where("status","1");
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);
		$this->db->where("p.umur <= 15",NULL,false);
		$this->db->where("nama_ayah","");
		$this->db->where("nama_ibu","");
	 	 
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL,false);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}


		 function get_data_yatim($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
		// $this->db->where("status","1");
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);
		$this->db->where("p.umur <= 15",NULL,false);
		$this->db->where("p.nama_ayah","");
		// $this->db->where("p.nama_ayah","");
	 	 
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL,false);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}


		 function get_data_piatu($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
		// $this->db->where("status","1");
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);
		$this->db->where("p.umur <= 15",NULL,false);
		$this->db->where("nama_ayah","");
		// $this->db->where("nama_ibu","");
	 	 
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL,false);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}
	
	
	
 	function get_stat($jk) {
		$this->db->where("hidup_mati","1")
		->where("status_kependudukan <> 3",NULL, false)->where("umur <=15",NULL,FALSE);
		$this->db->where("nama_ayah","");
		$this->db->where("nama_ibu","");
		$this->db->where("jk",$jk);
		$res = $this->db->get("v_penduduk");
		return $res->num_rows();
	}
	
	
}
