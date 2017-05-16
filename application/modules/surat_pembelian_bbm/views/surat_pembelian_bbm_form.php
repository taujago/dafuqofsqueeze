<div id="dlg" class="easyui-dialog" style="width:900px;height:400px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="title">Data Surat Keterangan Domisili</div>
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />
		 	<fieldset >
		 		<legend><b>Data pemohon</b></legend>
			 <table>
				
				<tr>
			 		<td width="200px">Nomor Surat </td> 
			 		<td> : <input size="40" type="text" name="no_surat" id="no_surat" /></td>
			 	</tr>		 		 
			 	<tr>
			 		<td > NIK penduduk</td> 
			 		<td> : <input type="text" name="nik" id="nik" />
			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik');">
			 			cari </a>
			 		</td></td>
			 	</tr>
			 	<tr>
			 		<td width="200px">Jenis Bahan Bakar </td> 
			 		<td> : <?php echo form_dropdown("data",array("Bensin"=>"Bensin"
			 											  ,"Solar"=>"Solar")) ?> </td>
			 	</tr>
			 	<tr>
			 		<td width="200px">Banyaknya BBM </td> 
			 		<td> : <input size="2" type="text" name="banyak" id="banyak" /> Liter/ Minggu</td>
			 	</tr>

			 
		 </table>
		 <table>
		 		 <tr>
			<legend> <b>Terangkan kebutuhan BBM </b></legend>
            <textarea class="" cols="80" id="kebutuhan" name="kebutuhan" rows="10"></textarea>
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
						echo form_dropdown("ttd",$this->cm->arr_ttd_camat(),$ttd,'id="ttd"') ?>
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
	 