<html>
	<head>
		<title>
			<?php echo   $title; ?>
		</title>
<style>
  * {
  	font-size:8px;
  }
  .judul {
  	font-size:14px;
	font-weight:bold;
  }
  
  
table.cetak th {
	border : 1px solid #000;
	vertical-align:middle;
	font-weight:bold;
}

table.cetak td {
	/*border-left : 1px solid #000;
	border-right : 1px solid #000;*/
	border:1px solid #000;
	
}
</style>
		</head>

<body>
	<?php 
	$desa2 = $this->cm->data_desa();

	?>
 
<!-- <center>
 	<h2> BUKU INVENTARIS <?php echo strtoupper($desa2->bentuk_lembaga) ?> </h2>
 	<h2> <?php echo strtoupper($desa2->bentuk_lembaga. " ". $desa2->desa) ?> </h2>
 	<h2> TAHUN <?php echo $tahun; ?> </h2>


 </center>-->
 
  <p style="text-align:center">
 	  <span class="judul"> BUKU INVENTARIS <?php echo strtoupper($desa2->bentuk_lembaga) ?> </span>   <br>

 	 <span class="judul"> <?php echo strtoupper($desa2->bentuk_lembaga. " ". $desa2->desa) ?></span>    <br>

 	 <span class="judul"> TAHUN <?php echo $tahun; ?>   </span><br>

</p>
 <p   style="font-weight:bold; text-align:right">MODEL A.3</p>
 <br /><br />
 
<table width="100%" border="0" cellpadding="3" class="cetak">
<thead>
<tr>
<th width="3%" rowspan="3" align="center"><br>
  <br>
  <br>
  No. </th>
<th width="7%" rowspan="3" align="center"><br>
  <br>
  JENIS BARANG / BANGUNAN</th>
<th colspan="5" align="center" width="37%"><br>
  <br>
  ASAL BARANG / BANGUNAN</th>
<th colspan="2" align="center" width="10%">KEADAAN BARANG/ BANGNAN AWAL TAHUN</th>
<th colspan="4" align="center" width="28%"><br>
  <br>
  PENGHAPUSAN BARANG DAN BANGUNAN </th>
<th colspan="2" align="center" width="10%">KEADAAN BARANG/ BANGNAN  AKHIR TAHUN</th>
<th width="5%" rowspan="3" align="center"><br>
  <br>
  <br>
  <br>
  <br>
  KET </th>
</tr>
<tr>
  <th width="7%" rowspan="2" align="center">DIBELI SENDIRI</th>
  <th colspan="3" align="center" width="22%">BANTUAN</th>
  
  <th width="8%" rowspan="2" align="center"><br>
    SUMBANGAN</th>
  <th width="5%" rowspan="2" align="center"><br>
    <br>
    BAIK</th>
  <th width="5%" rowspan="2" align="center"><br>
    <br>
    RUSAK</th>
  <th width="5%" rowspan="2" align="center"><br>
    <br>
    RUSAK</th>
  <th width="5%" rowspan="2" align="center"><br>
    DIJUAL</th>
  <th width="10%" rowspan="2" align="center"><br>
    <br>
    DISUMBANGKAN</th>
  <th width="8%" rowspan="2" align="center"><br>
    <br>
    TANGGAL </th>
  <th width="5%" rowspan="2" align="center"><br>
    <br>
    BAIK</th>
  <th width="5%" rowspan="2" align="center"><br>
    <br>
    RUSAK</th>
</tr>
<tr>
  <th width="8%" align="center">PEMERINTAH</th>
  <th width="7%" align="center">PROVINSI</th>
  <th width="7%" align="center">KAB/KOTA</th>
  </tr>
<tr>
  <th align="center">1</th>
  <th align="center">2</th>
  <th align="center">3</th>
  <th align="center">4</th>
  <th align="center">5</th>
  <th align="center">6</th>
  <th align="center">7</th>
  <th align="center">8</th>
  <th align="center">9</th>
  <th align="center">10</th>
  <th align="center">11</th>
  <th align="center">12</th>
  <th align="center">13</th>
  <th align="center">14</th>
  <th align="center">15</th>
  <th align="center">16</th>
</tr>
</thead>
<?php 
	$i=0;
	foreach($record->result() as $data) :  
		$i++;
	?>
<tr>
  <td width="3%"><?php echo $i ?></td>
  <td width="7%"><?php echo $data->jenis_inventaris; ?></td>
  <td width="7%"><?php echo $data->asal_sendiri; ?></td>
  <td width="8%"><?php echo $data->asal_pemerintah; ?></td>
   <td width="7%"><?php echo $data->asal_provinsi; ?></td>
    <td width="7%"><?php echo $data->asal_kab; ?></td>
  <td width="8%"><?php echo $data->asal_sumbangan; ?></td>
  <td width="5%"><?php echo $data->awal_tahun_baik; ?></td>
  <td width="5%"><?php echo $data->awal_tahun_rusak; ?></td>
  <td width="5%"><?php echo $data->hapus_rusak; ?></td>
  <td width="5%"><?php echo $data->hapus_jual; ?></td>
  <td width="10%"><?php echo $data->hapus_sumbang; ?></td>
  <td width="8%"><?php echo flipdate($data->hapus_tanggal); ?></td>
  <td width="5%"><?php echo $data->akhir_tahun_baik; ?></td>
  <td width="5%"><?php echo $data->akhir_tahun_rusak; ?></td>
  <td width="5%"><?php echo $data->keterangan; ?></td>
</tr>



<?php endforeach; ?>
</table> 
 




<br /><br /><br />
<!-- </div> end of wrap -->
</body>

</html>