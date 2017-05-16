<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class metnis extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
       // $this->_table = 'country';
	}
    
	
	 function get_data($param)
	{		
		
 
		$sql="SELECT  suku , COUNT(IF(jk='L',1,NULL)) AS L, 
COUNT(IF(jk='P',1,NULL)) AS P, COUNT(*) AS total 

  FROM penduduk WHERE status_kependudukan <> '3' AND hidup_mati = '1' 
GROUP BY suku ";
		$res = $this->db->query($sql);
 		return $res;
	}
	
	
	
}
