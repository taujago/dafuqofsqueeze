<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Statistik Penduduk Menurut Umur</title>
  <?php 
$desa2 = $this->cm->data_desa();

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
            text: 'STATISTIK PENDUDUK MENURUT UMUR <?php echo  strtoupper($desa2->kota ) ?>, KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?>, <?php echo  strtoupper($desa2->bentuk_lembaga. " ". $desa2->desa) ?>'
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

<table id="datatable" border="0" cellpadding="1" width="30%">
    <thead>
        <tr><strong>KETERANGAN :</strong>
            <th align="left">   Batasan Umur   </th>
            <th align="center">   Laki-Laki   </th>
            <th align="center">   Perempuan   </th>
            <th align="center">   Jumlah   </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th align="left">Penduduk 0 - 5 Tahun</th>
            <td align="center"><?php echo $umur->u_0_5_l; ?></td>
            <td align="center"><?php echo $umur->u_0_5_p; ?></td>
            <td align="center"><?php echo $umur->u_0_5; ?></td>
        </tr>
        <tr>
            <th align="left">Penduduk 6 - 10 Tahun</th>
            <td align="center"><?php echo $umur->u_6_10_l; ?></td>
            <td align="center"><?php echo $umur->u_6_10_p; ?></td>
            <td align="center"><?php echo $umur->u_6_10; ?></td>
        </tr>
        <tr>
            <th align="left">Penduduk 11 - 20 Tahun</th>
            <td align="center"><?php echo $umur->u_11_20_l; ?></td>
            <td align="center"><?php echo $umur->u_11_20_p; ?></td>
            <td align="center"><?php echo $umur->u_11_20; ?></td>
        </tr>
        <tr>
            <th align="left">Penduduk 21 - 30 Tahun</th>
            <td align="center"><?php echo $umur->u_21_30_l; ?></td>
            <td align="center"><?php echo $umur->u_21_30_p; ?></td>
            <td align="center"><?php echo $umur->u_21_30; ?></td>
        </tr>
        <tr>
            <th align="left">Penduduk 31 - 40 Tahun</th>
            <td align="center"><?php echo $umur->u_31_40_l; ?></td>
            <td align="center"><?php echo $umur->u_31_40_p; ?></td>
            <td align="center"><?php echo $umur->u_31_40; ?></td>
        </tr>
         <tr>
            <th align="left">Penduduk 41 - 50 Tahun</th>
            <td align="center"><?php echo $umur->u_41_50_l; ?></td>
            <td align="center"><?php echo $umur->u_41_50_p; ?></td>
            <td align="center"><?php echo $umur->u_41_50; ?></td>
        </tr>
         <tr>
            <th align="left">Penduduk 51 - 60 Tahun</th>
            <td align="center"><?php echo $umur->u_51_60_l; ?></td>
            <td align="center"><?php echo $umur->u_51_60_p; ?></td>
            <td align="center"><?php echo $umur->u_51_60; ?></td>
        </tr>
         <tr>
            <th align="left">Penduduk 61 - 70 Tahun</th>
            <td align="center"><?php echo $umur->u_61_70_l; ?></td>
            <td align="center"><?php echo $umur->u_61_70_p; ?></td>
            <td align="center"><?php echo $umur->u_61_70; ?></td>
        </tr>
         <tr>
            <th align="left">Penduduk &gt; 70 Tahun</th>
            <td align="center"><?php echo $umur->u_70_l; ?></td>
            <td align="center"><?php echo $umur->u_70_p; ?></td>
            <td align="center"><?php echo $umur->u_70; ?></td>
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
        <td align="center"><?php if(empty($desa2->pangkat_sek_desa)) 
                                    echo '';
                                 else
                                   echo 'PANGKAT. ', ($desa2->pangkat_sek_desa);?></td>
      </tr>
      <tr>
        <td align="center"><?php if(empty($desa2->nip_sek_desa)) 
                                    echo '';
                                 else
                                   echo 'NIP. ', ($desa2->nip_sek_desa);?></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php }  ?>

	</body>
</html>
