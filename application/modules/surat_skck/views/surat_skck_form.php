<div id="dlg" class="easyui-dialog" style="width:900px;height:450px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="title">Data Surat Keterangan Memperoleh Ijin SKCK</div>
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />
		 	<fieldset >
		 		<legend><b>Data pemohon</b></legend>
			 <table width="743">
				
				<tr>
			 		<td width="200">Nomor Surat </td> 
			 		<td> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr>		 		 
			 	<tr>
			 		<td > NIK </td> 
			 		<td> : <input type="text" name="nik" id="nik" />

			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik');">
			 			cari </a>			 		</td> 
			 	</tr>
			 <!-- 	<tr>
			 	  <td > Tujuan Surat </td>
			 	  <td>: 
		 	      <input name="instansi_tujuan" type="text" id="instansi_tujuan" size="70" /></td>
		 	   </tr> -->
			 	<tr>
			 	  <td >Peruntukan </td>
			 	  <td>: 
		 	      <input name="keperluan" type="text" id="keperluan" size="40" /></td>
		 	   </tr>
		     </table>
			 
		  </fieldset>
		  
		  <!-- 	<fieldset> <legend><strong>Data Rayon </strong></legend>
				<table width="661">
				<tr>
			 	  <td width="200px" >Nama Penanda Tangan </td>
			 	  <td>: 
		 	      <input name="nama_rayon" type="text" id="nama_rayon" size="40" /></td>
		 	   </tr>
					<tr>
			 	  <td width="200px" >Rayon </td>
			 	  <td>: 
		 	      <input name="rayon" type="text" id="rayon" size="40" /></td>
		 	   </tr>
		 	   <tr>
			 	  <td >Wilayah </td>
			 	  <td>: 
		 	      <input name="wilayah" type="text" id="wilayah" size="40" /></td>
		 	   </tr>
                </table>
			</fieldset>	
 -->
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
	 