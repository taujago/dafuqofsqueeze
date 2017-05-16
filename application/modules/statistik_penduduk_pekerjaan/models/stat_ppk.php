<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class stat_ppk extends CI_Model 
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

	 	if($param['id_pekerjaan']<>'x') {
	 		$this->db->where("id_pekerjaan",$param['id_pekerjaan']);
	 	}
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan<>3",NULL,FALSE);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}
	
	 function get_data_15($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
		// $this->db->where("status","1");
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);

	 	 $this->db->where("p.umur >= 15",NULL,false);

	 	  $this->db->where("id_pekerjaan > 1",NULL,false);

	 	if($param['id_pekerjaan']<>'x') {
	 		$this->db->where("id_pekerjaan",$param['id_pekerjaan']);
	 	}
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan<>3",NULL,FALSE);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}
	
	 function get_data_petani($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);


	 	  // $this->db->where("id_pekerjaan =9 ",NULL,false);

	  $this->db->where("id_pekerjaan in ('9','20')",NULL,false);


	 	if($param['id_pekerjaan']<>'x') {
	 		$this->db->where("id_pekerjaan",$param['id_pekerjaan']);
	 	}
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan<>3",NULL,FALSE);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}

 function get_data_non_petani($param)
	{		
		 
		$this->db->select('*')->from('v_penduduk p');
		 
	  
	 	$this->db->where('p.id_desa',$param['id_desa']);


	 	  // $this->db->where("id_pekerjaan >1 AND ID_PEKERjaan <9 OR id_pekerjaan >9 ",NULL,false);

	 	  $this->db->where("id_pekerjaan not in  ('9','1')",NULL,false);


	 	if($param['id_pekerjaan']<>'x') {
	 		$this->db->where("id_pekerjaan",$param['id_pekerjaan']);
	 	}
		
		$this->db->where("hidup_mati",1)->where("status_kependudukan<>3",NULL,FALSE);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
        ($param['sort_by'] != null) ? $this->db->order_by($param['sort_by'], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		//echo $this->db->last_query();
 		return $res;
	}




 	function get_stat($jk) {
		$this->db->where("hidup_mati","1")
		->where("status_kependudukan<>3",NULL,FALSE);
		$this->db->where("jk",$jk);
		$res = $this->db->get("v_penduduk");
		return $res->num_rows();
	}
	
	
	function get_penduduk_perdusun($id_dusun) {
		$this->db->where("id_dusun",$id_dusun);
		$this->db->where("hidup_mati","1");
		$this->db->where("status_kependudukan <> '3'",NULL,FALSE);
		$res = $this->db->get("v_penduduk");
		return $res;
	}
	


		function get_stat_petani($jk) {
		$this->db->where("hidup_mati","1")
		->where("status_kependudukan <> 3",NULL, false)->where("id_pekerjaan in  ('9','20')",NULL,FALSE);
		$this->db->where("jk",$jk);
		$res = $this->db->get("v_penduduk");
		return $res->num_rows();
	}
	
		function get_stat_non_petani($jk) {
		$this->db->where("hidup_mati","1")
		->where("status_kependudukan <> 3",NULL, false)
		->where("id_pekerjaan not in  ('9','1')",NULL,FALSE);
		$this->db->where("jk",$jk);
		$res = $this->db->get("v_penduduk");
		return $res->num_rows();
	}
	

	function stat_penduduk_pekerjaan(){
	 	$sql="SELECT 
	 			SUM(IF(id_pekerjaan='84' AND jk='l',1,0)) AS pedagang_l 
        		,SUM(IF(id_pekerjaan='84' AND jk='p',1,0)) AS pedagang_p
        		,SUM(IF(id_pekerjaan='84',1,0)) AS pedagang

        		,SUM(IF(id_pekerjaan='1' AND jk='l',1,0)) AS belum_l 
        		,SUM(IF(id_pekerjaan='1' AND jk='p',1,0)) AS belum_p
        		,SUM(IF(id_pekerjaan='1',1,0)) AS belum

        		,SUM(IF(id_pekerjaan='73' AND jk='l',1,0)) AS bidan_l 
        		,SUM(IF(id_pekerjaan='73' AND jk='p',1,0)) AS bidan_p
        		,SUM(IF(id_pekerjaan='73',1,0)) AS bidan

        		,SUM(IF(id_pekerjaan='19' AND jk='l',1,0)) AS buruh_harian_l 
        		,SUM(IF(id_pekerjaan='19' AND jk='p',1,0)) AS buruh_harian_p
        		,SUM(IF(id_pekerjaan='19',1,0)) AS buruh_harian

        		,SUM(IF(id_pekerjaan='22' AND jk='l',1,0)) AS buruh_peternakan_l 
        		,SUM(IF(id_pekerjaan='22' AND jk='p',1,0)) AS buruh_peternakan_p
        		,SUM(IF(id_pekerjaan='22',1,0)) AS buruh_peternakan

        		,SUM(IF(id_pekerjaan='20' AND jk='l',1,0)) AS buruh_tani_l 
        		,SUM(IF(id_pekerjaan='20' AND jk='p',1,0)) AS buruh_tani_p
        		,SUM(IF(id_pekerjaan='20',1,0)) AS buruh_tani

        		,SUM(IF(id_pekerjaan='64' AND jk='l',1,0)) AS dosen_l 
        		,SUM(IF(id_pekerjaan='64' AND jk='p',1,0)) AS dosen_p
        		,SUM(IF(id_pekerjaan='64',1,0)) AS dosen

        		,SUM(IF(id_pekerjaan='65' AND jk='l',1,0)) AS guru_l 
        		,SUM(IF(id_pekerjaan='65' AND jk='p',1,0)) AS guru_p
        		,SUM(IF(id_pekerjaan='65',1,0)) AS guru

        		,SUM(IF(id_pekerjaan='12' AND jk='l',1,0)) AS industri_l 
        		,SUM(IF(id_pekerjaan='12' AND jk='p',1,0)) AS industri_p
        		,SUM(IF(id_pekerjaan='12',1,0)) AS industri

        		,SUM(IF(id_pekerjaan='16' AND jk='l',1,0)) AS bumn_l 
        		,SUM(IF(id_pekerjaan='16' AND jk='p',1,0)) AS bumn_p
        		,SUM(IF(id_pekerjaan='16',1,0)) AS bumn

        		,SUM(IF(id_pekerjaan='18' AND jk='l',1,0)) AS honorer_l 
        		,SUM(IF(id_pekerjaan='18' AND jk='p',1,0)) AS honorer_p
        		,SUM(IF(id_pekerjaan='18',1,0)) AS honorer

        		,SUM(IF(id_pekerjaan='15' AND jk='l',1,0)) AS swasta_l 
        		,SUM(IF(id_pekerjaan='15' AND jk='p',1,0)) AS swasta_p
        		,SUM(IF(id_pekerjaan='15',1,0)) AS swasta

        		,SUM(IF(id_pekerjaan='86' AND jk='l',1,0)) AS kades_l 
        		,SUM(IF(id_pekerjaan='86' AND jk='p',1,0)) AS kades_p
        		,SUM(IF(id_pekerjaan='86',1,0)) AS kades

        		,SUM(IF(id_pekerjaan='2' AND jk='l',1,0)) AS irt_l 
        		,SUM(IF(id_pekerjaan='2' AND jk='p',1,0)) AS irt_p
        		,SUM(IF(id_pekerjaan='2',1,0)) AS irt

        		,SUM(IF(id_pekerjaan='3' AND jk='l',1,0)) AS pelajar_l 
        		,SUM(IF(id_pekerjaan='3' AND jk='p',1,0)) AS pelajar_p
        		,SUM(IF(id_pekerjaan='3',1,0)) AS pelajar

        		,SUM(IF(id_pekerjaan='79' AND jk='l',1,0)) AS pelaut_l 
        		,SUM(IF(id_pekerjaan='79' AND jk='p',1,0)) AS pelaut_p
        		,SUM(IF(id_pekerjaan='79',1,0)) AS pelaut

        		,SUM(IF(id_pekerjaan='23' AND jk='l',1,0)) AS pembantu_l 
        		,SUM(IF(id_pekerjaan='23' AND jk='p',1,0)) AS pembantu_p
        		,SUM(IF(id_pekerjaan='23',1,0)) AS pembantu

        		,SUM(IF(id_pekerjaan='42' AND jk='l',1,0)) AS pendeta_l 
        		,SUM(IF(id_pekerjaan='42' AND jk='p',1,0)) AS pendeta_p
        		,SUM(IF(id_pekerjaan='42',1,0)) AS pendeta

        		,SUM(IF(id_pekerjaan='4' AND jk='l',1,0)) AS pensiunan_l 
        		,SUM(IF(id_pekerjaan='4' AND jk='p',1,0)) AS pensiunan_p
        		,SUM(IF(id_pekerjaan='4',1,0)) AS pensiunan

        		,SUM(IF(id_pekerjaan='85' AND jk='l',1,0)) AS perangkat_desa_l 
        		,SUM(IF(id_pekerjaan='85' AND jk='p',1,0)) AS perangkat_desa_p
        		,SUM(IF(id_pekerjaan='85',1,0)) AS perangkat_desa


        		,SUM(IF(id_pekerjaan='74' AND jk='l',1,0)) AS perawat_l 
        		,SUM(IF(id_pekerjaan='74' AND jk='p',1,0)) AS perawat_p
        		,SUM(IF(id_pekerjaan='74',1,0)) AS perawat

        		,SUM(IF(id_pekerjaan='8' AND jk='l',1,0)) AS perdagangan_l 
        		,SUM(IF(id_pekerjaan='8' AND jk='p',1,0)) AS perdagangan_p
        		,SUM(IF(id_pekerjaan='8',1,0)) AS perdagangan

        		,SUM(IF(id_pekerjaan='9' AND jk='l',1,0)) AS pertanian_l 
        		,SUM(IF(id_pekerjaan='9' AND jk='p',1,0)) AS pertanian_p
        		,SUM(IF(id_pekerjaan='9',1,0)) AS pertanian

        		,SUM(IF(id_pekerjaan='10' AND jk='l',1,0)) AS peternak_l 
        		,SUM(IF(id_pekerjaan='10' AND jk='p',1,0)) AS peternak_p
        		,SUM(IF(id_pekerjaan='10',1,0)) AS peternak

        		,SUM(IF(id_pekerjaan='81' AND jk='l',1,0)) AS sopir_l 
        		,SUM(IF(id_pekerjaan='81' AND jk='p',1,0)) AS sopir_p
        		,SUM(IF(id_pekerjaan='81',1,0)) AS sopir

        		,SUM(IF(id_pekerjaan='14' AND jk='l',1,0)) AS transportasi_l 
        		,SUM(IF(id_pekerjaan='14' AND jk='p',1,0)) AS transportasi_p
        		,SUM(IF(id_pekerjaan='14',1,0)) AS transportasi

        		,SUM(IF(id_pekerjaan='26' AND jk='l',1,0)) AS tukang_batu_l 
        		,SUM(IF(id_pekerjaan='26' AND jk='p',1,0)) AS tukang_batu_p
        		,SUM(IF(id_pekerjaan='26',1,0)) AS tukang_batu

        		,SUM(IF(id_pekerjaan='30' AND jk='l',1,0)) AS tukang_jahit_l 
        		,SUM(IF(id_pekerjaan='30' AND jk='p',1,0)) AS tukang_jahit_p
        		,SUM(IF(id_pekerjaan='30',1,0)) AS tukang_jahit

        		,SUM(IF(id_pekerjaan='27' AND jk='l',1,0)) AS tukang_kayu_l 
        		,SUM(IF(id_pekerjaan='27' AND jk='p',1,0)) AS tukang_kayu_p
        		,SUM(IF(id_pekerjaan='27',1,0)) AS tukang_kayu

        		,SUM(IF(id_pekerjaan='5' AND jk='l',1,0)) AS pns_l 
        		,SUM(IF(id_pekerjaan='5' AND jk='p',1,0)) AS pns_p
        		,SUM(IF(id_pekerjaan='5',1,0)) AS pns

        		,SUM(IF(id_pekerjaan='88' AND jk='l',1,0)) AS wiraswasta_l 
        		,SUM(IF(id_pekerjaan='88' AND jk='p',1,0)) AS wiraswasta_p
        		,SUM(IF(id_pekerjaan='88',1,0)) AS wiraswasta
        		
        		
        		

        		FROM v_penduduk2 p
       			 WHERE p.hidup_mati='1' AND status_kependudukan NOT IN  ('3')";
				$res  = $this->db->query($sql);
				return $res;
	 }
	


	function stat_penduduk_petani(){
	 	$sql="SELECT 
	 			SUM(IF(id_pekerjaan in ('9','20') AND jk='l',1,0)) AS petani_l 
        		,SUM(IF(id_pekerjaan in ('9','20') AND jk='p',1,0)) AS petani_p
        		,SUM(IF(id_pekerjaan in ('9','20'),1,0)) AS petani

        		,SUM(IF(id_pekerjaan not in  ('9','1') AND jk='l',1,0)) AS non_petani_l 
        		,SUM(IF(id_pekerjaan not in  ('9','1') AND jk='p',1,0)) AS non_petani_p
        		,SUM(IF(id_pekerjaan not in  ('9','1') ,1,0)) AS non_petani

        		

        		FROM v_penduduk2 p
       			 WHERE p.hidup_mati='1' AND status_kependudukan NOT IN  ('3')";
				$res  = $this->db->query($sql);
				return $res;
	 }
	
	
}
