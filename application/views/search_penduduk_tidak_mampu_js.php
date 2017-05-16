<script type="text/javascript">

$(document).ready(function(){


  $("#search_nama_table").keydown(function(e){
  		if(e.keyCode == 13 ) {
  			// alert('hello brow..');
  			search_cari();
  			return false;
  		}
  });

	$("#frm_pencarian_penduduk").submit(function(){
	$(this).ajaxSubmit({
		url : '<?php echo site_url("search_tidak_mampu") ?>',
		 
		success: function(obj){
					 $("#kotak_pencarian").html(html);
				}
	});
	return false;
	});
});

 
 

function show_dialog(target) {
	$("#kotak_pencarian").html('');
	$("#target").val(target);
	$('#search_dlg_penduduk').dialog('open').dialog('setTitle','Cari Penduduk Miskin');


}
  

function search_cari(){
	$("#kotak_pencarian").html('Sedang Mencari...');
	v_nama = $("#search_nama_table").val();
	v_target = $("#target").val();
	console.log(" nama " + v_nama);
	     $.ajax({

	     	url : '<?php echo site_url("search_tidak_mampu"); ?>',
	     	type : "post",
	     	data : {nama  : v_nama, target : v_target },
	     	success : function(html) {
	     		$("#kotak_pencarian").html(html);
	     	}
	     });
}


function search_cari_nik(){
	$("#kotak_pencarian").html('Sedang Mencari...');
	v_nik = $("#search_nik_table").val();
	v_target = $("#target").val();
	console.log(" nik " + v_nik);
	     $.ajax({

	     	url : '<?php echo site_url("search_cari_tidak_mampu_nik"); ?>',
	     	type : "post",
	     	data : {nik  : v_nik, target : v_target },
	     	success : function(html) {
	     		$("#kotak_pencarian").html(html);
	     	}
	     });
}

function search_reset_search() {
	$('#search_nama').val('');
 	$("#search_nik").val('');
	 
	search_cari();
}


function pilih(v_id_penduduk, v_nik, target) {
	console.log(v_id_penduduk + v_nik + target) ;
	$(target).val(v_nik);
	$('#search_dlg_penduduk').dialog('close');
} 

</script>

<!-- end of searching  -->