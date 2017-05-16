<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class penkeum extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
       // $this->_table = 'country';
	}
 function get_data($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
		// $this->db->where("status","1");
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);
		$this->db->where("p.umur =null",NULL,false);
		
	 	 
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL,false);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}


     function get_data_1_5($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
		// $this->db->where("status","1");
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);
		$this->db->where("p.umur >= 0 and p.umur <= 5",NULL,false);
		
	 	 
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL,false);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}
	
	 function get_data_u_6_10($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
		// $this->db->where("status","1");
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);
		$this->db->where("p.umur >= 6 and p.umur <= 10",NULL,false);
		
	 	 
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL,false);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}
	
		 function get_data_u_11_20($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
		// $this->db->where("status","1");
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);
		$this->db->where("p.umur >= 11 and p.umur <= 20",NULL,false);
		
	 	 
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL,false);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}
		
			 function get_data_u_21_30($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
		// $this->db->where("status","1");
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);
		$this->db->where("p.umur >= 21 and p.umur <= 30",NULL,false);
		
	 	 
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL,false);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}
	

		 function get_data_u_31_40($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
		// $this->db->where("status","1");
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);
		$this->db->where("p.umur >= 31 and p.umur <= 40",NULL,false);
		
	 	 
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL,false);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}

	function get_data_u_41_50($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
		// $this->db->where("status","1");
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);
		$this->db->where("p.umur >= 41 and p.umur <= 50",NULL,false);
		
	 	 
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL,false);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}
	
	function get_data_u_51_60($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
		// $this->db->where("status","1");
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);
		$this->db->where("p.umur >= 51 and p.umur <= 60",NULL,false);
		
	 	 
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL,false);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}
	function get_data_u_61_70($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
		// $this->db->where("status","1");
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);
		$this->db->where("p.umur >= 61 and p.umur <= 70",NULL,false);
		
	 	 
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL,false);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}

	function get_data_u_70($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
		// $this->db->where("status","1");
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);
		$this->db->where("p.umur > 70 ",NULL,false);
		
	 	 
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan <> 3",NULL,false);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		// echo $this->db->last_query();
 		return $res;
	}
	
	
	
	
 	function get_stat($jk) {
		$this->db->where("hidup_mati","1")
		->where("status_kependudukan <> 3",NULL, false)->where("umur =null",NULL,FALSE);
		$this->db->where("jk",$jk);
		$res = $this->db->get("v_penduduk");
		return $res->num_rows();
	}
	
	 	function get_stat_1_5($jk) {
		$this->db->where("hidup_mati","1")
		->where("status_kependudukan <> 3",NULL, false)->where("umur >= 0 and umur <=5",NULL,FALSE);
		$this->db->where("jk",$jk);
		$res = $this->db->get("v_penduduk");
		return $res->num_rows();
	}
	function get_stat_6_10($jk) {
		$this->db->where("hidup_mati","1")
		->where("status_kependudukan <> 3",NULL, false)->where("umur >= 6 and umur <=10",NULL,FALSE);
		$this->db->where("jk",$jk);
		$res = $this->db->get("v_penduduk");
		return $res->num_rows();
	}

	function get_stat_11_20($jk) {
		$this->db->where("hidup_mati","1")
		->where("status_kependudukan <> 3",NULL, false)->where("umur >= 11 and umur <=20",NULL,FALSE);
		$this->db->where("jk",$jk);
		$res = $this->db->get("v_penduduk");
		return $res->num_rows();
	}
	
		function get_stat_21_30($jk) {
		$this->db->where("hidup_mati","1")
		->where("status_kependudukan <> 3",NULL, false)->where("umur >= 21 and umur <=30",NULL,FALSE);
		$this->db->where("jk",$jk);
		$res = $this->db->get("v_penduduk");
		return $res->num_rows();
	}
	
		function get_stat_31_40($jk) {
		$this->db->where("hidup_mati","1")
		->where("status_kependudukan <> 3",NULL, false)->where("umur >= 31 and umur <=40",NULL,FALSE);
		$this->db->where("jk",$jk);
		$res = $this->db->get("v_penduduk");
		return $res->num_rows();
	}
	function get_stat_41_50($jk) {
		$this->db->where("hidup_mati","1")
		->where("status_kependudukan <> 3",NULL, false)->where("umur >= 41 and umur <=50",NULL,FALSE);
		$this->db->where("jk",$jk);
		$res = $this->db->get("v_penduduk");
		return $res->num_rows();
	}

		function get_stat_51_60($jk) {
		$this->db->where("hidup_mati","1")
		->where("status_kependudukan <> 3",NULL, false)->where("umur >= 51 and umur <=60",NULL,FALSE);
		$this->db->where("jk",$jk);
		$res = $this->db->get("v_penduduk");
		return $res->num_rows();
	}
	
		function get_stat_61_70($jk) {
		$this->db->where("hidup_mati","1")
		->where("status_kependudukan <> 3",NULL, false)->where("umur >= 61 and umur <=70",NULL,FALSE);
		$this->db->where("jk",$jk);
		$res = $this->db->get("v_penduduk");
		return $res->num_rows();
	}
	
			function get_stat_70($jk) {
		$this->db->where("hidup_mati","1")
		->where("status_kependudukan <> 3",NULL, false)->where("umur > 70",NULL,FALSE);
		$this->db->where("jk",$jk);
		$res = $this->db->get("v_penduduk");
		return $res->num_rows();
	}
	
	
	
	
	
	
	
}
