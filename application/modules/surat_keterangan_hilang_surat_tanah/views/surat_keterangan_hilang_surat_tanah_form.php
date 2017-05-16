<div id="dlg" class="easyui-dialog" style="width:950px;height:650px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Data Surat  Keterangan Kehilangan Surat Tanah </div>
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />
		 	<fieldset >
		 		<legend><b>Data Pemilik</b></legend>
			 <table width="751">
				
				<tr>
			 		<td width="158">Nomor Surat </td> 
			 		<td width="581"> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr>		 		 
			 	<tr>
			 	  <td >Data Pemilik </td>
			 	  <td>: 
		 	      <?php 
						$arr_sd = array("in"=>"Dari data penduduk","ex"=>"Input data manual");
						echo form_dropdown("sumber_data",$arr_sd,"",'id="sumber_data"');
					?></td>
			 	               
		 	   </tr>
			 	<tr class="tr_in">
			 		<td > NIK  Pemilik</td> 
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
		 		  <td >Jenis Kelamin</td>
		 		  <td>: <?php
                  $arr_jk = array("L"=>"Laki - laki ", "P"=>"Perempuan");
				  echo form_dropdown("ex_jk",$arr_jk,"",'id="ex_jk"');
				  
				  ?></td>
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
               </table>
               
               </fieldset>
          <fieldset> <legend><b>Data Tanah </b></legend>
            <table width="843"> 
                
		 	  <tr>
			 	  <td width="157" >Surat RT Nomor </td>
			 	  <td>: 
		 	      <input name="no_surat_rt" type="text" id="no_surat_rt" size="80" /></td>
		 	  </tr>
		 	  <tr>
		 	    <td >RT </td>
		 	    <td>: 
	 	        <input size="3" type="text" name="rt_surat" id="rt_surat" /></td>
	 	      </tr>
              <tr>
		 		  <td > Ukuran Tanah </td> 
		 		  <td> : Panjang 
		 		    <input size="3" type="text" name="panjang" id="panjang" /> 
		 		    meter  x Lebar 
		 			  <input size="3" type="text" name="lebar" id="lebar" /> meter
		 		  </td>
		 	  </tr>
		 	  
		 		<!-- <tr>
		 		   <td > Lokasi bangunan</td> 
		 		   <td> : <input size="40" type="text" name="alamat_bangunan" id="alamat_bangunan" />  </td>
		 	  </tr>-->
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
		    <fieldset>
				<legend>Kelengkapan Berkas</legend>
				<table>
					<tr>
			 			<?php
        					echo form_radio('lengkap','0',TRUE).'Berkas Lengkap ';
        					echo form_radio('lengkap','1').'Berkas Tidak Lengkap';
   							?>
   					
			 	</tr>
				</table>
			</fieldset>
			 
			</fieldset>
		  
			<fieldset> <legend><strong>Pejabat </strong></legend>
				<table width="661">
					<tr><td width="155">Penanda tangan surat </td>
						<td width="494"> : <?php 
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
	 