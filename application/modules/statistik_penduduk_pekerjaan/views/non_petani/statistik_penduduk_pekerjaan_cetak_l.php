<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Pekerjaan Penduduk Sektor Non-Pertanian</title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style_laporan.css">

<!--    <style>
  * {
    font-size:10px;
  }
  .judul {
    font-size:14px;
  font-weight:bold;
  }
  
  
table.cetak th {
  border : 1px solid #000;
  vertical-align:middle;
  font-weight:bold;
  text-transform:capitalize;
}

table.cetak td {
  /*border-left : 1px solid #000;
  border-right : 1px solid #000;*/
  border:1px solid #000;
  
}
</style> -->
</head>
<?php 
$desa2 = $this->cm->data_desa();
$arr_pekerjaan = $this->cm->arr_pekerjaan();
$arr_status_kependudukan = $this->cm->arr_status_kependudukan;
?>
<!--<body>
<h1 class="judul">DATA PENDUDUK MENURUT PEKERJAAN <?php echo  strtoupper($desa2->bentuk_lembaga. " " . $desa2->desa); ?></h1>
<h1 class="judul">KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?></h1>
<h1 class="judul"> <?php echo  strtoupper($desa2->kota ) ?></h1>

<br />-->


<p style="text-align:center">
<span class="judul">DATA PENDUDUK SEKTOR NON-PERTANIAN</span><br />
<span class="judul"><?php echo  strtoupper($desa2->kota ) ?></span> <br />
<span class="judul">KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?></span> <br />
<span class="judul"> <?php echo  strtoupper($desa2->bentuk_lembaga. " ". $desa2->desa) ?></span> <br />
<br />
</p>
<b>
 
<table width="365">
<tr><td>Statistik Penduduk</td></tr>
<tr><td width="107">Laki - Laki </td><td width="10">: </td><td width="232"> <?php echo $l; ?></td></tr>
<!-- <tr><td>Perempuan  </td><td>: </td><td> <?php echo $p; ?></td></tr>
<tr><td>Total  </td><td>: </td><td> <?php echo ($p+$l); ?></td></tr>
 -->
</table></b>
<BR />
 <table width="100%" border="0" cellpadding="3" class="tabel">
 <thead>
  <tr>
    <th width="3%" align="center" scope="col"><strong>No.</strong></th>
    <th width="16%" align="center" scope="col"><strong>NIP / Nama</strong></th>
    <th width="14%" align="center" scope="col"><strong>Alamat</strong></th>
    <th width="7%" align="center" scope="col"><strong>Dusun</strong></th>
     <th width="3%" align="center" scope="col"><strong>JK</strong></th>
    <th width="7%" align="center" scope="col"><strong>Agama</strong></th>
    <th width="10%" align="center" scope="col"><strong>Tmp / Tgl Lahir</strong></th>
    <th width="5%" align="center" scope="col"><strong>Umur</strong></th>
    <th width="20%" align="center" scope="col"><strong>Pekerjaan</strong></th>
    <th width="14%" align="center" scope="col"><strong>Pendidikan</strong></th>
  </tr>
 </thead>
 <?php 
 $i =  0; 
 //$rec = $this->dm->get_penduduk_perdusun($row_dusun->id_dusun);
 foreach($rec->result() as $row) :  
 $i++;
 ?>
  <tr>
    <td width="3%"><?php echo $i;  ?></td>
    <td width="16%"><?php echo $row->nik . "<Br />" . $row->nama; ?></td>
    <td width="14%"><?php echo $row->alamat ?></td>
    <td width="7%"><?php echo $row->dusun ?></td>
    <td width="3%"><?php echo $row->jk ?></td>
    <td width="7%"><?php echo $row->agama ?></td>
    <td width="10%"><?php echo $row->tmp_lahir.", ".$row->tgl_lahir ?></td>
     <td width="5%"><?php echo $row->umur ?> Th </td>
      <td width="20 %"><?php echo $row->pekerjaan ?></td>

    <!-- <td width="10%"><?php echo $arr_status_kependudukan[$row->status_kependudukan] ?></td> -->
    <td width="14%"><?php echo $row->pendidikan ?></td>
  </tr>
 <?php endforeach; ?>
</table>
 
<p>&nbsp;</p>
 <?php  
 $this->load->view("pdf_ttd");

 ?></body>
</html>