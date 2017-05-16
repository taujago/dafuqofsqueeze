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

<!-- <div id="wrap" style="width:1024; margin:0px auto" >  -->
 <?php 
$this->load->view("kop_surat");
?>
 <div align="center">
  <b> 
  <font size="11"><u>REKOMENDASI</u></font><br />
  <font size="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No : <?php echo $no_surat ?></font> </b>
</div>  
<p align="justify">Yang bertanda tangan di bawah ini:</p>

<table width="100%">
			<tr>
			  <td width="10%" >&nbsp;</td>
		    <td width="20%" >Nama </td><td width="70%">: <?php echo strtoupper($ttd_nama); ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >NIP</td>
		    <td>: <?php echo $nip; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Jabatan</td>
		    <td>: <?php echo $ttd_jabatan; ?></td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Alamat </td>
		    <td>: <?php echo strtoupper($desa2->alamat); ?>  </td></tr>
</table>
  
 <p>Dengan ini merekomendasikan pencairan <?php echo $jenis; ?> sebesar  Rp <?php $uang; $format_angka = number_format($uang, "0", ",", "."); echo $format_angka; ?> dengan rincian sebagai berikut :</p>
 <p><?php echo $rincian ;?></p>

 <p>Pada <?php echo $bank ;?> melalui rekening Desa <?php echo ucfirst(strtolower($desa2->desa)); ?> Kecamatan <?php echo ucfirst(strtolower($desa2->kecamatan)); ?> melalui bendahara Desa <?php echo ucfirst(strtolower($desa2->desa)); ?> atas nama </p>
<table width="100%">
			<tr>
			  <td width="10%" >&nbsp;</td>
		    <td width="20%" >Nama </td><td width="70%">: <?php echo strtoupper($bendahara); ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Jabatan</td>
		    <td>: BENDAHARA DESA <?php echo strtoupper($desa2->desa); ?> </td></tr>
			
			<tr>
			  <td >&nbsp;</td>
		    <td >Alamat </td>
		    <td>: <?php echo strtoupper($desa2->alamat); ?></td></tr>
</table>
<p>Demikian Rekomendasi ini dibuat dengan sebenarnya untuk urusan selanjutnya.</p>
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
		if($ttd <> "camat") {  ?>
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
<table width="98%" border="0" cellpadding="0">
  <tr>
    <td width="52%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="46%" align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
  </tr>
  <?php 
		if($ttd <> "camat") {  ?>
  <tr>
    <td>&nbsp;</td>
    <td align="center"></td>
    <td align="center">a.n&nbsp;&nbsp;&nbsp;CAMAT </td>
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
          <td align="center">
          <?php if(empty($nip)) 
                  echo '';
                else
                  echo 'NIP. ', ($nip);?>
          </td>
        </tr>
      </table>
      <?php }  ?></td>
  </tr>
</table>
<?php }  ?>
<br /> <br /><br />


</body>

</html>