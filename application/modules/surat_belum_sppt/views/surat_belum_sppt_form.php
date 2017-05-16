<div id="dlg" class="easyui-dialog" style="width:900px;height:600px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Data Surat belum memiliki SPPT</div>
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />
		 	<fieldset >
		 		<legend><b>Data Tanah</b></legend>
			 <table>
				
				<tr>
			 		<td width="200px">Nomor Surat </td> 
			 		<td> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr>		 		 
			 	<tr>
			 		<td > NIK Pemilik</td> 
			 		<td> : <input type="text" name="nik" id="nik" />
			 		<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik');">
			 			cari </a> </td></td>
			 	</tr>
			 	<tr>
			 		<td > Jenis tanah</td> 
			 		<td> : <input type="text" name="jenis_tanah" id="jenis_tanah" />  </td>
			 	</tr>
			 	<tr>
			 		<td > Alamat tanah</td> 
			 		<td> : <input type="text" name="alamat_tanah" id="alamat_tanah" />  </td>
			 	</tr>
			 	<tr>
			 		<td > Blok</td> 
			 		<td> : <input type="text" name="blok" id="blok" />  </td>
			 	</tr>
			 	<tr>
			 		<td > Persil</td> 
			 		<td> : <input type="text" name="persil" id="persil" />  </td>
			 	</tr>
			 	<tr>
			 		<td > Luas</td> 
			 		<td> : <input size="5" type="text" name="luas" id="luas" /> m<sup>2</sup>  </td>
			 	</tr>
			 	<tr>
			 		<td > Dimiliki sejak </td> 
			 		<td> : <input type="text" name="dimiliki_sejak" id="dimiliki_sejak" />  </td>
			 	</tr>
			 	<tr>
			 		<td >  Batas Utara</td> 
			 		<td> : <input type="text" name="batas_utara" id="batas_utara" />  </td>
			 	</tr>
			 	<tr>
			 		<td >  Batas Selatan</td> 
			 		<td> : <input type="text" name="batas_selatan" id="batas_selatan" />  </td>
			 	</tr>
			 	<tr>
			 		<td >  Batas Barat</td> 
			 		<td> : <input type="text" name="batas_barat" id="batas_barat" />  </td>
			 	</tr>
			 	<tr>
			 		<td >  Batas Timur</td> 
			 		<td> : <input type="text" name="batas_timur" id="batas_timur" />  </td>
			 	</tr>

			 	<tr>
			 		<td >  Belum memiliki dengan pertimbangan</td> 
			 		<td> : <input size="70" type="text" name="alasan" id="alasan" />  </td>
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
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="simpan()">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
	</div>
	 