<script type="text/javascript">
var v_id_penduduk;
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
 
$('#search_tgl_awal').datebox({  
        required:false  ,
        formatter : function(date) {
        	var y = date.getFullYear();
			var m = date.getMonth()+1;
			var d = date.getDate();
			return d+'-'+m+'-'+y;
        }
    });   
	$('#search_tgl_akhir,#tgl_berangkat,#tgl_pulang').datebox({  
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
			$('#dlg').dialog('open').dialog('setTitle','Tambah Data Surat Bepergian');
			$('#fm').form('clear');
			$("#id").val('<?php echo $this->session->userdata("operator_id_desa")."."; ?>');
			url = '<?php echo site_url("$controller/save") ?>';  
			load_pengikut();
			$(".atas_nama").hide();
			
		/*	$this->cm->update_nomor_surat($data['no_surat']);
}*/
	$.ajax({
				url: '<?php echo  site_url("general/generate_nomor/SKB") ?>',
				success  : function(nomor) {
				$("#no_surat").val(nomor);
								}
			});
} 


function edit() {

	var row = $('#tt').datagrid('getSelected');	
	if(row) { 
	$('#dlg').dialog('open').dialog('setTitle','Edit Data Surat Bepergian'); 
	$('#fm').form('load',row);						 
	url = '<?php echo site_url("$controller/update") ?>';  
	if(row.ttd=="lain") {
		$(".atas_nama").show();
	}
	else 
	$(".atas_nama").hide();

	 load_edit(row.id);
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
	 
	window.open('<?php echo site_url("$controller/pdf") ?>/'+row.id);
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
	nik_pengikut = $("#nik_pengikut").val();
	hubungan_pengikut	 = $("[name='hubungan_pengikut']").val();
	 

	$.ajax({
		url : '<?php echo site_url("$controller/add_pengikut") ?>',
		type : 'POST',
		data : {'nik_pengikut' : nik_pengikut, 'hubungan' : hubungan_pengikut},
		success : function(result) {
			 load_pengikut();
		}
	});
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

</script>