<script type="text/javascript">

$(document).ready(function(){
 

/*$('#search_tgl_awal').datebox({  
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
    });   */ 

	 
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

	 	 

});

var url;

function baru(){
			$('#dlg').dialog('open').dialog('setTitle','Tambah Data Penduduk Miskin');
			$('#fm').form('clear');
			//$("#id").val('<?php echo $this->session->userdata("operator_id_desa")."."; ?>');
			url = '<?php echo site_url("$controller/save") ?>';  
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

function hapus() {
			var row = $('#tt').datagrid('getSelections');
 			var arr = new Array();
			for(var i=0; i < row.length; i++) {
				arr[i] = row[i].id_penduduk;
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

function cari(){
	 
	      $('#tt').datagrid('load',{                         
 
         	search_nama : $('#search_nama').val(),
			search_nik : $('#search_nik').val(),
			search_rt : $('#search_rt').val(),
			search_rw : $('#search_rw').val(),
			search_id_dusun : $('#search_id_dusun').val() 
			
         	/*search_tgl_awal :$('#search_tgl_awal').datebox('getValue'),
         	search_tgl_akhir : $('#search_tgl_akhir').datebox('getValue')	        */        
        });  
}

function reset_search() {
	$('#search_nama').val('');
	 $('#search_nik').val('');
	 $('#search_rt').val('');
	 $('#search_rw').val('');
	 $('#search_id_dusun').val('x').attr('selected','selected'); 
	cari();
}

function cetak() {
	 
	
		window.open('<?php echo site_url("$controller/pdf/") ?>/');
	
	 
}
 

function excel() {
	 
	
		window.open('<?php echo site_url("$controller/excel/") ?>/');
	
	 
}

</script>