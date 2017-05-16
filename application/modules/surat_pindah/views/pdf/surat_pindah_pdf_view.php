<html>
	<head>
		<title>
			<?php echo   $title; ?>
		</title>

 <style>
* {
	font-size:10px;
}
</style> 
		</head>

<body>
	<?php 
	$desa2 = $this->cm->data_desa();

	?>

 <?php 
$this->load->view("kop_surat");
 ?>
 <div align="center">
  <b> 
  <font size="11"><u>SURAT KETERANGAN PINDAH</u> </font><br />
  <font size="10"> Nomor : <?php echo $no_surat ?></font> </b>
</div>  

<?php 
	$arr_hubungan = $this->cm->arr_hubungan;
?>

<br>
 <table width="100%">
   <tr>
     <td width="3%">1.</td>
     <td width="28%">Nama Lengkap </td>
     <td width="69%">: <?php echo $nama; ?></td>
   </tr>
   <tr>
     <td>2.</td>
     <td>Tanggal Lahir </td>
     <td>: <?php echo tgl_indo(($tgl_lahir)); ?></td>
   </tr>
   <tr>
     <td>3.</td>
     <td>Jenis Kelamin </td>
     <td>:  <?php echo $this->cm->jk($jk); ?></td>
   </tr>
   <tr>
     <td>4.</td>
     <td>Dilahirkan di </td>
     <td>: <?php echo $tmp_lahir; ?></td>
   </tr>
   <tr>
     <td>5.</td>
     <td>Kewarganegaraan</td>
     <td>: <?php echo $warga_negara; ?></td>
   </tr>
   <tr>
     <td>6.</td>
     <td>Agama </td>
     <td>: 
     <?php echo $agama; ?></td>
   </tr>
    <tr>
     <td>7.</td>
     <td>Status Perkawinan  </td>
     <td>: 
      <?php 
			  $arr_status_kawin = $this->cm->arr_status_kawin;
			  echo $arr_status_kawin[$status_kawin] ?></td>
   </tr>
   <tr>
     <td>8.</td>
     <td>Pekerjaan </td>
     <td>: <?php echo $pekerjaan; ?></td>
   </tr>
   
   <tr>
     <td>9.</td>
     <td>Pendidikan</td>
     <td>: <?php echo $pendidikan; ?></td>
   </tr>
   <tr>
     <td>10.</td>
     <td>Alamat Asal </td>
     <td>: <?php echo $alamat. "  Rt $rt Rw $rw "; 
			 if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      }  ?></td>
   </tr>
   <tr>
     <td>11.</td>
     <td>NIK</td>
     <td>: <?php echo $nik; ?></td>
   </tr>
    <tr>
     <td>12.</td>
     <td>Pindah Ke  <?php echo $pindah_negara; ?></td>
     <td>&nbsp;</td>
   </tr>
    <tr>
     <td>&nbsp;</td>
     <td>a. Dusun/Alamat</td>
     <td>: <?php echo $dusun_pindah; ?></td>
   </tr>
    <tr>
      <td>&nbsp;</td>
      <td>b. Rt/Rw </td>
      <td>: Rt <?php echo $rt_pindah; ?> Rw <?php echo $rw_pindah; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>c. Desa/Kelurahan </td>
      <td>: <?php echo ucwords(strtolower($pindah_desa)); ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>d. Kecamatan</td>
      <td>: <?php echo ucwords(strtolower($pindah_kecamatan)); ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>e. Kab/Kota </td>
      <td>: <?php echo ucwords(strtolower($pindah_kota)); ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>f.&nbsp; Provinsi </td>
      <td>: <?php echo ucwords(strtolower($pindah_provinsi)); ?></td>
    </tr>
    <tr>
     <td>&nbsp;</td>
     <td>g. Pada Tanggal </td>
     <td>: <?php echo tgl_indo(flipdate($tgl_pindah)); ?></td>
   </tr>
    <tr>
     <td>13.</td>
     <td>Alasan Pindah </td>
     <td>: 
    

  <?php 
  $alacang_pindah = $this->cm->alacang_pindah;
  if($alasan_pindah==7) 
                                    echo 'Lainnya (',($alasan_lainnya),')';
                                 else
                                     echo $alacang_pindah[$alasan_pindah] ;;?>
</td>
   </tr>
   <tr>
     <td>14.</td>
     <td>Pengikut</td>
    
     <td> </td>
   </tr>
  
  
 </table> 
 <p align="center">
 
   Data Pengikut<!-- <font size="10px"><?php echo $no_kk; ?></font> -->

</p>
 <table width="100%" border="0.5" cellpadding="3" class="tabel">
<tr><th width="5%"  align="center">No.</th>
  <th width="30%" align="center">Nama</th>
  <th width="6%"  align="center">Jk </th>
<th width="8%" align="center">Umur</th>
<th  align="center">Status Perkawinan</th>
<th width="15%" align="center">Pendidikan</th>
<th width="21%"  align="center">NIK</th>
<!-- <th  align="center">KET</th>
 --></tr>
<?php 

	 
$baris = 4; $i=0;
if($record->num_rows() > 0 ) {	
	
	$arr_hubungan = $this->cm->arr_hubungan;
	
	foreach($record->result() as $row) :
		$baris--;
		$i++;
		echo "<tr>
		<td><center>$i.</center></td> 
    <td>$row->nama </td> 
    <td><center>$row->jk </center></td> 
    <td>$row->umur th</td>
    <td>".$arr_status_kawin[$row->status_kawin]." </td> 
    <td>$row->pendidikan </td> 
    <td>$row->nik </td>

		
		</tr>";
	endforeach;	
}
for($x=0; $x<$baris; $x++) {
	$i++;
	echo "<tr>
		<td>$i</td> <td> </td><td> </td> <td> </td> <td> </td> <td> </td> <td> </td> 
		

		</tr>";
}
 
?>
</table>

 

 
<p>
  <?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
</p>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="50%" align="left" valign="top">
    <?php if($ttd_camat == 1 ) {  ?>
    <table width="100%" border="0" cellpadding="0">
      <tr>
        <td align="center">MENGETAHUI, </td>
      </tr>
      <tr>
        <td align="center">CAMAT <?php echo $desa2->kecamatan ?></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center"><u><?php echo $desa2->nama_camat; ?></u></td>
      </tr>
      <tr>
        <td align="center"><?php echo $desa2->pangkat_camat; ?></td>
      </tr>
      <tr>
        <td align="center"><table width="100%" border="0" cellpadding="0">
     
          <tr>
            <td colspan="3" align="center">NIP. <?php echo $desa2->nip_camat; ?>            </td>
            </tr>
        </table></td>
      </tr>
    </table> 
    <?php } ?>  </td>
    <td width="50%" align="center" valign="top"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td width="9%" align="center">&nbsp;</td>
        <td width="91%" align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
      </tr>
      <?php 
		if($ttd <> "kepala") {  ?>
      <tr>
        <td align="center">a.n. </td>
        <td align="center">LURAH </td>
      </tr>
      <?php } ?>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center"><?php echo strtoupper($ttd_jabatan) ; ?></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <?php 
		if($ttd ==  "kepala") {  ?>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <?php } ?>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center"><u><?php echo $ttd_nama; ?></u></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center"><table width="100%" border="0" cellpadding="0">
         
          <tr>
            <td align="center">NIP. <?php echo  $nip; ?></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php }  else { ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="50%" align="center" valign="top"><?php if($ttd_camat == 1 ) {  ?>
    <table width="100%" border="0" cellpadding="0">
      <tr>
        <td align="center">MENGETAHUI, </td>
      </tr>
      <tr>
        <td align="center">CAMAT <?php echo $desa2->kecamatan ?></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center"><u><?php echo $desa2->nama_camat; ?></u></td>
      </tr>
      <tr>
        <td align="center"><table width="100%" border="0" cellpadding="0">
          <tr>
            <td align="center"><?php echo $desa2->pangkat_camat; ?></td>
            </tr>
          <tr>
            <td align="center">NIP. <?php echo $desa2->nip_camat; ?></td>
            </tr>
        </table></td>
      </tr>
    </table> 
    <?php } ?></td>
    <td width="50%" align="center" valign="top"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td width="9%" align="center">&nbsp;</td>
        <td width="91%" align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
      </tr>
      <?php 
		if($ttd <> "kepala") {  ?>
      <tr>
        <td align="center">a.n. </td>
        <td align="center">KEPALA DESA </td>
      </tr>
      <?php } ?>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center"><?php echo strtoupper($ttd_jabatan) ; ?></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <?php 
		if($ttd ==  "kepala") {  ?>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <?php } ?>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center"><u><?php echo $ttd_nama; ?></u></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center"><?php if($ttd == "sek") {  ?><table width="100%" border="0" cellpadding="0">
           
            <tr>
              <td align="center">NIP. <?php echo  $nip; ?></td>
            </tr>
          </table>          <?php } ?> </td>
      </tr>
    </table></td>
  </tr>
</table>
<?php }  ?>
<br />
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br />
</p>
</body>

</html>