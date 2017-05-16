<div id="dlg" class="easyui-dialog" style="width:900px;height:600px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Data Surat Pengantar Nikah</div>
		<form id="fm" method="post" novalidate>
			<input type="hidden" name="id_penduduk" id="id_penduduk" />
			<input type="hidden" name="id" id="id" />
		 		 <fieldset >
		 		<tr>
			 		<td width="200px">Nomor Surat Keterangan Untuk Nikah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
			 		<td> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr>
			 	</fieldset>
			 	 <fieldset >
			 	<tr>
			 		<td width="200px">Nomor Surat Keterangan Asal Usul Mempelai</td> 
			 		<td> : <input size="40" type="text" name="no_surat_asal_usul" id="no_surat_asal_usul" /></td>
			 	</tr>
			 	</fieldset>
			 	 <fieldset >
			 	<tr>

			 		<td width="200px">Nomor Surat Keterangan Tentang Orang Tua </td> 
			 		<td> : <input size="40" type="text" name="no_surat_orang_tua" id="no_surat_orang_tua" /></td>
			 	</tr>
			 	</fieldset>
			 	 <fieldset >
			 	<tr>

			 		<td width="200px">Nomor Surat Izin Orang Tua </td> 
			 		<td> : <input size="40" type="text" name="no_izin_orang_tua" id="no_izin_orang_tua" /></td>
			 	</tr>
			 	</fieldset>
			 	 <fieldset >
			 	<tr>
			 		<td > Tanggal Surat</td> 
			 		<td> : <input type="text" name="tanggal_surat" id="tanggal_surat" />  </td>
			 	</tr>
			 	 </fieldset >
			 	 <br>
		 <fieldset >
		 		<legend><b>Data MEMPELAI</b></legend>
			 <table>
	
		 		
		 		<tr>
			 		<td width="200">NIK  </td> 
			 		<td> : <input type="text" name="suami_nik" id="suami_nik" />
			 		<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('suami_nik');">
			 			cari </a>			 		</td>
			 	</tr>
			 	<tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="suami_nama" type="text" id="suami_nama" size="70" /></td>
		 	   </tr>
			 <tr>
  				<td >Jenis Kelamin</td>
			 	  <td>: 
		 	      <input name="suami_jk" type="text" id="suami_jk" size="70" /></td>
		 	   </tr>

				<tr>
			 	  <td >Tempat Lahir</td>
			 	  <td>: 
		 	      <input name="suami_tempat_lahir" type="text" id="suami_tempat_lahir" size="70" /></td>
		 	   </tr>
			 <tr>

			 		<td > Tanggal  Lahir</td> 
			 		<td> : <input type="text" name="suami_tanggal_lahir" id="suami_tanggal_lahir" />  </td>
			 	</tr>
			 	<tr>
			 	
			 	  <td >Agama</td>
			 	  <td>: 
		 	          <input name="suami_agama" type="text" id="suami_agama" size="70" /></td>
		 	   </tr>
			 	<tr>

			 	  <td >Warga Negara</td>
			 	  <td>: 
		 	      <?php echo form_dropdown("suami_warga_negara",$arr_warga_negara,'','id="suami_warga_negara"');?></td>
		 	   </tr>
			 	
			 	<tr>
			 	  <td >Pekerjaan</td>
			 	  <td>: 
		 	      <input type="text" name="suami_pekerjaan" id="suami_pekerjaan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="suami_alamat" type="text" id="suami_alamat" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >RT</td>
			 	  <td>: 
		 	      <input name="suami_rt" type="text" id="suami_rt" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >RW</td>
			 	  <td>: 
		 	      <input name="suami_rw" type="text" id="suami_rw" size="70" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Desa / Kelurahan </td>
			 	  <td>: 
		 	      <input type="text" name="suami_desa" id="suami_desa" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kecamatan</td>
			 	  <td>: 
		 	      <input type="text" name="suami_kecamatan" id="suami_kecamatan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kabupaten </td>
			 	  <td>:
		 	      <input type="text" name="suami_kota" id="suami_kota" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Provinsi </td>
			 	  <td>: 
		 	      <input type="text" name="suami_provinsi" id="suami_provinsi" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >&nbsp;</td>
			 	  <td>&nbsp;</td>
		 	   </tr>
			 	
			
			 <table>
			   <fieldset> <legend> <b>Keterangan Status Perkawinan Pria</b>
			   <br>
			   Jika pria,terangkan jejaka, duda atau beristri dan berapa istrinya. Kosongkan jika tidak diperlukan
			   </legend>
            	
<textarea class="ckeditor" cols="25" id="ket_pria" name="ket_pria" rows="3"></textarea>

            </fieldset>

               <fieldset> <legend> <b>Keterangan Status Perkawinan Wanita</b>
			   <br>Jika wanita,terangkan perawan atau janda. Kosongkan jika tidak diperlukan
			   </legend>
            	
<textarea class="ckeditor" cols="25" id="ket_wanita" name="ket_wanita" rows="3"></textarea>

            </fieldset>
             <fieldset> <legend> <b>Nama Istri/Suami Terdahulu</b></legend>
             	 <input name="nama_mantan" type="text" id="nama_mantan" size="40" />

			   </fieldset>
	
		 		<tr>
		 		  <td colspan="2"><strong>DATA CALON PASANGAN MEMPELAI</strong></td>
	 		   </tr>
		 		
                <tr>
			 	  <td >NIK</td>
			 	  <td>: 
		 	      <input name="calon_nik" type="text" id="calon_nik" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="calon_nama" type="text" id="calon_nama" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >Bin/ Nama Ayah</td>
			 	  <td>: 
		 	      <input name="calon_ayah" type="text" id="calon_ayah" size="70" /></td>
		 	   </tr>

				<tr>
			 	  <td >Tempat Lahir</td>
			 	  <td>: 
		 	      <input name="calon_tmp_lahir" type="text" id="calon_tmp_lahir" size="70" /></td>
		 	   </tr>
			 <tr>

			 		<td >Tanggal  Lahir</td> 
			 		<td> : <input type="text" name="calon_tgl_lahir" id="calon_tgl_lahir" />  </td>
			 	</tr>
			 		<tr>

			 	  <td >Warga Negara</td>
			 	  <td>: 
		 	      <?php echo form_dropdown("calon_warga_negara",$arr_warga_negara,'','id="calon_warga_negara"');?></td>
		 	   </tr>
			 	<tr>
			 	
			 	  <td >Agama</td>
			 	  <td>: 
		 	            <input name="calon_agama" type="text" id="calon_agama" size="70" /></td>
		 	   </tr>
			 	<tr>
			 	
			 	  <td >Pekerjaan</td>
			 	  <td>: 
		 	          <input name="calon_pekerjaan" type="text" id="calon_pekerjaan" size="70" /></td>
		 	   </tr>
			 	
			 	
			 	<tr>
			 	  <td >Tempat Tinggal</td>
			 	  <td>: 
		 	      <input name="calon_tmp_tinggal" type="text" id="calon_tmp_tinggal" size="80" /></td>
		 	   </tr>
		 	   
			 	
			 	<tr>
			 	  <td >&nbsp;</td>
			 	  <td>&nbsp;</td>
		 	   </tr>
		 	   <tr>
		 		  <td colspan="2"><strong>DATA AYAH</strong></td>
	 		   </tr>
		 			<tr>
			 		<td >NIK </td> 
			 		<td> : <input name="ayah_suami_nik" type="text" id="ayah_suami_nik" />  
<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('ayah_suami_nik');">
			 			cari </a>			 		</td>
			 	</tr>
                <tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="ayah_suami_nama" type="text" id="ayah_suami_nama" size="70" /></td>
		 	   </tr>

				<tr>
			 	  <td >Tempat Lahir</td>
			 	  <td>: 
		 	      <input name="ayah_suami_tempat_lahir" type="text" id="ayah_suami_tempat_lahir" size="70" /></td>
		 	   </tr>
			 <tr>

			 		<td >Tanggal  Lahir</td> 
			 		<td> : <input type="text" name="ayah_suami_tanggal_lahir" id="ayah_suami_tanggal_lahir" />  </td>
			 	</tr>
			 	<tr>
			 	
			 	  <td >Agama</td>
			 	  <td>: 
		 	          <input name="ayah_suami_agama" type="text" id="ayah_suami_agama" size="70" /></td>
		 	   </tr>
			 	<tr>
			 	
			 	  <td >Pekerjaan</td>
			 	  <td>: 
		 	          <input name="ayah_suami_pekerjaan" type="text" id="ayah_suami_pekerjaan" size="70" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Warga Negara</td>
			 	  <td>: 
		 	      <?php echo form_dropdown("ayah_suami_warga_negara",$arr_warga_negara,'','id="ayah_suami_warga_negara"');?></td>
		 	   </tr>
			 	
			 	<tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="ayah_suami_alamat" type="text" id="ayah_suami_alamat" size="80" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >RT</td>
			 	  <td>: 
		 	      <input name="ayah_suami_rt" type="text" id="ayah_suami_rt" size="80" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >RW</td>
			 	  <td>: 
		 	      <input name="ayah_suami_rw" type="text" id="ayah_suami_rw" size="80" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Desa / Kelurahan </td>
			 	  <td>: 
		 	      <input type="text" name="ayah_suami_desa" id="ayah_suami_desa" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kecamatan</td>
			 	  <td>: 
		 	      <input type="text" name="ayah_suami_kecamatan" id="ayah_suami_kecamatan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kabupaten </td>
			 	  <td>:
		 	      <input type="text" name="ayah_suami_kota" id="ayah_suami_kota" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Provinsi </td>
			 	  <td>: 
		 	      <input type="text" name="ayah_suami_provinsi" id="ayah_suami_provinsi" /></td>
		 	   </tr>
			 	
			 	<tr>
			 	  <td >&nbsp;</td>
			 	  <td>&nbsp;</td>
		 	   </tr>
			 	<tr>
			 	  <td colspan="2" ><strong>DATA IBU </strong></td>
		 	   </tr>
			 	<tr>
			 		<td >NIK </td> 
			 		<td> : <input name="ibu_suami_nik" type="text" id="ibu_suami_nik" />  
<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('ibu_suami_nik');">
			 			cari </a>			 		</td>
			 	</tr>
                <tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="ibu_suami_nama" type="text" id="ibu_suami_nama" size="70" /></td>
		 	   </tr>
			 <tr>
			 	  <td >Tempat Lahir</td>
			 	  <td>: 
		 	      <input name="ibu_suami_tempat_lahir" type="text" id="ibu_suami_tempat_lahir" size="70" /></td>
		 	   </tr>
			 <tr>

			 		<td >Tanggal  Lahir</td> 
			 		<td> : <input type="text" name="ibu_suami_tanggal_lahir" id="ibu_suami_tanggal_lahir" />  </td>
			 	</tr>
			 	<tr>
			 	
			 	  <td >Agama</td>
			 	  <td>: 
		 	          <input name="ibu_suami_agama" type="text" id="ibu_suami_agama" size="70" /></td>
		 	   </tr>
			 	<tr>
			 	
			 	  <td >Pekerjaan</td>
			 	  <td>: 
		 	          <input name="ibu_suami_pekerjaan" type="text" id="ibu_suami_pekerjaan" size="70" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Warga Negara</td>
			 	  <td>: 
		 	      <?php echo form_dropdown("ibu_suami_warga_negara",$arr_warga_negara,'','id="ibu_suami_warga_negara"');?></td>
		 	   </tr>
			 
			 
			 	<tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="ibu_suami_alamat" type="text" id="ibu_suami_alamat" size="80" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >RT</td>
			 	  <td>: 
		 	      <input name="ibu_suami_rt" type="text" id="ibu_suami_rt" size="80" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >RW</td>
			 	  <td>: 
		 	      <input name="ibu_suami_rw" type="text" id="ibu_suami_rw" size="80" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Desa / Kelurahan </td>
			 	  <td>: 
		 	      <input type="text" name="ibu_suami_desa" id="ibu_suami_desa" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kecamatan</td>
			 	  <td>: 
		 	      <input type="text" name="ibu_suami_kecamatan" id="ibu_suami_kecamatan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kabupaten </td>
			 	  <td>:
		 	      <input type="text" name="ibu_suami_kota" id="ibu_suami_kota" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Provinsi </td>
			 	  <td>: 
		 	      <input type="text" name="ibu_suami_provinsi" id="ibu_suami_provinsi" /></td>
		 	   </tr>
			 	
			 </table>
			 
		  </fieldset>
		 

			 
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
  
  	 $("#suami_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#suami_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#suami_nama").val(obj.nama);
				$("#suami_jk").val(obj.jk);
				$("#suami_tempat_lahir").val(obj.tmp_lahir);
				$("#suami_tanggal_lahir").datebox('setValue',obj.tgl_lahir);
				$("#suami_warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#suami_agama").val(obj.agama).attr('selected','selected');
				$("#suami_pekerjaan").val(obj.pekerjaan);
				$("#suami_alamat").val(obj.alamat);
				$("#suami_rt").val(obj.rt);
				$("#suami_rw").val(obj.rw);
				$("#suami_desa").val(obj.desa);
				$("#suami_kecamatan").val(obj.kecamatan);
				$("#suami_kota").val(obj.kota);
				$("#suami_provinsi").val(obj.provinsi);
			}
		});
	 
	 });
	 
	 
	  $("#calon_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#calon_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#calon_nama").val(obj.nama);
				$("#calon_tempat_lahir").val(obj.tmp_lahir);
				$("#calon_warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#calon_tgl_lahir").datebox('setValue',obj.tgl_lahir);
				$("#calon_agama").val(obj.agama).attr('selected','selected');
				$("#calon_pekerjaan").val(obj.pekerjaan);
				$("#calon_alamat").val(obj.alamat);
				$("#calon_desa").val(obj.desa);
				$("#calon_kecamatan").val(obj.kecamatan);
				$("#calon_kota").val(obj.kota);
				$("#calon_provinsi").val(obj.provinsi);
			}
		});
	 
	 });



 $("#ayah_suami_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#ayah_suami_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#ayah_suami_nama").val(obj.nama);
				$("#ibu_umur").val(obj.umur);
				$("#ayah_suami_warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#ayah_suami_tempat_lahir").val(obj.tmp_lahir);
				$("#ayah_suami_tanggal_lahir").datebox('setValue',obj.tgl_lahir);
				$("#ayah_suami_agama").val(obj.agama);
				$("#ayah_suami_pekerjaan").val(obj.pekerjaan);
				$("#ayah_suami_alamat").val(obj.alamat);
				$("#ayah_suami_desa").val(obj.desa);
				$("#ayah_suami_kecamatan").val(obj.kecamatan);
				$("#ayah_suami_kota").val(obj.kota);
				$("#ayah_suami_rt").val(obj.rt);
				$("#ayah_suami_rw").val(obj.rw);
				$("#ayah_suami_provinsi").val(obj.provinsi);
			}
		});
	 
	 });
$("#ibu_suami_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#ibu_suami_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#ibu_suami_nama").val(obj.nama);
				$("#ibu_umur").val(obj.umur);
				$("#ibu_suami_warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#ibu_suami_tempat_lahir").val(obj.tmp_lahir);
				$("#ibu_suami_tanggal_lahir").datebox('setValue',obj.tgl_lahir);
				$("#ibu_suami_agama").val(obj.agama);
				$("#ibu_suami_pekerjaan").val(obj.pekerjaan);
				$("#ibu_suami_alamat").val(obj.alamat);
				$("#ibu_suami_desa").val(obj.desa);
				$("#ibu_suami_rt").val(obj.rt);
				$("#ibu_suami_rw").val(obj.rw);
				$("#ibu_suami_kecamatan").val(obj.kecamatan);
				$("#ibu_suami_kota").val(obj.kota);
				$("#ibu_suami_provinsi").val(obj.provinsi);
			}
		});
	 
	 });


$("#ayah_istri_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#ayah_istri_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#ayah_istri_nama").val(obj.nama);
				$("#ibu_umur").val(obj.umur);
				$("#ayah_istri_warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#ayah_istri_tempat_lahir").val(obj.tmp_lahir);
				$("#ayah_istri_agama").val(obj.agama);
				$("#ayah_istri_pekerjaan").val(obj.pekerjaan);
				$("#ayah_istri_alamat").val(obj.alamat);
				$("#ayah_istri_desa").val(obj.desa);
				$("#ayah_istri_kecamatan").val(obj.kecamatan);
				$("#ayah_istri_kota").val(obj.kota);
				$("#ayah_istri_provinsi").val(obj.provinsi);
			}
		});
	 
	 });

$("#ibu_istri_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#ibu_istri_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#ibu_istri_nama").val(obj.nama);
				$("#ibu_umur").val(obj.umur);
				$("#ibu_istri_warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#ibu_istri_tempat_lahir").val(obj.tmp_lahir);
				$("#ibu_istri_agama").val(obj.agama);
				$("#ibu_istri_pekerjaan").val(obj.pekerjaan);
				$("#ibu_istri_alamat").val(obj.alamat);
				$("#ibu_istri_desa").val(obj.desa);
				$("#ibu_istri_kecamatan").val(obj.kecamatan);
				$("#ibu_istri_kota").val(obj.kota);
				$("#ibu_istri_provinsi").val(obj.provinsi);
			}
		});
	 
	 });


  
  });
</script>	 