
<div id="search_dlg_penduduka" class="easyui-dialog" style="width:900px;height:400px;padding:10px 10px"
			closed="true" >
 <input type="text" name="search_nama_table_datang" id="search_nama_table_datang" />  
  <a href="javascript:search_cari_datang();" 
 class="easyui-linkbutton" iconCls="icon-search" plain="false" > Cari Nama </a>  

 <input type="text" name="search_nik_table_datang" id="search_nik_table_datang" />  
  <a href="javascript:search_cari_nik_datang();" 
 class="easyui-linkbutton" iconCls="icon-search" plain="false" > Cari Nik </a>  
 <!-- <input type="submit" name="btn_search_penduduk" id="btn_search_penduduk" value="Cari" />
--> 
<input type="hidden" name="target" id="target" />
<br />Jika Penduduk yang datang belum terdapat dalam sistem, silahkan masukkan terlebih dahulu penduduk yang datang tersebut pada kedatangan <a href="<?php echo site_url("operator_penduduk/tambah") ?> "target="_blank">(Tambah Kedatangan). </a>Silahkan Lihat Statistik Penduduk datang atau <a href="<?php echo site_url("statistik_penduduk_datang") ?> "target="_blank">(Klik Disini). </a> <br />
<div id="kotak_pencarian_datang">

</div>
</div>



 
