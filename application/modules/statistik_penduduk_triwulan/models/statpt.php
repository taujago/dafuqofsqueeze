<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class statpt extends CI_Model 
{


	function __construct()
	{
		parent::__construct();
       // $this->_table = 'country';
		$this->load->model("add_model","add");
	}
    
	function jumlah_penduduk($bulan) {
		$tahun = date("Y");
		$bulan2=$bulan+2;
		$last_date = $this->add->last_date($bulan2,$tahun);
		$sql="
			SELECT p.`dusun`, 
			 IFNULL(SUM(IF(warga_negara='WNI' AND jk='L',1,0)),0) AS wni_l 
			,IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p
			,IFNULL(SUM(IF(warga_negara='WNI',1,0)),0) AS wni_total
			
			,IFNULL(SUM(IF(warga_negara='WNA' AND jk='L',1,0)),0) AS wna_l 
			,IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p
			,IFNULL(SUM(IF(warga_negara='WNA' ,1,0)),0) AS wna_total
			  
			from  v_penduduk_aktif p  
			
			WHERE  regdate <= '$last_date' 
			GROUP BY p.`dusun` order by p.dusun ";
		$res = $this->db->query($sql);
		// echo $this->db->last_query(); exit;
		return $res;
		
	}
	
	  
	function jumlah_kk($bulan) {
		$tahun = date("Y");
		$bulan2=$bulan+2;
		// $sql="
		// 	SELECT d.`id_dusun`,d.dusun, 
		// 	IFNULL(SUM(IF(warga_negara='WNI' AND jk='L',1,0)),0) AS wni_l 
		// 	,IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p
		// 	,IFNULL(SUM(IF(warga_negara='WNI',1,0)),0) AS wni_total
			
		// 	,IFNULL(SUM(IF(warga_negara='WNA' AND jk='L',1,0)),0) AS wna_l 
		// 	,IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p
		// 	 ,IFNULL(SUM(IF(warga_negara='WNA' ,1,0)),0) AS wna_total
		// 	FROM 
		// 	tiger_dusun d LEFT JOIN kk ON d.`id_dusun` = kk.`id_dusun`
		// 	LEFT JOIN v_penduduk_aktif p ON kk.`id_penduduk` = p.`id_penduduk`
		// 	WHERE   YEAR(regdate) <= $tahun  
		// 	 AND MONTH(regdate)<= $bulan2 
		// 	OR p.`id_penduduk` IS NULL
		// 	GROUP BY id_dusun order by  d.dusun  ";
		$last_date = $this->add->last_date($bulan2,$tahun);
		/*$sql = "SELECT dusun
				,SUM(wni_l) wni_l, SUM(wni_p) wni_p ,SUM(wni_total) wni_total  
				,SUM(wna_l) wna_l, SUM(wna_p) wna_p ,SUM(wna_total) wna_total    
				FROM (			
				SELECT  p.dusun,  
				 IF(warga_negara='WNI' AND jk='L',1,0) wni_l 
				,IF(warga_negara='WNI' AND jk='P',1,0) wni_p
				,IF(warga_negara='WNI',1,0) wni_total

				, IF(warga_negara='WNA' AND jk='L',1,0) wna_l 
				,IF(warga_negara='WNA' AND jk='P',1,0) wna_p
				,IF(warga_negara='WNA',1,0) wna_total
				FROM  v_penduduk_aktif p 
				 
				WHERE p.kepala_keluarga = 1 
				and regdate <= $last_date  ) xx 
				GROUP BY xx.dusun "; */
		$sql = "SELECT dusun, 
				COUNT(IF(warga_negara='WNI' AND jk='L',1,null)) wni_l ,
				COUNT(IF(warga_negara='WNI' AND jk='P',1,null)) wni_p ,
				COUNT(IF(warga_negara='WNI',1,null)) wni_total ,
				 
				COUNT(IF(warga_negara='WNA' AND jk='L',1,null)) wna_l ,
				COUNT(IF(warga_negara='WNA' AND jk='P',1,null)) wna_p ,
				COUNT(IF(warga_negara='WNA',1,null)) wna_total 
				FROM penduduk p 
				 WHERE p.kepala_keluarga = 1 
				AND regdate <= '$last_date' 
				GROUP BY dusun "; 
			$res = $this->db->query($sql);
			// echo $this->db->last_query(); exit;
		return $res;
		
	}
	
	function jumlah_wajib_kk($bulan) {
		$tahun = date("Y");
		$bulan2=$bulan+2;
		$last_date = $this->add->last_date($bulan2,$tahun);
		 
		$sql = "SELECT dusun
				,SUM(wni_l) wni_l, SUM(wni_p) wni_p ,SUM(wni_total) wni_total  
				,SUM(wna_l) wna_l, SUM(wna_p) wna_p ,SUM(wna_total) wna_total    
				FROM (			
				SELECT p.dusun,  
				 IF(warga_negara='WNI' AND jk='L',1,0) wni_l 
				,IF(warga_negara='WNI' AND jk='P',1,0) wni_p
				,IF(warga_negara='WNI',1,0) wni_total

				, IF(warga_negara='WNA' AND jk='L',1,0) wna_l 
				,IF(warga_negara='WNA' AND jk='P',1,0) wna_p
				,IF(warga_negara='WNA',1,0) wna_total
				FROM  v_penduduk_aktif p 
			 
				WHERE p.kepala_keluarga = 1 
				and regdate <= '$last_date'  ) xx 
				GROUP BY xx.dusun "; 
		$res = $this->db->query($sql);
		return $res;
		
	}
	
	function jumlah_punya_kk($bulan) {
		$tahun = date("Y");
		$bulan2=$bulan+2;
		$last_date = $this->add->last_date($bulan2,$tahun);
		$sql="
			SELECT  p.`dusun`, 
				 IFNULL(SUM(IF(warga_negara='WNI' AND jk='L',1,0)),0) AS wni_l 
				,IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p
				,IFNULL(SUM(IF(warga_negara='WNI',1,0)),0) AS wni_total
				
				,IFNULL(SUM(IF(warga_negara='WNA' AND jk='L',1,0)),0) AS wna_l 
				,IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p
				,IFNULL(SUM(IF(warga_negara='WNA' ,1,0)),0) AS wna_total
				 FROM  v_penduduk_aktif  
				 LEFT JOIN kk_anggota kk ON kk.`id_penduduk` =  p.`id_penduduk`
				  WHERE   regdate <= 'last_date';
				  OR p.`id_penduduk` IS NULL 
				GROUP BY p.`dusun` order  by p.dusun ";
		$res = $this->db->query($sql);
		return $res;
		
	}
	
	
	function jumlah_belum_punya_kk($bulan) {
		$tahun = date("Y");
		$bulan2=$bulan+2;
		$last_date = $this->add->last_date($bulan2,$tahun);
		// $sql="
		// 	SELECT  d.`id_dusun`, d.`dusun`, 
		// 		 IFNULL(SUM(IF(warga_negara='WNI' AND jk='L',1,0)),0) AS wni_l 
		// 		,IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p
		// 		,IFNULL(SUM(IF(warga_negara='WNI',1,0)),0) AS wni_total
				
		// 		,IFNULL(SUM(IF(warga_negara='WNA' AND jk='L',1,0)),0) AS wna_l 
		// 		,IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p
		// 		,IFNULL(SUM(IF(warga_negara='WNA' ,1,0)),0) AS wna_total
		// 		 FROM tiger_dusun d
		// 		 LEFT JOIN v_penduduk_belum_kk p ON d.`id_dusun`=p.`id_dusun`
		// 		   WHERE  YEAR(regdate) <= $tahun  
		// 		  AND MONTH(regdate)<= $bulan2
		// 		  OR p.`id_penduduk` IS NULL 
		// 		GROUP BY d.`id_dusun` order  by d.dusun ";
		$sql = "
				SELECT dusun
				,SUM(wni_l) wni_l, SUM(wni_p) wni_p ,SUM(wni_total) wni_total  
				,SUM(wna_l) wna_l, SUM(wna_p) wna_p ,SUM(wna_total) wna_total    
				FROM (			
				SELECT p.dusun,  
				 IF(warga_negara='WNI' AND jk='L',1,0) wni_l 
				,IF(warga_negara='WNI' AND jk='P',1,0) wni_p
				,IF(warga_negara='WNI',1,0) wni_total

				, IF(warga_negara='WNA' AND jk='L',1,0) wna_l 
				,IF(warga_negara='WNA' AND jk='P',1,0) wna_p
				,IF(warga_negara='WNA',1,0) wna_total
				FROM v_penduduk_aktif p 				
				WHERE p.kepala_keluarga = 1 
				and regdate <= '$last_date'
				AND p.id_penduduk  NOT IN (SELECT id_penduduk FROM kk_anggota)

				) xx 
				GROUP BY xx.dusun ";
		$res = $this->db->query($sql);
		// echo $this->db->last_query(); exit; 
		return $res;
		
	}

function jumlah_telah_punya_kk($bulan) {
		$tahun = date("Y");
		$bulan2=$bulan+2;
		$last_date = $this->add->last_date($bulan2,$tahun);
		// $sql="
		// 	SELECT  d.`id_dusun`, d.`dusun`, 
		// 		 IFNULL(SUM(IF(warga_negara='WNI' AND jk='L',1,0)),0) AS wni_l 
		// 		,IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p
		// 		,IFNULL(SUM(IF(warga_negara='WNI',1,0)),0) AS wni_total
				
		// 		,IFNULL(SUM(IF(warga_negara='WNA' AND jk='L',1,0)),0) AS wna_l 
		// 		,IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p
		// 		,IFNULL(SUM(IF(warga_negara='WNA' ,1,0)),0) AS wna_total
		// 		 FROM tiger_dusun d
		// 		 LEFT JOIN v_penduduk_belum_kk p ON d.`id_dusun`=p.`id_dusun`
		// 		   WHERE  YEAR(regdate) <= $tahun  
		// 		  AND MONTH(regdate)<= $bulan2
		// 		  OR p.`id_penduduk` IS NULL 
		// 		GROUP BY d.`id_dusun` order  by d.dusun ";
		$sql = "
				SELECT dusun
				,SUM(wni_l) wni_l, SUM(wni_p) wni_p ,SUM(wni_total) wni_total  
				,SUM(wna_l) wna_l, SUM(wna_p) wna_p ,SUM(wna_total) wna_total    
				FROM (			
				SELECT p.dusun,  
				 IF(warga_negara='WNI' AND jk='L',1,0) wni_l 
				,IF(warga_negara='WNI' AND jk='P',1,0) wni_p
				,IF(warga_negara='WNI',1,0) wni_total

				,IF(warga_negara='WNA' AND jk='L',1,0) wna_l 
				,IF(warga_negara='WNA' AND jk='P',1,0) wna_p
				,IF(warga_negara='WNA',1,0) wna_total
				FROM v_penduduk_aktif p 
				
				WHERE p.kepala_keluarga = 1 
				AND  regdate <= '$last_date'
				AND p.id_penduduk  IN (SELECT id_penduduk FROM kk_anggota)

				) xx 
				GROUP BY xx.dusun ";
		$res = $this->db->query($sql);
		//echo $this->db->last_query();
		return $res;
		
	}

	
	function jumlah_wajib_ktp($bulan) {
		$tahun = date("Y");
		$bulan2=$bulan+2;
		$last_date = $this->add->last_date($bulan2,$tahun);
		$sql="
			SELECT p.`dusun`
			, IFNULL(SUM(IF(warga_negara='WNI' AND jk='L',1,0)),0) AS wni_l 
			,IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p 
			,IFNULL(SUM(IF(warga_negara='WNI',1,0)),0) AS wni_total 
			,IFNULL(SUM(IF(warga_negara='WNA' AND jk='L',1,0)),0) AS wna_l 
			,IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p 
			,IFNULL(SUM(IF(warga_negara='WNA' ,1,0)),0) AS wna_total 
			FROM  v_penduduk2 p 
			WHERE  regdate <= '$last_date'
			AND ( umur >= 17 OR status_kawin <> 's') 
			AND hidup_mati = '1' AND status_kependudukan <> '3'
			
			GROUP BY p.`dusun`  order  by p.dusun ";
		$res = $this->db->query($sql);
		//echo $this->db->last_query(); exit; 
		return $res;
		
	}
	
	
	function jumlah_punya_ktp($bulan) {
		$tahun = date("Y");
		$bulan2=$bulan+2;
		$last_date = $this->add->last_date($bulan2,$tahun);
		 
		$sql="
			SELECT p.`dusun`
			, IFNULL(SUM(IF(warga_negara='WNI' AND jk='L',1,0)),0) AS wni_l 
			,IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p 
			,IFNULL(SUM(IF(warga_negara='WNI',1,0)),0) AS wni_total 
			,IFNULL(SUM(IF(warga_negara='WNA' AND jk='L',1,0)),0) AS wna_l 
			,IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p 
			,IFNULL(SUM(IF(warga_negara='WNA' ,1,0)),0) AS wna_total 
			FROM   v_penduduk2 p  
			WHERE regdate <= '$last_date'
			AND ( umur >= 17 OR status_kawin <> '1' ) 
			AND hidup_mati = '1' AND status_kependudukan <> '3'
			and substr(nik, 1,3) <> '000' 
			GROUP BY p.`dusun`  order  by p.dusun ";


		$res = $this->db->query($sql);
		//echo $this->db->last_query();
		return $res;
		
	}
	
	
	function jumlah_belum_punya_ktp($bulan) {
		$tahun = date("Y");
		$bulan2=$bulan+2;
		$last_date = $this->add->last_date($bulan2,$tahun);
		 

		$sql="
			SELECT p.`dusun`
			, IFNULL(SUM(IF(warga_negara='WNI' AND jk='L',1,0)),0) AS wni_l 
			,IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p 
			,IFNULL(SUM(IF(warga_negara='WNI',1,0)),0) AS wni_total 
			,IFNULL(SUM(IF(warga_negara='WNA' AND jk='L',1,0)),0) AS wna_l 
			,IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p 
			,IFNULL(SUM(IF(warga_negara='WNA' ,1,0)),0) AS wna_total 
			FROM  v_penduduk2 p  
			WHERE YEAR(regdate) <= $tahun
			AND MONTH(regdate)<= $bulan2
			AND ( umur >= 17 OR status_kawin <> 's') 
			AND hidup_mati = '1' AND status_kependudukan <> '3'
			and substr(nik, 1,3) = '000' 
			GROUP BY p.`dusun`  order  by p.dusun ";
		$res = $this->db->query($sql);
		//echo $this->db->last_query();
		return $res;
		
	}
	
	
	function jumlah_kelahiran($bulan) {
		$tahun = date("Y");
		$bulan2=$bulan+2;
		$last_date = $this->add->last_date($bulan2,$tahun);
	/*	$sql="
			SELECT pp.`dusun`
			, IFNULL(SUM(IF(p.warga_negara='WNI' AND p.jk='L',1,0)),0) AS wni_l 
			,IFNULL(SUM(IF(p.warga_negara='WNI' AND p.jk='P',1,0)),0) AS wni_p 
			,IFNULL(SUM(IF(p.warga_negara='WNI',1,0)),0) AS wni_total 
			,IFNULL(SUM(IF(p.warga_negara='WNA' AND p.jk='L',1,0)),0) AS wna_l 
			,IFNULL(SUM(IF(p.warga_negara='WNA' AND p.jk='P',1,0)),0) AS wna_p 
			,IFNULL(SUM(IF(p.warga_negara='WNA' ,1,0)),0) AS wna_total 
			FROM   v_kelahiran  p  join penduduk pp on p.id_penduduk = p.id_penduduk
			 WHERE YEAR(p.`tgl_lahir2`) = $tahun 
			 AND ( MONTH(p.`tgl_lahir2`) BETWEEN $bulan AND $bulan2)
			
			GROUP BY pp.`dusun` ";
*/
	 $sql = "SELECT dusun, 
			COUNT(IF(warga_negara='WNI' AND jk='L',1,NULL)) wni_l ,
				COUNT(IF(warga_negara='WNI' AND jk='P',1,NULL)) wni_p ,
				COUNT(IF(warga_negara='WNI',1,NULL)) wni_total ,
				 
				COUNT(IF(warga_negara='WNA' AND jk='L',1,NULL)) wna_l ,
				COUNT(IF(warga_negara='WNA' AND jk='P',1,NULL)) wna_p ,
				COUNT(IF(warga_negara='WNA',1,NULL)) wna_total 
			FROM penduduk p 
			JOIN surat_kelahiran l  ON l.`id_penduduk`  = p.`id_penduduk`
			WHERE YEAR(p.`tgl_lahir`) = $tahun  AND  MONTH(p.`tgl_lahir`) BETWEEN $bulan AND $bulan2 

			GROUP BY dusun "; 
		$res = $this->db->query($sql);
		// echo $this->db->last_query(); 		echo mysql_error(); 		exit;
		return $res;
		
	}
	function jumlah_kematian($bulan) {
		$tahun = date("Y");
		$bulan2=$bulan+2;
	/*	$sql="
			SELECT p.`dusun`
				, IFNULL(SUM(IF(warga_negara='WNI' AND p.jk='L',1,0)),0) AS wni_l 
				,IFNULL(SUM(IF(warga_negara='WNI' AND p.jk='P',1,0)),0) AS wni_p 
				,IFNULL(SUM(IF(warga_negara='WNI',1,0)),0) AS wni_total 
				,IFNULL(SUM(IF(warga_negara='WNA' AND p.jk='L',1,0)),0) AS wna_l 
				,IFNULL(SUM(IF(warga_negara='WNA' AND p.jk='P',1,0)),0) AS wna_p 
				,IFNULL(SUM(IF(warga_negara='WNA' ,1,0)),0) AS wna_total 
				FROM v_kematian_1 p   
				 WHERE YEAR(p.`tgl_meninggal`) <= $tahun
				 AND ( MONTH(p.`tgl_meninggal`) BETWEEN $bulan AND $bulan2)
				
				GROUP BY p.`dusun`  order  by p.dusun ";*/

		$sql="SELECT dusun, 
			COUNT(IF(p.warga_negara='WNI' AND p.jk='L',1,NULL)) wni_l ,
			COUNT(IF(p.warga_negara='WNI' AND p.jk='P',1,NULL)) wni_p ,
			COUNT(IF(p.warga_negara='WNI',1,NULL)) wni_total ,
			 
			COUNT(IF(p.warga_negara='WNA' AND p.jk='L',1,NULL)) wna_l ,
			COUNT(IF(p.warga_negara='WNA' AND p.jk='P',1,NULL)) wna_p ,
			COUNT(IF(p.warga_negara='WNA',1,NULL)) wna_total 
			FROM penduduk p 
			JOIN v_kematian l  ON l.`id_penduduk`  = p.`id_penduduk`
			WHERE YEAR(l.`tgl_meninggal`) = $tahun AND  MONTH(l.`tgl_meninggal`) BETWEEN $bulan AND $bulan2 
			 
			GROUP BY dusun ";
		$res = $this->db->query($sql);
		//echo $this->db->last_query();
		return $res;
		
	}
	 /*function get_penduduk($bulan) {
	 
	 $tahun = date("Y");
	 $sql ="SELECT 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) AS wni_l, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p, 
			IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) AS wna_l, 
			IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) AS jml_l, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS jml_p , 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) 
			+ IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS total 
				
				
				FROM penduduk  
				WHERE hidup_mati = '1' AND status_kependudukan <> '3' 
				and MONTH(regdate) < $bulan and YEAR(regdate) = $tahun";
	 $res = $this->db->query($sql);
	// echo $this->db->last_query();
	 return $res->row();
	 }
	 
	 
	function get_lahir($bulan) {
	$tahun = date("Y");
	$sql ="SELECT 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) AS wni_l, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p, 
			IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) AS wna_l, 
			IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) AS jml_l, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS jml_p , 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) 
			+ IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS total 
			
			FROM penduduk p
			JOIN surat_kelahiran l ON p.id_penduduk = l.id_penduduk
			WHERE hidup_mati = '1' AND status_kependudukan <> '3' 
			AND MONTH(tgl_lahir) = $bulan AND YEAR(tgl_lahir) = $tahun";
	 $res = $this->db->query($sql);
	// echo $this->db->last_query();
	 return $res->row();
	}
	
	function get_mati($bulan) {
			$tahun = date("Y");

		$sql = "SELECT 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) AS wni_l, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p, 
			IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) AS wna_l, 
			IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) AS jml_l, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS jml_p , 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) 
			+ IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS total 
			
			FROM penduduk p
			 JOIN surat_kematian l ON p.id_penduduk = l.id_penduduk
			 WHERE status_kependudukan <> '3' AND hidup_mati = '0'
			AND MONTH(l.tgl_meninggal) = $bulan
			 AND YEAR(l.tgl_meninggal) = $tahun";
		 $res = $this->db->query($sql);
		// echo $this->db->last_query();
		 return $res->row();
	}
	
	function get_datang($bulan) {
		$tahun = date("Y");
		$sql="SELECT 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) AS wni_l, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p, 
			IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) AS wna_l, 
			IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) AS jml_l, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS jml_p , 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) 
			+ IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS total 
			
			FROM penduduk p
			  
			 WHERE status_kependudukan ='2' AND hidup_mati = '1'
			AND MONTH(p.regdate) = $bulan 
			AND YEAR(p.regdate) = $tahun"; 
			$res = $this->db->query($sql);
		// echo $this->db->last_query();
			return $res->row();
	}
	
	
	
	function get_pindah($bulan){
	$tahun = date("Y");
	$sql="SELECT 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) AS wni_l, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p, 
			IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) AS wna_l, 
			IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) AS jml_l, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS jml_p , 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) 
			+ IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS total 
			
			FROM penduduk p JOIN v_surat_pindah sp ON p.id_penduduk = sp.id_penduduk
			  
			 WHERE status_kependudukan ='3'  
			AND MONTH(sp.tgl_pindah) = $bulan 
			AND YEAR(sp.tgl_pindah) = $tahun";
		$res = $this->db->query($sql);
		// echo $this->db->last_query();
			return $res->row();
	}
	
	
	 function get_sekarang($bulan) {
	 
	 $tahun = date("Y");
	 $sql ="SELECT 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) AS wni_l, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p, 
			IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) AS wna_l, 
			IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) AS jml_l, 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS jml_p , 
			IFNULL(SUM(IF(warga_negara='WNI' AND jk='l',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='l',1,0)),0) 
			+ IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) + IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS total 
				
				
				FROM penduduk  
				WHERE hidup_mati = '1' AND status_kependudukan <> '3' 
				and MONTH(regdate) <= $bulan and YEAR(regdate) = $tahun";
	 $res = $this->db->query($sql);
	// echo $this->db->last_query();
	 return $res->row();
	 }
	 
	 function pendatang_antar_desa($bulan) {
		 $tahun = date("Y");
	 	$sql="SELECT 
				SUM(IF(warga_negara='WNI' AND jk='L',1,0)) AS wni_l 
				,SUM(IF(warga_negara='WNI' AND jk='P',1,0)) AS wni_p
				
				,SUM(IF(warga_negara='WNA' AND jk='L',1,0)) AS wna_l 
				,SUM(IF(warga_negara='WNA' AND jk='P',1,0)) AS wna_p
				FROM v_penduduk WHERE 
				id_kecamatan=id_kecamatan_sebelumnya AND id_desa <> id_desa_sebelumnya 
				and status_kependudukan='2'
				AND YEAR(regdate) = $tahun AND MONTH(regdate)=$bulan";
		$res = $this->db->query($sql);
		 //echo $this->db->last_query();
		 return $res->row();
	 }
	 
	 function pendatang_antar_kecamatan($bulan) {
		 $tahun = date("Y");
	 	$sql="SELECT 
				SUM(IF(warga_negara='WNI' AND jk='L',1,0)) AS wni_l 
				,SUM(IF(warga_negara='WNI' AND jk='P',1,0)) AS wni_p
				
				,SUM(IF(warga_negara='WNA' AND jk='L',1,0)) AS wna_l 
				,SUM(IF(warga_negara='WNA' AND jk='P',1,0)) AS wna_p
				FROM v_penduduk WHERE 
				 id_kota = id_kota_sebelumnya AND id_kecamatan<>id_kecamatan_sebelumnya
				and status_kependudukan='2'  
				AND YEAR(regdate) = $tahun AND MONTH(regdate)=$bulan";
		$res = $this->db->query($sql);
		// echo $this->db->last_query();
		 return $res->row();
	 }
	 
	function pendatang_antar_kota($bulan) {
		 $tahun = date("Y");
	 	$sql="SELECT 
				SUM(IF(warga_negara='WNI' AND jk='L',1,0)) AS wni_l 
				,SUM(IF(warga_negara='WNI' AND jk='P',1,0)) AS wni_p
				
				,SUM(IF(warga_negara='WNA' AND jk='L',1,0)) AS wna_l 
				,SUM(IF(warga_negara='WNA' AND jk='P',1,0)) AS wna_p
				FROM v_penduduk WHERE 
				id_kota <> id_kota_sebelumnya and id_provinsi = id_provinsi_sebelumnya
				and status_kependudukan='2'
				AND YEAR(regdate) = $tahun AND MONTH(regdate)=$bulan";
		$res = $this->db->query($sql);
		// echo $this->db->last_query();
		 return $res->row();
	 }	 
	 
	 function pendatang_antar_provinsi($bulan) {
		 $tahun = date("Y");
	 	$sql="SELECT 
				SUM(IF(warga_negara='WNI' AND jk='L',1,0)) AS wni_l 
				,SUM(IF(warga_negara='WNI' AND jk='P',1,0)) AS wni_p
				
				,SUM(IF(warga_negara='WNA' AND jk='L',1,0)) AS wna_l 
				,SUM(IF(warga_negara='WNA' AND jk='P',1,0)) AS wna_p
				FROM v_penduduk WHERE 
				id_provinsi <> id_provinsi_sebelumnya
				and status_kependudukan='2'
				AND YEAR(regdate) = $tahun AND MONTH(regdate)=$bulan";
		$res = $this->db->query($sql);
		// echo $this->db->last_query();
		 return $res->row();
	 }
	  function pendatang_antar_negara($bulan) {
		 $tahun = date("Y");
	 	$sql="SELECT 
				SUM(IF(warga_negara='WNI' AND jk='L',1,0)) AS wni_l 
				,SUM(IF(warga_negara='WNI' AND jk='P',1,0)) AS wni_p
				
				,SUM(IF(warga_negara='WNA' AND jk='L',1,0)) AS wna_l 
				,SUM(IF(warga_negara='WNA' AND jk='P',1,0)) AS wna_p
				FROM v_penduduk WHERE 
				jenis_kedatangan = 'ln'
				and status_kependudukan='2'
				AND YEAR(regdate) = $tahun AND MONTH(regdate)=$bulan";
		$res = $this->db->query($sql);
		// echo $this->db->last_query();
		 return $res->row();
	 }
	 
	 function pendatang_jumlah($bulan) {
		 $tahun = date("Y");
	 	$sql="SELECT 
				SUM(IF(warga_negara='WNI' AND jk='L',1,0)) AS wni_l 
				,SUM(IF(warga_negara='WNI' AND jk='P',1,0)) AS wni_p
				
				,SUM(IF(warga_negara='WNA' AND jk='L',1,0)) AS wna_l 
				,SUM(IF(warga_negara='WNA' AND jk='P',1,0)) AS wna_p
				FROM v_penduduk 
				WHERE 
				status_kependudukan = '2' 
				AND YEAR(regdate) = $tahun AND MONTH(regdate)=$bulan";
		$res = $this->db->query($sql);
		// echo $this->db->last_query();
		 return $res->row();
	 }
	 
	 
	 
	 function pindah_antar_desa($bulan) {
		 $tahun = date("Y");
	 	$sql="SELECT 
			SUM(IF(warga_negara='WNI' AND jk='L',1,0)) AS wni_l 
			,SUM(IF(warga_negara='WNI' AND jk='P',1,0)) AS wni_p
			
			,SUM(IF(warga_negara='WNA' AND jk='L',1,0)) AS wna_l 
			,SUM(IF(warga_negara='WNA' AND jk='P',1,0)) AS wna_p
			
			FROM 
			v_pindah_penduduk pp
			JOIN v_penduduk2 p ON p.id_penduduk = pp.`id_penduduk`
			WHERE  
			status_kependudukan = '3' 
			AND p.id_kecamatan=pp.id_kecamatan AND p.id_desa <> pp.id_desa
				AND YEAR(tgl_pindah) = $tahun AND MONTH(tgl_pindah)=$bulan";
		$res = $this->db->query($sql);
		//echo $this->db->last_query();
		 return $res->row();
	 }
	  
	 function pindah_antar_kecamatan($bulan) {
		 $tahun = date("Y");
	 	$sql="SELECT 
			SUM(IF(warga_negara='WNI' AND jk='L',1,0)) AS wni_l 
			,SUM(IF(warga_negara='WNI' AND jk='P',1,0)) AS wni_p
			
			,SUM(IF(warga_negara='WNA' AND jk='L',1,0)) AS wna_l 
			,SUM(IF(warga_negara='WNA' AND jk='P',1,0)) AS wna_p
			
			FROM 
			v_pindah_penduduk pp
			JOIN v_penduduk2 p ON p.id_penduduk = pp.`id_penduduk`
			WHERE  
			status_kependudukan = '3' 
			AND p.id_kota=pp.id_kota AND p.id_kecamatan <> pp.id_kecamatan
			AND YEAR(tgl_pindah) = $tahun AND MONTH(tgl_pindah)=$bulan";
		$res = $this->db->query($sql);
		 
		return $res->row();
	 }
	 
	 
	 function pindah_antar_kota($bulan) {
		 $tahun = date("Y");
	 	$sql="SELECT 
				IFNULL(SUM(IF(warga_negara='WNI' AND jk='L',1,0)),0) AS wni_l 
				,IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p
				
				,IFNULL(SUM(IF(warga_negara='WNA' AND jk='L',1,0)),0) AS wna_l 
				,IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p
				
				FROM 
				v_pindah_penduduk pp
				LEFT JOIN v_penduduk2 p ON p.id_penduduk = pp.`id_penduduk`
				WHERE  
				status_kependudukan = '3' 
				AND p.id_kota<>pp.id_kota AND p.id_provinsi = pp.id_provinsi
				AND YEAR(tgl_pindah) = $tahun AND MONTH(tgl_pindah)=$bulan ";
		$res = $this->db->query($sql);
		 
		return $res->row();
	 }
	 
	 
	 function pindah_antar_provinsi($bulan) {
		 $tahun = date("Y");
	 	$sql="SELECT 
				IFNULL(SUM(IF(warga_negara='WNI' AND jk='L',1,0)),0) AS wni_l 
				,IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p
				
				,IFNULL(SUM(IF(warga_negara='WNA' AND jk='L',1,0)),0) AS wna_l 
				,IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p
				
				FROM 
				v_pindah_penduduk pp
				LEFT JOIN v_penduduk2 p ON p.id_penduduk = pp.`id_penduduk`
				WHERE  
				status_kependudukan = '3' 
				  AND p.id_provinsi <> pp.id_provinsi
				AND YEAR(tgl_pindah) = $tahun AND MONTH(tgl_pindah)=$bulan";
		$res = $this->db->query($sql);
		 
		return $res->row();
	 }
	 
	  function pindah_antar_negara($bulan) {
		 $tahun = date("Y");
	 	$sql="SELECT 
				IFNULL(SUM(IF(warga_negara='WNI' AND jk='L',1,0)),0) AS wni_l 
				,IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p
				
				,IFNULL(SUM(IF(warga_negara='WNA' AND jk='L',1,0)),0) AS wna_l 
				,IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p
				
				FROM 
				v_pindah_penduduk pp
				LEFT JOIN v_penduduk2 p ON p.id_penduduk = pp.`id_penduduk`
				WHERE  
				status_kependudukan = '3' 
				AND pindah_jenis = 'ln' 
				 AND YEAR(tgl_pindah) = $tahun AND MONTH(tgl_pindah)=$bulan";
		$res = $this->db->query($sql);
		 
		return $res->row();
	 }
	 
	 
	  function pindah_jumlah($bulan) {
		 $tahun = date("Y");
	 	$sql="SELECT 
				IFNULL(SUM(IF(warga_negara='WNI' AND jk='L',1,0)),0) AS wni_l 
				,IFNULL(SUM(IF(warga_negara='WNI' AND jk='P',1,0)),0) AS wni_p
				
				,IFNULL(SUM(IF(warga_negara='WNA' AND jk='L',1,0)),0) AS wna_l 
				,IFNULL(SUM(IF(warga_negara='WNA' AND jk='P',1,0)),0) AS wna_p
				
				FROM 
				v_pindah_penduduk pp
				LEFT JOIN v_penduduk2 p ON p.id_penduduk = pp.`id_penduduk`
				WHERE  
				status_kependudukan = '3'  
				 AND YEAR(tgl_pindah) = $tahun AND MONTH(tgl_pindah)=$bulan";
		$res = $this->db->query($sql);
		 
		return $res->row();
	 }*/
}
