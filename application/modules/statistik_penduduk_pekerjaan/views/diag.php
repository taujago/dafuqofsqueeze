<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Statistik Penduduk Menurut Pekerjaan</title>
 <?php 
$desa2 = $this->cm->data_desa();
$arr_pekerjaan = $this->cm->arr_pekerjaan();
$arr_status_kependudukan = $this->cm->arr_status_kependudukan;
?>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/diag.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/diag-code-1.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/diag-code-2.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/diag-code-3.js"></script>
		 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style_laporan.css">

        <style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'STATISTIK PENDUDUK MENURUT PEKERJAAN <?php echo  strtoupper($desa2->kota ) ?>, KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?>, <?php echo  strtoupper($desa2->bentuk_lembaga. " ". $desa2->desa) ?>'
        },

        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Jumlah Penduduk'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
});
		</script>
	</head>
	<body>
  
<!-- <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
 -->
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table id="datatable" border="0" cellpadding="1" width="40%">
    <thead>
        <tr><strong><u>KETERANGAN :</u></strong>
            <th align="center">  <u> Pekerjaan  </u> </th>
            <th align="center"> <u>  Laki-Laki  </u> </th>
            <th align="center"> <u>  Perempuan </u>  </th>
            <th align="center"> <u>  Jumlah  </u> </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th align="left">Belum Bekerja</th>
            <td align="center"><?php echo $pekerjaan->belum_l; ?></td>
            <td align="center"><?php echo $pekerjaan->belum_p; ?></td>
            <td align="center"><?php echo $pekerjaan->belum; ?></td>
        </tr>
        <tr>
            <th align="left">Bidan</th>
            <td align="center"><?php echo $pekerjaan->bidan_l; ?></td>
            <td align="center"><?php echo $pekerjaan->bidan_p; ?></td>
            <td align="center"><?php echo $pekerjaan->bidan; ?></td>
        </tr>
        <tr>
            <th align="left">Buruh Harian Lepas</th>
            <td align="center"><?php echo $pekerjaan->buruh_harian_l; ?></td>
            <td align="center"><?php echo $pekerjaan->buruh_harian_p; ?></td>
            <td align="center"><?php echo $pekerjaan->buruh_harian; ?></td>
        </tr>
        <tr>
            <th align="left">Buruh Peternakan</th>
            <td align="center"><?php echo $pekerjaan->buruh_peternakan_l; ?></td>
            <td align="center"><?php echo $pekerjaan->buruh_peternakan_p; ?></td>
            <td align="center"><?php echo $pekerjaan->buruh_peternakan; ?></td>
        </tr>
        <tr>
            <th align="left">Buruh Tani/Perkebunan</th>
            <td align="center"><?php echo $pekerjaan->buruh_tani_l; ?></td>
            <td align="center"><?php echo $pekerjaan->buruh_tani_p; ?></td>
            <td align="center"><?php echo $pekerjaan->buruh_tani; ?></td>
        </tr>
         <tr>
            <th align="left">Dosen</th>
            <td align="center"><?php echo $pekerjaan->dosen_l; ?></td>
            <td align="center"><?php echo $pekerjaan->dosen_p; ?></td>
            <td align="center"><?php echo $pekerjaan->dosen; ?></td>
        </tr>
        <tr>
            <th align="left">Guru</th>
            <td align="center"><?php echo $pekerjaan->guru_l; ?></td>
            <td align="center"><?php echo $pekerjaan->guru_p; ?></td>
            <td align="center"><?php echo $pekerjaan->guru; ?></td>
        </tr>
        <tr>
            <th align="left">Industri</th>
            <td align="center"><?php echo $pekerjaan->industri_l; ?></td>
            <td align="center"><?php echo $pekerjaan->industri_p; ?></td>
            <td align="center"><?php echo $pekerjaan->industri; ?></td>
        </tr>
         <tr>
            <th align="left">Karyawan BUMN</th>
            <td align="center"><?php echo $pekerjaan->bumn_l; ?></td>
            <td align="center"><?php echo $pekerjaan->bumn_p; ?></td>
            <td align="center"><?php echo $pekerjaan->bumn; ?></td>
        </tr>
          <tr>
            <th align="left">Karyawan Honorer</th>
            <td align="center"><?php echo $pekerjaan->honorer_l; ?></td>
            <td align="center"><?php echo $pekerjaan->honorer_p; ?></td>
            <td align="center"><?php echo $pekerjaan->honorer; ?></td>
        </tr>
        <tr>
            <th align="left">Karyawan Swasta</th>
            <td align="center"><?php echo $pekerjaan->swasta_l; ?></td>
            <td align="center"><?php echo $pekerjaan->swasta_p; ?></td>
            <td align="center"><?php echo $pekerjaan->swasta; ?></td>
        </tr>
        <tr>
            <th align="left">Kepala Desa</th>
            <td align="center"><?php echo $pekerjaan->kades_l; ?></td>
            <td align="center"><?php echo $pekerjaan->kades_p; ?></td>
            <td align="center"><?php echo $pekerjaan->kades; ?></td>
        </tr>
         <tr>
            <th align="left">Mengurus Rumah Tangga</th>
            <td align="center"><?php echo $pekerjaan->irt_l; ?></td>
            <td align="center"><?php echo $pekerjaan->irt_p; ?></td>
            <td align="center"><?php echo $pekerjaan->irt; ?></td>
        </tr>

        <tr>
            <th align="left">Pedagang</th>
            <td align="center"><?php echo $pekerjaan->pedagang_l; ?></td>
            <td align="center"><?php echo $pekerjaan->pedagang_p; ?></td>
            <td align="center"><?php echo $pekerjaan->pedagang; ?></td>
        </tr>
         <tr>
            <th align="left">Pelajar/Mahasiswa</th>
            <td align="center"><?php echo $pekerjaan->pelajar_l; ?></td>
            <td align="center"><?php echo $pekerjaan->pelajar_p; ?></td>
            <td align="center"><?php echo $pekerjaan->pelajar; ?></td>
        </tr>
        <tr>
            <th align="left">Pelaut</th>
            <td align="center"><?php echo $pekerjaan->pelaut_l; ?></td>
            <td align="center"><?php echo $pekerjaan->pelaut_p; ?></td>
            <td align="center"><?php echo $pekerjaan->pelaut; ?></td>
        </tr>
          <tr>
            <th align="left">Pembantu Rumah Tangga</th>
            <td align="center"><?php echo $pekerjaan->pembantu_l; ?></td>
            <td align="center"><?php echo $pekerjaan->pembantu_p; ?></td>
            <td align="center"><?php echo $pekerjaan->pembantu; ?></td>
        </tr>
         <tr>
            <th align="left">Pendeta</th>
            <td align="center"><?php echo $pekerjaan->pendeta_l; ?></td>
            <td align="center"><?php echo $pekerjaan->pendeta_p; ?></td>
            <td align="center"><?php echo $pekerjaan->pendeta; ?></td>
        </tr>
          <tr>
            <th align="left">Pensiunan</th>
            <td align="center"><?php echo $pekerjaan->pensiunan_l; ?></td>
            <td align="center"><?php echo $pekerjaan->pensiunan_p; ?></td>
            <td align="center"><?php echo $pekerjaan->pensiunan; ?></td>
        </tr>
           <tr>
            <th align="left">Perangkat Desa</th>
            <td align="center"><?php echo $pekerjaan->perangkat_desa_l; ?></td>
            <td align="center"><?php echo $pekerjaan->perangkat_desa_p; ?></td>
            <td align="center"><?php echo $pekerjaan->perangkat_desa; ?></td>
        </tr>
         <tr>
            <th align="left">Perawat</th>
            <td align="center"><?php echo $pekerjaan->perawat_l; ?></td>
            <td align="center"><?php echo $pekerjaan->perawat_p; ?></td>
            <td align="center"><?php echo $pekerjaan->perawat; ?></td>
        </tr>
         <tr>
            <th align="left">Perdagangan</th>
            <td align="center"><?php echo $pekerjaan->perdagangan_l; ?></td>
            <td align="center"><?php echo $pekerjaan->perdagangan_p; ?></td>
            <td align="center"><?php echo $pekerjaan->perdagangan; ?></td>
        </tr>
          <tr>
            <th align="left">Petani/Pekebun</th>
            <td align="center"><?php echo $pekerjaan->pertanian_l; ?></td>
            <td align="center"><?php echo $pekerjaan->pertanian_p; ?></td>
            <td align="center"><?php echo $pekerjaan->pertanian; ?></td>
        </tr>
          <tr>
            <th align="left">Peternak</th>
            <td align="center"><?php echo $pekerjaan->peternak_l; ?></td>
            <td align="center"><?php echo $pekerjaan->peternak_p; ?></td>
            <td align="center"><?php echo $pekerjaan->peternak; ?></td>
        </tr>
            <tr>
            <th align="left">PNS</th>
            <td align="center"><?php echo $pekerjaan->pns_l; ?></td>
            <td align="center"><?php echo $pekerjaan->pns_p; ?></td>
            <td align="center"><?php echo $pekerjaan->pns; ?></td>
        </tr>
         <tr>
            <th align="left">Sopir</th>
            <td align="center"><?php echo $pekerjaan->sopir_l; ?></td>
            <td align="center"><?php echo $pekerjaan->sopir_p; ?></td>
            <td align="center"><?php echo $pekerjaan->sopir; ?></td>
        </tr>
        <tr>
            <th align="left">Transportasi</th>
            <td align="center"><?php echo $pekerjaan->transportasi_l; ?></td>
            <td align="center"><?php echo $pekerjaan->transportasi_p; ?></td>
            <td align="center"><?php echo $pekerjaan->transportasi; ?></td>
        </tr>
          <tr>
            <th align="left">Tukang Batu</th>
            <td align="center"><?php echo $pekerjaan->tukang_batu_l; ?></td>
            <td align="center"><?php echo $pekerjaan->tukang_batu_p; ?></td>
            <td align="center"><?php echo $pekerjaan->tukang_batu; ?></td>
        </tr>
          <tr>
            <th align="left">Tukang Jahit</th>
            <td align="center"><?php echo $pekerjaan->tukang_jahit_l; ?></td>
            <td align="center"><?php echo $pekerjaan->tukang_jahit_p; ?></td>
            <td align="center"><?php echo $pekerjaan->tukang_jahit; ?></td>
        </tr>
        <tr>
            <th align="left">Tukang Kayu</th>
            <td align="center"><?php echo $pekerjaan->tukang_kayu_l; ?></td>
            <td align="center"><?php echo $pekerjaan->tukang_kayu_p; ?></td>
            <td align="center"><?php echo $pekerjaan->tukang_kayu; ?></td>
        </tr>
        <tr>
            <th align="left">Wiraswasta</th>
            <td align="center"><?php echo $pekerjaan->wiraswasta_l; ?></td>
            <td align="center"><?php echo $pekerjaan->wiraswasta_p; ?></td>
            <td align="center"><?php echo $pekerjaan->wiraswasta; ?></td>
        </tr>

    </tbody>
</table>
<p>
 &nbsp;   
</p><p>
 &nbsp;   
</p>
<?php 
    $desa2 = $this->cm->data_desa();

    ?>
<?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="39%" align="center">MENGETAHUI, </td>
    <td width="61%" align="center"><?php echo $desa2->desa.", ".date("d-m-Y"); ?></td>
  </tr>
  <tr>
    <td align="center">LURAH </td>
    <td align="center">SEKLUR </td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><u><?php echo  $desa2->nama_kepala_desa ?></u></td>
    <td align="center"><u><?php echo  $desa2->nama_sek_desa ?></u></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td align="center">PANGKAT : <?php echo  $desa2->pangkat_kepala_desa ?></td>
      </tr>
      <tr>
        <td align="center">NIP. <?php echo  $desa2->nip_kepala_desa ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td align="center">PANGKAT  : <?php echo  $desa2->pangkat_sek_desa ?></td>
      </tr>
      <tr>
        <td align="center">NIP. <?php echo  $desa2->nip_sek_desa ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php }  else { ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="43%" align="center" valign="top">MENGETAHUI, </td>
    
    <td width="57%" align="center"><?php echo $desa2->desa.", ".date("d-m-Y"); ?></td>
  </tr>
  <tr>
    <td align="center" valign="top">KEPALA DESA </td>
    <td align="center">SEKRETARIS DESA</td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top"><u><?php echo  $desa2->nama_kepala_desa ?></u></td>
    <td align="center"><u><?php echo  $desa2->nama_sek_desa ?></u></td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center"><table width="100%" border="0" cellpadding="0">
      <tr>
        <td align="center">PANGKAT : <?php echo  $desa2->pangkat_sek_desa ?></td>
      </tr>
      <tr>
        <td align="center">NIP. <?php echo  $desa2->nip_sek_desa ?></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php }  ?>

	</body>
</html>
