<div id="dlg" class="easyui-dialog" style="width:900px;height:600px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Data Surat Keterangan Kesaksian Pernikahan</div>
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
		 		<legend><b>Data SUAMI </b></legend>
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
		<!-- 	<tr>
			 	  <td >Jenis Kelamin</td>
			 	  <td>: <?php  $arr=array("L"=>"LAKI - LAKI","P"=>"PEREMPUAN"); 
				  	echo form_dropdown("suami_jk",$arr,'','id="suami_jk"');
				  ?></td>
		 	   </tr> -->

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
			 	  <td >RT</td>
			 	  <td>: 
		 	      <input name="istri_rt" type="text" id="istri_rt" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >RW</td>
			 	  <td>: 
		 	      <input name="istri_rw" type="text" id="istri_rw" size="70" /></td>
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
		 	    <tr>
			 	  <td >&nbsp;</td>
			 	  <td>&nbsp;</td>
		 	   </tr>
		 	  	<tr>
			 	  <td >Tanggal Pernikahan </td>
			 	  <td>: 
		 	      <input type="text" name="tgl_pernikahan" id="tgl_pernikahan" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >&nbsp;</td>
			 	  <td>&nbsp;</td>
		 	   </tr>
			 	<tr>
			 	  <td colspan="2" ><strong>DATA ANAK </strong></td>
		 	   </tr>
		 	    <tr>
			 	  <td colspan="2">Masukkan Nama Salah Satu Anak Kandung Dari Suami Istri Di atas</td>
			 	 
		 	   </tr>
			 		<tr>
			 		<td >NIK </td> 
			 		<td> : <input name="anak_nik" type="text" id="anak_nik" />  
<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('anak_nik');">
			 			cari </a>			 		</td>
			 	</tr>
			 	
                <tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="anak_nama" type="text" id="anak_nama" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >Jenis Kelamin</td>
			 	  <td>: <?php  $arr=array("L"=>"LAKI - LAKI","P"=>"PEREMPUAN"); 
				  	echo form_dropdown("anak_jk",$arr,'','id="anak_jk"');
				  ?></td>
		 	   <tr>
			 	  <td >Tempat Lahir</td>
			 	  <td>: 
		 	      <input name="anak_tempat_lahir" type="text" id="anak_tempat_lahir" size="70" /></td>
		 	   </tr>
			 	<tr>
			 		<td > Tanggal  Lahir</td> 
			 		<td> : <input type="text" name="anak_tanggal_lahir" id="anak_tanggal_lahir" />  </td>
			 	</tr>
<tr>
			 	  <td >Agama</td>
			 	  <td>: 
		 	      <input name="anak_agama" type="text" id="anak_agama" size="70" /></td>
		 	   </tr>

			 	<tr>
			 	  <td >Warga Negara</td>
			 	  <td>: 
		 	      <?php echo form_dropdown("anak_warga_negara",$arr_warga_negara,'','id="anak_warga_negara"');?></td>
		 	   </tr>
			 	
			 	<tr>
			 	  <td >Pekerjaan</td>
			 	  <td>: 
		 	      <input type="text" name="anak_pekerjaan" id="anak_pekerjaan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="anak_alamat" type="text" id="anak_alamat" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >RT</td>
			 	  <td>: 
		 	      <input name="anak_rt" type="text" id="anak_rt" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >RW</td>
			 	  <td>: 
		 	      <input name="anak_rw" type="text" id="anak_rw" size="70" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Desa / Kelurahan </td>
			 	  <td>: 
		 	      <input type="text" name="anak_desa" id="anak_desa" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kecamatan</td>
			 	  <td>: 
		 	      <input type="text" name="anak_kecamatan" id="anak_kecamatan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kabupaten </td>
			 	  <td>:
		 	      <input type="text" name="anak_kota" id="anak_kota" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Provinsi </td>
			 	  <td>: 
		 	      <input type="text" name="anak_provinsi" id="anak_provinsi" /></td>
		 	   </tr>
		 	    <tr>
			 	  
			 	  <td>&nbsp;</td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Anak Ke </td>
			 	  <td>: 
		 	      <input type="text" name="anak_ke" id="anak_ke" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >&nbsp;</td>
			 	  <td>&nbsp;</td>
		 	   </tr>
			 	<tr>
			 	  <td colspan="2" ><strong>SAKSI-SAKSI YANG MENYATAKAN </strong></td>
		 	   </tr>
		 	   <tr>
			 	  <td colspan="2" ><strong><u>Saksi I</u> </strong></td>
		 	   </tr>
		 	   
			 	<tr>
			 	  <td >NIK</td>
			 	  <td>: 
		 	      <input name="saksi_nik" type="text" id="saksi_nik" size="70" /></td>
		 	   </tr>
			 	
                <tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="saksi_nama" type="text" id="saksi_nama" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >Tempat Lahir</td>
			 	  <td>: 
		 	      <input name="saksi_tempat_lahir" type="text" id="saksi_tempat_lahir" size="70" /></td>
		 	   </tr>
			 	<tr>
			 		<td > Tanggal  Lahir</td> 
			 		<td> : <input type="text" name="saksi_tanggal_lahir" id="saksi_tanggal_lahir" />  </td>
			 	</tr>

			 	
			 	<tr>
			 	  <td >Pekerjaan</td>
			 	  <td>: 
		 	      <input type="text" name="saksi_pekerjaan" id="saksi_pekerjaan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="saksi_alamat" type="text" id="saksi_alamat" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td colspan="2" ><strong><u>Saksi II</u> </strong></td>
		 	   </tr>
		 	   
			 	<tr>
			 	  <td >NIK</td>
			 	  <td>: 
		 	      <input name="saksi2_nik" type="text" id="saksi2_nik" size="70" /></td>
		 	   </tr>
			 	
                <tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="saksi2_nama" type="text" id="saksi2_nama" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >Tempat Lahir</td>
			 	  <td>: 
		 	      <input name="saksi2_tempat_lahir" type="text" id="saksi2_tempat_lahir" size="70" /></td>
		 	   </tr>
			 	<tr>
			 		<td > Tanggal  Lahir</td> 
			 		<td> : <input type="text" name="saksi2_tanggal_lahir" id="saksi2_tanggal_lahir" />  </td>
			 	</tr>

			 	
			 	<tr>
			 	  <td >Pekerjaan</td>
			 	  <td>: 
		 	      <input type="text" name="saksi2_pekerjaan" id="saksi2_pekerjaan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="saksi2_alamat" type="text" id="saksi2_alamat" size="70" /></td>
		 	   </tr>
		 	  
			 	  <td >&nbsp;</td>
			 	  <td>&nbsp;</td>
		 	   </tr>
			 	
			 </table>
			 
		  </fieldset>
		
		
			 <?php
					$this->load->view("berkas");
				?>
		
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
				$("#istri_rw").val(obj.rw);
				$("#istri_rt").val(obj.rt);
				$("#istri_desa").val(obj.desa);
				$("#istri_kecamatan").val(obj.kecamatan);
				$("#istri_kota").val(obj.kota);
				$("#istri_provinsi").val(obj.provinsi);
			}
		});
	 
	 });


  $("#anak_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#anak_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#anak_nama").val(obj.nama);
				$("#anak_jk").val(obj.jk);
				$("#anak_tempat_lahir").val(obj.tmp_lahir);
				$("#anak_warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#anak_tanggal_lahir").datebox('setValue',obj.tgl_lahir);
				$("#anak_agama").val(obj.agama);
				$("#anak_pekerjaan").val(obj.pekerjaan);
				$("#anak_alamat").val(obj.alamat);
				$("#anak_rw").val(obj.rw);
				$("#anak_rt").val(obj.rt);
				$("#anak_desa").val(obj.desa);
				$("#anak_kecamatan").val(obj.kecamatan);
				$("#anak_kota").val(obj.kota);
				$("#anak_provinsi").val(obj.provinsi);
			}
		});
	 
	 });



  
  });
</script>	 