<div id="dlg" class="easyui-dialog" style="width:900px;height:600px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Data Surat Kelahiran</div>
		<form id="fm" method="post" novalidate>
			<input type="hidden" name="id_penduduk" id="id_penduduk" />
			<input type="hidden" name="id" id="id" />
		 	<fieldset >
		 		<legend><b>Data Kelahiran</b></legend>
			 <table>
				
				<tr>
			 		<td width="200px">Nomor Surat </td> 
			 		<td> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr>

		 		<tr>
			 		<td width="200px">Nama Bayi </td> 
			 		<td> : <input size="40" type="text" name="nama" id="nama" /></td>
			 	</tr>
			 	<tr>
			 		<td width="200px">Jeni Kelamin  </td> 
			 		<td> :  <?php echo form_dropdown("jk",array("L"=>"L","P"=>"P")) ?> </td>
			 	</tr>
			 	<tr>
			 		<td > Tempat Lahir</td> 
			 		<td> : <input type="text" name="tmp_lahir" id="tmp_lahir" />  </td>
			 	</tr>
			 	<tr>
			 		<td > Tempat Dilahirkan</td> 
			 		<td> : <input type="text" name="tmp_kelahiran" id="tmp_kelahiran" />  </td>
			 	</tr>
			 	<tr>
			 		<td > Tanggal  Lahir</td> 
			 		<td> : <input type="text" name="tgl_lahir" id="tgl_lahir" />  </td>
			 	</tr>
			 	<tr>
			 		<td > Jam  Lahir</td> 
			 		<td> : <input type="text" name="jam_lahir" id="jam_lahir" />  </td>
			 	</tr>
			 	<tr>
			 		<td > Berat</td> 
			 		<td> : <input size="5" type="text" name="berat" id="berat" /> Kg  </td>
			 	</tr>
			 	<tr>
			 		<td > Anak Ke </td> 
			 		<td> : <input type="text" name="anak_ke" id="anak_ke" />  </td>
			 	</tr>
			 	<tr>
			 		<td > Penolong Kelahiran</td> 
			 		<td> : <input type="text" name="penolong_kelahiran" id="penolong_kelahiran" />  </td>
			 	</tr>


			 </table>
			 
			</fieldset>
		 <fieldset >
		 		<legend><b>Data Orangtua Bayi</b></legend>
			 <table>
	
		 		<tr>
		 		  <td colspan="2"><strong>DATA BAPAK</strong></td>
	 		   </tr>
		 		<tr>
			 		<td width="200">NIK  </td> 
			 		<td> : <input type="text" name="bapak_nik" id="bapak_nik" />
			 		<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('bapak_nik');">
			 			cari </a>			 		</td>
			 	</tr>
			 	<tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="bapak_nama" type="text" id="bapak_nama" size="70" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Umur </td>
			 	  <td>: 
		 	      <input name="bapak_umur" type="text" id="bapak_umur" size="5" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Warga Negara</td>
			 	  <td>: 
		 	      <?php echo form_dropdown("bapak_warga_negara",$arr_warga_negara,'','id="bapak_warga_negara"');?></td>
		 	   </tr>
			 	<tr>
			 	  <td >Keturunan </td>
			 	  <td>: 
		 	      <input type="text" name="bapak_keturunan" id="bapak_keturunan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Pekerjaan</td>
			 	  <td>: 
		 	      <input type="text" name="bapak_pekerjaan" id="bapak_pekerjaan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="bapak_alamat" type="text" id="bapak_alamat" size="80" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Desa / Kelurahan </td>
			 	  <td>: 
		 	      <input type="text" name="bapak_desa" id="bapak_desa" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kecamatan</td>
			 	  <td>: 
		 	      <input type="text" name="bapak_kecamatan" id="bapak_kecamatan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kabupaten </td>
			 	  <td>:
		 	      <input type="text" name="bapak_kota" id="bapak_kota" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Provinsi </td>
			 	  <td>: 
		 	      <input type="text" name="bapak_provinsi" id="bapak_provinsi" /></td>
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
			 		<td> : <input name="ibu_nik" type="text" id="ibu_nik" />  
<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('ibu_nik');">
			 			cari </a>			 		</td>
			 	</tr>
                <tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="ibu_nama" type="text" id="ibu_nama" size="70" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Umur </td>
			 	  <td>: 
		 	      <input name="ibu_umur" type="text" id="ibu_umur" size="5" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Warga Negara</td>
			 	  <td>: 
		 	      <?php echo form_dropdown("ibu_warga_negara",$arr_warga_negara,'','id="ibu_warga_negara"');?></td>
		 	   </tr>
			 	<tr>
			 	  <td >Keturunan </td>
			 	  <td>: 
		 	      <input type="text" name="ibu_keturunan" id="ibu_keturunan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Pekerjaan</td>
			 	  <td>: 
		 	      <input type="text" name="ibu_pekerjaan" id="ibu_pekerjaan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="ibu_alamat" type="text" id="ibu_alamat" size="80" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Desa / Kelurahan </td>
			 	  <td>: 
		 	      <input type="text" name="ibu_desa" id="ibu_desa" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kecamatan</td>
			 	  <td>: 
		 	      <input type="text" name="ibu_kecamatan" id="ibu_kecamatan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kabupaten </td>
			 	  <td>:
		 	      <input type="text" name="ibu_kota" id="ibu_kota" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Provinsi </td>
			 	  <td>: 
		 	      <input type="text" name="ibu_provinsi" id="ibu_provinsi" /></td>
		 	   </tr>
			 	<tr>
			 		<td > Tanggal  Pernikahan</td> 
			 		<td> : <input type="text" name="tgl_pernikahan" id="tgl_pernikahan" />  </td>
			 	</tr>
			 </table>
			 
		  </fieldset>
		 <fieldset >
		 		<legend><b>Data Pelapor dan Saksi </b></legend>
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
			 		<td width="200px">Saksi 2 </td> 
			 		<td> : <input type="text" name="saksi2_nama" id="saksi2_nama"  style="width:400px;"/></td>
			 	</tr>
		 		<tr>
			 		<td width="200px">Pelapor </td> 
			 		<td> : <input type="text" name="pelapor_nik" id="pelapor_nik"  style="width:400px;"/>

			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('pelapor_nik');">
			 			cari </a>
			 		</td>
			 	</tr>
			 	<tr>
			 		<td >Hubungan Pelapor </td> 
			 		<td> : <?php echo form_dropdown("hubungan_pelapor",$this->cm->arr_hubungan_pelapor) ?>  </td>
			 		
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
  
  	 $("#bapak_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_parent"); ?>',
			data : { nik : $("#bapak_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#bapak_nama").val(obj.nama);
				$("#bapak_umur").val(obj.umur);
				$("#bapak_warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#bapak_keturunan").val(obj.keturunan);
				$("#bapak_pekerjaan").val(obj.pekerjaan);
				$("#bapak_alamat").val(obj.alamat);
				$("#bapak_desa").val(obj.desa);
				$("#bapak_kecamatan").val(obj.kecamatan);
				$("#bapak_kota").val(obj.kota);
				$("#bapak_provinsi").val(obj.provinsi);
			}
		});
	 
	 });
	 
	 
	  $("#ibu_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_parent"); ?>',
			data : { nik : $("#ibu_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#ibu_nama").val(obj.nama);
				$("#ibu_umur").val(obj.umur);
				$("#ibu_warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#ibu_keturunan").val(obj.keturunan);
				$("#ibu_pekerjaan").val(obj.pekerjaan);
				$("#ibu_alamat").val(obj.alamat);
				$("#ibu_desa").val(obj.desa);
				$("#ibu_kecamatan").val(obj.kecamatan);
				$("#ibu_kota").val(obj.kota);
				$("#ibu_provinsi").val(obj.provinsi);
			}
		});
	 
	 });
  
  });
</script>	 