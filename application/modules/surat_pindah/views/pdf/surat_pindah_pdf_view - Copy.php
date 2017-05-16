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
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>  
<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
<?php 
	$arr_hubungan = $this->cm->arr_hubungan;
?>
<br>
 <table width="100%">
   <tr>
     <td width="10%">&nbsp;</td>
     <td width="21%">Nama </td>
     <td width="69%">: <?php echo $nama; ?></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>NIK </td>
     <td>: <?php echo $nik; ?></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>Tempat, Tgl lahir </td>
     <td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>Jenis kelamin</td>
     <td>: <?php echo $this->cm->jk($jk); ?></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>Status </td>
     <td>: <?php 
			  $arr_status_kawin = $this->cm->arr_status_kawin;
			  echo $arr_status_kawin[$status_kawin] ?></td>
   </tr>
    <tr>
     <td>&nbsp;</td>
     <td>Agama </td>
     <td>: <?php echo $agama; ?></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>Pekerjaan </td>
     <td>: <?php echo $pekerjaan; ?></td>
   </tr>
   
   <tr>
     <td>&nbsp;</td>
     <td>Alamat </td>
     <td>: <?php echo $alamat. "  Rt $rt Rw $rw "; 
			 if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      }  ?></td>
   </tr>
  
   <!-- <tr>
     <td>&nbsp;</td>
     <td>Kedudukan dalam keluarga </td>
     <td>: <?php echo $arr_hubungan[$hubungan]; ?></td>
   </tr> -->
 </table> 
 <p><br>yang&nbsp;  bersangkutan , menyatakan pindah domisili  dari Desa <?php echo ucwords(strtolower($desa2->desa));  ?> ke Desa <?php echo ucwords(strtolower($pindah_desa)); ?>, Kecamatan <?php echo ucwords(strtolower($pindah_kecamatan)); ?>, Kabupaten <?php echo ucwords(strtolower($pindah_kota)); ?>, Provinsi <?php echo ucwords(strtolower($pindah_provinsi)); ?>.</p>
 <p align="center"><br>
   <br>
   <center>
   Data No KK <font size="10px"><?php echo $no_kk; ?></font>
   <center>
</p>
 <table width="100%" border="0.5" cellpadding="3" class="tabel">
<tr><th width="7%" align="center"><strong>No. </strong></th>
<th width="28%" align="center"><strong>NIK </strong></th>
<th width="29%" align="center"><strong>NAMA</strong></th>

<th width="36%" align="center"><strong>SHDK</strong></th>
</tr>
<?php 

	 
$baris = 4; $i=0;
if($record->num_rows() > 0 ) {	
	
	$arr_hubungan = $this->cm->arr_hubungan;
	
	foreach($record->result() as $row) :
		$baris--;
		$i++;
		echo "<tr>
		<td><center>$i</center></td> <td>$row->nik </td><td>$row->nama </td> 
		<td>".$arr_hubungan[$row->hubungan]."</td>

		</tr>";
	endforeach;	
}
for($x=0; $x<$baris; $x++) {
	$i++;
	echo "<tr>
		<td>$i</td> <td> </td><td> </td> 
		<td> </td>

		</tr>";
}
 
?>
</table>

<p>Demikian surat keterangan ini di buat dengan benar ,untuk dapat di gunakan sebagaimana perlunya. </p>	
 

 
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