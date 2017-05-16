<style type="text/css">
#search_tablr_datang {
	border-collapse: collapse;
	border-spacing: 1px;
}

#search_tablr_datang th, #search_tablr_datang td {
	border: #999 solid 1px;
	padding: 2px;
}

#search_tablr_datang th {
	background-color:  #ccc;
	padding: 5px 0px;
}

#search_tablr_datang tr:hover {
	background-color:  #c1c1c1;
}
</style>
<table width="100%" id="search_tablr_datang">
	<tr>
		<th> </th>
		<th> NO. </th>
		<th> NO. KK </th>
		<th> NIK </th>
		<th> NAMA </th>
		<th> JK </th>
		<th> Alamat Sebelumnya </th>
		
	</tr> 


	<?php 
	$i=0;
	foreach ($record->result() as $row) : 
		 $i++;
	 
	?>
	<tr>
	<td><a href="#" onclick="pilihan('<?php echo $row->id_penduduk ?>','<?php echo $row->nik ?>', '<?php echo "#".$target; ?>');" > Pilih </a></td>
	<td><?php echo $i; ?></td>
	<td><?php echo $row->no_kk; ?></td>
	<td><?php echo $row->nik; ?></td>
	<td><?php echo $row->nama; ?></td>
	<td><?php echo $row->jk; ?></td>
	<td>PROVINSI <?php echo $row->provinsi_sebelumnya; ?>, <?php echo $row->kota_sebelumnya; ?>, KECAMATAN <?php echo $row->kecamatan_sebelumnya; ?>, DESA <?php echo $row->desa_sebelumnya; ?>, RT <?php echo $row->rt_sebelumnya; ?>, RW <?php echo $row->rw_sebelumnya; ?>, ALAMAT <?php echo $row->alamat_sebelumnya; ?></td>

</tr>
<?php endforeach; ?>
</table>
<script type="text/javascript">
	
</script>