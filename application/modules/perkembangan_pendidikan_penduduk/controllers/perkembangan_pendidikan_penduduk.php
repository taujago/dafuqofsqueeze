<?php 
class perkembangan_pendidikan_penduduk extends op_controller {
	function __construct(){
		parent::__construct();
		$this->load->model("core_model","cm");
		//$this->load->model("pst","dm");
	}


	function index(){
		$form['controller'] = get_class($this);
		$cont = $form['controller'];
		
$form['title1'] = 'Tingkat pendidikan penduduk';
$form['title2'] = 'tingkat pendidikan';
$form['table'] = 'perkembangan_pendidikan_penduduk';
$form['id'] = 'perkembangan_pendidikan_penduduk';
$form['f1'] = 'tingkat_pendidikan';
$form['l1'] = 'Tingkat pendidikan';
$form['f2'] = 'jumlah';
$form['l2'] = 'Jumlah';
$form['f3'] = 'id_satuan_teks';
$form['l3'] = 'Satuan';
$form['arr3'] = $this->cm->arr_tabel("master_satuan","id_satuan","satuan","satuan");

//add
		$form['default'] = $form['f1'];
		$form['url'] = "grid/get_data";
		$content = $this->load->view("$cont/grid",$form,true);
		$this->load->view("$cont/grid_form",$form);
		$this->load->view("$cont/grid_js",$form);
		$this->load->view("$cont/grid_toolbar",$form);
		//$this->set_title($data['header']);
		$this->set_content($content);
		$this->render();
	}

}
?>