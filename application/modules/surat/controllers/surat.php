<?php 
class surat extends op_controller {

	function __construct(){
		parent::__construct();
		$this->load->model("core_model","cm");
		$this->load->model("sm","mm");
        $this->load->model("add_model","am");
		$this->load->helper("tanggal"); 
	}


	function index(){
		
		
		
		
		
		$data['controller'] = get_class($this);
		
		$data['header'] = "Surat Menyurat";
		$data['title'] = $data['header'];
		$content = $this->load->view($data['controller']."_view",$data,true);
		$this->set_title($data['header']);
		$this->set_content($content);
		$this->render();
	}
	
	function menu($q=""){
		$data['controller'] = get_class($this);
		$q = isset($q)?$q:"";
		$data['record'] 	= $this->mm->data_menu($q);
		$this->load->view($data['controller']."_view_menu",$data);
	}
	
 
	 
	function test(){
		$content = $this->load->view("test",array(),true);
		$this->set_title("oke oke ");
		$this->set_content($content);
		$this->render();
	}


}
?>