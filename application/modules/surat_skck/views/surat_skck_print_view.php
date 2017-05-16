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
<?php $this->load->view("kop_surat"); ?>

<!-- <table border="0" width="100%">
	<tr>
		<td valign="top" align="right"> <img src="<?php echo base_url()."assets/images/$desa2->logo" ?>" width="100" height="128" /> </td>
		<td valign="top" width="70%">
			<center>
			<h1> PEMERINTAH <?php echo strtoupper($desa2->kota); ?> </h1>
			<h1> KECAMATAN <?php echo strtoupper($desa2->kecamatan); ?> </h1>
			<h1> <?php echo strtoupper($desa2->bentuk_lembaga. " ".$desa2->kecamatan); ?> </h1>
			<h3><?php echo $desa2->alamat . " " . $desa2->kodepos ?></h3>
			</center>

		</td>
	</tr>
	<tr><td colspan="2"><hr/></td></tr>
</table> -->

<br />
<br />
<br />
<center>
		<span id="judulsurat">SURAT PENGANTAR SKCK</span><br />
     	<span id="nomor_surat"> Nomor : <?php echo $no_surat ?> </span>
<br /><br /><br /> </center>

<p>Pengantar ini diberikan kepada :</p>
<div style="margin-left:100px;">
		<table width="614">
			<tr>
			  <td width="164" class="label">Nama Lengkap </td><td width="438">: <?php echo $nama; ?> </td></tr>
			<tr><td class="label">Jenis kelamin </td><td>: <?php echo $jk; ?> </td></tr>
            <tr>
              <td class="label">Tempat / Tgl lahir </td><td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?> </td></tr>
			
			<tr>
			  <td class="label">Status</td>
			  <td>: <?php 
			  $arr_status_kawin = $this->cm->arr_status_kawin;
			  echo $arr_status_kawin[$status_kawin] ?></td>
		  </tr>
			<tr><td class="label">Agama </td><td>: <?php echo $agama; ?> </td></tr>
			<tr>
			  <td class="label">Suku </td>
			  <td>: <?php echo $suku ?></td>
		  </tr>
			<tr><td class="label">Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr>
			<tr>
			  <td class="label">Golongan Darah</td>
			  <td>: <?php echo $golongan_darah; ?></td>
		  </tr>
			<tr><td class="label">Alamat </td><td>: <?php echo $alamat; ?> </td></tr>
			<tr>
			  <td class="label">RT / Dusun</td>
			  <td>: <?php echo $rt." / ".$dusun; ?></td>
		  </tr>
			<tr><td class="label">No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
</div>
 
 

 
<P>Nama tersbut di atas adalah benar warga <?php echo $desa2->bentuk_lembaga. " ".$desa2->desa  ?> Kecamatan <?php echo $desa2->kecamatan." ".$desa2->kota; ?>, telah diberikan pengantar untuk mendapat Surat Keterangan Catatan Kepolisian (SKCK). </p>
<P>Demikian surat pengantar ini dibuat dan diberikan kepada yang bersangkutan untuk dipergunakan sebagaimana mestinya.</p>
<P>&nbsp; </p>

<table width="100%" border="0">
  <tr>
    <td width="50%" align="center" valign="top">Mengetahuui Pejabat Kecamatan<br><?php echo $pejabat_kecamatan_jabatan; ?>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br><u>
      <?php echo $pejabat_kecamatan_nama; ?></u><br>
    <br></td>
    <td width="50%" align="center" valign="top"><?php echo $desa2->desa.", ". flipdate($tanggal); ?><br>      <?php 
		if($ttd<>"kepala") {
			echo "a.n. Kepala ". $desa2->bentuk_lembaga."<br />";
		}
		
		echo $ttd_jabatan." ".$desa2->bentuk_lembaga ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php echo "<u>$ttd_nama </u>";
		if($ttd=="sek") {
		echo "<br />NIP : ".$nip_sekretaris;
		}
		?></td>
  </tr>
</table>
<br /><br /><br />
<div style="float:right; width:400px;">
	<center>
  <br /><br /><br />
		<br /><br />
	</center>
</div>
<br /> <br /><br />

<!-- </div> end of wrap -->
</body>

</html>