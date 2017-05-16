<div id="dlg" class="easyui-dialog" style="width:950px;height:600px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Data Surat  Keterangan Izin Membangunan</div>
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
          <fieldset> <legend><b>Data Bangunan </b></legend>
            <table width="843"> 
                
		 	  <tr>
			 	  <td >Alamat Bangunan</td>
			 	  <td>: 
		 	      <input name="alamat_bangunan" type="text" id="alamat_bangunan" size="80" /></td>
		 	  </tr>
		 	  <tr>
		 	    <td >RT </td>
		 	    <td>: 
	 	        <input size="3" type="text" name="rt_bangunan" id="rt_bangunan" /></td>
	 	      </tr>
		 	  <tr>
		 	    <td >Dusun </td>
		 	    <td>: 
	 	        <?php 
				  echo form_dropdown("id_dusun_bangunan",$this->cm->arr_dusun(),'','id="id_dusun_bangunan"');
				  ?></td>
	 	      </tr>
              <tr>
		 		  <td > Ukuran Perwatasan </td> 
		 		  <td> : Panjang 
		 		    <input size="3" type="text" name="perwatasan_panjang" id="perwatasan_panjang" /> 
		 		    meter  x Lebar 
		 			  <input size="3" type="text" name="perwatasan_lebar" id="perwatasan_lebar" /> meter
	 		    </td>
		 	  </tr>
              <tr>
		 		  <td > Ukuran Bangunan </td> 
		 		  <td> : Panjang 
		 		    <input size="3" type="text" name="panjang" id="panjang" /> 
		 		    meter  x Lebar 
		 			  <input size="3" type="text" name="lebar" id="lebar" /> meter
		 		  </td>
		 	  </tr>
              
		 	  <tr>
		 		  <td  width="157" > Peruntukan Bangunan</td> 
		 		  <td> : <input size="80"  type="text" name="peruntukan_bangunan" id="peruntukan_bangunan" />  </td>
		 	  </tr>
		 	  <tr>
		 	    <td >Sifat Bangunan</td>
		 	    <td>: 
	 	        <input size="80"  type="text" name="sifat_bangunan" id="sifat_bangunan" /></td>
	 	      </tr>
		 	  
		 		<!-- <tr>
		 		   <td > Lokasi bangunan</td> 
		 		   <td> : <input size="40" type="text" name="alamat_bangunan" id="alamat_bangunan" />  </td>
		 	  </tr>-->
			 
			 	 
			 	 
	 	      <tr>
		 	      <td valign="top" >Bahan Bangunan</td>
		 	      <td>: 
		 	        <table width="100%" border="0">
		 	          <tr>
		 	            <td width="15%">a. Dasar</td>
		 	            <td width="85%">: 
	 	                <input  type="text" name="bahan_dasar" id="bahan_dasar" /></td>
	 	              </tr>
		 	          <tr>
		 	            <td>b. Lantai</td>
		 	            <td>: 
	 	                <input  type="text" name="bahan_lantai" id="bahan_lantai" /></td>
	 	              </tr>
		 	          <tr>
		 	            <td>c. Dinding</td>
		 	            <td>: 
	 	                <input  type="text" name="bahan_dinding" id="bahan_dinding" /></td>
	 	              </tr>
		 	          <tr>
		 	            <td>d. Rangka</td>
		 	            <td>: 
	 	                <input  type="text" name="bahan_rangka" id="bahan_rangka" /></td>
	 	              </tr>
		 	          <tr>
		 	            <td>e. Kasau</td>
		 	            <td>: 
	 	                <input  type="text" name="bahan_kasau" id="bahan_kasau" /></td>
	 	              </tr>
		 	          <tr>
		 	            <td>f. Atap</td>
		 	            <td>: 
	 	                <input  type="text" name="bahan_atap" id="bahan_atap" /></td>
	 	              </tr>
                  </table></td>
	 	      </tr>
	 	      <tr>
	 	        <td >Biaya Pembangunan</td>
	 	        <td>: 
 	            <input  type="text" name="biaya" id="biaya" /></td>
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
		  
			<fieldset> <legend><strong>Pejabat </strong></legend>
				<table>
					<tr><td width="200px">Penanda tangan surat </td>
						<td> : <?php 
						$ttd = isset($ttd)?$ttd:"";
						echo form_dropdown("ttd",$this->cm->arr_ttd(),$ttd) ?>
				</table>
			</fieldset>	
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="simpan()">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
	</div>
	 