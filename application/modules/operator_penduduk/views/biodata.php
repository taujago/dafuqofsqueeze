<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="agungshiro" />

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.printElement.js"></script>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function() {
	$('#printPage').printElement();
	//window.close();
});
//]]>
</script>

<link href="<?php echo base_url() ?>assets/css/styleprint.css" rel="stylesheet" media="screen" />
<link href="<?php echo base_url() ?>assets/css/print.css" rel="stylesheet" media="print" />

<style>
.wi{width:300px}
ol li{ min-width:750px; }
</style>
    <title>Sistem Informasi Desa dan Kelurahan - Biodata Penduduk</title>
</head>

<body class="surat potrait">
<div class="wrap-potrait">
   <!--  <div style="font-size: 13px;">
        <span class="label_biodata">No. KK </span>: <?php echo $no_kk; ?><div class="clear"></div>
        <span class="label_biodata">NIK </span>: <?php echo $nik; ?>
    </div> -->
    <!-- HEADER SECTION -->
    <div class="header-wrap">
        <div class="logo-wrap">
            
        </div>
        <div class="head-text" style="width: 700px;" >
            <div style="width: 86px; height: 94px; margin: 0 auto; background-color: aqua;">
            <img src="<?php echo base_url()."assets/images/garuda.png"; ?> " />
            </div>
        </div>
        <div class="logo-wrap">
            <!--- NO LOGO -->
        </div>
        <div class="clear"></div>
    </div>
    
    <!-- END OF HEADER SECTION -->
    
    <div class="body wrap">
        <!-- JUDUL DAN NOMOR SURAT -->
        <div class="no-surat-wrap">
            <div class="nama-surat">
                <h3><u>biodata penduduk warga negara indonesia</u></h3>
                <h3>NIK :  <?php echo $nik; ?></h3>
            </div>
        </div>
        <!-- KONTEN IDENTITAS-->
        <div class="content" style="font-size: 13px;">
        <p><b>DATA PERSONAL</b></p>
        <table width="100%" border="0">
          <tr>
            <td width="3%">1.</td>
            <td width="57%">Nama Lengkap </td>
            <td width="1%">:</td>
            <td width="39%"><span class="field_list"><?php echo $nama; ?></span></td>
          </tr>
          <tr>
            <td>2.</td>
            <td><span class="label_biodata" style="width: 400px;">Tempat Lahir</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $tmp_lahir; ?></span></td>
          </tr>
          <tr>
            <td>3.</td>
            <td><span class="label_biodata" style="width: 400px;">Tanggal Lahir</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $tgl_lahir; ?></span></td>
          </tr>
          <tr>
            <td>4.</td>
            <td><span class="label_biodata" style="width: 400px;">Umur</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $umur." Tahun"; ?></span></td>
          </tr>
          <tr>
            <td>5.</td>
            <td><span class="label_biodata" style="width: 400px;">Jenis Kelamin</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo strtoupper($this->cm->arr_jk[$jk]); ?></span></td>
          </tr>
          <tr>
            <td>6.</td>
            <td><span class="label_biodata" style="width: 400px;">Golongan Darah</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $golongan_darah; ?></span></td>
          </tr>
          <tr>
            <td>7.</td>
            <td><span class="label_biodata" style="width: 400px;">Agama</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $agama; ?></span></td>
          </tr>
          <tr>
            <td>8.</td>
            <td><span class="label_biodata" style="width: 400px;">Pendidikan Terakhir</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $pendidikan; ?></span></td>
          </tr>
          <tr>
            <td>9.</td>
            <td><span class="label_biodata" style="width: 400px;">Pekerjaan</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $pekerjaan; ?></span></td>
          </tr>
          <tr>
            <td>10.</td>
            <td><span class="label_biodata" style="width: 400px;">Status Perkawinan</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo strtoupper($this->cm->arr_status_kawin[$status_kawin]); ?></span></td>
          </tr>
          <tr>
            <td>11.</td>
            <td><span class="label_biodata" style="width: 400px;">Status Hub. Dlm Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $hubungan_dlm_keluarga; ?></span></td>
          </tr>
          <tr>
            <td>12.</td>
            <td><span class="label_biodata" style="width: 400px;">NIK Ibu</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $nik_ibu; ?></span></td>
          </tr>
          <tr>
            <td>13.</td>
            <td><span class="label_biodata" style="width: 400px;">Nama Ibu</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $nama_ibu; ?></span></td>
          </tr>
          <tr>
            <td>14.</td>
            <td><span class="label_biodata" style="width: 400px;">NIK Ayah</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $nik_ayah; ?></span></td>
          </tr>
          <tr>
            <td>15.</td>
            <td><span class="label_biodata" style="width: 400px;">Nama Ayah</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $nama_ayah; ?></span></td>
          </tr>
          <tr>
            <td>16.</td>
            <td><span class="label_biodata" style="width: 400px;">Alamat Sebelumnya</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo "RT $rt_sebelumnya / RW $rw_sebelumnya  "; ?></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="label_biodata">Desa/ Kel</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo "$desa_sebelumnya"; ?></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="label_biodata">Kecamatan</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $kecamatan_sebelumnya; ?></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="label_biodata">Provinsi</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $provinsi_sebelumnya ; ?></span></td>
          </tr>
          <tr>
            <td>17.</td>
            <td><span class="label_biodata" style="width: 400px;">Alamat Sekarang</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo "RT $rt / RW $rw   "; ?></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="field_list"><span class="label_biodata">Desa/ Kel</span></span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo "$desa"; ?></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="label_biodata">Kecamatan</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $kecamatan; ?></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="label_biodata">Kab/Kota</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $kota ; ?></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="label_biodata">Provinsi</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $provinsi ; ?></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><b>DATA KEPEMILIKAN DOKUMEN</b></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>18.</td>
            <td><span class="label_biodata" style="width: 400px;">Nomor Kartu Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $no_kk; ?></span></td>
          </tr>
          <tr>
            <td>19.</td>
            <td><span class="label_biodata" style="width: 400px;">Tanggal Akte Kelahiran</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo flipdate (isset($tanggal_akte)?$tanggal_akte:"") ?></span></td>
          </tr>
          <tr>
            <td>20.</td>
            <td><span class="label_biodata" style="width: 400px;">Akseptor KB</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo isset($akseptor_kb)?$akseptor_kb:"" ?></span></td>
          </tr>
          <tr>
            <td>21.</td>
            <td><span class="label_biodata" style="width: 400px;">Cacat Menurut Jenis</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php 
				if(!empty($penduduk_cacat)){
					foreach($penduduk_cacat as $val)
					{
						echo $val;
						echo "<br>";
					}
				}
				else echo "";
				?>
            </span></td>
          </tr>
          <tr>
            <td>22.</td>
            <td><span class="label_biodata" style="width: 400px;">Status Kepemilkan Rumah</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo isset($status_kepemilikan_rumah)?$status_kepemilikan_rumah:"" ?></span></td>
          </tr>
          <tr>
            <td>23.</td>
            <td><span class="label_biodata" style="width: 400px;">Jumlah Penghasilan Perbulan</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo isset($penghasilan)?$penghasilan:"" ?></span></td>
          </tr>
          <tr>
            <td>24.</td>
            <td><span class="label_biodata" style="width: 400px;">Jumlah Pengeluaran Perbulan</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo isset($pengeluaran)?$pengeluaran:"" ?></span></td>
          </tr>
          <tr>
            <td>25.</td>
            <td><span class="label_biodata" style="width: 400px;">Kepemilikan Lahan Pertanian</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo isset($kepemilikan_lahan)?$kepemilikan_lahan:"" ?></span></td>
          </tr>
          <tr>
            <td>26.</td>
            <td><span class="label_biodata" style="width: 400px;">Produksi Tanaman Pangan Menurut Komoditas Tahun Ini</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_produksi_tanaman_pangan) != 0) { ?>
            </span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><table border="1"  style="font-size:12px;margin-bottom:20px" width="100%"  cellspacing="0">
                <tr>
                    <th width="200px">Nama Komoditi</th>
                    <th width="80px">Luas Lahan (are)</th>
                    <th width="80px">Hasil (Kg)</th>
                    <th width="400px">Pemasaran Hasil</th>
                </tr>
                <?php foreach($penduduk_produksi_tanaman_pangan as $val) { ?>
                <tr>
                    <td valign="top"><?php echo $val->produksi_tanaman_pangan ?></td>
                    <td valign="top"><?php echo $val->lahan_tanaman_pangan ?></td>
                    <td valign="top"><?php echo $val->hasil_tanaman_pangan ?></td>
                    <td valign="top"><?php echo $val->pemasaran_hasil ?></td>
                </tr>
                <?php } ?>
            	</table>  <?php } 
				else echo "";
				?>				</td>
          </tr>
          <tr>
            <td>27.</td>
            <td><span class="label_biodata" style="width: 400px;">Produksi Tanaman Buah-Buahan Pada Tahun Ini</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_produksi_tanaman_buah) != 0) { ?>
            </span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><table border="1"  style="font-size:12px;margin-bottom:20px" width="100%"  cellspacing="0">
                <tr>
                    <th width="200px">Nama Komoditi</th>
                    <th width="80px">Luas Lahan (are)</th>
                    <th width="80px">Hasil (Kg)</th>
                    <th width="400px">Pemasaran Hasil</th>
                </tr>
                <?php foreach($penduduk_produksi_tanaman_pangan as $val) { ?>
                <tr>
                    <td valign="top"><?php echo $val->produksi_tanaman_pangan ?></td>
                    <td valign="top"><?php echo $val->lahan_tanaman_pangan ?></td>
                    <td valign="top"><?php echo $val->hasil_tanaman_pangan ?></td>
                    <td valign="top"><?php echo $val->pemasaran_hasil ?></td>
                </tr>
                <?php } ?>
            	</table>
                <?php } 
				else echo "";
				?></td>
          </tr>
          <tr>
            <td>28.</td>
            <td><span class="label_biodata" style="width: 400px;">Produksi Tanaman Obat pada Tahun Ini</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_produksi_tanaman_obat) != 0) { ?>
            </span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><table border="1"  style="font-size:12px;margin-bottom:20px" width="100%"  cellspacing="0">
                <tr>
                    <th width="200px">Nama Tanaman Obat</th>
                    <th width="80px">Luas Lahan (are)</th>
                    <th width="80px">Hasil (Kg)</th>
                    <th width="400px">Pemasaran Hasil</th>
                </tr>
                <?php foreach($penduduk_produksi_tanaman_obat as $val) { ?>
                <tr>
                	
                    <td valign="top"><?php echo $val->produksi_tanaman_obat ?></td>
                    <td valign="top"><?php echo $val->lahan_tanaman_obat ?></td>
                    <td valign="top"><?php echo $val->hasil_tanaman_obat ?></td>
                    <td valign="top"><?php echo $val->pemasaran_hasil ?></td>
                </tr>
                <?php } ?>
            	</table>
                <?php } 
				else echo "";
				?></td>
          </tr>
          <tr>
            <td>29.</td>
            <td><span class="label_biodata" style="width: 400px;">Kepemilikan Lahan Perkebunan</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $kepemilikan_perkebunan ?></span></td>
          </tr>
          <tr>
            <td>30.</td>
            <td>Produksi Komoditas Perkebunan pada Tahun Ini</td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_produksi_perkebunan) != 0) { ?>
            </span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><table border="1"  style="font-size:12px;margin-bottom:20px" width="100%"  cellspacing="0">
                <tr>
                    <th width="200px">Jenis</th>
                    <th width="80px">Banyak Pohon (Pohon)</th>
                    <th width="80px">Hasil (Kg)</th>
                    <th width="250px">Pemasaran Hasil</th>
                </tr>
                <?php foreach($penduduk_produksi_perkebunan as $val) { ?>
                <tr>
                	
                    <td valign="top"><?php echo $val->produksi_perkebunan ?></td>
                    <td valign="top"><?php echo $val->lahan_perkebunan ?></td>
                    <td valign="top"><?php echo $val->hasil_perkebunan ?></td>
                    <td valign="top"><?php echo $val->pemasaran_hasil ?></td>
                </tr>
                <?php } ?>
            	</table>
                <?php } 
				else echo "";
				?></td>
          </tr>
          <tr>
            <td>31.</td>
            <td><span class="label_biodata" style="width: 400px;">Kepemilikan Hutan</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo $kepemilikan_hutan ?></span></td>
          </tr>
          <tr>
            <td>32.</td>
            <td><span class="label_biodata" style="width: 400px;">Produksi Hasil Hutan Milik Keluarga pada Tahun Ini</span></td>
            <td>:</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><?php if(count($penduduk_produksi_hutan) != 0) { ?>
                <table border="1"  style="font-size:12px;margin-bottom:20px" width="100%"  cellspacing="0">
                <tr>
                    <th width="200px">Nama Hasil Hutan</th>
                    <th width="80px">Hasil</th>
                    <th width="80px">Satuan</th>
                    <th width="250px">Pemasaran Hasil</th>
                </tr>
                <?php foreach($penduduk_produksi_hutan as $val) { ?>
                <tr>
                	
                    <td valign="top"><?php echo $val->produksi_hutan ?></td>
                    <td valign="top"><?php echo $val->hasil_produksi_hutan ?></td>
                    <td valign="top"><?php echo $val->satuan ?></td>
                    <td valign="top"><?php echo $val->pemasaran_hasil ?></td>
                </tr>
                <?php } ?>
            	</table>
                <?php } 
				else echo "";
				?></td>
          </tr>
          <tr>
            <td>33.</td>
            <td><span class="label_biodata" style="width: 400px;">Kepemilikan Jenis Ternak Keluarga pada Tahun Ini</span></td>
            <td>:</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"> <?php if(count($penduduk_produksi_ternak) != 0) { ?>
                <table border="1"  style="font-size:12px;margin-bottom:20px" width="100%"  cellspacing="0">
                <tr>
                    <th width="200px">Nama Ternak</th>
                    <th width="160px">Hasil (ekor)</th>
                    <th width="250px">Pemasaran Hasil</th>
                </tr>
                <?php foreach($penduduk_produksi_ternak as $val) { ?>
                <tr>
                	
                    <td valign="top"><?php echo $val->kepemilikan_ternak ?></td>
                    <td valign="top"><?php echo $val->hasil_produksi_ternak ?></td>
                    <td valign="top"><?php echo $val->pemasaran_hasil ?></td>
                </tr>
                <?php } ?>
            	</table>
                <?php } 
				else echo "";
				?></td>
          </tr>
          <tr>
            <td>34.</td>
            <td><span class="label_biodata" style="width: 400px;">Usaha Pengolahan Hasil Ternak</span></td>
            <td>:</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"> <?php if(count($penduduk_produksi_pengolahan_ternak) != 0) { ?>
                <table border="1"  style="font-size:12px;margin-bottom:20px" width="100%"  cellspacing="0">
                <tr>
                    <th width="200px">Nama Hasil Ternak</th>
                    <th width="80px">Banyaknya Produksi</th>
                    <th width="80px">Satuan</th>
                    <th width="250px">Pemasaran Hasil</th>
                </tr>
                <?php foreach($penduduk_produksi_pengolahan_ternak as $val) { ?>
                <tr>
                	
                    <td valign="top"><?php echo $val->pengolahan_ternak ?></td>
                    <td valign="top"><?php echo $val->hasil_produksi_pengolahan_ternak ?></td>
                    <td valign="top"><?php echo $val->satuan ?></td>
                    <td valign="top"><?php echo $val->pemasaran_hasil ?></td>
                </tr>
                <?php } ?>
            	</table>
                <?php } 
				else echo "";
				?></td>
          </tr>
          <tr>
            <td>35.</td>
            <td><span class="label_biodata" style="width: 400px;">Alat Produksi Budidaya Ikan</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo isset($alat_produksi_ikan)?$alat_produksi_ikan:"" ?></span></td>
          </tr>
          <tr>
            <td>36.</td>
            <td><span class="label_biodata" style="width: 400px;">Produksi Perikanan</span></td>
            <td>:</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"> <?php if(count($penduduk_produksi_perikanan) != 0) { ?>
                <table border="1" style="font-size:12px;margin-bottom:20px" width="100%"  cellspacing="0">
                <tr>
                    <th width="200px">Nama Ikan</th>
                    <th width="160px">Hasil</th>
                    <th width="250px">Pemasaran Hasil</th>
                </tr>
                <?php foreach($penduduk_produksi_perikanan as $val) { ?>
                <tr>
                	
                    <td valign="top"><?php echo $val->produksi_perikanan ?></td>
                    <td valign="top"><?php echo $val->hasil_produksi_perikanan ?></td>
                    <td valign="top"><?php echo $val->pemasaran_hasil ?></td>
                </tr>
                <?php } ?>
            	</table>
                <?php } 
				else echo "";
				?></td>
          </tr>
          <tr>
            <td>37.</td>
            <td><span class="label_biodata" style="width: 400px;">Produksi Bahan Galian</span></td>
            <td>:</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><?php if(count($penduduk_produksi_bahan_galian) != 0) { ?>
                <table border="1"  style="font-size:12px;margin-bottom:20px" width="100%"  cellspacing="0">
                <tr>
                    <th width="200px">Nama Bahan Galian</th>
                    <th width="80px">Produksi/th</th>
                    <th width="80px">Satuan</th>
                    <th width="80px">Milik Adat</th>
                    <th width="80px">Milik Perorangan</th>
                    <th width="250px">Pemasaran Hasil</th>
                </tr>
                <?php foreach($penduduk_produksi_bahan_galian as $val) { ?>
                <tr>
                	
                    <td valign="top"><?php echo $val->bahan_galian ?></td>
                    <td valign="top"><?php echo $val->hasil_bahan_galian ?></td>
                    <td valign="top"><?php echo $val->satuan ?></td>
                    <td valign="top"><?php echo ($val->milik_adat) == 1 ?"Ya":"Tidak" ?></td>
                    <td valign="top"><?php echo ($val->milik_perorangan) == 1 ?"Ya":"Tidak" ?></td>
                    <td valign="top"><?php echo $val->pemasaran_hasil ?></td>
                </tr>
                <?php } ?>
            	</table>
            <?php } 
				else echo "";
				?></td>
          </tr>
          <tr>
            <td>38.</td>
            <td><span class="label_biodata" style="width: 400px;">Sumber Air Minum yang Digunakan Anggota Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo isset($sumber_air)?$sumber_air:"" ?></span></td>
          </tr>
          <tr>
            <td>39.</td>
            <td><span class="label_biodata" style="width: 400px;">Kualitas Air Minum yang Digunakan Anggota Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo isset($kualitas_air)?$kualitas_air:"" ?></span></td>
          </tr>
          <tr>
            <td>40.</td>
            <td><span class="label_biodata" style="width: 400px;">Pemanfaatan Danau/Sungai/Waduk/Situ/Mata air oleh Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php 
				foreach($penduduk_pemanfaatan_danau as $val)
				{
					echo $val;
					echo "<br>";
				}
				?>
            </span></td>
          </tr>
          <tr>
            <td>41.</td>
            <td><span class="label_biodata" style="width: 400px;">Lembaga Pemerintahan yang Diikuti Anggota Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo isset($lembaga_diikuti)?$lembaga_diikuti:"" ?></span></td>
          </tr>
          <tr>
            <td>42.</td>
            <td><span class="label_biodata" style="width: 400px;">Lembaga Kemasyarakatan yang Diikuti Anggota Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo isset($lembaga_kemasyarakatan)?$lembaga_kemasyarakatan:"" ?></span></td>
          </tr>
          <tr>
            <td>43.</td>
            <td><span class="label_biodata" style="width: 400px;">Partai Politik yang Diikuti Anggota Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo isset($partai_politik)?$partai_politik:"" ?></span></td>
          </tr>
          <tr>
            <td>44.</td>
            <td><span class="label_biodata" style="width: 400px;">Lembaga Politik yang Diikuti Anggota Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo isset($lembaga_politik)?$lembaga_politik:"" ?></span></td>
          </tr>
          <tr>
            <td>45.</td>
            <td><span class="label_biodata" style="width: 400px;">Lembaga Ekonomi yang Dimiliki oleh Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(isset($penduduk_lembaga_ekonomi)){
					foreach($penduduk_lembaga_ekonomi as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>46.</td>
            <td><span class="label_biodata" style="width: 400px;">Lembaga Pendidikan yang Dimiliki oleh Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(isset($penduduk_lembaga_pendidikan)){
					foreach($penduduk_lembaga_pendidikan as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>47.</td>
            <td><span class="label_biodata" style="width: 400px;">Penguasaan Aset Tanah Oleh Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo isset($aset_tanah)?$aset_tanah:"" ?></span></td>
          </tr>
          <tr>
            <td>48</td>
            <td><span class="label_biodata" style="width: 400px;">Aset Transportasi Umum yang Dimiliki</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(isset($penduduk_aset_transportasi)){
					foreach($penduduk_aset_transportasi as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>49.</td>
            <td><span class="label_biodata" style="width: 400px;">Aset Sarana Produksi yang Dimiliki</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(isset($penduduk_aset_produksi)){
					foreach($penduduk_aset_produksi as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>50.</td>
            <td><span class="label_biodata" style="width: 400px;">Aset Perumahan </span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(isset($penduduk_aset_perumahan)){
					foreach($penduduk_aset_perumahan as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>51.</td>
            <td><span class="label_biodata" style="width: 400px;">Aset Lainnya</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(isset($penduduk_aset_lainnya)){
					foreach($penduduk_aset_lainnya as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>52.</td>
            <td><span class="label_biodata" style="width: 400px;">Kualitas Ibu Hamil dalam Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(isset($penduduk_kualitas_hamil)){
					foreach($penduduk_kualitas_hamil as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>53.</td>
            <td><span class="label_biodata" style="width: 400px;">Kualitas Bayi dalam Keluarga </span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_kualitas_bayi) != 0){
					foreach($penduduk_kualitas_bayi as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>54.</td>
            <td><span class="label_biodata" style="width: 400px;">Kualitas Persalinan</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_kualitas_persalinan) != 0){
					foreach($penduduk_kualitas_persalinan as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>55.</td>
            <td><span class="label_biodata" style="width: 400px;">Cakupan Immunisasi</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_cakupan_immunisasi) != 0){
					foreach($penduduk_cakupan_immunisasi as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>56.</td>
            <td><span class="label_biodata" style="width: 400px;">Penderita Sakit dan Kelainan dalam Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_penderita_sakit) != 0){
					foreach($penduduk_penderita_sakit as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>57.</td>
            <td><span class="label_biodata" style="width: 400px;">Perilaku Hidup Bersih dan Sehat</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo !empty($hidup_sehat)?$hidup_sehat:"" ?></span></td>
          </tr>
          <tr>
            <td>58.</td>
            <td><span class="label_biodata" style="width: 400px;">Pola Makan Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo !empty($pola_makan)?$pola_makan:"" ?></span></td>
          </tr>
          <tr>
            <td>59.</td>
            <td><span class="label_biodata" style="width: 400px;">Kebiasaan Berobat Bila Sakit dalam Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo !empty($kebiasaan_berobat)?$kebiasaan_berobat:"" ?></span></td>
          </tr>
          <tr>
            <td>60.</td>
            <td><span class="label_biodata" style="width: 400px;">Status Gizi Balita dalam Keluarga </span></td>
            <td>:</td>
            <td><span class="field_list"><?php echo !empty($status_gizi)?$status_gizi:"" ?></span></td>
          </tr>
          <tr>
            <td>61.</td>
            <td><span class="label_biodata" style="width: 400px;">Jenis Penyakit yang Diderita Anggota Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_jenis_penyakit) != 0){
					foreach($penduduk_jenis_penyakit as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>62.</td>
            <td><span class="label_biodata" style="width: 400px;">Kerukunan</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_kerukunan) != 0){
					foreach($penduduk_kerukunan as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>63.</td>
            <td><span class="label_biodata" style="width: 400px;">Perkelahian</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_perkelahian) != 0){
					foreach($penduduk_perkelahian as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>64.</td>
            <td><span class="label_biodata" style="width: 400px;">Pencurian</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_pencurian) != 0){
					foreach($penduduk_pencurian as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>65.</td>
            <td><span class="label_biodata" style="width: 400px;">Penjaraha</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_penjarahan) != 0){
					foreach($penduduk_penjarahan as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>66.</td>
            <td><span class="label_biodata" style="width: 400px;">Perjudian</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_perjudian) != 0){
					foreach($penduduk_perjudian as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>67.</td>
            <td><span class="label_biodata" style="width: 400px;">Pemakai Miras dan Narkoba</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_miras) != 0){
					foreach($penduduk_miras as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>68.</td>
            <td><span class="label_biodata" style="width: 400px;">Pembunuhan</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_pembunuhan) != 0){
					foreach($penduduk_pembunuhan as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>69.</td>
            <td><span class="label_biodata" style="width: 400px;">Penculikan</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_penculikan) != 0){
					foreach($penduduk_penculikan as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>70.</td>
            <td><span class="label_biodata" style="width: 400px;">Kejahatan Seksual</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_kejahatan_seksual) != 0){
					foreach($penduduk_kejahatan_seksual as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>71.</td>
            <td><span class="label_biodata" style="width: 400px;">Kekerasan dalam Keluarga / Rumah tangga</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_kekerasan_rumah) != 0){
					foreach($penduduk_kekerasan_rumah as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>72.</td>
            <td><span class="label_biodata" style="width: 400px;">Kedudukan Anggota Keluarga sebagai Wajib Pajak dan Retrebusi</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_kedudukan_pajak) != 0){
					foreach($penduduk_kedudukan_pajak as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
          <tr>
            <td>73.</td>
            <td><span class="label_biodata" style="width: 400px;">Masalah Kesejahteraan Keluarga</span></td>
            <td>:</td>
            <td><span class="field_list">
              <?php if(count($penduduk_kesejahteraan_kel) != 0){
					foreach($penduduk_kesejahteraan_kel as $val){
						echo $val;
						echo "<br>";
					}
				}
				else{ echo ""; }
				?>
            </span></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        </div>
        <!-- KONTEN FOOTER TANDA TANGAN lurah 1 -->
        <div class="content" style="font-size: 13px; line-height: 22px;">
            <div class="ttd-camat">
                <div class="tgl-surat">Yang Bersangkutan</div>
                <div class="jabatan"><br /></div>
                <div class="nama-lurah"><u><?php echo $nama ?></u></div>
            </div>
            <div class="ttd-single-wrap">
                <div class="tgl-surat"><?php echo $kota; ?>, <?php echo date("d-m-Y"); ?></div>
                <div class="jabatan">Camat <?php echo $kecamatan; ?></div>
                <div class="nama-lurah" ><?php echo $this->cm->desa->nama_camat; ?></div>
                <div style="align:left;" >NIP : <?php echo $this->cm->desa->nip_camat; ?></div>
                <div style="align:left;" >PANGKAT. <?php echo $this->cm->desa->pangkat_camat; ?></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
</body>
</html>
