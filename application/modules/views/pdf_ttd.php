<?php 
	$desa2 = $this->cm->data_desa();

	?>
<table width="100%">
  <tr>
    <td align="center">MENGETAHUI </td>
    <td align="center"><?php echo date("d-m-Y") ?></td>
  </tr>
  <tr>
    <td align="center"> KEPALA <?php echo strtoupper($desa2->bentuk_lembaga) . " ".$desa2->desa; ?></td>
    <td align="center"> SEKRETARIS </td>
  </tr>
  <tr>
    <td align="center"><?php echo strtoupper($desa2->bentuk_lembaga) . " ".$desa2->desa; ?></td>
    <td align="center"></td>
  </tr>
  <tr>
    <td align="center"><br />
      <br />
      <br />
      <?php echo  $desa2->nama_kepala_desa ?></td>
    <td align="center"><br />
      <br />
      <br />
      <?php echo  $desa2->nama_sek_desa ?></td>
  </tr>
</table>
