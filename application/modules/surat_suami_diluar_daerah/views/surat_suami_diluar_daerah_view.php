
<table id="tt" class="easyui-datagrid" style="width:1035px;height:600px"
			url="<?php echo site_url("$controller/get_data")  ?>"
			title="<?php echo $header; ?>"  singleSelect="false" toolbar="#tb"
			rownumbers="true" pagination="true">
		<thead frozen="true">
			<tr>
				<th field="ck" checkbox="true"></th>
				<th field="tanggal_surat" width="100" sortable="true"><strong>Tanggal</strong> </th>
				<!-- <th field="no_surat" width="150" sortable="true"><strong>No. Surat</strong> </th> -->
				<th field="suami_nama" width="150" sortable="true"><strong>Nama Suami </strong></th>
				<th field="suami_nik" width="150" sortable="true"><strong>Nik Suami</strong></th>
				<th field="suami_tempat_lahir" width="100" sortable="true"><strong>Tmp. Lahir</strong></th>
				<th field="suami_tanggal_lahir" width="100" sortable="true"><strong>Tgl. Lahir</strong></th>
			</tr>
			
		</thead>
		<thead >
			<tr>
			
			<th field="istri_nama" width="200" sortable="true"><strong>Nama Istri</strong></th>
			<th field="istri_nik" width="200" sortable="true"><strong>NIK Istri</strong></th>
			<th field="istri_tempat_lahir" width="100" sortable="true"><strong>Tmp. Lahir</strong></th>
				<th field="istri_tanggal_lahir" width="100" sortable="true"><strong>Tgl. Lahir</strong></th>
			
			</tr>
		</thead>

	</table>


<div id="tb" style="padding:5px;height:auto">
	<div >		
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="baru()" >Tambah Baru</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="edit()">Edit</a>
     <!--    <a href="#" class="easyui-linkbutton" iconCls="icon-word" plain="true" onclick="word()">Word</a> -->
 		<a href="#" class="easyui-linkbutton" iconCls="icon-print" plain="true" onclick="cetak()">Cetak</a>
 		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="hapus();">Hapus</a>
		<br />
		 
	</div>
	
	<div>		
		<fieldset> <legend>Pencarian</legend>
		 
	 	 
		<input type="text" name="search_suami_nama" id="search_suami_nama" placeholder="Masukkan Nama Suami" /> atau

		<input type="text" name="search_istri_nama" id="search_istri_nama"  placeholder="Masukkan Nama Istri"/> 
		
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