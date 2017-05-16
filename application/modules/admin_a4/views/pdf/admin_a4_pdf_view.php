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
	font-size:8px;
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
 	<h2>DATA APARATUR PEMERINTAH <?php echo strtoupper($desa2->bentuk_lembaga) ?> </h2>
 	<h2> <?php echo strtoupper($desa2->bentuk_lembaga. " ". $desa2->desa) ?> </h2>
 	<h2> TAHUN <?php echo $tahun; ?> </h2>


 </center>-->
 
  <p style="text-align:center">
 	  <span class="judul">DATA APARATUR PEMERINTAH <?php echo strtoupper($desa2->bentuk_lembaga) ?> </span>   <br>

 	 <span class="judul"> <?php echo strtoupper($desa2->bentuk_lembaga. " ". $desa2->desa) ?></span>    <br>

 	 <span class="judul"> TAHUN <?php echo $tahun; ?>   </span><br>

</p>
 <p   style="font-weight:bold; text-align:right">MODEL A.4</p>
 <br /><br />
<table width="100%" border="0" cellpadding="3" class="cetak">
<thead>
   <tr>
     <th width="3%" align="center" scope="col">NO. </th>
     <th width="14%" align="center" scope="col">NAMA</th>
     <th width="6%" align="center" scope="col">NIAP</th>
     <th width="10%" align="center" scope="col">NIP</th>
     <th width="3%" align="center" scope="col">JK</th>
     <th width="6%" align="center" scope="col">TTL</th>
     <th width="5%" align="center" scope="col">AGAMA</th>
     <th width="7%" align="center" scope="col">PANGKAT 
       GOLONGAN</th>
     <th width="10%" align="center" scope="col">JABATAN</th>
     <th width="8%" align="center" scope="col">PENDIDIKAN TERAKHIR</th>
     <th width="10%" align="center" scope="col">NO. DAN TGL.<br>
PENGANGKATAN</th>
     <th width="10%" align="center" scope="col">NO. DAN TGL 
     PEMBERHENTIAN</th>
     <th width="8%" align="center" scope="col">KETERANGAN</th>
   </tr>
   <tr>
     <th align="center" scope="col">1</th>
     <th align="center" scope="col">2</th>
     <th align="center" scope="col">3</th>
     <th align="center" scope="col">4</th>
     <th align="center" scope="col">5</th>
     <th align="center" scope="col">6</th>
     <th align="center" scope="col">7</th>
     <th align="center" scope="col">8</th>
     <th align="center" scope="col">9</th>
     <th align="center" scope="col">10</th>
     <th align="center" scope="col">11</th>
     <th align="center" scope="col">12</th>
     <th align="center" scope="col">13</th>
   </tr>
   </thead>
   <?php 
   $i=0;
   foreach($record->result() as $data) : 
   $i++;
   ?> 
   <tr>
     <td width="3%" scope="col"><?php echo $i; ?></td>
     <td width="14%" scope="col"><?php echo $data->nama; ?></td>
     <td width="6%" scope="col"><?php echo $data->niap; ?></td>
     <td width="10%" scope="col"><?php echo $data->nip; ?></td>
     <td width="3%" scope="col"><?php echo $data->jk; ?></td>
     <td width="6%" scope="col"><?php echo $data->tmp_lahir. "<br />". flipdate($data->tgl_lahir); ?></td>
     <td width="5%" scope="col"><?php echo $data->agama; ?></td>
     <td width="7%" scope="col"><?php echo $data->pangkat."<br />". $data->golongan; ?></td>
     <td width="10%" scope="col"><?php echo $data->jabatan; ?></td>
     <td width="8%" scope="col"><?php echo $data->pendidikan_terakhir; ?></td>
     <td width="10%" scope="col"><?php echo $data->pengangkatan_nomor."<br />".flipdate($data->pengangkatan_tanggal); ?></td>
     <td width="10%" scope="col"><?php echo $data->pemberhentian_nomor."<br />".flipdate($data->pemberhentian_tanggal); ?></td>
     <td width="8%" scope="col"><?php echo $data->keterangan; ?></td>
  </tr>
  <?php 
  endforeach;
  ?>
</table>
<br /><br /><br />
<!-- </div> end of wrap -->
</body>

</html>