<div id="dlg" class="easyui-dialog" style="width:900px;height:500px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Data Surat Keterangan Usaha</div>
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />
		 	<fieldset >
		 		<legend><b>Data Usaha</b></legend>
			 <table width="789">
				
				<tr>
			 		<td width="200">Nomor Surat </td> 
			 		<td> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr>		 		 
			 	
		 		<tr>
		 		  <td >Data Pemilik</td>
		 		  <td>: 
		 		    
                    <?php 
						$arr_sd = array("in"=>"Dari data penduduk","ex"=>"Input data manual");
						echo form_dropdown("sumber_data",$arr_sd,"",'id="sumber_data"');
					?>
 		          
                  
                  </td>
	 		   </tr>
               <tr class="tr_in">
			 		<td > NIK Pemilik</td> 
			 		<td> : <input type="text" name="nik" id="nik" />

			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik');">
			 			cari </a>
			 			</td> 
			 	</tr>
		 		<tr class="tr_ex">
		 		  <td >Nomor KTP</td>
		 		  <td>: 
	 		      <input type="text" name="ex_nik" id="ex_nik" /></td>
	 		   </tr>
		 		<tr class="tr_ex">
		 		  <td >Nama </td>
		 		  <td>: 
	 		      <input type="text" name="ex_nama" id="ex_nama" /></td>
	 		   </tr>
		 		<tr class="tr_ex">
		 		  <td >Tanggal Lahir</td>
		 		  <td>: 
	 		      <input type="text" name="ex_tgl_lahir" id="ex_tgl_lahir" /></td>
	 		   </tr>
		 		<tr class="tr_ex">
		 		  <td >Pekerjaan</td>
		 		  <td>: 
	 		      <input type="text" name="ex_pekerjaan" id="ex_pekerjaan" /></td>
	 		   </tr>
		 		<tr class="tr_ex">
		 		  <td >Alamat</td>
		 		  <td>: 
	 		      <input name="ex_alamat" type="text" id="ex_alamat" size="80" /></td>
	 		   </tr>
		 		<tr>
			 		<td > Jenis Usaha</td> 
			 		<td> : <input size="40" type="text" name="jenis_usaha" id="jenis_usaha" />  </td>
			 	</tr>
			 	<tr>
			 		<td > Alamat Usaha</td> 
			 		<td> : <input size="40" type="text" name="alamat_usaha" id="alamat_usaha" />  </td>
			 	</tr>
			 	<tr>
			 	  <td >RT Tempat Usaha</td>
			 	  <td>: 
		 	      <input size="5" type="text" name="ex_rt" id="ex_rt" /></td>
		 	   </tr>
			 	<tr>
			 	  <td >Dusun/Lingkungan Tempat Usaha</td>
			 	  <td>: <?php 
				  echo form_dropdown("ex_id_dusun",$this->cm->arr_dusun(),'','id="ex_id_dusun"');
				  ?></td>
		 	   </tr>
			 	 
			  
			 	 
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
	 