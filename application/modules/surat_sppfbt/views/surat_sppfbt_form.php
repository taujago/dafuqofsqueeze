<div id="dlg" class="easyui-dialog" style="width:900px;height:650px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Data Surat kepemilikan tanah</div>
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
			 		<td > NIK  Pemilik</td> 
			 		<td> : <input type="text" name="nik" id="nik" />
			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik');">
			 			cari </a>			 		</td></td>
			 	</tr>
			 	<tr>
			 		<td > Jenis tanah</td> 
			 		<td> : <input  type="text" name="jenis_tanah" id="jenis_tanah" />  </td>
			 	</tr>
			 		<tr>
			 		<td > Tempat /Lokasi tanah</td> 
			 		<td> : <input size="40" type="text" name="alamat_tanah" id="alamat_tanah" />  </td>
			 	</tr>
			 	 
      <tr>
			 		<td > Luas</td> 
			 		<td> : <input size="5" type="text" name="luas" id="luas" /> m<sup>2</sup>  </td>
			 	</tr>
			 	<tr>
			 		<td > Dimiliki sejak tahun </td> 
			 		<td> : <input type="text" name="dimiliki_sejak" id="dimiliki_sejak" />  </td>
			 	</tr>
			 	<tr>
			 	  <td >Diperoleh dari </td>
			 	  <td>: 
		 	      <input type="text" name="status_perolehan_tanah" id="status_perolehan_tanah" /></td>
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
			 </table>
			 
		  </fieldset>
            
            
            <fieldset> <legend><strong>Saksi - Saksi  </strong></legend>
				<table width="661">
					<tr>
						<td width="200"><strong>Saksi 1 </strong></td>
						<td>
                    <tr >
				      <td>NIK </td>
				      <td>:		             
			          <input name="saksi1_nik" type="text"  size="40" id="saksi1_nik" /></td></tr>    
					<tr >
				      <td>Nama </td>
				      <td>: 
			          <input name="saksi1_nama" type="text"  size="40" id="saksi1_nama" /> </td></tr>              
		            <tr  >
		              <td>Tempat Lahir </td>
		              <td>: <input name="saksi1_tmp_lahir" type="text"  size="40" id="saksi1_tmp_lahir" /> </td></tr>                    <tr >
		              <td>Tanggal Lahir </td>
		              <td>: <input name="saksi1_tgl_lahir" type="text" id="saksi1_tgl_lahir"  class="tanggal" /> </td></tr>  
                      <tr>
		              <td>Umur </td>
		              <td>: <input name="saksi1_umur" type="text" id="saksi1_umur" size="10"   /> </td></tr>
                      <tr>
                        <td>Pekerjaan</td>
                        <td>: 
                        <input name="saksi1_pekerjaan" type="text" id="saksi1_pekerjaan"  size="50" /></td>
                      </tr>
                      <tr>
                        <td>Alamat </td>
                        <td>: 
                        <input name="saksi1_alamat" type="text" id="saksi1_alamat"  size="50" /></td>
                  </tr>
                      <tr>
                        <td><strong>Saksi 2</strong></td>
                        <td>&nbsp;</td>
                      </tr>  
                      
                       <tr >
				      <td>NIK </td>
				      <td>:		             
			          <input name="saksi2_nik" type="text"  size="40" id="saksi2_nik" /></td></tr>    
                    <tr >
				      <td>Nama </td>
				      <td>: 
			          <input name="saksi2_nama" type="text"  size="40" id="saksi2_nama" /> </td></tr>              
		            <tr  >
		              <td>Tempat Lahir </td>
		              <td>: <input name="saksi2_tmp_lahir" type="text"  size="40" id="saksi2_tmp_lahir" /> </td></tr>                    <tr>
		              <td>Tanggal Lahir </td>
		              <td>: <input name="saksi2_tgl_lahir" type="text" id="saksi2_tgl_lahir" class="tanggal" /> </td></tr>  
                      <tr>
		              <td>Umur </td>
		              <td>: <input name="saksi2_umur" type="text" id="saksi2_umur" size="10"   /> </td></tr>
                      <tr>
                        <td>Pekerjaan</td>
                        <td>: 
                        <input name="saksi2_pekerjaan" type="text" id="saksi2_pekerjaan"  size="50" /></td>
                      </tr>
                      <tr>
                        <td>Alamat </td>
                        <td>: 
                        <input name="saksi2_alamat" type="text" id="saksi2_alamat"  size="50" /></td>
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
	 