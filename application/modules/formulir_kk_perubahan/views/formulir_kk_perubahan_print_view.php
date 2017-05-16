<html>
  <head>
    <title>
      <?php echo   $title; ?>
    </title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/print_formulir.css">

  </head>

<body>
  
  <?php 
  $desa2 = $this->cm->data_desa();

  ?>

  <div align="right"><h2>F-1.16</h2></div>
 

  <div align="center">
  
  <h2>FORMULIR PERMOHONAN PERUBAHAN KARTU KELUARGA ( KK ) WARGA NEGARA INDONESIA</h2></div>
<br>
  <font size="10">
  <table width="100%">
      <tr>
        <td width="19%">
          PROVINSI        </td>
        <td width="2%">
          :        </td>
        <td width="11%"> 
          <table class="tabel">
            <tr>
                <?php
                  $arr1 = str_split($desa2->id_provinsi);
                  foreach ($arr1 as $v) {
                    echo "<td>&nbsp;".$v."&nbsp;</td>";
                  }
                ?>
            </tr>
          </table>  
        </td>
        <td width="68%">
          <table width="50%" class="tabel">
            <tr>
                <td>
                <?php echo $desa2->provinsi; ?>
                </td>
            </tr>
          </table>  
        </td>
      </tr>
      <tr>
        <td>KABUPATEN/KOTA</td>
        <td>:</td>
          <td>  
            <table class="tabel">
            <tr>
        <?php
          $arr1 = str_split($desa2->kode_kabupaten);
          foreach ($arr1 as $v) {
           echo "<td>&nbsp;".$v."&nbsp;</td>";

          }
        ?>
         </tr>
          </table>  
          </td>
          <td> 
          <table width="50%" class="tabel">
            <tr>
                <td>
                <?php echo $desa2->kota; ?> 
                </td>
            </tr>
          </table>  

          </td>

    </tr>
      <tr>
        <td >KECAMATAN</td>
        <td>:</td>
          <td> 
            <table class="tabel">
              <tr>
      <?php

        $arr1 = str_split($desa2->kode_kecamatan);
        foreach ($arr1 as $v) {
           echo "<td>&nbsp;".$v."&nbsp;</td>";

        }
      ?>
        
      
            </tr>
          </table></td>
            <td> 
             <table width="50%" class="tabel">
            <tr>
                <td>
                 <?php echo $desa2->kecamatan; ?>  
                </td>
            </tr>
          </table>  


           </td></tr>
      <tr>
        <td>KELURAHAN/DESA</td>
        <td>:</td>

           
        <td> 
           <table class="tabel">
            <tr>
      <?php

        $arr1 = str_split($desa2->kode_surat);
        foreach ($arr1 as $v) {
           echo "<td>&nbsp;".$v."&nbsp;</td>";

        }
      ?>
        
      
            </tr>
          </table></td>
        <td> 
         <table width="50%" class="tabel">
            <tr>
                <td>
                <?php echo $desa2->desa ?>  
                </td>
            </tr>
          </table> 

        </td>
    </tr>
      
      
</table>
<br>
 <table width="100%">
      <tr>
        <td width="19%">
          <table width="95%" class="tabel">
                  <tr>
                    <td>
                      1. Nama Pemohon 
                    </td>
                  </tr>
          </table> 
        </td>
        <td>
          :        
        </td>
        <td> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($pemohon_nama);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table width="95%" class="tabel">
                  <tr>
                    <td>
                      2. NIK Pemohon 
                    </td>
                  </tr>
          </table> 
        </td>
        <td>
          :
        </td>
        <td>  
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($pemohon_nik);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>  
        </td>
      </tr>

      <tr>
        <td>
          <table width="95%" class="tabel">
            <tr>
              <td>
                3. Nama Kepala Keluarga
              </td>
            </tr>
          </table> 
        </td>
        <td>
          :
        </td>
          <td> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kk_diikuti_nama);
                foreach ($arr1 as $v) {
                echo "<td>&nbsp;".$v."&nbsp;</td>";
                }
              ?>
        
      
            </tr>
          </table>
          </td>
      </tr>

        <tr>
        <td>
          <table width="95%" class="tabel">
            <tr>
              <td>
                4. No KK
              </td>
            </tr>
          </table> 
        </td>
        <td>
          :
        </td>
          <td> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kk_diikuti_no_kk);
                foreach ($arr1 as $v) {
                echo "<td>&nbsp;".$v."&nbsp;</td>";
                }
              ?>
        
      
            </tr>
          </table>
          </td>
      </tr>

      <tr>
       <td>
          <table width="95%" class="tabel">
            <tr>
              <td>
                5. Alamat 
              </td>
            </tr>
          </table> 
        </td>
        <td>
          :
        </td>  
        <td> 
           <table width="58%" class="tabel">
           <tr>
              <td>
                <?php echo $kk_diikuti_alamat ?>
              </td>
            </tr>
          </table>
        </td>
       <table width="100%">
      <tr>
        <td width="7%"></td>
        <td width="13.5%">        </td>
        <td width="9%">
          RT        </td>
        <td width="15%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kk_diikuti_rt);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
        </table>        
        <td width="7%">
          RW       </td>
        <td width="0%"> 
        <td width="49%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kk_diikuti_rw);
                foreach ($arr1 as $v) {
                echo "<td>&nbsp;".$v."&nbsp;</td>";
                }
              ?>
        
      
            </tr>
          </table>
        </td>
      </tr>
</table>
      </tr>
</table>
      <table width="100%">
       <tr>
         <td width="203">&nbsp;</td>
         <td width="14">&nbsp;</td>
       <td width="125">
         a. Desa/Kelurahan        </td>  
        <td width="285"> 
           <table width="96%" class="tabel">
           <tr>
              <td>
               <?php echo $kk_diikuti_desa ?>              </td>
            </tr>
          </table>
         <td width="120">
          c. Kecamatan        </td>
        <td width="317"> 
           <table width="77%" class="tabel">
           <tr>
              <td>
               <?php echo $kk_diikuti_kecamatan ?>              </td>
            </tr>
        </table>      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
       <td>
         b. Kab/Kota        </td>  
        <td> 
           <table width="96%" class="tabel">
           <tr>
              <td>
                <?php echo $kk_diikuti_kota ?>              </td>
            </tr>
          </table>        </td>
        <td>
          d. Provinsi        </td>
        <td> 
           <table width="77%" class="tabel">
           <tr>
              <td>
                <?php echo $desa2->provinsi ?>              </td>
            </tr>
          </table>        </td>
      </tr>
</table>
<table width="100%">
      <tr>
        <td width="7%"></td>
        <td width="13.5%">        </td>
        <td width="9%">
          Kode Pos        </td>
        <td width="15%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kk_diikuti_kode_pos);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
        </table>        
        <td width="7%">
          Telepon       </td>
        <td width="0%"> 
        <td width="49%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kk_diikuti_telepon);
                foreach ($arr1 as $v) {
                echo "<td>&nbsp;".$v."&nbsp;</td>";
                }
              ?>
        
      
            </tr>
          </table>
        </td>
      </tr>
</table>


  <table width="100%">
      <tr>
        <td width="19%">
         <!--  <table width="95%" class="tabel">
                  <tr>
                    <td>
                      1. Nama Pemohon 
                    </td>
                  </tr>
          </table>  -->
        </td>
        
        <td> 
          <!-- <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($pemohon_nama);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table> -->
        </td>
      </tr>

      <tr>
        <td>
          <table width="95%" class="tabel">
                 <!--  <tr>
                    <td>
                      2. NIK Pemohon 
                    </td>
                  </tr> -->
          </table> 
        </td>
        <td>
          :
        </td>
        <td>  
        <!--   <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($pemohon_nik);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>   -->
        </td>
      </tr>

      <tr>
        <td>
          <table width="95%" class="tabel">
            <tr>
              <td>
                6. Nama Kepala Keluarga Lama
              </td>
            </tr>
          </table> 
        </td>
        <td>
          :
        </td>
          <td> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kk_diikuti_nama_sebelumnya);
                foreach ($arr1 as $v) {
                echo "<td>&nbsp;".$v."&nbsp;</td>";
                }
              ?>
        
      
            </tr>
          </table>
          </td>
      </tr>

        <tr>
        <td>
          <table width="95%" class="tabel">
            <tr>
              <td>
                7. No KK Lama
              </td>
            </tr>
          </table> 
        </td>
        <td>
          :
        </td>
          <td> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kk_diikuti_no_kk_sebelumnya);
                foreach ($arr1 as $v) {
                echo "<td>&nbsp;".$v."&nbsp;</td>";
                }
              ?>
        
      
            </tr>
          </table>
          </td>
      </tr>

      <tr>
       <td>
          <table width="95%" class="tabel">
            <tr>
              <td>
                8. Alamat Keluarga Lama
              </td>
            </tr>
          </table> 
        </td>
        <td>
          :
        </td>  
        <td> 
           <table width="58%" class="tabel">
           <tr>
              <td>
                <?php echo $kk_diikuti_alamat_sebelumnya ?>
              </td>
            </tr>
          </table>
        </td>
        <table width="100%">
      <tr>
        <td width="7%"></td>
        <td width="13.5%">        </td>
        <td width="9%">
          RT        </td>
        <td width="15%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kk_diikuti_rt_sebelumnya);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
        </table>        
        <td width="7%">
          RW       </td>
        <td width="0%"> 
        <td width="49%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kk_diikuti_rw_sebelumnya);
                foreach ($arr1 as $v) {
                echo "<td>&nbsp;".$v."&nbsp;</td>";
                }
              ?>
        
      
            </tr>
          </table>
        </td>
      </tr>
</table>
      </tr>
</table>
      <table width="100%">
       <tr>
         <td width="203">&nbsp;</td>
         <td width="14">&nbsp;</td>
       <td width="125">
         a. Desa/Kelurahan        </td>  
        <td width="285"> 
           <table width="96%" class="tabel">
           <tr>
              <td>
               <?php echo $kk_diikuti_desa_sebelumnya ?>              </td>
            </tr>
          </table>
         <td width="120">
          c. Kecamatan        </td>
        <td width="317"> 
           <table width="77%" class="tabel">
           <tr>
              <td>
               <?php echo $kk_diikuti_kecamatan_sebelumnya ?>              </td>
            </tr>
        </table>      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
       <td>
         b. Kab/Kota        </td>  
        <td> 
           <table width="96%" class="tabel">
           <tr>
              <td>
                <?php echo $kk_diikuti_kota_sebelumnya ?>              </td>
            </tr>
          </table>        </td>
        <td>
          d. Provinsi        </td>
        <td> 
           <table width="77%" class="tabel">
           <tr>
              <td>
                <?php echo $desa2->provinsi ?>              </td>
            </tr>
          </table>        </td>
      </tr>
</table>
<table width="100%">
      <tr>
        <td width="7%"></td>
        <td width="13.5%">        </td>
        <td width="9%">
          Kode Pos        </td>
        <td width="15%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kk_diikuti_kode_pos_sebelumnya);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
        </table>        
        <td width="7%">
          Telepon       </td>
        <td width="0%"> 
        <td width="49%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kk_diikuti_telepon_sebelumnya);
                foreach ($arr1 as $v) {
                echo "<td>&nbsp;".$v."&nbsp;</td>";
                }
              ?>
        
      
            </tr>
          </table>
        </td>
      </tr>
</table>

<table width="100%">
      <tr>
        <td><table width="95%" class="tabel">
                  <tr>
                    <td>
                      9. Alasan Pemohon                    </td>
                  </tr>
          </table>  </td>
        <td>:</td>
        <td><table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($alasan);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>   </td>
      </tr>
      <tr>
        <td></td>
        <td>&nbsp;</td>
        <td>1. Karena Penambahan Anggota Keluarga (kelahiran, kedatangan) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. Lainnya </td>
      </tr>
      <tr>
        <td width="19%">                </td>
        <td width="2%">&nbsp;</td>
        <td width="79%">2. Karena Pengurangan Anggota Keluarga (kematian, kepindahan)</td>
      </tr>
	  <tr>
        <td><table width="95%" class="tabel">
                  <tr>
                    <td>
                      10. Jumlah Anggota Keluarga                  </td>
                  </tr>
          </table>  </td>
        <td>:</td>
        <td><table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($jum);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>   </td>
      </tr>
</table>
  

<p>11. DAFTAR ANGGOTA KELUARGA PEMOHON (Hanya Diisi Anggota Keluarga Saja) </p>
<table width="100%" border="0.5" cellpadding="3" class="tabel">
<tr><th width="5%"  align="center">No.</th>
  <th width="30%" align="center">NIK</th>
  <th width="30%"  align="center">Nama </th>
<th width="15%" align="center">SHDK</th>

</tr>
<?php 

	 
$baris = 0; $i=0;
if($record->num_rows() > 0 ) {	
	
	$arr_hubungan = $this->cm->arr_hubungan;
	
	foreach($record->result() as $row) :
		$baris--;
		$i++;
		echo "<tr>
		<td><center>$i.</center></td> 
    <td>$row->nik </td> 
    <td>$row->nama </td> 
    <td>$row->hubungan</td>


		
		</tr>";
	endforeach;	
}
for($x=0; $x<$baris; $x++) {
	$i++;
	echo "<tr>
		<td>$i</td> <td> </td><td> </td> <td> </td> <td> </td> <td> </td> <td> </td> 
		

		</tr>";
}
 
?>
</table>
<p></p>
<?php 
  $desa2 = $this->cm->data_desa();

  ?>
  <?php  if($desa2->bentuk_lembaga=="Kelurahan")  {  ?>
</p>

<?php }  else { ?>
<table width="100%" border="0" cellpadding="0">
  <tr>
    <td width="24%" align="center">&nbsp;</td>
    <td width="27%" align="center"><font size="10">Mengetahui,</td>
    <td width="0%">&nbsp;</td>
    <td width="21%" align="center"><font size="10"></td>
	<td width="28%" align="center">&nbsp;</td>
  </tr>
 
  <tr>
    <td align="center">&nbsp;</td>
	
    <td align="center"></td>
	 <?php 
    if($ttd <> "kepala") {  ?>
    <td align="center"></td>
    <td align="center"><font size="10">a.n KEPALA DESA </td>
	  <td></td>
  </tr>
  <?php } ?>
  <tr>
    <td align="center">KEPALA DINAS KEPENDUDUKAN DAN </td>
    <td align="center"><font size="10">CAMAT <?php echo $desa2->kecamatan ?></td>
    <td>&nbsp;</td>
    <td align="center"><font size="10"><?php echo strtoupper($ttd_jabatan) ?></td>
	   <td><div align="center">PEMOHON</div></td>
  </tr>
  <tr>
    <td><div align="center">PENCATATAN SIPIL  <?php echo $desa2->kota; ?></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
	<td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
	<td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
	<td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
	<td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><?php echo $desa2->nama_capil; ?><br>
      NIP. <?php echo $desa2->nip_capil; ?></td>
    <td align="center">
<font size="10"><?php echo $desa2->nama_camat; ?>
<font size="10"><br>
<font size="10">NIP. <?php echo $desa2->nip_camat; ?></td>
    <td>&nbsp;</td>
    <td align="center"><font size="10"><?php echo $ttd_nama; ?><br>
	<?php if($ttd == "sek") {  ?>
	<font size="10">NIP. <?php echo  $nip; ?></td>
	 <?php }  ?>
 <td align="center"><?php echo $pemohon_nama; ?> </td>
  </tr>
  <tr>
    <td align="center"></td>
    <td align="center"></td>
    <td>&nbsp;</td>
  
    <td align="center"></td>
	 <td align="center">Tanggal Pemasukan Data </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"></td>
	<td align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"></td>
    <td align="center">Paraf Petugas </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center">   </td>
	<td align="center"><table width="30%" class="tabel">
      <tr>
        <td height="65">&nbsp;</td>
      </tr>
      
    </table></td>
  </tr>
</table>


<?php }  ?>
<br /> <br /><br />
</body>

</html>