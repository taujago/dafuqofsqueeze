
<table id="tt" class="easyui-datagrid" style="width:1035px;height:600px"
			url="<?php echo site_url("$controller/get_data")  ?>"
			title="<?php echo $header; ?>"  singleSelect="false" toolbar="#tb"
			rownumbers="true" pagination="true">
		<thead frozen="true">
			<tr>
				<th field="ck" checkbox="true"></th>
				<th field="tanggal_surat" width="100" sortable="true"><strong>Tanggal</strong> </th>
				<th field="no_surat" width="150" sortable="true"><strong>No. Surat</strong> </th>
				<th field="suami_nama" width="150" sortable="true"><strong>Nama Mempelai </strong></th>
				
				<th field="suami_tempat_lahir" width="100" sortable="true"><strong>Tmp. Lahir</strong></th>
				<th field="suami_tanggal_lahir" width="100" sortable="true"><strong>Tgl. Lahir</strong></th>
			</tr>
			
		</thead>
		<thead >
			<tr>
			
			<th field="ayah_suami_nama" width="200" sortable="true"><strong>Nama Ayah</strong></th>
			<th field="ibu_suami_nama" width="200" sortable="true"><strong>Nama Ibu</strong></th>
			
			</tr>
		</thead>

	</table>


<div id="tb" style="padding:5px;height:auto">
	<div >		
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="baru()" >Tambah Baru</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="edit()">Edit</a>
     <!--    <a href="#" class="easyui-linkbutton" iconCls="icon-word" plain="true" onclick="word()">Word</a> -->
 		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="hapus();">Hapus</a>
		<br />
		 
	</div>
	<div>
	<strong>Pilihan Cetak :</strong>
		<?php echo form_dropdown("jenis_cetak",array("nikah" => "Keterangan Untuk Nikah (N1)",
												 "asal_usul" => "Asal Usul Mempelai (N2)",
												 "setuju" => "Persetujuan Mempelai (N3)",
												 "orang_tua" => "Keterangan Tentang Orang Tua (N4)",
												 "izin_orang_tua" => "Izin Orang Tua (N5)"),
												 '','id="jenis_cetak"') ?>
 		<a href="#" class="easyui-linkbutton" iconCls="icon-print" plain="true" onclick="cetak()">Cetak</a>
	</div>
	
	<div>		
		<fieldset> <legend>Pencarian</legend>
		 
	 	 
		<input type="text" name="search_suami_nama" id="search_suami_nama" placeholder="Nama Mempelai" /> 

		<input type="text" name="search_ayah_suami_nama" id="search_ayah_suami_nama"  placeholder="Nama Ayah"/> 
		<input type="text" name="search_ibu_suami_nama" id="search_ibu_suami_nama"  placeholder="Nama Ibu"/> 
		
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