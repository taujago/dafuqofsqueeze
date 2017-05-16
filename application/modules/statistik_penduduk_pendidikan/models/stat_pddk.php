<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class stat_pddk extends CI_Model 
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

	 	 // $this->db->where("p.umur >= 15",NULL,false);

	 	if($param['id_pendidikan']<>'x') {
	 		$this->db->where("id_pendidikan",$param['id_pendidikan']);
	 	}
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan<>3",NULL,FALSE);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}
	
	

 	function get_stat($jk,$id_pendidikan) {
		$this->db->where("hidup_mati","1")
		->where("status_kependudukan<>3",NULL,FALSE);
		$this->db->where("jk",$jk)->where("id_pendidikan",$id_pendidikan);
		$res = $this->db->get("v_penduduk");
		return $res->num_rows();
	}




	function stat_penduduk_pendidikan(){
	 	$sql="SELECT 
	 			SUM(IF(id_pendidikan='37' AND jk='l',1,0)) AS SLTA_l 
        		,SUM(IF(id_pendidikan='37' AND jk='p',1,0)) AS SLTA_p
        		,SUM(IF(id_pendidikan='37',1,0)) AS SLTA

        		,SUM(IF(id_pendidikan='50' AND jk='l',1,0)) AS belum_sekolah_l 
        		,SUM(IF(id_pendidikan='50' AND jk='p',1,0)) AS belum_sekolah_p
        		,SUM(IF(id_pendidikan='50',1,0)) AS belum_sekolah

        		,SUM(IF(id_pendidikan='52' AND jk='l',1,0)) AS belum_tamat_sd_l 
        		,SUM(IF(id_pendidikan='52' AND jk='p',1,0)) AS belum_tamat_sd_p
        		,SUM(IF(id_pendidikan='52',1,0)) AS belum_tamat_sd

        		,SUM(IF(id_pendidikan='53' AND jk='l',1,0)) AS tamat_sd_l 
        		,SUM(IF(id_pendidikan='53' AND jk='p',1,0)) AS tamat_sd_p
        		,SUM(IF(id_pendidikan='53',1,0)) AS tamat_sd

        		,SUM(IF(id_pendidikan='56' AND jk='l',1,0)) AS SLTP_l 
        		,SUM(IF(id_pendidikan='56' AND jk='p',1,0)) AS SLTP_p
        		,SUM(IF(id_pendidikan='56',1,0)) AS SLTP

        		,SUM(IF(id_pendidikan='907' AND jk='l',1,0)) AS sedang_SLTP_l 
        		,SUM(IF(id_pendidikan='907' AND jk='p',1,0)) AS sedang_SLTP_p
        		,SUM(IF(id_pendidikan='907',1,0)) AS sedang_SLTP

        		,SUM(IF(id_pendidikan='89' AND jk='l',1,0)) AS diploma_1_l 
        		,SUM(IF(id_pendidikan='89' AND jk='p',1,0)) AS diploma_1_p
        		,SUM(IF(id_pendidikan='89',1,0)) AS diploma_1

        		,SUM(IF(id_pendidikan='91' AND jk='l',1,0)) AS DIPLOMA_3_l 
        		,SUM(IF(id_pendidikan='91' AND jk='p',1,0)) AS DIPLOMA_3_p
        		,SUM(IF(id_pendidikan='91',1,0)) AS DIPLOMA_3

        		,SUM(IF(id_pendidikan='95' AND jk='l',1,0)) AS diploma_4_l 
        		,SUM(IF(id_pendidikan='95' AND jk='p',1,0)) AS diploma_4_p
        		,SUM(IF(id_pendidikan='95',1,0)) AS diploma_4

        		,SUM(IF(id_pendidikan='97' AND jk='l',1,0)) AS S2_l 
        		,SUM(IF(id_pendidikan='97' AND jk='p',1,0)) AS S2_p
        		,SUM(IF(id_pendidikan='97',1,0)) AS S2

        		,SUM(IF(id_pendidikan='904' AND jk='l',1,0)) AS tidak_tamat_sd_l 
        		,SUM(IF(id_pendidikan='904' AND jk='p',1,0)) AS tidak_tamat_sd_p
        		,SUM(IF(id_pendidikan='904',1,0)) AS tidak_tamat_sd

        		,SUM(IF(id_pendidikan='98' AND jk='l',1,0)) AS S3_l 
        		,SUM(IF(id_pendidikan='98' AND jk='p',1,0)) AS S3_p
        		,SUM(IF(id_pendidikan='98',1,0)) AS S3

        		
        		

        		FROM v_penduduk p
       			 WHERE p.hidup_mati='1' AND status_kependudukan NOT IN  ('3')";
				$res  = $this->db->query($sql);
				return $res;
	 }
	


	
}
