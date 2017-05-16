<script type="text/javascript">

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


	$('#tanggal_lahir,#tgl_meninggal,#bapak_tanggal_lahir,#ibu_tanggal_lahir,#tanggal').datebox({  
        required:false  ,
        formatter : function(date) {
        	var y = date.getFullYear();
			var m = date.getMonth()+1;
			var d = date.getDate();
			return d+'-'+m+'-'+y;
        }
    }); 

	//  $('#ibu_id_penduduk').combogrid({
	// 			panelWidth:800,
	// 			url: '<?php echo site_url('general/penduduk_dropdown_desa/p') ?>',
	// 			idField:'id_penduduk',
	// 			textField:'nama',
	// 			mode:'remote',
	// 			fitColumns:true,
	// 			columns:[[
	// 				//{field:'id_member',title:'ID',width:60},
	// 				{field:'nik',title:'NIK',width:200},
	// 				{field:'nama',title:'Nama Member',width:200},
	// 				{field:'tmp_lahir',title:'Tmp. Lahir',width:100},
	// 				{field:'tgl_lahir',title:'Tgl. lahir',width:100},
	// 				{field:'rt',title:'RT',width:30},
	// 				{field:'rw',title:'RW',width:30},
	// 				{field:'desa',title:'Desa',width:60}
					 
	// 			]]
				
	// });

	//  	 $('#ayah_id_penduduk').combogrid({
	// 			panelWidth:800,
	// 			url: '<?php echo site_url('general/penduduk_dropdown_desa/l') ?>',
	// 			idField:'id_penduduk',
	// 			textField:'nama',
	// 			mode:'remote',
	// 			fitColumns:true,
	// 			columns:[[
	// 				//{field:'id_member',title:'ID',width:60},
	// 				{field:'nik',title:'NIK',width:200},
	// 				{field:'nama',title:'Nama Member',width:200},
	// 				{field:'tmp_lahir',title:'Tmp. Lahir',width:100},
	// 				{field:'tgl_lahir',title:'Tgl. lahir',width:100},
	// 				{field:'rt',title:'RT',width:30},
	// 				{field:'rw',title:'RW',width:30},
	// 				{field:'desa',title:'Desa',width:60}
					 
	// 			]]
				
	// });

	//  	 $('#pelapor_id_penduduk, #saksi_1_id_penduduk, #saksi_2_id_penduduk').combogrid({
	// 			panelWidth:800,
	// 			url: '<?php echo site_url('general/penduduk_dropdown_desa') ?>',
	// 			idField:'id_penduduk',
	// 			textField:'nama',
	// 			mode:'remote',
	// 			fitColumns:true,
	// 			columns:[[
	// 				//{field:'id_member',title:'ID',width:60},
	// 				{field:'nik',title:'NIK',width:200},
	// 				{field:'nama',title:'Nama Member',width:200},
	// 				{field:'tmp_lahir',title:'Tmp. Lahir',width:100},
	// 				{field:'tgl_lahir',title:'Tgl. lahir',width:100},
	// 				{field:'rt',title:'RT',width:30},
	// 				{field:'rw',title:'RW',width:30},
	// 				{field:'desa',title:'Desa',width:60}
					 
	// 			]]
				
	// });

});

var url;

function baru(){
	$("#ayah_data_penduduk, #ayah_data_manual").hide();
	$("#ibu_data_penduduk, #ibu_data_manual").hide();
			$('#dlg').dialog('open').dialog('setTitle','Tambah Data Surat Keterangan Mati');
			$('#fm').form('clear');
			$("#id").val('<?php echo $this->session->userdata("operator_id_desa")."."; ?>');
			url = '<?php echo site_url("$controller/save") ?>';  
			$(".atas_nama").hide();
			
				$.ajax({
				url: '<?php echo  site_url("general/generate_nomor/SKMATI") ?>',
				success  : function(nomor) {
					$("#no_surat").val(nomor);
				}
			});

}


function edit() {


	var row = $('#tt').datagrid('getSelected');	
	if(row) { 

 	


	$('#dlg').dialog('open').dialog('setTitle','Edit Data Surat Keterangan Mati'); 
	$('#fm').form('load',row);						 
	url = '<?php echo site_url("$controller/update") ?>';  

	if(row.ttd=="lain") {
		$(".atas_nama").show();
			}
			else 
	$(".atas_nama").hide();


	if(row.sumber_data_ibu == "manual") {
		$("#ibu_data_manual").show();
		$("#ibu_data_penduduk").hide();
	}
	else {
		$("#ibu_data_manual").hide();
		$("#ibu_data_penduduk").show();
	}

	if(row.sumber_data_ayah == "manual") {
		$("#ayah_data_manual").show();
		$("#ayah_data_penduduk").hide();
	}
	else {
		$("#ayah_data_manual").hide();
		$("#ayah_data_penduduk").show();
	}


					$.ajax({
							url :'<?php echo site_url("lokasi/get_tiger_kota") ?>/'+row.ayah_id_provinsi_temp+'/'+row.ayah_id_kota_temp,
							success : function(result){
								$("#ayah_id_kota_temp").html('').append(result);
							}
						});

						$.ajax({
							url :'<?php echo site_url("lokasi/get_tiger_kecamatan") ?>/'+row.ayah_id_kota_temp+'/'+row.ayah_id_kecamatan_temp,
							success : function(result){
								$("#ayah_id_kecamatan_temp").html('').append(result);
							}
						});

						$.ajax({
							url :'<?php echo site_url("lokasi/get_tiger_desa") ?>/'+row.ayah_id_kecamatan_temp+'/'+row.ayah_id_desa_temp,
							success : function(result){
								$("#ayah_id_desa_temp").html('').append(result);
							}
						}); 


					$.ajax({
							url :'<?php echo site_url("lokasi/get_tiger_kota") ?>/'+row.ibu_id_provinsi_temp+'/'+row.ibu_id_kota_temp,
							success : function(result){
								$("#ibu_id_kota_temp").html('').append(result);
							}
						});

						$.ajax({
							url :'<?php echo site_url("lokasi/get_tiger_kecamatan") ?>/'+row.ibu_id_kota_temp+'/'+row.ibu_id_kecamatan_temp,
							success : function(result){
								$("#ibu_id_kecamatan_temp").html('').append(result);
							}
						});

						$.ajax({
							url :'<?php echo site_url("lokasi/get_tiger_desa") ?>/'+row.ibu_id_kecamatan_temp+'/'+row.ibu_id_desa_temp,
							success : function(result){
								$("#ibu_id_desa_temp").html('').append(result);
							}
						}); 
/* f(sumber == "manual") {
		
	}
	else {
		$("#ibu_data_manual").hide();
		$("#ibu_data_penduduk").show();
	} */

		

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
	      $('#tt').datagrid('load',{                         
	      	//search_id_desa : $('#search_id_desa').val(), 
         	//search_id_kecamatan : $('#search_id_kecamatan').val(),  
         	search_nama : $('#search_nama').val(),
         	search_bapak_nama : $('#search_bapak_nama').val() ,
         	search_ibu_nama : $('#search_ibu_nama').val()   ,
         	search_jk : $('#search_jk').val()                     
           	
             
        });  
}


function reset_search() {
	$('#search_nama').val('');
	$('#search_bapak_nama').val('');
	$('#search_ibu_nama').val('');
	$('#search_jk').val('x').attr('selected','selected');
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

// function cetak(){
// 	jenis_cetak = $("#jenis_cetak").val();
// 	var row = $('#tt').datagrid('getSelected');	
// 	if(row) { 
	 
// 	window.open('<?php echo site_url("$controller/pdf") ?>/'+row.id+'/'+jenis_cetak);
// 	}
// 	else {
// 		$.messager.alert('Error','Pilih record yang akan dicetak ','error');
// 	}
// }
// function cetak_lapor(){
// 	jenis_cetak = $("#jenis_cetak").val();
// 	var row = $('#tt').datagrid('getSelected');	
// 	if(row) { 
	 
// 	window.open('<?php echo site_url("$controller/pdf_formulir") ?>/'+row.id+'/'+jenis_cetak);
// 	}
// 	else {
// 		$.messager.alert('Error','Pilih record yang akan dicetak ','error');
// 	}
// }

function cetak(){
	jenis_cetak = $("#jenis_cetak").val();
	var row = $('#tt').datagrid('getSelected');	
	if(row) { 
	 
	window.open('<?php echo site_url("surat_kematian/pdf") ?>_'+jenis_cetak+'/'+row.id);
	}
	else {
		$.messager.alert('Error','Pilih record yang akan dicetak ','error');
	}
}

function word(){
	jenis_cetak = $("#jenis_cetak").val();
	var row = $('#tt').datagrid('getSelected');	
	if(row) { 
	 
	window.open('<?php echo site_url("$controller/word") ?>/'+row.id+'/'+jenis_cetak);
	}
	else {
		$.messager.alert('Error','Pilih record yang akan dicetak ','error');
	}
}

function excel(){
	var row = $('#tt').datagrid('getSelected');	
	if(row) { 
	 
	location.href=('<?php echo site_url("$controller/excel") ?>/'+row.id);
	}
	else {
		$.messager.alert('Error','Pilih record yang akan diexport ','error');
	}
}

</script>