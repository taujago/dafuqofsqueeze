
<table id="tt" class="easyui-datagrid" style="width:1035px;height:600px"
			url="<?php echo site_url("$controller/get_data")  ?>"
			title="<?php echo $header; ?>"  singleSelect="false" toolbar="#tb"
			rownumbers="true" pagination="true">
		<thead frozen="true">
			<tr>
				<th field="ck" checkbox="true"></th>
				<th field="tanggal" width="100" sortable="true"><strong>Tanggal</strong> </th>
				
				<th field="nama_1" width="200" sortable="true"><strong>PIHAK I </strong></th>
				<th field="nama_2" width="200" sortable="true"><strong>PIHAK II </strong></th>
				<th field="nama" width="200" sortable="true"><strong>Istri/Nama</strong> </th>
         		</tr>
			
		</thead>
		<thead >
			<tr>       
				<th field="saksi_1" width="150" sortable="true"><strong>Saksi 1</strong></th>
				<th field="saksi_2" width="150" sortable="true"><strong>Saksi 2</strong></th>
				<th field="alamat_tanah" width="250" sortable="true"><strong>Lokasi Tanah</strong></th>
				<th field="luas" width="100" sortable="true"><strong>luas</strong></th>
				<th field="uang" width="150" sortable="true"><strong>Nilai Uang</strong></th>
				<th field="batas_utara" width="250" sortable="true"><strong>Batas Utara</strong></th>
				<th field="batas_selatan" width="250" sortable="true"><strong>Batas Selatan</strong></th>
				<th field="batas_barat" width="250" sortable="true"><strong>Batas Barat</strong></th>
				<th field="batas_timur" width="250" sortable="true"><strong>Batas Timur</strong></th>
				
	
			<!-- <th field="tempat_meninggal" width="100" sortable="true"><strong>Tmp. Meningal</strong></th>
			<th field="tgl_meninggal" width="100" sortable="true"><strong>Tgl. Meninggal</strong></th>
			<th field="bapak_nik" width="100" sortable="true"><strong>Nik Bapak</strong></th>
			<th field="bapak_nama" width="200" sortable="true"><strong>Nama Bapak</strong></th>
			<th field="ibu_nik" width="100" sortable="true"><strong>NIK Ibu</strong></th>
			<th field="ibu_nama" width="200" sortable="true"><strong>Nama Ibu</strong></th>
			<th field="saksi1_nik" width="100" sortable="true"><strong>NIK Pelapor </strong></th>
			<th field="saksi1_nama" width="200" sortable="true"><strong>Nama Pelapor </strong></th> -->
  			</tr>
		</thead>

	</table>


<div id="tb" style="padding:5px;height:auto">
	<div >		
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="baru()" >Tambah Baru</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="edit()">Edit</a>
 		<a href="#" class="easyui-linkbutton" iconCls="icon-print" plain="true" onclick="cetak()">Cetak</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="hapus();">Hapus</a>
		 
		<br />
		 
	</div>
	<div>
   
    <!-- <a href="#" class="easyui-linkbutton" iconCls="icon-word" plain="true" onclick="word()">Word</a> -->
   <!--  <a href="#" class="easyui-linkbutton" iconCls="icon-print" plain="true" onclick="cetak()">Cetak</a> -->
	<!-- 	<a href="#" class="easyui-linkbutton" iconCls="icon-excel" plain="true" onclick="excel()">Excel</a> -->
    </fieldset>
    </div>
	<div>		
		<fieldset> <legend>Pencarian</legend>
		 <input type="text" name="search_nama_1" id="search_nama_1" placeholder="Nama Pihak I " />
		 <input type="text" name="search_nama_2" id="search_nama_2" placeholder="Nama Pihak II " />
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