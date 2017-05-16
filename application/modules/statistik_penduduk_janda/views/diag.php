<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Statistik Penduduk Duda Janda</title>
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
            text: 'STATISTIK PENDUDUK DUDA DAN JANDA <?php echo  strtoupper($desa2->kota ) ?>, KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?>, <?php echo  strtoupper($desa2->bentuk_lembaga. " ". $desa2->desa) ?>'
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
            <th align="center"><!--   <u> Status Kawin  </u>  --></th>
            <th align="center"> <u>  Duda  </u> </th>
            <th align="center"> <u>  Janda </u>  </th>
            <th align="center"> <u>  Jumlah  </u> </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th align="left">Jiwa</th>
            <td align="center"><?php echo $status_kawin->duda; ?></td>
            <td align="center"><?php echo $status_kawin->janda; ?></td>
            <td align="center"><?php echo $status_kawin->jumlah; ?></td>
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
