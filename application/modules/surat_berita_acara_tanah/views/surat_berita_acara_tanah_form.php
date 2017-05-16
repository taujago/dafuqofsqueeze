<div id="dlg" class="easyui-dialog" style="width:1000px;height:650px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Data Berita Acara Penyelesaian Masalah Tanah</div>
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
			 		<td> : <input type="text" name="nik1" id="nik1" />

			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik1');">
			 			cari </a>
			 			</td> 
			 	</tr>
		 		<tr class="tr_ex_1">
		 		  <td >Nama </td>
		 		  <td>: 
	 		      <input type="text" name="nama_penduduk_1" id="nama_penduduk_1" /></td>
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
			 		<td> : <input type="text" name="nik2" id="nik2" />

			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik2');">
			 			cari </a>
			 			</td> 
			 	</tr>
		 		<tr class="tr_ex_2">
		 		  <td >Nama </td>
		 		  <td>: 
	 		      <input type="text" name="nama_penduduk_2" id="nama_penduduk_2" /></td>
	 		   </tr>
		 		<tr class="tr_ex_2">
		 		  <td >Alamat</td>
		 		  <td>: 
	 		      <input name="alamat_penduduk_2" type="text" id="alamat_penduduk_2" size="80" /></td>
	 		   </tr>
			 	<tr>
			 		<td > Alamat Tanah</td> 
			 		<td> : <input size="40" type="text" name="alamat_tanah" id="alamat_tanah" />  </td>
			 	</tr>
			 	<tr>
			 	  <td >RT Tempat Tanah</td>
			 	  <td>: 
		 	      <input size="5" type="text" name="rt_tanah" id="rt_tanah" /></td>
		 	   </tr>
			 	<tr>
			 	<tr>
			 		<td > Dusun tempat tanah</td> 
			 		<td> : <input size="40" type="text" name="id_dusun_tanah" id="id_dusun_tanah" />  </td>
			 	<!-- </tr>
			 	  <td >Dusun Tempat Tanah</td>
			 	  <td>: <?php 
			 	  
		  
				  echo form_dropdown("id_dusun_tanah",$this->cm->arr_dusun(),'','id="id_dusun_tanah"');
				  ?></td>
		 	   </tr> -->
			 	<tr>
			 	  <td valign="top" >Isi Surat</td>
			 	  <td><textarea name="isi_surat" id="isi_surat" cols="70" rows="5">Dalam pertemuan tersebut tidak menghasilkan apa yang diinginkan, dikarenakan masing - masing pihak bersikeras dengan pendapatnya masing - masing. Dan akan direncanakan pertemuan kembali dalam waktu yang belum ditentukan.</textarea></td>
		 	   </tr>
			 	<tr>
			 	  <td valign="top" >KAUR Pemerintahan</td>
			 	  <td>: 
			 	    <input size="40" type="text" name="kaur_pemerintahan" id="kaur_pemerintahan" /></td>
		 	   </tr>
			 	<tr>
			 	  <td valign="top" >Notulis</td>
			 	  <td>: 
			 	    <input size="40" type="text" name="notulis" id="notulis" /></td>
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
	 