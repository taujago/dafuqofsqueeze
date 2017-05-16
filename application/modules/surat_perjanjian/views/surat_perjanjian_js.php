<script type="text/javascript">

$(document).ready(function(){

// $( 'textarea#isi_perjanjian' ).ckeditor();

// CKEDITOR.replace( 'textarea#isi_perjanjian', {
// 	enterMode: CKEDITOR.ENTER_DIV
// });

});

$(".atas_nama").hide();
		
 $("#ttd").change(function(){
 	if($(this).val() == "lain") {
		$(".atas_nama").show();
	}
	else {
		$(".atas_nama").hide();
	}
 });


$('#pihak1_tanggal_lahir,#tgl_pernikahan,#suami_tanggal_lahir,#pihak2_tanggal_lahir,#tanggal_surat').datebox({  
        required:false  ,
        formatter : function(date) {
        	var y = date.getFullYear();
			var m = date.getMonth()+1;
			var d = date.getDate();
			return d+'-'+m+'-'+y;
        }
    }); 


var url;

function baru(){
			$('#dlg').dialog('open').dialog('setTitle','Tambah Data Surat Perjanjian');
			$('#fm').form('clear');
			$("#id").val('<?php echo $this->session->userdata("operator_id_desa")."."; ?>');
			url = '<?php echo site_url("$controller/save") ?>'; 
			$(".atas_nama").hide(); 

			$.ajax({
				url: '<?php echo  site_url("general/generate_nomor/SKM") ?>',
				success  : function(nomor) {
					$("#no_surat").val(nomor);
				}
			});
}


function edit() {

	var row = $('#tt').datagrid('getSelected');	
	if(row) { 
	$('#dlg').dialog('open').dialog('setTitle','Edit Data Surat Perjanjian'); 
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
	      $('#tt').datagrid('load',{                         
	      	//search_id_desa : $('#search_id_desa').val(), 
         	//search_id_kecamatan : $('#search_id_kecamatan').val(),  
         	
         	search_pihak1_nama : $('#search_pihak1_nama').val() ,
         	search_pihak2_nama : $('#search_pihak2_nama').val()   ,
         	search_jk : $('#search_jk').val()                     
           	
             
        });  
}


function reset_search() {
	
	$('#search_pihak1_nama').val('');
	$('#search_pihak2_nama').val('');
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

function cetak(){
	jenis_cetak = $("#jenis_cetak").val();
	var row = $('#tt').datagrid('getSelected');	
	if(row) { 
	 
	window.open('<?php echo site_url("$controller/pdf") ?>/'+row.id);
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


function word(){
	jenis_cetak = $("#jenis_cetak").val();
	var row = $('#tt').datagrid('getSelected');	
	if(row) { 
	 
	location.href=('<?php echo site_url("surat_keterangan_menikah/word") ?>/'+row.id+'/'+jenis_cetak);
	}
	else {
		$.messager.alert('Error','Pilih record yang akan diexport ','error');
	}
}

</script>