<div id="dlg" class="easyui-dialog" style="width:1024px;height:600px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="title">Data Surat bepergian</div>
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />
		 	<fieldset   >
		 		<legend><b>Data pemohon</b></legend>
			 <table>
				
				<tr>
			 		<td width="200px">Nomor Surat </td> 
			 		<td> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr>		 		 
			 	<tr>
			 		<td > NIK</td> 
			 		<td> : <input type="text" name="nik" id="nik" />
			 		<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik');">
			 			cari </a></td></td>
			 	</tr>
			 	<tr>
			 		<td > Kedudukan dalam keluarga</td> 
			 		<td> :  <?php echo form_dropdown("hubungan",$this->cm->arr_hubungan) ?> </td></td>
			 	</tr>
			 	<tr>
			 		<td > Alamat tujuan</td> 
			 		<td> : <input size="40" type="text" name="alamat_tujuan" id="alamat_tujuan" /></td></td>
			 	</tr>
			 	<tr>
			 		<td > Jenis kendaraan</td> 
			 		<td> : <input size="40" type="text" name="kendaraan" id="kendaraan" /></td></td>
			 	</tr>
			 	<tr>
			 		<td > Maksud</td> 
			 		<td> : <input size="40" type="text" name="maksud" id="maksud" /></td></td>
			 	</tr>
			 	<tr>
			 		<td > Barang bawaan</td> 
			 		<td> : <input size="40" type="text" name="barang_bawaan" id="barang_bawaan" /></td></td>
			 	</tr>
			 	<tr>
			 		<td > Tgl Berangkat</td> 
			 		<td> : <input type="text" name="tgl_berangkat" id="tgl_berangkat" /></td></td>
			 	</tr>
			 	<tr>
			 		<td > Tgl Pulang</td> 
			 		<td> : <input type="text" name="tgl_pulang" id="tgl_pulang" /></td></td>
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

			<fieldset   >
				<legend> <strong>Pengikut </strong></legend>
				<table>
				<tr>
			 		<td width="200px">NIK Pengikut</td> 
			 	<!--	<td> : <input type="text" name="id_penduduk_pengikut" id="id_penduduk_pengikut" /></td></td>
			 	--> 
			 	<td> : <input type="text" name="nik_pengikut" id="nik_pengikut" />
			 		<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik_pengikut');">
			 			  </a>
			 	</td></td>
			 	
			 	</tr>	
					<tr>
			 		<td > Kedudukan dalam keluarga</td> 
			 		<td> :  <?php echo form_dropdown("hubungan_pengikut",$this->cm->arr_hubungan,'','id="hubungan_pengikut"') ?> </td></td>
			 		</tr>
			 	<tr>
			 		<td></td>
			 		<td><a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" onclick="tambahpengikut()">Tambahkan</a></td>
			 	</tr>
				</table>
			</fieldset>	

		</form>
		<br /><br /><br />
		<div style="clear:both;"></div>
		<div style="width:966px;  margin:11px;">
		<fieldset>
		<legend><strong>Pengikut</strong></legend>
		<div id="tbpengikut">
		</div>
		</fieldset>
		</div>
	</div>





	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="simpan()">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
	</div>
	 