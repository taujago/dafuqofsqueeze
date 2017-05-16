<div id="dlg" class="easyui-dialog" style="width:1024px;height:650px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="title">Data Surat Keterangan Tidak Mampu</div>
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />
		 	<fieldset style="width:600px; float:left" >
		 		<legend><b>Data pemohon</b></legend>
			 <table>
				
				<tr>
			 		<td width="200px">Nomor Surat </td> 
			 		<td> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr>		 		 
			 	<tr>
			 		<td > NIK </td> 
			 		<td> : <input type="text" name="nik" id="nik" />

			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik');">
			 			cari </a>

			 		</td> 
			 	</tr>
			 	<!-- <tr>
			 		<td > Kedudukan dalam keluarga</td> 
			 		<td> :  <?php echo form_dropdown("hubungan",$this->cm->arr_hubungan) ?> </td></td>
			 	</tr> -->
			 	 </tr>
			 		<tr>
			 		<td > Kedudukan dalam keluarga</td> 
			 		<td> : <input size="40" type="text" name="hubungan" id="hubungan" />  </td>
			 	</tr>
			 	 
		 </table>

			 
			</fieldset>
		  
	

			<fieldset  style="width:600px; " >
				<legend> <strong>Anggota Keluarga </strong></legend>
				<table>
				<!-- <tr>
			 		<td width="200px">Nama </td> 
			 		<td> : <input type="text" name="id_penduduk_pengikut" id="id_penduduk_pengikut" /></td></td>
			 	
			 	</tr> -->	
			 	<tr>
			 		<td width="200px">Nama </td> 
			 		<td> : <input type="text" name="nik_pengikut" id="nik_pengikut" />
			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik_pengikut');">
			 			cari </a>

			 		</td>
			 	
			 	</tr>
					<!-- <tr>
			 		<td > Kedudukan dalam keluarga</td> 
			 		<td> :  <?php echo form_dropdown("hubungan_pengikut",$this->cm->arr_hubungan,'','id="hubungan_pengikut"') ?> </td></td>
			 		</tr> -->
			 		 </tr>
			 		<tr>
			 		<td > Kedudukan dalam keluarga</td> 
			 		<td> : <input size="40" type="text" name="hubungan_pengikut" id="hubungan_pengikut" />  </td>
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
		<!-- <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" onclick="tambahdarikk()">Tambahkan dari Kartu Keluarga</a> --><br /><br />
		<div id="tbpengikut">

		</div>
		</fieldset>
		</div>
	</div>





	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="simpan()">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
	</div>
	 