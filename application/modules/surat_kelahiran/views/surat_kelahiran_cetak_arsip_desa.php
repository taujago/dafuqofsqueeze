<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Surat Keterangan Lahir</title>
<style type="text/css">
<!--
.label {	width: 130px;
}
-->
</style>
</head>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style.css">
	<?php 
	$desa = $this->cm->data_desa();
$desa2 = $this->cm->data_desa();
	?>

<body>
Kode: F.2.02 <br />
Pemerintah  <?php echo   $desa->kota ?> <br />
Kecamatan <?php echo   $desa->kecamatan ?> <br />
<?php echo   $desa->bentuk_lembaga ?> <?php echo   $desa->desa ?> <br />
<center>
  <?php $ket = ($jenis_cetak == "besangkutan")? "ORANG TUA":strtoupper($desa->bentuk_lembaga)  ?>
  <h1>ARSIP UNTUK <?php echo $ket  ?></h1>
  <h3>SURAT KETERANGAN KELAHIRAN </h3>
  No. : <?php echo $no_surat; ?> <br />
  <br />
  <br />
  Yang bertanda tangan di bawah ini,
</center>
Menerangkan Bahwa : <br />
<table width="711">
  <tr>
    <td class="label">Hari </td>
    <td> : <?php echo $this->am->hari(flipdate($tgl_lahir)) ?></td>
  </tr>
  <tr>
    <td class="label">Tanggal </td>
    <td> : <?php echo $tgl_lahir ?></td>
  </tr>
  <tr>
    <td class="label">Pukul </td>
    <td> : <?php echo $jam_lahir ?></td>
  </tr>
  <tr>
    <td class="label">Tempat Kelahiran </td>
    <td> : <?php echo $tmp_lahir ?></td>
  </tr>
</table>
<br />
<br />
Telah lahir seorang anak <?php echo $this->am->jk($jk); ?> <br />
bernama : <?php echo $nama; ?> <br />
<br />
Dari seorang Ibu : <br />
<table width="716">
  <tr>
    <td class="label">Nama </td>
    <td> : <?php echo $ibu_nama; ?></td>
  </tr>
  <tr>
    <td class="label">NIK </td>
    <td> : <?php echo $ibu_nik; ?></td>
  </tr>
  <tr>
    <td class="label">Umur </td>
    <td> : <?php echo $this->am->umur($ibu_tgl_lahir); ?> tahun </td>
  </tr>
  <tr>
    <td class="label">Pekerjaan </td>
    <td> : <?php echo $ibu_pekerjaan; ?></td>
  </tr>
  <tr>
    <td class="label">Alamat </td>
    <td> : <?php echo $ibu_alamat; ?></td>
  </tr>
</table>
<br />
<br />
Istri dari  : <br />
<table width="717">
  <tr>
    <td class="label">Nama </td>
    <td> : <?php echo $bapak_nama; ?></td>
  </tr>
  <tr>
    <td class="label">NIK </td>
    <td> : <?php echo $bapak_nik; ?></td>
  </tr>
  <tr>
    <td class="label">Umur </td>
    <td> : <?php echo $this->am->umur($bapak_tgl_lahir); ?> tahun </td>
  </tr>
  <tr>
    <td class="label">Pekerjaan </td>
    <td> : <?php echo $bapak_pekerjaan; ?></td>
  </tr>
  <tr>
    <td class="label">Alamat </td>
    <td> : <?php echo $bapak_alamat; ?></td>
  </tr>
</table>
<br />
<br />
<center>
  Surat keterangan ini dibuat berdasarkan keterangan pelapor
</center>
<table width="719">
  <tr>
    <td class="label">Nama </td>
    <td> : <?php echo $pelapor_nama; ?></td>
  </tr>
  <tr>
    <td class="label">NIK </td>
    <td> : <?php echo $pelapor_nik; ?></td>
  </tr>
  <tr>
    <td class="label">Umur </td>
    <td> : <?php echo $this->am->umur($pelapor_tgl_lahir); ?> tahun </td>
  </tr>
  <tr>
    <td class="label">Pekerjaan </td>
    <td> : <?php echo $pelapor_pekerjaan; ?></td>
  </tr>
  <tr>
    <td class="label">Alamat </td>
    <td> : <?php echo $pelapor_alamat; ?></td>
  </tr>
</table>
<br />
<br />
<center>
 <?php echo $desa2->desa.", ". flipdate($tanggal); ?><br />
    <?php 
    if($ttd<>"kepala") {
      echo "a.n. Kepala ". $desa2->bentuk_lembaga."<br />";
    }
    
    echo $ttd_jabatan." ".$desa2->bentuk_lembaga ?>  <br /><br />
    <br /><br />
    <?php echo "<u>$ttd_nama </u>";
    if($ttd=="sek") {
    echo "<br />".$nip_sekretaris;
    }
    ?>
  
</center>
</body>
</html>