<?php 
class profil_sarana_prasarana_kesehatan extends op_controller {
	function __construct(){
		parent::__construct();
		$this->load->model("core_model","cm");
		//$this->load->model("pst","dm");
	}


	function index(){
		$form['controller'] = get_class($this);
		
$form['title1'] = 'Prasarana kesehatan';
$form['title2'] = 'prasarana kesehatan';
$form['table'] = 'profil_sarana_prasarana_kesehatan';
$form['id'] = 'profil_sarana_prasarana_kesehatan';
$form['f1'] = 'prasarana';
$form['l1'] = 'Prasarana kesehatan';
$form['f2'] = 'jumlah';
$form['l2'] = 'Jumlah (unit)';
//add
		$form['default'] = 'id';
		$form['url'] = "grid/get_data";
		$cont = $form['controller'];
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