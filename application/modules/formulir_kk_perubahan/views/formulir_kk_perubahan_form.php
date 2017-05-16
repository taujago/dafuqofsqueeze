<style>
.dn, .ln {
	display:none;
}
 
 .dropdown {
 	width:90%
 }
</style>

<div id="dlg" class="easyui-dialog" style="width:900px;height:600px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="title">Data Formulir Permohonan Perubahan KK</div>
		<form  method="post" novalidate name="fm" id="fm">			 
			<input type="hidden" name="id" id="id" />
		 	<fieldset>
		 		<legend><b>Data pemohon</b></legend>
			 <table>
			 	<tr>
			 		<td width="200">NIK  </td> 
			 		<td> : <input type="text" name="pemohon_nik" id="pemohon_nik" />
			 		<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('pemohon_nik');">
			 			cari </a>			 		</td>
			 	</tr>
			 	<tr>
			 	  <td >Nama</td>
			 	  <td>: 
		 	      <input name="pemohon_nama" type="text" id="pemohon_nama" size="70" /></td>
		 	   </tr>

			 	 <tr>
			 		<td width="200px">Alasan Pemohon  </td> 
			 		<td> :  <?php echo form_dropdown("alasan",array
			 		("1"=>"1. Karena Perubahan Anggota Keluarga (kelahiran, kedatangan)",
			 		 "2"=>"2. Karena Pengurangan Anggota Keluarga (kematian, kepindahan)",
			 		 "3"=>"3. Lainnya")) ?> </td>
			 <!-- 	</tr>
			 		<tr>
			 		<td width="200px">No Hp/Telepon </td> 
			 		<td> : <input size="40" type="text" name="pemohon_telepon" id="pemohon_telepon" /></td>
			 	</tr> -->
			 
		 </table>

			 
		  </fieldset>

		   	<fieldset>
		 		<legend><b>Data KK Yang Diikuti</b></legend>
			 <table>
			 	<tr>
			 		<td width="200">NIK  </td> 
			 		<td> : <input type="text" name="kk_diikuti_nik" id="kk_diikuti_nik" />
			 		<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('kk_diikuti_nik');">
			 			cari </a>			 		</td>
			 	</tr>
			 	<tr>
			 	  <td >Nama Kepala Keluarga</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_nama" type="text" id="kk_diikuti_nama" size="70" /></td>
		 	   </tr>

			 	<tr>
			 	  <td >No. KK</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_no_kk" type="text" id="kk_diikuti_no_kk" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >Alamat</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_alamat" type="text" id="kk_diikuti_alamat" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >Desa</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_desa" type="text" id="kk_diikuti_desa" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >Kecamatan</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_kecamatan" type="text" id="kk_diikuti_kecamatan" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >Kabupaten</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_kota" type="text" id="kk_diikuti_kota" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >RT</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_rt" type="text" id="kk_diikuti_rt" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >RW</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_rw" type="text" id="kk_diikuti_rw" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >Kode Pos</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_kode_pos" type="text" id="kk_diikuti_kode_pos" size="70" /></td>
		 	   </tr>
			 		<tr>
			 		<td width="200px">No Hp/ Telepon </td> 
			 		<td> : <input size="40" type="text" name="kk_diikuti_telepon" id="kk_diikuti_telepon" /></td>
			 	</tr>
			 
			 
		 </table>

			 
		  </fieldset>


		  	<fieldset>
		 		<legend><b>Data KK Lama</b></legend>
			 <table>
			 <tr>
			 	<td>
			 		<?php 
	$desa = $this->cm->data_desa();

	?>
			 	</td><td><input type="checkbox"  id="chkSame" value="checkbox" onClick="setPaymentInfo(this.checked);"><label for="chkSame" style="cursor:pointer"> - Ceklist Jika Data KK Lama sama dengan Data KK Yang Akan Diikuti.<br> - Atau cari data KK jika KK Lama berada dalam desa <?php echo   $desa->desa ?><br> - Atau Isi Secara Manual Jika KK lama tidak berada dalam desa <?php echo   $desa->desa ?></td>
			 </tr>
			 	<tr>
			 		<td width="200">NIK Kepala Keluarga Lama  </td> 
			 		<td> : <input type="text" name="kk_diikuti_nik_sebelumnya" id="kk_diikuti_nik_sebelumnya" />
			 		<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('kk_diikuti_nik_sebelumnya');">
			 			cari </a>			 		</td>
			 	</tr>
			 	<tr>
			 	  <td >Nama Kepala Keluarga Lama</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_nama_sebelumnya" type="text" id="kk_diikuti_nama_sebelumnya" size="70" /></td>
		 	   </tr>

			 	<tr>
			 	  <td >No. KK Lama</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_no_kk_sebelumnya" type="text" id="kk_diikuti_no_kk_sebelumnya" size="70" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >Alamat Keluarga Lama</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_alamat_sebelumnya" type="text" id="kk_diikuti_alamat_sebelumnya" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >Desa Keluarga Lama</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_desa_sebelumnya" type="text" id="kk_diikuti_desa_sebelumnya" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >Kecamatan Keluarga Lama</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_kecamatan_sebelumnya" type="text" id="kk_diikuti_kecamatan_sebelumnya" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >Kabupaten Keluarga Lama</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_kota_sebelumnya" type="text" id="kk_diikuti_kota_sebelumnya" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >RT Keluarga Lama</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_rt_sebelumnya" type="text" id="kk_diikuti_rt_sebelumnya" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >RW Keluarga Lama</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_rw_sebelumnya" type="text" id="kk_diikuti_rw_sebelumnya" size="70" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td >Kode POS Keluarga Lama</td>
			 	  <td>: 
		 	      <input name="kk_diikuti_kode_pos_sebelumnya" type="text" id="kk_diikuti_kode_pos_sebelumnya" size="70" /></td>
		 	   </tr>
			 		<tr>
			 		<td width="200px">No Hp/ Telepon Keluarga Lama </td> 
			 		<td> : <input size="40" type="text" name="kk_diikuti_telepon_sebelumnya" id="kk_diikuti_telepon_sebelumnya" /></td>
			 	</tr>

			 	
			 
		 </table>

			 
		  </fieldset>
		  
			<fieldset  style="width:507px; float:left" >
				<legend> <strong>Anggota Keluarga  Pemohon</strong></legend>
				<table>
				<tr>
			 		<td width="200px">NIK Anggota Keluarga </td> 
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
					<fieldset  style="width:100%; float:left" > <legend><strong>Pejabat </strong></legend>
				<table>
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
		             <!--  <tr><td> Ditandatangani Oleh Camat </td>
                      <td> : <?php $arr = array(0=>"Tidak","Ya"); echo form_dropdown("ttd_camat",$arr); ?> </td>
                      </tr> -->
				</table>

			</fieldset>	

		</form>
		<br /><br /><br />
		<div style="clear:both;"></div>
		<div style="width:966px;  margin:11px;">
		<fieldset>
		<legend><strong>Anggota Keluarga Pemohon</strong></legend>
		 
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
	 	 
	  $("#kk_diikuti_nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#kk_diikuti_nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#kk_diikuti_nama").val(obj.nama);
				$("#kk_diikuti_no_kk").val(obj.no_kk);
				$("#kk_diikuti_tempat_lahir").val(obj.tmp_lahir);
				$("#kk_diikuti_warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#kk_diikuti_tgl_lahir").datebox('setValue',obj.tgl_lahir);
				$("#kk_diikuti_agama").val(obj.agama).attr('selected','selected');
				$("#kk_diikuti_pekerjaan").val(obj.pekerjaan);
				$("#kk_diikuti_alamat").val(obj.alamat);
				$("#kk_diikuti_desa").val(obj.desa);
				$("#kk_diikuti_kecamatan").val(obj.kecamatan);
				$("#kk_diikuti_kota").val(obj.kota);
				$("#kk_diikuti_provinsi").val(obj.provinsi);
				$("#kk_diikuti_rt").val(obj.rt);
				$("#kk_diikuti_rw").val(obj.rw);
			}
		});
	 
	 });

  $("#kk_diikuti_nama_sebelumnya").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#kk_diikuti_nik_sebelumnya").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#kk_diikuti_nama_sebelumnya").val(obj.nama);
				$("#kk_diikuti_no_kk_sebelumnya").val(obj.no_kk);
				$("#kk_diikuti_tempat_lahir").val(obj.tmp_lahir);
				$("#kk_diikuti_warga_negara").val(obj.warga_negara).attr('selected','selected');
				$("#kk_diikuti_tgl_lahir").datebox('setValue',obj.tgl_lahir);
				$("#kk_diikuti_agama").val(obj.agama).attr('selected','selected');
				$("#kk_diikuti_pekerjaan").val(obj.pekerjaan);
				$("#kk_diikuti_alamat_sebelumnya").val(obj.alamat);
				$("#kk_diikuti_desa_sebelumnya").val(obj.desa);
				$("#kk_diikuti_kecamatan_sebelumnya").val(obj.kecamatan);
				$("#kk_diikuti_kota_sebelumnya").val(obj.kota);
				$("#kk_diikuti_provinsi_sebelumnya").val(obj.provinsi);
				$("#kk_diikuti_rt_sebelumnya").val(obj.rt);
				$("#kk_diikuti_rw_sebelumnya").val(obj.rw);
			}
		});
	 
	 });

	 
	 
	


  
  });
</script>	 
<script type="text/javascript">
function setPaymentInfo(isChecked)
{
	with (window.document.fm) {
		if (isChecked) {
			kk_diikuti_nik_sebelumnya.value = kk_diikuti_nik.value;
			kk_diikuti_nama_sebelumnya.value = kk_diikuti_nama.value;
			kk_diikuti_no_kk_sebelumnya.value = kk_diikuti_no_kk.value;
			kk_diikuti_telepon_sebelumnya.value = kk_diikuti_telepon.value;
			kk_diikuti_kode_pos_sebelumnya.value = kk_diikuti_kode_pos.value;
			kk_diikuti_alamat_sebelumnya.value = kk_diikuti_alamat.value;
			kk_diikuti_rt_sebelumnya.value = kk_diikuti_rt.value;
			kk_diikuti_rw_sebelumnya.value = kk_diikuti_rw.value;
			kk_diikuti_desa_sebelumnya.value = kk_diikuti_desa.value;
			kk_diikuti_kecamatan_sebelumnya.value = kk_diikuti_kecamatan.value;			
			kk_diikuti_kota_sebelumnya.value = kk_diikuti_kota.value;
			kk_diikuti_provinsi_sebelumnya.value = kk_diikuti_provinsi.value;
			
			
			
			
			kk_diikuti_nik.readOnly  = true;
			kk_diikuti_no_kk.readOnly  = true;
			kk_diikuti_nama.readOnly  = true;
			kk_diikuti_alamat.readOnly  = true;
			
			kk_diikuti_desa.readOnly  = true;
			kk_diikuti_kecamatan.readOnly  = true;	
			kk_diikuti_kota.readOnly  = true;
			kk_diikuti_provinsi.readOnly  = true;
			kk_diikuti_rt.readOnly  = true;	
			kk_diikuti_rw.readOnly  = true;	
			kk_diikuti_telepon.readOnly  = true;	
			kk_diikuti_kode_pos.readOnly  = true;	
		} else {
			kk_diikuti_nik_sebelumnya.value = "";
			kk_diikuti_nama_sebelumnya.value = "";
			kk_diikuti_no_kk_sebelumnya.value = "";
			kk_diikuti_alamat_sebelumnya.value = "";
			kk_diikuti_desa_sebelumnya.value = "";
			kk_diikuti_kecamatan_sebelumnya.value = "";	
			kk_diikuti_kota_sebelumnya.value = "";	
			kk_diikuti_provinsi_sebelumnya.value = "";	
			kk_diikuti_rt_sebelumnya.value = "";	
			kk_diikuti_rw_sebelumnya.value = "";	
			kk_diikuti_telepon_sebelumnya.value = "";	
			kk_diikuti_kode_pos_sebelumnya.value = "";	
		}
	}
}
</script>