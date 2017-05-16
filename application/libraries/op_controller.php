<?php
class op_controller extends CI_Controller {
var $dusun; 
var $bentuk_lembaga;
var $id_desa; 
	function __construct() {
		parent::__construct();
		$this->load->model("core_model","cm");
		
		 
		$kode = $this->GetVolumeLabel()."1353590395393593";
		$register = md5($kode);
	 
		$this->db->where("register",$register);
		$x = $this->db->get("z_register")->num_rows();
		 
		
		if($this->session->userdata('operator_login') == false ) {
			redirect('home/');
		} 
		
		
		$this->id_desa = $this->session->userdata("id_desa");
		$desa = $this->cm->data_desa();
		$this->dusun = ($desa->bentuk_lembaga == "Kelurahan")?"Lingkungan":"Dusun";
		$this->bentuk_lembaga = $desa->bentuk_lembaga;
		//echo "bentuk lembaga  $bentuk_lembaga dusun $dusun";
		
	}

	function GetVolumeLabel() {
	  // Try to grab the volume name
	  if (preg_match('#Volume Serial Number is (.*)\n#i', shell_exec('dir c:'), $m)) {
	    $volname = ' ('.$m[1].')';
	  } else {
	    $volname = '';
	  }
	//return $volname;
	$serial =  str_replace("(","",str_replace(")","",$volname));
	$serial = md5($serial);
	$serial = substr(preg_replace("/[^0-9]/", '', $serial),0,4);
	return $serial;
	}


	function set_content($str) {
		$this->content['content'] = $str;
	}
	
	function set_title($str) {
		$this->content['title'] = $str;
	}
	
	function set_subtitle($str) {
		$this->content['subtitle'] = $str;
	}
	
	function render(){
		$arr = array();		 
		$this->load->view("operator_template",$this->content );
		
	}

	function format_header($arr_kolom,$baris) {
		
		foreach($arr_kolom as $kolom) : 

		 $this->excel->getActiveSheet()->getStyle($kolom . $baris)->applyFromArray(
            array(
            "borders" => array("top"		=>array('style'=>PHPExcel_Style_Border::BORDER_THIN),
												   "bottom"		=>array('style'=>PHPExcel_Style_Border::BORDER_THIN),
												   "left"		=>array('style'=>PHPExcel_Style_Border::BORDER_THIN),
												   "right"		=>array('style'=>PHPExcel_Style_Border::BORDER_THIN)),	
												   
            'font' => array(
            'name'         => 'Calibri',
            'bold'         => true,
            'italic'    => false,
            'size'        => 12
            ),
            'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            'wrap'       => true
            ) ) );
		endforeach;
	}

	
	
	//function format(array("arr_kolom"=>$arr_kolom,"bold"=>false,"baris"=>$baris)) {
	function format($arr) {
		foreach($arr['arr_kolom'] as $kolom) : 

		 $this->excel->getActiveSheet()->getStyle($kolom . $arr['baris'])->applyFromArray(
            array(
            "borders" => array("top"		=>array('style'=>PHPExcel_Style_Border::BORDER_THIN),
												   "bottom"		=>array('style'=>PHPExcel_Style_Border::BORDER_THIN),
												   "left"		=>array('style'=>PHPExcel_Style_Border::BORDER_THIN),
												   "right"		=>array('style'=>PHPExcel_Style_Border::BORDER_THIN)),	
												   
            'font' => array(
            'name'         => 'Calibri',
            'bold'         => $arr['bold'],
            'italic'    => false,
            'size'        => 12
            ),
            'alignment' => array(
            'horizontal' => isset($arr['align'])?PHPExcel_Style_Alignment::HORIZONTAL_CENTER:PHPExcel_Style_Alignment::HORIZONTAL_LEFT ,
            'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            'wrap'       => true
            ) ) );
		endforeach;
	}

	function format_baris($arr_kolom,$baris) {
		
		foreach($arr_kolom as $kolom) : 

		 $this->excel->getActiveSheet()->getStyle($kolom . $baris)->applyFromArray(
            array(
            "borders" => array("top"		=>array('style'=>PHPExcel_Style_Border::BORDER_THIN),
												   "bottom"		=>array('style'=>PHPExcel_Style_Border::BORDER_THIN),
												   "left"		=>array('style'=>PHPExcel_Style_Border::BORDER_THIN),
												   "right"		=>array('style'=>PHPExcel_Style_Border::BORDER_THIN)),	
												   
            'font' => array(
            'name'         => 'Calibri',
            'bold'         => false,
            'italic'    => false,
            'size'        => 12
            ),
            'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
            'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            'wrap'       => true
            ) ) );
		endforeach;
	}
 
 	function format_center($arr_kolom,$baris) {
		
		foreach($arr_kolom as $kolom) : 

		 $this->excel->getActiveSheet()->getStyle($kolom . $baris)->applyFromArray(
            array(
            								   
            'font' => array(
            'name'         => 'Calibri',
            'bold'         => false,
            'italic'    => false,
            'size'        => 12
            ),
            'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            'wrap'       => true
            ) ) );
		endforeach;
	}

	function format_center_line($arr_kolom,$baris) {
		
		foreach($arr_kolom as $kolom) : 

		 $this->excel->getActiveSheet()->getStyle($kolom . $baris)->applyFromArray(
            array(
             "borders" => array("top"		=>array('style'=>PHPExcel_Style_Border::BORDER_THIN),
												   "bottom"		=>array('style'=>PHPExcel_Style_Border::BORDER_THIN),
												   "left"		=>array('style'=>PHPExcel_Style_Border::BORDER_THIN),
												   "right"		=>array('style'=>PHPExcel_Style_Border::BORDER_THIN)),	
													   
            'font' => array(
            'name'         => 'Calibri',
            'bold'         => false,
            'italic'    => false,
            'size'        => 12
            ),
            'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            'wrap'       => true
            ) ) );
		endforeach;
	}

}

?>