
<table id="tt" class="easyui-datagrid" style="width:1035px;height:600px"
			url="<?php echo site_url("$controller/get_data")  ?>"
			title="<?php echo $header; ?>"  singleSelect="false" toolbar="#tb"
			rownumbers="true" pagination="true">
		<thead frozen="true">
			<tr>
				<th field="ck" checkbox="true"></th>
				<th field="tanggal" width="100" sortable="true"><strong>Tanggal</strong> </th>
				<th field="no_surat" width="200" sortable="true"><strong>No. Surat</strong> </th>
				<th field="nama" width="200" sortable="true"><strong>Nama </strong></th>
                	</tr>
			
		</thead>
		 <thead>
		 	<tr>
				<th field="jk" width="30" sortable="true"><strong>JK </strong></th>
				
				 
		
		 		<th field="tmp_lahir" width="100" sortable="true"><strong>Tmp Lahir </strong></th>
				<th field="tgl_lahir" width="100" sortable="true"><strong>Tgl Lahir </strong></th>
				<th field="alamat" width="200" sortable="true"><strong>Alamat</strong></th>
				<th field="pindah_negara" width="200" sortable="true"><strong>Pindah ke LN </strong></th>
				<th field="pindah_provinsi" width="200" sortable="true"><strong>Pindah ke Provinsi </strong></th>
				<th field="pindah_kota" width="200" sortable="true"><strong>Kab / Kota </strong></th>
				<th field="pindah_kecamatan" width="200" sortable="true"><strong>Kecamatan </strong></th>
				<th field="pindah_desa" width="200" sortable="true"><strong>Desa </strong></th>
 		 	</tr>
		 </thead>


	</table>


<div id="tb" style="padding:5px;height:auto">
	<div >		
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="baru()" >Tambah Baru</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="edit()">Edit</a>
       <!--  <a href="#" class="easyui-linkbutton" iconCls="icon-word" plain="true" onclick="word()">Word</a> -->
 		<a href="#" class="easyui-linkbutton" iconCls="icon-print" plain="true" onclick="cetak()">Cetak</a>
 		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="hapus();">Hapus</a>
		<br />
		 
	</div>
	
	<div>		
		<fieldset> <legend>Pencarian</legend>
		 
	 	 
		<input type="text" name="search_nama" id="search_nama" placeholder="Nama penduduk" />
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