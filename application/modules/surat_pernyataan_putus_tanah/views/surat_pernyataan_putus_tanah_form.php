<div id="dlg" class="easyui-dialog" style="width:950px;height:600px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Data Surat  Pernyataan Putus Surat Tanah </div>
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />
	 	  <fieldset >
	 		<legend><b>Data Surat</b></legend>
		    <table width="751">
				
			   <tr>
		 		   <td width="208">Nomor Surat </td> 
		 		   <td width="531"> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
		 	   </tr>		 		 
		 	   <tr>
		 	     <td >Data yang Membuat Pernyataan</td>
		 	     <td valign="top">: 
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
           
<fieldset >
		 		<legend><b>Data Pemilik Tanah</b></legend>
 		  <table width="751">		 		 
	 	    <tr>
	 	      <td width="208" >Data Pemilik </td>
	 	      <td width="531">: 
 	          <?php 
						$arr_sd = array("in"=>"Dari data penduduk","ex"=>"Input data manual");
						echo form_dropdown("sumber_data_pemilik",$arr_sd,"",'id="sumber_data_pemilik"');
					?></td>
			 	               
 	        </tr>
	 	    <tr class="tr_in_pemilik">
	 		    <td > NIK  Pemilik</td> 
	 		    <td> : <input type="text" name="nik_pemilik" id="nik_pemilik" />
	 			    <a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik_pemilik');">
	 			    cari </a>
	 		    </td> 
	 	    </tr>
                
                
            <tr class="tr_ex_pemilik">
 		      <td >Nomor KTP</td>
 		      <td>: 
	          <input type="text" name="pemilik_nik" id="pemilik_nik" /></td>
	        </tr>
 		    <tr class="tr_ex_pemilik">
 		      <td >Nama </td>
 		      <td>: 
	          <input type="text" name="pemilik_nama" id="pemilik_nama" /></td>
	        </tr>
 		    <tr class="tr_ex_pemilik">
 		      <td >Alamat</td>
 		      <td>: 
	          <input name="pemilik_alamat" type="text" id="pemilik_alamat" size="80" /></td>
	        </tr>
         </table>
               
         </fieldset>
          <fieldset>
          
          
          <legend><b>Data Tanah </b></legend>
            <table width="843"> 
                
		 	  <tr>
		 	    <td >Alamat Tanah</td>
		 	    <td>: 
	 	        <input name="alamat_tanah" type="text" id="alamat_tanah" size="80" /></td>
	 	      </tr>
	 	      <tr>
		 	    <td >Dusun</td>
		 	    <td>: 
	 	        <input name="id_dusun_tanah" type="text" id="id_dusun_tanah" size="80" /></td>
	 	      </tr>
		 	 
		 	  <tr>
		 	    <td >RT </td>
		 	    <td>: 
	 	        <input size="3" type="text" name="rt_tanah" id="rt_tanah" /></td>
	 	      </tr>
              <tr>
                <td >Dimiliki Sejak Tahun </td>
                <td>: 
                <input type="text" name="tahun_tanah" id="tahun_tanah" /></td>
              </tr>
              <tr>
                <td >Nama Ketua RT</td>
                <td>: 
                <input type="text" name="nama_ketua_rt" id="nama_ketua_rt" /></td>
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
			 
			</fieldset> 
          <fieldset> <legend>
          <b>Saksi - Saksi</b> </legend>
			<table width="843">
		 	  
		 		<!-- <tr>
		 		   <td > Lokasi bangunan</td> 
		 		   <td> : <input size="40" type="text" name="alamat_bangunan" id="alamat_bangunan" />  </td>
		 	  </tr>-->
	 	      <tr>
		 		  <td width="208" >Saksi 1</td> 
		 		  <td width="623"> : <input name="saksi_1" type="text" id="saksi_1" size="70" />  </td>
		 	  </tr>
		 	  <tr>
		 		  <td > Saksi 2</td> 
		 		  <td> : 
	 		      <input name="saksi_2" type="text" id="saksi_2" size="70" /></td>
		 	  </tr>
		 	  <tr>
		 		  <td > Saksi 3</td> 
		 		  <td> : 
	 		      <input name="saksi_3" type="text" id="saksi_3" size="70" /></td>
		 	  </tr>
		 	  <tr>
		 		  <td > Saksi 4</td> 
		 		  <td> : 
	 		      <input name="saksi_4" type="text" id="saksi_4" size="70" /></td>
		 	  </tr>

			 	 



	      </table>
			 <?php
					$this->load->view("berkas");
				?>
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
	 