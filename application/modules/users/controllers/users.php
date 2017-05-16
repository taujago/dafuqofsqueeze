<?php 
class users extends  op_controller {
	 
	function __construct() {
		parent::__construct();
 
		$this->load->model("userm","dm");
		$this->load->model("core_model","cm");
		 
		 
	}
 

function index()
    {
  	
	$data['controller'] = "users";
	$data['title'] = "Manajemen User";
	 
	  

   	$content = $this->load->view($data['controller']."_view",$data,true);
	$this->set_title($data['title']);
	$this->set_content($content);
	$this->render();
}
    
function detail(){
	
	// $this->db->where("username", $this->session->userdata("operator_username") );
	// $data = $this->db->get("userlist")->row_array();
	//print_r($data);
	//echo $this->db->last_query();
	$data['title'] = "Administaror";
	$content = $this->load->view("user_detail_view",$data,true);
	$this->set_title($data['title']);
	$this->set_content($content);
	$this->render();
}
 
function cek_pass_lama($pass) {

	$pass = md5($pass);
	$this->db->where("username",$this->session->userdata("operator_username"));
	$this->db->where("password",$pass);
	$x = $this->db->get("operator")->num_rows();
	if($x == 0) {
		$this->form_validation->set_message('cek_pass_lama', ' Password lama salah  ');
		return false;
	}
}

function cek_password($pass){
	$pass2 = $_POST['pass2'];
	if($pass <> $pass2) {
		$this->form_validation->set_message('cek_password', ' Password tidak sama ');
		return false;
	}
}

 function save_detail(){
 	$ret = array();
 		$this->load->library('form_validation');
		$this->form_validation->set_rules('pass_lama','Password lama','callback_cek_pass_lama');
		$this->form_validation->set_rules('pass','Password  ','callback_cek_password');	 
 		$this->form_validation->set_message('required', ' %s Harus diisi ');
		$this->form_validation->set_message('numeric', ' %s Harus diisi dengan angka ');
 		$this->form_validation->set_error_delimiters('', '<br>');
		if($this->form_validation->run() == TRUE ) { 
	   
 		$data =  $this->input->post();
 		 	//unset($data['id_user']);
  		 	$this->db->where("username",$this->session->userdata("operator_username"));
 
  		 	$arrx['password'] = md5($data['pass']);
  		 	$res = $this->db->update("operator",$arrx);

 		 	if($res) {
 		 		$ret = array("success"=>true,
						"pesan"=> "Berhasil Disimpan",
						"operation" =>"insert");
 		 	}
 		 	else {
 		 		$ret = array("success"=>false,
						"pesan"=> "Berhasil Disimpan".mysql_error(),
						"operation" =>"insert");
 		 	}
		}
		 
		else {
			$ret = array("success"=>false,
						"pesan"=> validation_errors(),
						"operation" =>"insert");
		}
		echo json_encode($ret);
 }

function cek_username($nama_user) {
	if(empty($nama_user)){
		$this->form_validation->set_message('cek_username', '%s harus diisi');
		return false;
	}

	$this->db->where("nama_user",$nama_user);
	if($this->db->get('userlist')->num_rows() > 0)
	{
		$this->form_validation->set_message('cek_username', '%s sudah ada');
		return false;
	}
}

 
function save(){
	 
	 
	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_lengkap','Nama','required');
		$this->form_validation->set_rules('nama_user','Username ','callback_cek_username');	 
		$this->form_validation->set_rules('pass','Password ','callback_cek_password');	 		 
		$this->form_validation->set_message('required', ' %s Harus diisi ');
		$this->form_validation->set_message('numeric', ' %s Harus diisi dengan angka ');
 		$this->form_validation->set_error_delimiters('', '<br>');
		if($this->form_validation->run() == TRUE ) { 
	   
 		$data =  $this->input->post();
 		 	unset($data['id_user']);
 		 	unset($data['pass2']);
 		 	$res = $this->db->insert("userlist",$data);
 		 	if($res) {
 		 		$ret = array("success"=>true,
						"pesan"=> "Berhasil Disimpan",
						"operation" =>"insert");
 		 	}
		}
		 
		else {
			$ret = array("success"=>false,
						"pesan"=> validation_errors(),
						"operation" =>"insert");
		}
		echo json_encode($ret);
}
 

function update(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_lengkap','Nama','required');
		$this->form_validation->set_rules('nama_user','Username ','required');	 
		$this->form_validation->set_rules('pass','Password ','callback_cek_password2');	 		 
		$this->form_validation->set_message('required', ' %s Harus diisi ');
		$this->form_validation->set_message('numeric', ' %s Harus diisi dengan angka ');
 		$this->form_validation->set_error_delimiters('', '<br>');
		if($this->form_validation->run() == TRUE ) { 
	   
 		$data =  $this->input->post();
 		 	//unset($data['id_user']);
 		 	unset($data['pass2']);
 		 	$this->db->where("id_user",$data['id_user']);
 		 	if(empty($data['pass'])) unset($data['pass']);
 		 	$res = $this->db->update("userlist",$data);
 		 	if($res) {
 		 		$ret = array("success"=>true,
						"pesan"=> "Berhasil Disimpan",
						"operation" =>"insert");
 		 	}
		}
		 
		else {
			$ret = array("success"=>false,
						"pesan"=> validation_errors(),
						"operation" =>"insert");
		}
		echo json_encode($ret);
}

function get_data(){
    	$page = $_REQUEST['page']; // get the requested page 
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['sort'])?$_REQUEST['sort']:"nama_user"; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'])?$_REQUEST['order']:"desc"; // get the direction if(!$sidx) $sidx =1;  
       
        
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null   ,
				"nama_user" => isset($_REQUEST['nama_user'])?$_REQUEST['nama_user']:"",
				 
				"tipe_user" => isset($_REQUEST['tipe_user'])?$_REQUEST['tipe_user']:"x"  
				 		
		);     
           
        $row = $this->dm->get_data($req_param)->result_array();
		
        $count = count($row); 
        if( $count >0 ) { 
            $total_pages = ceil($count/$limit); 
        } else { 
            $total_pages = 0; 
        } 
        if ($page > $total_pages) 
            $page=$total_pages; 
        $start = $limit*$page - $limit; // do not put $limit*($page - 1) 
        
        $start = ($start < 0 )?0:$start;
        
        $req_param['limit'] = array(
                    'start' => $start,
                    'end' => $limit
        );
          
        
        $result = $this->dm->get_data($req_param)->result_array();
        // sekarang format data dari dB sehingga sesuai yang diinginkan oleh jqGrid dalam hal ini aku pakai JSON format
        //$responce->page = $page; 
       $responce = new stdClass();
        $responce->total = $count; 
        //$responce->records = $count;
        if($count == 0) {
        	$i=1;
			$responce->rows[$i]['id_user']			= "";
 			$responce->rows[$i]['nama_lengkap']		= "";
			$responce->rows[$i]['nama_user']		= "";
			$responce->rows[$i]['tipe_user']		= "";
        	
        }
        
        
 

		else {
                $x=0;
             $arr_tipe = $this->cm->arr_tipe_user();
	        for($i=0; $i<count($result); $i++){
	        	$x++;
	            //$responce->rows[$i]['id']=$result[$i]['id_provinsi'];
	            // data berikut harus sesuai dengan kolom-kolom yang ingin ditampilkan di view (js)
	        $responce->rows[$i]['id_user']			= $result[$i]['id_user'] ;    
 			$responce->rows[$i]['nama_lengkap']		= $result[$i]['nama_lengkap'] ; 
			$responce->rows[$i]['nama_user']		= $result[$i]['nama_user'] ; 
			$responce->rows[$i]['tipe_user']		= $arr_tipe[$result[$i]['tipe_user']] ; 
			$responce->rows[$i]['pass']				= "";
			$responce->rows[$i]['pass2']			= ""; 
			 
				
	        } 
		}
		//echo "<hr />";
        echo json_encode($responce); 
    }
 

function hapus() {
	$ids = $this->input->post('ids');
		$arr_id = explode(",",$ids);
		$a=array(); $b=array();
		foreach($arr_id as $id) {
			//$this->core_model->delete_table_data('kk',array("no_kk"=>$id)); 
			$this->db->where('id_user',$id);
			$res = $this->db->delete("userlist");
			if($res) $a[]=$id;
			else $b[]=$id;
			//echo $this->db->last_query()."<br />";
		}
		if(count($a)>0) $pesan =  "Id ".implode(",", $a). " Berhasil dihapus  ";
		if(count($b)>0) $pesan =  "Id ".implode(",", $b). " Gagal dihapus  ";
		$arr=array("success"=>true,"pesan"=>$pesan);
		echo json_encode($arr);
	}    
    
 

 
	
}


?>
