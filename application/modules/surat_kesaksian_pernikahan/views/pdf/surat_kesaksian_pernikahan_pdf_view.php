<html>
	<head>
		<title>
			<?php echo   $title; ?>
		</title>

 

		</head>

<body>
	<?php 
$desa2 = $this->cm->data_desa();

	?>
  <style>
* {
  font-size:9px;
}
.judul {
  font-size:12px;
  font-weight:bold;
   text-align:center;
}

#gambar {
  width:60px;
  position:fixed;
  top:10px;
  float:left;
}

#kop {
  text-align:center;
}
</style>

<?php 
  $desa2 = $this->cm->data_desa();
  ?>
<table width="100%" border="0" cellpadding="3">
  
  <tr>
    <td width="20%" align="center"><img src="<?php echo base_url()."assets/images/kop.png" ?>" width="55" height="60" align="right" /></td>
    <td width="64%" align="center"><span class="judul">PEMERINTAH <?php echo strtoupper($desa2->kota); ?>
   <br />
      KECAMATAN <?php echo strtoupper($desa2->kecamatan); ?><br />
      <?php echo ($desa2->kop_surat=="1")?"KANTOR ":""; 
      echo strtoupper($desa2->bentuk_lembaga. " ".$desa2->desa); ?></span><br />
      <?php echo $desa2->alamat . " Kode Pos " . $desa2->kodepos ?> </td>
    <td width="23%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><hr width="93%"/></td>
  </tr>
</table>

  <div align="center">
  <b> 
  <font size="11"><u>SURAT KETERANGAN KESAKSIAN PERNIKAHAN </u> </font><br />
  <font size="10"> No : <?php echo $no_surat ?></font> </b>
</div>  
<p>Yang bertanda tangan di bawah ini
<?php echo ($desa2->bentuk_lembaga == "Kelurahan")?"Lurah":"Kepala Desa"; ?>
   <?php echo  ucwords(strtolower(" ".$desa2->desa." kecamatan ". $desa2->kecamatan ."  ". $desa2->kota)) ; ?> menerangkan bahwa : </p>

<table width="100%" border="0">
  <tr>
    <td width="29%">Nama Lengkap </td>
    <td width="2%">:</td>
    <td width="65%"><strong><?php echo $suami_nama; ?></strong></td>
  </tr>
  <tr>
    <td>NIK</td>
    <td>:</td>
    <td><?php echo $suami_nik; ?></td>
  </tr>
  <tr>
    <td>Tempat, Tanggal Lahir </td>
    <td>:</td>
    <td><?php echo $suami_tempat_lahir; ?>, <?php echo flipdate($suami_tanggal_lahir); ?></td>
  </tr>
 
 
  <tr>
    <td>Pekerjaan</td>
    <td>:</td>
    <td><?php echo $suami_pekerjaan; ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $suami_desa; ?> RT. <?php echo $suami_rt; ?> RW. <?php echo $suami_rw; ?></td>
  </tr>
</table>
<p>
Adalah suami isri yang telah melangsungkan pernikahannya menurut Agama Islam pada tanggal <?php echo ucwords(strtolower(tgl_indo(flipdate($tgl_pernikahan)))); ?> dengan seorang perempuan .</p>
<table width="100%" border="0">
  <tr>
    <td width="29%">Nama Lengkap </td>
    <td width="2%">:</td>
    <td width="65%"><strong><?php echo $istri_nama; ?></strong></td>
  </tr>
  <tr>
    <td>NIK</td>
    <td>:</td>
    <td><?php echo $istri_nik; ?></td>
  </tr>
  <tr>
    <td>Tempat, Tanggal Lahir </td>
    <td>:</td>
    <td><?php echo $istri_tempat_lahir; ?>, <?php echo flipdate($istri_tanggal_lahir); ?></td>
  </tr>
  <tr>
    <td>Pekerjaan</td>
    <td>:</td>
    <td><?php echo $istri_pekerjaan; ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $istri_desa; ?> RT. <?php echo $istri_rt; ?> RW. <?php echo $istri_rw; ?></td>
  </tr>
</table>
<p>dan telah dikaruniai anak kandng diantaranya yang beridentitas sebagai berikut
</p>
<table width="100%" border="0">
  <tr>
    <td width="29%">Nama Lengkap </td>
    <td width="2%">:</td>
    <td width="65%"><strong><?php echo $anak_nama; ?></strong></td>
  </tr>
  <tr>
    <td>NIK</td>
    <td>:</td>
    <td><?php echo $anak_nik; ?></td>
  </tr>
  <tr>
    <td>Tempat, Tanggal Lahir </td>
    <td>:</td>
    <td><?php echo $anak_tempat_lahir; ?>, <?php echo flipdate($anak_tanggal_lahir); ?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><?php echo $this->cm->jk($anak_jk); ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $anak_desa; ?> RT. <?php echo $anak_rt; ?> RW. <?php echo $anak_rw; ?></td>
  </tr>
  <tr>
    <td>Anak Ke</td>
    <td>:</td>
    <td><?php echo $anak_ke; ?></td>
  </tr>
</table>

<p>Saksi-saksi yang menyatakan :</p>
<table width="100%" border="0">
  <tr>
    <td width="2%">1.</td>
    <td width="27%">Nama Lengkap </td>
    <td width="3%">:</td>
    <td width="68%"><strong><?php echo $saksi_nama; ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>NIK</td>
    <td>:</td>
    <td><?php echo $saksi_nik; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Tempat, Tanggal Lahir </td>
    <td>:</td>
    <td><?php echo $saksi_tempat_lahir; ?>, <?php echo flipdate($saksi_tanggal_lahir); ?></td>
  </tr>
 
 
  <tr>
    <td>&nbsp;</td>
    <td>Pekerjaan</td>
    <td>:</td>
    <td><?php echo $saksi_pekerjaan; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $saksi_alamat; ?></td>
  </tr>
   <tr>
     <td width="2%">2.</td>
    <td width="27%">Nama Lengkap </td>
    <td width="3%">:</td>
    <td width="68%"><strong><?php echo $saksi2_nama; ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>NIK</td>
    <td>:</td>
    <td><?php echo $saksi2_nik; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Tempat, Tanggal Lahir </td>
    <td>:</td>
    <td><?php echo $saksi2_tempat_lahir; ?>, <?php echo flipdate($saksi2_tanggal_lahir); ?></td>
  </tr>
 
 
  <tr>
    <td>&nbsp;</td>
    <td>Pekerjaan</td>
    <td>:</td>
    <td><?php echo $saksi2_pekerjaan; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $saksi2_alamat; ?></td>
  </tr>
</table>
<p>Demikianlah surat keterangan kesaksian pernikahan ini dibuat dan apabila pernyataan ini palsu kami bersedia dituntut sesuai dengan peraturan perundangan yang berlaku .</p>
<table width="100%" border="0">
  <tr>
    <td width="2%">1.</td>
    <td width="12%"><?php echo $saksi_nama; ?></td>
    <td width="21%">(...................................)</td>
    <td width="65%">&nbsp;</td>
  </tr>
  <tr>
    <td>2.</td>
    <td><?php echo $saksi2_nama; ?></td>
    <td>&nbsp;</td>
    <td>(...................................)</td>
  </tr>
</table>
<br />
<?php 
	$arr_hubungan = $this->cm->arr_hubungan;
?>

<?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="50%">&nbsp;</td>
    <td width="3%" align="left">&nbsp;</td>
    <td width="47%" align="left"><?php echo $desa2->desa.", ". flipdate($tanggal_surat); ?></td>
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
        <td align="left">NIP. <?php echo  $nip; ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php }  else { ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="44%">&nbsp;</td>
    <td width="6%">&nbsp;</td>
    <td width="50%" align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal_surat)); ?></td>
  </tr>
  <?php 
		if($ttd <> "kepala") {  ?>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center">a.n. KEPALA DESA </td>
  </tr>
  <?php } ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><?php echo strtoupper($ttd_jabatan) ?></td>
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
    <td align="center"><u><?php echo $ttd_nama; ?></u></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><?php if($ttd == "sek") {  ?><table width="100%" border="0" cellpadding="0">
        
        <tr>
          <td align="center">NIP. <?php echo  $nip; ?></td>
        </tr>
    </table>      <?php }  ?></td>
  </tr>
</table>
<?php }  ?>
</body>

</html>