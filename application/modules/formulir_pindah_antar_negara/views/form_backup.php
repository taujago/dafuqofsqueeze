<style>
.dn, .ln {
	display:none;
}
 
 .dropdown {
 	width:90%
 }
</style>

<div id="dlg" class="easyui-dialog" style="width:1100px;height:600px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />
			<fieldset  style="width:507px; float:left" >
				<legend> <strong>Data Surat dan Formulir</strong></legend>
				<table>
					<tr>
			 		<td width="200px">Nomor Surat </td> 
			 		<td> : <input size="35" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr>
			 	<input size="35" type="hidden" name="no_formulir" id="no_formulir" value="1" />
			 	<tr>
			 		<td width="200px">Nomor Formulir </td> 
			 		<td> : <input size="35" type="text" name="no_formulir" id="no_formulir" /></td>
			 	</tr>
			 	<tr>
			 		<td width="200px">Petugas Registrasi </td> 
			 		<td> : <input size="35" type="text" name="petugas" id="petugas" /></td>
			 	</tr>		 		 
			 
				</table>
			</fieldset>	
			<fieldset style="width:400px; float:right" >
		  	<legend><strong>Data Kepindahan </strong></legend>
		  		<table width="476">
				<tr>
			 		<td width="128">Tanggal pindah  </td> 
                    <td>:</td>
			 		<td width="336">  <input type="text" name="tgl_pindah" id="tgl_pindah" /></td> 
			 	</tr>
			 	<tr>
			 		<td>Jenis Kepindahan </td> 
			 		<td>:</td>
			 		<td><?php echo form_dropdown("jenis_kepindahan",$this->cm->jenis_kepindahan,'','id="jenis_kepindahan"') ?></td>
			 	</tr>
			 	<tr>
			 		<td>Status KK Bagi Yang Tidak Pindah </td> 
			 		<td>:</td>
			 		<td><?php echo form_dropdown("status_tidak_pindah",$this->cm->status_kk,'','id="status_tidak_pindah"') ?></td>
			 	</tr>
			 	<tr>
			 		<td>Status KK Bagi Yang Pindah </td> 
			 		<td>:</td>
			 		<td><?php echo form_dropdown("status_pindah",$this->cm->status_kk,'','id="status_pindah"') ?></td>
			 	</tr>

				<tr>
				  <td ><strong>Pindah ke</strong></td> <td>:</td>
				 <!--  <td> <?php echo 
				  form_dropdown("pindah_jenis",array("dn"=>"Dalam Negeri","ln"=>"Luar Negeri"),'','id="pindah_jenis" onchange="show_pindah()"') ?></td>
				  </tr>
				<tr class="ln">
				  <td >Negara</td> <td>:</td>
				  <td>		      
			      <input type="text" name="pindah_negara" id="pindah_negara" /></td>
				  </tr> -->
			<!-- 	<tr class="dn"><td >Provinsi  </td> <td>:</td>
				<td>
				<?php echo form_dropdown("",$this->cm->arr_tiger_provinsi(),'','id="pindah_id_provinsi" onchange="get_kota(this,\'#pindah_id_kota\',1)" class="drodown"') ?></td></tr>
				<tr class="dn"><td >Kabupaten  </td> <td>:</td>
				<td><?php echo form_dropdown("",array(),'','id="pindah_id_kota" onchange="get_kecamatan(this,\'#pindah_id_kecamatan\',1)"  class="dropdown"') ?>
                      
                <span id="btn_add_kabupaten">     
         <a href="javascript:showhide('add_kabupaten','btn_add_kabupaten');" title="Tambahkan baru">
         <img src="<?php echo base_url() ?>/assets/images/add.png" width="16" height="16" /></a> 
         </span>
		<span id="add_kabupaten" style="display:none"> 
        <input id="add_kabupaten_nama" placeholder="Nama Kabupaten Baru" /> 
        <a href="javascript:simpan_kabupaten();" class="simpan">Simpan</a> 
        <a href="javascript:showhide('btn_add_kabupaten','add_kabupaten');" class="batal">Batal</a> 
        </span>      
                      
				</td></tr> -->
				
				
				<tr class="dn"><td >Kecamatan  </td> <td>:</td>
				<td>  <!-- <?php
								    echo form_dropdown('',array(),'',
								    'id="pindah_id_kecamatan" onchange="get_desa(this,\'#pindah_id_desa\',1)"  class="dropdown"');
								?>	 -->

								<?php echo form_dropdown("",$this->cm->arr_kecamatan(),'','id="pindah_id_kecamatan" onchange="get_desa(this,\'#pindah_id_desa\',1)" class="drodown"') ?>

				<span id="btn_add_kecamatan">     
                 <a href="javascript:showhide('add_kecamatan','btn_add_kecamatan');" title="Tambahkan baru">
                <img src="<?php echo base_url() ?>/assets/images/add.png" width="16" height="16" /></a> 
                </span>
                <span id="add_kecamatan" style="display:none"> <input id="add_kecamatan_nama" placeholder="Nama Kecamatan Baru" /> 
                <a href="javascript:simpan_kecamatan();" class="simpan">Simpan</a> 
                <a href="javascript:showhide('btn_add_kecamatan','add_kecamatan');" class="batal">Batal</a> </span>
                
                </td></tr>
				
				<tr class="dn"><td>Desa  </td> <td>:</td>
				<td><?php
								    	 echo form_dropdown('pindah_id_desa',array('x'=>" - Semua Desa - "),'', 'id="pindah_id_desa"  class="dropdown"');
								?>
				 <span id="btn_add_desa">     
         <a href="javascript:showhide('add_desa','btn_add_desa');" title="Tambahkan baru">
         <img src="<?php echo base_url() ?>/assets/images/add.png" width="16" height="16" /></a> 
         </span>
		<span id="add_desa" style="display:none"> 
		<input id="add_desa_nama" placeholder="Nama Desa Baru" /> 
        <a href="javascript:simpan_desa();" class="simpan">Simpan</a> 
        <a href="javascript:showhide('btn_add_desa','add_desa');" class="batal">Batal</a> </span>
                </td></tr>
                  <tr class="dn">
                	<td>Alamat</td>
                	<td>:</td>
                	<td><input type="text" name="alamat_pindah" id="alamat_pindah" /></td>
                </tr>	
                <tr class="dn">
                	<td>Dusun</td>
                	<td>:</td>
                	<td><input type="text" name="dusun_pindah" id="dusun_pindah" /></td>
                </tr>	
                 <tr class="dn">
                	<td>RT</td>
                	<td>:</td>
                	<td><input type="text" name="rt_pindah" id="rt_pindah" /></td>
                </tr>	
                 <tr class="dn">
                	<td>RW</td>
                	<td>:</td>
                	<td><input type="text" name="rw_pindah" id="rw_pindah" /></td>
                </tr>	
                 <tr class="dn">
                	<td>Kode POS</td>
                	<td>:</td>
                	<td><input type="text" name="kode_pos_pindah" id="kode_pos_pindah" /></td>
                </tr>	
                 <tr class="dn">
                	<td>Telepon</td>
                	<td>:</td>
                	<td><input type="text" name="telepon_pindah" id="telepon_pindah" /></td>
                </tr>	


			 </table>
		  </fieldset>

		 	<fieldset style="width:507px; float:left" >
		 		<legend><b>Data KK dan Pemohon</b></legend>
			 <table>
				
			
				
			 	<tr>
			 		<td > NIK Pemohon </td> 
			 		<td> : <input type="text" name="nik" id="nik"  />
			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik');">
			 			cari </a>			 		</td> 
			 	</tr>
			
			 	<tr>
			 		<td > NIK Kepala Keluarga </td> 
			 		<td> : <input type="text" name="kepala_keluarga_nik" id="kepala_keluarga_nik"  />
			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('kepala_keluarga_nik');">
			 			cari </a>			 		</td> 
			 	</tr>
			 	<tr>
			 	  <td width="200px">Nama Kepala Keluarga</td>
			 	  <td>: 
		 	      <input name="kepala_keluarga_nama" type="text" id="kepala_keluarga_nama" size="35" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td width="200px">No. KK</td>
			 	  <td>: 
		 	      <input name="kepala_keluarga_kk" type="text" id="kepala_keluarga_kk" size="35" /></td>
		 	   </tr>
		 	    <tr>
			 	  <td width="200px">Telepon</td>
			 	  <td>: 
		 	      <input name="telepon_pemohon" type="text" id="telepon_pemohon" size="35" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Alasan Kepindahan</td>
			 	  <td>: 
		 	      
						 <?php 
						$alasan_pindah = isset($alasan_pindah)?$alasan_pindah:"";
						echo form_dropdown("alasan_pindah",$this->cm->arr_alasan_pindah(),$alasan_pindah,'id="alasan_pindah"') ?></td>
		 	   </tr>
		 	    <tr class="sebutkan_7">
                	<td>Sebutkan Alasan Lainnya</td>
                	
                	<td>: <input  size="35" type="text" name="alasan_lainnya" id="7" /></td>
                </tr>	
		 </table>

			 
		  </fieldset>

		  
		  
	

			<fieldset  style="width:507px; float:left" >
				<legend> <strong>Anggota Keluarga  yang menyertai</strong></legend>
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
					<fieldset  style="width:507px; float:left" > <legend><strong>Pejabat </strong></legend>
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
		              <tr><td> Ditandatangani Oleh Camat </td>
                      <td> : <?php $arr = array(0=>"Tidak","Ya"); echo form_dropdown("ttd_camat",$arr); ?> </td>
                      </tr>
				</table>

			</fieldset>	

		</form>
		<br /><br /><br />
		<div style="clear:both;"></div>
		<div style="width:966px;  margin:11px;">
		<fieldset>
		<legend><strong>Anggota Keluarga</strong></legend>
		 
		<div id="tbpengikut">

		</div>
		</fieldset>
		</div>
	</div>





	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="simpan()">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
	</div>
	 <script type="text/javascript">
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
	 </script>