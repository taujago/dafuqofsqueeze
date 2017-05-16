<script type="text/javascript">


// function cetak() {
	 
// 		v_id_pekerjaan = $('#id_pekerjaan').val();
// 		window.open('<?php echo site_url("$controller/cetak_petani/") ?>/'+v_id_pekerjaan);
// }

function cetak(){
	jenis_cetak = $("#jenis_cetak").val();
	v_id_pekerjaan = $('#id_pekerjaan').val();
	window.open('<?php echo site_url("$controller/cetak_petani") ?>'+jenis_cetak+'/');
	
}


function excel() {
	 
		v_id_pekerjaan = $('#id_pekerjaan').val();
		window.open('<?php echo site_url("$controller/excel/") ?>/'+v_id_pekerjaan);
	
	 
}

function cari(){
	      $('#tt').datagrid('load',{                         
         	id_pekerjaan 				: $('#id_pekerjaan').val()
         	       
           	             
        });  
}
 

</script>