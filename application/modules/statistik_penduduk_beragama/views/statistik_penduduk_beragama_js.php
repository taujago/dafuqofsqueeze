<script type="text/javascript">


// function cetak() {
	 
// 	 	v_id_agama = $("#search_id_agama").val();
	
// 		window.open('<?php echo site_url("$controller/cetak/") ?>/'+v_id_agama);
	
	 
// }
function cetak(){
	jenis_cetak = $("#jenis_cetak").val();
	v_id_agama = $("#search_id_agama").val();
	window.open('<?php echo site_url("$controller/cetak") ?>'+jenis_cetak+'/'+v_id_agama);
	
}

function cari(){
	 
	      $('#tt').datagrid('load',{                         
 
         	search_id_agama : $('#search_id_agama').val()
         	     
        });  
}
function excel() {
	 
	 	v_id_agama = $("#search_id_agama").val();
	
		window.open('<?php echo site_url("$controller/excel/") ?>/'+v_id_agama);
	
	
	 
}



</script>