<script type="text/javascript">
var v_id_penduduk;
var v_id_penduduk2;
$(document).ready(function(){
 
$(".atas_nama").hide();
		
 $("#ttd").change(function(){
 	if($(this).val() == "lain") {
		$(".atas_nama").show();
	}
	else {
		$(".atas_nama").hide();
	}
 });
$('#tanggal_kedatangan').datebox({  
        required:false  ,
        formatter : function(date) {
        	var y = date.getFullYear();
			var m = date.getMonth()+1;
			var d = date.getDate();
			return d+'-'+m+'-'+y;
        }
    }); 

$('#search_tgl_awal').datebox({  
        required:false  ,
        formatter : function(date) {
        	var y = date.getFullYear();
			var m = date.getMonth()+1;
			var d = date.getDate();
			return d+'-'+m+'-'+y;
        }
    });   
	$('#search_tgl_akhir,#tgl_pindah').datebox({  
        required:false  ,
        formatter : function(date) {
        	var y = date.getFullYear();
			var m = date.getMonth()+1;
			var d = date.getDate();
			return d+'-'+m+'-'+y;
        }
    });    

	 
	

});

var url;

function baru(){
			$('#dlg').dialog('open').dialog('setTitle','Tambah Data Formulir Permohonan Pindah Datang WNI Antar Antar Kecamatan Dalam Satu Kabupaten/Kota (F-1.31)');
			$('#fm').form('clear');
			$("#id").val('<?php echo $this->session->userdata("operator_id_desa")."."; ?>');
			url = '<?php echo site_url("$controller/save") ?>';  
			$(".ln").hide('fast');
			$(".dn").hide('fast');
			load_pengikut();

			$(".atas_nama").hide();
			
				$.ajax({
				url: '<?php echo  site_url("general/generate_nomor/475") ?>',
				success  : function(nomor) {
					$("#no_surat").val(nomor);
				}
			});

}


function edit() {

	var row = $('#tt').datagrid('getSelected');	
	if(row) { 
	$('#dlg').dialog('open').dialog('setTitle','Edit Data Formulir Permohonan Pindah Datang WNI Antar Antar Kecamatan Dalam Satu Kabupaten/Kota (F-1.31)'); 
	$('#fm').form('load',row);						 
	url = '<?php echo site_url("$controller/update") ?>';  
	if(row.ttd=="lain") {
		$(".atas_nama").show();
	}
	else 
	$(".atas_nama").hide();
	 load_edit(row.id);
	
	if(row.pindah_jenis == "ln") { $(".ln").show(); $(".dn").hide() }
	else { $(".ln").hide(); $(".dn").show() }
	
	 				$.ajax({
							url :'<?php echo site_url("lokasi/get_tiger_kota") ?>/'+row.pindah_id_provinsi+'/'+row.pindah_id_kota,
							success : function(result){
								$("#pindah_id_kota").html('').append(result);
							}
						});

						$.ajax({
							url :'<?php echo site_url("lokasi/get_tiger_kecamatan") ?>/'+row.pindah_id_kota+'/'+row.pindah_id_kecamatan,
							success : function(result){
								$("#pindah_id_kecamatan").html('').append(result);
							}
						});

						$.ajax({
							url :'<?php echo site_url("lokasi/get_tiger_desa") ?>/'+row.pindah_id_kecamatan+'/'+row.pindah_id_desa,
							success : function(result){
								$("#pindah_id_desa").html('').append(result);
							}
						}); 

	}
	else {
		$.messager.alert('Error','Pilih record yang akan diedit','error');
	}
}


function hapus() {
			var row = $('#tt').datagrid('getSelections');
 			var arr = new Array();
			for(var i=0; i < row.length; i++) {
				arr[i] = row[i].id;
				console.log(row[i].id);
			}
			ids = arr.join();
			console.log(ids);
  			if (row){
				$.messager.confirm('Konfirmasi','Anda yakin akan menghapus data ? ',function(r){
					if (r){
						$.post('<?php echo site_url("$controller/hapus") ?>',{ids:ids},function(result){
							
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


function simpan(){
			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				dataType:'json',
				success: function(result){
					 console.log(result);
					 obj = $.parseJSON(result);
					// return false;
					if (obj.success == false ){
						$.messager.alert('Error',obj.pesan,'error');
					} else {
						$.messager.alert('Informasi',obj.pesan,'info');
						$('#dlg').dialog('close');		// close the dialog
						$('#tt').datagrid('reload');	// reload the user data
					}
				}
			});
		}


function cari(){
	console.log('awal = ' + $('#search_tgl_awal').val());
	console.log('akhir = ' + $('#search_tgl_akhir').val());
	      $('#tt').datagrid('load',{                         
 
         	search_nama : $('#search_nama').val(),
         	search_tgl_awal :$('#search_tgl_awal').datebox('getValue'),
         	search_tgl_akhir : $('#search_tgl_akhir').datebox('getValue')	                
        });  
}


function reset_search() {
	$('#search_nama').val('');
	$("#search_tgl_awal").datebox('setValue', '');  
 	$("#search_tgl_akhir").datebox('setValue', ''); 
	cari();
}

function detail(){
	var row = $('#tt').datagrid('getSelected');	
	if(row) { 
	///$('#dlg').dialog('open').dialog('setTitle','Edit Data Surat Kelahiran'); 
	//$('#fm').form('load',row);						 
	//url = '<?php echo site_url("$controller/update") ?>';  
	location.href=('<?php echo site_url("surat_kelahiran/detail") ?>/'+row.id);
	}
	else {
		$.messager.alert('Error','Pilih record ','error');
	}
}

function cetak(){
	var row = $('#tt').datagrid('getSelected');	
	if(row) { 
	 
	window.open('<?php echo site_url("$controller/cetak") ?>/'+row.id);
	}
	else {
		$.messager.alert('Error','Pilih record yang akan dicetak ','error');
	}
}

function word(){
	var row = $('#tt').datagrid('getSelected');	
	if(row) { 
	 
	window.open('<?php echo site_url("$controller/word") ?>/'+row.id);
	}
	else {
		$.messager.alert('Error','Pilih record yang akan dicetak ','error');
	}
}

function excel(){
	var row = $('#tt').datagrid('getSelected');	
	if(row) { 
	 
	location.href=('<?php echo site_url("surat_kelahiran/excel") ?>/'+row.id);
	}
	else {
		$.messager.alert('Error','Pilih record yang akan diexport ','error');
	}
}


function tambahpengikut(){
	id_penduduk_pengikut = $("#nik_pengikut").val();
	hubungan_pengikut	 = $("[name='hubungan_pengikut']").val();
	// console.log("id pengikut "+id_penduduk_pengikut);
	// console.log("hubunga pengikut "+hubungan_pengikut);
	/*if ( (typeof id_penduduk_pengikut == "undefined") ||  typeof (hubungan_pengikut == null)){
		$.messager.alert('Errorxxxxxxxx','Nama keluarga atau hubungan dalam keluarga harus diisi','error');
	}
	else { 
  */
	$.ajax({
		url : '<?php echo site_url("$controller/add_pengikut") ?>',
		type : 'POST',
		data : {'id_penduduk' : id_penduduk_pengikut, 'hubungan' : hubungan_pengikut},
		success : function(result) {
			 load_pengikut();
		}
	});
	//}
}

function hapus_pengikut(id_penduduk){
	 $.ajax({
	 	url : '<?php echo site_url("$controller/hapus_pengikut") ?>',
	 	data : {'id_penduduk':id_penduduk},
	 	type : "POST",
	 	success : function(result) {
	 		load_pengikut();
	 	}
	 });
}


function load_pengikut() {
	$.ajax({
		url : '<?php echo site_url("$controller/load_pengikut") ?>',
		success : function(result) {
			console.log(result);
			$("#tbpengikut").html('').append(result);
		}
	});
}

function load_edit(id){
	$.ajax({
		url :'<?php echo site_url("$controller/load_edit") ?>/'+id,
		success : function(result) {
			$("#tbpengikut").html('').append(result);
		}
	});
}

function tambahdarikk() {
	//v_id_penduduk2 = 
	console.log(v_id_penduduk2);
	if( typeof v_id_penduduk2 == "undefined") {
		$.messager.alert('Error','Pilih nama penduduk','error');
	}
	else { 
	$.ajax({
		url : '<?php echo site_url("$controller/tambahdarikk") ?>/'+v_id_penduduk2,
		success : function(result) {
		load_pengikut();	
		}
	});
	}
}

function show_pindah(){
	if($("#pindah_jenis").val() == "ln") {
		$(".ln").show('fast');
		$(".dn").hide('fast');
	}
	else {
		$(".ln").hide('fast');
		$(".dn").show('fast');
	}
}



function showhide(vshow,vhide){
	
	$("#"+vshow).show();
	$("#"+vhide).hide();
}

function simpan_kabupaten(){
	id_provinsi = $("#pindah_id_provinsi").val();
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
					$("#pindah_id_kota").append(result.html);
					showhide('btn_add_kabupaten','add_kabupaten');
				}
				else {
					$.messager.alert('Error',result.pesan,'error');
				}
		   }
		   });
	
}
 
 
 function simpan_kecamatan(){
	id_kota = $("#pindah_id_kota").val();
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
					$("#pindah_id_kecamatan").append(result.html);
					showhide('btn_add_kecamatan','add_kecamatan');
				}
				else {
					$.messager.alert('Error',result.pesan,'error');
				}
		   }
		   });
	
}


function simpan_desa(){
	id_kecamatan = $("#pindah_id_kecamatan").val();
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
					$("#pindah_id_desa").append(result.html);
					showhide('btn_add_desa','add_desa');
				}
				else {
					$.messager.alert('Error',result.pesan,'error');
				}
		   }
		   });
	
}


</script>

<script type="text/javascript">
function setsama(isChecked)
{
	with (window.document.fm) {
		if (isChecked) {
			tujuan_nik.value = kepala_keluarga_nik.value;
			tujuan_no_kk1.value = kepala_keluarga_kk.value;
			tujuan_no_kk.value = kepala_keluarga_kk.value;
			tujuan_nama.value = kepala_keluarga_nama.value;

			ket.value = "Catatan : No KK Pemohon Sama Dengan No KK Sebelumnya";
			tujuan_alamat.value = kepala_keluarga_alamat.value;
			tujuan_rt.value = kepala_keluarga_rt.value;
			tujuan_rw.value = kepala_keluarga_rw.value;

			tujuan_dusun.value = kepala_keluarga_dusun.value;
			tujuan_telpon.value = kepala_keluarga_telepon.value;


			tujuan_alamat.readOnly =  false;
			tujuan_rt.readOnly =  false;
			tujuan_rw.readOnly =  false;
			tujuan_dusun.readOnly =  false;
			tujuan_telpon.readOnly =  false;

	
			
			
		
		} else {
			kk_diikuti_nik_sebelumnya.value = "";
			kk_diikuti_nama_sebelumnya.value = "";
			kk_diikuti_no_kk_sebelumnya.value = "";
			kk_diikuti_alamat_sebelumnya.value = "";
			kk_diikuti_desa_sebelumnya.value = "";
			kk_diikuti_kecamatan_sebelumnya.value = "";	
			kk_diikuti_kota_sebelumnya.value = "";	
			kk_diikuti_provinsi_sebelumnya.value = "";	
			kk_diikuti_rt_sebelumnya.value = "";	
			kk_diikuti_rw_sebelumnya.value = "";	
			kk_diikuti_telepon_sebelumnya.value = "";	
			kk_diikuti_kode_pos_sebelumnya.value = "";	
		}
	}
}

function setbaru(isChecked)
{
	with (window.document.fm) {
		if (isChecked) {
			// tujuan_nik.value = kepala_keluarga_nik.value;
			// tujuan_no_kk.value = kepala_keluarga_kk.value;
			// tujuan_nama.value = kepala_keluarga_nama.value;
			tujuan_nama.readOnly =  false;
			tujuan_no_kk.readOnly =  true;
			ket.value = "Catatan : Pemohon Membuat KK baru, maka kolom ini dikosongkan, selanjutnya diisi oleh petugas setelah KK baru diterbitkan";
			
			tujuan_no_kk1.value = "";
			tujuan_alamat.readOnly =  false;
			tujuan_rt.readOnly =  false;
			tujuan_rw.readOnly =  false;
			tujuan_dusun.readOnly =  false;
			tujuan_telpon.readOnly =  false;

		} else {
			tujuan_nik.value = "";
			
			kk_diikuti_no_kk_sebelumnya.value = "";
			tujuan_nama.value = "";
			tujuan_alamat.value = "";
			tujuan_rt.value = "";	
			tujuan_rw.value = "";	
			tujuan_dusun.value = "";	
			tujuan_telpon.value = "";	
			
		}
	}
}

function setnumpang(isChecked)
{
	with (window.document.fm) {
		if (isChecked) {
			tujuan_no_kk1.value = tujuan_no_kk.value;
			ket.value = "Catatan : Pemohon numpang KK, maka nomor KK adalah nomor KK yang ditumpangi";
			tujuan_nik.readOnly =  false;
			tujuan_no_kk.readOnly =  true;
			tujuan_nama.readOnly =  false;
			tujuan_alamat.readOnly =  false;
			tujuan_rt.readOnly =  false;
			tujuan_rw.readOnly =  false;
			tujuan_dusun.readOnly =  false;
			tujuan_telpon.readOnly =  false;

	

		} else {
			tujuan_nik.value = "";
			tujuan_no_kk.value = "";
			kk_diikuti_no_kk_sebelumnya.value = "";
			tujuan_nama.value = "";
			tujuan_alamat.value = "";
			tujuan_rt.value = "";	
			tujuan_rw.value = "";	
			tujuan_dusun.value = "";	
			tujuan_telpon.value = "";	
			
		}
	}
}
function reset_cek() {
	// $('#tujuan_nik').val('');
	// $('#tujuan_nama').val('');
	// $('#tujuan_no_kk').val('');
	$('#tujuan_no_kk1').val('');
	$('#ket').val('');
	$('input[type=checkbox]').each(function() 
{ 
    $(this).prop('checked', false); 
});
	
	// cari();
}

function spek(){
				$('#spek').dialog('open').dialog('setTitle','Spesifikasi Formulir');
				$('#fm').form('clear');
				 
				 
	}
</script>