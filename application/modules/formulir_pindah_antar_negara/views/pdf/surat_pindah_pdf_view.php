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

 <div align="right"><h2>F-1.33</h2></div>
 <div align="center">
  <b> 
  <font size="11">SURAT PENGANTAR PINDAH </font><br />
  <font size="11"><u>ANTAR KABUPATEN/KOTA ATAU ANTAR PROVINSI</u> </font><br />
  <font size="10"> Nomor : <?php echo $no_surat ?></font> </b>
</div>  

<?php 
	$arr_hubungan = $this->cm->arr_hubungan;
?>

<br>
<p>Yang bertanda tangan di bawah ini, menerangkan Permohonan Pindah Penduduk WNI dengan data sebagai berikut : </p>
 <table width="100%">
   <tr>
     <td width="2%">1.</td>
     <td  width="32%">NIK</td>
     <td width="2%">:</td>
     <td width="64%"><?php echo $nik; ?></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>2.</td>
     <td>Nama Lengkap </td>
     <td>:</td>
     <td><?php echo ucwords(strtolower($nama)); ?></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>3.</td>
     <td>Nomor Kartu Keluarga </td>
     <td>:</td>
     <td><?php echo $kepala_keluarga_kk; ?></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>4.</td>
     <td>Nama Kepala Keluarga </td>
     <td>:</td>
     <td><?php echo ucwords(strtolower($kepala_keluarga_nama)); ?></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>5.</td>
     <td>Alamat Sekarang </td>
     <td>:</td>
     <td><?php echo ucwords(strtolower($alamat)). "  RT. $rt/ RW. $rw "; 
			 if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun, ";
      echo ucwords(strtolower($dusun)); 
      }  ?></td>
   </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Desa <?php echo ucwords(strtolower($desa2->desa)) ?>, Kecamatan <?php echo ucwords(strtolower($desa2->kecamatan)) ?>,  <?php echo ucwords(strtolower($desa2->kota)) ?>, <?php echo ucwords(strtolower($desa2->provinsi)) ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Kode Pos : <?php echo $desa2->kodepos ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
     <td>6.</td>
     <td>Alamat Tujuan Pindah </td>
     <td>:</td>
     <td><?php echo ucwords(strtolower($alamat_pindah)); ?>, RT. <?php echo $rt_pindah; ?> RW. <?php echo $rw_pindah; ?>, Dusun <?php echo ucwords(strtolower($dusun_pindah)); ?>.</td>
   </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Desa <?php echo ucwords(strtolower($pindah_desa)); ?>, Kecamatan <?php echo ucwords(strtolower($pindah_kecamatan)); ?>, <?php echo ucwords(strtolower($pindah_kota)); ?>, <?php echo ucwords(strtolower($pindah_provinsi)); ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Kode Pos : <?php echo $kode_pos_pindah ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>7.</td>
      <td>Jumlah Keluarga Yang Pindah </td>
      <td>:</td>
      <td><?php echo $jum ?> Orang </td>
    </tr>
 </table> 
 <p>Adapun Permohonan Pindah Penduduk WNI yang bersangkutan sebagaimana terlampir.</p>
  <p>Demikian Surat Pengantar Pindah ini dibuat agar digunakan sebagaimana mestinya.</p>
 
 
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
<br /><br /><br /><br /><br />
<p>Keterangan : </p>
<p>Surat Pengantar ini dibawah oleh Pemohon dan diarsipkan di Kecamatan. </p>
<p><br />
</p>
</body>

</html>