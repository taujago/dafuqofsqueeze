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

$this->load->view("kop_surat"); ?>
 
 <div align="center">
  <b> 
  <font size="10"><u>SURAT KETERANGAN PENGANTAR SKCK</u> </font><br />
  <font size="9"> No : <?php echo $no_surat ?></font> </b>
</div>
<p>1. Yang bertanda tangan dibawah ini :</p>
<table width="100%" border="0">
  <tr>
    <td width="3%">a.</td>
    <td width="32%"> Nama </td>
    <td width="65%">: <?php echo $ttd_nama; ?></td>
  </tr>
  <tr>
    <td>b.</td>
    <td>Jabatan</td>
    <td>: <?php echo strtoupper($ttd_jabatan) ; ?></td>
  </tr>
</table>
<p>Dengan ini menerangkan bahwa</p>
 
		<table width="100%">
			<tr>
			  <td width="3%"  >a.</td>
			  <td width="32%"  >Nama Lengkap </td><td width="887">: <?php echo $nama; ?> </td></tr>
			<tr>
			  <td  >b.</td>
		    <td  >TTL </td><td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?></td>
			</tr>
            <tr>
              <td  >c.</td>
              <td  >Jenis Kelamin  </td><td>: <?php echo $this->cm->jk($jk); ?> </td>
            </tr>
			
			<tr>
			  <td  >d.</td>
			  <td  >NIK</td>
			  <td>: <?php echo $nik; ?></td>
		  </tr>
			
			<tr>
			  <td  >e.</td>
		    <td  >Agama </td><td>: <?php echo $agama; ?> </td></tr>
			
			<tr>
			  <td  >f.</td>
		      <td  >Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr>
			
			
			<tr>
			  <td  >g.</td>
		    <td  >Alamat </td><td>: <?php echo $alamat. "  Rt $rt Rw $rw "; 
			echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lingkungan ":" Dusun "; echo " $dusun "; ?></td></tr>
			<tr>
			  <td  >&nbsp;</td>
			  <td  >&nbsp;</td>
			  <td>&nbsp;</td>
		  </tr>
		    <tr>
		      <td  >-</td>
		      <td  >Keterangan</td>
		      <td><div align="justify">: Bahwa orang tersebut adalah benar &ndash; benar warga kami,  <br>
		        dan sepengetahuan kami berkelakuan baik.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
	      </tr>
		    <tr>
		      <td  >-</td>
		      <td  >Maksud dan Tujuan </td>
		      <td><div align="justify">: Meminta Surat Keterangan Catatan Kepolisian  Sektor <br>
		        <?php echo $desa2->kecamatan;?> untuk keperluan <strong> <?php echo $keperluan; ?></strong></div></td>
	      </tr>
	      <tr>
			  <td  >&nbsp;</td>
			  <td  >&nbsp;</td>
			  <td>&nbsp;</td>
		  </tr>
</table>
 <p align="justify">2. Berhubung dengan maksud yang bersangkutan, diminta semua pihak dapat memberikan bantuan <br>&nbsp;&nbsp;&nbsp;
 serta fasilitas seperlunya.</p>
  <p align="justify">3. Demikian Surat Keterangan ini dibuat untuk dipergunakan seperlunya.</p>
 


 
 <P align="justify">&nbsp;</p>
<!--<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="54%" align="left" valign="top">Mengetahuui Pejabat Kecamatan</td>
    <td width="46%" align="left"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
  </tr>
  <tr>
    <td align="left" valign="top"><?php echo $pejabat_kecamatan_jabatan; ?></td>
    <td align="left"><?php 
		if($ttd <> "kepala") { 
	echo "a.n. LURAH <BR />";	echo strtoupper($ttd_jabatan) ;
	} 	
	else {
		echo strtoupper($ttd_jabatan) ;
		echo "<br /> <br />";
	}
	?></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><u><?php echo $pejabat_kecamatan_nama; ?></u></td>
    <td align="left"><u><?php echo $ttd_nama; ?></u></td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td width="21%" align="left">PANGKAT</td>
        <td width="1%" align="left">:</td>
        <td width="78%" align="left"> <?php echo $pejabat_kecamatan_pangkat; ?> </td>
      </tr>
      <tr>
        <td align="left">NIP</td>
        <td align="left">:</td>
        <td align="left"> <?php echo $pejabat_kecamatan_nip; ?> </td>
      </tr>
    </table></td>
    <td align="left"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td width="25%" align="left">PANGKAT</td>
        
        <td width="75%" align="left">: <?php echo  $pangkat; ?></td>
      </tr>
      <tr>
        <td align="left">NIP  </td>
       
        <td align="left">: <?php echo  $nip; ?></td>
      </tr>
    </table></td>
  </tr>
</table>-->
<table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></div></td>
  </tr>
</table>

 
 <?php 
  $desa2 = $this->cm->data_desa();

  ?>
  <?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
</p>
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
<table width="95%" border="0" cellpadding="0">
  <tr>
    <td width="51%">&nbsp;</td>
    <td width="4%">&nbsp;</td>
    <td width="45%" align="center">&nbsp;</td>
  </tr>
 
  <tr>
    <td><div align="center"></div></td>
    <td align="center">&nbsp;</td> 
	<?php 
    if($ttd <> "kepala") {  ?>
    <td align="center">a.n&nbsp;&nbsp;&nbsp;KEPALA DESA </td>
  </tr>
  <?php } ?>
  <tr>
    <td><div align="center">PEMOHON</div></td>
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
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><strong><?php echo $nama; ?></strong></td>
    <td>&nbsp;</td>
    <td align="center"><strong><?php echo $ttd_nama; ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><?php if($ttd == "sek") {  ?><table width="100%" border="0" cellpadding="0">
        
        <tr>
          <td align="center"><strong>NIP. <?php echo  $nip; ?></strong></td>
        </tr>
      </table>
      <?php }  ?></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">CAMAT <?php echo $desa2->kecamatan; ?></div></td>
    <td><div align="center"><?php echo $rayon; ?></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"><?php echo $wilayah; ?></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td align="center"><?php echo $desa2->nama_camat; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><?php echo $desa2->pangkat_camat; ?></td>
    <td><div align="center"><?php echo $nama_rayon; ?></div></td>
  </tr>
  <tr>
    <td><div align="center">NIP. <?php echo $desa2->nip_camat; ?></div></td>
    <td>&nbsp;</td>
  </tr>
</table>

<?php }  ?>
<br /> 
<br /><br />
</body>

</html>
 