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
  <font size="11"><u>SURAT KETERANGAN</u></font><br />
  <font size="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No : <?php echo $no_surat ?></font> </b>
</div>  
<p align="justify">1. Yang bertanda tangan di bawah ini:</p>

<table width="100%">
			<tr>
			  <td width="2%" >&nbsp;</td>
		    <td width="28%" >Nama </td><td width="70%">: <?php echo ucfirst(strtolower($ttd_nama)); ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >NIP</td>
		    <td>: <?php echo $nip; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
		    <td >Jabatan</td>
		    <td>: <?php echo ucfirst(strtolower($ttd_jabatan)); ?></td></tr>
			<tr>
			  <td >&nbsp;</td>
			  <td >Alamat</td>
			  <td>: <?php echo ucfirst(strtolower($desa2->alamat)); ?></td>
  </tr>
			<tr>
			  <td colspan="3" >&nbsp;</td>
  </tr>
			<tr>
			  <td colspan="3" >Dengan ini menerangkan bahwa </td>
  </tr>
			<tr>
			  <td colspan="3" >&nbsp;</td>
  </tr>
			<tr>
			  <td >&nbsp;</td>
			  <td >Nama</td>
			  <td>: <?php echo ucfirst(strtolower($nama)); ?></td>
  </tr>
			<tr>
			  <td >&nbsp;</td>
			  <td >Umur</td>
			  <td>: <?php echo $umur; ?> Tahun </td>
  </tr>
			<tr>
			  <td >&nbsp;</td>
			  <td >Kebangsaan</td>
			  <td>: <?php echo $warga_negara; ?></td>
  </tr>
			<tr>
			  <td >&nbsp;</td>
			  <td >Agama</td>
			  <td>: <?php echo ucfirst(strtolower($agama)); ?></td>
  </tr>
			<tr>
			  <td >&nbsp;</td>
			  <td >Pekerjaan</td>
			  <td>: <?php echo ucfirst(strtolower($pekerjaan)); ?></td>
  </tr>
			<tr>
			  <td >&nbsp;</td>
			  <td >Alamat</td>
			  <td>: <?php echo ucfirst(strtolower($alamat)); ?></td>
  </tr>
			<tr>
			  <td >&nbsp;</td>
			  <td colspan="2" >&nbsp;</td>
  </tr>
			<tr>
			  <td >2.</td>
			  <td colspan="2" >Bahwa yang bersangkutan bermaksud untuk  mendapatkan Bahan Bakar Minyak (BBM), berupa <?php echo $data;?></td>
  </tr>
			<tr>
			  <td >3.</td>
			  <td colspan="2" >Bahwa  BBM <?php echo $data;?>  sebagaimana dimaksud pada point (2) di atas digunakan untuk kebutuhan <?php echo $kebutuhan;?></td>
  </tr>
			<tr>
			  <td >4.</td>
			  <td colspan="2" >Untuk  maksud seperti tersebut pada point (3) di atas, kebutuhan per minggu&nbsp; untuk Bahan Bakar <?php echo $data;?> (BBM) sebanyak <?php echo $banyak;?>  liter.</td>
  </tr>
			<tr>
			  <td >5.</td>
		    <td colspan="2" >Demikian  surat keterangan ini dibuat dan diberikan kepada yang bersangkutan untuk  dipergunakan seperlunya.</td>
		    </tr>
</table>
  
 <p>&nbsp;</p>
 <p>&nbsp;</p>

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
    <td align="center"><?php echo $pangkat; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><?php echo $nip; ?></td>
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
                  echo 'NIP. ', ($nip);?>          </td>
        </tr>
      </table>
      <?php }  ?></td>
  </tr>
</table>
<?php }  ?>
<br /> <br /><br />


</body>

</html>