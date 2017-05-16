<div id="dlg" class="easyui-dialog" style="width:1000px;height:650px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Data Surat Jual Beli Tanah</div>
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />
		 	<fieldset >
		 		<legend></legend>
			 <table width="789">
				
				<tr>
			 		<td width="200">Nomor Surat </td> 
			 		<td> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr>		 		 
			 	
		 		<tr>
		 		  <td >Tanggal </td>
		 		  <td>: 
	 		      <input type="text" name="tanggal" id="tanggal" /></td>
	 		   </tr>
		 		<tr>
		 		  <td colspan="2" ><strong>Pihak Pertama </strong></td>
	 		   </tr>
		 		<tr>
		 		  <td >Data Pihak Pertama </td>
		 		  <td>: 
		 		    
                    <?php 
						$arr_sd = array("in"=>"Dari data penduduk","ex"=>"Input data manual");
						echo form_dropdown("sumber_data_1",$arr_sd,"",'id="sumber_data_1"');
					?>
 		          
                  
                  </td>
	 		   </tr>
               <tr class="tr_in_1">
			 		<td > NIK Pemilik</td> 
			 		<td> : <input type="text" name="nik_1" id="nik_1" />

			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik_1');">
			 			cari </a>
			 			</td> 
			 	</tr>
			 	<tr class="tr_ex_1">
		 		  <td >NIK </td>
		 		  <td>: 
	 		      <input type="text" name="nik_penduduk_1" id="nik_penduduk_1" /></td>
	 		   </tr>
		 		<tr class="tr_ex_1">
		 		  <td >Nama </td>
		 		  <td>: 
	 		      <input type="text" name="nama_penduduk_1" id="nama_penduduk_1" /></td>
	 		   </tr>
	 		   <tr class="tr_ex_1">
		 		  <td >Tempat Lahir </td>
		 		  <td>: 
	 		      <input type="text" name="tempat_lahir_penduduk_1" id="tempat_lahir_penduduk_1" /></td>
	 		   </tr>
	 		   <tr class="tr_ex_1">
		 		  <td >Tanggal Lahir </td>
		 		  <td>: 
	 		      <input type="text" name="tanggal_lahir_penduduk_1" id="tanggal_lahir_penduduk_1" /></td>
	 		   </tr>
	 		   <tr class="tr_ex_1">
		 		  <td >Warga Negara </td>
		 		  <td>: 
	 		      <input type="text" name="warga_negara_penduduk_1" id="warga_negara_penduduk_1" /></td>
	 		   </tr>
	 		   <tr class="tr_ex_1">
		 		  <td >Pekerjaan </td>
		 		  <td>: 
	 		      <input type="text" name="pekerjaan_penduduk_1" id="pekerjaan_penduduk_1" /></td>
	 		   </tr>
		 		<tr class="tr_ex_1">
		 		  <td >Alamat</td>
		 		  <td>: 
	 		      <input name="alamat_penduduk_1" type="text" id="alamat_penduduk_1" size="80" /></td>
	 		   </tr>
               
               <tr>
                  <td colspan="2" ><strong>Data Pihak Kedua </strong></td>
               </tr>
               <tr>
		 		  <td >Data Pihak Kedua </td>
		 		  <td>: 
		 		    
                    <?php 
						$arr_sd = array("in"=>"Dari data penduduk","ex"=>"Input data manual");
						echo form_dropdown("sumber_data_2",$arr_sd,"",'id="sumber_data_2"');
					?>
 		          
                  
                  </td>
	 		   </tr>
               <tr class="tr_in_2">
			 		<td > NIK Pemilik</td> 
			 		<td> : <input type="text" name="nik_2" id="nik_2" />

			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik_2');">
			 			cari </a>
			 			</td> 
			 	</tr>
			 	<tr class="tr_ex_2">
		 		  <td >NIK </td>
		 		  <td>: 
	 		      <input type="text" name="nik_penduduk_2" id="nik_penduduk_2" /></td>
	 		   </tr>
		 		<tr class="tr_ex_2">
		 		  <td >Nama </td>
		 		  <td>: 
	 		      <input type="text" name="nama_penduduk_2" id="nama_penduduk_2" /></td>
	 		   </tr>
	 		   <tr class="tr_ex_2">
		 		  <td >Tempat Lahir </td>
		 		  <td>: 
	 		      <input type="text" name="tempat_lahir_penduduk_2" id="tempat_lahir_penduduk_2" /></td>
	 		   </tr>
	 		   <tr class="tr_ex_2">
		 		  <td >Tanggal Lahir </td>
		 		  <td>: 
	 		      <input type="text" name="tanggal_lahir_penduduk_2" id="tanggal_lahir_penduduk_2" /></td>
	 		   </tr>
	 		   <tr class="tr_ex_2">
		 		  <td >Warga Negara </td>
		 		  <td>: 
	 		      <input type="text" name="warga_negara_penduduk_2" id="warga_negara_penduduk_2" /></td>
	 		   </tr>
	 		   <tr class="tr_ex_2">
		 		  <td >Pekerjaan </td>
		 		  <td>: 
	 		      <input type="text" name="pekerjaan_penduduk_2" id="pekerjaan_penduduk_2" /></td>
	 		   </tr>
		 		<tr class="tr_ex_2">
		 		  <td >Alamat</td>
		 		  <td>: 
	 		      <input name="alamat_penduduk_2" type="text" id="alamat_penduduk_2" size="80" /></td>
	 		   </tr>

	 		    <tr>
                  <td colspan="2" ><strong>Ukuran Tanah </strong></td>
               </tr>
               <tr>
					<td>Panjang</td>
					<td> : <input size="10" type="text" name="panjang" id="panjang" placeholder="0" onkeyup="sum();" /> m</td>
				<tr>
					<td>Lebar</td>
			 		<td>  : <input size="10" type="text" name="lebar" id="lebar" placeholder="0" onkeyup="sum();" /> m</td>
				</tr>
				<tr>
				<td>Luas</td>
			 	<td> : <input size="20" type="text" name="luas" id="luas" placeholder="0"/> m<sup>2</td>
				 <tr>
                  <td colspan="2" ><strong>Nilai </strong></td>
               </tr>
				<tr>
			 		<td > Nilai Uang</td> 
			 		<td> : <input size="30" type="text" name="uang" id="uang" /> </td>
			 		
			 	</tr>

		
			 <!-- 	<tr>
			 	 	<td > Terbilang</td> 
			 		<td> : <input size="60" type="text" name="terbilang" id="terbilang" placeholder="Contoh : LIMA PULUH JUTA"/> RUPIAH </td>
			 	</tr> -->
				</tr>
				 <tr>
                  <td colspan="2" ><strong>Data Tanah </strong></td>
               </tr>
               	<tr>
			 		<td > Lokasi tanah</td> 
			 		<td> : <input size="40" type="text" name="alamat_tanah" id="alamat_tanah" />  </td>
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
                  <td colspan="2" ><strong>Saksi </strong></td>
               </tr>
			 	<tr>
			 		<td > Saksi I</td> 
			 		<td> : <input size="40" type="text" name="saksi_1" id="saksi_1" />  </td>
			 	</tr>
			 	
			 	<tr>
			 		<td > Saksi II</td> 
			 		<td> : <input size="40" type="text" name="saksi_2" id="saksi_2" /> </td>
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
	 