
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
		<thead >
			<tr>       
				<th field="jk" width="50" sortable="true"><strong>Jk</strong></th>
				<th field="tempat_lahir" width="100" sortable="true"><strong>Tmp. Lahir</strong></th>
				<th field="tanggal_lahir" width="100" sortable="true"><strong>Tgl. Lahir</strong></th>
	
			<th field="tempat_meninggal" width="100" sortable="true"><strong>Tmp. Meningal</strong></th>
			<th field="tgl_meninggal" width="100" sortable="true"><strong>Tgl. Meninggal</strong></th>
			<th field="bapak_nik" width="100" sortable="true"><strong>Nik Bapak</strong></th>
			<th field="bapak_nama" width="200" sortable="true"><strong>Nama Bapak</strong></th>
			<th field="ibu_nik" width="100" sortable="true"><strong>NIK Ibu</strong></th>
			<th field="ibu_nama" width="200" sortable="true"><strong>Nama Ibu</strong></th>
			<th field="saksi1_nik" width="100" sortable="true"><strong>NIK Pelapor </strong></th>
			<th field="saksi1_nama" width="200" sortable="true"><strong>Nama Pelapor </strong></th>
  			</tr>
		</thead>

	</table>


<div id="tb" style="padding:5px;height:auto">
	<div >		
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="baru()" >Tambah Baru</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="edit()">Edit</a>
 		
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="hapus();">Hapus</a>
		 <?php echo form_dropdown("jenis_cetak",array("kematian" => "Surat Kematian",
												 "formulir" => "Pelaporan",
												),'',
												 'id="jenis_cetak"') ?>

		 <a href="#" class="easyui-linkbutton" iconCls="icon-print" plain="true" onclick="cetak()">Cetak Surat</a>
		<!--   <a href="#" class="easyui-linkbutton" iconCls="icon-print" plain="true" onclick="cetak_lapor()">Cetak Pelaporan</a> -->
		<br />
		 
	</div>
	<div>
   
    <!-- <a href="#" class="easyui-linkbutton" iconCls="icon-word" plain="true" onclick="word()">Word</a> -->
   
	<!-- 	<a href="#" class="easyui-linkbutton" iconCls="icon-excel" plain="true" onclick="excel()">Excel</a> -->
    </fieldset>
    </div>
	<div>		
		<fieldset> <legend>Pencarian</legend>
		 
	 	<?php echo form_dropdown("search_jk",
		$this->cm->add_arr_head($this->cm->arr_jk,'x','- Semua jenis kelamin - '),'',
		'id="search_jk"'); ?>

		<input type="text" name="search_nama" id="search_nama" placeholder="Nama Jenazah" />
		<input type="text" name="search_bapak_nama" id="search_bapak_nama" placeholder="Nama Bapak" />
		<input type="text" name="search_ibu_nama" id="search_ibu_nama" placeholder="Nama Ibu" />
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