<table id="tt" class="easyui-datagrid" style="width:950px;height:600px"
			url="<?php echo site_url("$controller/get_data")  ?>"
			title="<?php echo $title ?>"  singleSelect="false" toolbar="#tb"
			rownumbers="true" pagination="true">
		<thead frozen="true">
			<tr>
				<th field="ck" checkbox="true"></th>
				
				<th field="paspoto" width="80" sortable="true">Foto</th>
				<th field="nik" width="150" sortable="true">NIK</th>
				<th field="nama" width="200" sortable="true">Nama</th>
				<th field="jk" width="20" sortable="true">JK</th>
			</tr>
		</thead>
		<thead>
			<tr>
				
				<th field="tmp_lahir" width="150" sortable="true">TTL</th>
				<th field="alamat" width="150" sortable="true" wrap="true">Alamat</th>
				<th field="desa" width="200" sortable="true">Desa</th>
				<th field="kecamatan" width="200" sortable="true" >Kecamatan</th>
 
			</tr>
		</thead>
	</table>


<div id="tb" style="padding:5px;height:auto">
	<div >		
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="baru()" >Tambah Baru</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="edit()">Edit</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="hapus();">Hapus</a>
		<br />
		 
	</div>
	
	<div>		
		<fieldset> <legend>Pencarian</legend>
		<?php
		    echo form_dropdown('search_id_kecamatan',$arr_kecamatan,'',
		    'id="search_id_kecamatan" onchange="get_desa(this,\'#search_id_desa\')" ');
		?>
		<?php
		    	 echo form_dropdown('search_id_desa',array('x'=>" - Semua Desa - "),'', 'id="search_id_desa"');
		?>

		<input type="text" id="search_nama" name="search_nama" placeholder="Username" />

		<a href="#" class="easyui-linkbutton" iconCls="icon-search" onclick="cari()">Cari</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-reset" onclick="reset_search()">Reset </a>
		</fieldset> 
		
	</div> 

</div>

<?php 
$this->load->view($controller."_form");
$this->load->view($controller."_js");
$this->load->view("js/global_js");
?>