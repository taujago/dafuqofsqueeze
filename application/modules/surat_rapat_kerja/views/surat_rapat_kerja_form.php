<div id="dlg" class="easyui-dialog" style="width:900px;height:400px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="title">Data Surat Rapat Kerja</div>
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />
		 	<fieldset >
		 		<legend><b>Data pemohon</b></legend>
			 <table>
				
				<tr>
			 		<td width="200px">Nomor Surat </td> 
			 		<td> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr>
			 	</tr>
			 		<tr>
			 		<td width="200px">Tanggal Surat </td> 
			 		<td> : <input size="40" type="text" name="tanggal_surat" id="tanggal_surat" /></td>
			 	</tr>	
			 	<tr>
			 		<td width="200px">Lampiran </td> 
			 		<td> : <input size="40" type="text" name="lampiran" id="lampiran" /></td>
			 	</tr>
			 	<tr>
			 		<td width="200px">Perihal </td> 
			 		<td> : <input size="40" type="text" name="perihal" id="perihal" /></td>
			 	</tr>
			 	<tr>
			 		<td width="200px">Kepada 1.  </td> 
			 		<td> : <input size="40" type="text" name="kepada" id="kepada" /></td>
			 	</tr>
			 	<tr>
			 		<td width="200px">Kepada 2.  </td> 
			 		<td> : <input size="40" type="text" name="kepada2" id="kepada2" /></td>
			 	</tr>
			 		<tr>
			 		<td width="200px">Hari  </td> 
			 		<td> : <input size="40" type="text" name="hari" id="hari" /></td>
			 	</tr>
			 	</tr>
			 		<tr>
			 		<td width="200px">Tanggal  </td> 
			 		<td> : <input size="40" type="text" name="tanggal" id="tanggal" /></td>
			 	</tr>	
			 	</tr>
			 		<tr>
			 		<td width="200px">Jam  </td> 
			 		<td> : <input size="40" type="text" name="jam" id="jam" /></td>
			 	</tr>	
			 	</tr>
			 		<tr>
			 		<td width="200px">Tempat  </td> 
			 		<td> : <input size="40" type="text" name="tempat" id="tempat" /></td>
			 	</tr>
			 			 		 
			 	<!-- <tr>
			 		<td > NIK Pemohon</td> 
			 		<td> : <input type="text" name="nik" id="nik" />
			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik');">
			 			cari </a>
			 		</td></td>
			 	</tr> -->
			 	 
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
	 