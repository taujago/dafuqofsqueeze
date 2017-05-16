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

	?>

 

<?php 
$this->load->view("kop_surat");
?>
 <div align="center">
  <b> 
  <font size="11"><u>SURAT REKOMENDASI IZIN GANGGUAN</u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
  </div>  

<p align="justify">Yang bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan bahwa : </p>
 
		<table width="100%">
			<tr>
			  <td width="79"  class="label">&nbsp;</td>
			  <td width="98"   class="label">Nama Lengkap</td><td width="821">: <?php echo $nama; ?> </td></tr>
			<tr>
			  <td class="label">&nbsp;</td>
			  <td class="label">Nama Toko/CV/PT</td>
			  <td>: <?php echo $nama_usaha; ?></td></tr>
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
 
 

<p align="justify">Berdasarkan permohonan nama tersebut di atas perihal rekomendasi untuk mendapatkan  SURAT IZIN GANGGUAN yang terletak di lingkungan <?php echo $alamat_usaha; ?> RT  <?php echo $ex_rt; ?>  
  <?php  if($dusun <> "") {  echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lingkungan ":" Dusun "; echo $dusun; }  ?> 
Desa <?php echo ucwords(strtolower($desa2->desa." Kecamatan $desa2->kecamatan $desa2->kota")); ?> </p>
<p>Setelah kami teliti, kami menyetujui dan mendukung sepanjang memenuhi syarat - syarat sbb:</p>
<ol>
  <li>Tidak bertentangan dengan peraturan / perundangan yang berlaku.</li>
  <li>Tidak merugikan pihak lain, tidak memperdagangkan barang-barang terlarang.</li>
  <li>Mentaati ketentuan yang berlaku dan tidak bertentangan dengan usaha yang dilaksanakan termasuk aturan Desa. </li>
  <li>Rekomendasi ini berlaku sebagai pengantar untuk diteruskan ke Kantor Perizinan. </li>
  <li>Rekomendasi ini dengan sendirinya batal apabila melanggar point-point tersebut di atas.</li>
</ol>
<p>Demikian rekomendasi ini dibuat dan diberikan kepada yang bersangkutan agar dapat dipergunakan sebagaimana mestinya. </p>
<p>
  <?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
</p>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="50%" align="left" valign="top">
    <?php if($ttd_camat == 1 ) {  ?>
    <table width="100%" border="0" cellpadding="0">
      <tr>
        <td align="left">MENGETAHUI, </td>
      </tr>
      <tr>
        <td align="left">CAMAT <?php echo $desa2->kecamatan ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="left"><u><?php echo $desa2->nama_camat; ?></u></td>
      </tr>
      <tr>
        <td align="left"><table width="100%" border="0" cellpadding="0">
          <tr>
            <td width="22%" align="left">PANGKAT</td>
            <td width="2%" align="left">:</td>
            <td width="52%" align="left"><?php echo $desa2->pangkat_camat; ?></td>
          </tr>
          <tr>
            <td colspan="3" align="left">NIP. <?php echo $desa2->nip_camat; ?>            </td>
            </tr>
        </table></td>
      </tr>
    </table> <?php } ?>  </td>
    <td width="50%" align="left" valign="top"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td width="9%" align="left">&nbsp;</td>
        <td width="91%" align="left"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
      </tr>
      <?php 
    if($ttd <> "kepala") {  ?>
      <tr>
        <td align="center">a.n. </td>
        <td align="left">LURAH </td>
      </tr>
      <?php } ?>
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left"><?php echo strtoupper($ttd_jabatan) ; ?></td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
	  <tr>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <?php 
    if($ttd ==  "kepala") {  ?>
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <?php } ?>
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
	   <tr>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
	   <tr>
        <td align="left">&nbsp;</td>
        <td align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left"><u><?php echo $ttd_nama; ?></u></td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td align="left"><table width="100%" border="0" cellpadding="0">
         
          <tr>
            <td align="left">NIP. <?php echo  $nip; ?></td>
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
      </tr><tr>
        <td align="center">&nbsp;</td>
      </tr><tr>
        <td align="center">&nbsp;</td>
      </tr><tr>
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
            <td align="center">PANGKAT:<?php echo $desa2->pangkat_camat; ?></td>
            </tr>
          <tr>
            <td align="center">NIP. <?php echo $desa2->nip_camat; ?></td>
            </tr>
        </table></td>
      </tr>
    </table> <?php } ?></td>
    <td width="50%" align="center" valign="top"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td width="9%" align="center">&nbsp;</td>
        <td width="91%" align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
      </tr>
      <?php 
    if($ttd <> "kepala") {  ?>
      <tr>
        <td align="center"></td>
        <td align="center">a.n. KEPALA DESA </td>
      </tr>
      <?php } ?>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center"><?php echo strtoupper($ttd_jabatan) ; ?></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr><tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr><tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr><tr>
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
        <td align="center"><?php if($ttd == "sek") {  ?><table width="100%" border="0" cellpadding="0">
           
            <tr>
              <td align="center"><?php if(empty($nip)) 
                  echo '';
                else
                  echo 'NIP. ', ($nip);?></td>
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