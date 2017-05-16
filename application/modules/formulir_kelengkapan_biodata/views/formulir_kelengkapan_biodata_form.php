<div id="dlg" class="easyui-dialog" style="width:800px;height:600px;padding:10px 10px"
			closed="true" buttons="#dlg-buttons">
		<div class="title">Data Formulir Kelengkapan Pencatatan Biodata Penduduk WNI (F-1.02)</div>
		<form id="fm" method="post" novalidate>			 
			<input type="hidden" name="id" id="id" />


			 <fieldset >
		 	<legend><b>Data Pemohon</b></legend>
			 <table>
				
				<tr>
			 		<td width="200px">NIK Pemohon </td> 
			 		<td> : <input type="text" name="nik" id="nik" />
			 			<a  class="easyui-linkbutton" iconCls="icon-search" 
			 			 href="javascript:show_dialog('nik');">
			 			cari </a>
			 		</td>
			 	</tr>		 		 
			 	<tr>
			 	  <td >Nama Pemohon</td>
			 	  <td>: 
		 	      <input name="nama" type="text" id="nama" size="60" /></td>
		 	   </tr>
			 
			 	 
		 	</table>
			 
			</fieldset>
		  <fieldset >
		 	<legend><b>Nama Gelar Akademis</b></legend>
			 <table>
				
					 		 
			 	<tr>
			 	  <td width="200px" >Dicantumkan di depan nama</td>
			 	  <td>: 
		 	      <input name="depan_akademis" type="text" id="depan_akademis" size="60" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Dicantumkan di belakang nama</td>
			 	  <td>: 
		 	      <input name="belakang_akademis" type="text" id="belakang_akademis" size="60" /></td>
		 	   </tr>

			 	 
			 	 
		 	</table>
			 
			</fieldset>

			 <fieldset >
		 	<legend><b>Nama Gelar Kebangsawanan</b></legend>
			 <table>
				
					 		 
			 	<tr>
			 	  <td width="200px" >Dicantumkan di depan nama</td>
			 	  <td>: 
		 	      <input name="depan_bangsawan" type="text" id="depan_bangsawan" size="60" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Dicantumkan di belakang nama</td>
			 	  <td>: 
		 	      <input name="belakang_bangsawan" type="text" id="belakang_bangsawan" size="60" /></td>
		 	   </tr>

			 	 	
		 	</table>
			 
			</fieldset>

				 <fieldset >
		 	<legend><b>Gelar Keagamaan</b></legend>
			 <table>
				
					 		 
			 	<tr>
			 	  <td width="200px" >Nama Gelar Keagamaan</td>
			 	  <td>: 
		 	      <input name="gelar_agama" type="text" id="gelar_agama" size="60" /></td>
		 	   </tr>
		 	   	<tr>
			 	
			 	 	<tr>
			 	  <td >Pencantuman Gelar dalam Dokumen Kependudukan (KK dan KTP)</td>
			 	  <td>: <input type="radio" name="tidak_cantum" value="1"/>Tidak Dicantumkan 
					<input type="radio" name="tidak_cantum" value="2"/>Dicantumkan 

		 	      </td>
		 	   </tr>
		 	 
			 	 
		 	</table>
			 
			</fieldset>
				 <fieldset >
		 	<legend><b>Bukti Kepemilikan Gelar Akademis</b></legend>
			 <table>
				<tr><td colspan="2"><strong>a. Gelar Akademis Setingkat Guru Besar</strong></td></tr>
					 		 
			 	<tr>
			 	  <td width="200px" >Nama Gelar</td>
			 	  <td>: 
		 	      <input name="nama_gelar_s4" type="text" id="nama_gelar_s4" size="60" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Nama Perguruan Tinggi</td>
			 	  <td>: 
		 	      <input name="nama_kampus_s4" type="text" id="nama_kampus_s4" size="60" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Nomor dan Tanggal SK</td>
			 	  <td>: 
		 	      <input name="nomor_kampus_s4" type="text" id="nomor_kampus_s4" size="30" />
		 	      <input type="text" name="tgl_kampus_s4" id="tgl_kampus_s4" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Nama Pejabat yang Mengesahkan</td>
			 	  <td>: 
		 	      <input name="pejabat_kampus_s4" type="text" id="pejabat_kampus_s4" size="60" /></td>
		 	   </tr>

		 	   <tr><td colspan="2"><strong>b. Gelar Akademis Setingkat S3</strong></td></tr>
					 		 
			 	<tr>
			 	  <td width="200px" >Nama Gelar</td>
			 	  <td>: 
		 	      <input name="nama_gelar_s3" type="text" id="nama_gelar_s3" size="60" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Nama Perguruan Tinggi</td>
			 	  <td>: 
		 	      <input name="nama_kampus_s3" type="text" id="nama_kampus_s3" size="60" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Nomor dan Tanggal Ijazah</td>
			 	  <td>: 
		 	      <input name="nomor_kampus_s3" type="text" id="nomor_kampus_s3" size="30" />
		 	      <input type="text" name="tgl_kampus_s3" id="tgl_kampus_s3" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Nama Rektor yang Mengesahkan</td>
			 	  <td>: 
		 	      <input name="pejabat_kampus_s3" type="text" id="pejabat_kampus_s3" size="60" /></td>
		 	   </tr>

		 	    <tr><td colspan="2"><strong>c. Gelar Akademis Setingkat S2</strong></td></tr>
					 		 
			 	<tr>
			 	  <td width="200px" >Nama Gelar</td>
			 	  <td>: 
		 	      <input name="nama_gelar_s2" type="text" id="nama_gelar_s2" size="60" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Nama Perguruan Tinggi</td>
			 	  <td>: 
		 	      <input name="nama_kampus_s2" type="text" id="nama_kampus_s2" size="60" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Nomor dan Tanggal Ijazah</td>
			 	  <td>: 
		 	      <input name="nomor_kampus_s2" type="text" id="nomor_kampus_s2" size="20" />
		 	      <input type="text" name="tgl_kampus_s2" id="tgl_kampus_s2" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Nama Rektor yang Mengesahkan</td>
			 	  <td>: 
		 	      <input name="pejabat_kampus_s2" type="text" id="pejabat_kampus_s2" size="60" /></td>
		 	   </tr>

		 	    <tr><td colspan="2"><strong>d. Gelar Akademis Setingkat S1</strong></td></tr>
					 		 
			 	<tr>
			 	  <td width="200px" >Nama Gelar</td>
			 	  <td>: 
		 	      <input name="nama_gelar_s1" type="text" id="nama_gelar_s1" size="60" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Nama Perguruan Tinggi</td>
			 	  <td>: 
		 	      <input name="nama_kampus_s1" type="text" id="nama_kampus_s1" size="60" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Nomor dan Tanggal Ijazah</td>
			 	  <td>: 
		 	      <input name="nomor_kampus_s1" type="text" id="nomor_kampus_s1" size="20" />
		 	      <input type="text" name="tgl_kampus_s1" id="tgl_kampus_s1" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Nama Rektor yang Mengesahkan</td>
			 	  <td>: 
		 	      <input name="pejabat_kampus_s1" type="text" id="pejabat_kampus_s1" size="60" /></td>
		 	   </tr>

		 	   <tr><td colspan="2"><strong>e. Gelar Akademis Setingkat Diploma/Akademi</strong></td></tr>
					 		 
			 	<tr>
			 	  <td width="200px" >Nama Gelar</td>
			 	  <td>: 
		 	      <input name="nama_gelar_dip" type="text" id="nama_gelar_dip" size="60" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Nama Perguruan Tinggi</td>
			 	  <td>: 
		 	      <input name="nama_kampus_dip" type="text" id="nama_kampus_dip" size="60" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Nomor dan Tanggal Ijazah</td>
			 	  <td>: 
		 	      <input name="nomor_kampus_dip" type="text" id="nomor_kampus_dip" size="20" />
		 	      <input type="text" name="tgl_kampus_dip" id="tgl_kampus_dip" /></td>
		 	   </tr>
		 	   	<tr>
			 	  <td >Nama Rektor yang Mengesahkan</td>
			 	  <td>: 
		 	      <input name="pejabat_kampus_dip" type="text" id="pejabat_kampus_dip" size="60" /></td>
		 	   </tr>

			 	 	
		 	</table>
			 
			</fieldset>
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="simpan()">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
	</div>
	 
	 <script type="text/javascript">
	 	
$("#nama").focus(function(){
	 
	 	$.ajax({
			url : '<?php echo site_url("general/get_data_nikah"); ?>',
			data : { nik : $("#nik").val() }, 
			type : 'post', 
			dataType : 'json',
			success : function(obj) {
				$("#nama").val(obj.nama);
				
			}
		});
	 
	 });
	 </script>