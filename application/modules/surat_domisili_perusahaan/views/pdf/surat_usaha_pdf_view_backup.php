<html>
	<head>
		<title>
			<?php echo   $title; ?>
		</title>

 
  <style>
* {
	font-size:8px;
}
p {
	margin:0px;
}
</style> 		</head>

<body>
	<?php 
	$desa2 = $this->cm->data_desa();
 
$this->load->view("kop_surat");
?>

 

<p align="center"><b> 
<span id="judulsurat">SURAT KETERANGAN USAHA </span><br />
     	<span id="nomor_surat"> No : <?php echo $no_surat ?> </span> </b>
<br />  </p>
<p>Yang bertanda tangan di bawah ini, Kepala <?php echo ucwords(strtolower($desa2->bentuk_lembaga. " ".$desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota))  ?> menerangkan bahwa : </p>
 
		<table width="100%">
			<tr>
			  <td width="98" class="label">&nbsp;</td>
		    <td width="147" class="label">Nama </td><td width="753">: <?php echo $nama; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
			  <td class="label">Umur</td>
			  <td>: <?php echo $umur; ?> Tahun </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">Alamat </td><td>: <?php echo $alamat; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
		    <td class="label">No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
 
 
<p>Nama tersebut di atas benar memiliki usaha <?php echo $jenis_usaha; ?> yang terletak di  <?php echo $alamat_usaha; ?> RT <?php echo $ex_rt; ?><?php  if($dusun <> "") {  echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lingkungan ":" Dusun "; echo $dusun; }  ?> Desa <?php echo ucwords(strtolower($desa2->desa)); ?> </p>
<p>
	Demikianlah surat keterangan ini dibuat dan diberikan kepada yang 
	bersangkutan untuk dipergunakan sebagaimana mestinya.
	</p>


<p><br />
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<br />
<?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="57%">&nbsp;</td>
    <td width="4%" align="left">&nbsp;</td>
    <td width="39%" align="left"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
  </tr>
  <?php 
		if($ttd <> "kepala") {  ?>
  <tr>
    <td>&nbsp;</td>
    <td align="center">a.n. </td>
    <td align="left">LURAH </td>
  </tr>
  <?php   } 	
	  ?>
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left"><?php echo strtoupper($ttd_jabatan) ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left"><u><?php echo $ttd_nama; ?></u></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td align="left">PANGKAT : <?php echo  $pangkat; ?></td>
      </tr>
      <tr>
        <td align="left">NIP. <?php echo  $nip; ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php }  else { ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="57%">&nbsp;</td>
    <td width="4%">&nbsp;</td>
    <td width="39%" align="left"><?php echo $desa2->desa.", ". flipdate($tanggal); ?></td>
  </tr>
  <?php 
		if($ttd <> "kepala") {  ?>
  <tr>
    <td>&nbsp;</td>
    <td align="center">a.n. </td>
    <td align="left">KEPALA DESA </td>
  </tr>
  <?php } ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left"><?php echo strtoupper($ttd_jabatan) ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left"><u><?php echo $ttd_nama; ?></u></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left"><?php if($ttd == "sek") {  ?><table width="100%" border="0" cellpadding="0">
        <tr>
          <td align="left">PANGKAT : <?php echo  $pangkat; ?></td>
        </tr>
        <tr>
          <td align="left">NIP. <?php echo  $nip; ?></td>
        </tr>
    </table>      <?php }  ?></td>
  </tr>
</table>
<?php }  ?>
<br /> <br /><br />

 
</body>

</html>