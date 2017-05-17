<script type="text/javascript">
$(document).ready(function(){
	
	$('#tt').datagrid({
		onDblClickCell : function(a,b,c) {
			detail();
		}
	});
	
});


function detail(){
			$('#dlg').dialog('open').dialog('setTitle','Foto Penduduk Janda ');
			var row = $('#tt').datagrid('getSelected');	
			$("#gambar").html(row.foto2);
			console.log(row);
			 
}


function cetak() {
	 
	
		window.open('<?php echo site_url("$controller/cetak/") ?>/');
	
	 
}
function cetak_duda() {
	 
	
		window.open('<?php echo site_url("$controller/cetak_duda/") ?>/');
	
	 
}
function excel() {
	 
	
		window.open('<?php echo site_url("$controller/excel/") ?>/');
	
	 
}


</script>