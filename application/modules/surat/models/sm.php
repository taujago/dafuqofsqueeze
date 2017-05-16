<?php 

class sm extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	
	function data_menu($q) {
		$this->db->order_by("menu");
		$this->db->like("menu",$q);

		$res = $this->db->get("master_menu_surat");
		return $res;
	}
	
	
	}
?>