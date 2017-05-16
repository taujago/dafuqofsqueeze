<script type="text/javascript">


function cetak() {
	 
		v_id_jenis_penyakit = $('#id_jenis_penyakit').val();
		window.open('<?php echo site_url("$controller/cetak/") ?>/'+v_id_jenis_penyakit);
	
	 
}

function cari(){
	console.log($('#id_jenis_penyakit').val());
	      $('#tt').datagrid('load',{                         
         	id_jenis_penyakit 				: $('#id_jenis_penyakit').val()
         	       
           	             
        });  
}

function excel() {
	 
		v_id_jenis_penyakit = $('#id_jenis_penyakit').val();
		window.open('<?php echo site_url("$controller/excel/") ?>/'+v_id_jenis_penyakit);
	
	 
}

</script>