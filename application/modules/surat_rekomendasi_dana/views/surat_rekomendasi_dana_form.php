<div id="dlg" class="easyui-dialog" style="width:950px;height:500px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="title">Data Surat Rekomendasi Pencairan Dana</div>
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />
		 	<fieldset >
		 		<legend><b>Data</b></legend>
			 <table>
				
				<tr>
			 		<td width="200px">Nomor Surat </td> 
			 		<td> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr>		 		 
			 	
		 </table>
			 
			</fieldset>
			 	<fieldset >
		 		<legend><b>Jenis Pencairan Dana</b></legend>
			 <table>
				
				<tr>
			 		<td width="200px">Jenis Pencairan Dana </td> 
			 		<td> : <input size="40" type="text" name="jenis" id="jenis" /></td>
			 	</tr>	
			 		<tr>
			 		<td width="200px">Jumlah Dana </td> 
			 		<td> : <input size="40" type="text" name="uang" id="uang" /></td>
			 	</tr>	
			 	<tr>
			 		<td width="200px">BANK Pencairan </td> 
			 		<td> : <input size="40" type="text" name="bank" id="bank" /></td>
			 	</tr>	
			 	<tr>
			 		<td width="200px">Nama Bendahara </td> 
			 		<td> : <input size="40" type="text" name="bendahara" id="bendahara" /></td>
			 	</tr>	

			 	
		 </table>
			 
			</fieldset>
		  
			<fieldset> <legend><strong>Pejabat </strong></legend>
				<table width="661">
					<tr><td width="200px">Penanda tangan surat </td>
						<td> : <?php 
						$ttd = isset($ttd)?$ttd:"";
						echo form_dropdown("ttd",$this->cm->arr_ttd_camat(),$ttd,'id="ttd"') ?>
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
            <fieldset> <legend> <b>Rincian Penggunaan Dana </b></legend>
            <textarea class="" cols="80" id="rincian" name="rincian" rows="10"></textarea>
            </fieldset>
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="simpan()">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
	</div>
	 

