<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class ektpmodel extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
       // $this->_table = 'country';
	}
    
	
	 function get_data($param)
	{		
		 
		//print_r($param);  
		$this->db->select('*')->from('v_penduduk p');
		 
		 $this->db->where("status","1");
		  $this->db->where("hidup_mati","1");
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);

	 	if($param['nama']<>'') {
	 		$this->db->like("nama",$param['nama']);
	 	}


	 	if($param['nik'] <> '') {
	 		$this->db->where("nik",$param['nik']);
	 	} 
	 	if($param['no_kk'] <> '') {
	 		$this->db->where("no_kk",$param['no_kk']);
	 	} 

	 	if($param['umur'] <> '') {
	 		$this->db->where("umur",$param['umur']);
	 	} 

	 	if($param['jk']<>'x') {
	 		$this->db->where("jk",$param['jk']);
	 	}

	 	if($param['status_kawin']<>'x') {
	 		$this->db->where("status_kawin",$param['status_kawin']);
	 	}

	 	if($param['ektp']<>'x') {
	 		$this->db->where("ektp",$param['ektp']);
	 	}

	 	if($param['id_dusun']<>'x') {
	 		$this->db->where("dusun",$param['id_dusun']);
	 	}

	 	if($param['status_kependudukan']<>'x') {
	 		$this->db->where("status_kependudukan",$param['status_kependudukan']);
	 	}

	 	$this->db->where(" ( umur >= 17 or status_kawin <> '1' ) ",null,false);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		// echo $this->db->last_query();
 		return $res;
	}
	 



function get_stat($jk,$status) {
	$this->db->select('*')->from('v_penduduk p');
		 
	$this->db->where("status","1");
	$this->db->where("hidup_mati","1");
	$this->db->where(" ( umur >= 17 or status_kawin <> '1' ) ",null,false);
	$this->db->where("ektp",$status);
	$this->db->where("jk",$jk);

	$res = $this->db->get();
	return $res->num_rows();
}
	

function rec_data($status) {
	$this->db->select('*')->from('v_penduduk p');
		 
	$this->db->where("status","1");
	$this->db->where("hidup_mati","1");
	$this->db->where(" ( umur >= 17 or status_kawin <> '1' ) ",null,false);
	$this->db->where("ektp",$status);

	$res = $this->db->get();
	// echo $this->db->last_query(); 
	return $res;
}

 

}
