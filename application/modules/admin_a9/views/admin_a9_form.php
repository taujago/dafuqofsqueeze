<div id="dlg" class="easyui-dialog" style="width:900px;height:500px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="title">Data Lembaran Desa dan Berita Desa </div>
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />
		 	<fieldset >
		 		<legend><b>Data Lembaran Desa dan Berita Desa</b></legend>
			 <table>
				
				<tr>
			 		<td > Jenis Peraturan Di Desa </td> 
			 		<td> : <input type="text" name="jenis" id="jenis" /></td></td>
			 	</tr>
			 	<tr>
			 		<td > Nomor Ditetapkan </td> 
			 		<td> : <input type="text" name="nomor_ditetapkan" id="nomor_ditetapkan" /></td></td>
			 	</tr>
			 	<tr>
			 		<td > Tanggal Ditetapkan </td> 
			 		<td> : <input type="text" name="tanggal_ditetapkan" id="tanggal" /></td></td>
			 	</tr>
			 	<tr>
			 		<td > Tentang </td> 
			 		<td> : <input type="text" name="tentang" id="tentang" /></td></td>
			 	</tr>
			 	<tr>
			 		<td > Tanggal Diundangkan </td> 
			 		<td> : <input type="text" name="tanggal_diundangkan" id="tanggal" /></td></td>
			 	</tr>
			 	 
			 	
			 	
				<tr>
			 		<td width="200px">Nomor Diundangkan  </td> 
			 		<td> : <input size="40" type="text" name="nomor_diundangkan" id="nomor_diundangkan" /></td>
			 	</tr>		 		 
			 	
			 	
			 	<tr>
			 		<td > Keterangan  </td> 
			 		<td> : <input size="40" type="text" name="keterangan" id="keterangan" /></td></td>
			 	</tr>
			 	
		 </table>
			 
			
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="simpan()">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
	</div>
	 