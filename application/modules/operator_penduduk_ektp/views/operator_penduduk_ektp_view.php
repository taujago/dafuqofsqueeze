<table id="tt" class="easyui-datagrid" style="width:1035px;height:600px"
			url="<?php echo site_url("$controller/get_data")  ?>"
			title="<?php echo $title ?>"  singleSelect="false" toolbar="#tb"
			rownumbers="true" pagination="true">
		<thead frozen="true">
			<tr>
				<th field="ck" checkbox="true"></th>
				
				<th field="no_kk" width="140" sortable="true"><strong>No. KK</strong></th>
				<th field="nik" width="150" sortable="true"><strong>NIK</strong></th>
				<th field="nama" width="200" sortable="true"><strong>Nama</strong></th>
				<th field="jk" width="20" sortable="true"><strong>JK</strong></th>
                	</tr>
		</thead>
		<thead>
			<tr>
				
				<th field="umur" width="50" sortable="true"><strong>Umur</strong></th>
				<th field="tmp_lahir" width="100" sortable="true"><strong>Tmp. Lahir</strong></th>
				<th field="tgl_lahir" width="100" sortable="true"><strong>Tgl. Lahir</strong></th>
				<th field="ektp" width="150" sortable="true"><strong>Stat. E-KTP</strong></th>
				
		
				
 				<th field="alamat" width="150" sortable="true" wrap="true"><strong>Alamat</strong></th>
 				<th field="rt" width="50" sortable="true"><strong>RT</strong></th>
				<th field="rw" width="50" sortable="true"><strong>RW</strong></th>
				<th field="dusun" width="100" sortable="true"><strong>Dusun</strong></th>
				<th field="pendidikan" width="100" sortable="true"><strong>Pendidikan</strong></th>
				<th field="pekerjaan" width="100" sortable="true"><strong>Pekerjaan</strong></th>
				 
				<th field="status_hidup" width="100" sortable="true"><strong>Hidup/mati</strong></th>


 
 
			</tr>
		</thead>
	</table>


<div id="tb" style="padding:5px;height:auto">
	<div >		
	<!-- 	<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="baru()" >Tambah Baru</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="edit()">Edit</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-detail" plain="true" onclick="detail()">Detail</a> -->
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" plain="true" onclick="ada();">Memiliki E-KTP</a>
		<a href="#" class="easyui-linkbutton" iconCls="	icon-remove" plain="true" onclick="tidakada();">Tidak Memiliki E-KTP</a>
		<!-- <a href="statistik_penduduk_kaya_miskin" class="easyui-linkbutton" iconCls="icon-viewlist" plain="true" >Lihat Penduduk Miskin</a> -->
		<a href="#" class="easyui-linkbutton" iconCls="icon-print" plain="true" onclick="cetak();">Cetak</a>
	 	 <a href="#" class="easyui-linkbutton" iconCls="icon-excel" plain="true" onclick="excel();">Export Excel</a>
	 	<a href="<?php echo site_url("$controller/grafik") ?>" class="easyui-linkbutton" iconCls="icon-pie" plain="true" >Grafik Statistik Kepemilikan E-KTP</a>
		<br />
		 
	</div>
	
	<div>		
		<fieldset> <legend>Pencarian</legend>
		<?php /*
		    echo form_dropdown('search_id_kecamatan',$arr_kecamatan,'',
	 
		    	 echo form_dropdown('search_id_desa',array('x'=>" - Semua Desa - "),'', 'id="search_id_desa"');
		    	 */
		?>

		<?php echo form_dropdown("search_id_dusun",
		$this->cm->add_arr_head($this->cm->arr_dusun(),'x','- Semua Dusun - '),'',
		'id="search_id_dusun"'); ?>
<!-- 
		<?php echo form_dropdown("search_status_kependudukan",
		$this->cm->add_arr_head($this->cm->arr_status_kependudukan,'x','- Semua Status Kependudukan - '),'',
		'id="search_status_kependudukan"'); ?>

		
		
		 -->

		<?php echo form_dropdown("search_jk",
		$this->cm->add_arr_head($this->cm->arr_jk,'x','- Semua jenis kelamin - '),'',
		'id="search_jk"'); ?>
		<?php echo form_dropdown("search_ektp",
		$this->cm->add_arr_head($this->cm->arr_ektp,'x','- Semua Status EKTP - '),'',
		'id="search_ektp"'); ?>


		<input type="text" id="search_nik2" name="search_nik2" placeholder="NIK" />
		<input type="text" id="search_no_kk" name="search_no_kk" placeholder="NO.KK" />
		<input type="text" id="search_nama" name="search_nama" placeholder="Nama penduduk" />
		<input type="number"  size="4" id="search_umur" name="search_umur" placeholder="Umur" />


		<a href="#" class="easyui-linkbutton" iconCls="icon-search" onclick="cari()">Tampilkan</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-reset" onclick="reset_search()">Reset </a>
		</fieldset> 
		
	</div> 

</div>

<?php 
// $this->load->view($controller."_form");
$this->load->view($controller."_js");
$this->load->view("search_penduduk_view");
$this->load->view("search_penduduk_js");
?>