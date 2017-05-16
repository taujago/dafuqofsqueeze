<script type="text/javascript">


// function cetak() {
	 	
// 		window.open('<?php echo site_url("$controller/cetak/") ?>/');

// }
function cetak(){
	jenis_cetak = $("#jenis_cetak").val();
	window.open('<?php echo site_url("$controller/cetak") ?>'+jenis_cetak);
}

 
function excel() { 		 
window.open('<?php echo site_url("$controller/excel/") ?>/');	 
}

</script>