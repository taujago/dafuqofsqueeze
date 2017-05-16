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
	font-size: 12px;
	font-weight: bold;
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
    <td width="17%"><b><font size="12">F-1.02</font></b></td>
  </tr>
</table>

<p align="center" class="style1">FORMULIR KELENGKAPAN PENCATATAN BIODATA PENDUDUK WNI</p>

<table width="100%">
		
			<tr>
			  <td width="2%" >&nbsp;</td>
			  <td width="3%" >&nbsp;</td>
			  <td width="40%" >&nbsp;</td>
			  <td width="1%" >&nbsp;</td>
			  <td width="63%" >&nbsp;</td>
  </tr>
			<tr>
			  <td >1. </td>
			  <td >&nbsp;</td>
			  <td >Nama Lengkap </td>
			  <td >:</td>
			  <td > <?php echo $nama; ?></td>
		  </tr>
			<tr>
			  <td >2</td>
			  <td >&nbsp;</td>
			  <td colspan="3" ><strong>Nama Gelar Akademis</strong></td>
  </tr>
			<tr>
			  <td >&nbsp;</td>
			  <td >a.</td>
			  <td >Dicantumkan di depan nama</td>
			  <td >:</td>
			  <td > <?php echo $depan_akademis; ?></td>
		  </tr>
			<tr>
			  <td >&nbsp;</td>
			  <td >b.</td>
			  <td >Dicantumkan di belakang nama</td>
			  <td >:</td>
			  
		      <td > <?php echo $belakang_akademis; ?></td>
			</tr>
			<tr>
			  <td >3</td>
			  <td >&nbsp;</td>
			  <td ><strong>Nama Gelar Kebangsawanan</strong></td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
		  </tr>
			<tr>
			  <td >&nbsp;</td>
			  <td >a.</td>
			  <td >Dicantumkan di depan nama</td>
			  <td >:</td>
			
		      <td > <?php echo $depan_bangsawan; ?></td>
			</tr>

    
     
            <tr>
              <td >&nbsp;</td>
              <td >b.</td>
              <td >Dicantumkan di belakang nama</td>
              <td >:</td>
              <td > <?php echo $belakang_bangsawan; ?></td>
            </tr>
      <tr>
        <td >4.</td>
        <td >&nbsp;</td>
        <td ><strong>Nama Gelar Keagamaan</strong></td>
        <td >:</td>
        <td ><strong> <?php echo $gelar_agama; ?></strong></td>
      </tr>
      <tr>
        <td >5.</td>
        <td >&nbsp;</td>
        <td ><strong>Pencantuman Gelar dalam Dokumen  Kependudukan (KK dan KTP)</strong></td>
        <td >:</td>
        <td ><?php 
        if($tidak_cantum==0) 
                                    echo ' ';
        elseif($tidak_cantum==1) 
                                    echo ' Tidak Dicantumkan';
                                 else
                                   echo ' Dicantumkan';?></td>
      </tr>
      <tr>
        <td width="2%" >6.</td>
        <td width="3%" >&nbsp;</td>
        <td width="40%" ><strong>Bukti Kepemilikan Gelar Akademis</strong></td>
        <td width="1%" >&nbsp;</td>
       
        <td width="63%" >&nbsp;</td>
  </tr>
      <tr>
        <td >&nbsp;</td>
        <td ><strong>a.</strong></td>
        <td ><strong>Gelar Akademis Setingkat Guru Besar</strong></td>
        <td >:</td>
        <td > <strong><?php echo $nama_gelar_s4; ?></strong></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >a. Nama Perguruan Tinggi</td>
        <td >:</td>
      
          <td > <?php echo $nama_kampus_s4; ?></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >b. Nomor dan Tanggal SK</td>
        <td >:</td>
        <td > <?php echo $nomor_kampus_s4; ?>  
        <?php if($tgl_kampus_s4==0000) 
                                    echo '';
                                 else
                                   echo 'Tanggal ', flipdate($tgl_kampus_s4);?>

        </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >c. Nama Pejabat yang mengesahkan</td>
        <td >:</td>
       
          <td > <?php echo $pejabat_kampus_s4; ?></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td ><strong>b.</strong></td>
        <td ><strong>Gelar Akademis Setingkat S3</strong></td>
        <td >:</td>
        <td > <strong><?php echo $nama_gelar_s3; ?></strong></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >a. Nama Perguruan Tinggi</td>
        <td >:</td>
      
          <td > <?php echo $nama_kampus_s3; ?></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >b. Nomor dan Tanggal Ijazah</td>
        <td >:</td>
        <td > <?php echo $nomor_kampus_s3; ?>  
        <?php if($tgl_kampus_s3==0000) 
                                    echo '';
                                 else
                                   echo 'Tanggal ', flipdate($tgl_kampus_s3);?>

        </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >c. Nama Rektor yang mengesahkan</td>
        <td >:</td>
       
          <td > <?php echo $pejabat_kampus_s3; ?></td>
      </tr>



      <tr>
        <td >&nbsp;</td>
        <td ><strong>c.</strong></td>
        <td ><strong>Gelar Akademis Setingkat S2</strong></td>
        <td >:</td>
        <td > <strong><?php echo $nama_gelar_s2; ?></strong></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >a. Nama Perguruan Tinggi</td>
        <td >:</td>
      
          <td > <?php echo $nama_kampus_s2; ?></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >b. Nomor dan Tanggal Ijazah</td>
        <td >:</td>
        <td > <?php echo $nomor_kampus_s2; ?>  
        <?php if($tgl_kampus_s2==0000) 
                                    echo '';
                                 else
                                   echo 'Tanggal ', flipdate($tgl_kampus_s2);?>

        </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >c. Nama Rektor yang mengesahkan</td>
        <td >:</td>
       
          <td > <?php echo $pejabat_kampus_s2; ?></td>
      </tr>
      

      <tr>
        <td >&nbsp;</td>
        <td ><strong>d.</strong></td>
        <td ><strong>Gelar Akademis Setingkat S1</strong></td>
        <td >:</td>
        <td > <strong><?php echo $nama_gelar_s1; ?></strong></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >a. Nama Perguruan Tinggi</td>
        <td >:</td>
      
          <td > <?php echo $nama_kampus_s1; ?></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >b. Nomor dan Tanggal Ijazah</td>
        <td >:</td>
        <td > <?php echo $nomor_kampus_s1; ?>  
        <?php if($tgl_kampus_s1==0000) 
                                    echo '';
                                 else
                                   echo 'Tanggal ', flipdate($tgl_kampus_s1);?>

        </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >c. Nama Rektor yang mengesahkan</td>
        <td >:</td>
       
          <td > <?php echo $pejabat_kampus_s1; ?></td>
      </tr>


<tr>
        <td >&nbsp;</td>
        <td ><strong>e.</strong></td>
        <td ><strong>Gelar Akademis Setingkat Diploma/Akademi</strong></td>
        <td >:</td>
        <td > <strong><?php echo $nama_gelar_dip; ?></strong></td>
  </tr>
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >a. Nama Perguruan Tinggi</td>
        <td >:</td>
      
          <td > <?php echo $nama_kampus_dip; ?></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >b. Nomor dan Tanggal Ijazah</td>
        <td >:</td>
        <td > <?php echo $nomor_kampus_dip; ?>  
        <?php if($tgl_kampus_dip==0000) 
                                    echo '';
                                 else
                                   echo 'Tanggal ', flipdate($tgl_kampus_dip);?>

        </td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >c. Nama Rektor yang mengesahkan</td>
        <td >:</td>
       
          <td > <?php echo $pejabat_kampus_dip; ?></td>
      </tr>
</table>
<p>&nbsp;</p>	
 
 
<table width="100%" border="0">
  <tr>
    <td width="43%" align="center">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td width="56%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">Pemohon,</td>
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
    <td><div align="center"><?php echo $nama; ?></div></td>
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
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><div align="left">Catatan :</div></td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><div align="left">Mohon dilampirkan fotocopy Ijazah atau Surat Keputusan atas gelar-gelar yang dimiliki  dimaksud.</div></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
</table>


<!-- </div> end of wrap -->
</body>

</html>