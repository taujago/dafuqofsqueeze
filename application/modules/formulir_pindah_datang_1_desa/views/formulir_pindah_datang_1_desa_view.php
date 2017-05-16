
<table id="tt" class="easyui-datagrid" style="width:1035px;height:600px"
			url="<?php echo site_url("$controller/get_data")  ?>"
			title="<?php echo $header; ?>"  singleSelect="false" toolbar="#tb"
			rownumbers="true" pagination="true">
		<thead frozen="true">
			<tr>
				<th field="ck" checkbox="true"></th>
				<th field="tanggal" width="100" sortable="true"><strong>Tanggal</strong> </th>
				<th field="no_formulir" width="150" sortable="true"><strong>No Formulir </strong></th>
				<th field="tanggal_kedatangan" width="110" sortable="true"><strong>Tgl Kedatangan </strong></th>
					<th field="pemohon_nama" width="200" sortable="true"><strong>Nama Pemohon </strong></th>
				<th field="pemohon_nik" width="150" sortable="true"><strong>NIK Pemohon</strong></th>
				
				
			</tr>
			
		</thead>
		<thead >
			<tr>
			<th field="tujuan_dusun" width="200" sortable="true"><strong>Dusun Tujuan </strong></th>
		
			<th field="tujuan_alamat" width="150" sortable="true"><strong>Alamat Tujuan</strong></th>
			<th field="tujuan_rt" width="200" sortable="true"><strong>RT Tujuan</strong></th>
			<th field="tujuan_rw" width="200" sortable="true"><strong>RW Tujuan</strong></th>
		
			
			</tr>
		</thead>
	
	</table>


<div id="tb" style="padding:5px;height:auto">
	<div >		
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="baru()" >Tambah Baru</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="edit()">Edit</a>
       <!--  <a href="#" class="easyui-linkbutton" iconCls="icon-word" plain="true" onclick="word()">Word</a> -->
 		<a href="#" class="easyui-linkbutton" iconCls="icon-print" plain="true" onclick="cetak()">Cetak</a>
 		<a href="#" class="easyui-linkbutton" iconCls="icon-spek" plain="true" onclick="spek();">Spesifikasi Formulir</a>
		<br />
		 
	</div>
	
	<div>		
		<fieldset> <legend>Pencarian</legend>
		 
	 	 
		<input type="text" name="search_nama" id="search_nama" placeholder="Nama Pemohon" />
		<input type="text" name="search_tgl_awal" id="search_tgl_awal" /> s.d 
		<input type="text" name="search_tgl_akhir" id="search_tgl_akhir" />
 		<a href="#" class="easyui-linkbutton" iconCls="icon-search" onclick="cari()">Cari</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-reset" onclick="reset_search()">Reset </a>
		</fieldset> 
		
	</div> 

</div>

<?php 
$this->load->view($controller."_form");
$this->load->view($controller."_js");
$this->load->view("js/global_js");
$this->load->view("search_penduduk_view");
$this->load->view("search_penduduk_js");

?>

<div id="spek" class="easyui-dialog" style="width:600px;height:200px;padding:10px 20px"
				closed="true" >
		<div class="ftitle">Spesifikasi formulir dengan kode F-1.23 sebagaimana dimaksud dalam Pasal 2 angka 23
meliputi:</div>
		
			
			<table>
	 			 
	 			<tr><td>a. </td>
	 				<td> Bahan Baku Kertas</td>
	 				<td> : HVS</td>
	 			</tr>

	 			<tr><td>b. </td>
	 				<td> Ukuran</td>
	 				<td> :  Folio (21,5 cm x 33 cm)</td>
	 			</tr>

	 			<tr><td>c. </td>
	 				<td> Jumlah Rangkap</td>
	 				<td> : 1 (satu) rangkap</td>
	 			</tr>
	 			
	 		

		 </table>
			
		
	</div>
