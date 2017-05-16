<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Surat Keterangan Lahir</title>
<style type="text/css">
 
</style>
</head>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style.css">
	<?php 
	$desa = $this->cm->data_desa();

	?>

<body>
Kode: F.2.02 <br />
Pemerintah  <?php echo   $desa->kota ?> <br />
Kecamatan <?php echo   $desa->kecamatan ?> <br />
<?php echo   $desa->bentuk_lembaga ?> <?php echo   $desa->desa ?> <br />
<br />
<br /> <center>
ARSIP UNTUK KECAMATAN / PEREKAM DATA
<h1>SURAT KETERANGAN KELAHIRAN </h1>
<h1>No. : <?php echo $no_surat; ?></h1> </center><br />
<br />

<table width="100%">
  <tr>
    <td width="285" class="label">Nama Kepala Keluarga </td>
    <td width="709"> : <?php echo $bapak_nama; ?></td>
  </tr>
  <tr>
    <td class="label">Nomor KK </td>
    <td>: <?php echo $this->am->no_kk($bapak_id_penduduk); ?></td>
  </tr>
</table>
<br />
<br />
<br />
BAYI :
<table width="100%">
  <tr>
    <td width="19">1</td>
    <td width="261"  class="label2">Nama </td>
    <td width="710">: <?php echo $nama ?></td>
  </tr>
  <tr>
    <td>2</td>
    <td class="label2">Jenis kelamin </td>
    <td>: <?php echo $jk ?></td>
  </tr>
  <tr>
    <td>3</td>
    <td class="label2">Tempat dilahirkan </td>
    <td>: <?php echo $tmp_lahir ?></td>
  </tr>
  <tr>
    <td>4</td>
    <td class="label2">Tempat kelahiran </td>
    <td>: <?php echo $tmp_kelahiran ?></td>
  </tr>
  <tr>
    <td>5</td>
    <td class="label2">Hari dan tanggal lahir </td>
    <td>: <?php echo $this->am->hari(flipdate($tgl_lahir)).", ". $tgl_lahir ?></td>
  </tr>
  <tr>
    <td>6</td>
    <td class="label2">Pukul </td>
    <td>: <?php echo $jam_lahir ?></td>
  </tr>
  <tr>
    <td>7</td>
    <td class="label2">Kelahiran ke </td>
    <td>: <?php echo $anak_ke ?></td>
  </tr>
  <tr>
    <td>8</td>
    <td class="label2">Penolong kelahiran </td>
    <td>: <?php echo $penolong_kelahiran ?></td>
  </tr>
  <tr>
    <td>9</td>
    <td class="label2">Berat bayi</td>
    <td>: <?php echo $berat ?> Kg</td>
  </tr>
</table>
<br />
<br />
IBU :
<table width="100%">
  <tr>
    <td width="284" >Nama </td>
    <td width="710"> : <?php echo $ibu_nama; ?></td>
  </tr>
  <tr>
    <td >NIK </td>
    <td> : <?php echo $ibu_nik; ?></td>
  </tr>
  <tr>
    <td  >Umur </td>
    <td> : <?php echo $ibu_umur; //$this->am->umur($ibu_tgl_lahir); ?> tahun </td>
  </tr>
  <tr>
    <td  >Pekerjaan </td>
    <td> : <?php echo $ibu_pekerjaan; ?></td>
  </tr>
  <tr>
    <td  valign="top">Alamat </td>
    <td><table width="100%">
      <tr>
        <td>a. <?php echo $desa->bentuk_lembaga." ".$ibu_desa ?></td>
        <td>c.  <?php echo $ibu_kota ?></td>
      </tr>
      <tr>
        <td>b. Kecamatan <?php echo $ibu_kecamatan ?></td>
        <td>d. Provinsi <?php echo $ibu_provinsi ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td  >Kewarganegaraan</td>
    <td> : <?php echo $ibu_warga_negara ?></td>
  </tr>
  <tr>
    <td>Kebangsaan</td>
    <td> : <?php echo $ibu_keturunan ?></td>
  </tr>
  <tr>
    <td>Tgl. Pencatatan perkawinan</td>
    <td> : <?php echo flipdate($tgl_pernikahan) ?></td>
  </tr>
</table>
<br />
<br />
BAPAK :
<table width="100%">
  <tr>
    <td width="284" >Nama </td>
    <td width="709"> : <?php echo $bapak_nama; ?></td>
  </tr>
  <tr>
    <td >NIK </td>
    <td> : <?php echo $bapak_nik; ?></td>
  </tr>
  <tr>
    <td >Umur </td>
    <td> : <?php echo $ibu_umur; //$this->am->umur($bapak_tgl_lahir); ?> tahun </td>
  </tr>
  <tr>
    <td  >Pekerjaan </td>
    <td> : <?php echo $bapak_pekerjaan; ?></td>
  </tr>
  <tr>
    <td valign="top">Alamat </td>
    <td>
    <table width="100%">
      <tr>
        <td width="293">a. <?php echo $desa->bentuk_lembaga." ".$bapak_desa ?></td>
        <td width="405">c.  <?php echo $bapak_kota ?></td>
      </tr>
      <tr>
        <td>b. Kecamatan <?php echo $bapak_kecamatan ?></td>
        <td>d. Provinsi <?php echo $bapak_provinsi ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td  >Kewarganegaraan</td>
    <td> : <?php echo $bapak_warga_negara ?></td>
  </tr>
  <tr>
    <td >Kebangsaan</td>
    <td> : <?php echo $bapak_keturunan ?></td>
  </tr>
</table>
<br />
<br />
SAKSI I :
<table width="100%">
  <tr>
    <td width="284" >NIK </td>
    <td width="710"> : <?php echo $saksi1_nik; ?></td>
  </tr>
  <tr>
    <td  >Nama </td>
    <td> : <?php echo $saksi1_nama; ?></td>
  </tr>
</table>
<br />
<br />
SAKSI II :
<table width="100%">
  <tr>
    <td width="286" >NIK </td>
    <td width="708"> : <?php echo $saksi2_nik; ?></td>
  </tr>
  <tr>
    <td >Nama </td>
    <td> : <?php echo $saksi2_nama; ?></td>
  </tr>
</table>
<br />
<br />
<center>
  <?php echo $desa->desa . ", ".flipdate($tanggal) ?> <br />
  <?php echo $ttd_jabatan ." ". $desa->bentuk_lembaga ?> <br />
  <br />
  <br />
  <br />
  <?php echo $ttd_nama ?>
</center>
</body>
</html>