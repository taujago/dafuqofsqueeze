<div id="dlg" class="easyui-dialog" style="width:900px;height:600px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Data Surat Keterangan Nikah</div>
		<form id="fm" method="post" novalidate>
			<input type="hidden" name="id_penduduk" id="id_penduduk" />
			<input type="hidden" name="id" id="id" />
		 		 <fieldset >
		 		<tr>
			 		<td width="200px">Nomor Surat </td> 
			 		<td> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr>
			 	<tr>
			 		<td > Tanggal Surat</td> 
			 		<td> : <input type="text" name="tanggal_surat" id="tanggal_surat" />  </td>
			 	</tr>
			 	 </fieldset >
			 	 <br>
		 <fieldset >
		 		<legend><b>Data SUAMI ISTRI</b></legend>
			 <table>
	
		 		<tr>
		 		  <td colspan="2"><strong>DATA SUAMI</strong></td>
	 		   </tr>
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
			 	  <td >No KK</td>
			 	  <td>: 
		 	      <input name="suami_no_kk" type="text" id="suami_no_kk" size="70" /></td>
		 	   </tr>
			 <tr>


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
			 	<tr>
			 	  <td colspan="2" ><strong>DATA ISTRI </strong></td>
		 	   </tr>
			 		<tr>
			 		<td >NIK </td> 
			 		<td> : <input name="istri_nik" type="text" id="istri_nik" />  
<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('istri_nik');">
			 			cari </a>			 		</td>
			 	</tr>
                <tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="istri_nama" type="text" id="istri_nama" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >Tempat Lahir</td>
			 	  <td>: 
		 	      <input name="istri_tempat_lahir" type="text" id="istri_tempat_lahir" size="70" /></td>
		 	   </tr>
			 	<tr>
			 		<td > Tanggal  Lahir</td> 
			 		<td> : <input type="text" name="istri_tanggal_lahir" id="istri_tanggal_lahir" />  </td>
			 	</tr>
<tr>
			 	  <td >Agama</td>
			 	  <td>: 
		 	      <input name="istri_agama" type="text" id="istri_agama" size="70" /></td>
		 	   </tr>

			 	<tr>
			 	  <td >Warga Negara</td>
			 	  <td>: 
		 	      <?php echo form_dropdown("istri_warga_negara",$arr_warga_negara,'','id="istri_warga_negara"');?></td>
		 	   </tr>
			 	
			 	<tr>
			 	  <td >Pekerjaan</td>
			 	  <td>: 
		 	      <input type="text" name="istri_pekerjaan" id="istri_pekerjaan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="istri_alamat" type="text" id="istri_alamat" size="70" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Desa / Kelurahan </td>
			 	  <td>: 
		 	      <input type="text" name="istri_desa" id="istri_desa" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kecamatan</td>
			 	  <td>: 
		 	      <input type="text" name="istri_kecamatan" id="istri_kecamatan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kabupaten </td>
			 	  <td>:
		 	      <input type="text" name="istri_kota" id="istri_kota" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Provinsi </td>
			 	  <td>: 
		 	      <input type="text" name="istri_provinsi" id="istri_provinsi" /></td>
		 	   </tr>
			 	
			 	  <td >&nbsp;</td>
			 	  <td>&nbsp;</td>
		 	   </tr>
			 	
			 </table>
			 
		  </fieldset>
		
			<br>
			<br>
			 <fieldset >
		 		<legend><b>DATA ORANG TUA SUAMI</b></legend>
			 <table>
	
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
			 	  <td >Warga Negara</td>
			 	  <td>: 
		 	      <?php echo form_dropdown("ayah_suami_warga_negara",$arr_warga_negara,'','id="ayah_suami_warga_negara"');?></td>
		 	   </tr>
			 	
			 	<tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="ayah_suami_alamat" type="text" id="ayah_suami_alamat" size="70" /></td>
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
			 	  <td >Warga Negara</td>
			 	  <td>: 
		 	      <?php echo form_dropdown("ibu_suami_warga_negara",$arr_warga_negara,'','id="ibu_suami_warga_negara"');?></td>
		 	   </tr>
			 
			 
			 	<tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="ibu_suami_alamat" type="text" id="ibu_suami_alamat" size="70" /></td>
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
		  <br>
		  <br>
		  <fieldset >
		 		<legend><b>DATA ORANG TUA ISTRI</b></legend>
			 <table>
	
		 		<tr>
		 		  <td colspan="2"><strong>DATA AYAH</strong></td>
	 		   </tr>
		 		<tr>
			 		<td width="200">NIK  </td> 
			 		<td> : <input type="text" name="ayah_istri_nik" id="ayah_istri_nik" />
			 		<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('ayah_istri_nik');">
			 			cari </a>			 		</td>
			 	</tr>
			 	<tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="ayah_istri_nama" type="text" id="ayah_istri_nama" size="70" /></td>
		 	   </tr>
			 	
			 	<tr>
			 	  <td >Warga Negara</td>
			 	  <td>: 
		 	      <?php echo form_dropdown("ayah_istri_warga_negara",$arr_warga_negara,'','id="ayah_istri_warga_negara"');?></td>
		 	   </tr>
			 
			 	<tr>
			 	  <td >Pekerjaan</td>
			 	  <td>: 
		 	      <input type="text" name="ayah_istri_pekerjaan" id="ayah_istri_pekerjaan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="ayah_istri_alamat" type="text" id="ayah_istri_alamat" size="70" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Desa / Kelurahan </td>
			 	  <td>: 
		 	      <input type="text" name="ayah_istri_desa" id="ayah_istri_desa" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kecamatan</td>
			 	  <td>: 
		 	      <input type="text" name="ayah_istri_kecamatan" id="ayah_istri_kecamatan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kabupaten </td>
			 	  <td>:
		 	      <input type="text" name="ayah_istri_kota" id="ayah_istri_kota" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Provinsi </td>
			 	  <td>: 
		 	      <input type="text" name="ayah_istri_provinsi" id="ayah_istri_provinsi" /></td>
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
			 		<td> : <input name="ibu_istri_nik" type="text" id="ibu_istri_nik" />  
<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('ibu_istri_nik');">
			 			cari </a>			 		</td>
			 	</tr>
                <tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="ibu_istri_nama" type="text" id="ibu_istri_nama" size="70" /></td>
		 	   </tr>
			 	
			 	<tr>
			 	  <td >Warga Negara</td>
			 	  <td>: 
		 	      <?php echo form_dropdown("ibu_istri_warga_negara",$arr_warga_negara,'','id="ibu_istri_warga_negara"');?></td>
		 	   </tr>
			 
			 	<tr>
			 	  <td >Pekerjaan</td>
			 	  <td>: 
		 	      <input type="text" name="ibu_istri_pekerjaan" id="ibu_istri_pekerjaan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="ibu_istri_alamat" type="text" id="ibu_istri_alamat" size="70" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Desa / Kelurahan </td>
			 	  <td>: 
		 	      <input type="text" name="ibu_istri_desa" id="ibu_istri_desa" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kecamatan</td>
			 	  <td>: 
		 	      <input type="text" name="ibu_istri_kecamatan" id="ibu_istri_kecamatan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kabupaten </td>
			 	  <td>:
		 	      <input type="text" name="ibu_istri_kota" id="ibu_istri_kota" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Provinsi </td>
			 	  <td>: 
		 	      <input type="text" name="ibu_istri_provinsi" id="ibu_istri_provinsi" /></td>
		 	   </tr>
			 	
			 </table>
			 
		  </fieldset>
		<!--  <fieldset >
		 		<legend><b>Data Saksi </b></legend>
			 <table>
				<tr>
			 		<td width="200px">NIK Saksi 1 </td> 
			 		<td> : <input type="text" name="saksi1_nik" id="saksi1_nik"  style="width:400px;"/></td>
			 	</tr>
			 	<tr>
			 	  <td>Nama Saksi 1</td>
			 	  <td>: 
		 	      <input type="text" name="saksi1_nama" id="saksi1_nama"  style="width:400px;"/></td>
		 	   </tr>
			 	<tr>
			 	  <td>NIK Saksi 2</td>
			 	  <td>: 
		 	      <input type="text" name="saksi2_nik" id="saksi2_nik"  style="width:400px;"/></td>
		 	   </tr>
			 	<tr>
			 		<td width="200px">Nama Saksi 2 </td> 
			 		<td> : <input type="text" name="saksi2_nama" id="saksi2_nama"  style="width:400px;"/></td>
			 	</tr>
			 		<tr>
			 	  <td>NIK Saksi 3</td>
			 	  <td>: 
		 	      <input type="text" name="saksi2_nik" id="saksi2_nik"  style="width:400px;"/></td>
		 	   </tr>
			 	<tr>
			 		<td width="200px">Nama Saksi 3 </td> 
			 		<td> : <input type="text" name="saksi2_nama" id="saksi2_nama"  style="width:400px;"/></td>
			 	</tr>
		 		 -->
			 	 
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
  
  	 $("#suami_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#suami_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#suami_nama").val(obj.nama);
				$("#suami_no_kk").val(obj.no_kk);
				$("#suami_tempat_lahir").val(obj.tmp_lahir);
				$("#suami_tanggal_lahir").datebox('setValue',obj.tgl_lahir);
				$("#suami_warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#suami_agama").val(obj.agama).attr('selected','selected');
				$("#suami_pekerjaan").val(obj.pekerjaan);
				$("#suami_alamat").val(obj.alamat);
				$("#suami_desa").val(obj.desa);
				$("#suami_kecamatan").val(obj.kecamatan);
				$("#suami_kota").val(obj.kota);
				$("#suami_provinsi").val(obj.provinsi);
			}
		});
	 
	 });
	 
	 
	  $("#istri_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#istri_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#istri_nama").val(obj.nama);
				$("#istri_tempat_lahir").val(obj.tmp_lahir);
				$("#istri_warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#istri_tanggal_lahir").datebox('setValue',obj.tgl_lahir);
				$("#istri_agama").val(obj.agama);
				$("#istri_pekerjaan").val(obj.pekerjaan);
				$("#istri_alamat").val(obj.alamat);
				$("#istri_desa").val(obj.desa);
				$("#istri_kecamatan").val(obj.kecamatan);
				$("#istri_kota").val(obj.kota);
				$("#istri_provinsi").val(obj.provinsi);
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
				$("#ayah_suami_agama").val(obj.agama);
				$("#ayah_suami_pekerjaan").val(obj.pekerjaan);
				$("#ayah_suami_alamat").val(obj.alamat);
				$("#ayah_suami_desa").val(obj.desa);
				$("#ayah_suami_kecamatan").val(obj.kecamatan);
				$("#ayah_suami_kota").val(obj.kota);
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
				$("#ibu_suami_agama").val(obj.agama);
				$("#ibu_suami_pekerjaan").val(obj.pekerjaan);
				$("#ibu_suami_alamat").val(obj.alamat);
				$("#ibu_suami_desa").val(obj.desa);
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