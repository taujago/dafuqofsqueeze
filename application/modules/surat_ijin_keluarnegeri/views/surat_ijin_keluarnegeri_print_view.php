<html>
	<head>
		<title>
			SURAT IJIN ORANGTUA KE LUAR NEGERI
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
 

<br />
<br />
<br />
<center>
		<span id="judulsurat">SURAT IJIN ORANGTUA KE LUAR NEGERI</span><br />
     	<span id="nomor_surat"> No : <?php echo $no_surat ?> </span>
<br /><br /><br /> </center>

<p>Yang bertanda tangan di bawah ini  : </p>
<div style="margin-left:100px;">
		<table>
			<tr><td class="label">Nama </td><td>: <?php echo $ayah_nama; ?> </td></tr>
			<tr><td class="label">Tempat, Tgl lahir </td><td>: <?php echo $ayah_tmp_lahir . ", ".$ayah_tgl_lahir; ?> </td></tr>
			<tr><td class="label">Jenis kelamin </td><td>: <?php echo $ayah_jk; ?> </td></tr>
			<tr><td class="label">Agama </td><td>: <?php echo $ayah_agama; ?> </td></tr>
			<tr><td class="label">Pekerjaan </td><td>: <?php echo $ayah_pekerjaan; ?> </td></tr>
			<tr><td class="label">Alamat </td><td>: <?php echo $ayah_alamat. " Rt $ayah_rt Dusun $ayah_dusun "; ?> </td></tr>
			<tr><td class="label">No. KTP / NIK </td><td>: <?php echo $ayah_nik; ?> </td></tr>
		</table>
</div>
 
 

<div style="margin-left:100px;">
	SELANJUTNYA : <bR />
		<table>
			<tr><td class="label">Nama </td><td>: <?php echo $ibu_nama; ?> </td></tr>
			<tr><td class="label">Tempat, Tgl lahir </td><td>: <?php echo $ibu_tmp_lahir . ", ".$ibu_tgl_lahir; ?> </td></tr>
			<tr><td class="label">Jenis kelamin </td><td>: <?php echo $ibu_jk; ?> </td></tr>
			<tr><td class="label">Agama </td><td>: <?php echo $ibu_agama; ?> </td></tr>
			<tr><td class="label">Pekerjaan </td><td>: <?php echo $ibu_pekerjaan; ?> </td></tr>
			<tr><td class="label">Alamat </td><td>: <?php echo $ibu_alamat. " Rt $ibu_rt Dusun $ibu_dusun "; ?> </td></tr>
			<tr><td class="label">No. KTP / NIK </td><td>: <?php echo $ibu_nik; ?> </td></tr>
		</table>
</div>

<p> Menyatakan dengan sebenarnya tidak keberatan dan memberikan izin kepada anak kami yang bernama:
</p>
<div style="margin-left:100px;">
		<table>
			<tr><td class="label">Nama </td><td>: <?php echo $nama; ?> </td></tr>
			<tr><td class="label">Tempat, Tgl lahir </td><td>: <?php echo $tmp_lahir . ", ".$tgl_lahir; ?> </td></tr>
			<tr><td class="label">Jenis kelamin </td><td>: <?php echo $jk; ?> </td></tr>
			<tr><td class="label">Agama </td><td>: <?php echo $agama; ?> </td></tr>
			<tr><td class="label">Pekerjaan </td><td>: <?php echo $pekerjaan; ?> </td></tr>
			<tr><td class="label">Alamat </td><td>: <?php echo $alamat. "Rt $rt Dusun $dusun "; ?> </td></tr>
			<tr><td class="label">No. KTP / NIK </td><td>: <?php echo $nik; ?> </td></tr>
		</table>
</div>
<p>
Demikian surat izin ini kami buat dengan sebenarnya tanpa ada paksaan dan tekanan dari siapapun juga.
</p>	
 
<p align="right"> </p>
<table width="100%" border=0 >
<tr><td aligh="center" valign="top" width="50%"></td><td aligh="center" valign="top" width="50%">
<center><?php echo $desa2->desa.", ". flipdate($tanggal); ?></center>
</td></tr>
<tr><td aligh="center" valign="top" width="50%"> 
	<center>
	Yang memberi ijin <br /><br /><br /><br /> 
	<?php echo $ibu_nama; ?>
	</center>
</td>
	<td aligh="center" valign="top" width="50%"> 
	<center>	Yang memberi ijin <br /><br /><br /><br /><?php echo $ayah_nama; ?>
	</center></td>

	
</tr>
<tr>
  <td aligh="center" valign="top">&nbsp;</td>
  <td aligh="center" valign="top">&nbsp;</td>
</tr>
<tr>
  <td aligh="center" valign="top">&nbsp;</td>
  <td aligh="center" valign="top"><center>
		 Mengetahui, <br />
		<?php 
		if($ttd<>"kepala") {
			echo "a.n. Kepala ". $desa2->bentuk_lembaga."<br />";
		}
		
		echo $ttd_jabatan." ".$desa2->bentuk_lembaga ?>  <br /><br />
		<br /><br />
		<?php echo "<u>$ttd_nama </u>";
		if($ttd=="sek") {
		echo "<br />NIP : ".$nip_sekretaris;
		}
		?>
	</center></td>
</tr>
</table>
 

<br /><br /><br />
<div style="float:right; width:400px;">
	
</div>
<br /> <br /><br />

<!-- </div> end of wrap -->
</body>

</html>