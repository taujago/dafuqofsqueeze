<div id="dlg" class="easyui-dialog" style="width:900px;height:600px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Data Surat Nikah</div>
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
			 		<td>: 
		 	      <input type="text" name="tanggal" id="tanggal" /></td>
			 	</tr>
			 	 </fieldset >
			 	 <br>
		 <fieldset >
		 		<legend><b>Data Jenazah</b></legend>
			 <table width="100%">
	
		 		
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
			 	<tr>
			 	  <td >Jenis Kelamin</td>
			 	  <td>: <?php  $arr=array("L"=>"LAKI - LAKI","P"=>"PEREMPUAN"); 
				  	echo form_dropdown("jk",$arr,'','id="jk"');
				  ?></td>
		 	   </tr>
			 	<tr>
			 	
			 	  <td >Agama</td>
			 	  <td>: 
		 	          <input name="agama" type="text" id="agama" size="70" /></td>
		 	   </tr>
			 	<tr>

			 	  <td >Warga Negara</td>
			 	   <td>: 
		 	          <input name="warga_negara" type="text" id="warga_negara" size="70" /></td>
		 	   </tr>
			 	
			 	<tr>
			 	  <td >Pekerjaan</td>
			 	  <td>: 
		 	      <input type="text" name="pekerjaan" id="pekerjaan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="alamat" type="text" id="alamat" size="80" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Desa / Kelurahan </td>
			 	  <td>: 
		 	      <input type="text" name="desa" id="desa" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kecamatan</td>
			 	  <td>: 
		 	      <input type="text" name="kecamatan" id="kecamatan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kabupaten </td>
			 	  <td>:
		 	      <input type="text" name="kabupaten" id="kabupaten" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >Tempat Meninggal </td>
			 	  <td>: 
		 	      <input type="text" name="tempat_meninggal" id="tempat_meninggal" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Tanggal Meninggal </td>
			 	  <td>: 
		 	      <input type="text" name="tgl_meninggal" id="tgl_meninggal" /></td>
		 	      <tr>
			 	  <td >Pukul </td>
			 	  <td>: 
		 	      <input type="text" name="jam_meninggal" id="jam_meninggal" /></td>
		 	      <tr>
			 		<td > Penyebab Kematian</td> 
			 		<td> : <?php echo 
			 		form_dropdown("penyebab_kematian",
			 		$this->cm->arr_penyebab_kematian,'','id="penyebab_kematian"'); ?> </td>
			 	</tr>
			 	<tr>
			 		<td > Yang Menerangkan</td> 
			 		<td> : <?php echo 
			 		form_dropdown("yang_menerangkan",
			 		$this->cm->arr_yang_menerangkan,'','id="yang_menerangkan"'); ?> </td>
			 	</tr>
			 	 
		 	  
			 	<tr>
			 	  <td >&nbsp;</td>
			 	  <td>&nbsp;</td>
		 	   </tr>
			 	<tr>
			 	 </table>	
          </fieldset >
<fieldset >
			 	 <table width="100%">
			 	  <td colspan="2" ><strong>DATA AYAH JENAZAH </strong></td>
		 	   </tr>
			 		<tr>
			 		<td width="263" >NIK </td> 
			 		<td width="623"> : 
			 		  <input name="bapak_nik" type="text" id="bapak_nik" />  
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
			 	  <td >Tempat Lahir</td>
			 	  <td>: 
		 	      <input name="bapak_tempat_lahir" type="text" id="bapak_tempat_lahir" size="70" /></td>
		 	   </tr>
			 	<tr>
			 		<td > Tanggal  Lahir</td> 
			 		<td> : <input type="text" name="bapak_tanggal_lahir" id="bapak_tanggal_lahir" />  </td>
			 	</tr>
<tr>
			 	  <td >Agama</td>
			 	  <td>: 
		 	      <input name="bapak_agama" type="text" id="bapak_agama" size="70" /></td>
		 	   </tr>

			 	<tr>
			 	  <td >Warga Negara</td>
			 	 <td>: 
		 	      <input name="bapak_warga_negara" type="text" id="bapak_warga_negara" size="70" /></td>   </tr>
			 	
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
		 	      <input type="text" name="bapak_kabupaten" id="bapak_kabupaten" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Provinsi </td>
			 	  <td>: 
		 	      <input type="text" name="bapak_provinsi" id="bapak_provinsi" /></td>
		 	   </tr>
			 	
			 	  <td >&nbsp;</td>
			 	  <td>&nbsp;</td>
		 	   </tr>
			 	
			 </table>
			 
		  </fieldset>
		
			<br>
			<br>
			 <fieldset >
		 		<legend><b>DATA Ibu Jenazah</b></legend>
			 <table width="100%">
	
		 		
      <tr>
			 		<td width="265" >NIK </td> 
 		<td width="621"> : 
 		  <input name="ibu_nik" type="text" id="ibu_nik" />  
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
			 	  <td >Tempat Lahir</td>
			 	  <td>: 
		 	      <input name="ibu_tempat_lahir" type="text" id="ibu_tempat_lahir" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 		<td > Tanggal  Lahir</td> 
			 		<td> : <input type="text" name="ibu_tanggal_lahir" id="ibu_tanggal_lahir" />  </td>
			 	</tr>
			 	<tr>
			 	  <td >Warga Negara</td>
			 	  <td>: 
		 	      <input name="ibu_warga_negara" type="text" id="ibu_warga_negara" size="70" /></td>
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
		 	      <input type="text" name="ibu_kabupaten" id="ibu_kabupaten" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Provinsi </td>
			 	  <td>: 
		 	      <input type="text" name="ibu_provinsi" id="ibu_provinsi" /></td>
		 	   </tr>
			 	
			 	<tr>
			 	  <td >&nbsp;</td>
			 	  <td>&nbsp;</td>
		 	   </tr>
			 	
			 	
			 </table>
			 
		  </fieldset>
		 <fieldset >
		 		<legend><b>Data Pelapor dan Saksi </b></legend>
			 <table width="100%">
				<tr>
			 		<td width="246">NIK Saksi 1 </td> 
			 		<td width="640"> : 
		 		  <input type="text" name="saksi1_nik" id="saksi1_nik"  style="width:400px;"/></td>
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
			 		<td width="246">Nama Saksi 2 </td> 
		 		  <td> : <input type="text" name="saksi2_nama" id="saksi2_nama"  style="width:400px;"/></td>
			 	</tr>
			 		<tr>
			 	  <td>NIK Saksi 3</td>
			 	  <td>: 
		 	      <input type="text" name="saksi2_nik" id="saksi2_nik"  style="width:400px;"/></td>
		 	   </tr>
			 	<tr>
			 		<td width="246">Hubungan Pelapor </td> 
		 		  <td> : <input type="text" name="hubungan_pelapor" id="hubungan_pelapor"  style="width:400px;"/></td>
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
			          <input name="ttd_nama" type="text" id="ttd_nama" size="40" /> </td></tr>              
		            <tr class="atas_nama">
		              <td>Jabatan </td>
		              <td>: <input name="ttd_jabatan" type="text" id="ttd_jabatan" size="40" /> </td></tr>                    <tr class="atas_nama">
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
			url : '<?php echo site_url("general/get_data_parent"); ?>',
			data : { nik : $("#nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#nama").val(obj.nama);
				$("#tempat_lahir").val(obj.tmp_lahir);
				$("#warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#tanggal_lahir").datebox('setValue',obj.tgl_lahir);
				$("#tgl_meninggal").datebox('setValue',obj.tgl_meninggal);
				$("#agama").val(obj.agama);
				$("#jk").val(obj.jk).attr('selected','selected');
				$("#pekerjaan").val(obj.pekerjaan);
				$("#tempat_meninggal").val(obj.tempat_meninggal);
				$("#alamat").val(obj.alamat);
				$("#desa").val(obj.desa);
				$("#kecamatan").val(obj.kecamatan);
				$("#kabupaten").val(obj.kota);
				$("#provinsi").val(obj.provinsi);
			}
		});
	 
	 });




  	 $("#bapak_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_parent"); ?>',
			data : { nik : $("#bapak_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#bapak_nama").val(obj.nama);
				$("#bapak_tempat_lahir").val(obj.tmp_lahir);
				
				$("#bapak_tanggal_lahir").datebox('setValue',obj.tgl_lahir);
				$("#bapak_warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#agama").val(obj.agama);
				$("#bapak_agama").val(obj.agama).attr('selected','selected');
				$("#bapak_pekerjaan").val(obj.pekerjaan);
				$("#bapak_alamat").val(obj.alamat);
				$("#bapak_desa").val(obj.desa);
				$("#bapak_kecamatan").val(obj.kecamatan);
				$("#bapak_kabupaten").val(obj.kota);
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
				$("#ibu_tempat_lahir").val(obj.tmp_lahir);
				$("#ibu_warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#ibu_tanggal_lahir").datebox('setValue',obj.tgl_lahir);
				$("#ibu_agama").val(obj.agama);
				$("#ibu_pekerjaan").val(obj.pekerjaan);
				$("#ibu_alamat").val(obj.alamat);
				$("#ibu_desa").val(obj.desa);
				$("#ibu_kecamatan").val(obj.kecamatan);
				$("#ibu_kabupaten").val(obj.kota);
				$("#ibu_provinsi").val(obj.provinsi);
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