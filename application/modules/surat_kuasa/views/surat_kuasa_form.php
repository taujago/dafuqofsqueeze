<div id="dlg" class="easyui-dialog" style="width:800px;height:300px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="title">Data Surat Kuasa (F-1.03)</div>
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />


			 <fieldset >
		 	<legend><b>Data Pemohon</b></legend>
			 <table>
				
				<tr>
			 		<td width="200px">Yang Memberi Kuasa </td> 
			 		<td> : <input type="text" name="ayah_nik" id="ayah_nik" />
			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('ayah_nik');">
			 			cari </a>
			 		</td>
			 	</tr>		 		 
			 	<tr>
			 		<td >Yang Diberi Kuasa</td> 
			 		<td> : <input type="text" name="ibu_nik" id="ibu_nik" />
			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('ibu_nik');">
			 			cari </a>
			 		</td></td>
			 	</tr>
			 	 	<tr>
			 	  <td >Kondisi Pemberi Kuasa</td>
			 	  <td>: 
		 	      
						<?php echo 
				  form_dropdown("alasan_pemberi",array("Sakit"=>"Sakit","Buta Huruf"=>"Buta Huruf","Lainnya"=>"Lainnya"),'','id="alasan" onchange="show_pindah()"') ?></td>
		 	   </tr>
		 	    <tr class="sebutkan_7">
                	<td>Sebutkan Kondisi Lainnya</td>
                	
                	<td>: <input  size="35" type="text" name="alasan" id="alasan" /></td>
                </tr>	
			 	 
		 	</table>
			 
			</fieldset>
		  <!--  <fieldset> <legend> <b>Peruntukan Surat Kuasa </b></legend>
            <textarea class="ckeditor" cols="80" id="untuk" name="untuk" rows="10"></textarea>
            </fieldset> -->
			<!-- <fieldset> <legend><strong>Pejabat </strong></legend>
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
			</fieldset>	 -->
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="simpan()">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
	</div>
	 