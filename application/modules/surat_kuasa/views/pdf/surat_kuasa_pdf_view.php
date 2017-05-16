<html>
	<head>
		<title>
			Surat Kuasa
		</title>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style.css">
 <style>
* {
  font-size:10px;
}
p {
  margin:0px;
}

 .style1 {
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
}
 </style>    


</head>

<body>
	<?php 
	$desa2 = $this->cm->data_desa();

	?>

<!-- <div id="wrap" style="width:1024; margin:0px auto" >  -->
<table width="100%" border="0">
  <tr>
    <td width="83%">&nbsp;</td>
    <td width="17%"><b><font size="12">F-1.03</font></b></td>
  </tr>
</table>

<p align="center">
  <b> 
<font size="12">SURAT KUASA PENGISIAN BIODATA PENDUDUK<br>WARGA NEGARA INDONESIA</font></b></p>

<table width="100%">
		
			<tr>
			  <td >&nbsp;</td>
			  <td>&nbsp;</td>
  </tr>
			<tr>
			  <td >Yang bertanda tangan dibawah ini </td>
			  <td>&nbsp;</td>
		  </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
  <tr>
			 
		    <td>Nama Lengkap </td>
		    <td>: <?php echo $ayah_nama; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
			  <td>&nbsp;</td>
		  </tr>
			<tr>
			 
		      <td >Tempat, Tgl lahir </td><td>: <?php echo $ayah_tmp_lahir . ", ".$ayah_tgl_lahir; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
			  <td>&nbsp;</td>
		  </tr>
			<tr>
			  
		      <td >Pekerjaan </td><td>: <?php echo $ayah_pekerjaan; ?> </td></tr>
			<tr>
			  <td >&nbsp;</td>
			  <td>&nbsp;</td>
		  </tr>
			<tr>
			
		      <td >Alamat </td><td>: <?php echo $ayah_alamat. "  Rt $ayah_rt Rw $ayah_rw "; 
			 if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      } ?></td></tr>

    
     
            <tr>
              <td >&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
      <tr>
        <td >Memberi Kuasa Kepada </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
       
        <td width="50%" >Nama Lengkap </td>
  <td width="50%">: <?php echo $ibu_nama; ?> </td></tr>
      <tr>
        <td >&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
      
          <td >Tempat, Tgl lahir </td><td>: <?php echo $ibu_tmp_lahir . ", ".$ibu_tgl_lahir; ?> </td></tr>
      <tr>
        <td >&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
       
          <td >Pekerjaan </td><td>: <?php echo $ibu_pekerjaan; ?> </td></tr>
      <tr>
        <td >&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        
          <td >Alamat </td><td>: <?php echo $ibu_alamat. "  Rt $ayah_rt Rw $ayah_rw "; 
       if($dusun <> "") { 
      
      echo ($desa2->bentuk_lembaga == "Kelurahan")?" Lingkungan ":" Dusun ";
      echo $dusun; 
      } ?></td></tr>
	    <tr>
        <td >&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
<p>
Untuk mengisi biodata sesuai keterangan yang saya berikan seperti keadaan
yang sebenarnya dikarenakan kondisi saya dalam keadaan 
<?php echo $alasan_pemberi ;?>  
*<?php if($alasan_pemberi==Lainnya) 
echo $alasan ;?>.</p>	
 
 
<table width="100%" border="0">
  <tr>
    <td width="43%" align="center">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td width="56%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
  </tr>
  <tr>
    <td align="center">Yang diberi kuasa</td>
    <td>&nbsp;</td>
    <td align="center">Yang Memberi Kuasa</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><?php echo $ibu_nama; ?></td>
    <td>&nbsp;</td>
    <td align="center"><?php echo $ayah_nama; ?></td>
  </tr>
</table>


<!-- </div> end of wrap -->
</body>

</html>