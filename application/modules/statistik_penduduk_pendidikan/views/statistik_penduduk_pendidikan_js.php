<script type="text/javascript">


// function cetak() {
	 
// 		v_id_pendidikan = $('#id_pendidikan').val();
// 		window.open('<?php echo site_url("$controller/cetak/") ?>/'+v_id_pendidikan);
	
	 
// }

function cetak(){
	jenis_cetak = $("#jenis_cetak").val();
	v_id_pendidikan = $('#id_pendidikan').val();
	window.open('<?php echo site_url("$controller/cetak") ?>'+jenis_cetak+'/'+v_id_pendidikan);
	
}

function excel() {
	 
		v_id_pendidikan = $('#id_pendidikan').val();
		window.open('<?php echo site_url("$controller/excel/") ?>/'+v_id_pendidikan);
	
	 
}

function cari(){
	      $('#tt').datagrid('load',{                         
         	id_pendidikan 				: $('#id_pendidikan').val()
         	       
           	             
        });  
}
 

</script>