<script type="text/javascript">
function cetak() {
	 
	
	//	window.open('<?php echo site_url("operator_penduduk_ektp/cetak/") ?>/');

	// var row = $('#tt').datagrid('getSelected');	

	vid_ektp = $("#search_ektp").val();

	if(vid_ektp == "x") { 
		
		$.messager.alert('Error','Pilih status EKTP','error');
		 
	}
	else 
	{
		window.open('<?php echo site_url("$controller/cetak/") ?>/'+vid_ektp);
	}
	
	 
}
 

function excel() { 

	vid_ektp = $("#search_ektp").val();
	//window.open('<?php echo site_url("$controller/exceletkp/") ?>/'+vid_ektp);
	window.open('<?php echo site_url("statistik_penduduk_beragama/exceletkp/") ?>/'+vid_ektp);

	// if(vid_ektp == "x") { 
		
	// 	$.messager.alert('Error','Pilih status EKTP','error');
		 
	// }
	// else 
	// {
		
		// window.open('<?php echo site_url("$controller/cetak") ?>'+jenis_cetak+'/'+v_id_agama);
	//}
	
	 
}

var url;
$(document).ready(function(){

$(".dn, .ln").hide();
 

});



 
function ada() {
			var row = $('#tt').datagrid('getSelections');
 			var arr = new Array();
			for(var i=0; i < row.length; i++) {
				arr[i] = row[i].id_penduduk;
				console.log(row[i].id_penduduk);
			}
			ids = arr.join();
			console.log(ids);
  			if (row){
				$.messager.confirm('Konfirmasi','Menset penduduk memiliki EKTP. anda yakin  ? ',function(r){
					if (r){
						$.post('<?php echo site_url("$controller/ada") ?>',{ids:ids},function(result){
							
							//return false;
							if (result.success == true){
								 
								$('#tt').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: obj.pesan
								});
							}
						},'json');
					}
				});
			}
}

function tidakada() {
			var row = $('#tt').datagrid('getSelections');
 			var arr = new Array();
			for(var i=0; i < row.length; i++) {
				arr[i] = row[i].id_penduduk;
				console.log(row[i].id_penduduk);
			}
			ids = arr.join();
			console.log(ids);
  			if (row){
				$.messager.confirm('Konfirmasi','Menset penduduk tidak memiliki EKTP. anda yakin  ? ',function(r){
					if (r){
						$.post('<?php echo site_url("$controller/tidakada") ?>',{ids:ids},function(result){
							
							//return false;
							if (result.success == true){
								 
								$('#tt').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: obj.pesan
								});
							}
						},'json');
					}
				});
			}
}

 
function cari(){
		console.log($("#search_nik2").val());
	      $('#tt').datagrid('load',{                         
         	search_nama 				: $('#search_nama').val(),
         	search_umur 				: $('#search_umur').val(),
         	search_status_kawin 		: $("#search_status_kawin").val(),
         	search_status_kependudukan 	: $("#search_status_kependudukan").val() ,
         	search_jk 					: $("#search_jk").val(),
         	search_kaya_miskin 			: $("#search_kaya_miskin").val(),
         	search_nik 					: $("#search_nik2").val(),
         	search_no_kk 				: $("#search_no_kk").val(),
         	search_ektp 				: $("#search_ektp").val(),
         	search_id_dusun 			: $("#search_id_dusun").val()             
           	             
        });  
}

function reset_search() {
	$('#search_nama').val('');
	$('#search_umur').val('');
 	$("#search_status_kawin").val('x').attr('selected','selected');
	$("#search_status_kependudukan").val('x').attr('selected','selected');
	$("#search_jk").val('x').attr('selected','selected');
	$("#search_kaya_miskin").val('x').attr('selected','selected');
	$("#search_nik2").val('');
	$("#search_ektp").val('x').attr('selected','selected'); 
	$("#search_no_kk").val('');
	 
	cari();
}


function detail() {
	 
	var row = $('#tt').datagrid('getSelected');	
	if(row) { 
		location.href=('<?php echo site_url("$controller/detail/") ?>/'+row.id_penduduk);
		//location.href=('<?php echo site_url("$controller/cetak/") ?>/'+row.id_penduduk);
	}
	else 
	{
		$.messager.alert('Error','Pilih Record ','error');
	}
	 
}


function showhide(vshow,vhide){
	
	$("#"+vshow).show();
	$("#"+vhide).hide();
}

function simpan_kabupaten(){
	id_provinsi = $("#id_provinsi").val();
	kota = $("#add_kabupaten_nama").val();
	
	console.log("id provinsi "+id_provinsi);
	 
	
	$.ajax({
		   url : '<?php echo site_url("lokasi/simpan_kota"); ?>',
		   data : {id_provinsi:id_provinsi,kota:kota},
		   dataType : 'json',
		   type : 'post',
		   success : function(result) {
		   		if(result.success == true) {
					$.messager.alert('Informasi',result.pesan,'info');
					$("#id_kota_sebelumnya").append(result.html);
					showhide('btn_add_kabupaten','add_kabupaten');
				}
				else {
					$.messager.alert('Error',result.pesan,'error');
				}
		   }
		   });
	
}
 
 
 function simpan_kecamatan(){
	id_kota = $("#id_kota_sebelumnya").val();
	kecamatan = $("#add_kecamatan_nama").val();
	
	//console.log("id provinsi "+id_provinsi);
	 
	
	$.ajax({
		   url : '<?php echo site_url("lokasi/simpan_kecamatan"); ?>',
		   data : {id_kota:id_kota,kecamatan:kecamatan},
		   dataType : 'json',
		   type : 'post',
		   success : function(result) {
		   		if(result.success == true) {
					$.messager.alert('Informasi',result.pesan,'info');
					$("#id_kecamatan_sebelumnya").append(result.html);
					showhide('btn_add_kecamatan','add_kecamatan');
				}
				else {
					$.messager.alert('Error',result.pesan,'error');
				}
		   }
		   });
	
}


function simpan_desa(){
	id_kecamatan = $("#id_kecamatan_sebelumnya").val();
	desa = $("#add_desa_nama").val();
	
	//console.log("id provinsi "+id_provinsi);
	 
	
	$.ajax({
		   url : '<?php echo site_url("lokasi/simpan_desa"); ?>',
		   data : {id_kecamatan:id_kecamatan,desa:desa},
		   dataType : 'json',
		   type : 'post',
		   success : function(result) {
		   		if(result.success == true) {
					$.messager.alert('Informasi',result.pesan,'info');
					$("#id_desa_sebelumnya").append(result.html);
					showhide('btn_add_desa','add_desa');
				}
				else {
					$.messager.alert('Error',result.pesan,'error');
				}
		   }
		   });
	
}

</script>