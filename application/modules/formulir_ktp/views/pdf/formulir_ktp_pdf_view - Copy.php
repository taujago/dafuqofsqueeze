<html>
	<head>
		<title>
			<?php echo   $title; ?>
		</title>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style.css">
	</head>

<body>
	
  <?php 
	$desa2 = $this->cm->data_desa();

	?>
	  <table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>F-1.21</strong></div></td>
  </tr>
</table>

  <div align="center">
  <b> 
  <font size="12"><u>FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP) WARGA NEGARA INDONESIA</u> </font></div>
</b> <br>
	<font size="10"><table width="100%">
			<tr>
			  <td class="tebal" width="30%" >PEMERINTAH PROPINSI </td>
		      <td width="6%">: <?php echo $id_provinsi; ?></td>
		      <td width="74%"> <?php echo $provinsi; ?> </td></tr>
			<tr>
			  <td >PEMERINTAH KABUPATEN/KOTA</td>
		      <td>: <?php echo $kode_kabupaten; ?></td>
		      <td> <?php echo $kota; ?> </td></tr>
			<tr>
			  <td >KECAMATAN</td>
		      <td>: <?php echo $kode_kecamatan; ?></td>
	          <td> <?php echo $kecamatan; ?> </td></tr>
			<tr>
			  <td>KELURAHAN/DESA</td>
			  <td>: <?php echo $desa2->kode_surat ?></td>
			  <td><?php echo $desa2->desa ?> </td>
	  </tr>
			
			
</table>
	
	<table width="100%">
			
			<tr>
			  <td colspan="2" >&nbsp;</td>
			  <td>&nbsp;</td>
	  </tr>
			<tr>
			  <td width="19%" colspan="2" >PERMOHONAN KTP </td>
			  <td width="16%"> : <?php echo $ktp; ?></td>
	  </tr>
			<tr>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td>&nbsp;</td>
	  </tr>
			<tr>
			  <td width="3%" >1.</td>
		      <td width="16%" >Nama </td><td width="74%">: <?php echo $nama; ?> </td></tr>
			<tr>
			  <td >2.</td>
		      <td >No. KK </td>
		      <td>: <?php echo $no_kk; ?> </td></tr>
			<tr>
			  <td >3.</td>
		      <td >NIK</td>
		      <td>: <?php echo $nik; ?> </td></tr>
			<tr>
			  <td>4.</td>
			  <td>Alamat</td>
			  <td>: <?php echo $alamat;
			?> </td>
    </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td> <?php echo " DUSUN ";
			echo $dusun;
			?></td>
    </tr>
			<tr>
			  <td>&nbsp;</td>
		      <td>&nbsp;</td>
		      <td> <?php echo " RT $rt RW $rw ";
			?></td>
			</tr>
			
			<br>
			<br>
			
</table>
	</font>
	<table width="100%" height="364" border="1">
      <tr>
        <td width="16%"><div align="center"><font size="10">PAS PHOTO (2X3)</font> </div></td>
        <td width="16%"><div align="center"><font size="10">Cap Jempol</font> </div></td>
        <td width="25%"><div align="center"><font size="10">Specimen Tanda Tangan </font></div></td>
        <td width="43%"><div align="center"><font size="10">Kode Pos : <?php echo $desa2->kodepos ?></font></div></td>
      </tr>
      <tr>
        <td height="195">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><font size="10"><div align="center"><?php echo $desa2->desa.", ". flipdate($tanggal); ?>
          <p><div align="center">Pemohon,</div></p></font>
         
          <p><font size="10"><div align="center"><?php echo $nama; ?></div></font></p>
        </div>          </td>
      </tr>
    </table>
	<table width="100%" border="0">
  <tr>
    <td>
     <div align="center"><font size="10">Mengetahui,</font>
      </div></td>
  </tr>
</table>
    <?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
    <table width="100%" border="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
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
        <td colspan="2" align="left">NIP. <?php echo  $nip; ?></td>
      </tr>
    </table></td>
  </tr>
    </table>
	

    <?php }  else { ?>
    <table width="100%" border="0" cellpadding="0">
  <?php 
		if($ttd <> "kepala") {  ?>
  <tr>
    <td width="48%"><div align="right"></div></td>
    <td width="7%" align="center">a.n. </td>
    <td width="45%" align="left"><font size="10">KEPALA DESA </font></td>
  </tr>
  <?php } ?>
  <tr>
    <td>
    <div align="right"></div></td>
    <td><div align="center"></div></td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><font size="10">Camat </font></div></td>
    <td>&nbsp;</td>
    <td align="left"><font size="10"><?php echo strtoupper($ttd_jabatan) ?></font></td>
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
    <td align="center"><font size="10"><?php echo $desa2->nama_camat; ?></font></td>
    <td>&nbsp;</td>
    <td align="left"><u><font size="10"><?php echo $ttd_nama; ?></font></u></td>
  </tr>
  <tr>
    <td align="center"><font size="10">NIP. <?php echo $desa2->nip_camat; ?></font></td>
    <td>&nbsp;</td>
    <td align="left"><?php if($ttd == "sek") {  ?></td>
  </tr>
  <tr>
</td>
    <td>&nbsp;</td>
    <td align="left"><table width="100%" border="0" cellpadding="0">
        
        <tr>
          <td align="left"><font size="10">NIP. <?php echo  $nip; ?></font></td>
        </tr>
      </table>
      <?php }  ?></td>
  </tr>
    </table>
</font>
<?php }  ?>

<!-- </div> end of wrap -->
</body>

</html>