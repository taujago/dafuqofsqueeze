<div id="dlg" class="easyui-dialog" style="width:950px;height:500px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="title">Data Surat Keterangan Laporan Kebakaran</div>
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />
		 	<fieldset>
		 	<table>
		 		<tr>
			 		<td width="200px">Nomor Surat </td> 
			 		<td> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr>	
		 	</table>
		 	</fieldset>
		 	<fieldset >
		 		<legend><b>Identitas Korban</b></legend>
			 <table>
				
					 		 
			 	<tr>
			 		<td > NIK </td> 
			 		<td> : <input type="text" name="nik" id="nik" />
			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik');">
			 			cari </a>

			 		</td>
			 	</tr>
			 	<!--  <tr>
			 		<td >Nama </td> 
			 		<td> : <input type="text" name="nama" id="nama" /></td>
			 	</tr> -->
		 </table>

			 
			</fieldset>
			<fieldset >
		 		<legend><b>Identitas Ahli Waris Korban</b></legend>
			 <table>
				
					 		 
			 	<tr>
			 		<td > NIK </td> 
			 		<td> : <input type="text" name="nik_ahli_waris" id="nik_ahli_waris" />
			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik_ahli_waris');">
			 			cari </a>

			 		</td>
			 	</tr>
			 	 <!-- <tr>
			 		<td >Nama </td> 
			 		<td> : <input type="text" name="nama_ahli_waris" id="nama_ahli_waris" /></td>
			 	</tr> -->
		 </table>
		 
			 
			</fieldset>
		  
			<fieldset> <legend><strong>Pejabat </strong></legend>
				<table width="661">
					<tr><td width="200px">Penanda tangan surat </td>
						<td> : <?php 
						$ttd = isset($ttd)?$ttd:"";
						echo form_dropdown("ttd",$this->cm->arr_ttd(),$ttd,'id="ttd"') ?>
				    <tr class="atas_nama">
				      <td>Nama </td>
				      <td>: 
			          <input name="penandatangan_nama" type="text" id="penandatangan_nama" size="40" /> </td></tr>              
		            <tr class="atas_nama">
		              <td>Jabatan </td>
		              <td>: <input name="penandatangan_jabatan" type="text" id="penandatangan_jabatan" size="40" /> </td></tr>                    <tr class="atas_nama">
		              <td>Pangkat  </td>
		              <td>: <input name="pangkat" type="text" id="pangkat" size="40" placeholder="Khusus untuk PNS" /> </td></tr>  
                      <tr class="atas_nama">
		              <td>NIP  </td>
		              <td>: <input name="nip" type="text" id="nip" size="40" placeholder="Khusus untuk PNS" /> </td></tr>  
                </table>
                
			</fieldset>	
            <fieldset> <legend> <b>Kerugian Barang/Dokumen </b></legend>
            <textarea class="ckeditor" cols="80" id="isi_surat" name="isi_surat" rows="10"></textarea>
            </fieldset>
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="simpan()">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
	</div>
	 
	 <script type="text/javascript">
	 	 $(document).ready(function(){
  
  	 $("#nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#nama").val(obj.nama);
				
			}
		});
	 
	 });

	  $("#nama_ahli_waris").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#nik_ahli_waris").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#nama_ahli_waris").val(obj.nama);
				
			}
		});
	 
	 });
	   });
	 </script>