<?php 
class profil_sdm_industri_kecil extends op_controller {
	function __construct(){
		parent::__construct();
		$this->load->model("core_model","cm");
		//$this->load->model("pst","dm");
	}


	function index(){
		$form['controller'] = get_class($this);
		$cont = $form['controller'];
		$form['title1'] = 'Industri kecil dan menengah';
		$form['title2'] = 'industri kecil dan menengah';
		$form['table'] = 'profil_sdm_industri_kecil';
		$form['id'] = 'profil_sdm_industri_kecil';
		$form['f1'] = 'industri';
		$form['l1'] = 'Industri kecil dan menengah';
		$form['f2'] = 'jumlah';
		$form['l2'] = 'Jumlah / unit';
		$form['f3'] = 'kegiatan';
		$form['l3'] = 'Jumlah kegiatan';
		$form['f4'] = 'pengurus';
		$form['l4'] = 'Jumlah pengurus';
		//add
		$form['default'] = 'id';
		$form['url'] = "$cont/get_data";
		$content = $this->load->view("$cont/grid",$form,true);
		$this->load->view("$cont/grid_form",$form);
		$this->load->view("$cont/grid_js",$form);
		$this->load->view("$cont/grid_toolbar",$form);
		//$this->set_title($data['header']);
		$this->set_content($content);
		$this->render();
	}
	
	function get_data()
	{
		$page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:$_REQUEST['default']; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"desc"; // get the direction if(!$sidx) $sidx =1;
		$table = $_REQUEST['table']; // nama tabel yang di-request 
		$del = isset($_REQUEST['del'])?$_REQUEST['del']:""; // nama tabel yang di-request 
		$res = $this->cm->get_grid_data($page,$limit,$sidx,$sord,$table,$del);
		$total = $res['total'];
		unset($res['total']);
		$responce = new stdClass();
		$responce->total = $total;
		$c = 0;
		foreach($res as $var)
		{
			$responce->rows[$c] = $var;
			$c++;
		}
		$foot = $this->db->query("SELECT '<strong>Jumlah</strong>' as industri, sum($table.jumlah) as jumlah, sum($table.kegiatan) as kegiatan, sum($table.pengurus) as pengurus FROM $table where $table.deleted = 0")->result_array();
		$responce->footer = $foot;
		if($total == 0){$responce->rows[1][$sidx] = '';}
		//echo $this->db->last_query();
		echo json_encode($responce);
	}

}
?>