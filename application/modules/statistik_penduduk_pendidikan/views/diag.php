<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Statistik Penduduk Menurut Pendidikan</title>
 <?php 
$desa2 = $this->cm->data_desa();
$arr_pendidikan = $this->cm->arr_pendidikan();
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
            text: 'STATISTIK PENDUDUK MENURUT PENDIDIKAN <?php echo  strtoupper($desa2->kota ) ?>, KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?>, <?php echo  strtoupper($desa2->bentuk_lembaga. " ". $desa2->desa) ?>'
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

<!-- <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
 -->
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table id="datatable" border="0" cellpadding="0" width="100%" class="tabel" >
    <thead>
        <tr><strong>KETERANGAN : 
    </strong>
      
            <th align="center">  Pendidikan  </th>
            <th align="center">  Laki-Laki  </th>
            <th align="center">  Perempuan  </th>
            <th align="center">  Jumlah  </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th align="left">TIDAK TAMAT SD/SEDERAJAT</th>
            <td align="center"><?php echo $pendidikan->tidak_tamat_sd_l; ?></td>
            <td align="center"><?php echo $pendidikan->tidak_tamat_sd_p; ?></td>
            <td align="center"><?php echo $pendidikan->tidak_tamat_sd; ?></td>
        </tr>

        <tr>
            <th align="left">TIDAK/BELUM SEKOLAH</th>
            <td align="center"><?php echo $pendidikan->belum_sekolah_l; ?></td>
            <td align="center"><?php echo $pendidikan->belum_sekolah_p; ?></td>
            <td align="center"><?php echo $pendidikan->belum_sekolah; ?></td>
        </tr>
     
        <tr>
            <th align="left">TAMAT SD/SEDERAJAT</th>
            <td align="center"><?php echo $pendidikan->tamat_sd_l; ?></td>
            <td align="center"><?php echo $pendidikan->tamat_sd_p; ?></td>
            <td align="center"><?php echo $pendidikan->tamat_sd; ?></td>
        </tr>
        <tr>
            <th align="left">SLTP/SEDERAJAT</th>
            <td align="center"><?php echo $pendidikan->SLTP_l; ?></td>
            <td align="center"><?php echo $pendidikan->SLTP_p; ?></td>
            <td align="center"><?php echo $pendidikan->SLTP; ?></td>
        </tr>
           <tr>
            <th align="left">SLTA/SEDERAJAT</th>
            <td align="center"><?php echo $pendidikan->SLTA_l; ?></td>
            <td align="center"><?php echo $pendidikan->SLTA_p; ?></td>
            <td align="center"><?php echo $pendidikan->SLTA; ?></td>
        </tr>
    
         <tr>
            <th align="left">DIPLOMA I/II</th>
            <td align="center"><?php echo $pendidikan->diploma_1_l; ?></td>
            <td align="center"><?php echo $pendidikan->diploma_1_p; ?></td>
            <td align="center"><?php echo $pendidikan->diploma_1; ?></td>
        </tr>
        <tr>
            <th align="left">AKADEMI/DIPLOMA III/S. MUDA</th>
            <td align="center"><?php echo $pendidikan->DIPLOMA_3_l; ?></td>
            <td align="center"><?php echo $pendidikan->DIPLOMA_3_p; ?></td>
            <td align="center"><?php echo $pendidikan->DIPLOMA_3; ?></td>
        </tr>
        <tr>
            <th align="left">DIPLOMA IV/STRATA I</th>
            <td align="center"><?php echo $pendidikan->diploma_4_l; ?></td>
            <td align="center"><?php echo $pendidikan->diploma_4_p; ?></td>
            <td align="center"><?php echo $pendidikan->diploma_4; ?></td>
        </tr>
         <tr>
            <th align="left">STRATA II</th>
            <td align="center"><?php echo $pendidikan->S2_l; ?></td>
            <td align="center"><?php echo $pendidikan->S2_p; ?></td>
            <td align="center"><?php echo $pendidikan->S2; ?></td>
        </tr>
          <tr>
            <th align="left">STRATA III</th>
            <td align="center"><?php echo $pendidikan->S3_l; ?></td>
            <td align="center"><?php echo $pendidikan->S3_p; ?></td>
            <td align="center"><?php echo $pendidikan->S3; ?></td>
        </tr>
      
    </tbody>

 
  
</table>
<br>
<strong>Jumlah Keseluruhan Pendidikan Penduduk : </strong>
<!-- <table width="100%" border="0" class="tabel">
<tr>
<th width="53.2%">Jumlah</th>
<th width="15.3%"> -->
<br>Laki-Laki : <?php  echo $jumlah_l = 
    $pendidikan->tidak_tamat_sd_l + 
    $pendidikan->belum_tamat_sd_l +  
    $pendidikan->tamat_sd_l +
    $pendidikan->SLTP_l +
    $pendidikan->SLTA_l +
    $pendidikan->belum_sekolah_l +
    $pendidikan->diploma_1_l +
    $pendidikan->DIPLOMA_3_l +
    $pendidikan->diploma_4_l +
    $pendidikan->S2_l +
    $pendidikan->S3_l  ?>
<!-- </th>
<th width="18.8%"> -->
<br>
Perempuan :    <?php  echo $jumlah_p = 
    $pendidikan->tidak_tamat_sd_p + 
    $pendidikan->belum_tamat_sd_p +  
    $pendidikan->tamat_sd_p +
    $pendidikan->SLTP_p +
    $pendidikan->SLTA_p +
    $pendidikan->belum_sekolah_p +
    $pendidikan->diploma_1_p +
    $pendidikan->DIPLOMA_3_p +
    $pendidikan->diploma_4_p +
    $pendidikan->S2_p +
    $pendidikan->S3_p  ?>
<!-- </th>
<th> -->
<br> 
Jumlah :   <?php echo $jumlah_l + $jumlah_p ?>
  <!--   </th>
</tr>
    </table> -->
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
