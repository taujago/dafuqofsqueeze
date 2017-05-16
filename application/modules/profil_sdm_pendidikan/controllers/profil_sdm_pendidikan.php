<?php 
class profil_sdm_pendidikan extends op_controller {
	function __construct(){
		parent::__construct();
		$this->load->model("core_model","cm");
		//$this->load->model("pst","dm");
	}


	function index(){
		$form['controller'] = get_class($this);
		$cont = $form['controller'];
		$form['title1'] = 'Pendidikan';
		$form['title2'] = 'pendidikan';
		$form['table'] = 'pendidikan_umur';
		$form['id'] = 'pendidikan_umur';
		$form['f1'] = 'teks';
		$form['l1'] = 'Tingkatan pendidikan';
		$form['f2'] = 'lk';
		$form['l2'] = 'Laki-laki (orang)';
		$form['f3'] = 'pr';
		$form['l3'] = 'Perempuan (orang)';
		//add
		$form['default'] = 'urutan';
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
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"ASC"; // get the direction if(!$sidx) $sidx =1;
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
		$foot = $this->db->query("SELECT SUM(lk) as lk, SUM(pr) as pr FROM $table")->result_array();
		$temp = $foot;
		$foot[0]['teks'] = "<strong>Jumlah</strong>";
		$foot[0]['lk'] = "<strong>".$foot[0]['lk']."</strong>";
		$foot[0]['pr'] = "<strong>".$foot[0]['pr']."</strong>";
		
		$temp = intval($temp[0]['lk'])+intval($temp[0]['pr']);
		$foot[1]['teks'] = "<strong>Jumlah total</strong>";
		$foot[1]['lk'] = "<strong>".$temp."</strong>";
		$responce->footer = $foot;
		if($total == 0){$responce->rows[1][$sidx] = '';}
		//echo $this->db->last_query();
		echo json_encode($responce);
	}

}
?>