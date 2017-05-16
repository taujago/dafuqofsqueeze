 
 
<div id="dlg" class="easyui-dialog" style="width:600px;height:300px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Data User</div>
		<form id="fm" method="post" novalidate>
			
			 <table>
			 	 
			 	 <tr><td>Hak Akses </td><td><?php echo form_dropdown("tipe_user",$this->cm->arr_tipe_user(),'','id="tipe_user"') ?></td></tr>
			 	<tr><td>Nama </td> <td><input size="30" id="nama_lengkap" name="nama_lengkap" class="easyui-validatebox">	</td></tr>
			 	 
				
			 	<tr><td>Username </td> <td><input   id="nama_user" name="nama_user" class="easyui-validatebox">	</td></tr>
			 	
			 	<tr><td>Password </td> <td><input type="password"   id="pass" name="pass" class="easyui-validatebox">	</td></tr>
			 	<tr><td>Password Lagi </td> <td><input type="password"    id="pass2" name="pass2" class="easyui-validatebox">	</td></tr>
			  
			 	


			 </table>
			 <input type="hidden" name="id_user" value="id_user" />
		 
			 
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="simpan()">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
	</div>
	 
	 