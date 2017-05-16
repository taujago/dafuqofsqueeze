<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Penduduk Menurut Batasan Umur Per Tahun</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_style_laporan.css">


<!-- <style>
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

$arr_status_kependudukan = $this->cm->arr_status_kependudukan;
?>
<body>
<!--<h1 class="judul">DATA PENDUDUK PER KK <?php echo  strtoupper($desa2->bentuk_lembaga. " " . $desa2->desa); ?></h1>
<h1 class="judul">KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?></h1>
<h1 class="judul"> <?php echo  strtoupper($desa2->kota ) ?></h1>
<p>&nbsp; </p>-->


<p style="text-align:center">
<span class="judul">DATA PENDUDUK MENURUT BATASAN UMUR PERTAHUN </span><br />
<span class="judul"><?php echo  strtoupper($desa2->kota ) ?></span> <br />
<span class="judul">KECAMATAN <?php echo  strtoupper($desa2->kecamatan ) ?></span> <br />
<span class="judul"> <?php echo  strtoupper($desa2->bentuk_lembaga. " ". $desa2->desa) ?></span> <br />
<br />
</p>

<table width="100%" border="0" cellpadding="3" class="tabel">
  <thead>
  <tr>
   
    <th width="75%" align="center" scope="col"><strong>Umur</strong></th>
    <th width="15%" align="center" scope="col"><strong>Laki-Laki</strong></th>
    <th width="15%" align="center" scope="col"><strong>Perempuan</strong></th>
    <th width="15%" align="center" scope="col"><strong>Jumlah</strong></th>
  </tr>
  <tr>
  </thead>
    <td>0 Tahun</td>
    <td align="center"><?php echo $umur->u_0_l; ?></td>
    <td align="center"><?php echo $umur->u_0_p; ?></td>
    <td align="center"><?php echo $umur->u_0; ?></td>
  </tr>
  <tr>
    
    <td>1 Tahun</td>
    <td align="center"><?php echo $umur->u_1_l; ?></td>
    <td align="center"><?php echo $umur->u_1_p; ?></td>
    <td align="center"><?php echo $umur->u_1; ?></td>
  </tr>
  <tr>
    
    <td>2 Tahun</td>
    <td align="center"><?php echo $umur->u_2_l; ?></td>
    <td align="center"><?php echo $umur->u_2_p; ?></td>
    <td align="center"><?php echo $umur->u_2; ?></td>
  </tr>
  <tr>
   <tr>
    
    <td>3 Tahun</td>
    <td align="center"><?php echo $umur->u_3_l; ?></td>
    <td align="center"><?php echo $umur->u_3_p; ?></td>
    <td align="center"><?php echo $umur->u_3; ?></td>
  </tr>
  <tr>
    
    <td>4 Tahun</td>
    <td align="center"><?php echo $umur->u_4_l; ?></td>
    <td align="center"><?php echo $umur->u_4_p; ?></td>
    <td align="center"><?php echo $umur->u_4; ?></td>
  </tr>
  <tr>
    
    <td>5 Tahun</td>
    <td align="center"><?php echo $umur->u_5_l; ?></td>
    <td align="center"><?php echo $umur->u_5_p; ?></td>
    <td align="center"><?php echo $umur->u_5; ?></td>
  </tr>
  <tr>
    
    <td>6 Tahun</td>
    <td align="center"><?php echo $umur->u_6_l; ?></td>
    <td align="center"><?php echo $umur->u_6_p; ?></td>
    <td align="center"><?php echo $umur->u_6; ?></td>
  </tr>
  <tr>
    
    <td>7 Tahun</td>
    <td align="center"><?php echo $umur->u_7_l; ?></td>
    <td align="center"><?php echo $umur->u_7_p; ?></td>
    <td align="center"><?php echo $umur->u_7; ?></td>
  </tr>
  <tr>
    
    <td>8 Tahun</td>
    <td align="center"><?php echo $umur->u_8_l; ?></td>
    <td align="center"><?php echo $umur->u_8_p; ?></td>
    <td align="center"><?php echo $umur->u_8; ?></td>
  </tr>
  <tr>
    
    <td>9 Tahun</td>
    <td align="center"><?php echo $umur->u_9_l; ?></td>
    <td align="center"><?php echo $umur->u_9_p; ?></td>
    <td align="center"><?php echo $umur->u_9; ?></td>
  </tr>
  <tr>
    
    <td>10 Tahun</td>
    <td align="center"><?php echo $umur->u_10_l; ?></td>
    <td align="center"><?php echo $umur->u_10_p; ?></td>
    <td align="center"><?php echo $umur->u_10; ?></td>
  </tr>

  <tr>
    
    <td>11 Tahun</td>
    <td align="center"><?php echo $umur->u_11_l; ?></td>
    <td align="center"><?php echo $umur->u_11_p; ?></td>
    <td align="center"><?php echo $umur->u_11; ?></td>
  </tr>
  <tr>
    
    <td>12 Tahun</td>
    <td align="center"><?php echo $umur->u_12_l; ?></td>
    <td align="center"><?php echo $umur->u_12_p; ?></td>
    <td align="center"><?php echo $umur->u_12; ?></td>
  </tr>

  <tr>
    
    <td>13 Tahun</td>
    <td align="center"><?php echo $umur->u_13_l; ?></td>
    <td align="center"><?php echo $umur->u_13_p; ?></td>
    <td align="center"><?php echo $umur->u_13; ?></td>
  </tr>
  <tr>
    
    <td>14 Tahun</td>
    <td align="center"><?php echo $umur->u_14_l; ?></td>
    <td align="center"><?php echo $umur->u_14_p; ?></td>
    <td align="center"><?php echo $umur->u_14; ?></td>
  </tr>
  <tr>
    
    <td>15 Tahun</td>
    <td align="center"><?php echo $umur->u_15_l; ?></td>
    <td align="center"><?php echo $umur->u_15_p; ?></td>
    <td align="center"><?php echo $umur->u_15; ?></td>
  </tr>
  <tr>
    
    <td>16 Tahun</td>
    <td align="center"><?php echo $umur->u_16_l; ?></td>
    <td align="center"><?php echo $umur->u_16_p; ?></td>
    <td align="center"><?php echo $umur->u_16; ?></td>
  </tr>
  <tr>
    
    <td>17 Tahun</td>
    <td align="center"><?php echo $umur->u_17_l; ?></td>
    <td align="center"><?php echo $umur->u_17_p; ?></td>
    <td align="center"><?php echo $umur->u_17; ?></td>
  </tr>
  <tr>
    
    <td>18 Tahun</td>
    <td align="center"><?php echo $umur->u_18_l; ?></td>
    <td align="center"><?php echo $umur->u_18_p; ?></td>
    <td align="center"><?php echo $umur->u_18; ?></td>
  </tr>
  <tr>
    
    <td>19 Tahun</td>
    <td align="center"><?php echo $umur->u_19_l; ?></td>
    <td align="center"><?php echo $umur->u_19_p; ?></td>
    <td align="center"><?php echo $umur->u_19; ?></td>
  </tr>
  <tr>
    
    <td>20 Tahun</td>
    <td align="center"><?php echo $umur->u_20_l; ?></td>
    <td align="center"><?php echo $umur->u_20_p; ?></td>
    <td align="center"><?php echo $umur->u_20; ?></td>
  </tr>
  <tr>
    
    <td>21 Tahun</td>
    <td align="center"><?php echo $umur->u_21_l; ?></td>
    <td align="center"><?php echo $umur->u_21_p; ?></td>
    <td align="center"><?php echo $umur->u_21; ?></td>
  </tr>
  <tr>
    
    <td>22 Tahun</td>
    <td align="center"><?php echo $umur->u_22_l; ?></td>
    <td align="center"><?php echo $umur->u_22_p; ?></td>
    <td align="center"><?php echo $umur->u_22; ?></td>
  </tr>
  <tr>
    
    <td>23 Tahun</td>
    <td align="center"><?php echo $umur->u_23_l; ?></td>
    <td align="center"><?php echo $umur->u_23_p; ?></td>
    <td align="center"><?php echo $umur->u_23; ?></td>
  </tr>
  <tr>
    
    <td>24 Tahun</td>
    <td align="center"><?php echo $umur->u_24_l; ?></td>
    <td align="center"><?php echo $umur->u_24_p; ?></td>
    <td align="center"><?php echo $umur->u_24; ?></td>
  </tr>
  <tr>
    
    <td>25 Tahun</td>
    <td align="center"><?php echo $umur->u_25_l; ?></td>
    <td align="center"><?php echo $umur->u_25_p; ?></td>
    <td align="center"><?php echo $umur->u_25; ?></td>
  </tr>
  <tr>
    
    <td>26 Tahun</td>
    <td align="center"><?php echo $umur->u_26_l; ?></td>
    <td align="center"><?php echo $umur->u_26_p; ?></td>
    <td align="center"><?php echo $umur->u_26; ?></td>
  </tr>
  <tr>
    
    <td>27 Tahun</td>
    <td align="center"><?php echo $umur->u_27_l; ?></td>
    <td align="center"><?php echo $umur->u_27_p; ?></td>
    <td align="center"><?php echo $umur->u_27; ?></td>
  </tr>
  <tr>
    
    <td>28 Tahun</td>
    <td align="center"><?php echo $umur->u_28_l; ?></td>
    <td align="center"><?php echo $umur->u_28_p; ?></td>
    <td align="center"><?php echo $umur->u_28; ?></td>
  </tr>
  <tr>
    
    <td>29 Tahun</td>
    <td align="center"><?php echo $umur->u_29_l; ?></td>
    <td align="center"><?php echo $umur->u_29_p; ?></td>
    <td align="center"><?php echo $umur->u_29; ?></td>
  </tr>
  <tr>
    
    <td>30 Tahun</td>
    <td align="center"><?php echo $umur->u_30_l; ?></td>
    <td align="center"><?php echo $umur->u_30_p; ?></td>
    <td align="center"><?php echo $umur->u_30; ?></td>
  </tr>

  <tr>
    
    <td>31 Tahun</td>
    <td align="center"><?php echo $umur->u_31_l; ?></td>
    <td align="center"><?php echo $umur->u_31_p; ?></td>
    <td align="center"><?php echo $umur->u_31; ?></td>
  </tr>

  <tr>
    
    <td>32 Tahun</td>
    <td align="center"><?php echo $umur->u_32_l; ?></td>
    <td align="center"><?php echo $umur->u_32_p; ?></td>
    <td align="center"><?php echo $umur->u_32; ?></td>
  </tr>

  <tr>
    
    <td>33 Tahun</td>
    <td align="center"><?php echo $umur->u_33_l; ?></td>
    <td align="center"><?php echo $umur->u_33_p; ?></td>
    <td align="center"><?php echo $umur->u_33; ?></td>
  </tr>

  <tr>
    
    <td>34 Tahun</td>
    <td align="center"><?php echo $umur->u_34_l; ?></td>
    <td align="center"><?php echo $umur->u_34_p; ?></td>
    <td align="center"><?php echo $umur->u_34; ?></td>
  </tr>

  <tr>
    
    <td>35 Tahun</td>
    <td align="center"><?php echo $umur->u_35_l; ?></td>
    <td align="center"><?php echo $umur->u_35_p; ?></td>
    <td align="center"><?php echo $umur->u_35; ?></td>
  </tr>

  <tr>
    
    <td>36 Tahun</td>
    <td align="center"><?php echo $umur->u_36_l; ?></td>
    <td align="center"><?php echo $umur->u_36_p; ?></td>
    <td align="center"><?php echo $umur->u_36; ?></td>
  </tr>

  <tr>
    
    <td>37 Tahun</td>
    <td align="center"><?php echo $umur->u_37_l; ?></td>
    <td align="center"><?php echo $umur->u_37_p; ?></td>
    <td align="center"><?php echo $umur->u_37; ?></td>
  </tr>

  <tr>
    
    <td>38 Tahun</td>
    <td align="center"><?php echo $umur->u_38_l; ?></td>
    <td align="center"><?php echo $umur->u_38_p; ?></td>
    <td align="center"><?php echo $umur->u_38; ?></td>
  </tr>

  <tr>
    
    <td>39 Tahun</td>
    <td align="center"><?php echo $umur->u_39_l; ?></td>
    <td align="center"><?php echo $umur->u_39_p; ?></td>
    <td align="center"><?php echo $umur->u_39; ?></td>
  </tr>
  <tr>
    
    <td>40 Tahun</td>
    <td align="center"><?php echo $umur->u_40_l; ?></td>
    <td align="center"><?php echo $umur->u_40_p; ?></td>
    <td align="center"><?php echo $umur->u_40; ?></td>
  </tr>

  <tr>
    
    <td>41 Tahun</td>
    <td align="center"><?php echo $umur->u_41_l; ?></td>
    <td align="center"><?php echo $umur->u_41_p; ?></td>
    <td align="center"><?php echo $umur->u_41; ?></td>
  </tr>

  <tr>
    
    <td>42 Tahun</td>
    <td align="center"><?php echo $umur->u_42_l; ?></td>
    <td align="center"><?php echo $umur->u_42_p; ?></td>
    <td align="center"><?php echo $umur->u_42; ?></td>
  </tr>

  <tr>
    
    <td>43 Tahun</td>
    <td align="center"><?php echo $umur->u_43_l; ?></td>
    <td align="center"><?php echo $umur->u_43_p; ?></td>
    <td align="center"><?php echo $umur->u_43; ?></td>
  </tr>

  <tr>
    
    <td>44 Tahun</td>
    <td align="center"><?php echo $umur->u_44_l; ?></td>
    <td align="center"><?php echo $umur->u_44_p; ?></td>
    <td align="center"><?php echo $umur->u_44; ?></td>
  </tr>

  <tr>
    
    <td>45 Tahun</td>
    <td align="center"><?php echo $umur->u_45_l; ?></td>
    <td align="center"><?php echo $umur->u_45_p; ?></td>
    <td align="center"><?php echo $umur->u_45; ?></td>
  </tr>

  <tr>
    
    <td>46 Tahun</td>
    <td align="center"><?php echo $umur->u_46_l; ?></td>
    <td align="center"><?php echo $umur->u_46_p; ?></td>
    <td align="center"><?php echo $umur->u_46; ?></td>
  </tr>

 <tr>
    
    <td>47 Tahun</td>
    <td align="center"><?php echo $umur->u_47_l; ?></td>
    <td align="center"><?php echo $umur->u_47_p; ?></td>
    <td align="center"><?php echo $umur->u_47; ?></td>
  </tr>
 <tr>
    
    <td>48 Tahun</td>
    <td align="center"><?php echo $umur->u_48_l; ?></td>
    <td align="center"><?php echo $umur->u_48_p; ?></td>
    <td align="center"><?php echo $umur->u_48; ?></td>
  </tr>
 <tr>
    
    <td>49 Tahun</td>
    <td align="center"><?php echo $umur->u_49_l; ?></td>
    <td align="center"><?php echo $umur->u_49_p; ?></td>
    <td align="center"><?php echo $umur->u_49; ?></td>
  </tr>
 <tr>
    
    <td>50 Tahun</td>
    <td align="center"><?php echo $umur->u_50_l; ?></td>
    <td align="center"><?php echo $umur->u_50_p; ?></td>
    <td align="center"><?php echo $umur->u_50; ?></td>
  </tr>
 <tr>
    
    <td>51 Tahun</td>
    <td align="center"><?php echo $umur->u_51_l; ?></td>
    <td align="center"><?php echo $umur->u_51_p; ?></td>
    <td align="center"><?php echo $umur->u_51; ?></td>
  </tr>
 <tr>
    
    <td>52 Tahun</td>
    <td align="center"><?php echo $umur->u_52_l; ?></td>
    <td align="center"><?php echo $umur->u_52_p; ?></td>
    <td align="center"><?php echo $umur->u_52; ?></td>
  </tr>
 <tr>
    
    <td>53 Tahun</td>
    <td align="center"><?php echo $umur->u_53_l; ?></td>
    <td align="center"><?php echo $umur->u_53_p; ?></td>
    <td align="center"><?php echo $umur->u_53; ?></td>
  </tr>
 <tr>
    
    <td>54 Tahun</td>
    <td align="center"><?php echo $umur->u_54_l; ?></td>
    <td align="center"><?php echo $umur->u_54_p; ?></td>
    <td align="center"><?php echo $umur->u_54; ?></td>
  </tr>
 <tr>
    
    <td>55 Tahun</td>
    <td align="center"><?php echo $umur->u_55_l; ?></td>
    <td align="center"><?php echo $umur->u_55_p; ?></td>
    <td align="center"><?php echo $umur->u_55; ?></td>
  </tr>
 <tr>
    
    <td>56 Tahun</td>
    <td align="center"><?php echo $umur->u_56_l; ?></td>
    <td align="center"><?php echo $umur->u_56_p; ?></td>
    <td align="center"><?php echo $umur->u_56; ?></td>
  </tr>
 <tr>
    
    <td>57 Tahun</td>
    <td align="center"><?php echo $umur->u_57_l; ?></td>
    <td align="center"><?php echo $umur->u_57_p; ?></td>
    <td align="center"><?php echo $umur->u_57; ?></td>
  </tr>
 <tr>
    
    <td>58 Tahun</td>
    <td align="center"><?php echo $umur->u_58_l; ?></td>
    <td align="center"><?php echo $umur->u_58_p; ?></td>
    <td align="center"><?php echo $umur->u_58; ?></td>
  </tr>
 <tr>
    
    <td>59 Tahun</td>
    <td align="center"><?php echo $umur->u_59_l; ?></td>
    <td align="center"><?php echo $umur->u_59_p; ?></td>
    <td align="center"><?php echo $umur->u_59; ?></td>
  </tr>
 <tr>
    
    <td>60 Tahun</td>
    <td align="center"><?php echo $umur->u_60_l; ?></td>
    <td align="center"><?php echo $umur->u_60_p; ?></td>
    <td align="center"><?php echo $umur->u_60; ?></td>
  </tr>
 <tr>
    
    <td>61 Tahun</td>
    <td align="center"><?php echo $umur->u_61_l; ?></td>
    <td align="center"><?php echo $umur->u_61_p; ?></td>
    <td align="center"><?php echo $umur->u_61; ?></td>
  </tr>
 <tr>
    
    <td>62 Tahun</td>
    <td align="center"><?php echo $umur->u_62_l; ?></td>
    <td align="center"><?php echo $umur->u_62_p; ?></td>
    <td align="center"><?php echo $umur->u_62; ?></td>
  </tr>
 <tr>
    
    <td>63 Tahun</td>
    <td align="center"><?php echo $umur->u_63_l; ?></td>
    <td align="center"><?php echo $umur->u_63_p; ?></td>
    <td align="center"><?php echo $umur->u_63; ?></td>
  </tr>
 <tr>
    
    <td>64 Tahun</td>
    <td align="center"><?php echo $umur->u_64_l; ?></td>
    <td align="center"><?php echo $umur->u_64_p; ?></td>
    <td align="center"><?php echo $umur->u_64; ?></td>
  </tr>
 <tr>
    
    <td>65 Tahun</td>
    <td align="center"><?php echo $umur->u_65_l; ?></td>
    <td align="center"><?php echo $umur->u_65_p; ?></td>
    <td align="center"><?php echo $umur->u_65; ?></td>
  </tr>
 <tr>
    
    <td>66 Tahun</td>
    <td align="center"><?php echo $umur->u_66_l; ?></td>
    <td align="center"><?php echo $umur->u_66_p; ?></td>
    <td align="center"><?php echo $umur->u_66; ?></td>
  </tr>
 <tr>
    
    <td>67 Tahun</td>
    <td align="center"><?php echo $umur->u_67_l; ?></td>
    <td align="center"><?php echo $umur->u_67_p; ?></td>
    <td align="center"><?php echo $umur->u_67; ?></td>
  </tr>
   <tr>
    
    <td>68 Tahun</td>
    <td align="center"><?php echo $umur->u_68_l; ?></td>
    <td align="center"><?php echo $umur->u_68_p; ?></td>
    <td align="center"><?php echo $umur->u_68; ?></td>
  </tr>

 <tr>
    
    <td>69 Tahun</td>
    <td align="center"><?php echo $umur->u_69_l; ?></td>
    <td align="center"><?php echo $umur->u_69_p; ?></td>
    <td align="center"><?php echo $umur->u_69; ?></td>
  </tr>

 <tr>
    
    <td>70 Tahun</td>
    <td align="center"><?php echo $umur->u_70_l; ?></td>
    <td align="center"><?php echo $umur->u_70_p; ?></td>
    <td align="center"><?php echo $umur->u_70; ?></td>
  </tr>

 <tr>
    
    <td>71 Tahun</td>
    <td align="center"><?php echo $umur->u_71_l; ?></td>
    <td align="center"><?php echo $umur->u_71_p; ?></td>
    <td align="center"><?php echo $umur->u_71; ?></td>
  </tr>

 <tr>
    
    <td>72 Tahun</td>
    <td align="center"><?php echo $umur->u_72_l; ?></td>
    <td align="center"><?php echo $umur->u_72_p; ?></td>
    <td align="center"><?php echo $umur->u_72; ?></td>
  </tr>

 <tr>
    
    <td>73 Tahun</td>
    <td align="center"><?php echo $umur->u_73_l; ?></td>
    <td align="center"><?php echo $umur->u_73_p; ?></td>
    <td align="center"><?php echo $umur->u_73; ?></td>
  </tr>

 <tr>
    
    <td>74 Tahun</td>
    <td align="center"><?php echo $umur->u_74_l; ?></td>
    <td align="center"><?php echo $umur->u_74_p; ?></td>
    <td align="center"><?php echo $umur->u_74; ?></td>
  </tr>

 <tr>
    
    <td>75 Tahun</td>
    <td align="center"><?php echo $umur->u_75_l; ?></td>
    <td align="center"><?php echo $umur->u_75_p; ?></td>
    <td align="center"><?php echo $umur->u_75; ?></td>
  </tr>

  <tr>
    
    <td>>75 Tahun</td>
    <td align="center"><?php echo $umur->u_b75_l; ?></td>
    <td align="center"><?php echo $umur->u_b75_p; ?></td>
    <td align="center"><?php echo $umur->u_b75; ?></td>
  </tr>



 <!--  <tr>
    
   
    <td>&nbsp;</td>
    <th>Jumlah</th>
    <th align="center"><?php  echo $jumlah_l = 
    $umur->u_0_5_l + 
    $umur->u_6_10_l +  
    $umur->u_11_20_l +
    $umur->u_21_30_l +
    $umur->u_31_40_l +
    $umur->u_41_50_l +
    $umur->u_51_60_l +
    $umur->u_61_70_l +
    $umur->u_70_l  ?></th>
    <th align="center"><?php  echo $jumlah_p = 
    $umur->u_0_5_p + 
    $umur->u_6_10_p +  
    $umur->u_11_20_p +
    $umur->u_21_30_p +
    $umur->u_31_40_p +
    $umur->u_41_50_p +
    $umur->u_51_60_p +
    $umur->u_61_70_p +
    $umur->u_70_p  ?></th>
    <!-- <th align="center"><?php echo $jumlah_l + $jumlah_p ?></th> -->
  </tr> 
</table>
 
<p>&nbsp;</p>
 <?php  
 $this->load->view("pdf_ttd");

 ?>
</body>
</html>