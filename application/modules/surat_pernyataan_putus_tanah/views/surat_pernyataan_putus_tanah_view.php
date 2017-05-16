
<table id="tt" class="easyui-datagrid" style="width:1035px;height:600px"
			url="<?php echo site_url("$controller/get_data")  ?>"
			title="<?php echo $header; ?>"  singleSelect="false" toolbar="#tb"
			rownumbers="true" pagination="true">
		<thead frozen="true">
			<tr>
				<th field="ck" checkbox="true"></th>
				<th field="tanggal" width="100" sortable="true"><strong>Tanggal</strong> </th>
				<th field="no_surat" width="200" sortable="true"><strong>No. Surat</strong> </th>
              	</tr>
			
		</thead>
		<thead >
			<tr>
            <th field="nama" width="200" sortable="true"><strong>Nama</strong></th>
			<th field="alamat" width="200" sortable="true"><strong>Alamat</strong></th>
			<th field="rt_tanah" width="30" sortable="true"><strong>RT</strong></th>	 
			<th field="dusun" width="200" sortable="true"><strong>Dusun</strong></th>	 
			 
			<th field="panjang" width="100" sortable="true"><strong>Panjang </strong></th>
            <th field="lebar" width="100" sortable="true"><strong>Lebar  </strong></th>
 			<th field="batas_utara" width="100" sortable="true"><strong>Batas Utara </strong></th>
			<th field="batas_selatan" width="100" sortable="true"><strong>Batas Selatan</strong></th>
			<th field="batas_timur" width="100" sortable="true"><strong>Batas Timur </strong></th>
			<th field="batas_selatan" width="100" sortable="true"><strong>Batas Barat</strong></th>
			</tr>
		</thead>

	</table>


<div id="tb" style="padding:5px;height:auto">
	<div >		
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="baru()" >Tambah Baru</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="edit()">Edit</a>
        <!-- <a href="#" class="easyui-linkbutton" iconCls="icon-word" plain="true" onclick="word()">Word</a> -->
 		<a href="#" class="easyui-linkbutton" iconCls="icon-print" plain="true" onclick="cetak()">Cetak</a>
 		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="hapus();">Hapus</a>
		<br />
		 
	</div>
	
	<div>		
		<fieldset> <legend>Pencarian</legend>
		 
	 	 
		<input type="text" name="search_nama" id="search_nama" placeholder="Cari Nama" />
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
$this->load->view("search_penduduk_view");
$this->load->view("search_penduduk_js");
?>