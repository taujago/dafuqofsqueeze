<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class penjandam extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
       // $this->_table = 'country';
	}
    
	
	 function get_data($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
 		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);

	 	 
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL, FALSE)->
		where("status_kawin not in ('1','2')",null,false);
		$this->db->where('jk','p');

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}
	


	 function get_duda($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
 		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);

	 	 
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL, FALSE)->
		where("status_kawin not in ('1','2')",null,false);
		$this->db->where('jk','l');

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}
	
 	function get_stat($jk) {
		$this->db->where('p.id_desa', $this->session->userdata('operator_id_desa'));
 		$this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL, FALSE)->
		where(" umur between 17 and 40 " , NULL, FALSE);
 		$this->db->where("jk",$jk);
		$res = $this->db->get("v_penduduk p");
		return $res->num_rows();
	}
	
	function stat_penduduk_duda_janda(){
	 	$sql="SELECT 
	 		SUM(IF(status_kawin NOT IN ('1','2') AND jk='l',1,0)) AS duda 
        		,SUM(IF(status_kawin NOT IN ('1','2') AND jk='p',1,0)) AS janda
        		,SUM(IF(status_kawin NOT IN ('1','2'),1,0)) AS jumlah


        		FROM v_penduduk p
       			 WHERE p.hidup_mati='1' AND status_kependudukan NOT IN  ('3')";
				$res  = $this->db->query($sql);
				return $res;
	 }
	
	
}
