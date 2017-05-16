<script type="text/javascript">

$(document).ready(function(){


  $("#search_nama_table_datang").keydown(function(e){
  		if(e.keyCode == 13 ) {
  			// alert('hello brow..');
  			search_cari();
  			return false;
  		}
  });

	$("#frm_pencarian_penduduk").submit(function(){
	$(this).ajaxSubmit({
		url : '<?php echo site_url("search_penduduk_datang_nama") ?>',
		 
		success: function(obj){
					 $("#kotak_pencarian_datang").html(html);
				}
	});
	return false;
	});
});

 
 

function show_cakap(target) {
	$("#kotak_pencarian_datang").html('');
	$("#target").val(target);
	$('#search_dlg_penduduka').dialog('open').dialog('setTitle','Cari Penduduk Datang');


}



function search_cari_datang(){
	$("#kotak_pencarian_datang").html('Sedang Mencari...');
	v_nama = $("#search_nama_table_datang").val();
	v_target = $("#target").val();
	console.log(" nama " + v_nama);
	     $.ajax({

	     	url : '<?php echo site_url("search_penduduk_datang_nama"); ?>',
	     	type : "post",
	     	data : {nama  : v_nama, target : v_target },
	     	success : function(html) {
	     		$("#kotak_pencarian_datang").html(html);
	     	}
	     });
}


function search_cari_nik_datang(){
	$("#kotak_pencarian_datang").html('Sedang Mencari...');
	v_nik = $("#search_nik_table_datang").val();
	v_target = $("#target").val();
	console.log(" nik " + v_nik);
	     $.ajax({

	     	url : '<?php echo site_url("search_penduduk_datang_nik"); ?>',
	     	type : "post",
	     	data : {nik  : v_nik, target : v_target },
	     	success : function(html) {
	     		$("#kotak_pencarian_datang").html(html);
	     	}
	     });
}

function search_reset_search() {
	$('#search_nama').val('');
 	$("#search_nik").val('');
	 
	search_cari();
}


function pilihan(v_id_penduduk, v_nik, target) {
	console.log(v_id_penduduk + v_nik + target) ;
	$(target).val(v_nik);
	$('#search_dlg_penduduka').dialog('close');
} 

</script>

<!-- end of searching  -->