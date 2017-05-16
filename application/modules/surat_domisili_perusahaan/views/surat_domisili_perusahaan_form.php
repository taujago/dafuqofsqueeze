<div id="dlg" class="easyui-dialog" style="width:900px;height:500px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Data Surat Keterangan Usaha</div>
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />
		 	<fieldset >
		 		<legend><b>Data Perusahaan</b></legend>
			 <table width="789">
				
				<tr>
			 		<td width="200">Nomor Surat </td> 
			 		<td> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr>		 		 
			 	
		 		<tr>
			 		<td width="200">NIK  </td> 
			 		<td> : <input type="text" name="nik" id="nik" />
			 		<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik');">
			 			cari </a>			 		</td>
			 	</tr>
			 	<tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="nama" type="text" id="nama" size="70" /></td>
		 	   </tr>
			 <tr>


				<tr>
			 	  <td >Tempat Lahir</td>
			 	  <td>: 
		 	      <input name="tempat_lahir" type="text" id="tempat_lahir" size="70" /></td>
		 	   </tr>
			 <tr>

			 		<td > Tanggal  Lahir</td> 
			 		<td> : <input type="text" name="tanggal_lahir" id="tanggal_lahir" />  </td>
			 	</tr>
			 	<!-- <tr>
			 	
			 	  <td >Agama</td>
			 	  <td>: 
		 	          <input name="suami_agama" type="text" id="suami_agama" size="70" /></td>
		 	   </tr> -->
			 <!-- 	<tr>

			 	  <td >Warga Negara</td>
			 	  <td>: 
		 	      <?php echo form_dropdown("suami_warga_negara",$arr_warga_negara,'','id="suami_warga_negara"');?></td>
		 	   </tr> -->
			 	
			 	<tr>
			 	  <td >Pekerjaan</td>
			 	  <td>: 
		 	      <input type="text" name="pekerjaan" id="pekerjaan" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >Jenis Kelamin</td>
			 	  <td>: 
		 	      <input type="text" name="jk" id="jk" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="alamat" type="text" id="alamat" size="80" /></td>
		 	   </tr>
			 	
	 		   <tr>
			 		<td > Nama Perusahaan</td> 
			 		<td> : <input size="40" type="text" name="nama_perusahaan" id="nama_perusahaan" />  </td>
			 	</tr>
		 		<tr>
			 		<td > Jenis Usaha</td> 
			 		<td> : <input size="40" type="text" name="jenis_usaha" id="jenis_usaha" />  </td>
			 	</tr>
			 	<tr>
			 		<td > Alamat Usaha</td> 
			 		<td> : <input size="40" type="text" name="alamat_usaha" id="alamat_usaha" />  </td>
			 	</tr>
			 	<tr>
			 	  <td >No Telepon</td>
			 	  <td>: 
		 	      <input size="15" type="text" name="telp" id="telp" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >Status Bangunan</td>
			 	  <td>: 
		 	      <input size="10" type="text" name="status_bangunan" id="status_bangunan" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >No. Akta Pendirian Perusahaan</td>
			 	  <td>: 
		 	      <input size="15" type="text" name="akta" id="akta" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >SK Pengesahan</td>
			 	  <td>: 
		 	      <input size="15" type="text" name="sk" id="sk" /></td>
		 	   </tr>
		 	     <tr>
			 	  <td >Penanggung Jawab</td>
			 	  <td>: 
		 	      <input size="20" type="text" name="pj" id="pj" /></td>
		 	   </tr>
			
			  
			 	 
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
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="simpan()">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
	</div>
	 <script>
  $(document).ready(function(){
  
  	 $("#nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#nama").val(obj.nama);
				$("#tempat_lahir").val(obj.tmp_lahir);
				$("#tanggal_lahir").datebox('setValue',obj.tgl_lahir);
				$("#warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#agama").val(obj.agama).attr('selected','selected');
				$("#pekerjaan").val(obj.pekerjaan);
				$("#alamat").val(obj.alamat);
				$("#jk").val(obj.jk);
			
			}
		});
	 
	 });
	  });
	 
	 </script>