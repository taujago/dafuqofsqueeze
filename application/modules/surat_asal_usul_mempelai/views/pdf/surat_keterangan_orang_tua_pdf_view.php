<html>
	<head>
		<title>
			Surat Keterangan Orang Tua
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
  <font size="11"><u>SURAT KETERANGAN TENTANG ORANG TUA </u> </font><br />
  <font size="10"> No : <?php echo $no_surat_orang_tua ?></font> </b>
</div>  

<p align="justify">Kami yang  bertanda tangan di bawah ini,   <?php echo ($desa2->bentuk_lembaga=="Kelurahan")?" Lurah  ":" Kepala Desa  "; ?><?php echo ucwords(strtolower($desa2->desa." Kecamatan ".$desa2->kecamatan ." ".$desa2->kota));  ?> menerangkan denga sesungguhnya bahwa : </p>
 
		<table width="100%">
			<tr>
			  <td colspan="3">I. <u>ORANG TUA LAKI-LAKI</u> </td>
		  </tr>
			<tr>
			  <td width="3%">1.</td>
		    <td width="35%" >Nama </td>
		    <td width="62%">: <?php echo $ayah_suami_nama; ?> </td></tr>
			<tr>
			  <td >2.</td>
		      <td >Tempat, Tgl lahir </td><td>: <?php echo $ayah_suami_tempat_lahir . ", ".$ayah_suami_tanggal_lahir; ?> </td></tr>
			<tr>
			  <td >3.</td>
		      <td >Warga Negara </td><td>:  <?php echo $ayah_suami_warga_negara; ?></td></tr>
			<tr>
			  <td >4.</td>
		      <td >Agama </td><td>: <?php echo $ayah_suami_agama; ?> </td></tr>
			<tr>
			  <td >5</td>
		      <td >Pekerjaan </td><td>: <?php echo $ayah_suami_pekerjaan; ?> </td></tr>
			<tr>
			  <td >6.</td>
		      <td >Alamat </td><td>: <?php echo $ayah_suami_desa; ?> RT. <?php echo $ayah_suami_rt; ?> RW. <?php echo $ayah_suami_rw; ?></td></tr>
<br>
      <tr>
        <td colspan="3">II. <u>ORANG TUA PEREMPUAN</u> </td>
      </tr>
      <tr>
        <td width="3%">1.</td>
        <td width="35%" >Nama </td>
        <td width="62%">: <?php echo $ibu_suami_nama; ?> </td></tr>
      <tr>
        <td >2.</td>
          <td >Tempat, Tgl lahir </td><td>: <?php echo $ibu_suami_tempat_lahir . ", ".$ibu_suami_tanggal_lahir; ?> </td></tr>
      <tr>
        <td >3.</td>
          <td >Warga Negara </td><td>:  <?php echo $ibu_suami_warga_negara; ?></td></tr>
      <tr>
        <td >4.</td>
          <td >Agama </td><td>: <?php echo $ibu_suami_agama; ?> </td></tr>
      <tr>
        <td >5</td>
          <td >Pekerjaan </td><td>: <?php echo $ibu_suami_pekerjaan; ?> </td></tr>
      <tr>
        <td >6.</td>
          <td >Alamat </td><td>: <?php echo $ibu_suami_desa; ?> RT. <?php echo $ibu_suami_rt; ?> RW. <?php echo $ibu_suami_rw; ?></td></tr>
    </table>
 
	

<p>Yang bersangkutan tersebut diatas adalah benar-benar ayah dan ibu kandung dari :
</p>
 
		<table width="100%">
			<tr>
		    <td width="38%">Nama </td><td width="62%">: <?php echo $suami_nama; ?> </td></tr>
			<tr>
		    <td>Tempat, Tgl lahir </td><td>: <?php echo $suami_tempat_lahir . ", ".flipdate($suami_tanggal_lahir); ?> </td></tr>
			<tr>
			  <td>Warga Negara </td>
			  <td>: <?php echo $suami_warga_negara; ?></td>
		  </tr>
			<tr>
		    <td>Jenis kelamin </td><td>: <?php echo $this->cm->jk($suami_jk); ?></td></tr>
			<tr>
		    <td>Agama </td><td>: <?php echo $suami_agama; ?> </td></tr>
			<tr>
			  <td>Pekerjaan</td>
			  <td>: <?php echo $suami_pekerjaan; ?></td>
		  </tr>
			<tr>
		    <td>Alamat  </td><td>: <?php echo $suami_desa; ?> RT. <?php echo $suami_rt; ?> RW. <?php echo $suami_rw; ?> </td></tr>
		</table>
 
<p>
Demikian surat keterangan ini dibuat supaya dapat dipergunakan sebagai mana mestinya
</p>	
 
 

<table width="100%" border=0 >

<tr>
  <td align="center" valign="top" aligh="center">&nbsp;</td>
  <td align="center" valign="top" aligh="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal_surat)); ?></td>
</tr>
</table>
<?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="57%">&nbsp;</td>
    <td width="4%" align="left">&nbsp;</td>
    <td width="39%" align="left">MENGETAHUI, </td>
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
    <td width="46%">&nbsp;</td>
    <td width="6%">&nbsp;</td>
    <td width="48%" align="left">&nbsp;</td>
  </tr>
  <?php 
		if($ttd <> "kepala") {  ?>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center"> a.n. KEPALA DESA </td>
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
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
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
          <td align="center"><?php if(empty($nip)) 
                  echo '';
                else
                  echo 'NIP. ', ($nip);?></td>
        </tr>
    </table>      <?php }  ?></td>
  </tr>
</table>
<?php }  ?>
<br /><br /><br />
<br /> <br /><br />

<!-- </div> end of wrap -->
</body>

</html>