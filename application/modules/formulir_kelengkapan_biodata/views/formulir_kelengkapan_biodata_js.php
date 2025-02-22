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

$('#search_tgl_awal').datebox({  
        required:false  ,
        formatter : function(date) {
        	var y = date.getFullYear();
			var m = date.getMonth()+1;
			var d = date.getDate();
			return d+'-'+m+'-'+y;
        }
    });   
	$('#search_tgl_akhir').datebox({  
        required:false  ,
        formatter : function(date) {
        	var y = date.getFullYear();
			var m = date.getMonth()+1;
			var d = date.getDate();
			return d+'-'+m+'-'+y;
        }
    });
    	$('#tgl_kampus_s4,#tgl_kampus_s3,#tgl_kampus_s2,#tgl_kampus_s1,#tgl_kampus_dip').datebox({  
        required:false  ,
        formatter : function(date) {
        	var y = date.getFullYear();
			var m = date.getMonth()+1;
			var d = date.getDate();
			return d+'-'+m+'-'+y;
        }
    });    
   

    $(".sebutkan_7").hide();
		
 $("#alasan").change(function(){
 	if($(this).val() == "Lainnya") {
		$(".sebutkan_7").show();
	}
	else {
		$(".sebutkan_7").hide();
	}
 }); 

	 
	 $('#id_penduduk').combogrid({
				panelWidth:800,
				url: '<?php echo site_url('general/penduduk_dropdown_desa/') ?>',
				idField:'id_penduduk',
				textField:'nama',
				mode:'remote',
				fitColumns:true,
				columns:[[
					//{field:'id_member',title:'ID',width:60},
					{field:'nik',title:'NIK',width:200},
					{field:'nama',title:'Nama Member',width:200},
					{field:'tmp_lahir',title:'Tmp. Lahir',width:100},
					{field:'tgl_lahir',title:'Tgl. lahir',width:100},
					{field:'rt',title:'RT',width:30},
					{field:'rw',title:'RW',width:30},
					{field:'desa',title:'Desa',width:60}
					 
				]]
				
	});

	 	 $('#ayah_id_penduduk').combogrid({
				panelWidth:800,
				url: '<?php echo site_url('general/penduduk_dropdown_desa/l') ?>',
				idField:'id_penduduk',
				textField:'nama',
				mode:'remote',
				fitColumns:true,
				columns:[[
					//{field:'id_member',title:'ID',width:60},
					{field:'nik',title:'NIK',width:200},
					{field:'nama',title:'Nama Member',width:200},
					{field:'tmp_lahir',title:'Tmp. Lahir',width:100},
					{field:'tgl_lahir',title:'Tgl. lahir',width:100},
					{field:'rt',title:'RT',width:30},
					{field:'rw',title:'RW',width:30},
					{field:'desa',title:'Desa',width:60}
					 
				]]
				
	});
 	 $('#ibu_id_penduduk').combogrid({
				panelWidth:800,
				url: '<?php echo site_url('general/penduduk_dropdown_desa/p') ?>',
				idField:'id_penduduk',
				textField:'nama',
				mode:'remote',
				fitColumns:true,
				columns:[[
					//{field:'id_member',title:'ID',width:60},
					{field:'nik',title:'NIK',width:200},
					{field:'nama',title:'Nama Member',width:200},
					{field:'tmp_lahir',title:'Tmp. Lahir',width:100},
					{field:'tgl_lahir',title:'Tgl. lahir',width:100},
					{field:'rt',title:'RT',width:30},
					{field:'rw',title:'RW',width:30},
					{field:'desa',title:'Desa',width:60}
					 
				]]
				
	});
	 	 

});

var url;

function baru(){
			$('#dlg').dialog('open').dialog('setTitle','Tambah Data Formulir Kelengkapan Pencatatan Biodata Penduduk WNI (F-1.02)');
			$('#fm').form('clear');
			$("#id").val('<?php echo $this->session->userdata("operator_id_desa")."."; ?>');
			url = '<?php echo site_url("$controller/save") ?>';  
			$(".atas_nama").hide();
				
				$.ajax({
				url: '<?php echo  site_url("general/generate_nomor/045.2") ?>',
				success  : function(nomor) {
					$("#no_surat").val(nomor);
				}
			});
}


function edit() {

	var row = $('#tt').datagrid('getSelected');	
	if(row) { 
	$('#dlg').dialog('open').dialog('setTitle','Edit Data Formulir Kelengkapan Pencatatan Biodata Penduduk WNI (F-1.02)'); 
	$('#fm').form('load',row);						 
	url = '<?php echo site_url("$controller/update") ?>';  
	if(row.ttd=="lain") {
		$(".atas_nama").show();
	}
	else 
	$(".atas_nama").hide();
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

function spek(){
				$('#spek').dialog('open').dialog('setTitle','Spesifikasi Formulir Surat Kuasa');
				$('#fm').form('clear');
				 
				 
	}

</script>