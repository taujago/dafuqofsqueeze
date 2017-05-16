<style>
.dn, .ln {
	display:none;
}
 
 .dropdown {
 	width:90%
 }
 input:read-only {
    background-color: #ff9191;
}
</style>

<div id="dlg" class="easyui-dialog" style="width:900px;height:600px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="title">Data Formulir Permohonan Pindah Datang Satu Desa</div>
		<form  method="post" novalidate name="fm" id="fm">			 
			<input type="hidden" name="id" id="id" />
			<fieldset>
				<legend><b>Formulir</b></legend>
				<table>
					<!-- <tr>
			 	  <td >Dusun</td>
			 	  <td>: 
		 	      <input name="dusun_formulir" type="text" id="dusun_formulir" size="40" /></td>
		 	   </tr> -->
		 	    <tr>
			 	  <td >No. Formulir</td>
			 	  <td>: 
		 	      <input name="no_formulir" type="text" id="no_formulir" size="40" /></td>
		 	   </tr>
				</table>
			</fieldset>
		 	<fieldset>
		 		<legend><b>Data Penduduk Daerah Asal</b></legend>
			 <table>
			 	<tr>
			 		<td width="200">NIK Pemohon  </td> 
			 		<td> : <input type="text" name="pemohon_nik" id="pemohon_nik" />
			 		<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('pemohon_nik');">
			 			cari </a>			 		</td>
			 	</tr>
			 	<tr>
			 	  <td >Nama Pemohon</td>
			 	  <td>: 
		 	      <input name="pemohon_nama" type="text" id="pemohon_nama" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 		<td width="200">NIK Kepala Keluarga  </td> 
			 		<td> : <input type="text" name="kepala_keluarga_nik" id="kepala_keluarga_nik" />
			 		<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('kepala_keluarga_nik');">
			 			cari </a>			 		</td>
			 	</tr>
			 	<tr>
			 	  <td >Nama Kepala Keluarga</td>
			 	  <td>: 
		 	      <input name="kepala_keluarga_nama" type="text" id="kepala_keluarga_nama" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >Nomor KK</td>
			 	  <td>: 
		 	      <input name="kepala_keluarga_kk" type="text" id="kepala_keluarga_kk" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="kepala_keluarga_alamat" type="text" id="kepala_keluarga_alamat" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >RT</td>
			 	  <td>: 
		 	      <input name="kepala_keluarga_rt" type="text" id="kepala_keluarga_rt" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >RW</td>
			 	  <td>: 
		 	      <input name="kepala_keluarga_rw" type="text" id="kepala_keluarga_rw" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >Dusun</td>
			 	  <td>: 
		 	      <input name="kepala_keluarga_dusun" type="text" id="kepala_keluarga_dusun" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >Telepon</td>
			 	  <td>: 
		 	      <input name="kepala_keluarga_telepon" type="text" id="kepala_keluarga_telepon" size="70" /></td>
		 	   </tr>

		
		 </table>

			 
		  </fieldset>

		  	<fieldset>
		 		<legend><b>Data Daerah Tujuan</b></legend>
			 <table>
			 <tr>

			 		<td > Tanggal  Kedatangan</td> 
			 		<td> : <input type="text" name="tanggal_kedatangan" id="tanggal_kedatangan" />  </td>
			 	</tr>

			 	<tr>
			 		<td width="200">NIK Kepala Keluarga Tujuan  </td> 
			 		<td> : <input type="text" name="tujuan_nik" id="tujuan_nik" />
			 		<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('tujuan_nik');" >
			 			cari </a>			 		</td>
			 	</tr>
			 	<tr>
			 	  <td >Nama Kepala Keluarga Tujuan </td>
			 	  <td>: 
		 	      <input name="tujuan_nama" type="text" id="tujuan_nama" size="70" /></td>
		 	   </tr>
			 <tr>
			 	<td>
			 		Status No. KK Bagi Yang Pindah 
			 	</td><td>:<input type="checkbox"   name="status" value="1" onClick="setnumpang(this.checked);"><label for="chkSame" style="cursor:pointer"> 1. Numpang KK</td>
			 </tr>
			  <tr>
			 	<td>
			 		
			 	</td><td>:<input type="checkbox"   name="status" value="2" onClick="setbaru(this.checked);"><label for="chkSame" style="cursor:pointer"> 2. Membuat KK Baru</td>
			 </tr>
			  <tr>
			 	<td>
			 		
			 	</td><td>:<input type="checkbox"  id="chkSame"  name="status"  value="3" onClick="setsama(this.checked);"><label for="chkSame" style="cursor:pointer"> 3. Nomor KK Tetap</td>
			 </tr>
			 <tr>
			
			 	  <td >No. KK Pendatang </td>
			 	  <td>: 
		 	      <input name="tujuan_no_kk1" type="text" id="tujuan_no_kk1" size="70" readonly="readonly"/><br>: <textarea name="ket"  id="ket" rows="2" cols="70" readonly="readonly"/></textarea> </td>
		 	   </tr>
		 	    <tr>
			 	<td>
			 		
			 	</td><td> <a href="#" class="easyui-linkbutton" iconCls="icon-reset" onclick="reset_cek()">Reset </a></td>
			 </tr>


		 	      <input name="tujuan_no_kk" type="hidden" id="tujuan_no_kk" size="70" />
		 	   <tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="tujuan_alamat" type="text" id="tujuan_alamat" size="70" /></td>
		 	   </tr>
		 	   
			 	  <td >RT</td>
			 	  <td>: 
		 	      <input name="tujuan_rt" type="text" id="tujuan_rt" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >RW</td>
			 	  <td>: 
		 	      <input name="tujuan_rw" type="text" id="tujuan_rw" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >Dusun</td>
			 	  <td>: 
		 	      <input name="tujuan_dusun" type="text" id="tujuan_dusun" size="70" /></td>
		 	   </tr>
			 		<tr>
			 		<td width="200px">No Hp/ Telepon  </td> 
			 		<td> : <input size="40" type="text" name="tujuan_telpon" id="tujuan_telpon" /></td>
			 	</tr>

			 	
			 
		 </table>

			 
		  </fieldset>
		  
			<fieldset  style="width:507px; float:left" >
				<legend> <strong>Keluarga Yang Datang</strong></legend>
				<table>
				<tr>
			 		<td width="200px">NIK  </td> 
			 		<td> : <input  type="text" name="nik_pengikut" id="nik_pengikut" />
			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik_pengikut');">
			 			cari </a>
			 		</td>
			 	</tr>	
					<tr>
			 		<td > Kedudukan dalam keluarga</td> 
			 		<td> :  <?php echo form_dropdown("hubungan_pengikut",$this->cm->arr_hubungan_kependudukan,'','id="hubungan_pengikut"') ?> </td></td>
			 		</tr>
			 	<tr>
			 		<td></td>
			 		<td><a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" onclick="tambahpengikut()">Tambahkan</a></td>
			 	</tr>
				</table>
			</fieldset>	
					<fieldset  style="width:100%; float:left" > <legend><strong>Petugas Registrasi </strong></legend>
				<table>
				 <tr><td width="200px">Nama </td>
						
			 	 
			 	  <td>: 
		 	      <input name="petugas" type="text" id="petugas" size="70" /></td>
		 	 
						</tr>  
		          
				</table>

			</fieldset>	

		</form>
		<br /><br /><br />
		<div style="clear:both;"></div>
		<div style="width:966px;  margin:11px;">
		<fieldset>
		<legend><strong>Keluarga Yang Datang</strong></legend>
		 
		<div id="tbpengikut">

		</div>
		</fieldset>
		</div>
	</div>





	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="simpan()">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
		</div>	


	 <script>
  $(document).ready(function(){
  
  	 $("#pemohon_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#pemohon_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#pemohon_nama").val(obj.nama);
				
			}
		});
	 
	 });
	 	 
	  $("#kepala_keluarga_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#kepala_keluarga_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#kepala_keluarga_nama").val(obj.nama);
				$("#kepala_keluarga_kk").val(obj.no_kk);
				$("#kepala_keluarga_alamat").val(obj.alamat);
				$("#kepala_keluarga_rt").val(obj.rt);
				$("#kepala_keluarga_rw").val(obj.rw);
				$("#kepala_keluarga_dusun").val(obj.dusun);

			}
		});
	 
	 });

  $("#tujuan_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#tujuan_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#tujuan_nama").val(obj.nama);
				$("#tujuan_no_kk").val(obj.no_kk);
				
				$("#tujuan_alamat").val(obj.alamat);
				$("#tujuan_dusun").val(obj.dusun);
				// $("#kk_diikuti_kecamatan_sebelumnya").val(obj.kecamatan);
				// $("#kk_diikuti_kota_sebelumnya").val(obj.kota);
				// $("#kk_diikuti_provinsi_sebelumnya").val(obj.provinsi);
				$("#tujuan_rt").val(obj.rt);
				$("#tujuan_rw").val(obj.rw);
			}
		});
	 
	 });

	 
	  $("#tujuan_alamat").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#tujuan_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#tujuan_nama").val(obj.nama);
				$("#tujuan_no_kk").val(obj.no_kk);
				
				$("#tujuan_alamat").val(obj.alamat);
				$("#tujuan_dusun").val(obj.dusun);
				$("#kk_diikuti_kecamatan_sebelumnya").val(obj.kecamatan);
				$("#kk_diikuti_kota_sebelumnya").val(obj.kota);
				$("#kk_diikuti_provinsi_sebelumnya").val(obj.provinsi);
				$("#tujuan_rt").val(obj.rt);
				$("#tujuan_rw").val(obj.rw);
			}
		});
	 
	 });

	 
	


  
  });
</script>	 

