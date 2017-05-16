<div id="tb" style="padding:5px;height:auto">
<div >	Pilih Batasan Umur : 
<select onChange="document.location.href=this.options[this.selectedIndex].value;">
<!-- <option value=""  >Pilih Batas Umur</option> -->
<option value="u_1_5">Umur 0 - 5 Tahun</option>
<option value="u_6_10">Umur 6 - 10 Tahun</option>
<option value="u_11_20">Umur 11 - 20 Tahun</option>
<option value="u_21_30">Umur 21 - 30 Tahun</option>
<option value="u_31_40">Umur 31 - 40 Tahun</option>
<option value="u_41_50">Umur 41 - 50 Tahun</option>
<option value="u_51_60">Umur 51 - 60 Tahun</option>
<option value="u_61_70">Umur 61 - 70 Tahun</option>
<option value="u_70">Umur > 70</option>

</select>
	 	<a href="#" class="easyui-linkbutton" iconCls="icon-print" plain="true" onclick="cetak();">Cetak</a>
<!-- 	 <a href="#" class="easyui-linkbutton" iconCls="icon-excel" plain="true" onclick="excel();">Export to Excel</a>	  -->

		<!--<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="baru()" >Tambah Baru</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="edit()">Edit</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-detail" plain="true" onclick="detail()">Detail</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="hapus();">Hapus</a>
		
		<br /> -->
		 
	</div>
	
	
<!--	<div>		
		<fieldset> <legend>Pencarian</legend>
		<?php /*
		    echo form_dropdown('search_id_kecamatan',$arr_kecamatan,'',
	 
		    	 echo form_dropdown('search_id_desa',array('x'=>" - Semua Desa - "),'', 'id="search_id_desa"');
		    	 */
		?>

		<?php echo form_dropdown("search_status_kependudukan",
		$this->cm->add_arr_head($this->cm->arr_status_kependudukan,'x','- Semua Status Kependudukan - '),'',
		'id="search_status_kependudukan"'); ?>

		<?php echo form_dropdown("search_status_kawin",
		$this->cm->add_arr_head($this->cm->arr_status_kawin,'x','- Semua Status Pernikahan - '),'',
		'id="search_status_kawin"'); ?>
		

		<?php echo form_dropdown("search_jk",
		$this->cm->add_arr_head($this->cm->arr_jk,'x','- Semua jenis kelamin - '),'',
		'id="search_jk"'); ?>

		<input type="text" id="search_nik" name="search_nik" placeholder="NIK" />
		<input type="text" id="search_nama" name="search_nama" placeholder="Nama penduduk" />



		<a href="#" class="easyui-linkbutton" iconCls="icon-search" onclick="cari()">Cari</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-reset" onclick="reset_search()">Reset </a>
		</fieldset> 
		
	</div>  -->


</div>