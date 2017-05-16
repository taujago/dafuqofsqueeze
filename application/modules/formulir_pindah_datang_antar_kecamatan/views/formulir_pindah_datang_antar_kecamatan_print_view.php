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

  <div align="right"><h2>F-1.31</h2></div>
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
            </td></tr>
      <tr>
        <td>DUSUN/DUKUH/KAMPUNG</td>
        <td>:</td>

        <td> 
         <table width="418%" class="tabel">
            <tr>
                <td>
                <?php echo $kepala_keluarga_dusun_sebelumnya ?>  
                </td>
            </tr>
          </table> 

        </td>
    </tr>
      
      
</table>
 <p>
<center>
  <h2>FORMULIR PERMOHONAN PINDAH DATANG WNI<br>Antar Desa/Kelurahan Dalam Satu Kecamatan <br>No. <?php echo $no_formulir ?></h2>
   </p></center>
   <h2>DATA DAERAH ASAL</h2>

 <table width="100%">
      <tr>
        <td width="19%">
          <table width="95%" class="tabel">
                  <tr>
                    <td>
                      1. Nomor Kartu Keluarga
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
                $arr1 = str_split($kepala_keluarga_kk);
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
                      2. Nama Kepala Keluarga
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
                $arr1 = str_split($kepala_keluarga_nama);
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
                3. Alamat 
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
                <?php echo $kepala_keluarga_alamat_sebelumnya ?>
              </td>
            </tr>
          </table>
        </td>
        <table width="100%">
       <tr>
         <td width="203">&nbsp;</td>
         <td width="14">&nbsp;</td>
       <td width="125">
         Dusun/Dukuh/Kampung       </td>  
        <td width="285"> 
           <table width="96%" class="tabel">
           <tr>
              <td>
               <?php echo $kepala_keluarga_dusun_sebelumnya ?>              </td>
            </tr>
          </table>
         <td width="120">
           <table width="100%">
      <tr>
        <td width="7%"></td>
        <td width="13.5%">        </td>
        <td width="9%">
          RT        </td>
        <td width="35%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($kepala_keluarga_rt_sebelumnya);
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
                $arr1 = str_split($kepala_keluarga_rw_sebelumnya);
                foreach ($arr1 as $v) {
                echo "<td>&nbsp;".$v."&nbsp;</td>";
                }
              ?>
        
      
            </tr>
          </table>
        </td>
      </tr>
</table>
         </td>
        <td width="317"> 
         </tr>
     
</table>
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
                <?php echo $kepala_keluarga_desa_sebelumnya ?>             </td>
            </tr>
          </table>
         <td width="120">
          c. Kecamatan        </td>
        <td width="317"> 
           <table width="77%" class="tabel">
           <tr>
              <td>
               <?php echo $kepala_keluarga_kecamatan_sebelumnya ?>          </td>
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
                 <?php echo $kepala_keluarga_kota_sebelumnya ?>          </td>
            </tr>
          </table>        </td>
        <td>
          d. Provinsi        </td>
        <td> 
           <table width="77%" class="tabel">
           <tr>
              <td>
                <?php echo $kepala_keluarga_provinsi_sebelumnya ?>              </td>
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
                $arr1 = str_split($kepala_keluarga_pos_sebelumnya);
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
                $arr1 = str_split($kepala_keluarga_telepon);
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
                4. Nik Pemohon
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
                5. Nama Pemohon
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

      
       <td>
          <table width="400%"  border='0'">
            <tr>
              <td>
               <h2>DATA DAERAH TUJUAN</h2>
              </td>
            </tr>
          </table> 
        </td>
<table width="100%">
      <tr>
        <td><table width="95%" class="tabel">
                  <tr>
                    <td>
                      1. Status No. KK Bagi Yang Pindah                  </td>
                  </tr>
          </table>  </td>
        <td>:</td>
        <td><table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($status);
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
        <td>1. Numpang KK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Membuat KK Baru &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Nomor KK Tetap </td>
      </tr>
      <tr>
        <td width="19%">                </td>
        <td width="2%">&nbsp;</td>
        <td width="79%"></td>
      </tr>
	  <tr>
        <td><table width="95%" class="tabel">
                  <tr>
                    <td>
                      2. Nomor Kartu Keluarga                  </td>
                  </tr>
          </table>  </td>
        <td>:</td>
        <td><table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($tujuan_no_kk1);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>   </td>
      </tr>
        <tr>
        <td><table width="95%" class="tabel">
                  <tr>
                    <td>
                      3. Nik Kepala Keluarga                  </td>
                  </tr>
          </table>  </td>
        <td>:</td>
        <td><table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($tujuan_nik);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>   </td>
      </tr>
       <tr>
        <td><table width="95%" class="tabel">
                  <tr>
                    <td>
                      4. Nama Kepala Keluarga                  </td>
                  </tr>
          </table>  </td>
        <td>:</td>
        <td><table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($tujuan_nama);
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>   </td>
      </tr>
       <tr>
        <td><table width="95%" class="tabel">
                  <tr>
                    <td>
                      5. Tanggal Kedatangan                 </td>
                  </tr>
          </table>  </td>
        <td>:</td>
        <td><table class="tabel">
            <tr>
              <?php
                $arr1 = str_split(flipdate($tanggal_kedatangan));
                foreach ($arr1 as $v) {
                  echo "<td>&nbsp;".$v."&nbsp;</td>";

                }
              ?>
            </tr>
          </table>   </td>
      </tr>
      <tr>
       <td>
          <table width="95%" class="tabel">
            <tr>
              <td>
                6. Alamat 
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
                <?php echo $tujuan_alamat ?>
              </td>
            </tr>
          </table>
        </td>
        <table width="100%">
       <tr>
         <td width="203">&nbsp;</td>
         <td width="14">&nbsp;</td>
       <td width="125">
         Dusun/Dukuh/Kampung       </td>  
        <td width="285"> 
           <table width="96%" class="tabel">
           <tr>
              <td>
               <?php echo $tujuan_dusun ?>              </td>
            </tr>
          </table>
         <td width="120">
         <table width="100%">
      <tr>
        <td width="7%"></td>
        <td width="13.5%">        </td>
        <td width="9%">
          RT        </td>
        <td width="35%"> 
          <table class="tabel">
            <tr>
              <?php
                $arr1 = str_split($tujuan_rt);
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
                $arr1 = str_split($tujuan_rw);
                foreach ($arr1 as $v) {
                echo "<td>&nbsp;".$v."&nbsp;</td>";
                }
              ?>
        
      
            </tr>
          </table>
        </td>
      </tr>
</table>
            </td>
        <td width="317"> 
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
                <?php echo $desa2->desa ?>             </td>
            </tr>
          </table>
         <td width="120">
          c. Kecamatan        </td>
        <td width="317"> 
           <table width="77%" class="tabel">
           <tr>
              <td>
               <?php echo $desa2->kecamatan ?>          </td>
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
                 <?php echo $desa2->kota ?>          </td>
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
                $arr1 = str_split($desa2->kodepos);
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
                $arr1 = str_split($tujuan_telpon);
                foreach ($arr1 as $v) {
                echo "<td>&nbsp;".$v."&nbsp;</td>";
                }
              ?>
        
      
            </tr>
          </table>
        </td>
      </tr>
</table>
</table>

  

<p>7. Keluarga Yang Datang </p>
<table width="100%" border="0.5" cellpadding="3" class="tabel">
<tr><th width="5%"  align="center">No.</th>
  <th width="30%" align="center">NIK</th>
  <th width="30%"  align="center">Nama </th>
  <th width="30%"  align="center">Masa Berlaku KTP S/D </th>
<th width="15%" align="center">SHDK</th>

</tr>
<?php 
  
	 
$baris = 0; $i=0;
if($record->num_rows() > 0 ) {	
 
	foreach($record->result() as $row) :
		$baris--;

		$i++;
		echo "<tr>
		<td><center>$i.</center></td> 
    <td>$row->nik </td> 
    <td>$row->nama </td>
    <td>$row->masa_berlaku_ktp </td> 
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
    <td width="7%" align="center"><font size="10"></td>
    <td width="4%">&nbsp;</td>
    <td width="22%" align="center">Mengetahui,<font size="10"></td>
  <td width="43%" align="center"><?php echo $desa2->desa.", ". tgl_indo(flipdate($tanggal)); ?></td>
  </tr>
 
  <tr>
    <td align="center">&nbsp;</td>
  
    <td align="center"></td>
   <?php 
    if($ttd <> "kepala") {  ?>
    <td align="center"></td>
    <td align="center"><font size="10">a.n KEPALA DESA </td>
  <?php } ?>
    <td align="center">&nbsp;</td>
  </tr>
  
  <tr>
    <td align="center">PETUGAS REGISTRASI </td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><font size="10"><?php echo strtoupper($ttd_jabatan) ?></td>
     <td><div align="center">PEMOHON</div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
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
    <td align="center"><?php echo $petugas; ?><br></td>
    <td align="center">&nbsp;</td>
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
   <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Keterangan : </strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"></td>
  <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">- Untuk klasifikasi 3 (antar kecamatan dalam satu Kabupaten/Kota) selain ditandatangani oleh Pemohon juga
diketahui oleh Kepala Desa/Lurah.</td>
  </tr>

</table>


<?php }  ?>
<br /> <br /><br />
</body>

</html>