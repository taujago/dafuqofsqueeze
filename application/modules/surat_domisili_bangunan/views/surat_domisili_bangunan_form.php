<?php 
$desa2 = $this->cm->data_desa();
?>
<div id="dlg" class="easyui-dialog" style="width:900px;height:500px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="title">Data Surat Keterangan Domisili</div>
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />
		 	<fieldset >
		 		<legend><b>Data pemohon</b></legend>
			 <table width="840">
				
				<tr>
			 		<td width="142">Nomor Surat </td> 
			 		<td width="591"> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr>		 		 
			 	<tr>
			 		<td >RT</td> 
			 		<td> : 
		 		    <input name="surat_rt" type="text" id="surat_rt" size="10" /></td><td width="7"></td>
			 	</tr>
			 	<tr>
			 	  <td >Nomor Surat RT</td>
			 	  <td>: 
		 	      <input name="surat_nomor" type="text" id="surat_nomor" /></td>
			 	  <td>                
		 	   </tr>
			 	<tr>
			 	  <td >Tanggal Surat RT</td>
			 	  <td>: 
		 	      <input name="surat_tanggal" type="text" id="surat_tanggal" /></td>
			 	  <td>                
		 	   </tr>
			 	<tr>
			 	  <td >Perihal Surat RT</td>
			 	  <td>: 
		 	      <input name="surat_bahwa" type="text" id="surat_bahwa" size="70" /></td>
			 	  <td>                
		 	   </tr>
			 	<tr>
			 	  <td ><?php echo ($desa2->bentuk_lembaga=="Kelurahan")?"Lingkungan ":"Dusun "; ?> Bangunan</td>
			 	  <td>: <?php 
				  echo form_dropdown("id_dusun",$this->cm->arr_dusun(),'','id="id_dusun"'); 
				  ?></td>
			 	  <td>                
		 	   </tr>
			 	<tr>
			 	  <td >Alamat Bangunan</td>
			 	  <td>:
		 	      <input name="b_jalan" type="text" id="b_jalan" size="30" /></td>
			 	  <td>                 
		 	   </tr>
			 	 
		     </table>
			 
			</fieldset>
			 <?php
					$this->load->view("berkas");
				?>
		   <fieldset> <legend><strong>Pejabat </strong></legend>
				<table width="661">
					<tr><td width="151">Penanda tangan surat </td>
						<td width="498"> : <?php 
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
	 