<script src="<?php echo base_url('assets'); ?>/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url('assets'); ?>/ckeditor/adapters/jquery.js"></script>

<div id="dlg" class="easyui-dialog" style="width:900px;height:600px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Data Surat Perjanjian</div>
		<form id="fm" method="post" novalidate>
			<input type="hidden" name="id_penduduk" id="id_penduduk" />
			<input type="hidden" name="id" id="id" />
		 		 <fieldset >
		 		<!-- <tr>
			 		<td width="200px">Nomor Surat </td> 
			 		<td> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr> -->
			 	<tr>
			 		<td > Tanggal Surat</td> 
			 		<td> : <input type="text" name="tanggal_surat" id="tanggal_surat" />  </td>
			 	</tr>
			 	 </fieldset >
			 	 <br>
		 <fieldset >
		 		<legend><b>Data Pemohon</b></legend>
			 <table>
	
		 		<tr>
		 		  <td colspan="2"><strong>DATA Pihak I</strong></td>
	 		   </tr>
		 		<tr>
			 		<td width="200">NIK  </td> 
			 		<td> : <input type="text" name="pihak1_nik" id="pihak1_nik" />
			 		<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('pihak1_nik');">
			 			cari </a>			 		</td>
			 	</tr>
			 	<tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="pihak1_nama" type="text" id="pihak1_nama" size="70" /></td>
		 	   </tr>
			 <tr>


				<tr>
			 	  <td >Tempat Lahir</td>
			 	  <td>: 
		 	      <input name="pihak1_tempat_lahir" type="text" id="pihak1_tempat_lahir" size="70" /></td>
		 	   </tr>
			 <tr>

			 		<td > Tanggal  Lahir</td> 
			 		<td> : <input type="text" name="pihak1_tanggal_lahir" id="pihak1_tanggal_lahir" />  </td>
			 	</tr>
			 	<tr>
			 	
			 	  <td >Agama</td>
			 	  <td>: 
		 	          <input name="pihak1_agama" type="text" id="pihak1_agama" size="70" /></td>
		 	   </tr>
			 	<tr>

			 	  <td >Warga Negara</td>
			 	  <td>: 
		 	      <?php echo form_dropdown("pihak1_warga_negara",$arr_warga_negara,'','id="pihak1_warga_negara"');?></td>
		 	   </tr>
			 	
			 	<tr>
			 	  <td >Pekerjaan</td>
			 	  <td>: 
		 	      <input type="text" name="pihak1_pekerjaan" id="pihak1_pekerjaan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="pihak1_alamat" type="text" id="pihak1_alamat" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >RT</td>
			 	  <td>: 
		 	      <input name="pihak1_rt" type="text" id="pihak1_rt" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >RW</td>
			 	  <td>: 
		 	      <input name="pihak1_rw" type="text" id="pihak1_rw" size="70" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Desa / Kelurahan </td>
			 	  <td>: 
		 	      <input type="text" name="pihak1_desa" id="pihak1_desa" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kecamatan</td>
			 	  <td>: 
		 	      <input type="text" name="pihak1_kecamatan" id="pihak1_kecamatan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kabupaten </td>
			 	  <td>:
		 	      <input type="text" name="pihak1_kota" id="pihak1_kota" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Provinsi </td>
			 	  <td>: 
		 	      <input type="text" name="pihak1_provinsi" id="pihak1_provinsi" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >&nbsp;</td>
			 	  <td>&nbsp;</td>
		 	   </tr>
			 	<tr>
			 	  <td colspan="2" ><strong>DATA Pihak II </strong></td>
		 	   </tr>
			 		<tr>
			 		<td >NIK </td> 
			 		<td> : <input name="pihak2_nik" type="text" id="pihak2_nik" />  
<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('pihak2_nik');">
			 			cari </a>			 		</td>
			 	</tr>
                <tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="pihak2_nama" type="text" id="pihak2_nama" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >Tempat Lahir</td>
			 	  <td>: 
		 	      <input name="pihak2_tempat_lahir" type="text" id="pihak2_tempat_lahir" size="70" /></td>
		 	   </tr>
			 	<tr>
			 		<td > Tanggal  Lahir</td> 
			 		<td> : <input type="text" name="pihak2_tanggal_lahir" id="pihak2_tanggal_lahir" />  </td>
			 	</tr>
<tr>
			 	  <td >Agama</td>
			 	  <td>: 
		 	      <input name="pihak2_agama" type="text" id="pihak2_agama" size="70" /></td>
		 	   </tr>

			 	<tr>
			 	  <td >Warga Negara</td>
			 	  <td>: 
		 	      <?php echo form_dropdown("pihak2_warga_negara",$arr_warga_negara,'','id="pihak2_warga_negara"');?></td>
		 	   </tr>
			 	
			 	<tr>
			 	  <td >Pekerjaan</td>
			 	  <td>: 
		 	      <input type="text" name="pihak2_pekerjaan" id="pihak2_pekerjaan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="pihak2_alamat" type="text" id="pihak2_alamat" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >RT</td>
			 	  <td>: 
		 	      <input name="pihak2_rt" type="text" id="pihak2_rt" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >RW</td>
			 	  <td>: 
		 	      <input name="pihak2_rw" type="text" id="pihak2_rw" size="70" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Desa / Kelurahan </td>
			 	  <td>: 
		 	      <input type="text" name="pihak2_desa" id="pihak2_desa" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kecamatan</td>
			 	  <td>: 
		 	      <input type="text" name="pihak2_kecamatan" id="pihak2_kecamatan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Kabupaten </td>
			 	  <td>:
		 	      <input type="text" name="pihak2_kota" id="pihak2_kota" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Provinsi </td>
			 	  <td>: 
		 	      <input type="text" name="pihak2_provinsi" id="pihak2_provinsi" /></td>
		 	   </tr>
			 	
			 	  <td >&nbsp;</td>
			 	  <td>&nbsp;</td>
		 	   </tr>
			 	
			 </table>

			  </fieldset>
		<fieldset> <legend> <b>Kasus</b></legend>
           <tr>
			 	  <td >Penyebab Perjanjian </td>
			 	  <td>: 
		 	      <input type="text" name="kasus" id="kasus" size="70"/></td>
		 	   </tr>
            </fieldset>
			 
		  </fieldset>
		<fieldset> <legend> <b>Rincian Perjanjian kedua pihak</b></legend>
            <textarea class="ckeditor" cols="80" id="isi_perjanjian" name="isi_perjanjian" rows="10" ></textarea>
            </fieldset>
			<br>
			<br>
			 <fieldset >
		 		<legend><b>DATA SAKSI-SAKSI</b></legend>
			 <table>
	
		 		<tr>
		 		  <td colspan="2"><strong>SAKSI I</strong></td>
	 		   </tr>
                <tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="saksi1" type="text" id="saksi1" size="70" /></td>
		 	   </tr>
			 	<tr>
			 	  <td colspan="2" ><strong>SAKSI II</strong></td>
		 	   </tr>
                <tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="saksi2" type="text" id="saksi2" size="70" /></td>
		 	   </tr>
		 	  

		 	   <tr>
			 	  <td colspan="2" ><strong>SAKSI III</strong></td>
		 	   </tr>
                <tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="saksi3" type="text" id="saksi3" size="70" /></td>
		 	   </tr>
		 	  

		 	   <tr>
			 	  <td colspan="2" ><strong>SAKSI IV</strong></td>
		 	   </tr>
                <tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="saksi4" type="text" id="saksi4" size="70" /></td>
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
  
  	 $("#pihak1_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#pihak1_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#pihak1_nama").val(obj.nama);
				$("#pihak1_tempat_lahir").val(obj.tmp_lahir);
				$("#pihak1_tanggal_lahir").datebox('setValue',obj.tgl_lahir);
				$("#pihak1_warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#pihak1_agama").val(obj.agama).attr('selected','selected');
				$("#pihak1_pekerjaan").val(obj.pekerjaan);
				$("#pihak1_alamat").val(obj.alamat);
				$("#pihak1_rt").val(obj.rt);
				$("#pihak1_rw").val(obj.rw);
				$("#pihak1_desa").val(obj.desa);
				$("#pihak1_kecamatan").val(obj.kecamatan);
				$("#pihak1_kota").val(obj.kota);
				$("#pihak1_provinsi").val(obj.provinsi);
			}
		});
	 
	 });
	 
	 
	  $("#pihak2_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#pihak2_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#pihak2_nama").val(obj.nama);
				$("#pihak2_tempat_lahir").val(obj.tmp_lahir);
				$("#pihak2_warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#pihak2_tanggal_lahir").datebox('setValue',obj.tgl_lahir);
				$("#pihak2_agama").val(obj.agama);
				$("#pihak2_pekerjaan").val(obj.pekerjaan);
				$("#pihak2_alamat").val(obj.alamat);
				$("#pihak2_rw").val(obj.rw);
				$("#pihak2_rt").val(obj.rt);
				$("#pihak2_desa").val(obj.desa);
				$("#pihak2_kecamatan").val(obj.kecamatan);
				$("#pihak2_kota").val(obj.kota);
				$("#pihak2_provinsi").val(obj.provinsi);
			}
		});
	 
	 });

  });
</script>	 