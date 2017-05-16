<html>
	<head>
		<title>Surat Keterangan Mati</title>

<style type="text/css">
* {
	font-family: verdana;
	font-size:  10px;
}
#kolom1 {
	width: 30%px;
	float:left;
	padding: 5px;
}
#kolom2 {
	width: 50%;
	float:left;
	padding: 5px;

}

#kolom3 {
	width: 30%;
	padding: 5px;
	float:left;
}

.label {
	width: 130px;
}
.label2 {
	width: 120px;
}
</style>

		</head>

<body>
	<?php 
	$desa = $this->cm->data_desa();

	?>
<table>
	<tr>
<td width="30%" valign="top">
Kode: F.2.17 <br />
Pemerintah Kabupaten <?php echo   $desa->kota ?> <br />
Kecamatan  <?php echo   $desa->kecamatan ?>  <br />
 <?php echo   $desa->bentuk_lembaga ?>   <?php echo   $desa->desa ?>  <br />
 <center><h1>ARSIP UNTUK <?php echo strtoupper($desa->bentuk_lembaga) ?> </h1>

<h3>SURAT KETERANGAN KEMATIAN </h3>
No. :  <?php echo $no_surat; ?>
<br /><br /><br />

Yang bertanda tangan di bawah ini, 

 </center>
 Menerangkan Bahwa : <br />
 <table width="100%">
 	<tr>
 	  <td width="128" class="label">Nama</td><td width="146"> : <?php echo $nama; ?> </td></tr>
 	<tr>
 	  <td class="label">NIK </td><td> : <?php echo $nik ?> </td></tr>
 	<tr>
 	  <td class="label">Jenis Kelamin </td><td> : <?php echo $jk ?> </td></tr>
 	<tr>
 	  <td class="label">Tanggal Lahir/ Umur</td>
 	  <td> : <?php echo $tgl_lahir . " / ".$umur ?> tahun</td></tr>
 	<tr>
 	  <td class="label">Agama</td>
 	  <td>: <?php echo $agama ?></td>
 	  </tr>
 	<tr>
 	  <td class="label">Alamat</td>
 	  <td>: <?php echo $alamat ?></td>
 	  </tr>
 </table>
<br /><br /> 
Telah meninggal dunia pada : 
<br /> <br />
<br />
<table width="100%">
	<tr>
	  <td class="label">Hari  </td><td> : <?php echo $this->am->hari(flipdate($tgl_meninggal)); ?></td>
	<tr>
	  <td class="label">Tanggal </td><td> : <?php echo isset($tgl_meninggal)?flipdate($tgl_meninggal):""; ?> </td>
	<tr>
	  <td class="label">Bertempat di  </td><td> :  <?php echo $tmp_meninggal; ?></td>
	<tr>
	  <td class="label">Penyebab Kematian</td>
	  <td>: <?php echo $penyebab_kematian; ?></td>
	  </table>
<br />
<br /><br />
<center>
   Surat keterangan ini dibuat berdasarkan keterangan pelapor 
</center>
<table width="100%">
	<tr><td class="label">Nama </td><td> : <?php echo $pelapor_nama; ?> </td>
	<tr><td class="label">NIK </td><td> : <?php echo $pelapor_nik; ?> </td>
	<tr><td class="label">Umur </td><td> : <?php echo $this->am->umur($pelapor_tgl_lahir); ?> tahun </td>
	<tr><td class="label">Pekerjaan </td><td> : <?php echo $pelapor_pekerjaan; ?>  </td>
	<tr><td class="label">Alamat </td><td> : <?php echo $pelapor_alamat; ?>  </td>
</table>
<br /><br />
<center>
	<?php echo $desa->desa . ", ".flipdate($tanggal) ?> <br />
	 <?php echo $ttd_jabatan ." ". $desa->bentuk_lembaga ?> <br /> <br /><br /><br />
	<?php echo $ttd_nama ?> <br />
</center>


</td>








<td  width="40%" valign="top">
 
 Kode: F.217<br />
Pemerintah Kabupaten <?php echo   $desa->kota ?> <br />
Kecamatan  <?php echo   $desa->kecamatan ?>  <br />
 <?php echo   $desa->bentuk_lembaga ?>   <?php echo   $desa->desa ?>  <br /><br /><br />

 ARSIP UNTUK KECAMATAN / PEREKAM DATA 
 <h1>SURAT KETERANGAN KEMATIAN DI LUAR DOMISILI</H1>
 <h1>No. :  <?php echo $no_surat; ?></h1>
<table>
	<tr><td class="label">Nama Kepala Keluarga </td><td>  : <?php echo isset($bapak_nama)?$nama_bapak:""; ?></td></tr>
	<tr><td class="label">Nomor KK </td><td>: <?php echo !empty($bapak_id_penduduk)?$this->am->no_kk($bapak_id_penduduk):""; ?> </td></tr>
</table><br />
JENAZAH : 
<table width="100%">
	<tr>
	  <td>1</td>
	  <td class="label2">NIK</td>
	  <td>: <?php echo $nik ?></td>
	  </tr>
	<tr>
	  <td width="10">2</td>
	  <td width="156" class="label2">Nama Lengkap</td><td width="215">: <?php echo $nama ?></td></tr>
	<tr>
	  <td>3</td><td class="label2">Jenis kelamin </td><td>: <?php echo $jk ?></td></tr>
	<tr>
	  <td>4</td><td class="label2"><span class="label">Tanggal Lahir/ Umur</span></td><td>: <?php echo $tgl_lahir . " / ".$umur ?> tahun</td></tr>
	<tr>
	  <td>5</td>
	  <td class="label2">Tempat lahir</td>
	  <td>: <?php echo $tmp_lahir ?></td>
	  </tr>
	<tr>
	  <td>6</td>
	  <td class="label2">Agama</td><td>: <?php echo $agama ?></td></tr>
	<tr>
	  <td>7</td>
	  <td class="label2">Pekerjaan </td><td>: 
		<?php echo $pekerjaan ?></td></tr>
	<tr>
	  <td>8</td>
	  <td class="label2">Alamat</td><td><table>
	    <tr>
	      <td>a. <?php echo $desa->bentuk_lembaga." ".$ibu_desa ?></td>
	      <td>c. Kabupaten / Kota <?php echo $ibu_kota ?></td>
	      </tr>
	    <tr>
	      <td>b. Kecamatan <?php echo $ibu_kecamatan ?></td>
	      <td>d. Provinsi <?php echo $ibu_provinsi ?></td>
	      </tr>
	    </table></td></tr>
	<tr>
	  <td>9</td>
	  <td class="label2">Kewarganegaraan</td><td>: <?php echo $warga_negara ?></td></tr>
	<tr>
	  <td>10</td>
	  <td class="label2">Keturunan </td><td>: <?php echo $keturunan ?></td></tr>
	<tr>
	  <td>11</td>
	  <td class="label2">Kebangsaan</td><td>: <?php echo $kebangsaan ?></td></tr>
	<tr>
	  <td>12</td>
	  <td class="label2">Anak ke </td>
	  <td>: -</td>
	  </tr>
	<tr>
	  <td>13</td>
	  <td class="label2">Tanggal kematian</td>
	  <td>: <?php echo isset($tgl_meninggal)?flipdate($tgl_meninggal):""; ?></td>
	  </tr>
	<tr>
	  <td>14</td>
	  <td class="label2">Pukul</td>
	  <td>: <?php echo $jam_meninggal; ?></td>
	  </tr>
	<tr>
	  <td>15</td>
	  <td class="label2">Sebab kematian</td>
	  <td>: <?php echo $penyebab_kematian; ?></td>
	  </tr>
	<tr>
	  <td>16</td>
	  <td class="label2">Tempat kematian</td>
	  <td>: <?php echo $tmp_meninggal; ?></td>
	  </tr>
	<tr>
	  <td>17</td>
	  <td class="label2">Yang menerangkan</td>
	  <td>: <?php echo $yang_menerangkan; ?></td>
	  </tr>

</table>
<br />
<br />
Ayah :
<table>
  <tr>
    <td>18</td>
    <td class="label">NIK</td>
    <td> : <?php echo $ayah_nik; ?></td>
  <tr>
    <td>19</td>
    <td class="label"> Nama</td>
    <td> : <?php echo $ayah_nama; ?></td>
  <tr>
    <td>20</td>
    <td class="label">Umur </td>
    <td> : <?php echo isset($ayah_tgl_lahir)?$this->am->umur($ayah_tgl_lahir)." tahun":""; ?>  </td>
  <tr>
    <td>21</td>
    <td class="label">Pekerjaan </td>
    <td> : <?php echo $ayah_pekerjaan; ?></td>
  <tr>
    <td valign="top">22</td>
    <td class="label" valign="top">Alamat </td>
    <td><table>
      <tr>
        <td>a. <?php echo $desa->bentuk_lembaga." ".$ayah_desa ?></td>
        <td>c. Kabupaten / Kota <?php echo $ayah_kota ?></td>
      </tr>
      <tr>
        <td>b. Kecamatan <?php echo $ayah_kecamatan ?></td>
        <td>d. Provinsi <?php echo $ayah_provinsi ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<br />
 
IBU : 
<table>
	<tr>
	  <td>23</td>
	  <td class="label"> NIK</td><td> :  <?php echo $ibu_nik; ?></td>
	<tr>
	  <td>24</td>
	  <td class="label">Nama</td><td> :  <?php echo $ibu_nama; ?></td>
	<tr>
	  <td>25</td>
	  <td class="label">Umur </td><td> : <?php echo $this->am->umur($ibu_tgl_lahir); ?> tahun </td>
	<tr>
	  <td>26</td>
	  <td class="label">Pekerjaan </td><td> : <?php echo $ibu_pekerjaan; ?>  </td>
	<tr>
	  <td valign="top">27</td>
	  <td class="label" valign="top">Alamat </td><td> <table>
								<tr><td>a. <?php echo $desa->bentuk_lembaga." ".$ibu_desa ?></td>
									<td>c. Kabupaten / Kota <?php echo $ibu_kota ?> </td></tr>
								<tr><td>b. Kecamatan <?php echo $ibu_kecamatan ?></td>
									<td>d. Provinsi <?php echo $ibu_provinsi ?> </td></tr>
								</table>  </td> </tr>
</table>
<br>
PELAPOR :
<table width="100%">
  <tr>
    <td class="label">NIK </td>
    <td> : <?php echo $pelapor_nik; ?></td>
  <tr>
    <td class="label">Nama </td>
    <td> : <?php echo $pelapor_nama; ?></td>
</table>
<br />

SAKSI I : 
<table width="100%">
	<tr><td class="label">NIK </td><td> : <?php echo $saksi1_nik; ?> </td>
	<tr><td class="label">Nama </td><td> : <?php echo $saksi1_nama; ?> </td> 
</table>

<br />
SAKSI II : 
<table width="100%">
	<tr><td class="label">NIK </td><td> : <?php echo $saksi2_nik; ?> </td>
	<tr><td class="label">Nama </td><td> : <?php echo $saksi2_nama; ?> </td> 
</table><br /> 
<br />
<center>
	<?php echo $desa->desa . ", ".flipdate($tanggal) ?> <br />
	 <?php echo $ttd_jabatan ." ". $desa->bentuk_lembaga ?> <br /> <br /><br /><br />
	<?php echo $ttd_nama ?> <br />
</center>


</td>









<td  width="30%" valign="top">Kode: F.2.17 <br />
Pemerintah Kabupaten <?php echo   $desa->kota ?> <br />
Kecamatan <?php echo   $desa->kecamatan ?> <br />
<?php echo   $desa->bentuk_lembaga ?> <?php echo   $desa->desa ?> <br />
<center>
  <h1> UNTUK YANG BERSANGKUTAN </h1>
  <h3>SURAT KETERANGAN KEMATIAN </h3>
  No. : <?php echo $no_surat; ?> <br />
  <br />
  <br />
  Yang bertanda tangan di bawah ini,
</center>
Menerangkan Bahwa : <br />
<table width="100%">
  <tr>
    <td width="128" class="label">Nama</td>
    <td width="146"> : <?php echo $nama; ?></td>
  </tr>
  <tr>
    <td class="label">NIK </td>
    <td> : <?php echo $nik ?></td>
  </tr>
  <tr>
    <td class="label">Jenis Kelamin </td>
    <td> : <?php echo $jk ?></td>
  </tr>
  <tr>
    <td class="label">Tanggal Lahir/ Umur</td>
    <td> : <?php echo $tgl_lahir . " / ".$umur ?> tahun</td>
  </tr>
  <tr>
    <td class="label">Agama</td>
    <td>: <?php echo $agama ?></td>
  </tr>
  <tr>
    <td class="label">Alamat</td>
    <td>: <?php echo $alamat ?></td>
  </tr>
</table>
<br />
<br />
Telah meninggal dunia pada : <br />
<br />
<br />
<table width="100%">
  <tr>
    <td class="label">Hari </td>
    <td> : <?php echo $this->am->hari(flipdate($tgl_meninggal)); ?></td>
  <tr>
    <td class="label">Tanggal </td>
    <td> : <?php echo isset($tgl_meninggal)?flipdate($tgl_meninggal):""; ?></td>
  <tr>
    <td class="label">Bertempat di </td>
    <td> : <?php echo $tmp_meninggal; ?></td>
  <tr>
    <td class="label">Penyebab Kematian</td>
    <td>: <?php echo $penyebab_kematian; ?></td>
</table>
<br />
<br />
<br />
<center>
  Surat keterangan ini dibuat berdasarkan keterangan pelapor
</center>
<table width="100%">
  <tr>
    <td class="label">Nama </td>
    <td> : <?php echo $pelapor_nama; ?></td>
  <tr>
    <td class="label">NIK </td>
    <td> : <?php echo $pelapor_nik; ?></td>
  <tr>
    <td class="label">Umur </td>
    <td> : <?php echo $this->am->umur($pelapor_tgl_lahir); ?> tahun </td>
  <tr>
    <td class="label">Pekerjaan </td>
    <td> : <?php echo $pelapor_pekerjaan; ?></td>
  <tr>
    <td class="label">Alamat </td>
    <td> : <?php echo $pelapor_alamat; ?></td>
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
<center>
  <br />
</center>


</td></tr>
</table>
</body>

</html>